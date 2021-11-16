@extends('layouts.app')
@section('content')
    @guest
        <p>ga weg</p>
    @elseif(Auth::user()->name == 'admin')
        <h1 style="text-align: center">Edit a song</h1>

        <form action="{{url('/songs/update/'.$song->id)}}" method="post" style="width: 500px; margin: auto">
            @method('PATCH')
            @csrf
            <label for="song_title">Song title</label>
            <input type="text" name="song_title" autocomplete="off" minlength="2" class="form-control" value="{{$song->song_title}}"><br>
            <label>year</label>
            <input type="number" name="year" autocomplete="off" minlength="4" class="form-control" value="{{$song->year}}"><br>
            <label>genre</label>
            <input type="text" name="genre" autocomplete="off" minlength="2" class="form-control" value="{{$song->genre}}"><br>
            <label>Spotify url</label>
            <input type="text" name="spotifyUrlSong" autocomplete="off" class="form-control" value="{{$song->spotifyUrlSong}}"><br>
            <button type="submit" class="btn btn-primary">Save song</button>
            <button class="btn btn-primary" type="button" onclick="document.getElementById('delete').click()">delete song</button>
            <button type="button" onclick="window.location.href='/artists/{{$song->artistName}}';"  class="btn btn-primary">CANCEL</button>
        </form>
        <form action="{{url('/songs/'.$song->id)}}" method="POST" >
            @method('DELETE')
            @csrf
            <button id="delete" type="submit" onclick="return confirm('Are you sure to this song delete?')" class="btn btn-primary" style="visibility: hidden">
                DELETE
            </button>
        </form>
        @if ($errors->any())
            <?php echo "<script>";
            echo "document.getElementById('addSongForm').style.top = '200px'; document.getElementById('overlay').style.display = 'block';";
            echo "</script>";?>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endguest
@endsection
