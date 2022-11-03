<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class KugooSamokatRatingController extends Controller
{
    public function addMark(Request $request)
    {
        $user_ip = $request->ip();
        $table = DB::table('kugoo_app_user_ratings');
        if($table->where('user_ip', $user_ip)->exists()){
            $table->where('user_ip', $user_ip)->update(
                [
                    'mark' => $request->mark
                ]
            );
        }
        else{
            $table->insert(
                [
                    'id' => DB::table('kugoo_app_user_ratings')->count() + 1,
                    'user_ip' => $user_ip,
                    'mark' => $request->mark
                ]
            );
        }
        return $this->updateMark();
    }

    public function removeMark(Request $request){
        $table = DB::table('kugoo_app_user_ratings');
        $find = $table->where('user_ip', $request->ip())->get();
        $table->delete($find[0]->id);
		return $this->updateMark();
    }

    public function getOwnMark(Request $request){
        $find = DB::table('kugoo_app_user_ratings')->where('user_ip', $request->ip())->value('mark');
        return $find;
    }

	public function updateMark(): bool|string
	{
        $table = DB::table('kugoo_app_user_ratings');
		$user_count = $table->count();
        $average_mark = number_format($table->average('mark'), 1, '.', '');
        return json_encode(['marks_count' => $user_count, 'average_mark' => $average_mark]);
	}
}
