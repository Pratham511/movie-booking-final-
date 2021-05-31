<x-customerheader/>

<div class="m-5">
    <form action="ticketData" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="form-control" name="addmovie_id" value="{{request()->route()->id}}">

        <input type="hidden" class="form-control" name="customer_id" value="{{session()->get('customer_id')}}">

        <div class="form-group">
            <label for="person">Enter Names</label>
            <input type="text" class="form-control" id="person" placeholder="Enter Names">
        </div>

        <div class="form-group">
            <label for="person">TotalPerson</label>
            <input type="text" class="form-control" id="person" name="TotalPerson" placeholder="TotalPerson">
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>




    </form>
</div>
