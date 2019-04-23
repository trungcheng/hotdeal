@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <a class="page-link" href="#">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @else
            <li>
                <a class="page-link" href="{{ $paginator->url(1) }}">
                    <i class="fa fa-angle-double-left"></i>
                </a>
            </li>
            <li>
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a class="page-link" href="#">{{ $page }}</a>
                        </li>
                    @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage())
                        <li>
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @elseif ($page == $paginator->lastPage() - 1)
                        <li class="disabled">
                            <span class="page-link text-muted">...</span>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li>
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
            <li>
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">
                    <i class="fa fa-angle-double-right"></i>
                </a>
            </li>
        @else
            <li class="disabled">
                <a class="page-link" href="#">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif