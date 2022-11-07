<x-layout>
    <x-slot name="title">
        Tickets
    </x-slot>

    <x-slot name="content">
        <div class="mt-8">
            <a href="{{ route('tickets.create') }}" class="ml-0 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out">
                Create Ticket
            </a>
        </div>
        @foreach ($tickets as $ticket)
        <div class="mt-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $ticket->title }}
                    </h3>
                    <p class="mt-1 max-w 2xl text-sm leading-5 text-gray-500">
                        Ticket #{{ $ticket->id }} - {{ $ticket->created_at->diffForHumans() }}
                    </p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Status
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $ticket->status }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Subject
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $ticket->title }}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Description
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $ticket->description }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        @endforeach

        {{-- ticket table --}}
        <div class="mt-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Tickets
                    </h3>
                    <p class="mt-1 max-w 2xl text-sm leading-5 text-gray-500">
                        All tickets
                    </p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                ID
                            </dt>
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Title
                            </dt>
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Status
                            </dt>
                        </div>
                        @foreach ($tickets as $ticket)
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-1">
                                {{ $ticket->id }}
                            </dd>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-1">
                                {{ $ticket->title }}
                            </dd>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-1">
                                {{ $ticket->status }}
                            </dd>
                        </div>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
