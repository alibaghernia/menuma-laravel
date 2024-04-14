<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--        <meta name="viewport" content="width=device-width">--}}
    {{--  todo  --}}
    <title>{{$business->name}} - منو - منوما</title>
    <meta name="next-head-count" content="3">
    <style>
        .swiper-pagination-bullet {
            display: block !important;
            width: 6px !important;
            height: 6px !important;
            border-radius: 50%;
            margin-left: 0.25rem !important;
            margin-right: 0.25rem !important;
            background-color: theme('colors.typography') !important;
            opacity: 0.5 !important;
        }

        .swiper-pagination-bullet-active {
            display: block !important;
            transform: scale(1.5) !important;
            background-color: theme('colors.typography') !important;
            opacity: 1 !important;
        }
    </style>

    @vite('resources/css/app.css')
</head>
<body
    x-data="{scrolled : false}"
    class="min-h-screen bg-background">
<div id="__next">
    <main class="z-10 ">
        <div class="bg-background min-h-screen">
            <x-business.header :business="$business" position="fixed"/>

            <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                 style="justify-content: normal;">
                <div class="sticky top-0 bg-background z-20 pb-[1rem]" id="category-bar">
                    <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                         style="justify-content: normal;">
                        <div class="">
                            <div
                                class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 pt-[4.5rem]"
                                gap="2" style="justify-content: normal;">
                                <div class="px-2">
                                    <div
                                        x-cloak
                                        x-init="
                                new Swiper($el,{
                                    slidesPerView:'auto',
                                    spaceBetween:8,
                                    grabCursor:true,
                                    scrollbar:true,
                                    modules: [Pagination],
                                    //navigation:{} swiper-pagination
                                    pagination:{
                                        clickable:true,
                                        el: '#swiper-pagination',
                                        bulletElement: 'div',
                                        bulletClass:'swiper-pagination-bullet',
                                        bulletActiveClass: 'swiper-pagination-bullet-active',
                                    },
                                    breakpoints: {
                                        768: {
                                        centerInsufficientSlides: true,
                                       },
                                   }
                                })
                                "
                                        class="swiper swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                                        <div class="swiper-wrapper"
                                             style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(-33.4375px, 0px, 0px);">

                                            @foreach($menu->chunk(2) as $bothCategories)

                                                <div
                                                    class="swiper-slide !flex !flex-row !flex-nowrap !items-center
                                                         !gap-[.5rem] !w-fit"
                                                    {{--                                                          todo--}}
                                                    {{--                                                         swiper-slide-active"--}}
                                                    {{--                                                    style="margin-left: 8px"--}}
                                                >
                                                    @foreach($bothCategories as $category)
                                                        <div>
                                                            <div
                                                                {{-- todo --}}
                                                                {{--        class="relative block overflow-hidden cursor-pointer transition-all duration-[.2s] w-[6.7rem] h-[3.7rem] rounded-[1rem]"--}}
                                                                class="ci-category relative block overflow-hidden cursor-pointer transition-all duration-[.2s] rounded-[1.625rem] w-[8.7rem] h-[8.7rem] "
                                                                onclick="scrollIntoCategory({{$category->id}})"
                                                            >
                                                                @if($category->background_path)
                                                                    {{--                                                                    @dd($category->background_path)--}}
                                                                    <img
                                                                        alt="{{$category->name}}" loading="lazy"
                                                                        decoding="async"
                                                                        data-nimg="fill" class="z-0 object-cover"
                                                                        sizes="100vw"
                                                                        {{-- todo --}}
                                                                        {{--srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F7Lj5XzBb3G6QE0Pm2Zeng93riZOpD0-metaZG93bmxvYWQuanBn-.jpg&amp;w=3840&amp;q=75 3840w"--}}
                                                                        src="/storage/{{$category->background_path}}"
                                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                                                        onerror="this.remove()"
                                                                    >

                                                                @endif
                                                                <span
                                                                    @class([
                                                                        'absolute inset-0 z-0',
                                                                        'bg-black/[.4]' => $category->background_path,
                                                                        'bg-black/[.7]' => !$category->background_path
                                                                        ])
                                                                    ></span>
                                                                <div
                                                                    class="ci-category-name text-white font-bold text-center absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] z-20
                                                                    {{-- todo --}}
                                                                     text-[1.2rem]
{{--                                                                     text-[.9rem]--}}
                                                                     ">
                                                                    {{$category->name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                </div>
                                <div id="swiper-pagination"
                                     class="mx-auto mt-2 !w-fit transition-all duration-[.3s] flex ">
                                    {{--                                    ssssssssssssssssss--}}
                                    {{--todo--}}
                                    {{-- !hidden--}}

                                    {{-- <div--}}
                                    {{-- class="menu_swiper-pagination-bullet__12QJH menu_swiper-pagination-bullet-active__Ki109"></div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="mt-4 md:max-w-md md:mx-auto mx-6">
                                <div
                                    class="flex flex-row place-items-center items-center border-[#e5e7eb] justify-normal gap-2 rounded-full p-[.3rem] bg-white overflow-hidden border"
                                    gap="2" style="justify-content: normal;">
                                    <div
                                        class="p-[.4rem] px-2 bg-black/[15%] rounded-tr-2xl rounded-br-2xl rounded-tl-lg rounded-bl-lg cursor-pointer">
                                        <svg width="18" height="18" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.8"
                                                  d="M15.7797 13.833L12.6644 10.7177C12.5238 10.5771 12.3332 10.499 12.1332 10.499H11.6239C12.4863 9.39596 12.9987 8.00859 12.9987 6.49937C12.9987 2.90909 10.0896 0 6.49936 0C2.90909 0 0 2.90909 0 6.49937C0 10.0896 2.90909 12.9987 6.49936 12.9987C8.00859 12.9987 9.39596 12.4863 10.499 11.6239V12.1332C10.499 12.3332 10.5771 12.5238 10.7177 12.6644L13.833 15.7797C14.1267 16.0734 14.6017 16.0734 14.8923 15.7797L15.7766 14.8954C16.0703 14.6017 16.0703 14.1267 15.7797 13.833ZM6.49936 10.499C4.29021 10.499 2.49976 8.71165 2.49976 6.49937C2.49976 4.29021 4.28708 2.49976 6.49936 2.49976C8.70852 2.49976 10.499 4.28708 10.499 6.49937C10.499 8.70852 8.71165 10.499 6.49936 10.499Z"
                                                  fill="#434343"></path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <input type="text"
                                               class="outline-none border-0 focus:border-0 outline-0  bg-transparent
                                               placeholder:text-[.8rem] w-full text-typography"
                                               placeholder="جستجو..." value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- todo --}}
                @if(count($dayOffers))
                    <div class="">
                        <div class="flex flex-col place-items-stretch items-stretch justify-normal scroll-mt-[20rem]"
                             gap=".5rem" style="gap: 0.5rem; justify-content: normal;">
                            <div class="">
                                <div
                                    class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                    gap="2" style="justify-content: space-between;">
                                    <div class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                        پیشنهادات روز
                                    </div>
                                    <div class="grow">
                                        <hr class="border-black/10 w-full">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 md:px-0">
                                <div class="flex flex-col place-items-stretch items-stretch justify-normal gap-2"
                                     gap="2"
                                     style="justify-content: normal;">
                                    <div class="">
                                        <div
                                            x-cloak
                                            x-init="
                                new Swiper($el,{
                                    slidesPerView:'auto',
                                    spaceBetween:8,
                                    grabCursor:true,
                                    scrollbar:true,
                                    modules: [Pagination],
                                     breakpoints: {
                                        768: {
                                        centerInsufficientSlides: true,
                                       },
                                   },

{{--                                    pagination:{--}}
                                            {{--                                        clickable:true,--}}
                                            {{--                                        el: '#swiper-pagination',--}}
                                            {{--                                        bulletElement: 'div',--}}
                                            {{--                                        bulletClass:'swiper-pagination-bullet',--}}
                                            {{--                                        bulletActiveClass: 'swiper-pagination-bullet-active',--}}
                                            {{--                                    }--}}
                                                })
"
                                            class="swiper swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                                            <div class="swiper-wrapper"
                                                 style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                                                @foreach($dayOffers as $dayOffer)
                                                    <div
                                                        class="swiper-slide !flex !flex-row !flex-nowrap !items-center !gap-[.5rem] w-full md:!w-fit swiper-slide-active"
                                                        style="margin-left: 15px;">
                                                        <div class="relative w-full w-full md:w-[30rem]">
                                                            <div
                                                                class="flex flex-row place-items-stretch items-stretch justify-normal relative z-0 w-full"
                                                                style="justify-content: normal;">
                                                                <div class="w-full">
                                                                    <div
                                                                        class="flex flex-row place-items-stretch items-stretch justify-normal bg-white h-[12.9rem] rounded-[2rem] border border-black/[.05] overflow-hidden w-full p-[1rem] gap-[1.4rem] z-10"
                                                                        style="justify-content: normal;">
                                                                        <div class="">
                                                                            <a
                                                                                class="flex-shrink-0 bg-white !w-[10rem] overflow-hidden rounded-[2.4rem] block border border-black/[.05] relative h-full"
                                                                                href="/demo/menu/14/7">
                                                                                <img alt="{{$dayOffer->name}}"
                                                                                     loading="lazy"
                                                                                     decoding="async"
                                                                                     data-nimg="fill"
                                                                                     class="z-0 object-cover relative"
                                                                                     sizes="100vw"
                                                                                     {{-- srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FpFfZxSRt4VMzc7bqoVdoHPcxb9cUpu-metaVHlwZXMtb2YtdGVhLTItMTAyNHg1MTMuanBn-.jpg&amp;w=3840&amp;q=75 3840w"--}}
                                                                                     {{-- todo placeholder--}}
                                                                                     src="/storage/{{$dayOffer->image_path}}"
                                                                                     style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                                                <span
                                                                                    class="z-10 absolute inset-0"
                                                                                    style="background: linear-gradient(rgba(255, 255, 255, 0) 40%, rgba(224, 224, 224, 0.75) 100%);"></span>
                                                                                <div
                                                                                    class="text-[1.2rem] text-typography absolute bottom-[.3rem] left-[50%] translate-x-[-50%] font-bold z-20">
                                                                                    {{-- todo --}}
                                                                                    {{number_format($dayOffer->prices[0]['price'])}}
                                                                                    ت
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="grow">
                                                                            <div
                                                                                class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 h-full"
                                                                                gap="2"
                                                                                style="justify-content: normal;">
                                                                                <div class="">
                                                                                    <a
                                                                                        class="text-[1.2rem] font-[500] text-typography w-full"
                                                                                        href="/demo/menu/14/7">
                                                                                        {{$dayOffer->name}}
                                                                                    </a>
                                                                                </div>
                                                                                <div class="">
                                                                                    <div
                                                                                        class="flex flex-row place-items-stretch items-stretch justify-normal gap-2"
                                                                                        gap="2"
                                                                                        style="justify-content: normal;"></div>
                                                                                </div>
                                                                                <div class="grow">
                                                                                    <div
                                                                                        class="text-[0.8rem] font-[300] text-typography w-full line-clamp-[4]">
                                                                                        {{$dayOffer->description}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="">
                                                                                    <a
                                                                                        class="text-[.8rem] px-[.8rem] py-[.3rem] text-typography bg-typography/[.1] text-center rounded-[1rem] font-[600] cursor-pointer active:scale-[.8] transition-transform duration-[.3s] block w-full"
                                                                                        href="{{domain_route('menu.item',[
                                                                                                'slug'=>$business->slug,
                                                                                                'categoryId'=>$dayOffer->category_id,
                                                                                                'itemId'=>$dayOffer->id,
                                                                                            ])}}">مشاهده</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{--<div
                                                    class="swiper-slide !flex !flex-row !flex-nowrap !items-center !gap-[.5rem] w-full md:!w-fit swiper-slide-next"
                                                    style="margin-left: 15px;">
                                                    <div class="relative w-full w-full md:w-[30rem]">
                                                        <div
                                                            class="flex flex-row place-items-stretch items-stretch justify-normal relative z-0 w-full"
                                                            style="justify-content: normal;">
                                                            <div class="w-full">
                                                                <div
                                                                    class="flex flex-row place-items-stretch items-stretch justify-normal bg-white h-[12.9rem] rounded-[2rem] border border-black/[.05] overflow-hidden w-full p-[1rem] gap-[1.4rem] z-10"
                                                                    style="justify-content: normal;">
                                                                    <div class=""><a
                                                                            class="flex-shrink-0 bg-white !w-[10rem] overflow-hidden rounded-[2.4rem] block border border-black/[.05] relative h-full"
                                                                            href="/demo/menu/9/9"><img alt="آمریکانو"
                                                                                                       loading="lazy"
                                                                                                       decoding="async"
                                                                                                       data-nimg="fill"
                                                                                                       class="z-0 object-cover relative"
                                                                                                       sizes="100vw"
                                                                                                       srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=3840&amp;q=75 3840w"
                                                                                                       src="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FTZT2fX3z2jwhzK3Nrwsa7PEefLo6RT-meta2KLZhdix24zaqdin2YbZiC5qcGc%3D-.jpg&amp;w=3840&amp;q=75"
                                                                                                       style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"><span
                                                                                class="z-10 absolute inset-0"
                                                                                style="background: linear-gradient(rgba(255, 255, 255, 0) 40%, rgba(224, 224, 224, 0.75) 100%);"></span>
                                                                            <div
                                                                                class="text-[1.2rem] text-typography absolute bottom-[.3rem] left-[50%] translate-x-[-50%] font-bold z-20">
                                                                                30,000 ت
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="grow">
                                                                        <div
                                                                            class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 h-full"
                                                                            gap="2" style="justify-content: normal;">
                                                                            <div class=""><a
                                                                                    class="text-[1.2rem] font-[500] text-typography w-full"
                                                                                    href="/demo/menu/9/9">آمریکانو</a>
                                                                            </div>
                                                                            <div class="">
                                                                                <div
                                                                                    class="flex flex-row place-items-stretch items-stretch justify-normal gap-2"
                                                                                    gap="2"
                                                                                    style="justify-content: normal;"></div>
                                                                            </div>
                                                                            <div class="grow">
                                                                                <div
                                                                                    class="text-[0.8rem] font-[300] text-typography w-full line-clamp-[4]">
                                                                                    آمریکانو بر پایه یک شات اسپرسو دست
                                                                                    می
                                                                                    شود اما به تلخی اسپرسو نیست و با حجم
                                                                                    بیشتری از آب جوش ترکیب می شود. برای
                                                                                    آن
                                                                                    دسته از افرادی که قهوه غلیظ دوست
                                                                                    ندارند
                                                                                    آمریکانو گزینه بهتری از اسپرسو است.
                                                                                </div>
                                                                            </div>
                                                                            <div class=""><a
                                                                                    class="text-[.8rem] px-[.8rem] py-[.3rem] text-typography bg-typography/[.1] text-center rounded-[1rem] font-[600] cursor-pointer active:scale-[.8] transition-transform duration-[.3s] block w-full"
                                                                                    href="/demo/menu/9/9">سفارش</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="swiper-slide !flex !flex-row !flex-nowrap !items-center !gap-[.5rem] w-full md:!w-fit"
                                                    style="margin-left: 15px;">
                                                    <div class="relative w-full w-full md:w-[30rem]">
                                                        <div
                                                            class="flex flex-row place-items-stretch items-stretch justify-normal relative z-0 w-full"
                                                            style="justify-content: normal;">
                                                            <div class="w-full">
                                                                <div
                                                                    class="flex flex-row place-items-stretch items-stretch justify-normal bg-white h-[12.9rem] rounded-[2rem] border border-black/[.05] overflow-hidden w-full p-[1rem] gap-[1.4rem] z-10"
                                                                    style="justify-content: normal;">
                                                                    <div class=""><a
                                                                            class="flex-shrink-0 bg-white !w-[10rem] overflow-hidden rounded-[2.4rem] block border border-black/[.05] relative h-full"
                                                                            href="/demo/menu/12/440"><img
                                                                                alt="دمنوش نعنا"
                                                                                loading="lazy"
                                                                                decoding="async"
                                                                                data-nimg="fill"
                                                                                class="z-0 object-cover relative"
                                                                                sizes="100vw"
                                                                                srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=3840&amp;q=75 3840w"
                                                                                src="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F01HN2KVCJFMWPT95YYW5D62ASS.jpg&amp;w=3840&amp;q=75"
                                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"><span
                                                                                class="z-10 absolute inset-0"
                                                                                style="background: linear-gradient(rgba(255, 255, 255, 0) 40%, rgba(224, 224, 224, 0.75) 100%);"></span>
                                                                            <div
                                                                                class="text-[1.2rem] text-typography absolute bottom-[.3rem] left-[50%] translate-x-[-50%] font-bold z-20">
                                                                                43,000 ت
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="grow">
                                                                        <div
                                                                            class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 h-full"
                                                                            gap="2" style="justify-content: normal;">
                                                                            <div class=""><a
                                                                                    class="text-[1.2rem] font-[500] text-typography w-full"
                                                                                    href="/demo/menu/12/440">دمنوش
                                                                                    نعنا</a>
                                                                            </div>
                                                                            <div class="">
                                                                                <div
                                                                                    class="flex flex-row place-items-stretch items-stretch justify-normal gap-2"
                                                                                    gap="2"
                                                                                    style="justify-content: normal;"></div>
                                                                            </div>
                                                                            <div class="grow">
                                                                                <div
                                                                                    class="text-[0.8rem] font-[300] text-typography w-full line-clamp-[4]"></div>
                                                                            </div>
                                                                            <div class=""><a
                                                                                    class="text-[.8rem] px-[.8rem] py-[.3rem] text-typography bg-typography/[.1] text-center rounded-[1rem] font-[600] cursor-pointer active:scale-[.8] transition-transform duration-[.3s] block w-full"
                                                                                    href="/demo/menu/12/440">سفارش</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>--}}
                                            </div>
                                            <div class="swiper-scrollbar"></div>
                                        </div>
                                    </div>
                                    <div id="swiper-pagination-offers"
                                         class="mx-auto mt-2 !flex !w-fit transition-all duration-[.3s] swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                        <span
                                            class="menu_swiper-pagination-bullet__12QJH menu_swiper-pagination-bullet-active__Ki109"></span><span
                                            class="menu_swiper-pagination-bullet__12QJH"></span><span
                                            class="menu_swiper-pagination-bullet__12QJH"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="z-10 relative">
                    @foreach($menu as $category)
                        <div
                            class="flex flex-col place-items-stretch items-stretch justify-normal mt-[1.125rem] pb-5 scroll-mt-[20rem]"
                            gap=".5rem" id="category-{{$category->id}}"
                            style="gap: 0.5rem; justify-content: normal;">
                            <div class="">
                                <div
                                    class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                    gap="2" style="justify-content: space-between;">
                                    <div class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                        {{$category->name}}
                                    </div>
                                    <div class="grow">
                                        <hr class="border-black/10 w-full">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-[1rem] items-center">
                                @foreach($category->items as $item)
                                    <div class="relative w-full px-5 max-w-lg">
                                        <div
                                            class="flex place-items-stretch items-stretch justify-normal relative z-0 w-full flex-col"
                                            style="justify-content: normal;">
                                            <div class="w-full z-20">
                                                <div
                                                    class="flex flex-row place-items-stretch items-stretch justify-normal bg-white h-[12.9rem] rounded-[2rem] border border-black/[.05] overflow-hidden w-full p-[1rem] gap-[1.4rem] z-10"
                                                    style="justify-content: normal;">
                                                    <div class="">
                                                        <a
                                                            class="flex-shrink-0 bg-white !w-[10rem] overflow-hidden rounded-[2.4rem] block border border-black/[.05] relative h-full"
                                                            href="/demo/menu/9/8">
                                                            <img alt="{{$item->name}}" loading="lazy"
                                                                 decoding="async" data-nimg="fill"
                                                                 @class([
                                                                    'z-0 object-cover relative ',
                                                                    'grayscale'=>in_array('sold_out',$item->tags)
                                                                 ])
                                                                 sizes="100vw"
                                                                 {{-- todo --}}
                                                                 {{-- srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FYwBmdz43wjYkancN0Fe8tNf1riG4oS-metaMTY4MzQ3Nzc5MTgwNC5qcGc%3D-.jpg&amp;w=3840&amp;q=75 3840w"--}}
                                                                 src="/storage/{{$item->image_path}}"
                                                                 style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;">
                                                        </a>
                                                    </div>
                                                    <div class="grow">
                                                        <div
                                                            class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 h-full"
                                                            gap="2" style="justify-content: normal;">
                                                            <div class=""><a
                                                                    class="text-[1.2rem] font-[500] text-typography w-full"
                                                                    href="/demo/menu/9/8">
                                                                    {{$item->name}}
                                                                </a></div>
                                                            <div class="">
                                                                <div
                                                                    class="flex flex-row place-items-stretch items-stretch justify-normal gap-2"
                                                                    gap="2" style="justify-content: normal;">
                                                                    @if(in_array('sold_out',$item->tags))
                                                                        <div
                                                                            class=" text-xs font-medium px-2.5 py-0.5 rounded-full bg-gray-200/[.75] text-typography flex items-center"
                                                                            {{-- todo use calss
                                                                            note: var --gray-200not definded --}}
                                                                            style="background-color: rgba(229, 231, 235, .75) !important;">
                                                                            تمام شده
                                                                        </div>
                                                                    @endif
                                                                    @if(in_array('new',$item->tags))
                                                                        <div
                                                                            class=" text-xs font-medium px-2.5 py-0.5 rounded-full bg-green-100/[.75] text-green-900 flex items-center text-center">
                                                                            <span class="mx-auto">جدید</span>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="grow">
                                                                <div
                                                                    class="text-[0.8rem] font-[300] text-typography w-full line-clamp-[4]">
                                                                    {{$item->description}}
                                                                </div>
                                                            </div>
                                                            <div class=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col place-items-stretch items-stretch justify-normal shrink-0 w-full z-0"
                                                style="justify-content: normal;">
                                                @php($zindex=0)
                                                @foreach($item->prices as $price)
                                                    @php($zindex-=1)
                                                    <div
                                                        class="w-full relative bg-white h-[5rem] mt-[-2rem] rounded-bl-[2rem] rounded-br-[2rem] overflow-hidden border border-white"
                                                        style="z-index: {{$zindex}};"><span
                                                            class="absolute inset-0 bg-typography/[.20] z-0 pointer-events-none"></span>
                                                        <div
                                                            class="absolute bottom-0 left-0 right-0 py-[.5rem] px-[1.7rem] z-10">
                                                            <div
                                                                class="flex flex-row place-items-center items-center justify-between"
                                                                style="justify-content: space-between;">
                                                                <div class="">
                                                                    <div
                                                                        class="flex flex-row place-items-center items-center justify-normal gap-2 px-[0.9rem]"
                                                                        gap="2" style="justify-content: normal;">
                                                                        @if(count($item->prices)>1)
                                                                            <div class="">
                                                                                <div
                                                                                    class="text-typography text-[1rem] font-bold">
                                                                                    {{$zindex * -1}}-
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        <div class="">
                                                                            <div
                                                                                class="text-typography text-[1rem] font-bold">
                                                                                {{$price['title']}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div
                                                                        class="flex flex-row place-items-center items-center justify-normal gap-2 px-[.8rem] py-[.2rem] bg-white/[.3] rounded-[1rem] false transition-all duration-[.3s]"
                                                                        gap="2" style="justify-content: normal;">
                                                                        <div class="">
                                                                            <div
                                                                                class="text-[1rem] font-[500] text-typography">
                                                                                {{number_format($price['price'])}}
                                                                                ت
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                {{--<div
                                                    class="w-full relative bg-white h-[5rem] mt-[-2rem] rounded-bl-[2rem] rounded-br-[2rem] overflow-hidden border border-white"
                                                    style="z-index: -2;"><span
                                                        class="absolute inset-0 bg-typography/[.20] z-0 pointer-events-none"></span>
                                                    <div
                                                        class="absolute bottom-0 left-0 right-0 py-[.5rem] px-[1.7rem] z-10">
                                                        <div
                                                            class="flex flex-row place-items-center items-center justify-between"
                                                            style="justify-content: space-between;">
                                                            <div class="">
                                                                <div
                                                                    class="flex flex-row place-items-center items-center justify-normal gap-2 px-[0.9rem]"
                                                                    gap="2" style="justify-content: normal;">
                                                                    <div class="">
                                                                        <div class="text-typography text-[1rem] font-bold">
                                                                            2-
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <div class="text-typography text-[1rem] font-bold">
                                                                            double
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div
                                                                    class="flex flex-row place-items-center items-center justify-normal gap-2 px-[.8rem] py-[.2rem] bg-white/[.3] rounded-[1rem] false transition-all duration-[.3s]"
                                                                    gap="2" style="justify-content: normal;">
                                                                    <div class="">
                                                                        <div class="text-[1rem] font-[500] text-typography">
                                                                            25,000 ت
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            {{--</div>--}}
            <div
                class="fixed inset-0 bg-black/[.2] z-[51] transition-all duration-[.2s] opacity-0 pointer-events-none">
            </div>
            {{--            todo check--}}
        </div>
    </main>

</div>

@vite('resources/js/app.js')
{{--@vite('resources/js/lodash.js')--}}
<script>
    function scrollIntoCategory(categoryId) {
        window.document
            .getElementById(`category-${categoryId}`)
            ?.scrollIntoView({
                behavior: 'smooth',
            });
    }

    {{--let menu = @json($business->categories->load('items'));--}}
        window.onload = function () {
        // console.log('ajdkasdkjsa')
    }
    let scrolled = false;
    const categoryBar = window.document.getElementById('category-bar');
    let categoryItems = window.document.getElementsByClassName('ci-category');
    let categoryNames = window.document.getElementsByClassName('ci-category-name');
    const swiperPagination = window.document.getElementById('swiper-pagination');

    window.addEventListener('scroll', function () {
        const scroll = window.scrollY;
        // console.log(scroll)
        if (scrolled && scroll == 0) {
            scrolled = false;
            // categoryItems.map()
            swiperPagination.classList.remove('!hidden')
            // console.log(' iffffffffffffffffff')
            Array.from(categoryNames).forEach((el) => {
                el.classList.remove('text-[.9rem]')
                el.classList.add('text-[1.2rem]')
            })

            Array.from(categoryItems).forEach((el) => {
                el.classList.remove('w-[6.7rem]')
                el.classList.remove('h-[3.7rem]')
                el.classList.remove('rounded-[1rem]')
                el.classList.remove('pb-[1rem]')
                //
                el.classList.add('rounded-[1.625rem]')
                el.classList.add('h-[8.7rem]')
                el.classList.add('w-[8.7rem]')
                el.classList.add('pb-[1.125rem]')
                // 'pb-[1.125rem]': !scrolled,
                //     'pb-[1rem]': scrolled,
            })


        } else if (scroll > (categoryBar?.clientHeight || 100) / 2.8) {
            scrolled = true;
            // console.log('from else')
            swiperPagination.classList.add('!hidden')
            Array.from(categoryNames).forEach((el) => {

                el.classList.remove('text-[1.2rem]')
                el.classList.add('text-[.9rem]')
            })

            Array.from(categoryItems).forEach((el) => {

                el.classList.remove('rounded-[1.625rem]')
                el.classList.remove('h-[8.7rem]')
                el.classList.remove('w-[8.7rem]')
                el.classList.remove('pb-[1.125rem]')
                //
                el.classList.add('w-[6.7rem]')
                el.classList.add('h-[3.7rem]')
                el.classList.add('rounded-[1rem]')
                el.classList.add('pb-[1rem]')
            })


        }
    });
    // window.addEventListener('scroll', _.throttle(handler, 50));
    // window.removeEventListener('scroll', _.throttle(handler, 50));
    document.addEventListener('alpine:init', () => {
        // console.log(window.Alpine.)
        // console.log(Alpine.$data('scrolled'))
        // console.log(scrolled)


    })

</script>
</body>
</html>
