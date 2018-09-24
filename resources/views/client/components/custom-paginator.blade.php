@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="#" class="js-news-page link active" aria-current="page">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}" class="js-news-page link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" class="js-news-next" rel="next" aria-label="@lang('pagination.next')">Показать еще</a></li>
        @endif
    </ul>
@endif
