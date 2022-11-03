<?php

    use App\Http\Controllers\KugooSamokatRatingController;
    use App\Models\KugooSamokat;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/cache-file', function (){
    return File::get('build/manifest.json');
});

Route::prefix('api')->group(function(){
    Route::post('/add_mark', [KugooSamokatRatingController::class, 'addMark']);
    Route::get('/remove_mark', [KugooSamokatRatingController::class, 'removeMark']);
    Route::get('/get_own_mark', [KugooSamokatRatingController::class, 'getOwnMark']);
});

