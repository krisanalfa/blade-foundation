@extends('layout')

@section('content')
<article class="row container">
    <div class="welcome">
        <h2 class="title">Hello Friend!</h2>
        <p>
            You see me because you haven't overriden templates yet or default routes. May be
            this is your fist journey through the world of Bono. I wish you will enjoy
            and get comfy to the world of productive application development.
        </p>

        <p>
            You can override the route from <code>www/index.php</code> file.
            Or if you just want to override the template, you can override it from (or
            create new file at) <code>templates/static/index.blade.php</code>. If you want to change the layout,
            you may create a new file at <code>templates/layout.blade.php</code>
        </p>

        <p>
            Best regards,<br>
            Bono Team
        </p>
    </div>
</article>
@endsection
