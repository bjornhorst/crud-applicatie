<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
use \App\Artist;
class ArtistController extends Controller
{
    public function index(){
        $artists = (new Artist())->all(); // example, Car passed as parameter is better
        return view('artist.index', compact('artists'));
    }

    public function show(Request $request, Artist $artists)
    {
        $artist = $artists->where('artist', $request->artist)->first();
        $artist->songs = $artist->songs()->get();
        return view('artist.show', ['artist' => $artist]);
    }
    public function add(Request $request)
    {
        $data = request()->validate([
            'artist' => 'required|min:2',
            'birthday' => 'required|min:4|max:10',
            'country' => 'required|min:2',
            'spotifyUrlArtist' => 'required|min:1'
        ]);
        $artist = new Artist();
        $artist->fill($request->all());
        if($artist->save())
        {
            return redirect()->to('artists/');
        }
    }
    public function update(Request $request, Artist $artists)
    {

        $artist = $artists->find($request->id);
        if($request->_method == 'PATCH')
        {
            $data = request()->validate([
                'artist' => 'required|min:2',
                'birthday' => 'required|min:4|max:10',
                'country' => 'required|min:2',
                'spotifyUrlArtist' => 'required|min:1'
            ]);
            $artist->update($request->all());
            return redirect()->to('artists/');
        }
        return view('artist.update')->with('artist' , $artist);
    }
    public function delete(Request $request, Artist $artists)
    {
        $artist = $artists->find($request->id);
        $artist->delete();
        return redirect()->to('artists/');
    }
}
