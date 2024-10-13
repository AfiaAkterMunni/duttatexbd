@if ($paginator->hasPages())
    <ul class="justify-end flex">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600">«</a></li>
        @else
            <li><a class=" py-1 px-2 mx-1 border rounded dark:border-gray-600" href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a></li>
        @endif

        @if($paginator->currentPage() > 3)
            <li class="hidden-xs"><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600" href="{{ $paginator->url(1) }}">1</a></li>
        @endif
        @if($paginator->currentPage() > 4)
            <li><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600">...</a></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li class="active"><a class="bg-gray-200 py-1 px-2 mx-1 border rounded dark:border-gray-600">{{ $i }}</a></li>
                @else
                    <li><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600">...</a></li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="hidden-xs"><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600" href="{{ $paginator->nextPageUrl() }}" rel="next">»</a></li>
        @else
            <li class="disabled"><a class="py-1 px-2 mx-1 border rounded dark:border-gray-600">»</a></li>
        @endif
    </ul>
@endif
