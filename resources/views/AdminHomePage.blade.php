<x-adminheader/>

<!--<div class="container p-5">
</div>-->

<div class="container" style="margin-top: 50px">

    @foreach($movies as $movie)
        <div id="subdiv_{{$movie['id']}}" class="card pb-3 m-3">
            <div class="card-header">
                {{ $movie->MovieName }}
            </div>
            <div class="card-body">
                <div class="card-text">
                    <div class="float-left">
                        <img src="/image/{{$movie->MoviePoster}}" width="250px" height="250px">
                        <br>
                    </div>
                    <br>

                    <div class="float-left">
                        Discription:{{ $movie->MovieDescription }}
                        <br>
                    </div>
                    <br>

                    <div class="float-left">
                        DirectorName:{{ $movie->DirectorName }}
                        <br>
                    </div>
                    <br>

                    <div class="float-left">
                        Rate:{{ $movie->Rate }}
                        <br>
                    </div>

                    <div class="float-right">
                        <a href="/admin/showActor/{{$movie->id}}" class="btn btn-dark">actor</a>
                        <a href="/admin/showTheatre/{{$movie->id}}" class="btn btn-dark">Theatre</a>

                        <a href="/admin/edit/{{$movie->id}}" class="btn btn-info">Edit</a>
                        <form style="display: inline">
                            <a href="/admin/delete/{{ $movie->id }}" class="dlt btn btn-danger">Delete</a>
                        </form>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
@endforeach
{{ $movies->links() }}


