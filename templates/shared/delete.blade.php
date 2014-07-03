@section('content')
<div class="row-fluid container">
    <div class="reader">
        <div class="twelve columns">
            <form method="POST">
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">{{ f('controller')->clazz }}</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Hapus</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}</legend>
                        <input type="hidden" name="confirm" value="1">
                        <p>Anda yakin ingin menghapus {{ count($ids).' entries' }}?</p>
                        <a href="{{ dirname(URL::current()) }}" class="button radius">Cancel</a>
                        <input class="button radius alert" type="submit" value="Delete forever">
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
