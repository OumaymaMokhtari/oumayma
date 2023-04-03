<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function index()
{
    $data = Http::get('http://votre-api.com/api/elements')->json();
    $articles = collect($data['articles'])->mapInto(Article::class);
    $evenements = collect($data['evenements'])->mapInto(Evenement::class);
    $annonces = collect($data['annonces'])->mapInto(Annonce::class);

    return view('elements.index', compact('articles', 'evenements', 'annonces'));
}

}
