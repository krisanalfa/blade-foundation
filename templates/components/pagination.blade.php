<ul class="pagination">
    <li class="arrow {{ $current === 0 ? 'unavailable' : '' }}"><a href="{{ $baseUrl }}"> <i class="fa fa-angle-double-left"></i> </a></li>
    @if(isset($links[$current - 1]))
        <?php $prev = $links[$current - 1]; ?>
        <li class="prev"><a href="{{ $baseUrl.$prev['uri'] }}"> <i class="fa fa-angle-left"></i> </a></li>
    @else
        <li class="prev unavailable"><a href="#"> <i class="fa fa-angle-left"></i> </a></li>
    @endif
@foreach($links as $key => $link)
    <li class="{{ $link['isCurrent'] ? 'current' : '' }}"><a href="{{ $baseUrl.$link['uri'] }}">{{ $key + 1 }}</a></li>
@endforeach
    @if(isset($links[$current + 1]))
        <?php $next = $links[$current + 1] ?>
        <li class="next"><a href="{{ $baseUrl.$next['uri'] }}"> <i class="fa fa-angle-right"></i> </a></li>
    @else
        <li class="next unavailable"><a href="#"> <i class="fa fa-angle-right"></i> </a></li>
    @endif
    <?php $last = end($links); ?>
    <li class="arrow-last {{ ($current + 1) === count($links) ? 'unavailable' : '' }}"><a href="{{ $baseUrl.$last['uri'] }}"> <i class="fa fa-angle-double-right"></i> </a></li>
</ul>
