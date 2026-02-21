@extends('layouts.app')

@section('content')
    <div id="Content-Container"
        class="relative mx-auto flex min-h-screen w-full max-w-[640px] flex-col overflow-x-hidden bg-white">
        <div id="ForegroundFade"
            class="absolute top-0 z-10 h-[143px] w-full bg-[linear-gradient(180deg,#070707_0%,rgba(7,7,7,0)_100%)]">
        </div>
        <div id="TopNavAbsolute" class="absolute top-[60px] z-10 flex w-full items-center justify-between px-5">
            <a href="{{ route('home') }}"
                class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-full bg-white/10 backdrop-blur-sm">
                <img src="assets/images/icons/arrow-left-transparent.svg" class="h-8 w-8" alt="icon">
            </a>
            <p class="font-semibold text-white">Details</p>
            <button
                class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-full bg-white/10 backdrop-blur-sm">
                <img src="assets/images/icons/like.svg" class="h-[26px] w-[26px]" alt="">
            </button>
        </div>
        <div id="Gallery" class="swiper-gallery -mb-[38px] w-full overflow-x-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide !w-fit">
                    <div class="flex h-[430px] w-[320px] shrink-0 overflow-hidden">
                        <img src="assets/images/thumbnails/kos-4.png" class="h-full w-full object-cover"
                            alt="gallery thumbnails">
                    </div>
                </div>
                <div class="swiper-slide !w-fit">
                    <div class="flex h-[430px] w-[320px] shrink-0 overflow-hidden">
                        <img src="assets/images/thumbnails/kos-5.png" class="h-full w-full object-cover"
                            alt="gallery thumbnails">
                    </div>
                </div>
                <div class="swiper-slide !w-fit">
                    <div class="flex h-[430px] w-[320px] shrink-0 overflow-hidden">
                        <img src="assets/images/thumbnails/kos-6.png" class="h-full w-full object-cover"
                            alt="gallery thumbnails">
                    </div>
                </div>
            </div>
        </div>
        <main id="Details" class="relative z-10 flex flex-col gap-4 rounded-t-[40px] bg-white py-5 pb-[10px]">
            <div id="Title" class="flex items-center justify-between gap-2 px-5">
                <h1 class="text-[22px] font-bold leading-[33px]">Tumbuh Tentram Berada Rumah Nenek</h1>
                <div
                    class="flex shrink-0 flex-col items-center gap-2 rounded-[22px] border border-[#F1F2F6] bg-white p-[10px_20px] text-center">
                    <img src="assets/images/icons/star.svg" class="h-6 w-6" alt="icon">
                    <p class="text-sm font-bold">4/5</p>
                </div>
            </div>
            <hr class="mx-5 border-[#F1F2F6]">
            <div id="Features" class="grid grid-cols-2 gap-x-[10px] gap-y-4 px-5">
                <div class="flex items-center gap-[6px]">
                    <img src="assets/images/icons/location.svg" class="flex h-[26px] w-[26px] shrink-0" alt="icon">
                    <p class="text-ngekos-grey">Singapore City</p>
                </div>
                <div class="flex items-center gap-[6px]">
                    <img src="assets/images/icons/3dcube.svg" class="flex h-[26px] w-[26px] shrink-0" alt="icon">
                    <p class="text-ngekos-grey">In Hotels</p>
                </div>
                <div class="flex items-center gap-[6px]">
                    <img src="assets/images/icons/profile-2user.svg" class="flex h-[26px] w-[26px] shrink-0" alt="icon">
                    <p class="text-ngekos-grey">4 People</p>
                </div>
                <div class="flex items-center gap-[6px]">
                    <img src="assets/images/icons/shield-tick.svg" class="flex h-[26px] w-[26px] shrink-0" alt="icon">
                    <p class="text-ngekos-grey">Privacy 100%</p>
                </div>
            </div>
            <hr class="mx-5 border-[#F1F2F6]">
            <div id="About" class="flex flex-col gap-[6px] px-5">
                <h2 class="font-bold">About</h2>
                <p class="leading-[30px]">With fast WiFi and comfortable kitchen, with an apartment is ready to be a
                    place good Working From Home, a quick escape reality</p>
            </div>
            <div id="Tabs" class="flex gap-3 overflow-x-auto pb-2 ps-5"
                style="-webkit-overflow-scrolling: touch; scroll-behavior: smooth;">
                <button
                    class="tab-link hover:bg-ngekos-black !bg-ngekos-black shrink-0 whitespace-nowrap rounded-full border border-[#F1F2F6] p-[8px_14px] text-sm font-semibold !text-white transition-all duration-300 hover:text-white"
                    data-target-tab="#Bonus-Tab">Bonus Kos</button>
                <button
                    class="tab-link hover:bg-ngekos-black shrink-0 whitespace-nowrap rounded-full border border-[#F1F2F6] p-[8px_14px] text-sm font-semibold transition-all duration-300 hover:text-white"
                    data-target-tab="#Testimonials-Tab">Testimonials</button>
                <button
                    class="tab-link hover:bg-ngekos-black shrink-0 whitespace-nowrap rounded-full border border-[#F1F2F6] p-[8px_14px] text-sm font-semibold transition-all duration-300 hover:text-white"
                    data-target-tab="#Rules-Tab">Rules</button>
                <button
                    class="tab-link hover:bg-ngekos-black shrink-0 whitespace-nowrap rounded-full border border-[#F1F2F6] p-[8px_14px] text-sm font-semibold transition-all duration-300 hover:text-white"
                    data-target-tab="#Contact-Tab">Contact</button>
                <button
                    class="tab-link hover:bg-ngekos-black shrink-0 whitespace-nowrap rounded-full border border-[#F1F2F6] p-[8px_14px] text-sm font-semibold transition-all duration-300 hover:text-white"
                    data-target-tab="#Rewards-Tab">Rewards</button>
            </div>
            <div id="TabsContent" class="px-5">
                <div id="Bonus-Tab" class="tab-content flex flex-col gap-5">
                    <div class="flex flex-col gap-4">
                        <div
                            class="bonus-card flex items-center gap-3 rounded-[22px] border border-[#F1F2F6] p-[10px] transition-all duration-300 hover:border-[#91BF77]">
                            <div class="flex h-[90px] w-[120px] shrink-0 overflow-hidden rounded-[18px] bg-[#D9D9D9]">
                                <img src="assets/images/thumbnails/bonus-1.png" class="h-full w-full object-cover"
                                    alt="thumbnails">
                            </div>
                            <div>
                                <p class="font-semibold">Clean Laundry</p>
                                <p class="text-ngekos-grey text-sm">Super Fast • 4 People</p>
                            </div>
                        </div>
                        <div
                            class="bonus-card flex items-center gap-3 rounded-[22px] border border-[#F1F2F6] p-[10px] transition-all duration-300 hover:border-[#91BF77]">
                            <div class="flex h-[90px] w-[120px] shrink-0 overflow-hidden rounded-[18px] bg-[#D9D9D9]">
                                <img src="assets/images/thumbnails/bonus-2.png" class="h-full w-full object-cover"
                                    alt="thumbnails">
                            </div>
                            <div>
                                <p class="font-semibold">Healthy Catering</p>
                                <p class="text-ngekos-grey text-sm">Animal Base • 4 People</p>
                            </div>
                        </div>
                        <div
                            class="bonus-card flex items-center gap-3 rounded-[22px] border border-[#F1F2F6] p-[10px] transition-all duration-300 hover:border-[#91BF77]">
                            <div class="flex h-[90px] w-[120px] shrink-0 overflow-hidden rounded-[18px] bg-[#D9D9D9]">
                                <img src="assets/images/thumbnails/bonus-3.png" class="h-full w-full object-cover"
                                    alt="thumbnails">
                            </div>
                            <div>
                                <p class="font-semibold">Coworking Space</p>
                                <p class="text-ngekos-grey text-sm">Comfortable • 4 People</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Testimonials-Tab" class="tab-content hidden flex-col gap-5">
                    <div class="flex flex-col gap-4">
                        <div
                            class="testi-card flex flex-col gap-3 rounded-[22px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77]">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                                    <img src="assets/images/photos/sami.png" class="h-full w-full object-cover"
                                        alt="icon">
                                </div>
                                <div>
                                    <p class="font-semibold">Samina Ryin</p>
                                    <p class="text-ngekos-grey mt-[2px] text-sm">9 September 2024</p>
                                </div>
                            </div>
                            <p class="leading-[26px]">Enak banget ngekos di sini sampe lupa rumah emak saking nyamannya
                                lol...</p>
                            <div class="flex">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                            </div>
                        </div>
                        <div
                            class="testi-card flex flex-col gap-3 rounded-[22px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77]">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                                    <img src="assets/images/photos/sami.png" class="h-full w-full object-cover"
                                        alt="icon">
                                </div>
                                <div>
                                    <p class="font-semibold">Samina Ryin</p>
                                    <p class="text-ngekos-grey mt-[2px] text-sm">9 September 2024</p>
                                </div>
                            </div>
                            <p class="leading-[26px]">Enak banget ngekos di sini sampe lupa rumah emak saking nyamannya
                                lol...</p>
                            <div class="flex">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                            </div>
                        </div>
                        <div
                            class="testi-card flex flex-col gap-3 rounded-[22px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77]">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full border-4 border-white ring-1 ring-[#F1F2F6]">
                                    <img src="assets/images/photos/sami.png" class="h-full w-full object-cover"
                                        alt="icon">
                                </div>
                                <div>
                                    <p class="font-semibold">Samina Ryin</p>
                                    <p class="text-ngekos-grey mt-[2px] text-sm">9 September 2024</p>
                                </div>
                            </div>
                            <p class="leading-[26px]">Enak banget ngekos di sini sampe lupa rumah emak saking nyamannya
                                lol...</p>
                            <div class="flex">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                                <img src="assets/images/icons/Star 1.svg" class="flex h-[22px] w-[22px] shrink-0"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Rules-Tab" class="tab-content hidden flex-col gap-5">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Porro, vitae.</div>
                <div id="Contact-Tab" class="tab-content hidden flex-col gap-5">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Porro, vitae.</div>
                <div id="Rewards-Tab" class="tab-content hidden flex-col gap-5">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Porro, vitae.</div>
            </div>
        </main>
        <div id="BottomNav" class="relative flex h-[138px] w-full shrink-0">
            <div class="fixed bottom-5 z-10 w-full max-w-[640px] px-5">
                <div class="bg-ngekos-black flex items-center justify-between rounded-[40px] px-6 py-4">
                    <p class="text-xl font-bold leading-[30px] text-white">
                        Rp 1.493.593
                        <br>
                        <span class="text-sm font-normal">/bulan</span>
                    </p>
                    <a href="{{ route('kos.rooms') }}"
                        class="bg-ngekos-orange flex shrink-0 rounded-full px-5 py-[14px] font-bold text-white">Book
                        Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/details.js') }}"></script>
@endsection
