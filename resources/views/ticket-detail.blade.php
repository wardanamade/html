<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/js/app.js')
        <title>{{ $title ?? 'UserCare' }}</title>
    </head>
    <body>
<div class="relative h-screen flex overflow-hidden bg-white">
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
    <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800">
      <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="absolute top-0 right-0 -mr-12 pt-2">
        <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <span class="sr-only">Close sidebar</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-shrink-0 flex items-center px-4">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-rose-500-mark-white-text.svg" alt="Workflow">
      </div>
      <div class="mt-5 flex-1 h-0 overflow-y-auto">
        <nav class="px-2">
          <div class="space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" aria-current="page">
              <!--
                Heroicon name: outline/home

                Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
              -->
              <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Beranda
            </a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/view-list -->
              <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
              </svg>
              Pengaduan Saya
            </a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/user-circle -->
              <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Disposisi Saya
            </a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/archive -->
              <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
              </svg>
                Arsip Pengaduan
            </a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/clock -->
              <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
                Riwayat Pengaduan
            </a>
          </div>
          <div class="mt-10">
            <p class="px-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                Pengaturan
            </p>
            <div class="mt-2 space-y-1">
              <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-2 py-2 text-base font-medium rounded-md">
                <span class="truncate">
                    Profil
                </span>
              </a>

              <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-2 py-2 text-base font-medium rounded-md">
                <span class="truncate">
                    Keluar
                </span>
              </a>

              <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-2 py-2 text-base font-medium rounded-md">
                <span class="truncate">
                    Bantuan
                </span>
              </a>

              <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-2 py-2 text-base font-medium rounded-md">
                <span class="truncate">
                    Tentang
                </span>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
      <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex-1 flex flex-col min-h-0">
        <div class="flex items-center h-16 flex-shrink-0 px-4 bg-gray-900">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-rose-500-mark-white-text.svg" alt="Workflow">
        </div>
        <div class="flex-1 flex flex-col overflow-y-auto">
          <nav class="flex-1 px-2 py-4 bg-gray-800">
            <div class="space-y-1">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" aria-current="page">
                <!--
                  Heroicon name: outline/home

                  Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
                -->
                <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Beranda
              </a>

              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/view-list -->
                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                Pengaduan Saya
              </a>

              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/user-circle -->
                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Disposisi Saya
              </a>

              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/archive -->
                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                Arsip Pengaduan
              </a>

              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/clock -->
                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Riwayat Pengaduan
              </a>
            </div>
            <div class="mt-10">
              <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                Pengaturan
              </p>
              <div class="mt-2 space-y-1">
                <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                  <span class="truncate">
                    Pengaturan Akun
                  </span>
                </a>

                <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                  <span class="truncate">
                    Keluar
                  </span>
                </a>

                <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                  <span class="truncate">
                    Bantuan
                  </span>
                </a>

                <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                  <span class="truncate">
                    Tentang
                  </span>
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col w-0 flex-1 overflow-hidden">
    <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200">
      <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-900 lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu-alt-2 -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">
          <form class="w-full flex lg:ml-0" action="#" method="GET">
            <label for="search-field" class="sr-only">
                Cari pengaduan...
            </label>
            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                <!-- Heroicon name: solid/search -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
              <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
            </div>
          </form>
        </div>
        <div class="ml-4 flex items-center lg:ml-6">
          <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
            <svg class="mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm3 0v2h2V3H6zm4 0v2h2V3h-2zm4 0v2h2V3h-2zm-8 4v2h2V7H6zm4 0v2h2V7h-2zm4 0v2h2V7h-2zm-8 4v2h2v-2H6zm4 0v2h2v-2h-2zm4 0v2h2v-2h-2zm-8 4v2h2v-2H6zm4 0v2h2v-2h-2zm4 0v2h2v-2h-2z" clip-rule="evenodd" />
            </svg>
            Pengaduan Baru
          </button>
        </div>
      </div>
    </div>

    <main class="flex-1 relative overflow-y-auto focus:outline-none">
      <div class="py-8 xl:py-10">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 xl:max-w-5xl xl:grid xl:grid-cols-3">
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
                      <span class="text-green-700 text-sm font-medium">Open Issue</span>
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
                      <span class="text-gray-900 text-sm font-medium">Dibuat pada <time datetime="2020-12-02">Kamis, 2 Desember 2022</time></span>
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
                                <span>Tutup Pengaduan</span>
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
                <span class="text-green-700 text-sm font-medium">Open Issue</span>
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
                <span class="text-gray-900 text-sm font-medium">Created on <time datetime="2020-12-02">Dec 2, 2020</time></span>
              </div>
            </div>
            <div class="mt-6 border-t border-gray-200 py-6 space-y-8">
              <div>
                <h2 class="text-sm font-medium text-gray-500">Assignees</h2>
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
                <h2 class="text-sm font-medium text-gray-500">Tags</h2>
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
                      <div class="ml-3.5 text-sm font-medium text-gray-900">Accessibility</div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </main>
  </div>
</div>
</body>
</html>
