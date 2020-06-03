<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    public function store(Request $request) {
       
        $data = $request->all();
        $path = Storage::disk('public')->put('images', $data['path']);
        dd($path);

    }

    public function update(Request $request, $id) {
        $photo = [
            'id' => 1,
            'title' => 'Titolo 1',
            'description' => 'questo testo',
            'path' => 'images/iNp8fK0KZQxzGDBakGKkK2LUNMMwIaTDiyOXPev4.jpeg'
        ];   

        $data = $request->all();
        if(isset($data['path'])) {
            Storage::disk('public')->delete($photo['path']);
        }
        //se ho $data['path'] cancello vecchia immagine e carico una nuova
        // altrimenti salvo solo altri dati

    }
}
