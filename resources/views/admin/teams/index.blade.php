<x-layout-admin>
    <x-slot name="title">
        Manajemen Tim
    </x-slot>
    <x-slot name="content">
        <div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-3">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Tim Aktif
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                                {{ $teams->where('status', 1)->count() }}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Tim Nonaktif
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                                {{ $teams->where('status', 0)->count() }}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                Total Tim
                            </dt>
                            <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                                {{ $teams->count() }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Filter Tim
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                        Filter tim berdasarkan status.
                    </p>
                </div>
                <div>
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Status
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                <div class="relative inline-block w-64">
                                    <select
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        id="grid-state">
                                        <option>Aktif</option>
                                        <option>Nonaktif</option>
                                    </select>
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="align-middle inline-block min-w-full">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Nama Tim
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Subkategori
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($teams as $team)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    @if ($team->icon)
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="{{ asset('storage/' . $team->icon) }}" alt="">
                                                    @else
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="{{ asset('storage/team/default.png') }}" alt="">
                                                    @endif
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                                        {{ $team->name }}
                                                    </div>
                                                    <div class="text-sm leading-5 text-gray-500">
                                                        {{ $team->description }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Aktif
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            3
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                            <a href="
                                                {{ route('admin.teams.edit', $team->id) }}
                                            " class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
