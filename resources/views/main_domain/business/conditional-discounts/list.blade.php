@extends('layouts.base')

@section('head.title',$business->name.' تخفیف ها ')

@section('head.start')
    <link rel="canonical"
          href="https://{{config('app.domains.main')}}/{{$business->slug}}/discounts">
@endsection

@section('body.class','min-h-screen bg-background')
@section('body')
    <div>
        <main class="z-10">
            <div class="sticky z-50 top-0 w-full">
                <div
                    class="flex flex-row place-items-center items-center justify-between relative px-[1.6rem] z-20 left-0 right-0 py-[1rem]"
                    style="justify-content: space-between;">
                    <div class="">
                        <div class="flex flex-row place-items-center items-center justify-normal" gap=".5rem"
                             style="gap: 0.5rem; justify-content: normal;">
                            <div class="">
                                <div class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 24 25"
                                         fill="none">
                                        <path
                                            d="M17.5 12.2322L6.5 12.2322M6.5 12.2322L11.0882 16.2322M6.5 12.2322L11.0882 8.23218"
                                            stroke="#434343" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fixed inset-0 z-50 transition duration-[.2s] pointer-events-none"></div>
                <div class="fixed transition-all top-0 bottom-0 duration-[.3s] z-50 max-w-xs w-full right-[-100%]">
                    <div
                        class="flex flex-col place-items-stretch items-stretch justify-between max-w-xs w-full h-full bg-white rounded-bl-[2rem] rounded-tl-[2rem]"
                        style="justify-content: space-between;">
                        <div class="">
                            <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                                 style="justify-content: normal;">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between mt-[2rem] px-[1.5rem]"
                                        style="justify-content: space-between;">
                                        <div class="text-typography text-[1.5rem]">
                                            {{$business->name}}
                                        </div>
                                        <div class="cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M3.35288 8.95043C4.00437 6.17301 6.17301 4.00437 8.95043 3.35288C10.9563 2.88237 13.0437 2.88237 15.0496 3.35288C17.827 4.00437 19.9956 6.17301 20.6471 8.95044C21.1176 10.9563 21.1176 13.0437 20.6471 15.0496C19.9956 17.827 17.827 19.9956 15.0496 20.6471C13.0437 21.1176 10.9563 21.1176 8.95044 20.6471C6.17301 19.9956 4.00437 17.827 3.35288 15.0496C2.88237 13.0437 2.88237 10.9563 3.35288 8.95043Z"
                                                    stroke="#434343" stroke-width="1.5"></path>
                                                <path
                                                    d="M13.7678 10.2322L10.2322 13.7677M13.7678 13.7677L10.2322 10.2322"
                                                    stroke="#434343" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-gray-300 font-bold w-full text-center py-3"><a
                                href="https://{{config('app.domains.main')}}/"><span
                                    class="hover:underline">قدرت گرفته از <span
                                        class="text-blue-400">منوما</span></span></a></div>
                    </div>
                </div>
                <div
                    class="fixed left-[50%] translate-x-[-50%] max-w-sm xs:max-w-xs w-full py-[1rem] px-[1.5rem] bg-white z-50 rounded-[2.5rem] top-[5rem] bottom-[5rem] overflow-hidden hidden">
                    <div class="flex flex-col place-items-stretch items-stretch justify-normal h-full"
                         style="justify-content: normal;">
                        <div class="absolute top-[1.5rem] right-[2rem]">
                            <div class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <path
                                        d="M3.35288 8.95043C4.00437 6.17301 6.17301 4.00437 8.95043 3.35288C10.9563 2.88237 13.0437 2.88237 15.0496 3.35288C17.827 4.00437 19.9956 6.17301 20.6471 8.95044C21.1176 10.9563 21.1176 13.0437 20.6471 15.0496C19.9956 17.827 17.827 19.9956 15.0496 20.6471C13.0437 21.1176 10.9563 21.1176 8.95044 20.6471C6.17301 19.9956 4.00437 17.827 3.35288 15.0496C2.88237 13.0437 2.88237 10.9563 3.35288 8.95043Z"
                                        stroke="#434343" stroke-width="1.5"></path>
                                    <path d="M13.7678 10.2322L10.2322 13.7677M13.7678 13.7677L10.2322 10.2322"
                                          stroke="#434343" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="grow-0">
                            <div class="text-[1.5rem] font-bold text-center w-full">سفارشات شما</div>
                        </div>
                        <div class="grow">
                            <div class="absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%]">
                                <div class="text-gray-400 text-center">سفارشی ثبت نکرده اید</div>
                            </div>
                        </div>
                        <div class="grow-0 mt-[1.5rem] hidden">
                            <div
                                class="flex flex-row place-items-center items-center justify-normal gap-2 whitespace-nowrap"
                                gap="2" style="justify-content: normal;">
                                <div class="">
                                    <div class="text-[1rem]">مبلغ قابل پرداخت</div>
                                </div>
                                <div class="grow">
                                    <hr class="w-full">
                                </div>
                                <div class="">
                                    <div class="text-[1rem]">0 تومان</div>
                                </div>
                            </div>
                        </div>
                        <div class="grow-0 mt-[1.5rem]">
                            <div
                                class="px-[2rem] py-[.8rem] w-full text-center active:scale-[.99]  transition-colors duration-[.1s] select-none border  rounded-[1rem] font-bold whitespace-nowrap text-typography active:text-more border-more bg-more/[.1] active:bg-more/[.2]">
                                درخواست گارسون
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col place-items-stretch items-stretch justify-between min-h-screen"
                 style="justify-content: space-between;">
                <x-business.header :business="$business" position="fixed"/>
                <div class="">
                    <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                         style="justify-content: normal;">
                        <div class="">
                            <div
                                class="relative w-[7rem] h-[7rem] rounded-full overflow-hidden mx-auto border border-[#e5e7eb]">
                                <a
                                    class="coffee-pattern-placeholder-image"
                                    href="/demo">
                                    <img alt="{{$business->name}}" loading="lazy" decoding="async" data-nimg="fill"
                                         sizes="100vw"
                                         src="/storage/{{$business->logo_path}}"
                                         style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;"
                                         onerror="this.src='/img/placeholder/coffee-pattern.jpg'"></a>
                            </div>
                        </div>
                        <div class="mt-[2rem]">
                            <div class="flex flex-col place-items-stretch items-stretch justify-normal" gap=".5rem"
                                 style="gap: 0.5rem; justify-content: normal;">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                        gap="2" style="justify-content: space-between;">
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                        <div
                                            class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                            {{__('pages/conditional-discounts.list.title')}}

                                        </div>
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="px-[1.2rem] pt-2">
                                    <div
                                        class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 md:items-center"
                                        gap="2" style="justify-content: normal;">
                                        @foreach($conditionalDiscounts as $conditionalDiscount)
                                            <div class="">
                                                <div
                                                    class="flex flex-col place-items-stretch items-stretch justify-normal p-[1rem] bg-white gap-[.62rem] w-full max-w-[30rem] !overflow-hidden !rounded-[1rem] border md:w-[25rem] border-[#e5e7eb]"
                                                    style="justify-content: normal;">
                                                    <div class="">
                                                        <div
                                                            class="flex flex-row place-items-stretch items-stretch justify-normal gap-[.81rem]"
                                                            style="justify-content: normal;">
                                                            {{-- todo --}}
                                                            {{--<div
                                                                class="w-[7rem] h-[7rem] relative rounded-[1rem] overflow-hidden shrink-0 border">
                                                                <img alt="30 درصد تخفیف " loading="lazy" decoding="async"
                                                                     data-nimg="fill" class="object-cover bg-gray-100"
                                                                     sizes="100vw"
                                                                     srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=3840&amp;q=75 3840w"
                                                                     src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=3840&amp;q=75"
                                                                     style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                            </div>--}}
                                                            <div class="">
                                                                <div
                                                                    class="flex flex-col place-items-start items-start justify-normal gap-[.3rem]"
                                                                    style="justify-content: normal;">
                                                                    <div
                                                                        class="text-[1.2rem] text-typography font-semibold">
                                                                        {{$conditionalDiscount->title}}
                                                                    </div>
                                                                    <div
                                                                        class="text-typography text-[.862rem] line-clamp-[3]">
                                                                        {{$conditionalDiscount->description}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-business.footer/>
            </div>
            <div
                class="fixed inset-0 bg-black/[.2] z-[51] transition-all duration-[.2s] opacity-0 pointer-events-none"></div>
        </main>
    </div>
@endsection
