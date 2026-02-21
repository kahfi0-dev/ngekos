@extends('layouts.app')

@section('content')
    <div id="Background"
        class="absolute top-0 h-[230px] w-full rounded-b-[75px] bg-[linear-gradient(180deg,#F2F9E6_0%,#D2EDE4_100%)]">
    </div>
    <div id="TopNav" class="relative mt-[60px] flex items-center justify-between px-5">
        <a href="{{ route('kos.show') }}"
            class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-full bg-white">
            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="h-[28px] w-[28px]" alt="icon">
        </a>
        <p class="font-semibold">Choose Available Room</p>
        <div class="dummy-btn w-12"></div>
    </div>
    <div id="Header" class="relative mt-[18px] flex items-center justify-between gap-2 px-5">
        <div class="flex w-full gap-4 rounded-[30px] border border-[#F1F2F6] bg-white p-4">
            <div class="flex h-[132px] w-[120px] shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                <img src="{{ asset('assets/images/thumbnails/details-1.png') }}" class="h-full w-full object-cover"
                    alt="icon">
            </div>
            <div class="flex w-full flex-col gap-3">
                <h1 class="line-clamp-2 min-h-[54px] text-lg font-semibold leading-[27px]">Tumbuh Tentram Berada
                    Rumah Nenek</h1>
                <hr class="border-[#F1F2F6]">
                <div class="flex items-center gap-[6px]">
                    <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex h-5 w-5 shrink-0" alt="icon">
                    <p class="text-ngekos-grey text-sm">Singapore City</p>
                </div>
                <div class="flex items-center gap-[6px]">
                    <img src="{{ asset('assets/images/icons/profile-2user.svg') }}" class="flex h-5 w-5 shrink-0"
                        alt="icon">
                    <p class="text-ngekos-grey text-sm">In Housee</p>
                </div>
            </div>
        </div>
    </div>
    <form action="cust-info.html" class="relative mt-5 flex flex-col gap-4">
        <h2 class="px-5 font-bold">Available Rooms</h2>
        <div id="RoomsContainer" class="flex flex-col gap-4 px-5">
            <label class="group relative">
                <input type="radio" name="room" class="absolute left-1/2 top-1/2 -z-10 opacity-0" required>
                <div
                    class="flex gap-4 rounded-[30px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77] group-has-[:checked]:ring-2 group-has-[:checked]:ring-[#91BF77]">
                    <div class="flex h-[156px] w-[120px] shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                        <img src="{{ asset('assets/images/thumbnails/room-1.png') }}" class="h-full w-full object-cover"
                            alt="icon">
                    </div>
                    <div class="flex w-full flex-col gap-3">
                        <h3 class="text-lg font-semibold leading-[27px]">Deluxe Room</h3>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/profile-2user.svg') }}" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">1 People</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/3dcube.svg') }}" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">184 sqft flat</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <p class="text-ngekos-orange text-lg font-semibold">Rp 793.444<span
                                class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                    </div>
                </div>
            </label>
            <label class="group relative">
                <input type="radio" name="room" class="absolute left-1/2 top-1/2 -z-10 opacity-0" required>
                <div
                    class="flex gap-4 rounded-[30px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77] group-has-[:checked]:ring-2 group-has-[:checked]:ring-[#91BF77]">
                    <div class="flex h-[156px] w-[120px] shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                        <img src="{{ asset('assets/images/thumbnails/room-2.png') }}" class="h-full w-full object-cover"
                            alt="icon">
                    </div>
                    <div class="flex w-full flex-col gap-3">
                        <h3 class="text-lg font-semibold leading-[27px]">Executive Room</h3>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/profile-2user.svg') }}" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">2 People</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/3dcube.svg') }}" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">184 sqft flat</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <p class="text-ngekos-orange text-lg font-semibold">Rp 793.444<span
                                class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                    </div>
                </div>
            </label>
            <label class="group relative">
                <input type="radio" name="room" class="absolute left-1/2 top-1/2 -z-10 opacity-0" required>
                <div
                    class="flex gap-4 rounded-[30px] border border-[#F1F2F6] bg-white p-4 transition-all duration-300 hover:border-[#91BF77] group-has-[:checked]:ring-2 group-has-[:checked]:ring-[#91BF77]">
                    <div class="flex h-[156px] w-[120px] shrink-0 overflow-hidden rounded-[30px] bg-[#D9D9D9]">
                        <img src="{{ asset('assets/images/thumbnails/room-3.png') }}" class="h-full w-full object-cover"
                            alt="icon">
                    </div>
                    <div class="flex w-full flex-col gap-3">
                        <h3 class="text-lg font-semibold leading-[27px]">President Estate</h3>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/profile-2user.svg') }}" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">4 People</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/3dcube.svg') }}" class="flex h-5 w-5 shrink-0"
                                alt="icon">
                            <p class="text-ngekos-grey text-sm">184 sqft flat</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <p class="text-ngekos-orange text-lg font-semibold">Rp 793.444<span
                                class="text-ngekos-grey text-sm font-normal">/bulan</span></p>
                    </div>
                </div>
            </label>
        </div>
        <div id="BottomButton" class="relative flex h-[98px] w-full shrink-0">
            <div class="fixed bottom-[30px] z-10 w-full max-w-[640px] px-5">
                <button
                    class="bg-ngekos-orange w-full rounded-full p-[14px_20px] text-center font-bold text-white">Continue
                    Booking</button>
            </div>
        </div>
    </form>
@endsection
