<x-portal-layout>
    <div class="m-20">
        <div class="flex flex-wrap">
            @for($i=1;$i<11;$i++)
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col lg:my-3 cursor-pointer">
                    <div class="bg-slate-200 rounded-lg overflow-hidden group transition-transform transform hover:scale-105">
                        <img class="object-cover object-center w-full h-48 transition-transform transform group-hover:scale-110" src="{{ asset('images/moana.jpg') }}" />
                        <div class="py-4 px-2 flex flex-col">
                            <span class="font-semibold text-md title">Release Date: 2023-09-20</span>
                            <span class="font-semibold">Duration: 3hr</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</x-portal-layout>
