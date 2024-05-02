@extends('layouts.base')

@section('lang','fa')
@section('dir','rtl')
@section('body.class','min-h-screen bg-background')
@section('head.title','جستجو کافه های اطراف - منوما')
@section('body')

    <div class="mb-10">
        <main class="z-10 ">
            <div class="mx-auto md:w-fit mt-[2.38rem] flex flex-col px-[2rem]">
                <div class="mx-auto">
                    <a class="text-[2.5rem] flex items-center font-bold" href="/">
                        <div class="text-primary">منو</div>
                        <div class="text-secondary">ما</div>
                    </a>
                </div>
                <div class="mt-[2.12rem] w-full">
                    <div class="text-center">
                        کافه های اطراف شما
                    </div>
                    <div class="mt-[1.5rem]">
                        <div class="flex flex-col gap-[.875rem] items-center">
                            @foreach($businesses as $business)
                                <div
                                    class="flex p-[1.13rem] gap-[.63rem] shadow-[0_0_10px_0_rgba(0,0,0,0.15)] rounded-[1rem] w-full md:w-full overflow-hidden">
                                    <a class="relative w-[5.875rem] h-[5.875rem] shrink-0 rounded-full overflow-hidden border border-[#e5e7eb]"
                                       href="/{{$business->slug}}">
                                        <img alt="{{$business->name}}" loading="lazy" decoding="async"
                                             data-nimg="fill" sizes="100vw"
                                             @if($business->logo_path)
                                                 src="/storage/{{$business->logo_path}}"
                                             @else
                                                 src="/img/placeholder/coffee-pattern.jpg"
                                             @endif
                                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></a>
                                    <div class="flex flex-col justify-between w-full">
                                        <a class="text-typography text-[1rem]"
                                           href="/{{$business->slug}}">
                                            {{$business->name}}
                                        </a>
                                        <div class="flex gap-[1rem] items-end justify-between w-full">
                                            <div class="flex flex-col gap-[.25rem]">
                                                <div class="text-[.725rem] text-typography font-bold">آدرس:</div>
                                                <div class="text-[.725rem] text-typography/[.8]">
                                                    {{$business->address}}
                                                </div>
                                            </div>
                                            <div class="flex gap-[.25rem]">
                                                <div class="text-[.725rem] text-typography font-bold">فاصله:</div>
                                                <div class="text-[.725rem] text-typography/[.8] whitespace-nowrap">
                                                    {{intval($business->distance)}}
                                                    متر
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="z-50 fixed inset-0 pointer-events-none">
                    <div
                        class="fixed inset-0 bg-black/[.2] transition-opacity duration-[.3s] opacity-0 pointer-events-none"></div>
                    <div
                        class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 fixed bg-white z-10 p-[1rem] px-[1.5rem] rounded-[.862rem] max-h-[90vh] w-full pb-[2rem] transition-all duration-[.3s] bottom-[-100%]"
                        gap="2" style="justify-content: normal;">
                        <div class="border-b pb-2">
                            <div class="flex flex-row place-items-center items-center justify-between w-full"
                                 style="justify-content: space-between;">
                                <div class="text-typography text-[1rem] font-bold">جستحوی پیشرفته</div>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" class="cursor-pointer">
                                        <path
                                            d="M3.35288 8.95043C4.00437 6.17301 6.17301 4.00437 8.95043 3.35288C10.9563 2.88237 13.0437 2.88237 15.0496 3.35288C17.827 4.00437 19.9956 6.17301 20.6471 8.95044C21.1176 10.9563 21.1176 13.0437 20.6471 15.0496C19.9956 17.827 17.827 19.9956 15.0496 20.6471C13.0437 21.1176 10.9563 21.1176 8.95044 20.6471C6.17301 19.9956 4.00437 17.827 3.35288 15.0496C2.88237 13.0437 2.88237 10.9563 3.35288 8.95043Z"
                                            stroke="#434343" stroke-width="1.5"></path>
                                        <path d="M13.7678 10.2322L10.2322 13.7677M13.7678 13.7677L10.2322 10.2322"
                                              stroke="#434343" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>

    </div>
@endsection
