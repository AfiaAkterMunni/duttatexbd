@extends('dashboard.layouts.master')
@section('title', 'Gallery')
@section('content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-between my-6">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Gallery
            </h2>
            <div>
                <button
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="#"><span>Add Image</span></a>
                </button>
            </div>
        </div>
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-6">
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/1.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Shirt
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/3.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Floral Shirt
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/4.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Blue Shirt
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/5.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Polo Shirt
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/1.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Shirt
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/3.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Floral Shirt
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/4.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Blue Shirt
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div>
                    <img src="../images/5.jpg" alt="">
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400 text-center">
                        Polo Shirt
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection