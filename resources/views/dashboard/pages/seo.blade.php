@extends('dashboard.layouts.master')
@section('title', 'Subscribers')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <div class="my-6">
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 page-heading">SEO Setting | Home Page</h2>
            </div>
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
                    <!-- Tab 1 Content -->
                    <div class="tab-panel">
                        <!-- SEO Section -->
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                            <select
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="meta_robots">
                                <option value="none">None</option>
                                <option value="index, all" selected="">Index, All</option>
                                <option value="index, follow">Index, follow</option>
                                <option value="index, nofollow">Index, no-follow</option>
                                <option value="noindex, follow">No-index, follow</option>
                                <option value="noindex, nofollow">No-index, no-follow</option>
                                <option value="noodp, noydir">Noodp, Noydir</option>
                            </select>
                            @error('meta_robots')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Title</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter SEO Title" name="seo_title" />
                            @error('seo_title')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter H1 Text" name="h1_text" />
                            @error('h1_text')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Description" name="meta_description"></textarea>
                            @error('meta_description')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Keywords" name="meta_keywords"></textarea>
                            @error('meta_keywords')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <button
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            type="submit">
                            Update Home
                        </button>
                    </div>
                    <!-- Tab 2 Content -->
                    <div class="tab-panel hidden">
                        <!-- SEO Section -->
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                            <select
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="meta_robots">
                                <option value="none">None</option>
                                <option value="index, all" selected="">Index, All</option>
                                <option value="index, follow">Index, follow</option>
                                <option value="index, nofollow">Index, no-follow</option>
                                <option value="noindex, follow">No-index, follow</option>
                                <option value="noindex, nofollow">No-index, no-follow</option>
                                <option value="noodp, noydir">Noodp, Noydir</option>
                            </select>
                            @error('meta_robots')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Title</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter SEO Title" name="seo_title" />
                            @error('seo_title')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter H1 Text" name="h1_text" />
                            @error('h1_text')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Description" name="meta_description"></textarea>
                            @error('meta_description')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Keywords" name="meta_keywords"></textarea>
                            @error('meta_keywords')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <button
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            type="submit">
                            Update About
                        </button>
                    </div>
                    <!-- Tab 3 Content -->
                    <div class="tab-panel hidden">
                        <!-- SEO Section -->
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                            <select
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="meta_robots">
                                <option value="none">None</option>
                                <option value="index, all" selected="">Index, All</option>
                                <option value="index, follow">Index, follow</option>
                                <option value="index, nofollow">Index, no-follow</option>
                                <option value="noindex, follow">No-index, follow</option>
                                <option value="noindex, nofollow">No-index, no-follow</option>
                                <option value="noodp, noydir">Noodp, Noydir</option>
                            </select>
                            @error('meta_robots')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Title</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter SEO Title" name="seo_title" />
                            @error('seo_title')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter H1 Text" name="h1_text" />
                            @error('h1_text')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Description" name="meta_description"></textarea>
                            @error('meta_description')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Keywords" name="meta_keywords"></textarea>
                            @error('meta_keywords')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <button
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            type="submit">
                            Update Service
                        </button>
                    </div>
                    <!-- Tab 4 Content -->
                    <div class="tab-panel hidden">
                        <!-- SEO Section -->
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Robots</span>
                            <select
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="meta_robots">
                                <option value="none">None</option>
                                <option value="index, all" selected="">Index, All</option>
                                <option value="index, follow">Index, follow</option>
                                <option value="index, nofollow">Index, no-follow</option>
                                <option value="noindex, follow">No-index, follow</option>
                                <option value="noindex, nofollow">No-index, no-follow</option>
                                <option value="noodp, noydir">Noodp, Noydir</option>
                            </select>
                            @error('meta_robots')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Title</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter SEO Title" name="seo_title" />
                            @error('seo_title')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">H1 Text</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter H1 Text" name="h1_text" />
                            @error('h1_text')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Description" name="meta_description"></textarea>
                            @error('meta_description')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block text-md mb-6">
                            <span class="text-gray-700 dark:text-gray-400">Meta Keywords</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Meta Keywords" name="meta_keywords"></textarea>
                            @error('meta_keywords')
                                <p class="text-red-500 mt-4">{{ $message }}</p>
                            @enderror
                        </label>
                        <button
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            type="submit">
                            Update Contact
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        document.querySelectorAll('.tab-button').forEach((button, index) => {
            button.addEventListener('click', () => {
                document.querySelector('.page-heading').innerText = `SEO Setting | ${button.innerText} Page`;
                document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.add('hidden'));
                document.querySelectorAll('.tab-panel')[index].classList.remove('hidden');
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('border-blue-500', 'bg-blue-500', 'rounded-t-lg', 'text-white'));
                button.classList.add('border-blue-500', 'bg-blue-500', 'rounded-t-lg', 'text-white');
            });
        });
    </script>
@endsection
