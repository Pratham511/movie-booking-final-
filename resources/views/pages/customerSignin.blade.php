<x-cheader />

<div class="jumbotron jumbotron-fluid">
    <title>Signin page for customer</title>
    <div class="container">
        <h1 class="display-6" style="text-align: center">Plz login if u have submit register form</h1>
    </div>


    <div class="container" style="margin-top: 50px">

        <form action="/login" method="post">
            @csrf
            @if(Session::get('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email"  placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <button type="submit" style="float: right ;margin-right: 500px" class="btn btn-dark">
                LogIn
            </button>

        </form>
    </div>
</div>
