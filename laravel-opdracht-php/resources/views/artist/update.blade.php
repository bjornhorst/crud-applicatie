@extends('layouts.app')
@section('content')
    @guest
        <p>ga weg</p>
    @elseif(Auth::user()->name == 'admin')
        <h1 style="text-align: center">Edit a Artist</h1>

        <form action="{{url('/artists/update/'.$artist->id)}}" method="post" style="width: 500px; margin: auto">
            @method('PATCH')
            @csrf
            <label for="artist">Artist</label>
            <input type="text" name="artist" autocomplete="off" class="form-control" value="{{$artist->artist}}"><br>
            <label>birthday</label>
            <input type="date" name="birthday" autocomplete="off" class="form-control" value="{{$artist->birthday}}"><br>
            <label>country</label>
            <input type="text" name="country" autocomplete="off" class="form-control" value="{{$artist->country}}"><br>
            <label>Spotify url</label>
            <input type="text" name="spotifyUrlArtist" autocomplete="off" class="form-control" value="{{$artist->spotifyUrlArtist}}"><br>
            <button type="submit" class="btn btn-primary">Save Artist</button>
            <button class="btn btn-primary" type="button" onclick="document.getElementById('delete').click()">delete artist</button>
            <button type="button" onclick="window.location.href='/artists';"  class="btn btn-primary">CANCEL</button>
        </form>
        <form action="{{url('/artists/'.$artist->id)}}" method="POST" >
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
