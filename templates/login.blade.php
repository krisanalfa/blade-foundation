@section('navbar')
@stop

@section('title')
Login
@endsection

@section('content')
<div class="row container login">
    <form action="" method="POST">
        <fieldset>
            <div class="row">
                <h1 class="text-center"><i class="fa fa-lock fa-2x"></i></h1>
            </div>

            <div class="row">
                <div class="three columns">
                    <label for="">Username</label>
                </div>
                <div class="nine columns">
                    <input type="text" name="username" placeholder="Username" />
                </div>
            </div>
            <div class="row">
                <div class="three columns">
                    <label for="">Password</label>
                </div>
                <div class="nine columns">
                    <input type="password" name="password" placeholder="Password" />
                </div>
            </div>

            <div class="row top30">
                <div class="right">
                    <a href="{{ URL::site() }}" class="button secondary">Cancel</a>
                    <button type="submit" class="radius button">Sign in</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
@endsection
