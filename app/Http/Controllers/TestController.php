<?php

namespace App\Http\Controllers;

use App\Models\Reng;
use Illuminate\Http\Request;

class TestController extends Controller
{

    function Home()
    {
        $search = Reng::where('status', '1')
            ->orderBy('created_at', 'desc')->get();
        return view('Movies.index')->with('movies', $search);
    }
    function Add()
    {
        return view('Movies.add');
    }
    function Save(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:rengs|max:255|min:3',
            'description' => 'required'
        ]);
        $newMovie = new Reng();
        $newMovie->title = $request['title'];
        $newMovie->description = $request['description'];
        $newMovie->duration = rand(1, 3);
        $newMovie->status = 1;

        $newMovie->save();
        return redirect("/home")->with('success', "new movies has been added");;
    }
    function Show(Request $request, Reng $movie)
    {
        return view('Movies.show')->with('movie', $movie);
    }
    function Remove(Reng $movie)
    {
        $movie->delete();
        return redirect("/home")->with('delete',"movies id: $movie->id has been deleted");
    }
    function Edit(Reng $movie){
        return view('Movies.edit')->with('movie', $movie);
    }
    function Update(Request $request,Reng $movie){
        $movie->title = $request['title'];
        $movie->description = $request['description'];
        $movie->save();
        return redirect("/home")->with('success', "movies id: $movie->id has been updated");
    }
}
