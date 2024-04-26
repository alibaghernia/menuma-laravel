<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="">
    <title>Menuma | منوما</title>
    <meta name="description" content="کافه گردی در یزد. کافه های یزد. نزدیک ترین کافه. منو کافه. دورهمی کافه ای."/>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .bg-background {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(251 251 251/var(--tw-bg-opacity)) !important
        }

    </style>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-background">
<x-loading/>
<div>
    <main class="z-10 __className_e3ed35">
        <div class="flex flex-col place-items-stretch items-stretch justify-between min-h-screen"
             style="justify-content:space-between">
            <div class="mx-auto md:w-fit pt-[2.38rem] flex flex-col items-center"><a
                    class="text-[2.5rem] flex items-center font-bold" href="https://{{config('app.domains.main')}}/">
                    <div class="text-primary">منو</div>
                    <div class="text-secondary">ما</div>
                </a>
                <div class="text-typography/[.8] text-[.875rem] font-medium">کافه ای که میخوای را پیدا کن</div>
                {{--        TODO        --}}
                {{--<div
                    x-data="{ searchText: '' }"
                    class="mt-[2.12rem] w-screen md:w-full px-[1.9rem]">
                    <div
                        class="flex items-center border border-[#e5e7eb] p-[.5rem] border-1 gap-[.5rem] rounded-[.63rem] bg-white">
                        <svg width="24" height="24" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.8"
                                  d="M15.7797 13.833L12.6644 10.7177C12.5238 10.5771 12.3332 10.499 12.1332 10.499H11.6239C12.4863 9.39596 12.9987 8.00859 12.9987 6.49937C12.9987 2.90909 10.0896 0 6.49936 0C2.90909 0 0 2.90909 0 6.49937C0 10.0896 2.90909 12.9987 6.49936 12.9987C8.00859 12.9987 9.39596 12.4863 10.499 11.6239V12.1332C10.499 12.3332 10.5771 12.5238 10.7177 12.6644L13.833 15.7797C14.1267 16.0734 14.6017 16.0734 14.8923 15.7797L15.7766 14.8954C16.0703 14.6017 16.0703 14.1267 15.7797 13.833ZM6.49936 10.499C4.29021 10.499 2.49976 8.71165 2.49976 6.49937C2.49976 4.29021 4.28708 2.49976 6.49936 2.49976C8.70852 2.49976 10.499 4.28708 10.499 6.49937C10.499 8.70852 8.71165 10.499 6.49936 10.499Z"
                                  fill="#959595"></path>
                        </svg>
                        <input
                            x-model="searchText"
                            type="text" class="bg-none border-none outline-none w-full p-1"
                            placeholder="جستجوی اسم کافه...">
                        <button
                            @click="
                                if (searchText.trim() == ''){
                                    return;
                                }
                                let form = document.createElement('form');
                                form.style.display='none';
                                form.setAttribute('method', 'get');
                                form.setAttribute('action', '/search');
                                let input = document.createElement('input');
                                input.setAttribute('type', 'text');
                                input.setAttribute('name', 'text');
                                input.setAttribute('value', searchText);

                                form.appendChild(input)
                                document.body.appendChild(form);
                                form.submit();
                            "
                            type="button"
                            class="ant-btn css-weks6v bg-[#3177ff] text-white text-center font-slight text-sm ant-btn-primary border rounded-md px-4 py-1.5 outline-0 focus:outline-[none] outline-red-700"
                            style="outline: none">
                            <span>جستجو</span>
                        </button>
                    </div>
                </div>--}}

                {{--        TODO         --}}
                {{--<div class="mt-[2.12rem]">
                    <div
                        class="text-[1rem] text-center rounded-[.625rem] cursor-pointer whitespace-nowrap w-fit select-none py-[.5rem] px-[.8rem] flex items-center bg-secondary text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18"
                             fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9 15.8915L9.54086 15.282C10.1546 14.5792 10.7066 13.9123 11.1977 13.278L11.6031 12.7432C13.296 10.4623 14.1429 8.65203 14.1429 7.31403C14.1429 4.45803 11.8406 2.14288 9 2.14288C6.15943 2.14288 3.85715 4.45803 3.85715 7.31403C3.85715 8.65203 4.704 10.4623 6.39686 12.7432L6.80229 13.278C7.50295 14.1758 8.23601 15.0469 9 15.8915Z"
                                  stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M9 9.4286C10.1835 9.4286 11.1429 8.46921 11.1429 7.28574C11.1429 6.10227 10.1835 5.14288 9 5.14288C7.81654 5.14288 6.85715 6.10227 6.85715 7.28574C6.85715 8.46921 7.81654 9.4286 9 9.4286Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        پیدا کردن نزدیکترین کافه
                    </div>
                </div>--}}

                @if($pinnedBusinesses->count())
                    <div class="mt-[2.12rem] w-screen md:max-w-[65rem]">
                        <div class="flex flex-col place-items-stretch items-stretch justify-normal" gap=".5rem"
                             style="gap: 0.5rem; justify-content: normal;">
                            <div class="">
                                <div
                                    class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                    gap="2" style="justify-content: space-between;">
                                    <div class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                        کافه های پیشنهادی
                                    </div>
                                    <div class="grow">
                                        <hr class="border-black/10 w-full">
                                    </div>
                                </div>
                            </div>

                            <div class="pt-[1rem] overflow-hidden">
                                <div
                                    x-cloak
                                    x-init="
                                new Swiper($el,{
                                    slidesPerView:'auto',
                                    spaceBetween:8,
                                    grabCursor:true,
                                    scrollbar:true,
                                    slidesOffsetBefore:20,
                                    slidesOffsetAfter:20,
                                })
                                "
                                    class="swiper swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                                    <div class="swiper-wrapper">
                                        @foreach($pinnedBusinesses as $business)
                                            {{--                                        @dd($business)--}}
                                            <div
                                                class="swiper-slide !flex !flex-row !flex-nowrap !items-center !gap-[.5rem] !w-fit !rounded-full !overflow-hidden swiper-slide-active"
                                                style="margin-left: 8px;">
                                                <a class=" w-[6.25rem] h-[6.25rem]"
                                                   {{-- TODO domain --}}
                                                   href="{{domain_route('profile', ['slug' => $business->slug], false)}}">
                                                    <img
                                                        alt="{{$business->name}}"
                                                        loading="lazy"
                                                        decoding="async"
                                                        data-nimg="fill" class="z-0"
                                                        sizes="100vw"
                                                        {{-- srcset="menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=640&amp;q=75 640w, https://menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=750&amp;q=75 750w, https://menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=828&amp;q=75 828w, https://menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=1080&amp;q=75 1080w, https://menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=1200&amp;q=75 1200w, https://menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=1920&amp;q=75 1920w, https://menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=2048&amp;q=75 2048w, https://menuma.online/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2Fv7e4QpvAZhCbDjGa9yagNa9RYrXY8J-metaZTZiZDlmYjA3MzgxZTFlYjE2ZjJhNzIzN2EyM2ZiZjkgKDEpLmpwZw%3D%3D-.jpg&amp;w=3840&amp;q=75 3840w"--}}
                                                        @if(!empty($business->logo_path))
                                                            src="/storage/{{$business->logo_path}}"
                                                        @else
                                                            src="/img/placeholder/coffee-pattern.jpg"
                                                        @endif
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                    <div
                                                        class="absolute inset-0 bg-black/[.6] flex items-center justify-center z-10 text-white text-[.75rem] font-bold">
                                                        {{$business->name}}
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($businessesDiscounts->count())
                    <div class="mt-[2.12rem] w-screen md:max-w-[65rem]">
                        <div class="flex flex-col place-items-stretch items-stretch justify-normal" gap=".5rem"
                             style="gap: 0.5rem; justify-content: normal;">
                            <div class="">
                                <div
                                    class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                    gap="2" style="justify-content: space-between;">
                                    <div class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                        تخفیف ها
                                    </div>
                                    <div class="grow">
                                        <hr class="border-black/10 w-full">
                                    </div>
                                </div>
                            </div>
                            <div class="pt-[1rem] relative">
                                <div
                                    x-cloak
                                    x-init="
                                new Swiper($el ,{
                                    modules: [SwiperNavigation, SwiperPagination],
                                  spaceBetween:8,
                                    slidesPerView: 'auto',
                                    grabCursor:true,
                                    scrollbar:true,
                                    slidesOffsetBefore:20,
                                    slidesOffsetAfter:20,
                                })
                                "
                                    class="swiper swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden"
                                    id="discounts">
                                    <div class="swiper-wrapper">
                                        @foreach($businessesDiscounts as $discount )
                                            {{-- TODO doamin --}}
                                            <a href="/{{$discount->cafeRestaurant->slug}}">
                                                <div
                                                    class="swiper-slide !flex !flex-row !flex-nowrap !items-center !gap-[.5rem] !w-[20rem] swiper-slide-next"
                                                    style="margin-left: 8px;">
                                                    <div
                                                        class="flex flex-col place-items-stretch items-stretch justify-normal p-[1rem] bg-white gap-[.62rem] w-full max-w-[30rem] !overflow-hidden !rounded-[1rem] border
                                                border-[#e5e7eb]"
                                                        style="justify-content: normal;">
                                                        <div class="">
                                                            <div
                                                                class="flex flex-row place-items-stretch items-stretch justify-normal gap-[.81rem]"
                                                                style="justify-content: normal;">
                                                                {{--<div--}}
                                                                {{--    class="w-[7rem] h-[7rem] relative rounded-[1rem] overflow-hidden shrink-0 border">--}}
                                                                {{--    <img alt="{{$discount->title}}" loading="lazy"--}}
                                                                {{--         decoding="async"--}}
                                                                {{--         data-nimg="fill" class="object-cover bg-gray-100"--}}
                                                                {{--         sizes="100vw"--}}
                                                                {{--                                                                          srcset="menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=640&amp;q=75 640w, https://menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=750&amp;q=75 750w, https://menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=828&amp;q=75 828w, https://menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=1080&amp;q=75 1080w, https://menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=1200&amp;q=75 1200w, https://menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=1920&amp;q=75 1920w, https://menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=2048&amp;q=75 2048w, https://menuma.online/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdiscount-placeholder.ae5a20da.png&amp;w=3840&amp;q=75 3840w"--}}
                                                                {{--         src="/storage/{{$discount->cafeRestaurant->logo_path}}"--}}
                                                                {{--         style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">--}}
                                                                {{--</div>--}}
                                                                <div class="">
                                                                    <div
                                                                        class="flex flex-col place-items-start items-start justify-normal gap-[.3rem]"
                                                                        style="justify-content: normal;">
                                                                        <div
                                                                            class="text-[1.2rem] text-typography font-semibold line-clamp-[1]">
                                                                            {{$discount->title}}
                                                                        </div>
                                                                        <div
                                                                            class="bg-typography/[.9] text-white text-[.689rem]
                                                                    px-[.5rem] py-[.2rem] rounded-[.3125rem] w-fit">
                                                                            {{$discount->cafeRestaurant->name}}
                                                                        </div>
                                                                        <div
                                                                            class="text-typography text-[.862rem] line-clamp-[1] "
                                                                        >
                                                                            {{$discount->description}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" dir="ltr">
                                                            <div class="mt-[.5rem] w-1/3">
                                                                <div
                                                                    class="rounded-[.625rem] px-[.8rem] cursor-pointer
                                                        whitespace-nowrap select-none w-full text-center text-[.862rem]
                                                        py-[.5rem] bg-primary text-white">
                                                                    {{-- TODO domain --}}
                                                                    <a class="block"
                                                                       href="/{{$discount->cafeRestaurant->slug}}">
                                                                        بیشتر
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach

                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if(count($businessesEvents))
                    <div class="my-[2.12rem] w-screen md:max-w-[65rem]">
                        <div class="flex flex-col place-items-stretch items-stretch justify-normal" gap=".5rem"
                             style="gap: 0.5rem; justify-content: normal;">
                            <div class="">
                                <div
                                    class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                    gap="2" style="justify-content: space-between;">
                                    <div class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                        دورهمی ها
                                    </div>
                                    <div class="grow">
                                        <hr class="border-black/10 w-full">
                                    </div>
                                </div>
                            </div>
                            @foreach($businessesEvents as $event)
                                <div class="pt-[.5rem] px-5">
                                    <div class="flex flex-col place-items-stretch items-stretch justify-normal gap-2"
                                         gap="2"
                                         style="justify-content: normal;">
                                        <div class="">
                                            <div
                                                class="flex flex-col place-items-stretch items-stretch justify-normal p-[1rem] bg-white gap-[.62rem] rounded-[1rem] shadow w-full sm:w-[30rem] mx-auto"
                                                style="justify-content: normal;">
                                                <div class="">
                                                    <div
                                                        class="flex flex-row place-items-stretch items-stretch justify-normal gap-[.81rem]"
                                                        style="justify-content: normal;">
                                                        <div
                                                            class="w-[7rem] h-[7rem] relative shrink-0 rounded-full overflow-hidden border-black/[.1] border">
                                                            <img alt="{{$event->name}}" loading="lazy" decoding="async"
                                                                 data-nimg="fill"
                                                                 class="object-cover" sizes="100vw"
                                                                 {{-- srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HM8HM2AQY9P7J1XB84RWEM2K.jpg&amp;w=3840&amp;q=75 3840w"--}}
                                                                 {{--  TODO  --}}
                                                                 src="/storage/{{$event->cafeRestaurant->logo_path}}"
                                                                 style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                        </div>
                                                        <div class="">
                                                            <div
                                                                class="flex flex-col place-items-start items-start justify-normal gap-[.3rem]"
                                                                style="justify-content: normal;">
                                                                <div
                                                                    class="text-[1.2rem] text-typography font-semibold">
                                                                    {{$event->name}}
                                                                </div>
                                                                <div
                                                                    class="bg-typography/[.9] text-white text-[.689rem] px-[.5rem] py-[.2rem] rounded-[.3125rem] w-fit">
                                                                    {{$event->cafeRestaurant->name}}
                                                                </div>
                                                                <div
                                                                    class="text-typography text-[.862rem] line-clamp-[3]">
                                                                    {{$event->short_description}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div
                                                        class="flex flex-row place-items-center items-center justify-center gap-[.75rem]"
                                                        style="justify-content: center;">
                                                        <div class="">
                                                            <div
                                                                class="flex flex-row place-items-center items-center justify-normal gap-[.5rem]"
                                                                style="justify-content: normal;">
                                                                <div class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                         height="20" viewBox="0 0 20 20" fill="none">
                                                                        <mask id="mask0_807_52"
                                                                              maskUnits="userSpaceOnUse"
                                                                              x="1"
                                                                              y="1" width="18" height="18"
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
                                                                                stroke="#434343" stroke-opacity="0.25"
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                         height="20" viewBox="0 0 16 16" fill="none">
                                                                        <g clip-path="url(#clip0_808_81)">
                                                                            <path
                                                                                d="M8.00004 14.6667C11.682 14.6667 14.6667 11.682 14.6667 8C14.6667 4.318 11.682 1.33333 8.00004 1.33333C4.31804 1.33333 1.33337 4.318 1.33337 8C1.33337 11.682 4.31804 14.6667 8.00004 14.6667Z"
                                                                                stroke="#434343" stroke-width="1.33333"
                                                                                stroke-linejoin="round"></path>
                                                                            <path d="M8.00269 4V8.00333L10.829 10.83"
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
                                                        class="rounded-[.625rem] px-[.8rem] cursor-pointer whitespace-nowrap select-none w-full text-center text-[.862rem] py-[.5rem] bg-primary text-white">
                                                        {{-- TODO domain--}}
                                                        <a class="block"
                                                           href="{{domain_route('events',['slug'=>$event->cafeRestaurant->slug])}}">مشاهده</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <x-business.footer/>
            {{--<div class="mx-10 border-t p-5 border-[#e5e7eb]">
                <div class="flex flex-row place-items-center items-center justify-center gap-2"
                     style="justify-content:center" gap="2">
                    <div class="text-typography/[.8]">میزبانی شده توسط</div>
                    <div class="">
                        <a target="_blank" class="font-bold text-typography"
                           href="https://mtserver.ir">MT Server</a>
                    </div>
                </div>
            </div>--}}
        </div>
    </main>
</div>

@vite('resources/js/app.js')
</body>

</html>
