<button data-modal-target="{{ $id }}" data-modal-toggle="{{ $id }}" class="mt-4 grid place-items-center zoom" type="button">
    <img class="mx-auto" src="https://image.tmdb.org/t/p/w154/{{ $poster }}" alt="{{ $title }}">
    <div class="mx-auto text-center">{{ $title }}</div>
</button>

<div id="{{ $id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
            </div>
            <!-- Modal body -->
            <div class="p-2 space-y-6">
                <div class="flex items-end">
                    <img src="https://image.tmdb.org/t/p/w154/{{ $poster }}" alt="{{ $title }}">
                    <p class="px-4">{{ $overview }}</p>
                </div>
                <div class="mx-auto">Released : {{ Carbon\Carbon::createFromFormat('Y-m-d', $releasedate)->format('d M Y') }}</div>

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
            </div>
        </div>
    </div>
</div>