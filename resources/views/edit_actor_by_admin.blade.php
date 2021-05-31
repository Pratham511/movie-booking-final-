<x-adminheader />
<!--<div class="container add">

<addMovie-component></addMovie-component>
</div>-->

<div class="m-5">
    <form action="/admin/updateActor" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$change['id']}}">

        <div class="form-group">
            <label for="title">MovieId</label>
            <input type="text" class="form-control" id="title" name="m_id" placeholder="MovieId"
                   value="{{$change['m_id']}}">
        </div>

        <div class="form-group">
            <label for="name">ActorName</label>
            <input type="text" class="form-control" id="name" name="ActorName" placeholder="ActorName"
                   value="{{$change['ActorName']}}">
        </div>

        <div class="form-group">
            <label for="bio">ActorBio</label>
            <textarea type="text" class="form-control" id="bio" name="ActorBio" rows="2"
                      placeholder="ActorBio">{{$change['ActorBio']}}</textarea>
        </div>

        <div class="form-group">
            <label for="birth">ActorBirth</label>
            <input type="text" class="form-control" id="birth" name="ActorBirth" placeholder="ActorBirth"
            value="{{$change['ActorBirth']}}">
        </div>



        <button type="submit" class="btn btn-dark">Submit</button>


    </form>
</div>
