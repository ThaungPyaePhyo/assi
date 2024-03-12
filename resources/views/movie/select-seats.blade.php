<x-portal-layout>
    <div class="container mx-auto justify-center text-gray-600 mt-20 mb10">
        <div class="flex flex-wrap justify-center space-x-6">
            @for($i = 1; $i <22; $i++)
                <img src="{{ asset('images/seat01.png') }}"/>
            @endfor
        </div>
        <div class="flex flex-wrap justify-center space-x-6">
            @for($i = 1; $i <11; $i++)
                <img src="{{ asset('images/seat02.png') }}">
            @endfor
        </div>
    </div>
</x-portal-layout>
