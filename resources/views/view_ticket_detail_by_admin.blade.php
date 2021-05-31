<x-adminheader/>


<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
            <tbody>
            @foreach($tickets as $ticket)

                <tr>
                    <td class="w-15"><b>Id:  </b>{{$ticket->id}}</td>

                    <td class="w-15"><b>TotalPerson:  </b>{{$ticket->TotalPerson}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
