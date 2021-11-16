<ul>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Artist</th>
            <th scope="col">Birthday</th>
            <th scope="col">country</th>
            <th scope="col">Spotify url</th>
        </tr>
        <?php  $i = 1?>
        @forelse($artists as $artist)
            <tr>
                <th scope="row">{{$i}}</th>
                <td><a href="artists/{{$artist->artist}}">{{$artist->artist}}</a></td>
                <td>{{$artist->birthday}}</td>
                <td>{{$artist->country}}</td>
                <td><a href="{{$artist->spotifyUrlArtist}}">Click Me</a> </td>

            </tr>
            <?php $i++ ?>
        @empty
            <h3>There are no songs to show! </h3>
        @endforelse
    </table>
</ul>
