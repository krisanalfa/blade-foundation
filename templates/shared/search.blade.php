@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema();?>
<div class="row-fluid container">
    <div class="reader">
        <div class="large-12 columns">
            <h1>{{ f('controller.name') }} list</h1>
            <div class="table-wrapper">
                <a href="{{ f('controller.url', '/null/create') }}" class="button radius create">Create New</a>
                <table class="nowrap search">
                    <thead>
                        <tr>
                            @foreach ($schema as $key => $field)
                                @if(! $field['hidden'])
                                    <th>{{ $field['label'] }}</th>
                                @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @if(! $entries->count(true))
                            <tr>
                                <td colspan="{{ count($schema) }}" style="text-align: center">Empty</td>
                            </tr>
                        @else
                            @foreach ($entries as $entry)
                                <tr>
                                    @foreach ($schema as $name => $field)
                                        @if($field['hidden'] !== true)
                                            <td>
                                                 @if(reset($schema) === $field)
                                                     <a href="{{ f('controller.url', '/'.$entry['$id']) }}">
                                                         {{ $field->format('plain', $entry[$name], $entry) }}
                                                     </a>
                                                 @else
                                                     {{ $field->format('plain', $entry[$name], $entry) }}
                                                 @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
