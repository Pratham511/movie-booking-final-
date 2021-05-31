<x-adminheader />

<!--<div class="container add">

<addMovie-component></addMovie-component>
</div>-->

<div class="m-5">
    <form action="/admin/update" method="post" enctype="multipart/form-data">
    @csrf
        <input type="hidden" name="id" value="{{$change['id']}}">


        <div class="form-group">
            <label for="title">MovieName</label>
            <input type="text" class="form-control" id="title" name="MovieName" placeholder="MovieName"
                   value="{{ $change->MovieName }}">
            </div>

            <div class="form-group">
            <label for="poster">MoviePoster</label>
            <input type="file" class="form-control" id="poster" name="MoviePoster" placeholder="MoviePoster"
                   value="{{ $change->MoviePoster }}">

            </div>

            <div class=" form-group">
            <label for="overview">MovieDescription</label>
            <textarea type="text" class="form-control" id="overview" name="MovieDescription" rows="4"
                      placeholder="MovieDescription">{{ $change->MovieDescription }}</textarea>
        </div>

        <div class="form-group">
            <label for="dname">DirectorName</label>
            <input type="text" class="form-control" id="dname" name="DirectorName" placeholder="DirectorName"
                   value="{{ $change->DirectorName }}">
            </div>

            <div class=" form-group">
            <label for="rate">Rate</label>
            <input type="text" class="form-control" id="rate" name="Rate" placeholder="Rate"
                   value="{{ $change->Rate }}">
            </div>


        <button type=" submit" class="btn btn-info">update</button>


    </form>
</div>
