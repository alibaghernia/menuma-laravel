@extends('layouts.base')

@section('head.title',$business->name.' دورهمی ها ')

@section('head.start')
    <link rel="canonical"
          href="https://{{config('app.domains.main')}}/{{$business->slug}}/menu/events">
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
                        {{--             todo remove it           --}}
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
                                         style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
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
                                        <h2
                                            class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                            {{__('pages/events.list.future_events')}}
                                        </h2>
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                    </div>
                                </div>
                                @foreach($events as $event)
                                    <div
                                        x-data="{
                                                open:false,
                                                short_description: `{{$event->short_description}}`,
                                                long_description: `{{$event->long_description}}`,
                                            }"
                                        class="px-[1.2rem] pt-2">
                                        <div
                                            class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 md:items-center"
                                            gap="2" style="justify-content: normal;">
                                            <div class="">
                                                <div
                                                    class="flex flex-col place-items-stretch items-stretch justify-normal p-[1rem] bg-white gap-[.62rem] rounded-[1rem] shadow sm:w-[30rem] w-full md:w-[30rem]"
                                                    style="justify-content: normal;">
                                                    <div class="">
                                                        <div
                                                            class="flex flex-row place-items-stretch items-stretch justify-normal gap-[.81rem]"
                                                            style="justify-content: normal;">
                                                            @if($event->banner_path)
                                                                <div
                                                                    class="w-[7rem] h-[7rem] relative rounded-[.625rem] overflow-hidden shrink-0">

                                                                    <img alt="{{$event->name}}" loading="lazy"
                                                                         decoding="async"
                                                                         data-nimg="fill" class="object-cover"
                                                                         sizes="100vw"
                                                                         src="/storage/{{$event->banner_path}}"
                                                                         style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;">

                                                                </div>
                                                            @endif
                                                            <div class="">
                                                                <div
                                                                    class="flex flex-col place-items-start items-start justify-normal gap-[.3rem]"
                                                                    style="justify-content: normal;">
                                                                    <div
                                                                        class="text-[1.2rem] text-typography font-semibold">
                                                                        {{$event->name}}
                                                                    </div>
                                                                    <div
                                                                        x-transition
                                                                        x-bind:class="! open ? 'line-clamp-[3]' : ''"
                                                                        x-text="open ? long_description : short_description"
                                                                        class="text-typography text-[.862rem] ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div
                                                            class="flex flex-row place-items-center items-center justify-center gap-[.75rem]"
                                                            style="justify-content: center;">
                                                            <div class="">
                                                                <div
                                                                    class="flex flex-row place-items-center items-center justify-normal gap-[.5rem]"
                                                                    style="justify-content: normal;">
                                                                    <div class="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="20"
                                                                             height="20" viewBox="0 0 20 20"
                                                                             fill="none">
                                                                            <mask id="mask0_807_52"
                                                                                  maskUnits="userSpaceOnUse"
                                                                                  x="1" y="1" width="18" height="18"
                                                                                  style="mask-type: luminance;">
                                                                                <path
                                                                                    d="M14.1667 2.5V5.83333M5.83337 2.5V5.83333"
                                                                                    stroke="white" stroke-width="1.5"
                                                                                    stroke-linecap="round"></path>
                                                                                <path
                                                                                    d="M2.5 8.33333C2.5 6.76167 2.5 5.97667 2.98833 5.48833C3.47667 5 4.26167 5 5.83333 5H14.1667C15.7383 5 16.5233 5 17.0117 5.48833C17.5 5.97667 17.5 6.76167 17.5 8.33333V9.16667H2.5V8.33333Z"
                                                                                    stroke="white"
                                                                                    stroke-width="1.5"></path>
                                                                                <path
                                                                                    d="M15.8333 5H4.16667C3.24619 5 2.5 5.74619 2.5 6.66667V15.8333C2.5 16.7538 3.24619 17.5 4.16667 17.5H15.8333C16.7538 17.5 17.5 16.7538 17.5 15.8333V6.66667C17.5 5.74619 16.7538 5 15.8333 5Z"
                                                                                    stroke="white"
                                                                                    stroke-width="1.5"></path>
                                                                                <path
                                                                                    d="M5 12.5H8.33333M11.6667 12.5H15M5 15H8.33333M11.6667 15H15"
                                                                                    stroke="#434343"
                                                                                    stroke-opacity="0.25"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"></path>
                                                                            </mask>
                                                                            <g mask="url(#mask0_807_52)">
                                                                                <path d="M0 0H20V20H0V0Z"
                                                                                      fill="#434343"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="text-typography text-[.862rem]">
                                                                        {{verta($event->date)->format('l j F')}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div
                                                                    class="flex flex-row place-items-center items-center justify-normal gap-[.5rem]"
                                                                    style="justify-content: normal;">
                                                                    <div class="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="20"
                                                                             height="20" viewBox="0 0 16 16"
                                                                             fill="none">
                                                                            <g clip-path="url(#clip0_808_81)">
                                                                                <path
                                                                                    d="M8.00004 14.6667C11.682 14.6667 14.6667 11.682 14.6667 8C14.6667 4.318 11.682 1.33333 8.00004 1.33333C4.31804 1.33333 1.33337 4.318 1.33337 8C1.33337 11.682 4.31804 14.6667 8.00004 14.6667Z"
                                                                                    stroke="#434343"
                                                                                    stroke-width="1.33333"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M8.00269 4V8.00333L10.829 10.83"
                                                                                    stroke="#434343"
                                                                                    stroke-width="1.33333"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_808_81">
                                                                                    <rect width="16" height="16"
                                                                                          fill="white"></rect>
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="text-typography text-[.862rem]">
                                                                        {{verta($event->from)->format('H:i')}}
                                                                        @if($event->to)
                                                                            تا
                                                                        @endif
                                                                        @if($event->to)
                                                                            {{verta($event->to)->format('H:i')}}
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if($event->capacity)
                                                                <div class="">
                                                                    <div
                                                                        class="flex flex-row place-items-center items-center justify-normal gap-[.5rem]"
                                                                        style="justify-content: normal;">
                                                                        <div class="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="20"
                                                                                 height="20" viewBox="0 0 15 16">
                                                                                <path fill="#434343"
                                                                                      d="M7.5 7a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5m0-4C6.67 3 6 3.67 6 4.5S6.67 6 7.5 6S9 5.33 9 4.5S8.33 3 7.5 3"></path>
                                                                                <path fill="#434343"
                                                                                      d="M13.5 11c-.28 0-.5-.22-.5-.5s.22-.5.5-.5s.5-.22.5-.5A2.5 2.5 0 0 0 11.5 7h-1c-.28 0-.5-.22-.5-.5s.22-.5.5-.5c.83 0 1.5-.67 1.5-1.5S11.33 3 10.5 3c-.28 0-.5-.22-.5-.5s.22-.5.5-.5A2.5 2.5 0 0 1 13 4.5c0 .62-.22 1.18-.6 1.62c1.49.4 2.6 1.76 2.6 3.38c0 .83-.67 1.5-1.5 1.5m-12 0C.67 11 0 10.33 0 9.5c0-1.62 1.1-2.98 2.6-3.38c-.37-.44-.6-1-.6-1.62A2.5 2.5 0 0 1 4.5 2c.28 0 .5.22.5.5s-.22.5-.5.5C3.67 3 3 3.67 3 4.5S3.67 6 4.5 6c.28 0 .5.22.5.5s-.22.5-.5.5h-1A2.5 2.5 0 0 0 1 9.5c0 .28.22.5.5.5s.5.22.5.5s-.22.5-.5.5m9 3h-6c-.83 0-1.5-.67-1.5-1.5v-1C3 9.57 4.57 8 6.5 8h2c1.93 0 3.5 1.57 3.5 3.5v1c0 .83-.67 1.5-1.5 1.5m-4-5A2.5 2.5 0 0 0 4 11.5v1c0 .28.22.5.5.5h6c.28 0 .5-.22.5-.5v-1A2.5 2.5 0 0 0 8.5 9z"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="text-typography text-[.862rem]">
                                                                            {{$event->capacity}}
                                                                            نفر
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="mt-[.5rem]">
                                                        <div
                                                            x-on:click="open = ! open"
                                                            x-text="open ? 'بستن':'نمایش بیشتر'"
                                                            class="rounded-[.625rem] px-[.8rem] cursor-pointer whitespace-nowrap select-none w-full text-center text-[.862rem] py-[.5rem] bg-primary text-white">
                                                            <div
                                                                class="block">
                                                                نمایش بیشتر
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
                <x-business.footer/>
            </div>
            <div
                class="fixed inset-0 bg-black/[.2] z-[51] transition-all duration-[.2s] opacity-0 pointer-events-none"></div>
        </main>
    </div>
@endsection
