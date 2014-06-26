@section('content')
<div class="row-fluid container">
    <div class="reader">
        <div class="large-12 columns">
            <form method="POST">
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">{{ f('controller')->clazz }}</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Delete</a></li>
                </ul>
                <fieldset>
                    <legend>{{ 'Delete '.f('controller.name').' ('.count($ids).' entries)' }}</legend>
                        <input type="hidden" name="confirm" value="1">
                        <p>Are you sure want to delete {{ count($ids).' entries' }}?</p>
                        <a href="{{ dirname(URL::current()) }}" class="button radius">Cancel</a>
                        <input class="button radius alert" type="submit" value="Delete forever">
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
