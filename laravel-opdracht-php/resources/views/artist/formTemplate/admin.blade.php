<div class="text-center">
    <button type="button" onclick="addArtist()" class="btn btn-primary">add artist</button>
</div>

<ul>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Artist</th>
            <th scope="col">Birthday</th>
            <th scope="col">country</th>
            <th scope="col">Spotify url</th>
            <th scope="col">Edit</th>
        </tr>
        <?php  $i = 1?>
        @forelse($artists as $artist)
            <tr>
                <th scope="row">{{$i}}</th>
                <td><a href="artists/{{$artist->artist}}">{{$artist->artist}}</a></td>
                <td>{{$artist->birthday}}</td>
                <td>{{$artist->country}}</td>
                <td><a href="{{$artist->spotifyUrlArtist}}">Click Me</a> </td>
                <td><a href="{{url('/artists/update/'.$artist->id)}}">edit</a></td>

            </tr>
            <?php $i++ ?>
        @empty
            <h3>There are no songs to show! </h3>
        @endforelse
    </table>
</ul>
<div id="addArtistForm">
    <h3 style="text-align: center">Add a artist</h3>
    <form action="{{url('/artists/add')}}" method="post" style="width: 500px; margin: auto">
        @csrf
        <label for="artist">Artist</label>
        <input type="text" name="artist" autocomplete="off" class="form-control" value="{{old('artist')}}"><br>
        <label>birthday</label>
        <input type="date" name="birthday" autocomplete="off"  class="form-control" value="{{old('birthday')}}"><br>
        <label>country</label>
        <input type="text" name="country" autocomplete="off" class="form-control" value="{{old('country')}}"><br>
        <label>Spotify url</label>
        <input type="text" name="spotifyUrlArtist" autocomplete="off" class="form-control" value="{{old('spotifyUrlArtist')}}"><br>
        <button type="submit" class="btn btn-primary">Add Aritst</button>
        <button type="button" onclick="window.location.href='/artists';"  class="btn btn-primary">CANCEL</button>

        @if ($errors->any())
            <?php echo "<script>";
            echo "document.getElementById('addArtistForm').style.top = '100px'; document.getElementById('overlay').style.display = 'block';";
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
    function addArtist() {
        document.getElementById("addArtistForm").style.top = "100px";
        document.getElementById("overlay").style.display = "block";
    }
</script>
<style>
    #addArtistForm {
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
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:hover {background-color: #ddd;}
</style>
