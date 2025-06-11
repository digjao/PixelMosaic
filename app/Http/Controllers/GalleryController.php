<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
{
    $files = File::files(public_path('images/gallery'));

    $photos = array_map(function($file) {
        $info = getimagesize($file->getPathname());
        return [
            'file'        => $file->getFilename(),
            'orientation' => $info[0] > $info[1] ? 'landscape' : 'portrait'
        ];
    }, $files);

    return view('gallery.index', compact('photos'));
}
}
