@extends('dashboard.layouts.master')
@section('title', 'Contacts')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <div class="flex justify-between my-6">
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Contact List
                </h2>
                <div>
                    <button
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        <span>Download</span>
                    </button>
                </div>
            </div>
            <!-- table -->
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
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">SL</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Phone No</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($contacts as $key => $contact)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">{{ $key + 1 }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $contact->name }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $contact->email }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $contact->phone }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $contact->created_at->format('d M, Y') }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <a href="#" name="{{ $contact->name }}" email="{{ $contact->email }}"
                                                phone="{{ $contact->phone }}" message="{{ $contact->message }}"
                                                image="{{ $contact->attachment }}"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray openModalButtonForView"
                                                aria-label="View">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 576 512" fill="currentColor">
                                                    <path
                                                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                </svg>

                                            </a>
                                            <a href="#" name="{{ $contact->id }}"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray openModalButtonForDelete"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div
                    class="flex justify-between py-3 px-4 text-xs tracking-wide border-t text-gray-500 dark:text-gray-400 font-semibold dark:border-gray-700 ">
                    <div class="flex items-center col-span-3">
                        Showing {{ $contacts->firstItem() }}-{{ $contacts->lastItem() }} of {{ $contacts->total() }}
                    </div>

                    <!-- Pagination -->
                    <div>
                        {{ $contacts->links('includes.paginator') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal blur box for view -->
    <div class="fixed inset-0 z-30 flex items-center justify-center bg-black bg-opacity-50 hidden" id="viewModal">
        <!-- Modal Box -->
        <div class="w-full px-8 py-6 bg-white rounded-lg dark:bg-gray-800 sm:max-w-2xl">
            <header class="flex justify-between items-center mb-4">
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">
                    Contact View
                </p>
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover:text-gray-700"
                    aria-label="close" id="closeModalButton1ForView">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>

            <!-- Modal body -->
            <div class="space-y-6">
                <!-- Modal Fields -->
                <div class="space-y-4">
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300 w-24">Name:</p>
                        <div class="w-full max-h-40 overflow-y-auto">
                            <p id="modalName" class="text-sm text-gray-500 dark:text-gray-400"></p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300 w-24">Email:</p>
                        <div class="w-full max-h-40 overflow-y-auto">
                            <p id="modalEmail" class="text-sm text-gray-500 dark:text-gray-400"></p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300 w-24">Phone:</p>
                        <div class="w-full max-h-40 overflow-y-auto">
                            <p id="modalPhone" class="text-sm text-gray-500 dark:text-gray-400"></p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300 w-24">Message:</p>
                        <div class="w-full max-h-40 overflow-y-auto">
                            <p id="modalMessage" class="text-sm text-gray-500 dark:text-gray-400"></p>
                        </div>
                    </div>
                    <div class="flex items-center" id="modalImage">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300 w-24">Image:</p>
                        <img alt="Image" class="w-32 h-32 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <footer class="flex justify-end mt-6 space-x-4">
                <button id="closeModalButton2ForView"
                    class="px-5 py-3 text-sm font-medium text-gray-700 bg-gray-200 border rounded-lg dark:bg-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Close
                </button>
            </footer>
        </div>
    </div>



    <!-- Modal blur box for delete  -->
    <div class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center hidden"
        id="deleteModal">
        <!-- Modal Box -->
        <div class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog">
            <header class="flex justify-end">
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close" id="closeModalButton1ForDelete">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal title -->
                <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                    Confirm Delete
                </p>
                <!-- Modal description -->
                <p class="text-sm text-gray-700 dark:text-gray-400">
                    Are you sure you want delete this item?
                </p>
            </div>
            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button id="closeModalButton2ForDelete"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 bg-gray-500 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <a id="confirmDeleteButton"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    Delete
                </a>
            </footer>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function closeToaster() {
            let toaster = document.getElementById('toaster');
            toaster.style.display = 'none';
        }

        // view modal
        let viewModal = document.querySelector('#viewModal');
        let openModalButtonForView = document.querySelectorAll('.openModalButtonForView');
        let closeModalButton1ForView = document.querySelector('#closeModalButton1ForView');
        let closeModalButton2ForView = document.querySelector('#closeModalButton2ForView');
        openModalButtonForView.forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('modalName').innerText = button.getAttribute('name');
                document.getElementById('modalEmail').innerText = button.getAttribute('email');
                document.getElementById('modalPhone').innerText = button.getAttribute('phone');
                document.getElementById('modalMessage').innerText = button.getAttribute('message');
                let attachment = button.getAttribute('image');
                if (attachment) {
                    document.querySelector('#modalImage img').setAttribute('src', "{{ asset('uploads/contacts/:image') }}".replace(":image", button.getAttribute('image')));
                } else {
                    document.querySelector('#modalImage').style = "display:none";
                }
                if (viewModal.classList.contains('hidden')) {
                    viewModal.classList.remove('hidden');
                }
            });
        });

        closeModalButton1ForView.addEventListener('click', function() {
            if (!viewModal.classList.contains('hidden')) {
                viewModal.classList.add('hidden');
            }
        });
        closeModalButton2ForView.addEventListener('click', function() {
            if (!viewModal.classList.contains('hidden')) {
                viewModal.classList.add('hidden');
            }
        });

        // delete modal
        let deleteModal = document.querySelector('#deleteModal');
        let openModalButtonForDelete = document.querySelectorAll('.openModalButtonForDelete');
        let closeModalButton1ForDelete = document.querySelector('#closeModalButton1ForDelete');
        let closeModalButton2ForDelete = document.querySelector('#closeModalButton2ForDelete');
        let confirmDeleteButton = document.querySelector('#confirmDeleteButton');
        openModalButtonForDelete.forEach(button => {
            button.addEventListener('click', function() {
                const id = button.getAttribute('name');
                confirmDeleteButton.setAttribute('href', "{{ route('contact.delete', ['id' => ':id']) }}"
                    .replace(":id", id));
                if (deleteModal.classList.contains('hidden')) {
                    deleteModal.classList.remove('hidden');
                }
            });
        });

        closeModalButton1ForDelete.addEventListener('click', function() {
            if (!deleteModal.classList.contains('hidden')) {
                deleteModal.classList.add('hidden');
            }
        });
        closeModalButton2ForDelete.addEventListener('click', function() {
            if (!deleteModal.classList.contains('hidden')) {
                deleteModal.classList.add('hidden');
            }
        });
    </script>
@endsection
