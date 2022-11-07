<x-layout-admin>
    <x-slot name="title">
        Manajemen Pengaduan
    </x-slot>
    <x-slot name="content">
        {{-- ticket stats --}}
        <div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Pengaduan Aktif
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">12
                                {{-- {{ $openTickets }} --}}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Pengaduan Selesai
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">24
                                {{-- {{ $closedTickets }} --}}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Total Pengaduan
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">36
                                {{-- {{ $totalTickets }} --}}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Total Pengguna
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">48
                                {{-- {{ $totalUsers }} --}}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        {{-- filter tickets --}}
        <div class="mt-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Filter Pengaduan
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                        Filter pengaduan berdasarkan status dan tanggal.
                    </p>
                </div>
                <div>
                    <form action="{{ route('admin.tickets.index') }}" method="GET">
                        <div class="bg-gray-50 px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                    <label for="status" class="block text-sm font-medium leading-5 text-gray-700">
                                        Status
                                    </label>
                                    <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Semua</option>
                                        <option value="open" {{ request()->status == 'open' ? 'selected' : '' }}>Aktif</option>
                                        <option value="closed" {{ request()->status == 'closed' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                </div>
                                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                    <label for="from" class="block text-sm font-medium leading-5 text-gray-700">
                                        Dari
                                    </label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input id="from" name="from" type="date" class="form-input block w-full sm:text-sm sm:leading-5 border border-gray-300 rounded-md shadow-sm" value="{{ request()->from }}">
                                    </div>
                                </div>
                                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                    <label for="to" class="block text-sm font-medium leading-5 text-gray-700">
                                        Sampai
                                    </label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input id="to" name="to" type="date" class="form-input block w-full sm:text-sm sm:leading-5 border border-gray-300 rounded-md shadow-sm" value="{{ request()->to }}">
                                    </div>
                                </div>
                                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                    <label for="search" class="block text-sm font-medium leading-5 text-gray-700">
                                        Cari
                                    </label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input id="search" name="search" type="text" class="form-input block w-full sm:text-sm sm:leading-5 border border-gray-300 rounded-md shadow-sm" value="{{ request()->search }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Filter
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- list all tickets with actions --}}
        <div class="mt-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="align-middle inline-block min-w-full">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Pengaduan
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Dibuat
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Diperbarui
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full" src="
                                                        {{ $ticket->user->profile_photo_url }}
                                                        " alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                                            {{ $ticket->title }}
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">
                                                            {{ $ticket->user->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800
                                                {{-- {{ $ticket->status == 'open' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} --}}
                                                ">Open
                                                    {{-- {{ $ticket->status }} --}}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                {{ $ticket->created_at->diffForHumans() }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                {{ $ticket->updated_at->diffForHumans() }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                <a href="
                                                {{ route('admin.tickets.show', $ticket) }}
                                                " class="text-indigo-600 hover:text-indigo-900">Lihat Pengaduan</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout-admin>
