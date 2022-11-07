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
                <span class="block text-indigo-600">Ajukan pengaduan sekarang!</span>
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
        {{-- alert sukses membuat pengaduan --}}
        <div class="fixed inset-0 overflow-y-auto" x-show="isSuccess" x-cloak>
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                    Pengaduan berhasil dibuat
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        Terima kasih atas pengaduan Anda. Kami akan segera memproses pengaduan Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" @click="is-success = false"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
