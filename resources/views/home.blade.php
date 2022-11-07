<x-layout-user>
    <x-slot name="title">
        Pengaduan Pengguna
    </x-slot>

    <x-slot name="content">
        <div class="mt-4">
            <div class="mx-auto">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Statistik</h2>
                <dl class="mt-4 grid grid-cols-3 gap-4 sm:grid-rows-1">
                    <x-stat>
                        <x-slot name="title">
                            Tickets
                        </x-slot>

                        <x-slot name="value">
                            {{ $tickets->count() }}
                        </x-slot>
                    </x-stat>
                    <x-stat>
                        <x-slot name="title">
                            Open Tickets
                        </x-slot>

                        <x-slot name="value">
                            {{ $tickets->where('status', 'open')->count() }}
                        </x-slot>
                    </x-stat>
                    <x-stat>
                        <x-slot name="title">
                            Closed Tickets
                        </x-slot>

                        <x-slot name="value">
                            {{ $tickets->where('status', 'closed')->count() }}
                        </x-slot>
                    </x-stat>
                </dl>
            </div>
        </div>
    </x-slot>
</x-layout-user>
