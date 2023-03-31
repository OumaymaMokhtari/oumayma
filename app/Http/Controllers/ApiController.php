<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexArticles()
    {
        return Article::all();
    }

    public function showArticle(Article $article)
    {
        return $article;
    }

    public function storeArticle(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function updateArticle(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function destroyArticle(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }

    public function indexEvents()
    {
        return Event::all();
    }

    public function showEvent(Event $event)
    {
        return $event;
    }

    public function storeEvent(Request $request)
    {
        $event = Event::create($request->all());

        return response()->json($event, 201);
    }

    public function updateEvent(Request $request, Event $event)
    {
        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function destroyEvent(Event $event)
    {
        $event->delete();

        return response()->json(null, 204);
    }
    public function index()
    {
        $annonces = Annonce::all();
        return response()->json($annonces);
    }

    public function store(Request $request)
    {
        $annonce = Annonce::create($request->all());
        return response()->json($annonce, 201);
    }

    public function show(Annonce $annonce)
    {
        return response()->json($annonce);
    }

    public function update(Request $request, Annonce $annonce)
    {
        $annonce->update($request->all());
        return response()->json($annonce);
    }

    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return response()->json(null, 204);
    }
}
