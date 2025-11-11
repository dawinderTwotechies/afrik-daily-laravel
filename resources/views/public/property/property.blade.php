@extends('public.layout.main')
@section('content')
    {{-- ------------- property detail page start ------------- --}}
    <section class=" py-10">
    <div class="max-w-7xl mx-auto px-4">
        {{-- ------------- property hero slide start ------------- --}}
        <!-- Splide CSS -->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
        />
        <style>
            .splide__track--nav>.splide__list>.splide__slide.is-active{
                opacity: 1;
            }
            .splide__track--nav>.splide__list>.splide__slide{
                opacity: 0.6;
            }
        </style>

        <div class="">
            <!-- Main Carousel -->
            <section id="main-carousel" class="splide mb-4" aria-label="Property Gallery">
                <div class="splide__track rounded-2xl overflow-hidden">
                <ul class="splide__list">
                    <li class="splide__slide">
                    <img
                        src="https://placehold.co/1200x700?text=PROPERTY1"
                        alt="Property 1"
                        class="w-full h-auto object-cover"
                    />
                    </li>
                    <li class="splide__slide">
                    <img
                        src="https://placehold.co/1200x700?text=PROPERTY2"
                        alt="Property 2"
                        class="w-full h-auto object-cover"
                    />
                    </li>
                    <li class="splide__slide">
                    <img
                        src="https://placehold.co/1200x700?text=PROPERTY3"
                        alt="Property 3"
                        class="w-full h-auto object-cover"
                    />
                    </li>
                    <li class="splide__slide">
                    <img
                        src="https://placehold.co/1200x700?text=PROPERTY4"
                        alt="Property 4"
                        class="w-full h-auto object-cover"
                    />
                    </li>
                </ul>
                </div>
            </section>

            <!-- Thumbnail Carousel -->
            <section id="thumbnail-carousel" class="splide" aria-label="Thumbnails">
                <div class="splide__track pb-6">
                <ul class="splide__list">
                    <li class="splide__slide border-none !border-0 w-24 h-20">
                    <img
                        src="https://placehold.co/150?text=PROPERTY1"
                        alt=""
                        class="object-cover w-full h-full rounded-xl cursor-pointer"
                    />
                    </li>
                    <li class="splide__slide border-none !border-0 w-24 h-20">
                    <img
                        src="https://placehold.co/150?text=PROPERTY2"
                        alt=""
                        class="object-cover w-full h-full rounded-xl cursor-pointer"
                    />
                    </li>
                    <li class="splide__slide border-none !border-0 w-24 h-20">
                    <img
                        src="https://placehold.co/150?text=PROPERTY3"
                        alt=""
                        class="object-cover w-full h-full rounded-xl cursor-pointer"
                    />
                    </li>
                    <li class="splide__slide border-none !border-0 w-24 h-20">
                    <img
                        src="https://placehold.co/150?text=PROPERTY4"
                        alt=""
                        class="object-cover w-full h-full  rounded-xl cursor-pointer"
                    />
                    </li>
                </ul>
                </div>
            </section>
        </div>

        <!-- Splide JS -->
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            var main = new Splide("#main-carousel", {
            type: "fade",
            rewind: true,
            pagination: false,
            arrows: true,
            heightRatio: 0.55,
            });

            var thumbnails = new Splide("#thumbnail-carousel", {
            fixedWidth: 110,
            fixedHeight: 80,
            gap: 12,
            rewind: true,
            pagination: false,
            isNavigation: true,
            focus: false, // ✅ Prevent centering / jumping
            arrows: false,
            trimSpace: true, // ✅ Keep left-aligned
            breakpoints: {
                768: {
                fixedWidth: 90,
                fixedHeight: 65,
                gap: 8,
                },
            },
            });

            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();
        });
        </script>
        {{-- ------------- property hero slide end ------------- --}}


        <!-- Property Info -->
        <div class="mt-8">
        <h2 class="text-2xl font-semibold text-gray-800">The Grand Modern Villa</h2>
        <p class="text-gray-500 mt-1">123 Serenity Lane, Beverly Hills, CA 90210</p>

        <!-- Property Stats Grid -->
        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4 mt-6">
            <div class="bg-white rounded-xl border p-4">
            <p class="text-gray-500 text-sm">Price per Share</p>
            <p class="text-lg font-semibold">$500</p>
            </div>
            <div class="bg-white rounded-xl border p-4">
            <p class="text-gray-500 text-sm">Total Property Value</p>
            <p class="text-lg font-semibold">$2,500,000</p>
            </div>
            <div class="bg-white rounded-xl border p-4">
            <p class="text-gray-500 text-sm">Projected Annual Return</p>
            <p class="text-lg font-semibold">8.5%</p>
            </div>
            <div class="bg-white rounded-xl border p-4">
            <p class="text-gray-500 text-sm">Shares Available</p>
            <p class="text-lg font-semibold">1,500</p>
            </div>
        </div>

        <!-- Expected Rent -->
        <div class="bg-white rounded-xl border p-4 mt-6">
            <p class="text-gray-500 text-sm mb-1">Expected Rent</p>
            <p class="text-2xl font-semibold">$12,500<span class="text-gray-500 text-base font-normal">/mo</span></p>
        </div>
        </div>

        <!-- Tabs full working componnet -->
        <div class="mt-10">
            <!-- Tabs -->
            <div id="tabs" class="flex flex-wrap border-b border-gray-200">
                <button data-tab="overview" class="text-base tab-btn py-2 px-1.5 sm:px-4 font-medium text-green-600 border-b-2 border-green-600">Overview</button>
                <button data-tab="financials" class="text-base tab-btn py-2 px-1.5 sm:px-4 text-gray-500 hover:text-green-600 transition">Financials</button>
                <button data-tab="location" class="text-base tab-btn py-2 px-1.5 sm:px-4 text-gray-500 hover:text-green-600 transition">Location</button>
                <button data-tab="documents" class="text-base tab-btn py-2 px-1.5 sm:px-4 text-gray-500 hover:text-green-600 transition">Documents</button>
            </div>

            <!-- Tab Content -->
            <div id="tab-content" class="mt-6 text-gray-700 leading-relaxed">
                <!-- Overview -->
                <div id="overview" class="tab-content">
                <p>
                    Nestled in the prestigious Beverly Hills, this grand modern villa is the epitome of luxury and sophistication.
                    Boasting over 6,000 sq. ft. of living space, this property features an open-concept floor plan, state-of-the-art
                    amenities, and breathtaking canyon views. The expansive backyard with a sparkling infinity pool and outdoor
                    kitchen is perfect for entertaining.
                </p>
                <p class="mt-4">
                    This is a rare opportunity to own a piece of one of the most sought-after real estate markets in the world.
                    The property's strong rental demand and potential for appreciation make it an attractive investment for
                    those looking to diversify their portfolio with a high-end residential asset.
                </p>
                </div>

                <!-- Financials -->
                <div id="financials" class="tab-content hidden">
                <p><strong>Total Property Value:</strong> $2,500,000</p>
                <p><strong>Projected Annual Return:</strong> 8.5%</p>
                <p><strong>Expected Rent:</strong> $12,500/month</p>
                <p class="mt-4">
                    This property offers steady cash flow with potential for long-term appreciation,
                    making it an ideal addition to any investment portfolio.
                </p>
                </div>

                <!-- Location -->
                <div id="location" class="tab-content hidden">
                <p><strong>Address:</strong> 123 Serenity Lane, Beverly Hills, CA 90210</p>
                <p class="mt-2">
                    Located in the heart of Beverly Hills, this property offers convenient access to high-end shopping,
                    fine dining, and top-rated schools — making it one of the most desirable locations in Los Angeles.
                </p>
                <div class="mt-4 rounded-xl overflow-hidden">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.893... (your map here)"
                    width="100%" height="300" style="border:0;" allowfullscreen loading="lazy">
                    </iframe>
                </div>
                </div>

                <!-- Documents -->
                <div id="documents" class="tab-content hidden">
                <p class="mb-3">Access key investment and legal documents below:</p>
                <ul class="list-disc ml-5 space-y-2">
                    <li><a href="#" class="text-green-600 hover:underline">Investment Summary.pdf</a></li>
                    <li><a href="#" class="text-green-600 hover:underline">Financial Forecast.xlsx</a></li>
                    <li><a href="#" class="text-green-600 hover:underline">Property Appraisal.pdf</a></li>
                </ul>
                </div>
            </div>
        </div>

        <script>
            const tabButtons = document.querySelectorAll(".tab-btn");
            const tabContents = document.querySelectorAll(".tab-content");

            tabButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                const target = btn.getAttribute("data-tab");

                // Reset all tabs
                tabButtons.forEach((b) => {
                    b.classList.remove("text-green-600", "border-green-600", "border-b-2");
                    b.classList.add("text-gray-500", "border-b", "border-transparent");
                });
                tabContents.forEach((c) => c.classList.add("hidden"));

                // Activate clicked tab
                btn.classList.add("text-green-600", "border-green-600", "border-b-2");
                document.getElementById(target).classList.remove("hidden");
                });
            });
        </script>



        <!-- Investment Calculator -->
        <div class="bg-white border rounded-xl p-6 mt-10">
        <h3 class="text-lg font-semibold mb-4">Investment Calculator</h3>
        
        <div class="mb-4">
            <label class="block text-gray-600 text-sm mb-1">Number of Shares</label>
            <input type="number" value="10" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
        </div>

        <div class="mb-6">
            <label class="block text-gray-600 text-sm mb-1">Total Investment</label>
            <p class="text-lg font-semibold">$5,000</p>
        </div>

        <button class="w-full bg-green-600 text-white py-3 rounded-lg font-medium hover:bg-green-700 transition">
            Buy Shares
        </button>

        <p class="text-gray-400 text-xs text-center mt-3">
            Your capital is at risk. Read investment documents before investing.
        </p>
        </div>
    </div>
    </section>

    {{-- ------------- property detail page end ------------- --}}
    
@endsection
