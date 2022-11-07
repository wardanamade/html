<x-layout>
    <x-slot name="title">
        Kategori {{ $category->name }}
    </x-slot>

    <x-slot name="content">
        <x-sections.heroes.category-hero>
            <x-slot name="category_name">
                {{ $category->name }}
            </x-slot>
            <x-slot name="category_description">
                {{ $category->description }}
            </x-slot>
        </x-sections.heroes.category-hero>

    {{-- list of categorized articles --}}
    <div class="mt-8">
        <div class="mx-auto">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Semua Subkategori</h2>
            <dl class="mt-4 grid grid-cols-3 gap-4 sm:grid-rows-1">
                @unless ($category->subcategories->isEmpty())
                    @foreach ($category->subcategories as $subcategory)
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <dt class="text-base leading-6 font-medium text-gray-900">
                                    <a href="
                                    {{ route('subcategory', $subcategory->slug) }}
                                    " class="text-indigo-600 hover:text-indigo-900">
                                    {{ $subcategory->name }}
                                </a>
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-500">
                                    {{ $subcategory->description }}
                                </dd>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base leading-6 font-medium text-gray-900">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                    Belum ada subkategori
                                </a>
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-500">
                                Tidak ada subkategori yang terdaftar pada kategori ini.
                            </dd>
                        </div>
                    </div>
                @endunless
            </dl>
        </div>
    </x-slot>
</x-layout>
