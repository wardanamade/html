<x-layout>
    <x-slot name="content">
        <div class="mt-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">Edit Category</h1>
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Back</a>
            </div>

            <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{ $category->name }}" required>
                </div>

                <div class="mb-4">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" class="border border-gray-400 p-2 w-full" value="{{ $category->slug }}" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">Description</label>
                    <textarea name="description" id="description" class="border border-gray-400 p-2 w-full" rows="10" required>{{ $category->description }}</textarea>
                </div>

                <div class="mb-4">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-white rounded hover:bg-blue-500">Update</button>
                </div>
            </form>
        </div>
    </x-slot>
</x-layout>
