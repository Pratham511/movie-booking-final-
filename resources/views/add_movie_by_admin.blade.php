<x-adminheader />
<!--<div class="container add">

<addMovie-component></addMovie-component>
</div>-->

<div class="m-5">
    <form action="/admin/add" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">MovieName</label>
            <input type="text" class="form-control" id="title" name="MovieName" placeholder="MovieName">
        </div>

        <div class="form-group">
            <label for="poster">MoviePoster</label>
            <input type="file" class="form-control" id="poster" name="MoviePoster" placeholder="MoviePoster">
        </div>

        <div class="form-group">
            <label for="overview">MovieDescription</label>
            <textarea type="text" class="form-control" id="overview" name="MovieDescription" rows="4"
                      placeholder="MovieDescription"></textarea>
        </div>

        <div class="form-group">
            <label for="dname">DirectorName</label>
            <input type="text" class="form-control" id="dname" name="DirectorName" placeholder="DirectorName">
        </div>

        <div class="form-group">
            <label for="rate">Rate</label>
            <input type="text" class="form-control" id="rate" name="Rate" placeholder="Rate">
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>


    </form>
</div>
