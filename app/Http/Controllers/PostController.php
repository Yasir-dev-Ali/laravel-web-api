<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "index hello ";
    }

    public function store()
    {
        return "store";
    }

    public function update(string $id)
    {
        return "update".$id;
    }
}