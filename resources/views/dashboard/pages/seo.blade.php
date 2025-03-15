@extends('dashboard.layouts.master')
@section('title', 'Subscribers')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <div class="my-6">
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 page-heading">SEO Setting | Home Page</h2>
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
            <div class="w-full">
                <!-- Tab Navigation -->
                <div class="flex border-gray-300">
                    <button
                        class="tab-button flex-1 py-2 px-4 text-center border-b-2 border-blue-500 bg-blue-500 rounded-t-lg text-white">
                        Home
                    </button>
                    <button
                        class="tab-button flex-1 py-2 px-4 text-center border-b-2 text-gray-600 hover:text-blue-600 hover:border-blue-500">
                        About
                    </button>
                    <button
                        class="tab-button flex-1 py-2 px-4 text-center border-b-2 text-gray-600 hover:text-blue-600 border-b-2 hover:border-blue-500">
                        Product
                    </button>
                    <button
                        class="tab-button flex-1 py-2 px-4 text-center border-b-2 text-gray-600 hover:text-blue-600  hover:border-blue-500">
                        Service
                    </button>
                    <button
                        class="tab-button flex-1 py-2 px-4 text-center border-b-2 text-gray-600 hover:text-blue-600 border-b-2 hover:border-blue-500">
                        Contact
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content mt-4">
                    <!-- Home Page Seo Form -->
                    <div class="tab-panel">
                        <form action="{{ route('seo.update') }}" method="POST">
                            @csrf()
                            <input type="hidden" name="page_name" value="home">
                            <!-- SEO Section -->
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                                <select class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="meta_robots">
                                    <option value="none" @if(optional($home)->meta_robots == 'none') selected @endif selected>None</option>
                                    <option value="index, all" @if(optional($home)->meta_robots == 'index, all') selected @endif>Index, All</option>
                                    <option value="index, follow" @if(optional($home)->meta_robots == 'index, follow') selected @endif>Index, follow</option>
                                    <option value="index, nofollow" @if(optional($home)->meta_robots == 'index, nofollow') selected @endif>Index, no-follow</option>
                                    <option value="noindex, follow" @if(optional($home)->meta_robots == 'noindex, follow') selected @endif>No-index, follow</option>
                                    <option value="noindex, nofollow" @if(optional($home)->meta_robots == 'noindex, nofollow') selected @endif>No-index, no-follow</option>
                                    <option value="noodp, noydir" @if(optional($home)->meta_robots == 'noodp, noydir') selected @endif>Noodp, Noydir</option>
                                </select>
                                @error('meta_robots')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter SEO Title" name="seo_title" value="{{ optional($home)->seo_title }}"/>
                                @error('seo_title')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter H1 Text" name="h1_text" value="{{ optional($home)->h1_text }}"/>
                                @error('h1_text')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Description" name="meta_description">{{ optional($home)->meta_description }}</textarea>
                                @error('meta_description')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Keywords" name="meta_keywords">{{ optional($home)->meta_keywords }}</textarea>
                                @error('meta_keywords')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">
                                Update Home Page Seo
                            </button>
                        </form>
                    </div>
                    <!-- About Page Seo Form -->
                    <div class="tab-panel hidden">
                        <form action="{{ route('seo.update') }}" method="POST">
                            @csrf()
                            <input type="hidden" name="page_name" value="about">
                            <!-- SEO Section -->
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                                <select
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="meta_robots">
                                    <option value="none" @if(optional($about)->meta_robots == 'none') selected @endif selected>None</option>
                                    <option value="index, all" @if(optional($about)->meta_robots == 'index, all') selected @endif>Index, All</option>
                                    <option value="index, follow" @if(optional($about)->meta_robots == 'index, follow') selected @endif>Index, follow</option>
                                    <option value="index, nofollow" @if(optional($about)->meta_robots == 'index, nofollow') selected @endif>Index, no-follow</option>
                                    <option value="noindex, follow" @if(optional($about)->meta_robots == 'noindex, follow') selected @endif>No-index, follow</option>
                                    <option value="noindex, nofollow" @if(optional($about)->meta_robots == 'noindex, nofollow') selected @endif>No-index, no-follow</option>
                                    <option value="noodp, noydir" @if(optional($about)->meta_robots == 'noodp, noydir') selected @endif>Noodp, Noydir</option>
                                </select>
                                @error('meta_robots')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter SEO Title" name="seo_title" value="{{ optional($about)->seo_title }}"/>
                                @error('seo_title')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter H1 Text" name="h1_text" value="{{ optional($about)->h1_text }}"/>
                                @error('h1_text')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Description" name="meta_description">{{ optional($about)->meta_description }}</textarea>
                                @error('meta_description')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Keywords" name="meta_keywords">{{ optional($about)->meta_keywords }}</textarea>
                                @error('meta_keywords')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <button
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                type="submit">
                                Update About Page Seo
                            </button>
                        </form>
                    </div>
                    <!-- Product Page Seo Form -->
                    <div class="tab-panel hidden">
                        <form action="{{ route('seo.update') }}" method="POST">
                            @csrf()
                            <input type="hidden" name="page_name" value="product">
                            <!-- SEO Section -->
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                                <select
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="meta_robots">
                                    <option value="none" @if(optional($product)->meta_robots == 'none') selected @endif selected>None</option>
                                    <option value="index, all" @if(optional($product)->meta_robots == 'index, all') selected @endif>Index, All</option>
                                    <option value="index, follow" @if(optional($product)->meta_robots == 'index, follow') selected @endif>Index, follow</option>
                                    <option value="index, nofollow" @if(optional($product)->meta_robots == 'index, nofollow') selected @endif>Index, no-follow</option>
                                    <option value="noindex, follow" @if(optional($product)->meta_robots == 'noindex, follow') selected @endif>No-index, follow</option>
                                    <option value="noindex, nofollow" @if(optional($product)->meta_robots == 'noindex, nofollow') selected @endif>No-index, no-follow</option>
                                    <option value="noodp, noydir" @if(optional($product)->meta_robots == 'noodp, noydir') selected @endif>Noodp, Noydir</option>
                                </select>
                                @error('meta_robots')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter SEO Title" name="seo_title" value="{{ optional($product)->seo_title }}"/>
                                @error('seo_title')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter H1 Text" name="h1_text" value="{{ optional($product)->h1_text }}"/>
                                @error('h1_text')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Description" name="meta_description">{{ optional($product)->meta_description }}</textarea>
                                @error('meta_description')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Keywords" name="meta_keywords">{{ optional($product)->meta_keywords }}</textarea>
                                @error('meta_keywords')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <button
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                type="submit">
                                Update Product Page Seo
                            </button>
                        </form>
                    </div>
                    <!-- Service Page Seo Form -->
                    <div class="tab-panel hidden">
                        <form action="{{ route('seo.update') }}" method="POST">
                            @csrf()
                            <input type="hidden" name="page_name" value="service">
                            <!-- SEO Section -->
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                                <select
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="meta_robots">
                                    <option value="none" @if(optional($service)->meta_robots == 'none') selected @endif selected>None</option>
                                    <option value="index, all" @if(optional($service)->meta_robots == 'index, all') selected @endif>Index, All</option>
                                    <option value="index, follow" @if(optional($service)->meta_robots == 'index, follow') selected @endif>Index, follow</option>
                                    <option value="index, nofollow" @if(optional($service)->meta_robots == 'index, nofollow') selected @endif>Index, no-follow</option>
                                    <option value="noindex, follow" @if(optional($service)->meta_robots == 'noindex, follow') selected @endif>No-index, follow</option>
                                    <option value="noindex, nofollow" @if(optional($service)->meta_robots == 'noindex, nofollow') selected @endif>No-index, no-follow</option>
                                    <option value="noodp, noydir" @if(optional($service)->meta_robots == 'noodp, noydir') selected @endif>Noodp, Noydir</option>
                                </select>
                                @error('meta_robots')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter SEO Title" name="seo_title" value="{{ optional($service)->seo_title }}"/>
                                @error('seo_title')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter H1 Text" name="h1_text" value="{{ optional($service)->h1_text }}"/>
                                @error('h1_text')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Description" name="meta_description">{{ optional($service)->meta_description }}</textarea>
                                @error('meta_description')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Keywords" name="meta_keywords">{{ optional($service)->meta_keywords }}</textarea>
                                @error('meta_keywords')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <button
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                type="submit">
                                Update Service Page Seo
                            </button>
                        </form>
                    </div>
                    <!-- Contact Page Seo Form -->
                    <div class="tab-panel hidden">
                        <form action="{{ route('seo.update') }}" method="POST">
                            @csrf()
                            <input type="hidden" name="page_name" value="contact">
                            <!-- SEO Section -->
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                                <select
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="meta_robots">
                                    <option value="none" @if(optional($contact)->meta_robots == 'none') selected @endif selected>None</option>
                                    <option value="index, all" @if(optional($contact)->meta_robots == 'index, all') selected @endif>Index, All</option>
                                    <option value="index, follow" @if(optional($contact)->meta_robots == 'index, follow') selected @endif>Index, follow</option>
                                    <option value="index, nofollow" @if(optional($contact)->meta_robots == 'index, nofollow') selected @endif>Index, no-follow</option>
                                    <option value="noindex, follow" @if(optional($contact)->meta_robots == 'noindex, follow') selected @endif>No-index, follow</option>
                                    <option value="noindex, nofollow" @if(optional($contact)->meta_robots == 'noindex, nofollow') selected @endif>No-index, no-follow</option>
                                    <option value="noodp, noydir" @if(optional($contact)->meta_robots == 'noodp, noydir') selected @endif>Noodp, Noydir</option>
                                </select>
                                @error('meta_robots')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter SEO Title" name="seo_title" value="{{ optional($contact)->seo_title }}"/>
                                @error('seo_title')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                                <input
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter H1 Text" name="h1_text" value="{{ optional($contact)->h1_text }}"/>
                                @error('h1_text')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Description" name="meta_description">{{ optional($contact)->meta_description }}</textarea>
                                @error('meta_description')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="block text-md mb-6">
                                <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                                <textarea
                                    class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Enter Meta Keywords" name="meta_keywords">{{ optional($contact)->meta_keywords }}</textarea>
                                @error('meta_keywords')
                                    <p class="text-red-500 mt-4">{{ $message }}</p>
                                @enderror
                            </label>
                            <button
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                type="submit">
                                Update Contact Page Seo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const activeTab = urlParams.get('tab');

            if (activeTab) {
                const activeTabButton = [...document.querySelectorAll('.tab-button')].find(button => button.innerText.toLowerCase() === activeTab);

                if (activeTabButton) {
                    activeTabButton.click();
                }
            }
        });

        document.querySelectorAll('.tab-button').forEach((button, index) => {
            button.addEventListener('click', () => {
                document.querySelector('.page-heading').innerText = `SEO Setting | ${button.innerText} Page`;
                document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.add('hidden'));
                document.querySelectorAll('.tab-panel')[index].classList.remove('hidden');
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('border-blue-500', 'bg-blue-500', 'rounded-t-lg', 'text-white'));
                button.classList.add('border-blue-500', 'bg-blue-500', 'rounded-t-lg', 'text-white');
            });
        });

        function closeToaster() {
            let toaster = document.getElementById('toaster');
            toaster.style.display = 'none';
        }
    </script>
@endsection
