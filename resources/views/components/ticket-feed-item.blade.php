<div>
    <!-- Ticket-feed-item component -->
    <div class="relative pb-8">
        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
        <div class="relative flex space-x-3">
            <div>
                <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                    <x-heroicon-o-user class="h-5 w-5 text-white" />
                </span>
            </div>
            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                <div>
                    <p class="text-sm text-gray-500">
                        {{-- {{ $comment->user->name }} --}} Nama User
                    </p>
                    <p class="text-sm text-gray-500">
                        {{-- {{ $comment->created_at->diffForHumans() }} --}} 1 jam yang lalu
                    </p>
                </div>
                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                    <p>
                        {{-- {{ $comment->created_at->format('d M Y') }} --}} 1 Januari 2021
                    </p>
                    <p>
                        {{-- {{ $comment->created_at->format('H:i') }} --}} 12:00
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-6 relative flex space-x-3">
            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                <div>
                    <p class="text-sm text-gray-500">
                        {{-- {{ $comment->body }} --}} Isi komentar
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
