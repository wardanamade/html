<x-layout>
    <x-slot name="title">
        Subkategori {{ $subcategory->name }}
    </x-slot>

    <x-slot name="content">
        <x-sections.heroes.subcategory-hero>
            <x-slot name="subcategory_name">
                {{ $subcategory->name }}
            </x-slot>
            <x-slot name="subcategory_description">
                {{ $subcategory->description }}
            </x-slot>
        </x-sections.heroes.subcategory-hero>

    {{-- list of categorized articles --}}
    <div class="mt-8">
        <div class="mx-auto">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Semua Artikel</h2>
            <dl class="mt-4 grid grid-cols-3 gap-4 sm:grid-rows-1">
                @unless ($subcategory->articles->isEmpty())
                    @foreach ($subcategory->articles as $article)
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <dt class="text-base leading-6 font-medium text-gray-900">
                                    <a href="
                                    {{ route('article', $article->slug) }}
                                    " class="text-indigo-600 hover:text-indigo-900">
                                    {{ $article->title }}
                                </a>
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-500">
                                    {{ $article->body }}
                                </dd>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base leading-6 font-medium text-gray-900">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                    Belum ada artikel
                                </a>
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-500">
                                Tidak ada artikel yang terdaftar pada subkategori ini.
                            </dd>
                        </div>
                    </div>
                @endunless
            </dl>
        </div>
    </x-slot>
</x-layout>
