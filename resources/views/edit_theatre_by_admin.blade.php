<x-adminheader />
<!--<div class="container add">

<addMovie-component></addMovie-component>
</div>-->

<div class="m-5">
    <form action="/admin/updateTheatre" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$change['id']}}">

        <div class="form-group">
            <label for="title">TheatreName</label>
            <input type="text" class="form-control" id="title" name="TheatreName" placeholder="TheatreName"
                   value="{{$change['TheatreName']}}">
        </div>

        <div class="form-group">
            <label for="name">TheatreCity</label>
            <input type="text" class="form-control" id="name" name="TheatreCity" placeholder="TheatreCity"
                   value="{{$change['TheatreCity']}}">
        </div>

        <div class="form-group">
            <label for="bio">RunTime</label>
            <input type="text" class="form-control" id="bio" name="RunTime"
                      placeholder="RunTime" value="{{$change['RunTime']}}">
        </div>

        <div class="form-group">
            <label for="id">MovieId</label>
            <input type="text" class="form-control" id="id" name="addmovie_id" placeholder="addmovie_id"
                   value="{{$change['addmovie_id']}}">

        </div>



        <button type="submit" class="btn btn-dark">Submit</button>


    </form>
</div>
