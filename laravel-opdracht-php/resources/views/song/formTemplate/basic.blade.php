<ul>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Song title</th>
            <th scope="col">Artist</th>
            <th scope="col">year</th>
            <th scope="col">genre</th>
            <th scope="col">Spotify url</th>
        </tr>
        <?php  $i = 1?>
        @foreach($artist->songs as $song)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$song->song_title}}</td>
                <td>{{$song->artistName}}</td>
                <td>{{$song->year}}</td>
                <td>{{$song->genre}}</td>
                <td><a href="{{$song->spotifyUrlSong}}">Click me</a></td>
            </tr>
            <?php $i++ ?>
        @endforeach
    </table>
</ul>
