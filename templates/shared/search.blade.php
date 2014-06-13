@section('content')
<?php $schema = Norm::factory(f('controller.name'))->schema(); $first = true;?>
<div class="row-fluid container">
    <div class="reader">
        <div class="large-2 columns show-for-medium-up">
            <div class="action-container">
                <button class="button expand radius disabled secondary">Search</button>
                <a href="{{ f('controller.url', '/null/create') }}" class="button expand radius">Create</a>
            </div>
        </div>
        <div class="large-10 columns">
            <h1>{{ f('controller.name') }} list</h1>
            <div class="hide-for-medium-up">
                <a href="{{ f('controller.url', '/null/create') }}" class="button tiny radius margin-bottom-5">Create</a>
            </div>
            <div class="table-wrapper">
                <table class="nowrap search">
                     <thead>
                         <tr>
                             @foreach ($schema as $key => $value)
                                 @if(! $value->get('hidden'))
                                     <th>{{ $value['label'] }}</th>
                                 @endif
                             @endforeach
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($entries as $entry)
                             <tr>
                                 @foreach ($schema as $key => $value)
                                    <td>
                                         @if($first)
                                             <a href="{{ f('controller.url', '/'.$entry['$id']) }}">
                                                 {{ $value->format('plain', $entry[$key], $entry) }}
                                             </a>
                                             <?php $first = false; ?>
                                         @else
                                             {{ $value->format('plain', $entry[$key], $entry) }}
                                         @endif
                                    </td>
                                 @endforeach
                             </tr>
                         @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
