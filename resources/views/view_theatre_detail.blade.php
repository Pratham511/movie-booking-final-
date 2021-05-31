<x-adminheader/>

<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
            <h2>Theatres Detail</h2>
            <thead>
            <tr>
                <td class="w-15">TheatreName</td>
                <td class="w-15">TheatreCity</td>
                <td class="w-15">RunTime</td>
                <td class="w-15">addmovie_id</td>
                <td class="w-15">Edit</td>
                <td class="w-15">Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($theatres as $theatre)

                <tr>
                    <td class="w-15">{{$theatre->TheatreName}}</td>
                    <td class="w-15">{{$theatre->TheatreCity}}</td>
                    <td class="w-15">{{$theatre->RunTime}}</td>
                    <td class="w-15">{{$theatre->addmovie_id}}</td>


                    <td><a href="/admin/editTheatre/{{$theatre->id}}">Edit</a></td>
                    <td><a href="/admin/deleteTheatre/{{$theatre->id}}">Delete</a></td>

                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
</div>
