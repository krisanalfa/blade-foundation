@extends('layout')

@section('content')
<div class="row container">
    <div class="top30">
        <div class="twelve columns">
            <form method="POST">
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">{{ f('controller')->getClass() }}</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Create</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}</legend>
                    @foreach (Norm::factory(f('controller.name'))->schema() as $name => $field)
                        @unless($field['generated'])
                            <div class="row">
                                <div class="three columns">
                                    {{ $field->label() }}
                                </div>
                                <div class="nine columns">
                                    {{ $field->formatInput(@$entry[$name], $entry) }}
                                </div>
                            </div>
                        @endunless
                    @endforeach

                    <div class="row top30">
                        <div class="right">
                            <a href="{{ f('controller.url') }}" class="button secondary">Cancel</a>
                            <button type="submit" class="radius button">Create</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
