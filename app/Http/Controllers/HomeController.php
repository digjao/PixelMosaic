<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $files = File::files(public_path('images/gallery'));

        $photos = array_map(fn($f) => $f->getFilename(), $files);

        $heroPhoto = $photos[6] ?? null;

        $previewPhotos = array_slice($photos, 0, 5);

        return view('home.index', compact('previewPhotos','heroPhoto'));
    }
}
