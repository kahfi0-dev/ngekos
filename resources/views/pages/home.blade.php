@extends('layouts.app')

@section('content')
    <div id="Background"
        class="h-70 absolute top-0 w-full rounded-bl-[75px] bg-[linear-gradient(180deg,#F2F9E6_0%,#D2EDE4_100%)]">
    </div>
    <div id="TopNav" class="mt-15 relative flex items-center justify-between px-5">
        <div class="flex flex-col gap-1">
            <p>Good day,</p>
            <h1 class="leading-7.5 text-xl font-bold">Explore Cozy Home</h1>
        </div>
        <a href="#" class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-full bg-white">
            <img src="assets/images/icons/notification.svg" class="h-7 w-7" alt="icon">
        </a>
    </div>
    <div id="Categories" class="swiper mt-7.5 w-full overflow-x-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide w-fit! pb-7.5">
                <a href="categories.html" class="card">
                    <div
                        class="w-30 flex shrink-0 flex-col items-center gap-3 rounded-[40px] bg-white p-4 pb-5 text-center shadow-[0px_12px_30px_0px_#0000000D]">
                        <div class="h-17.5 w-17.5 flex shrink-0 overflow-hidden rounded-full">
                            <img src="assets/images/thumbnails/flats.png" class="h-full w-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h3 class="font-semibold">Flats</h3>
                            <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide w-fit! pb-7.5">
                <a href="categories.html" class="card">
                    <div
                        class="w-30 flex shrink-0 flex-col items-center gap-3 rounded-[40px] bg-white p-4 pb-5 text-center shadow-[0px_12px_30px_0px_#0000000D]">
                        <div class="h-17.5 w-17.5 flex shrink-0 overflow-hidden rounded-full">
                            <img src="assets/images/thumbnails/villas.png" class="h-full w-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h3 class="font-semibold">Villas</h3>
                            <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide w-fit! pb-7.5">
                <a href="categories.html" class="card">
                    <div
                        class="w-30 flex shrink-0 flex-col items-center gap-3 rounded-[40px] bg-white p-4 pb-5 text-center shadow-[0px_12px_30px_0px_#0000000D]">
                        <div class="h-17.5 w-17.5 flex shrink-0 overflow-hidden rounded-full">
                            <img src="assets/images/thumbnails/hotel.png" class="h-full w-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h3 class="font-semibold">Hotel</h3>
                            <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide w-fit! pb-7.5">
                <a href="categories.html" class="card">
                    <div
                        class="w-30 flex shrink-0 flex-col items-center gap-3 rounded-[40px] bg-white p-4 pb-5 text-center shadow-[0px_12px_30px_0px_#0000000D]">
                        <div class="h-17.5 w-17.5 flex shrink-0 overflow-hidden rounded-full">
                            <img src="assets/images/thumbnails/apartments.png" class="h-full w-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h3 class="font-semibold">Apartments</h3>
                            <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide w-fit! pb-7.5">
                <a href="categories.html" class="card">
                    <div
                        class="w-30 flex shrink-0 flex-col items-center gap-3 rounded-[40px] bg-white p-4 pb-5 text-center shadow-[0px_12px_30px_0px_#0000000D]">
                        <div class="h-17.5 w-17.5 flex shrink-0 overflow-hidden rounded-full">
                            <img src="assets/images/thumbnails/buildings.png" class="h-full w-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h3 class="font-semibold">Flats</h3>
                            <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <section id="Popular" class="flex flex-col gap-4">
        <div class="flex items-center justify-between px-5">
            <h2 class="font-bold">Popular Kos</h2>
            <a href="#">
                <div class="flex items-center gap-2">
                    <span>See all</span>
                    <img src="assets/images/icons/arrow-right.svg" class="flex h-6 w-6 shrink-0" alt="icon">
                </div>
            </a>
        </div>
        <div class="swiper w-full overflow-x-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-fit!">
                    <a href="details.html" class="card">
                        <div
                            class="w-62.5 flex shrink-0 flex-col gap-2.5 rounded-[30px] border border-[#F1F2F6] p-4 pb-5 transition-all duration-300 hover:border-[#91BF77]">
                            <div class="h-37.5 flex w-full shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                                <img src="assets/images/thumbnails/kos-1.png" class="h-full w-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="min-h-13.5 leading-6.75 line-clamp-2 text-lg font-semibold">Tumbuh
                                    Tentram Berada Rumah Nenek</h3>
                                <hr class="border-[#F1F2F6]">
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/location.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">Singapore City</p>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/3dcube.svg" class="flex h-5 w-5 shrink-0" alt="icon">
                                    <p class="text-ngekos-grey text-sm">In Hotels</p>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/profile-2user.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">4 People</p>
                                </div>
                                <hr class="border-[#F1F2F6]">
                                <p class="text-ngekos-orange text-lg font-semibold">Rp 4.593.444<span
                                        class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide w-fit!">
                    <a href="details.html" class="card">
                        <div
                            class="w-62.5 flex shrink-0 flex-col gap-2.5 rounded-[30px] border border-[#F1F2F6] p-4 pb-5 transition-all duration-300 hover:border-[#91BF77]">
                            <div class="h-37.5 flex w-full shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                                <img src="assets/images/thumbnails/kos-2.png" class="h-full w-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="min-h-13.5 leading-6.75 line-clamp-2 text-lg font-semibold">Tumbuh
                                    Tentram Berada Rumah Nenek</h3>
                                <hr class="border-[#F1F2F6]">
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/location.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">Singapore City</p>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/3dcube.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">In Hotels</p>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/profile-2user.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">4 People</p>
                                </div>
                                <hr class="border-[#F1F2F6]">
                                <p class="text-ngekos-orange text-lg font-semibold">Rp 4.593.444<span
                                        class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide w-fit!">
                    <a href="details.html" class="card">
                        <div
                            class="w-62.5 flex shrink-0 flex-col gap-2.5 rounded-[30px] border border-[#F1F2F6] p-4 pb-5 transition-all duration-300 hover:border-[#91BF77]">
                            <div class="h-37.5 flex w-full shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                                <img src="assets/images/thumbnails/kos-3.png" class="h-full w-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="min-h-13.5 leading-6.75 line-clamp-2 text-lg font-semibold">Tumbuh
                                    Tentram Berada Rumah Nenek</h3>
                                <hr class="border-[#F1F2F6]">
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/location.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">Singapore City</p>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/3dcube.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">In Hotels</p>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="assets/images/icons/profile-2user.svg" class="flex h-5 w-5 shrink-0"
                                        alt="icon">
                                    <p class="text-ngekos-grey text-sm">4 People</p>
                                </div>
                                <hr class="border-[#F1F2F6]">
                                <p class="text-ngekos-orange text-lg font-semibold">Rp 4.593.444<span
                                        class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="Cities" class="mt-7.5 flex flex-col gap-4 bg-[#F5F6F8] p-5">
        <div class="flex items-center justify-between">
            <h2 class="font-bold">Browse Cities</h2>
            <a href="#">
                <div class="flex items-center gap-2">
                    <span>See all</span>
                    <img src="assets/images/icons/arrow-right.svg" class="flex h-6 w-6 shrink-0" alt="icon">
                </div>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <a href="cities.html" class="card">
                <div
                    class="flex items-center gap-3 overflow-hidden rounded-[22px] border border-white bg-white p-2.5 transition-all duration-300 hover:border-[#91BF77]">
                    <div
                        class="h-13.75 w-13.75 flex shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                        <img src="assets/images/thumbnails/city-1.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex flex-col gap-0.5">
                        <h3 class="font-semibold">Bogor</h3>
                        <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                    </div>
                </div>
            </a>
            <a href="cities.html" class="card">
                <div
                    class="flex items-center gap-3 overflow-hidden rounded-[22px] border border-white bg-white p-2.5 transition-all duration-300 hover:border-[#91BF77]">
                    <div
                        class="h-13.75 w-13.75 flex shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                        <img src="assets/images/thumbnails/city-2.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex flex-col gap-0.5">
                        <h3 class="font-semibold">California</h3>
                        <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                    </div>
                </div>
            </a>
            <a href="cities.html" class="card">
                <div
                    class="flex items-center gap-3 overflow-hidden rounded-[22px] border border-white bg-white p-2.5 transition-all duration-300 hover:border-[#91BF77]">
                    <div
                        class="h-13.75 w-13.75 flex shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                        <img src="assets/images/thumbnails/kos-2.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex flex-col gap-0.5">
                        <h3 class="font-semibold">Bogor</h3>
                        <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                    </div>
                </div>
            </a>
            <a href="cities.html" class="card">
                <div
                    class="flex items-center gap-3 overflow-hidden rounded-[22px] border border-white bg-white p-2.5 transition-all duration-300 hover:border-[#91BF77]">
                    <div
                        class="h-13.75 w-13.75 flex shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                        <img src="assets/images/thumbnails/city-1.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex flex-col gap-0.5">
                        <h3 class="font-semibold">Jakarta</h3>
                        <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                    </div>
                </div>
            </a>
            <a href="cities.html" class="card">
                <div
                    class="flex items-center gap-3 overflow-hidden rounded-[22px] border border-white bg-white p-2.5 transition-all duration-300 hover:border-[#91BF77]">
                    <div
                        class="h-13.75 w-13.75 flex shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                        <img src="assets/images/thumbnails/city-3.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex flex-col gap-0.5">
                        <h3 class="font-semibold">Bandung</h3>
                        <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                    </div>
                </div>
            </a>
            <a href="cities.html" class="card">
                <div
                    class="flex items-center gap-3 overflow-hidden rounded-[22px] border border-white bg-white p-2.5 transition-all duration-300 hover:border-[#91BF77]">
                    <div
                        class="h-13.75 w-13.75 flex shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                        <img src="assets/images/thumbnails/city-4.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex flex-col gap-0.5">
                        <h3 class="font-semibold">Paris</h3>
                        <p class="text-ngekos-grey text-sm">1,304 Kos</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section id="Best" class="mt-7.5 flex flex-col gap-4 px-5">
        <div class="flex items-center justify-between">
            <h2 class="font-bold">All Great Koskos</h2>
            <a href="#">
                <div class="flex items-center gap-2">
                    <span>See all</span>
                    <img src="assets/images/icons/arrow-right.svg" class="flex h-6 w-6 shrink-0" alt="icon">
                </div>
            </a>
        </div>
        <div class="flex flex-col gap-4">
            <a href="details.html" class="card">
                <div
                    class="flex gap-4 rounded-[30px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77]">
                    <div class="h-45.75 w-30 flex shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                        <img src="assets/images/thumbnails/kos-4.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex w-full flex-col gap-3">
                        <h3 class="min-h-13.5 leading-6.75 line-clamp-2 text-lg font-semibold">Tumbuh Tentram
                            Berada Rumah Nenek</h3>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-1.5">
                            <img src="assets/images/icons/location.svg" class="flex h-5 w-5 shrink-0" alt="icon">
                            <p class="text-ngekos-grey text-sm">Singapore City</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <img src="assets/images/icons/profile-2user.svg" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">4 People</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <p class="text-ngekos-orange text-lg font-semibold">Rp 4.593.444<span
                                class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div
                    class="flex gap-4 rounded-[30px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77]">
                    <div class="h-45.75 w-30 flex shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                        <img src="assets/images/thumbnails/kos-5.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex w-full flex-col gap-3">
                        <h3 class="min-h-13.5 leading-6.75 line-clamp-2 text-lg font-semibold">Tumbuh Tentram
                            Berada Rumah Nenek</h3>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-1.5">
                            <img src="assets/images/icons/location.svg" class="flex h-5 w-5 shrink-0" alt="icon">
                            <p class="text-ngekos-grey text-sm">Singapore City</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <img src="assets/images/icons/profile-2user.svg" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">4 People</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <p class="text-ngekos-orange text-lg font-semibold">Rp 4.593.444<span
                                class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div
                    class="flex gap-4 rounded-[30px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77]">
                    <div class="h-45.75 w-30 flex shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                        <img src="assets/images/thumbnails/kos-6.png" class="h-full w-full object-cover" alt="icon">
                    </div>
                    <div class="flex w-full flex-col gap-3">
                        <h3 class="min-h-13.5 leading-6.75 line-clamp-2 text-lg font-semibold">Tumbuh Tentram
                            Berada Rumah Nenek</h3>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-1.5">
                            <img src="assets/images/icons/location.svg" class="flex h-5 w-5 shrink-0" alt="icon">
                            <p class="text-ngekos-grey text-sm">Singapore City</p>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <img src="assets/images/icons/profile-2user.svg" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">4 People</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <p class="text-ngekos-orange text-lg font-semibold">Rp 4.593.444<span
                                class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    @include('includes.navigation')
@endsection
