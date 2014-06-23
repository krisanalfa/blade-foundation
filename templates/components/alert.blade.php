@foreach($messages as $message)
    <div data-alert class="alert-box {{ $options['level'] }}">
        {{ $message['message'] }}
        <a href="#" class="close">&times;</a>
    </div>
@endforeach
