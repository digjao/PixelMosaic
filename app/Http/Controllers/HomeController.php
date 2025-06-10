<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $files = File::files(public_path('images/gallery'));

        $photos = array_map(fn($f) => $f->getFilename(), $files);

        $previewPhotos = array_slice($photos, 0, 5);

        return view('home', compact('previewPhotos'));
    }
}
