<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
public function index()
{
    $files = File::files(public_path('images/gallery'));
    $photos = array_map(fn($f) => $f->getFilename(), $files);

    return view('gallery.index', compact('photos'));
}
}
