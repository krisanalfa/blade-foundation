@extends('layout')

@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema(); ?>
<div class="row container">
    <div class="top30">
        <div class="twelve columns">
            <form>
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">{{ f('controller')->getClass() }}</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Read</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}</legend>
                    @foreach ($schema as $name => $field)
                        @unless($field['hidden'])
                            <div class="row">
                                <div class="three columns">
                                    {{ $field->label() }}
                                </div>
                                <div class="nine columns">
                                    {{ $field->formatReadonly($entry[$name], $entry) }}
                                </div>
                            </div>
                        @endunless
                    @endforeach

                    <div class="paginator-wrapper">
                        {{ KrisanAlfa\Theme\Components\Pagination::create($entries)->paginate(); }}
                    </div>

                    <div class="row top30">
                        <div class="right">
                            <a href="{{ f('controller.url', '/'.$entry['$id'].'/update') }}" class="button radius">Update</a>
                            <a href="{{ f('controller.url', '/'.$entry['$id'].'/delete') }}" class="button radius alert">Delete</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
