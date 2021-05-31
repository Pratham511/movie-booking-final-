<x-adminheader />


<div class="m-5">
    <form action="/admin/addTheatre" method="post" enctype="multipart/form-data">
        @csrf



        <div class="form-group">
            <label for="title">TheatreName</label>
            <input type="text" class="form-control" id="title" name="TheatreName" placeholder="TheatreName">
        </div>

        <div class="form-group">
            <label for="name">TheatreCity</label>
            <input type="text" class="form-control" id="name" name="TheatreCity" placeholder="TheatreCity">
        </div>

        <div class="form-group">
            <label for="bio">RunTime</label>
            <input type="text" class="form-control" id="bio" name="RunTime"
                      placeholder="RunTime">
        </div>

        @foreach($movie as $show)

            <div class="form-group">
                <label for="id">MovieId</label>
                <input type="text" class="form-control" id="id" name="addmovie_id"
                       placeholder="addmovie_id" value="{{$show->id}}">
            </div>
        @endforeach





        <button type="submit" class="btn btn-dark">Submit</button>


    </form>
</div>
