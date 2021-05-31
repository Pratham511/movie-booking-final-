<x-adminheader/>

<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
            <h2>Actors Detail</h2>
            <thead>
            <tr>
                <td class="w-15">movie_id</td>
                <td class="w-15">ActorName</td>
                <td class="w-15">ActorBio</td>
                <td class="w-15">ActorBirth</td>
                <td class="w-15">Edit</td>
                <td class="w-15">Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($actors as $actor)

                <tr>
                    <td class="w-15">{{$actor->m_id}}</td>
                    <td class="w-15">{{$actor->ActorName}}</td>
                    <td class="w-15">{{$actor->ActorBio}}</td>
                    <td class="w-15">{{$actor->ActorBirth}}</td>
                    <td><a href="/admin/editActor/{{$actor->id}}">Edit</a></td>
                    <td><a href="/admin/deleteActor/{{$actor->id}}">Delete</a></td>

                </tr>
            @endforeach


            </table>

    </div>
</div>
