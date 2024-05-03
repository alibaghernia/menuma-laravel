@extends('layouts.base')

@section('head.title','کاتالوگ خدمات منوما')

@section('body.class','min-h-screen bg-background')
@section('body')
    <div>
        <main class="z-10">
            <div class="flex flex-col place-items-stretch items-stretch justify-between min-h-screen pt-[4.34rem]"
                 style="justify-content:space-between">
                <div class="">
                    <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                         style="justify-content:normal">
                        <div class="">
                            <div class="flex flex-col place-items-center items-center justify-normal gap-[1.03rem]"
                                 style="justify-content:normal">
                                <div class="">
                                    <a class="text-[2.5rem] flex items-center font-bold" href="/">
                                        <div class="text-primary">منو</div>
                                        <div class="text-secondary">ما</div>
                                    </a>
                                </div>
                                <div class="text-typography text-[.862rem]">هدف منوما افزایش مشتریان حضوری کافه شما و
                                    کاهش
                                    هزینه هایتان است
                                </div>
                            </div>
                        </div>
                        <div class="mt-[2.7rem]">
                            <div
                                class="flex flex-col place-items-stretch items-stretch justify-normal text-typography text-[1rem]]"
                                style="gap:.5rem;justify-content:normal" gap=".5rem">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                        style="justify-content:space-between" gap="2">
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                        <div
                                            class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                            خدمات منوما
                                        </div>
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-[1.3rem]">
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
                                        <div class="swiper-wrapper"
                                             style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(-24px, 0px, 0px);">
                                            @foreach($catalogs as $catalog)
                                                <div class="swiper-slide !w-fit" style="margin-left: 16px;">
                                                    <div
                                                        class="flex flex-col place-items-center items-center justify-normal w-[14rem] h-[23rem] bg-white rounded-[1.37rem] p-[1.38rem] border border-[#e5e7eb] !justify-between gap-[1.5rem]"
                                                        style="justify-content: normal;">
                                                        <div class="grow">
                                                            <div
                                                                class="flex flex-col place-items-center items-center justify-normal gap-[.95rem] h-full"
                                                                style="justify-content: normal;">
                                                                <div
                                                                    class="relative w-[7rem] h-[7rem] rounded-[.625rem] overflow-hidden">
                                                                    <img alt="{{$catalog->title}}" loading="lazy"
                                                                         decoding="async"
                                                                         data-nimg="fill" sizes="100vw"
                                                                         {{--                                                                     srcset=""--}}
                                                                         src="/storage/{{$catalog->image}}"
                                                                         style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                                </div>
                                                                <div
                                                                    class="text-[1rem] text-typography text-center font-semibold">
                                                                    {{$catalog->title}}
                                                                </div>
                                                                <div
                                                                    class="grow text-[.689rem] text-typography text-center font-light">
                                                                    {{$catalog->short_description}}
                                                                </div>
                                                                @if(!empty($catalog->label))
                                                                    <div class="">
                                                                        <div
                                                                            class="flex flex-row place-items-stretch items-stretch justify-center gap-2"
                                                                            gap="2" style="justify-content: center;">
                                                                            <div
                                                                                class="py-[.34rem] px-[1.64rem] font-bold rounded-[.689rem] bg-green-600/[.1] text-green-700 text-[.689rem]">
                                                                                {{$catalog->label}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        {{-- todo --}}
                                                        {{--                                                    <div class="">--}}
                                                        {{--                                                        <div--}}
                                                        {{--                                                            class="text-[1rem] text-center rounded-[.625rem] px-[.8rem] py-[.3rem] bg-white cursor-pointer whitespace-nowrap w-fit select-none outline-none border border-primary text-primary">--}}
                                                        {{--                                                            <a class="w-full" href="/catalog/3">اطلاعات بیشتر</a></div>--}}
                                                        {{--                                                    </div>--}}
                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-[2.7rem]">
                            <div
                                class="flex flex-col place-items-stretch items-stretch justify-normal text-typography text-[1rem]]"
                                style="gap:.5rem;justify-content:normal" gap=".5rem">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                        style="justify-content:space-between" gap="2">
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                        <div
                                            class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                            همین حالا به منوما بپیوندید!
                                        </div>
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                    </div>
                                </div>
                                {{-- todo --}}
                                <a href="{{route('main-domain.register-form', absolute: false)}}">
                                    <div class="px-[2.07rem] pt-[1.03rem]">
                                        <div
                                            class="text-center cursor-pointer whitespace-nowrap select-none py-[.8rem] px-[2rem] text-[1.2rem] w-full md:w-fit md:mx-auto rounded-[1.03rem] bg-primary text-white">
                                            <a class="w-full"
                                               href="{{route('main-domain.register-form', absolute: false)}}">
                                                درخواست منوی رایگان
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="my-[2.7rem]">
                            <div
                                class="flex flex-col place-items-stretch items-stretch justify-normal text-typography text-[1rem]]"
                                style="gap:.5rem;justify-content:normal" gap=".5rem">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                        style="justify-content:space-between" gap="2">
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                        <div
                                            class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                            مشاوره
                                        </div>
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="flex flex-col place-items-center items-center justify-normal gap-2"
                                         style="justify-content:normal" gap="2">
                                        <div class="text-typography text-[.862rem]">جهت دریافت مشاوره با شماره زیر تماس
                                            بگیرید:
                                        </div>
                                        <div class="">
                                            <a target="_blank" class="font-bold" href="tel:09999924319">09999924319</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="">
                    <div class="mx-10 border-t p-5">
                        <div class="flex flex-row place-items-center items-center justify-center gap-2"
                             style="justify-content:center" gap="2">
                            <div class="text-typography/[.8]">میزبانی شده توسط</div>
                            <div class="">
                                <a target="_blank" class="font-bold text-typography" href="https://mtserver.ir">
                                    MT Server
                                </a>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </main>
    </div>
@endsection
