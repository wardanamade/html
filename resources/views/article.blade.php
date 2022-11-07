<x-layout>
    <x-slot name="title">
        {{ $article->title }}
    </x-slot>

    <x-slot name="content">
        <x-sections.heroes.article-hero>
            <x-slot name="article_title">
                {{ $article->title }}
            </x-slot>
            <x-slot name="article_category">
                {{ $article->subcategory->category->name }}
            </x-slot>
            <x-slot name="article_subcategory">
                {{ $article->subcategory->name }}
            </x-slot>
            <x-slot name="article_author">
                {{ $article->user->name }}
            </x-slot>
        </x-sections.heroes.article-hero>

        {{-- article body --}}
        <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
            {!! $article->body !!}
        </div>


        {{-- feedback --}}
        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
            <div class="rounded-md shadow">
                <a href="#feedback" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Berikan Feedback
                </a>
            </div>
            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                <a href="#feedback" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                    Lihat Feedback
                </a>
            </div>
        </div>

    </x-slot>
</x-layout>
