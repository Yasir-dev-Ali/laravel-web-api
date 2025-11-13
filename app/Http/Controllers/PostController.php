<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return response()->json(['message' => 'index hello']);
    }

    public function store(Request $request) {
        return response()->json(['message' => 'store success']);
    }

    public function update($id) {
        return response()->json(['message' => 'update '.$id]);
    }

    public function destroy($id) {
        return response()->json(['message' => 'delete '.$id]);
    }
}
