@extends('layout')

@section('content')
<div class="row container">
    <div class="top30">
        <div class="twelve columns">
            <form method="POST">
                <ul class="breadcrumbs">
                    <li><a href="{{ URL::base() }}">Home</a></li>
                    <li><a href="{{ f('controller.url') }}">{{ f('controller')->getClass() }}</a></li>
                    <li class="current"><a href="{{ URL::current() }}">Delete</a></li>
                </ul>
                <fieldset>
                    <legend>{{ f('controller.name') }}</legend>
                        <input type="hidden" name="confirm" value="1">

                        <strong>Are you sure, you are about to delete {{ count($ids).' entries' }}?</strong>

                        <div class="top30">
                            <a href="{{ dirname(URL::current()) }}" class="button radius">Cancel</a>
                            <input class="button radius alert" type="submit" value="Delete forever">
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
