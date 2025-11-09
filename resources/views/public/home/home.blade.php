@extends('public.layout.main')
@section('content')
    {{-- ------------- Hero component start ------------- --}}
    <section
        class="relative flex items-center justify-center min-h-[80vh] bg-center bg-cover text-white px-6 md:px-12 rounded-2xl mt-8 mx-10"
        style="background-image: url('https://images.unsplash.com/photo-1582407947304-fd86f028f716?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVhbCUyMGVzdGF0ZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=900');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 rounded-2xl"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-3xl text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-4">
                Invest in real estate, one <br class="hidden sm:block" /> share at a time.
            </h1>
            <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6">
                Own a piece of high-yielding rental properties and earn passive income. <br />
                Democratizing real estate investing for everyone.
            </p>

            <!-- Buttons -->
            <div class="flex sm:flex-row gap-4 justify-center">
                <button
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition">
                    Invest Now
                </button>
                <button
                    class="bg-grey-light text-gray-800 hover:bg-grey font-semibold px-6 py-3 rounded-lg shadow-lg transition">
                    Explore Properties
                </button>
            </div>
        </div>
    </section>

    {{-- ------------- Hero component end ------------- --}}
@endsection
