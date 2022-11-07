<x-layout>
    <x-slot name="title">
        Pusat Bantuan
    </x-slot>

    <x-slot name="content">
        <x-sections.heroes.help-center-hero />
        <div class="mt-8">
            <div class="mx-auto">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Pusat Bantuan</h2>
                <dl class="mt-4 grid grid-cols-3 gap-4 sm:grid-rows-1">
                    {{-- Pusat Pengetahuan card --}}
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">
                                Pusat Pengetahuan
                            </dt>
                            <dd class="mt-1 text-sm text-gray-500">
                                Pusat pengetahuan berisi informasi mengenai penggunaan aplikasi.
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-4 sm:px-6">
                            <a href="
                            {{-- {{ route('knowledge-center') }} --}}
                            " class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Buka Pusat Pengetahuan
                            </a>
                        </div>
                    </div>
                    {{-- Layanan Pengaduan card --}}
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">
                                Layanan Pengaduan
                            </dt>
                            <dd class="mt-1 text-sm text-gray-500">
                                Semua pengaduan Anda akan kami bantu selesaikan.
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-4 sm:px-6">
                            <a href="/front-ticket-form
                            {{-- {{ route('tickets') }} --}}
                            " class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Buat Pengaduan
                            </a>
                        </div>
                    </div>
                    {{-- Kontak Kami card --}}
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">
                                Kontak Kami
                            </dt>
                            <dd class="mt-1 text-sm text-gray-500">
                                Anda juga dapat menghubungi kami melalui email atau telepon.
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-4 sm:px-6">
                            <a href="
                            {{-- {{ route('contact-us') }} --}}
                            " class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </dl>
            </div>

            {{-- list of categorized articles --}}
            <div class="mt-8">
                <div class="mx-auto">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Semua Kategori</h2>
                    <dl class="mt-4 grid grid-cols-3 gap-4 sm:grid-rows-1">
                        @foreach ($categories as $category)
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <dt class="text-base leading-6 font-medium text-gray-900">
                                        <a href="
                                        {{ route('category', $category->slug) }}
                                        " class="text-indigo-600 hover:text-indigo-900">
                                        {{ $category->name }}
                                    </a>
                                    </dt>
                                    <dd class="mt-1 text-sm leading-5 text-gray-500">
                                        {{ $category->description }}
                                    </dd>
                                </div>
                            </div>
                        @endforeach
                    </dl>
                </div>

            <div class="mt-8 mx-auto">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Pertanyaan Paling Sering Ditanya</h3>
                <div class="mt-4">
                    <div class="bg-white shadow overflow-hidden sm:rounded-md">
                        <ul>
                            <li>
                                <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                    <div class="px-4 py-4 sm:px-6">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                                Bagaimana cara mengubah password?
                                            </p>
                                            <div class="ml-2 flex-shrink-0 flex">
                                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Baru
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                    <div class="px-4 py-4 sm:px-6">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                                Bagaimana cara mengubah password?
                                            </p>
                                            <div class="ml-2 flex-shrink-0 flex">
                                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Baru
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="mt-8 mx-auto">
                <div class="rounded-md bg-indigo-50 p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 6a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 6a1 1 0 011-1h7a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3 flex-1 items-center md:flex md:justify-between">
                            <p class="text-sm leading-5 text-indigo-700">
                                Belum menemukan jawaban? Buat pengaduan sekarang!
                            </p>
                            <div class="mt-3 flex md:mt-0 md:ml-4">
                                <span class="shadow-sm rounded-md">
                                    <a href="
                                    {{ route('front-ticket-form') }}
                                    " class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                        Buat Pengaduan
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
