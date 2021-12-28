@if ($paginator->hasPages())


    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    @if (!$paginator->onFirstPage())
                        <li><a href="{{ $paginator->previousPageUrl() }}">&lt;</a></li>
                    @endif


                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->nextPageUrl() }}">&gt;</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>


@endif
