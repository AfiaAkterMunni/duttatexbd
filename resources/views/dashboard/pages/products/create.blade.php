@extends('dashboard.layouts.master')
@section('title', 'Create Products')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <div class="flex justify-between my-6">
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Create New Product
                </h2>
            </div>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Product Name</span>
                        <input name="name"
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Write Product Name" />
                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label class="block text-md mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Product Image</span>
                        <input name="image"
                            class="relative m-0 mt-2 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white"
                            type="file" id="formFile" />
                        @error('image')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label class="block mb-6 text-md">
                        <span class="text-gray-700 dark:text-gray-400">
                            Select Category
                        </span>
                        <select name="category" onchange="showSubcategory(this.value)"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option disabled selected>-- Select a Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label class="block mb-6 text-md">
                        <span class="text-gray-700 dark:text-gray-400">
                            Select SubCategory
                        </span>
                        <select name="subcategory" id="subcategorySelect"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option disabled selected>-- Select a Subcategory --</option>
                        </select>
                        @error('subcategory')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label class="block mb-6 text-md">
                        <span class="text-gray-700 dark:text-gray-400">Product Description</span>
                        <textarea name="description"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3" placeholder="Enter some long form content."></textarea>
                        @error('description')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Create Product
                    </button>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');

        function showSubcategory(categoryId) {
            if (categoryId == "") {
                return;
            }

            const xhttp = new XMLHttpRequest();

            let url = "{{ url('dashboard/categoryBySubcategory') }}/" + categoryId;
            xhttp.open("GET", url);
            xhttp.send();
            xhttp.onload = function() {
                // console.log(this.responseText);
                let subcategories = JSON.parse(this.responseText); //string to object
                // console.log(subcategories);
                document.getElementById("subcategorySelect").innerHTML= "<option disabled selected>-- Select a Subcategory --</option>";
                // console.log(subcategories.length);
                for(let i = 0; i < subcategories.length; i++) {
                    // console.log(subcategories[i]);
                    let option = document.createElement('option');
                    // console.log(option);
                    option.value = subcategories[i].id;
                    option.textContent = subcategories[i].name;
                    // console.log(option);
                    document.getElementById("subcategorySelect").appendChild(option);
                }
            }
        }
    </script>
@endsection
