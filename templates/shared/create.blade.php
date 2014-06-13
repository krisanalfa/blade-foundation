@section('content')
<div class="row-fluid container">
    <div class="reader">
        <div class="large-12 columns">
            <form method="POST">
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">User</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Create</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}: create</legend>
                    @foreach (Norm::factory(f('controller.name'))->schema() as $key => $value)
                        <div class="row">
                            <div class="large-2 columns">
                                {{ $value->label() }}
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
