<x-layout>
    <x-slot name="title">
        Tambah Pengaduan
    </x-slot>

    <x-slot name="content">
        <div class="px-4 py-8 sm:px-0">
            <form action="{{ route('tickets.store') }}" method="POST">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="category" class="block text-sm font-medium leading-5 text-gray-700">Category</label>
                                <select id="category" name="category" class="form-select block w-full shadow-sm transition duration-150 ease-in-out sm:text-sm border-gray-300 sm:leading-5 rounded-md">
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="subcategory" class="block text-sm font-medium leading-5 text-gray-700">Subcategory</label>
                                <select id="subcategory" name="subcategory" class="form-select block w-full shadow-sm transition duration-150 ease-in-out sm:text-sm border-gray-300 sm:leading-5 rounded-md">
                                    <option value="1">Subcategory 1</option>
                                    <option value="2">Subcategory 2</option>
                                    <option value="3">Subcategory 3</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="description" name="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="priority" class="block text-sm font-medium leading-5 text-gray-700">Priority</label>
                                <select id="priority" name="priority" class="form-select block w-full shadow-sm transition duration-150 ease-in-out sm:text-sm border-gray-300 sm:leading-5 rounded-md">
                                    <option value="1">Low</option>
                                    <option value="2">Medium</option>
                                    <option value="3">High</option>
                                </select>
                            </div>

                            {{-- ticket multiple attachment --}}
                            <div class="col-span-6 sm:col-span-4">
                                <label for="attachment" class="block text-sm font-medium leading-5 text-gray-700">Attachment</label>
                                <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M14 14h20v20H14V14z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 14h.01M12 18h.01M12 22h.01M12 26h.01M12 30h.01M12 34h.01M20 14h.01M20 18h.01M20 22h.01M20 26h.01M20 30h.01M20 34h.01M28 14h.01M28 18h.01M28 22h.01M28 26h.01M28 30h.01M28 34h.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="attachment[]" type="file" class="sr-only" multiple>
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </x-slot>
</x-layout>
