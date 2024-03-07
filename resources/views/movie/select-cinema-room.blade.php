<x-portal-layout>
    <div class="container mx-auto text-gray-600 mt-20 mb-10">
        @for($i = 1; $i < 9; $i++)
            <div class="grid grid-cols-1 sm:grid-cols-2 py-4"> <!-- Use a single column for small screens, and two columns for larger screens -->
                <div class="flex items-center space-x-6 pb-4 sm:pb-0">
                    <i class="fa-regular fa-heart cursor-pointer text-2xl"></i>
                    <span class="border-gray-300 rounded px-2 border-2 cursor-pointer p-2 hover:bg-gray-300 transition-all ease-linear">Nay Pyi Taw Cinema</span>
                </div>
                <div class="flex items-center space-x-6">
                    <i class="fa-solid fa-location-dot text-3xl cursor-pointer"></i>
                    <div class="flex flex-wrap gap-4">
                        @for($j = 1; $j < 10; $j++)
                            <span class="border-2 rounded border-gray-300 p-2 hover:bg-gray-300 transition-all ease-linear cursor-pointer">
                                Cinema {{ $j }}
                            </span>
                        @endfor
                    </div>
                </div>
            </div>
        @endfor
    </div>
</x-portal-layout>

