<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getAll()
    {
        $tags = Tag::all();

        return response()->json([
            'result' => 'success',
            'data' => $tags,
            'count' => $tags->count()
        ]);
    }
}
