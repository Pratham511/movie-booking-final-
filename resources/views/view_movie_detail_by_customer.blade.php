<x-customerheader/>




<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
            <tbody>
            @foreach($movies as $info)

                <tr>
                    <td class="w-15"><b>MovieName: </b>{{$info->MovieName}}</td>
                    <td class="w-15"><b>MovieDescription: </b>{{$info->MovieDescription}}</td>
                    <td class="w-15"><b>MovieDirectorName: </b>{{$info->DirectorName}}</td>
                    <td class="w-15"><b>MovieRate:  </b>{{$info->Rate}}</td>

                @foreach($actors as $info)
                        <td class="w-15"><b>ActorName:   </b>{{$info->ActorName}}</td>
                        <td class="w-15"><b>ActorBio:</b> {{$info->ActorBio}}</td>
                        <td class="w-15"><b>ActorBirth:</b> {{$info->ActorBirth}}</td>
                    @endforeach
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>


