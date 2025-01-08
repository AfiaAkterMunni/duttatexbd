@extends('dashboard.layouts.master')
@section('title', 'Create Categories')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <div class="flex justify-between my-6">
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Create New Category
                </h2>
            </div>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Category Name</span>
                        <input
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Write Category Name" name="name" />
                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                    {{-- <label class="block text-md mb-6">
          <span class="text-gray-700 dark:text-gray-400">Category Image</span>
          <input class="relative m-0 mt-2 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white" type="file" id="formFile" name="image"/>
          @error('image')
            <p class="text-red-500">{{$message}}</p>
          @enderror
        </label> --}}
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Category Image</span>
                        <div class="pt-3">
                            <a href="#" id="openModalButton"
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-400 border border-transparent rounded-lg active:bg-purple-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-purple">
                                Choose Image From Gallery
                            </a>
                            @if ($gallery)
                                <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                                <img src="{{ asset('uploads/galleries/' . $gallery->image) }}" alt=""
                                    class="w-24 border-2 mt-5 p-1">
                            @endif
                        </div>
                    </label>
                    <button
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        type="submit">
                        Create Category
                    </button>
                </form>
            </div>
        </div>
    </main>

    <!-- Modal blur box  -->
    <div class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center hidden"
        id="modal">
        <!-- Modal Box -->
        <div class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-5xl"
            role="dialog">
            <header class="flex justify-between">
                <div class="flex justify-center flex-1 lg:mr-32">
                    <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                        <div class="absolute inset-y-0 flex items-center pl-2">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input id="searchTxt" class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search using image name..." aria-label="Search" />
                    </div>
                    <div>
                        <button id="searchButton" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            <span>Search</span>
                        </button>
                    </div>
                </div>
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close" id="closeModalButton1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Cards -->
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-6" id="galleryCard">
                    @foreach ($galleries as $key => $gallery)
                        <!-- Card -->
                        <a href="{{route('category.create', ['galleryId' => $gallery->id])}}">
                            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div>
                                    <img src="{{ asset('uploads/galleries/' . $gallery->image) }}" alt="">
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                                        {{ $gallery->name }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button id="prevPage" style="display: none;" class="w-full px-5 py-3 text-sm font-medium leading-5 bg-gray-500 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Previous
                </button>
                <button id="nextPage" class="w-full px-5 py-3 text-sm font-medium leading-5 bg-gray-500 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Next
                </button>
            </footer>
            {{-- <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button id="closeModalButton2"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 bg-gray-500 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <a id="confirmDeleteButton"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    Delete
                </a>
            </footer> --}}
        </div>
    </div>


    <script>
        //modal open
        let modal = document.querySelector('#modal');
        let openModalButton = document.querySelector('#openModalButton');
        let closeModalButton1 = document.querySelector('#closeModalButton1');
        openModalButton.addEventListener('click', function() {
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
            }
        });
        //modal close
        closeModalButton1.addEventListener('click', function() {
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
            }
        });

        //pagination
        let nextPage = 2;
        let prevPage = null;
        let lastPage = null;
        let nextPageButton = document.getElementById('nextPage');
        let prevPageButton = document.getElementById('prevPage');

        nextPageButton.addEventListener('click', function() {
            const xhttp = new XMLHttpRequest();
            let url = "{{ url('dashboard/gallery/paginate') }}" + "?page=" + nextPage;
            xhttp.open('GET', url);
            xhttp.send();
            xhttp.onload = function() {
                let response = JSON.parse(this.responseText);
                let galleryCard = document.getElementById('galleryCard');
                let cardData = "";
                response.data.forEach(element => {
                    let card = `<a href="{{url('dashboard/category/create/')}}/` + element.id + `"><div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div><img src="{{ asset('uploads/galleries/${element.image}') }}" alt=""></div><div><p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">${element.name}</p></div></div></a>`;
                    cardData += card;
                });
                galleryCard.innerHTML = cardData;
                lastPage = response.last_page;
                prevPage = response.current_page - 1;
                nextPage = response.current_page + 1;
                if (prevPage < 0) {
                    prevPageButton.style.display = 'none';
                } else {
                    prevPageButton.style.display = 'block';
                }
                if (nextPage > lastPage) {
                    nextPageButton.style.display = 'none';
                } else {
                    nextPageButton.style.display = 'block';
                }
            };
        });

        prevPageButton.addEventListener('click', function() {
            const xhttp = new XMLHttpRequest();
            let url = "{{ url('dashboard/gallery/paginate') }}" + "?page=" + prevPage;
            xhttp.open('GET', url);
            xhttp.send();
            xhttp.onload = function() {
                let response = JSON.parse(this.responseText);
                let galleryCard = document.getElementById('galleryCard');
                let cardData = "";
                response.data.forEach(element => {
                    let card = `<a href="{{url('dashboard/category/create/')}}/` + element.id + `"><div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div><img src="{{ asset('uploads/galleries/${element.image}') }}" alt=""></div><div><p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">${element.name}</p></div></div></a>`;
                    cardData += card;
                });
                galleryCard.innerHTML = cardData;
                lastPage = response.last_page;
                prevPage = response.current_page - 1;
                nextPage = response.current_page + 1;
                if (prevPage < 1) {
                    prevPageButton.style.display = 'none';
                } else {
                    prevPageButton.style.display = 'block';
                }
                if (nextPage > lastPage) {
                    nextPageButton.style.display = 'none';
                } else {
                    nextPageButton.style.display = 'block';
                }
            };
        });

        // search functionality
        const searchButton = document.getElementById('searchButton');
        searchButton.addEventListener('click', function() {
            const searchTxt = document.getElementById('searchTxt').value;

            const xhttp = new XMLHttpRequest();
            let url = "{{ url('dashboard/gallery/ajaxSearch') }}" + "?search=" + searchTxt;
            xhttp.open('GET', url);
            xhttp.send();
            xhttp.onload = function() {
                let response = JSON.parse(this.responseText);
                let galleryCard = document.getElementById('galleryCard');
                let cardData = "";
                if(response.length) {
                    // <a href="{ {route($routeName, ['galleryId' => $gallery->id])} }">
                    response.forEach(element => {
                        let card = `<a href="{{url('dashboard/category/create/')}}/` + element.id + `"><div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div><img src="{{ asset('uploads/galleries/${element.image}') }}" alt=""></div><div><p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">${element.name}</p></div></div></a>`;
                        cardData += card;
                    });
                } else {
                    cardData += `<span class="text-gray-600">No Image Found!</span>`;
                }
                galleryCard.innerHTML = cardData;
                prevPageButton.style.display = 'none';
                nextPageButton.style.display = 'none';
            };
        });
    </script>
@endsection
