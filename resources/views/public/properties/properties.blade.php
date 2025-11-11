@extends('public.layout.main')
@section('content')
    {{-- ------------- property card component start ------------- --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 md:px-10 text-center">
            <h2 class="text-3xl md:text-4xl font-semibold mb-2 text-black">
                Invest in Real Estate, One Share at a Time
            </h2>
            <p class="text-sm mb-8 text-gray-400">
                Browse our curated selection of properties and start building your portfolio today.
            </p>

            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Card -->
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    <img src="https://placehold.co/400x250?text=PROPERTY" alt="The Marina View" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col flex-grow text-left">
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold mb-1">The Marina View</h3>
                            <p class="text-gray-500 text-sm">Dubai, UAE</p>
                            <p class="text-gray-500 text-sm mt-1">Projected Return: 12%</p>
                            <p class="font-semibold mt-3">$100 per share</p>
                        </div>
                        <a href="/property-details" 
                           class="mt-4 w-full inline-block text-center bg-green-100 text-green-800 py-2 rounded-lg hover:bg-green-200 transition">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Repeat for other cards -->
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    <img src="https://placehold.co/400x250?text=PROPERTY" alt="The Downtown Loft" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col flex-grow text-left">
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold mb-1">The Downtown Loft</h3>
                            <p class="text-gray-500 text-sm">New York, USA</p>
                            <p class="text-gray-500 text-sm mt-1">Projected Return: 9% Projected Return: 9%Projected Return: 9%</p>
                            <p class="font-semibold mt-3">$150 per share</p>
                        </div>
                        <a href="/property-details" 
                           class="mt-4 w-full inline-block text-center bg-green-100 text-green-800 py-2 rounded-lg hover:bg-green-200 transition">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    <img src="https://placehold.co/400x250?text=PROPERTY" alt="The Suburban Villa" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col flex-grow text-left">
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold mb-1">The Suburban Villa</h3>
                            <p class="text-gray-500 text-sm">London, UK</p>
                            <p class="text-gray-500 text-sm mt-1">Projected Return: 8.5%</p>
                            <p class="font-semibold mt-3">$120 per share</p>
                        </div>
                        <a href="/property-details" 
                           class="mt-4 w-full inline-block text-center bg-green-100 text-green-800 py-2 rounded-lg hover:bg-green-200 transition">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    <img src="https://placehold.co/400x250?text=PROPERTY" alt="The Suburban Villa" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col flex-grow text-left">
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold mb-1">The Suburban Villa</h3>
                            <p class="text-gray-500 text-sm">London, UK</p>
                            <p class="text-gray-500 text-sm mt-1">Projected Return: 8.5%</p>
                            <p class="font-semibold mt-3">$120 per share</p>
                        </div>
                        <a href="/property-details" 
                           class="mt-4 w-full inline-block text-center bg-green-100 text-green-800 py-2 rounded-lg hover:bg-green-200 transition">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    <img src="https://placehold.co/400x250?text=PROPERTY" alt="The Suburban Villa" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col flex-grow text-left">
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold mb-1">The Suburban Villa</h3>
                            <p class="text-gray-500 text-sm">London, UK</p>
                            <p class="text-gray-500 text-sm mt-1">Projected Return: 8.5%</p>
                            <p class="font-semibold mt-3">$120 per share</p>
                        </div>
                        <a href="/property-details" 
                           class="mt-4 w-full inline-block text-center bg-green-100 text-green-800 py-2 rounded-lg hover:bg-green-200 transition">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Add more cards as needed -->
            </div>
        </div>
    </section>
    {{-- ------------- property card component end ------------- --}}
@endsection
