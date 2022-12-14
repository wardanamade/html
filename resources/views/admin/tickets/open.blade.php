<x-layout-admin>
    <x-slot name="title">
        Detail Pengaduan
    </x-slot>
    <x-slot name="content">
        <main class="flex-1 relative overflow-y-auto focus:outline-none">
            <div class="py-8 xl:py-10">
              <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 xl:max-w-5xl xl:grid xl:grid-cols-3">
                <div class="xl:col-span-2 xl:pr-8 xl:border-r xl:border-gray-200">
                  <div>
                    <div>
                      <div class="md:flex md:items-center md:justify-between md:space-x-4 xl:border-b xl:pb-6">
                        <div>
                          <h1 class="text-2xl font-bold text-gray-900">Bug pada web prodi</h1>
                          <p class="mt-2 text-sm text-gray-500">
                            #400 dibuat oleh
                            <a href="#" class="font-medium text-gray-900">Made Wardana</a>
                            dalam
                            <a href="#" class="font-medium text-gray-900">Sistem Informasi</a>
                          </p>
                        </div>
                        <div class="mt-4 flex space-x-3 md:mt-0">
                          <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                            <!-- Heroicon name: solid/pencil -->
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            <span>Edit</span>
                          </button>
                          <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                            <!-- Heroicon name: solid/bell -->
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                            <span>Subscribe</span>
                          </button>
                        </div>
                      </div>
                      <aside class="mt-8 xl:hidden">
                        <h2 class="sr-only">Details</h2>
                        <div class="space-y-5">
                          <div class="flex items-center space-x-2">
                            <!-- Heroicon name: solid/lock-open -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                            </svg>
                            <span class="text-green-700 text-sm font-medium">Pengaduan Aktif</span>
                          </div>
                          <div class="flex items-center space-x-2">
                            <!-- Heroicon name: solid/chat-alt -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">4 balasan</span>
                          </div>
                          <div class="flex items-center space-x-2">
                            <!-- Heroicon name: solid/calendar -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">Dibuat pada <time datetime="2022-12-02">Kamis, 2 Desember 2022</time></span>
                          </div>
                        </div>
                        <div class="mt-6 border-t border-b border-gray-200 py-6 space-y-8">
                          <div>
                            <h2 class="text-sm font-medium text-gray-500">Didisposisikan kepada</h2>
                            <ul role="list" class="mt-3 space-y-3">
                              <li class="flex justify-start">
                                <a href="#" class="flex items-center space-x-3">
                                  <div class="flex-shrink-0">
                                    <img class="h-5 w-5 rounded-full" src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                                  </div>
                                  <div class="text-sm font-medium text-gray-900">Made Wardana</div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div>
                            <h2 class="text-sm font-medium text-gray-500">Tag</h2>
                            <ul role="list" class="mt-2 leading-8">
                              <li class="inline">
                                <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                  <div class="absolute flex-shrink-0 flex items-center justify-center">
                                    <span class="h-1.5 w-1.5 rounded-full bg-rose-500" aria-hidden="true"></span>
                                  </div>
                                  <div class="ml-3.5 text-sm font-medium text-gray-900">Bug</div>
                                </a>
                              </li>
                              <li class="inline">
                                <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                  <div class="absolute flex-shrink-0 flex items-center justify-center">
                                    <span class="h-1.5 w-1.5 rounded-full bg-indigo-500" aria-hidden="true"></span>
                                  </div>
                                  <div class="ml-3.5 text-sm font-medium text-gray-900">Aksesibilitas</div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </aside>
                      <div class="py-3 xl:pt-6 xl:pb-0">
                        <h2 class="sr-only">Description</h2>
                        <div class="prose max-w-none">
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, hic? Commodi cumque similique id tempora molestiae deserunt at suscipit, dolor voluptatem, numquam, harum consequatur laboriosam voluptas tempore aut voluptatum alias?
                          </p>
                          <ul role="list">
                            <li>
                              Tempor ultrices proin nunc fames nunc ut auctor vitae sed. Eget massa parturient vulputate fermentum id facilisis nam pharetra. Aliquet leo tellus.
                            </li>
                            <li>
                              Turpis ac nunc adipiscing adipiscing metus tincidunt senectus tellus.
                            </li>
                            <li>
                              Semper interdum porta sit tincidunt. Dui suspendisse scelerisque amet metus eget sed. Ut tellus in sed dignissim.
                            </li>
                          </ul>
                        </div>
                      </div>
                      {{-- attachment --}}
                        <div class="py-3 xl:pt-6 xl:pb-0">
                            <h2 class="sr-only">Attachment</h2>
                            <div class="prose max-w-none">
                            <ul role="list">
                                <li>
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">Laporan.pdf</a>
                                </li>
                                <li>
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">Laporan.docx</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                  <section aria-labelledby="activity-title" class="mt-8 xl:mt-10">
                    <div>
                      <div class="divide-y divide-gray-200">
                        <div class="pb-4">
                          <h2 id="activity-title" class="text-lg font-medium text-gray-900">Aktivitas</h2>
                        </div>
                        <div class="pt-6">
                          <!-- Activity feed-->
                          <div class="flow-root">
                            <ul role="list" class="-mb-8">
                              <li>
                                <div class="relative pb-8">
                                  <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                  <div class="relative flex items-start space-x-3">
                                    <div class="relative">
                                      <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">

                                      <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                        <!-- Heroicon name: solid/chat-alt -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                        </svg>
                                      </span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                      <div>
                                        <div class="text-sm">
                                          <a href="#" class="font-medium text-gray-900">Made Wardana</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">
                                          Menanggapi 6 hari yang lalu
                                        </p>
                                      </div>
                                      <div class="mt-2 text-sm text-gray-700">
                                        <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis sed purus nam.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>

                              <li>
                                <div class="relative pb-8">
                                  <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                  <div class="relative flex items-start space-x-3">
                                    <div>
                                      <div class="relative px-1">
                                        <div class="h-8 w-8 bg-gray-100 rounded-full ring-8 ring-white flex items-center justify-center">
                                          <!-- Heroicon name: solid/user-circle -->
                                          <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                          </svg>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="min-w-0 flex-1 py-1.5">
                                      <div class="text-sm text-gray-500">
                                        <a href="#" class="font-medium text-gray-900">Hilary Mahy</a>
                                        mengeskalasi pengaduan ke
                                        <a href="#" class="font-medium text-gray-900">Kristin Watson</a>
                                        <span class="whitespace-nowrap">2 hari yang lalu</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>

                              <li>
                                <div class="relative pb-8">
                                  <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                  <div class="relative flex items-start space-x-3">
                                    <div>
                                      <div class="relative px-1">
                                        <div class="h-8 w-8 bg-gray-100 rounded-full ring-8 ring-white flex items-center justify-center">
                                          <!-- Heroicon name: solid/tag -->
                                          <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                          </svg>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="min-w-0 flex-1 py-0">
                                      <div class="text-sm leading-8 text-gray-500">
                                        <span class="mr-0.5">
                                          <a href="#" class="font-medium text-gray-900">Hilary Mahy</a>
                                          menambahkan tag
                                        </span>
                                        <span class="mr-0.5">
                                          <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5 text-sm">
                                            <span class="absolute flex-shrink-0 flex items-center justify-center">
                                              <span class="h-1.5 w-1.5 rounded-full bg-rose-500" aria-hidden="true"></span>
                                            </span>
                                            <span class="ml-3.5 font-medium text-gray-900">Bug</span>
                                          </a>
                                          <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5 text-sm">
                                            <span class="absolute flex-shrink-0 flex items-center justify-center">
                                              <span class="h-1.5 w-1.5 rounded-full bg-indigo-500" aria-hidden="true"></span>
                                            </span>
                                            <span class="ml-3.5 font-medium text-gray-900">Aksesibilitas</span>
                                          </a>
                                        </span>
                                        <span class="whitespace-nowrap">6 jam yang lalu</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>

                              <li>
                                <div class="relative pb-8">
                                  <div class="relative flex items-start space-x-3">
                                    <div class="relative">
                                      <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">

                                      <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                        <!-- Heroicon name: solid/chat-alt -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                        </svg>
                                      </span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                      <div>
                                        <div class="text-sm">
                                          <a href="#" class="font-medium text-gray-900">Jason Meyers</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">
                                          Menanggapi 2 jam yang lalu
                                        </p>
                                      </div>
                                      <div class="mt-2 text-sm text-gray-700">
                                        <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis sed purus nam. Scelerisque amet elit non sit ut tincidunt condimentum. Nisl ultrices eu venenatis diam.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="mt-6">
                            <div class="flex space-x-3">
                              <div class="flex-shrink-0">
                                <div class="relative">
                                  <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">

                                  <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                    <!-- Heroicon name: solid/chat-alt -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                    </svg>
                                  </span>
                                </div>
                              </div>
                              <div class="min-w-0 flex-1">
                                <form action="#">
                                  <div>
                                    <label for="comment" class="sr-only">Tanggapan</label>
                                    <textarea id="comment" name="comment" rows="3" class="shadow-sm block w-full focus:ring-gray-900 focus:border-gray-900 sm:text-sm border border-gray-300 rounded-md" placeholder="Masukkan tanggapan..."></textarea>
                                  </div>
                                  <div class="mt-6 flex items-center justify-end space-x-4">
                                    <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                      <!-- Heroicon name: solid/check-circle -->
                                      <svg class="-ml-1 mr-2 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                      <span>Eskalasi Pengaduan</span>
                                    </button>
                                    <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                      Kirim
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <aside class="hidden xl:block xl:pl-8">
                  <h2 class="sr-only">Details</h2>
                  <div class="space-y-5">
                    <div class="flex items-center space-x-2">
                      <!-- Heroicon name: solid/lock-open -->
                      <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                      </svg>
                      <span class="text-green-700 text-sm font-medium">Pengaduan Aktif</span>
                    </div>
                    <div class="flex items-center space-x-2">
                      <!-- Heroicon name: solid/chat-alt -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                      </svg>
                      <span class="text-gray-900 text-sm font-medium">4 tanggapan</span>
                    </div>
                    <div class="flex items-center space-x-2">
                      <!-- Heroicon name: solid/calendar -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                      </svg>
                      <span class="text-gray-900 text-sm font-medium">Dibuat pada <time datetime="2022-12-02">2 Desember 2022</time></span>
                    </div>
                  </div>
                  <div class="mt-6 border-t border-gray-200 py-6 space-y-8">
                    <div>
                      <h2 class="text-sm font-medium text-gray-500">Dibuka oleh</h2>
                      <ul role="list" class="mt-3 space-y-3">
                        <li class="flex justify-start">
                          <a href="#" class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                              <img class="h-5 w-5 rounded-full" src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="text-sm font-medium text-gray-900">Made Wardana</div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <h2 class="text-sm font-medium text-gray-500">Tag</h2>
                      <ul role="list" class="mt-2 leading-8">
                        <li class="inline">
                          <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                            <div class="absolute flex-shrink-0 flex items-center justify-center">
                              <span class="h-1.5 w-1.5 rounded-full bg-rose-500" aria-hidden="true"></span>
                            </div>
                            <div class="ml-3.5 text-sm font-medium text-gray-900">Bug</div>
                          </a>
                        </li>
                        <li class="inline">
                          <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                            <div class="absolute flex-shrink-0 flex items-center justify-center">
                              <span class="h-1.5 w-1.5 rounded-full bg-indigo-500" aria-hidden="true"></span>
                            </div>
                            <div class="ml-3.5 text-sm font-medium text-gray-900">Aksesibilitas</div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </main>
    </x-slot>
</x-layout-admin>
