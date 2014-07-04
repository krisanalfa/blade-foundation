@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema(); ?>
<div class="row container">
    <div class="top30">
        <div class="twelve columns">
            <form method="POST">
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">{{ f('controller')->clazz }}</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Update</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}</legend>
                    @foreach ($schema as $name => $field)
                        <div class="row">
                            <div class="three columns">
                                {{ $field->label() }}
                            </div>
                            <div class="nine columns">
                                {{ $field->formatInput($entry[$name], $entry) }}
                            </div>
                        </div>
                    @endforeach

                    <div class="row top30">
                        <div class="right">
                            <a href="{{ f('controller.url', '/'.$entry['$id']) }}" class="button radius secondary">Cancel</a>
                            <button type="submit" class="button radius">Submit</button>
                            <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button radius alert">Delete</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
