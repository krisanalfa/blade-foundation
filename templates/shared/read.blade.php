@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema(); ?>
<div class="row-fluid container">
    <div class="reader">
        <div class="large-2 columns show-for-medium-up">
            <div class="action-container">
                <a href="{{ f('controller.url') }}" class="button expand radius">Search</a>
                <a href="{{ f('controller.url', '/null/create') }}" class="button expand radius">Create</a>
                <button class="button expand radius disabled secondary">Read</button>
                <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}" class="button expand radius">Update</a>
                <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button expand radius alert">Delete</a>
            </div>
        </div>
        <div class="large-10 columns">
            <form>
                <fieldset>
                    <legend>{{ f('controller.name') }}: {{ reset($schema)->format('plain', $entry[reset($schema)->get('name')]) }}</legend>
                    @foreach ($schema as $key => $value)
                        <div class="row">
                            <div class="large-2 columns">
                                <label>{{ $value->label() }}</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" value="{{ $value->format('plain', $entry[$key], $entry) }}" readonly disabled />
                            </div>
                        </div>
                    @endforeach
                </fieldset>
                <div class="hide-for-medium-up">
                    <a href="{{ f('controller.url') }}" class="button tiny radius">Search</a>
                    <a href="{{ f('controller.url', '/null/create') }}" class="button tiny radius">Create</a>
                    <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}" class="button tiny radius">Update</a>
                    <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button tiny radius alert">Delete</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
