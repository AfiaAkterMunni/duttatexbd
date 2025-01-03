@extends('dashboard.layouts.master')
@section('title', 'Gallery')
@section('content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-between my-6">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Select An Image
            </h2>
            <div>
                <button
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="{{route('gallery.create')}}"><span>Add Image</span></a>
                </button>
            </div>
        </div>
        @if (session('success'))
        <div class="flex items-center justify-between py-2 px-4 mb-8 text-md text-white bg-green-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            id="toaster">
            <div class="flex items-center">
                <span>{{ session('success') }}</span>
            </div>
            <button
                class="inline-flex items-center justify-center w-6 h-6 text-white transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                aria-label="close" @click="closeToaster()">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        @endif
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-6">
            @foreach ($galleries as $key => $gallery)
            <!-- Card -->
            <a href="{{route($routeName, ['galleryId' => $gallery->id])}}">
                <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div>
                        <img src="{{ asset('uploads/galleries/' . $gallery->image) }}" alt="">
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                            {{$gallery->name}}
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="flex justify-between py-3 px-4 text-xs tracking-wide border-t text-gray-500 dark:text-gray-400 font-semibold dark:border-gray-700 ">
            <div class="flex items-center col-span-3">
                Showing {{ $galleries->firstItem() }}-{{ $galleries->lastItem() }} of {{ $galleries->total() }}
            </div>

            <!-- Pagination -->
            <div>
                {{ $galleries->links('includes.paginator') }}
            </div>
        </div>
    </div>
</main>

@endsection
