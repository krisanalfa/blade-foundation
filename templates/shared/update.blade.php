@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema(); ?>
<div class="row-fluid container">
    <div class="reader">
        <div class="large-2 columns show-for-medium-up">
            <div class="action-container">
                <a href="{{ f('controller.url') }}" class="button expand radius">Search</a>
                <a href="{{ f('controller.url', '/null/create') }}" class="button expand radius">Create</a>
                <a href="{{ f('controller.url', '/'.$entry['$id']) }}" class="button expand radius">Read</a>
                <button class="button expand radius disabled secondary">Update</button>
                <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button expand radius alert">Delete</a>
            </div>
        </div>
        <div class="large-10 columns">
            <form method="POST">
                <fieldset>
                    <legend>{{ f('controller.name') }}: {{ reset($schema)->formatPlain($entry[reset($schema)->get('name')]) }}</legend>
                    @foreach ($schema as $key => $value)
                        <div class="row">
                            <div class="large-2 columns">
                                <label>{{ $schema[$key]->label() }}</label>
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
                                <button type="submit" class="radius tiny">Update</button>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="hide-for-medium-up">
                    <a href="{{ f('controller.url') }}" class="button tiny radius">Search</a>
                    <a href="{{ f('controller.url', '/null/create') }}" class="button tiny radius">Create</a>
                    <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button tiny radius alert">Delete</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
