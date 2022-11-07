<div>
    <main class="my-16 mx-auto max-w-7xl px-4 sm:mt-24">
        <div class="text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Subkategori</span>
                <span class="block text-indigo-600 xl:inline">
                    {{ $subcategory_name ?? 'UserCare' }}
                </span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                {{ $subcategory_description ?? 'UserCare' }}
            </p>
        </div>
    </main>
</div>
