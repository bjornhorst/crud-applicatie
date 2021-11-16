<div class="text-center">
    <button type="button" onclick="addSong()" class="btn btn-primary">add song</button>
    <button type="button" onclick="window.location.href='/artists';" class="btn btn-primary">
        Go back to the artists
    </button>
</div>
<ul>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Song title</th>
            <th scope="col">Artist</th>
            <th scope="col">year</th>
            <th scope="col">genre</th>
            <th scope="col">Spotify url</th>
            <th scope="col">Edit</th>
        </tr>
        <?php  $i = 1?>
        @forelse($artist->songs as $song)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$song->song_title}}</td>
                <td>{{$song->artistName}}</td>
                <td>{{$song->year}}</td>
                <td>{{$song->genre}}</td>
                <td><a href="{{$song->spotifyUrlSong}}">Click me</a></td>
                <td><a href="{{url('/songs/update/'.$song->id)}}">edit</a></td>
            </tr>
            <?php $i++ ?>
        @empty
            <h3>There are no songs to show! </h3>
        @endforelse
    </table>
</ul>
<hr>
<div id="addSongForm">
    <h3 style="text-align: center">Add a song to this artist</h3>
    <form action="{{url('/artists/songs/'.$artist->artist)}}" method="post" style="width: 500px; margin: auto">
        @csrf
        <label for="song_title">Song title</label>
        <input type="text" name="song_title" autocomplete="off" class="form-control" value="{{old('song_title')}}"><br>
        <label>year</label>
        <input type="number" name="year" autocomplete="off" class="form-control" value="{{old('year')}}"><br>
        <label>genre</label>
        <input type="text" name="genre" autocomplete="off" class="form-control" value="{{old('genre')}}"><br>
        <label>Spotify url</label>
        <input type="text" name="spotifyUrlSong" autocomplete="off" class="form-control"
               value="{{old('spotifyUrlSong')}}"><br>
        <button type="submit" class="btn btn-primary">Add song</button>
        <button type="button" onclick="window.location.href='/artists/{{$artist->artist}}';" class="btn btn-primary">
            CANCEL
        </button>
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
    </form>
</div>

<script>
    function addSong() {
        document.getElementById("addSongForm").style.top = "200px";
        document.getElementById("overlay").style.display = "block";
    }
</script>
<style>
    #addSongForm {
        display: flex;
        flex-direction: column;
        z-index: 3;
        position: absolute;
        left: Calc(50VW - 250px);
        width: 500px;
        height: 305.91px;
        top: -550px;
        transition: top 0.5s;
        color: white;
    }

    #overlay {
        display: none;
        position: absolute;
        height: 100%;
        width: 100%;
        z-index: 2;
        background-color: rgba(57, 57, 57, 0.55);
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>

