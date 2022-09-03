
@if ($paginator->hasPages())
    <div role="navigation" aria-label="Pagination Navigation" class="position-relative mx-auto page-nav">
        <ul class="pagination justify-content-center">
            
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link bg-paginate-disabled">{!! __('pagination.previous') !!}</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link bg-paginate" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                </li>
            @endif

            
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link bg-paginate" href="{{ $paginator->nextPageUrl() }}" rel="next">{!! __('pagination.next') !!}</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link bg-paginate-disabled">{!! __('pagination.next') !!}</span>
                </li>
            @endif
        </ul>
    </div>
@endif 
