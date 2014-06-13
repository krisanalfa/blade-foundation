@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema(); ?>
<div class="row-fluid container">
    <div class="reader">
        <div class="large-12 columns">
            <form method="POST">
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">User</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Update</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}: {{ reset($schema)->formatPlain($entry[reset($schema)->get('name')]) }}</legend>
                    @foreach ($schema as $key => $value)
                        <div class="row">
                            <div class="large-2 columns">
                                {{ $schema[$key]->label() }}
                            </div>
                            <div class="large-10 columns">
                                {{ $schema[$key]->formatInput($entry[$key], $entry) }}
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="right">
                                <a href="{{ f('controller.url', '/'.$entry['$id']) }}" class="button radius tiny secondary">Cancel</a>
                                <button type="submit" class="radius tiny">Submit</button>
                                <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button tiny radius alert">Delete</a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
