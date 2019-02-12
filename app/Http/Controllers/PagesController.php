<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return redirect('/posts');
        $title = 'SimpleBlog';
        $subtitle = 'Un blog de muestra para poner en practica mis conocimientos en PHP, SQL y Laravel';
        return view('pages.index', compact('title', 'subtitle'));
    }

    public function about() {
        return view('pages.about');
    }
}
