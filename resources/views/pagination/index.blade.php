@if ($paginator->hasPages())
    <div class="col-md-12">
        <ul class="pages">

            @if ($paginator->onFirstPage())
                <li class="disabled fa fa-angle-double-left"></li>
            @else
                <li><a href="{{$paginator->previousPageUrl()}}"><i class="fa fa-angle-double-left"></i></a></li>
            @endif

            @foreach ($elements as $element)

                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a>{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a></li>
            @else
                <li class="disabled fa fa-angle-double-right"></li>
            @endif

        </ul>
    </div>
@endif


