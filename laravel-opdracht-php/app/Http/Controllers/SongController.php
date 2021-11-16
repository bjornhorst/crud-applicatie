<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(Song $songs)
    {
        return $songs->all();
    }

    public function add(Request $request)
    {
        $data = request()->validate([
            'song_title' => 'required|min:2',
            'year' => 'required|min:4|max:4',
            'genre' => 'required|min:2',
            'spotifyUrlSong' => 'required|min:1'
        ]);
       $song = new Song();
        $song->artistName = $request->artist;
        $song->fill($request->all());
       if($song->save())
       {
           return redirect()->to('artists/'.$request->artist);
       }
    }

    public function update(Request $request, Song $songs)
    {

        $song = $songs->find($request->id);
        if($request->_method == 'PATCH')
        {
            $data = request()->validate([
                'song_title' => 'required|min:2',
                'year' => 'required|min:4|max:4',
                'genre' => 'required|min:2',
                'spotifyUrlSong' => 'required|min:1'
            ]);
            $song->update($request->all());
            return redirect()->to('artists/'.$song->artistName);
        }
            return view('song.update')->with('song' , $song);
    }

    public function delete(Request $request, Song $songs)
    {
        $song = $songs->find($request->id);
        $song->delete();
        return redirect()->to('artists/'.$song->artistName);
    }
}
