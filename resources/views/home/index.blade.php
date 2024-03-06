<x-portal-layout>
    <div class="relative mt-12">
        <div class="owl-carousel owl-theme" id="banner-carousel">
            @for($i = 1; $i<10; $i++)
                <div class="item"><img src="{{ asset('images/Frame.png') }}" class="" height="100" alt="Image 1"></div>
            @endfor
        </div>
    </div>

    <div class="container mx-auto text-center  my-6 xl:my-12">
        <h1 class="ticket font-bold text-2xl xl:text-4xl py-4 text-gray-600 ">
            Get Tickets
        </h1>
        <div class="flex justify-center py-4">
            <p class="w-full xl:w-1/3 text-gray-600">
                Don’t settle for a mere TV binge, dive into a world of enchanting tales by booking a movie ticket now. Come experience the thrill and spill of the big screen!
            </p>
        </div>
        <button class="bg-black text-white p-2 my-2 px-10 rounded-lg hover:bg-gray-600" type="submit">Book Ticket</button>
    </div>

    <div class="container mx-auto flex justify-center my-8">
        <div class="flex flex-wrap">
            @for($i = 1; $i<7; $i++)
                <div class="xl:w-1/3  w-full flex flex-col p-6 hover:cursor-pointer">
                    <div class="bg-slate-300 rounded-lg">
                        <img src="{{ asset('images/moana.jpg') }}" class="w-full h-72 rounded-lg object-center object-cover">
                        <div class="py-4 px-2 flex flex-col">
                            <span class="font-semibold text-md title">Release Date: 2023-09-20</span>
                            <span class="font-semibold">Duration: 3hr</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="text-center container mx-auto xl:my-16">
        <div class="flex justify-center">
            <h1 class="ticket text-xl xl:text-4xl w-full xl:w-1/2 font-semibold text-gray-600 leading-relaxed py-4 xl:py-8">
                Time for the Perks! Sign up for Ticket Reminders and Amazing Discounts.
            </h1>
        </div>
        <div class="relative inline-block mx-auto">
            <input type="text" name="subscribe" class="p-3 pr-0 sm:pr-40 rounded-l-lg rounded-lg bg-gray-300 border-0 outline-0 focus:border-gray-300 focus:outline-none" placeholder="name@email.com">
            <button type="submit" class="absolute right-0 px-2 py-3 rounded bg-black text-center  text-white">Subscribe</button>
        </div>
    </div>

    <div>
        <h1 class="text-xl xl:text-4xl font-sans font-semibold text-start px-4 sm:text-center ticket pt-12 xl:pt-20 pb-2 xl:pb-12 text-gray-600">Curious Queries and Cunning Clarifications</h1>
        <div class="flex flex-wrap container mx-auto ">
            @for($i = 1; $i<5; $i++)
                <div class="w-full xl:w-1/2 py-4 xl:py-10 px-4 xl:px-12 mb-4">
                    <div class="border border-gray-300 p-8 rounded-lg">
                        <h1 class="text-lg font-medium text-gray-600">How to book a ticket through FlickFlix?</h1>
                        <p class="text-gray-600">
                            It’s a piece of popcorn! Simply select your movie, preferred time, pay and voila! Your e-ticket will be ready for you.
                        </p>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var banner_carousel = $('#banner-carousel');
            banner_carousel.owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                dots: false,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        dots: false,
                    },
                    600: {
                        items: 1,
                        nav: false,
                        dots: false,
                    },
                    800: {
                        items: 1,
                        nav: true,
                        dots: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        dots: false,
                    }
                }
            });
        });
    </script>
</x-portal-layout>
