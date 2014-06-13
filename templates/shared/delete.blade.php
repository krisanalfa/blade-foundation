@section('content')
<div class="row-fluid container">
    <div class="reader">
        <div class="large-2 columns show-for-medium-up">
            <div class="action-container">
                <a href="{{ f('controller.url') }}" class="button expand radius">Search</a>
                <a href="{{ f('controller.url', '/null/create') }}" class="button expand radius">Create</a>
                <button class="button expand radius disabled secondary">Delete</button>
            </div>
        </div>
        <div class="large-10 columns">
            <form method="POST">
                <fieldset>
                    <legend>{{ 'Delete '.f('controller.name').' ('.count($ids).' entries)' }}</legend>
                        <input type="hidden" name="confirm" value="1">
                        <p>
                            Are you sure want to delete {{ count($ids).' entries' }}?
                        </p>
                        <a href="{{ f('controller.url') }}" class="button tiny">Cancel</a>
                        <input class="button alert tiny" type="submit" value="Delete forever">
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
