@if ($paginator->hasPages())
    <ul class="justify-end py-0 px-4 flex">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0">«</a></li>
        @else
            <li><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0" href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a></li>
        @endif

        @if($paginator->currentPage() > 3)
            <li class="hidden-xs"><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0" href="{{ $paginator->url(1) }}">1</a></li>
        @endif
        @if($paginator->currentPage() > 4)
            <li><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0">...</a></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li class="active"><a class="active bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0">{{ $i }}</a></li>
                @else
                    <li><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0">...</a></li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="hidden-xs"><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="bg-sky-500 justify-center items-center py-0 px-2 my-0 mx-1 border rounded decoration-0" href="{{ $paginator->nextPageUrl() }}" rel="next">»</a></li>
        @else
            <li class="disabled"><a class="bg-sky-500 justify-center" items-center py-0 px-2 my-0 mx-1 border rounded decoration-0>»</a></li>
        @endif
    </ul>
@endif