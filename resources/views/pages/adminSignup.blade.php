<x-aheader />

<div class="jumbotron jumbotron-fluid">
    <title>Signup page for admin</title>
    <div class="container">
        <h1 class="display-6" style="text-align: center">DO REGISTER </h1>
    </div>


    <div class="container" style="margin-top: 50px">

        <form action="{{--{{route('student.store')}}--}}/admin/adminregister" method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="contact" id="contact" placeholder="contact">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
            </div>

            <button type="submit" style="float: right ;margin-right: 500px" class="btn btn-dark">
                Register
            </button>


        </form>
    </div>
</div>
