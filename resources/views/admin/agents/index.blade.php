<x-layout-admin>
    <x-slot name="title">
        Manajemen Operator Pengaduan
    </x-slot>
    <x-slot name="content">
        {{-- agent stats --}}
        <div class="mt-8">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 lg:grid-cols-3">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Operator Pengaduan Aktif
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                                {{ $agents->count() }}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Operator Pengaduan Nonaktif
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                                {{ $agents->count() }}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Total Operator Pengaduan
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                                {{ $agents->count() }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        {{-- agent list --}}
        <div class="mt-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Daftar Operator Pengaduan</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Daftar agent yang terdaftar di sistem.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('admin.agents.index') }}" method="GET">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                        <input type="text" name="name" id="name" value="{{ request()->name }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="text" name="email" id="email" value="{{ request()->email }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                        <select id="status" name="status" autocomplete="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">Semua</option>
                                            <option value="active" {{ request()->status == 'active' ? 'selected' : '' }}>Aktif</option>
                                            <option value="inactive" {{ request()->status == 'inactive' ? 'selected' : '' }}>Nonaktif</option>
                                        </select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                        <select id="role" name="role" autocomplete="role" class="mt-1 block
                                        w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">Semua</option>
                                            <option value="admin" {{ request()->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="agent" {{ request()->role == 'agent' ? 'selected' : '' }}>Operator Pengaduan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($agents as $agent)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{ $agent->profile_photo_url }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $agent->name }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $agent->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $agent->email }}</div>
                                <div class="text-sm text-gray-500">{{ $agent->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $agent->role }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $agent->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('admin.agents.edit', $agent->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                Tidak ada data
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-slot>

</x-layout-admin>
