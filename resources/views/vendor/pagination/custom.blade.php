@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Bouton Previous --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link prev">←</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">←</a>
                </li>
            @endif

            {{-- Numéros de page --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Bouton Next --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link next" href="{{ $paginator->nextPageUrl() }}" rel="next">→</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link next">→</span>
                </li>
            @endif
        </ul>
    </nav>
@endif 