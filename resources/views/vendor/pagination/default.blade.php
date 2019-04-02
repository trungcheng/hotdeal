@if ($paginator->hasPages())
    <nav class="mt-5" aria-label="Page navigation" style="margin-top:3rem !important;">
        <ul class="pagination pagination-style-1 justify-content-center mb-0">
            @if ($paginator->onFirstPage())
                <li class="page-item mr-auto disabled">
                    <a class="page-link" href="#">
                        <i class="fa fa-long-arrow-alt-left mr-md-1"></i>
                        <span class="d-none d-md-inline">Trang trước</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ url()->current() }}?page=1">
                        <i class="fa fa-long-arrow-alt-left mr-md-1"></i>
                        <span class="d-none d-md-inline">Đầu</span>
                    </a>
                </li>
                <li class="page-item mr-auto">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                        <i class="fa fa-long-arrow-alt-left mr-md-1"></i>
                        <span class="d-none d-md-inline">Trang trước</span>
                    </a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link" href="#">{{ $page }}</a>
                            </li>
                        @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage())
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @elseif ($page == $paginator->lastPage() - 1)
                            <li class="page-item disabled">
                                <span class="page-link text-muted">...</span>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item ml-auto">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                        <span class="d-none d-md-inline">Trang sau</span>
                        <i class="fa fa-long-arrow-alt-right ml-md-1"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url($page) }}">
                        <span class="d-none d-md-inline">Cuối</span>
                        <i class="fa fa-long-arrow-alt-right ml-md-1"></i>
                    </a>
                </li>
            @else
                <li class="page-item ml-auto disabled">
                    <a class="page-link" href="#">
                        <span class="d-none d-md-inline">Trang sau</span>
                        <i class="fa fa-long-arrow-alt-right ml-md-1"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif