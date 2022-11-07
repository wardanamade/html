<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
    <div class="relative max-w-xl mx-auto">
        <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none"
            viewBox="0 0 404 404" aria-hidden="true">
            <defs>
                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20"
                    height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                        fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
        </svg>
        <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404"
            fill="none" viewBox="0 0 404 404" aria-hidden="true">
            <defs>
                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20"
                    height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                        fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
        </svg>
        <div class="text-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Belum menemukan jawaban?</span>
                <span class="block text-indigo-600">Buat pengaduan sekarang!</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-gray-500">
                Dengan UserCare, Anda dapat mengajukan pengaduan secara online dan mendapatkan jawaban dari tim kami.
            </p>
        </div>
        <div class="mt-12">
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-medium text-gray-700">Kategori Pengaduan</label>
                    <div class="mt-1">
                        <select id="category" name="category" autocomplete="category"
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            <option value="1">Pengaduan</option>
                            <option value="2">Saran</option>
                            <option value="3">Kritik</option>
                        </select>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-medium text-gray-700">Subkategori Pengaduan</label>
                    <div class="mt-1">
                        <select id="category" name="category" autocomplete="category"
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            <option value="1">Pengaduan</option>
                            <option value="2">Saran</option>
                            <option value="3">Kritik</option>
                        </select>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-medium text-gray-700">Nomor Ponsel</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <label for="country" class="sr-only">Negara</label>
                            <select id="country" name="country"
                                class="h-full py-0 pl-4 pr-8 border-transparent bg-transparent text-gray-500 focus:ring-indigo-500 focus:border-indigo-500 rounded-md">
                                <option>ID</option>
                            </select>
                        </div>
                        <input type="text" name="phone-number" id="phone-number" autocomplete="tel"
                            class="py-3 px-4 block w-full pl-20 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            placeholder="081234567890">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul Pengaduan</label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title" autocomplete="title"
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Deskripsi Pengaduan</label>
                    <div class="mt-1">
                        <textarea id="message" name="message" rows="4"
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Lampiran</label>
                    <div class="mt-1">
                        <input type="file" name="file" id="file" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                role="switch" aria-checked="false">
                                <span class="sr-only">Setujui kebijakan</span>
                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                        </div>
                        <div class="ml-3">
                            <p class="text-base text-gray-500">
                                Dengan mengirim pengaduan ini, Anda setuju dengan
                                <a href="#" class="font-medium text-gray-700 underline">Kebijakan pribadi</a>
                                dan
                                <a href="#" class="font-medium text-gray-700 underline">Kebijakan Cookie</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <button type="submit"
                        class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Kirim Pengaduan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
