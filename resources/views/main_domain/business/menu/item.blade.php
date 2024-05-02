@extends('layouts.base')

@section('lang','fa')
@section('dir','rtl')

@section('head.title', $business->name . ' منو ')


@section('head.end')
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
@endsection

@section('body.class','min-h-screen bg-background')
@section('body')

    <div
        x-data="{scrolled : false}">
        <main class="z-10 ">
            <div class="bg-background min-h-screen">
                <x-business.header :business="$business" position="fixed"/>

                <main class="z-10">
                    <div class="pt-[4.5rem] pb-[2.5rem] z-10 px-4">
                        <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                             style="justify-content:normal">
                            <div
                                class="rounded-[2.4rem] overflow-hidden relative max-w-[22.4rem] w-full h-[22.4rem] mx-auto bg-white shadow">
                                <img alt="{{$item->name}}" loading="lazy" decoding="async" data-nimg="fill"

                                     @class([
                                        'inset-0 block object-cover false',
                                        'grayscale' => in_array('sold_out', $item->tags),
                                        ])
                                     style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                     sizes="100vw"
                                     {{-- srcset=""--}}
                                     src="/storage/{{$item->image_path}}"
                                     onerror="this.src='/img/placeholder/coffee-pattern.jpg'">
                            </div>
                            <div
                                class="grow mt-[1.1rem] max-w-[22.4rem] w-full mx-auto bg-white/[.5] p-4 pb-10 rounded-[1.5rem] border border-[#e5e7eb]">
                                <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                                     style="justify-content:normal">
                                    <div class="">
                                        <div class="flex flex-row place-items-center items-center justify-normal gap-2"
                                             style="justify-content:normal" gap="2">
                                            <hr class="border-black/10 w-full">
                                            <div
                                                class="w-fit text-[1.8rem] font-[500] whitespace-nowrap text-typography">
                                                {{$item->name}}
                                            </div>
                                            <hr class="border-black/10 w-full">
                                        </div>
                                    </div>
                                    @if($item->description)
                                        <div
                                            class="text-[1rem] font-[400] mt-[1.5rem] text-typography md:text-center text-justify">
                                            {{$item->description}}
                                        </div>
                                    @endif
                                    <div class="mt-[3rem]">
                                        <div
                                            class="flex flex-col place-items-stretch items-stretch justify-normal gap-2"
                                            style="justify-content:normal" gap="2">
                                            <div class="text-[.9rem] text-typography">قیمت ها</div>
                                            <div
                                                {{--                                            grayscale--}}
                                                {{--                                            class="flex flex-col place-items-stretch items-stretch justify-normal gap-2"--}}
                                                @class([
                                                    'flex flex-col place-items-stretch items-stretch justify-normal gap-2',
                                                    'grayscale' => in_array('sold_out', $item->tags),
    ])
                                                style="justify-content:normal" gap="2">
                                                @foreach($item->prices as $price)
                                                    <div class="">
                                                        <div
                                                            class="flex flex-row place-items-center items-center justify-center p-[.5rem] px-[1.5rem] pl-[.875rem] rounded-[2rem] bg-more/[.1] md:max-w-md md:w-full md:mx-auto"
                                                            style="justify-content: center;">
                                                            <div class="text-[1.3rem] text-typography">
                                                                <div
                                                                    class="flex flex-row place-items-center items-center justify-normal gap-2"
                                                                    gap="2" style="justify-content: normal;">
                                                                    <div class="text-[1rem]">
                                                                        {{$price['title']}}
                                                                        @if($price['title'])
                                                                            :
                                                                        @endif
                                                                    </div>
                                                                    <div class="">{{$price['price']}}</div>
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
                    </div>
                    <div
                        class="fixed inset-0 bg-black/[.2] z-[51] transition-all duration-[.2s] opacity-0 pointer-events-none"></div>
                </main>
            </div>
        </main>

    </div>
@endsection
