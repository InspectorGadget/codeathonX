@include('partials.head')

<body>

@include('partials.topbar')

<main role="main">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Login here!</h1>
        </div>
    </div>

    <div class="container">

        @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
        @elseif ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            {{ csrf_field() }}
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your Username">
            <br>
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your Password">
            <br>
            <button class="btn btn-success">Login</button>
        </form>

        <hr>

    </div> <!-- /container -->

</main>

@include('partials.foot')
