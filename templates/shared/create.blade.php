@section('content')
<div class="row-fluid container">
    <div class="reader">
        <div class="large-2 columns show-for-medium-up">
            <div class="action-container">
                <a href="{{ f('controller.url') }}" class="button expand radius">Search</a>
                <button class="button expand radius disabled secondary">Create</button>
            </div>
        </div>
        <div class="large-10 columns">
            <form method="POST">
                <fieldset>
                    <legend>{{ f('controller.name') }}: create</legend>
                    @foreach (Norm::factory(f('controller.name'))->schema() as $key => $value)
                        <div class="row">
                            <div class="large-2 columns">
                                <label>{{ $value->label() }}</label>
                            </div>
                            <div class="large-10 columns">
                                {{ $value->format('input', null) }}
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="large-12 columns">
                            <div class="right">
                                <a href="{{ f('controller.url') }}" class="button tiny radius secondary">Cancel</a>
                                <button type="submit" class="radius tiny">Create</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
