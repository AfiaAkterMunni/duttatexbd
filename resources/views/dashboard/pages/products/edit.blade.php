@extends('dashboard.layouts.master')
@section('title', 'Products')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex justify-between my-6">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Product
            </h2>
        </div>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
                @csrf
                <label class="block text-md mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Edit Product Name</span>
                    <input name="name" value="{{ $product->name }}" class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Write Product Name" />
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-md mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Product Image</span>
                    <div class="pt-3">
                        <a href="#" id="openModalButton" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-400 border border-transparent rounded-lg active:bg-purple-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-purple">
                            Choose Image From Gallery
                        </a>
                        @error('gallery_id')
                            <p class="text-red-500 mt-4">{{$message}}</p>
                        @enderror
                        <div id="selectedImage">
                            <div class="items-center p-1 w-32 mt-5 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="selectedImage">
                                <div>
                                    <img src="{{ asset('uploads/galleries/'. $product->gallery->image) }}" alt="">
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">{{ $product->gallery->name }}</p>
                                </div>
                                <input type="hidden" name="gallery_id" value="{{ $product->gallery->id }}">
                            </div>
                        </div>
                    </div>
                </label>
                <label class="block mb-6 text-md">
                    <span class="text-gray-700 dark:text-gray-400">
                        Select Category
                    </span>
                    {{-- <select name="category" onchange="showSubcategory(this.value)" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"> --}}
                        <select name="category" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option disabled selected>-- Select a Category --</option>
                        @foreach ($categories as $category)
                            <option @if ($category->id === $product->category_id) selected @endif value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </label>
                {{-- <label class="block mb-6 text-md">
                    <span class="text-gray-700 dark:text-gray-400">
                        Select SubCategory
                    </span>
                    <select name="subcategory" id="subcategorySelect" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option disabled selected>-- Select a Subcategory --</option>
                        @foreach ($subcategories as $subcategory)
                            <option @if ($subcategory->id === $product->subcategory_id) selected @endif value="{{ $subcategory->id }}">
                                {{ $subcategory->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('subcategory')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </label> --}}
                <label class="block mb-6 text-md">
                    <span class="text-gray-700 dark:text-gray-400">Product Description</span>
                    <textarea name="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{ $product->description }}</textarea>
                </label>
                <!-- SEO Section -->
                <div class="mt-8 mb-4 border-t pt-4">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-400">SEO Settings</h2>
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                        <select
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            name="meta_robots">
                            <option value="none">None</option>
                            <option value="index, all" @if($product->meta_robots == 'index, all') selected @endif>Index, All</option>
                            <option value="index, follow" @if($product->meta_robots == 'index, follow') selected @endif>Index, follow</option>
                            <option value="index, nofollow" @if($product->meta_robots == 'index, nofollow') selected @endif>Index, no-follow</option>
                            <option value="noindex, follow" @if($product->meta_robots == 'noindex, follow') selected @endif>No-index, follow</option>
                            <option value="noindex, nofollow" @if($product->meta_robots == 'noindex, nofollow') selected @endif>No-index, no-follow</option>
                            <option value="noodp, noydir" @if($product->meta_robots == 'noodp, noydir') selected @endif>Noodp, Noydir</option>
                        </select>
                        @error('meta_robots')
                            <p class="text-red-500 mt-4">{{$message}}</p>
                        @enderror
                    </label>
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Title</span>
                        <input
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Enter SEO Title" name="seo_title" value="{{ $product->seo_title }}"/>
                        @error('seo_title')
                            <p class="text-red-500 mt-4">{{$message}}</p>
                        @enderror
                    </label>
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                        <input
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Enter H1 Text" name="h1_text" value="{{ $product->h1_text }}"/>
                        @error('h1_text')
                            <p class="text-red-500 mt-4">{{$message}}</p>
                        @enderror
                    </label>
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                        <textarea
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Enter Meta Description" name="meta_description">{{ $product->meta_description }}</textarea>
                        @error('meta_description')
                            <p class="text-red-500 mt-4">{{$message}}</p>
                        @enderror
                    </label>
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                        <textarea
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Enter Meta Keywords" name="meta_keywords">{{ $product->meta_keywords }}</textarea>
                        @error('meta_keywords')
                            <p class="text-red-500 mt-4">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Edit Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- Modal blur box  -->
<div class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center hidden" id="modal">
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
                    <div class="galleryCard items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" xImage="{{ $gallery->image }}" xGalleryId="{{ $gallery->id }}" xGalleryName="{{ $gallery->name }}" onclick="selectImage(this)" style="cursor:pointer">
                        <div>
                            <img src="{{ asset('uploads/galleries/' . $gallery->image) }}" alt="">
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                                {{ $gallery->name }}
                            </p>
                        </div>
                    </div>
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
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description', {
        versionCheck: false
    });

    function showSubcategory(categoryId) {
        if (categoryId == "") {
            return;
        }

        const xhttp = new XMLHttpRequest();

        let url = "{{url('dashboard/categoryBySubcategory')}}/" + categoryId;
        xhttp.open("GET", url);
        xhttp.send();
        xhttp.onload = function() {
            let subcategories = JSON.parse(this.responseText);
            document.getElementById("subcategorySelect").innerHTML= "<option disabled selected>-- Select a Subcategory --</option>";
            for (let i = 0; i < subcategories.length; i++) {
                let option = document.createElement('option');
                option.value = subcategories[i].id;
                option.textContent = subcategories[i].name;
                document.getElementById("subcategorySelect").appendChild(option);
            }
        }
    }

    //modal open
    let modal = document.querySelector('#modal');
    let openModalButton = document.querySelector('#openModalButton');
    let closeModalButton1 = document.querySelector('#closeModalButton1');

    openModalButton.addEventListener('click', function() {
        if (modal.classList.contains('hidden')) {
            modal.classList.remove('hidden');
        }
    });

    closeModalButton1.addEventListener('click', function() {
        if (!modal.classList.contains('hidden')) {
            modal.classList.add('hidden');
        }
    });

    // Pagination Handler (both prev and next)
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
                let card = `<div class="galleryCard items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" xImage="${element.image}" xGalleryId="${element.id}" xGalleryName="${element.name}" onclick="selectImage(this)" style="cursor:pointer"><div><img src="{{ asset('uploads/galleries/${element.image}') }}"></div><div><p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">${element.name}</p></div></div>`;
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
                let card = `<div class="galleryCard items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" xImage="${element.image}" xGalleryId="${element.id}" xGalleryName="${element.name}" onclick="selectImage(this)" style="cursor:pointer"><div><img src="{{ asset('uploads/galleries/${element.image}') }}"></div><div><p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">${element.name}</p></div></div>`;
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
        if (searchTxt == "") {
            document.getElementById('galleryCard').innerHTML = `
                @foreach ($galleries as $key => $gallery)
                    <div class="galleryCard items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" xImage="{{ $gallery->image }}" xGalleryId="{{ $gallery->id }}" xGalleryName="{{ $gallery->name }}" onclick="selectImage(this)" style="cursor:pointer">
                        <div>
                            <img src="{{ asset('uploads/galleries/' . $gallery->image) }}" alt="">
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                                {{ $gallery->name }}
                            </p>
                        </div>
                    </div>
                @endforeach
                `;
                nextPageButton.style.display = 'block';
        } else {
            const xhttp = new XMLHttpRequest();
            let url = "{{ url('dashboard/gallery/ajaxSearch') }}" + "?search=" + searchTxt;
            xhttp.open('GET', url);
            xhttp.send();
            xhttp.onload = function() {
                let response = JSON.parse(this.responseText);
                let galleryCard = document.getElementById('galleryCard');
                let cardData = "";
                if(response.length) {
                    response.forEach(element => {
                        let card = `<div class="galleryCard items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" xImage="${element.image}" xGalleryId="${element.id}" xGalleryName="${element.name}" onclick="selectImage(this)" style="cursor:pointer"><div><img src="{{ asset('uploads/galleries/${element.image}') }}"></div><div><p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">${element.name}</p></div></div>`;
                        cardData += card;
                    });
                } else {
                    cardData += `<span class="text-gray-600">No Image Found!</span>`;
                }
                galleryCard.innerHTML = cardData;
                prevPageButton.style.display = 'none';
                nextPageButton.style.display = 'none';
            };
        }

    });

    // select image from modal
    function selectImage(galleryImage) {
        const galleryImageAttr = galleryImage.getAttribute('xImage');
        const galleryIdAttr = galleryImage.getAttribute('xGalleryId');
        const galleryNameAttr = galleryImage.getAttribute('xGalleryName');
        const selectedImage = document.getElementById('selectedImage');
        if (!modal.classList.contains('hidden')) {
            modal.classList.add('hidden');
        }
        selectedImage.innerHTML = `
            <div class="items-center p-1 w-32 mt-5 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="selectedImage">
                <div>
                    <img src="{{ asset('uploads/galleries/` + galleryImageAttr + `') }}" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">${galleryNameAttr}</p>
                </div>
                <input type="hidden" name="gallery_id" value="${galleryIdAttr}">
            </div>
        `;
    }
</script>
@endsection
