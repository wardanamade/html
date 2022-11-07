<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>{{ $title ?? 'UserCare' }}</title>
</head>

<body>
    <div class="min-h-screen bg-white">
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <img class="block lg:hidden h-8 w-auto"
                                src="{{ Vite::asset('resources/images/usercare-mark-indigo-600.svg') }}" alt="Usercare">
                            <img class="hidden lg:block h-8 w-auto"
                                src="{{ Vite::asset('resources/images/usercare-logo-indigo-600-mark-gray-800-text.svg') }}"
                                alt="Usercare">
                        </div>
                        <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                            <a href="{{ route('help-center') }}"
                                class="border-transparent text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                                aria-current="page">
                                Pusat Bantuan
                            </a>
                            <a href="{{ route('tickets') }}"
                                class="border-transparent text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Pengaduan
                            </a>
                            <a href="{{ route('admin') }}"
                                class="border-transparent text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Admin Area
                            </a>
                        </div>

                    </div>
                    <div class="flex">
                        <div class="inline-flex items-center">
                            <a href="/front-ticket-form"
                                class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Buat Pengaduan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="py-10">
            <header>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                        <h1 class="text-3xl font-bold leading-tight text-gray-900">
                            {{ $title ?? '' }}
                        </h1>
                        <div class="mt-3 flex sm:mt-0 sm:ml-4">
                            {{-- <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Impor
                            </button> --}}
                            <button type="button"
                                class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                        <nav aria-label="Sidebar" class="sticky top-6 divide-y divide-gray-300">
                            <x-navigation.vertical-navigation />
                        </nav>
                    </div>
                    <main class="lg:col-span-9 xl:col-span-10">
                        {{ $content ?? 'No content.' }}
                    </main>
                </div>
            </div>
            {{-- footer --}}
            <footer class="bg-white">
                <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                    <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                        <div class="px-5 py-2">
                            <a href="/help-center" class="text-base text-gray-500 hover:text-gray-900">
                                Pusat Bantuan
                            </a>
                        </div>
                        <div class="px-5 py-2">
                            <a href="/tickets" class="text-base text-gray-500 hover:text-gray-900">
                                Pengaduan
                            </a>
                        </div>
                        <div class="px-5 py-2">
                            <a href="/admin" class="text-base text-gray-500 hover:text-gray-900">
                                Admin Area
                            </a>
                        </div>
                    </nav>
                    <p class="mt-8 text-center text-base text-gray-400">
                        &copy; 2022 USDI Universitas Udayana.
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
