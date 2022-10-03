<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use League\Flysystem\Filesystem;
use League\Flysystem\StorageAttributes;

class FilesForCachingController extends Controller
{
    public function index()
    {
//        return Storage::files('build/');
        return File::get('build/manifest.json');
    }
}
