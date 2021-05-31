<x-customerheader/>


<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
            <tbody>
            @foreach($tickets as $ticket)

                <tr>
                    <td class="w-15"><b>MovieName: </b>{{$ticket->MovieName}}</td>
                    <td class="w-15"><b>MovieDescription: </b>{{$ticket->MovieDescription}}</td>
                    <td class="w-15"><b>MovieDirectorName: </b>{{$ticket->DirectorName}}</td>
                    <td class="w-15"><b>MovieRate:  </b>{{$ticket->Rate}}</td>
                    <td class="w-15"><b>CustomerName: </b>{{$ticket->name}}</td>
                    <td class="w-15"><b>CustomerContact: </b>{{$ticket->contact}}</td>
                    <td class="w-15"><b>CustomerEmail: </b>{{$ticket->email}}</td>
                    <td class="w-15"><b>TotalPerson:  </b>{{$ticket->TotalPerson}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
