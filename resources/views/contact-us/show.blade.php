<x-portal-layout>
    <div class="container mx-auto mt-28 mb-20 px-4 text-gray-600">
        <h2 class="text-3xl font-semibold mb-8">Contact Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-xl font-semibold mb-2">Get in Touch</h3>
                <p class="mb-4">Have a question or feedback? We'd love to hear from you. Reach out to us using the
                    contact information below:</p>
                <ul class="list-disc pl-6 leading-10">
                    <li>Email: info@cinemabooking.com</li>
                    <li>Phone: 123-456-7890</li>
                    <li>Location: 123 Main St, City</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2 ">Send a Message</h3>
                <form action="" method="post" class="space-y-4">
                    @csrf
                    <label for="name" class="block font-semibold">Your Name</label>
                    <input type="text" id="name" name="name"
                           class="w-full border border-gray-300  rounded px-4 py-2 focus:outline-none focus:border-indigo-500">
                    @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="email" class="block font-semibold">Your Email</label>
                    <input type="email" id="email" name="email"
                           class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-indigo-500">
                    @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="message" class="block font-semibold">Your Message</label>
                    <textarea id="message" name="message"
                              class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-indigo-500"></textarea>
                    @error('message')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <button type="submit"
                            class="bg-black text-white px-6 py-2 rounded hover:bg-gray-600 transition">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>
</x-portal-layout>
