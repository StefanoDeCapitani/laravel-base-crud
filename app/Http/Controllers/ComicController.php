<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateComic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateComic $request)
    {
        $data = $request->validated();
        $comic = Comic::create($data);

        return redirect()->route("comics.show", $comic->id)
        ->with("message", "L'articolo " . '"' . $comic->title . '"' . " è stato salvato con successo." );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateComic $request, Comic $comic)
    {
        $data = $request->validated();
        $comic->update($data);

        return redirect()->route("comics.show", $comic->id)
        ->with("message", "L'articolo " . '"' . $comic->title . '"' . " è stato modificato con successo." );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $title = $comic->title;
        $comic->delete();

        return redirect()->route("comics.index")
        ->with("message", "L'articolo " . '"' . $title . '"' . " è stato cancellato con successo." );
    }
}
