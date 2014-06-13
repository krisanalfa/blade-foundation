@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema(); ?>
<div class="row-fluid container">
    <div class="reader">
        <div class="large-12 columns">
            <form>
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">User</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Read</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}: {{ reset($schema)->format('plain', $entry[reset($schema)->get('name')]) }}</legend>
                    @foreach ($schema as $key => $value)
                        <div class="row">
                            <div class="large-2 columns">
                                {{ $value->label() }}
                            </div>
                            <div class="large-10 columns">
                                {{ $value->formatReadonly($entry[$key], $entry) }}
                            </div>
                        </div>
                    @endforeach
                </fieldset>
                <div class="right">
                    <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}" class="button tiny radius">Update</a>
                    <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button tiny radius alert">Delete</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
