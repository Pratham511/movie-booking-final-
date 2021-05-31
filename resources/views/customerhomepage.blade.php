<x-customerheader/>

<div class="container">

<form action="/search" method="post" role="search">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="find"
               placeholder="Search movie,theatre"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
</div>

<div class="" style="margin-top: 50px">
    @foreach($movies as $movie)
        <div id="subdiv_{{$movie->id}}" class="card pb-3 m-3">
            <div class="card-header">
                {{ $movie->MovieName }}
            </div>
            <div class="card-body">
                <div class="card-text">
                    <div class="float-left">
                      <image src="/image/{{ $movie->MoviePoster }}" width="200px" ></image>
                        <br>
                    </div>
                    <br>



                    <div class="float-right">
                        <form style="display: inline">
                            <a href="/details/{{$movie->id}}" class="dlt btn btn-dark">More Details</a>
                        </form>

                        <form style="display: inline">
                            <a href="/book_tickets/{{$movie->id}}" class="dlt btn btn-success ml-4">Book Tickets</a>
                        </form>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach
</div>

{{--{{ $movies->links() }}--}}


