@extends('layouts.base')
@section('head.title')
    {{$business->name}}
    -
    منوما
@endsection
@section('head.start')
    <link rel="canonical" href="https://{{config('app.domains.main')}}/{{$business->slug}}">
    <meta name="description" content="{{$business->description}}. {{$business->address}}"/>
    {{--  todo manifest  --}}
    {{--    <link rel="manifest" href="https://panel.menuma.online/api/cafe-restaurants/demo/manifest.json">--}}
    <meta property="og:title" content="{{$business->name}} - منوما">
    <meta property="og:description" content="{{$business->description}}">
    {{--  todo add image for og  --}}
    {{--    <meta property="og:image"--}}
    {{--          content="https://panel.menuma.online/storage/jKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png">--}}

    {{--    <link rel="preload" as="image"--}}
    {{--          imagesrcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=3840&amp;q=75 3840w"--}}
    {{--          imagesizes="100vw" fetchpriority="high">--}}
@endsection

@section('body.class','min-h-screen bg-background')
@section('body')
    <div
        x-data="{isOpenSlider : false}">
        <main class="z-10">
            <div class="fixed z-50 top-0 w-full">
                <div
                    class="flex flex-row place-items-center items-center justify-between relative px-[1.6rem] z-20 left-0 right-0 py-[1rem]"
                    style="justify-content:space-between">
                    <div class="">
                        <div
                            @click="isOpenSlider =true"
                            class="flex flex-row place-items-center items-center justify-normal"
                            style="gap:.5rem;justify-content:normal" gap=".5rem">
                            <div class="cursor-pointer py-[.2rem] px-[.4rem] bg-typography/[.3] rounded-[.5rem]">
                                <svg
                                    x-data
                                    x-bind:class="document.dir ==='ltr'?'flip-horizontally':''"
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                     fill="none">
                                    <path d="M7.28307 19L20 19M19.9996 12L4 12M20 5L12.9719 5" stroke="white"
                                          stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-row place-items-center items-center justify-normal"
                             style="gap:.5rem;justify-content:normal" gap=".5rem"></div>
                    </div>
                </div>


                <div
                    x-cloak
                    @click="isOpenSlider=false"
                    x-bind:class=" isOpenSlider ? 'bg-black/[.3] pointer-events-auto' : 'pointer-events-none'"
                    class="fixed inset-0 z-50 transition duration-[.2s] pointer-events-none"></div>
                <div
                    x-cloak
                    x-bind:class="isOpenSlider ? ' right-0 ' : ' right-[-100%] ' "
                    class="fixed transition-all top-0 bottom-0 duration-[.3s] z-50 max-w-xs w-full">
                    <div
                        class="flex flex-col place-items-stretch items-stretch justify-between max-w-xs w-full h-full bg-white rounded-bl-[2rem] rounded-tl-[2rem]"
                        style="justify-content:space-between">
                        <div class="">
                            <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                                 style="justify-content:normal">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between mt-[2rem] px-[1.5rem]"
                                        style="justify-content:space-between">
                                        <div class="text-typography text-[1.5rem]">{{$business->name}}</div>
                                        <div
                                            @click="isOpenSlider = false"
                                            class="cursor-pointer">
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
                                <div class="mt-[2rem]">
                                    <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                                         style="justify-content:normal">

                                        {{--                                    <a href="" class="block">--}}
                                        <a
                                            {{-- todo fix address--}}
                                            {{--                                        href="/{{$business->slug}}"--}}
                                            href="{{domain_route('profile',['slug'=>$business->slug])}}"
                                            class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                            style="justify-content:normal" gap="2">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M20.04 9.71903C20.04 9.30482 19.7042 8.96903 19.29 8.96903C18.8758 8.96903 18.54 9.30482 18.54 9.71903H20.04ZM5.45999 9.71903C5.45999 9.30482 5.12421 8.96903 4.70999 8.96903C4.29578 8.96903 3.95999 9.30482 3.95999 9.71903H5.45999ZM14.5132 20.7071L14.3408 19.9772L14.5132 20.7071ZM9.48673 20.7071L9.65916 19.9772L9.48673 20.7071ZM14.8284 5.01423L14.2962 5.54267L14.8284 5.01423ZM20.4678 11.7582C20.7596 12.0521 21.2345 12.0538 21.5284 11.7619C21.8224 11.4701 21.8241 10.9952 21.5322 10.7013L20.4678 11.7582ZM9.17157 5.01423L9.70378 5.54267L9.17157 5.01423ZM2.46779 10.7013C2.17594 10.9952 2.17762 11.4701 2.47155 11.7619C2.76548 12.0538 3.24035 12.0521 3.53221 11.7582L2.46779 10.7013ZM9.71842 18.3203L8.9813 18.1819L8.9813 18.1819L9.71842 18.3203ZM9.73776 18.2173L10.4749 18.3556L10.4749 18.3556L9.73776 18.2173ZM14.2622 18.2173L13.5251 18.3556V18.3556L14.2622 18.2173ZM14.2816 18.3203L15.0187 18.1819V18.1819L14.2816 18.3203ZM13.9918 20.5519L13.3146 20.2296V20.2296L13.9918 20.5519ZM13.1978 20.475C13.0198 20.849 13.1787 21.2965 13.5527 21.4745C13.9267 21.6525 14.3742 21.4936 14.5522 21.1196L13.1978 20.475ZM10.0082 20.5519L9.331 20.8742L9.331 20.8742L10.0082 20.5519ZM9.44778 21.1196C9.62577 21.4936 10.0733 21.6525 10.4473 21.4745C10.8213 21.2965 10.9802 20.849 10.8022 20.475L9.44778 21.1196ZM11.3611 16.4426L11.1605 15.7199H11.1605L11.3611 16.4426ZM12.6389 16.4426L12.8395 15.7199H12.8395L12.6389 16.4426ZM18.54 9.71903V14.6374H20.04V9.71903H18.54ZM5.45999 14.6374V9.71903H3.95999V14.6374H5.45999ZM14.3408 19.9772C12.8011 20.3409 11.1988 20.3409 9.65916 19.9772L9.3143 21.437C11.0808 21.8543 12.9192 21.8543 14.6857 21.437L14.3408 19.9772ZM9.65916 19.9772C7.2026 19.3969 5.45999 17.1877 5.45999 14.6374H3.95999C3.95999 17.8765 6.17421 20.6952 9.3143 21.437L9.65916 19.9772ZM14.6857 21.437C17.8258 20.6952 20.04 17.8765 20.04 14.6374H18.54C18.54 17.1877 16.7974 19.3969 14.3408 19.9772L14.6857 21.437ZM14.2962 5.54267L20.4678 11.7582L21.5322 10.7013L15.3606 4.48578L14.2962 5.54267ZM8.63937 4.48578L2.46779 10.7013L3.53221 11.7582L9.70378 5.54267L8.63937 4.48578ZM15.3606 4.48578C14.7089 3.82945 14.1681 3.28246 13.6818 2.90885C13.1785 2.52211 12.6458 2.25 12 2.25V3.75C12.1827 3.75 12.3974 3.81359 12.7679 4.09826C13.1555 4.39606 13.6146 4.85618 14.2962 5.54267L15.3606 4.48578ZM9.70378 5.54267C10.3854 4.85618 10.8445 4.39606 11.2321 4.09826C11.6026 3.81359 11.8173 3.75 12 3.75V2.25C11.3542 2.25 10.8215 2.52211 10.3182 2.90885C9.83194 3.28246 9.29106 3.82945 8.63937 4.48578L9.70378 5.54267ZM10.4555 18.4587L10.4749 18.3556L9.00064 18.0789L8.9813 18.1819L10.4555 18.4587ZM13.5251 18.3556L13.5445 18.4587L15.0187 18.1819L14.9994 18.0789L13.5251 18.3556ZM13.3146 20.2296L13.1978 20.475L14.5522 21.1196L14.669 20.8742L13.3146 20.2296ZM9.331 20.8742L9.44778 21.1196L10.8022 20.475L10.6854 20.2296L9.331 20.8742ZM13.5445 18.4587C13.6571 19.0588 13.5764 19.6793 13.3146 20.2296L14.669 20.8742C15.0675 20.0369 15.1899 19.0937 15.0187 18.1819L13.5445 18.4587ZM8.9813 18.1819C8.81015 19.0937 8.93254 20.0369 9.331 20.8742L10.6854 20.2296C10.4236 19.6793 10.3429 19.0588 10.4556 18.4587L8.9813 18.1819ZM11.5616 17.1652C11.8485 17.0856 12.1515 17.0856 12.4384 17.1652L12.8395 15.7199C12.2901 15.5674 11.7099 15.5674 11.1605 15.7199L11.5616 17.1652ZM14.9994 18.0789C14.7865 16.9449 13.9504 16.0281 12.8395 15.7199L12.4384 17.1652C12.9935 17.3193 13.417 17.7794 13.5251 18.3556L14.9994 18.0789ZM10.4749 18.3556C10.583 17.7794 11.0065 17.3193 11.5616 17.1652L11.1605 15.7199C10.0496 16.0281 9.21349 16.9449 9.00064 18.0789L10.4749 18.3556Z"
                                                        fill="#434343"></path>
                                                </svg>
                                            </div>
                                            <div class="text-[1rem]">پروفایل</div>
                                        </a>
                                        {{--                                    </a>--}}

                                        <a
                                            {{--                                        href="/{{$business->slug}}/menu"--}}
                                            href="{{domain_route('menu',['slug'=>$business->slug])}}"
                                            class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                            style="justify-content:normal" gap="2">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M3.29701 5.2338C3.52243 4.27279 4.27279 3.52243 5.2338 3.29701V3.29701C6.06663 3.10165 6.93337 3.10165 7.7662 3.29701V3.29701C8.72721 3.52243 9.47757 4.27279 9.70299 5.2338V5.2338C9.89835 6.06663 9.89835 6.93337 9.70299 7.7662V7.7662C9.47757 8.72721 8.72721 9.47757 7.7662 9.70299V9.70299C6.93337 9.89835 6.06663 9.89835 5.2338 9.70299V9.70299C4.27279 9.47757 3.52243 8.72721 3.29701 7.7662V7.7662C3.10166 6.93337 3.10166 6.06663 3.29701 5.2338V5.2338Z"
                                                        stroke="#434343" stroke-width="1.5"></path>
                                                    <path
                                                        d="M3.29701 16.2338C3.52243 15.2728 4.27279 14.5224 5.2338 14.297V14.297C6.06663 14.1017 6.93337 14.1017 7.7662 14.297V14.297C8.72721 14.5224 9.47757 15.2728 9.70299 16.2338V16.2338C9.89835 17.0666 9.89835 17.9334 9.70299 18.7662V18.7662C9.47757 19.7272 8.72721 20.4776 7.7662 20.703V20.703C6.93337 20.8983 6.06663 20.8983 5.2338 20.703V20.703C4.27279 20.4776 3.52243 19.7272 3.29701 18.7662V18.7662C3.10166 17.9334 3.10166 17.0666 3.29701 16.2338V16.2338Z"
                                                        stroke="#434343" stroke-width="1.5"></path>
                                                    <path
                                                        d="M14.297 5.2338C14.5224 4.27279 15.2728 3.52243 16.2338 3.29701V3.29701C17.0666 3.10165 17.9334 3.10165 18.7662 3.29701V3.29701C19.7272 3.52243 20.4776 4.27279 20.703 5.2338V5.2338C20.8983 6.06663 20.8983 6.93337 20.703 7.7662V7.7662C20.4776 8.72721 19.7272 9.47757 18.7662 9.70299V9.70299C17.9334 9.89835 17.0666 9.89835 16.2338 9.70299V9.70299C15.2728 9.47757 14.5224 8.72721 14.297 7.7662V7.7662C14.1017 6.93337 14.1017 6.06663 14.297 5.2338V5.2338Z"
                                                        stroke="#434343" stroke-width="1.5"></path>
                                                    <path
                                                        d="M14.297 16.2338C14.5224 15.2728 15.2728 14.5224 16.2338 14.297V14.297C17.0666 14.1017 17.9334 14.1017 18.7662 14.297V14.297C19.7272 14.5224 20.4776 15.2728 20.703 16.2338V16.2338C20.8983 17.0666 20.8983 17.9334 20.703 18.7662V18.7662C20.4776 19.7272 19.7272 20.4776 18.7662 20.703V20.703C17.9334 20.8983 17.0666 20.8983 16.2338 20.703V20.703C15.2728 20.4776 14.5224 19.7272 14.297 18.7662V18.7662C14.1017 17.9334 14.1017 17.0666 14.297 16.2338V16.2338Z"
                                                        stroke="#434343" stroke-width="1.5"></path>
                                                </svg>
                                            </div>
                                            <div class="text-[1rem]">منو</div>
                                        </a>


                                        @if($countOfConditionalDiscounts)
                                            <a
                                                {{--                                            href="/{{$business->slug}}/discounts"--}}
                                                href="{{domain_route('conditional-discounts',['slug'=>$business->slug])}}"
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                style="justify-content:normal" gap="2">
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24">
                                                        <g fill="none" stroke="#434343">
                                                            <path stroke-width="2"
                                                                  d="M10.51 3.665a2 2 0 0 1 2.98 0l.7.782a2 2 0 0 0 1.601.663l1.05-.058a2 2 0 0 1 2.107 2.108l-.058 1.049a2 2 0 0 0 .663 1.6l.782.7a2 2 0 0 1 0 2.981l-.782.7a2 2 0 0 0-.663 1.601l.058 1.05a2 2 0 0 1-2.108 2.107l-1.049-.058a2 2 0 0 0-1.6.663l-.7.782a2 2 0 0 1-2.981 0l-.7-.782a2 2 0 0 0-1.601-.663l-1.05.058a2 2 0 0 1-2.107-2.108l.058-1.049a2 2 0 0 0-.663-1.6l-.782-.7a2 2 0 0 1 0-2.981l.782-.7a2 2 0 0 0 .663-1.601l-.058-1.05A2 2 0 0 1 7.16 5.053l1.049.058a2 2 0 0 0 1.6-.663z"></path>
                                                            <path stroke-linejoin="round" stroke-width="3"
                                                                  d="M9.5 9.5h.01v.01H9.5zm5 5h.01v.01h-.01z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="m15 9l-6 6"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-[1rem]">تخفیف های ویژه</div>
                                            </a>
                                        @endif
                                        @if($countOfEvents)
                                            <a
                                                {{--                                            href="/{{$business->slug}}/events"--}}
                                                href="{{domain_route('events',['slug'=>$business->slug])}}"
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                style="justify-content:normal" gap="2">
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 15 16">
                                                        <path fill="#434343"
                                                              d="M7.5 7a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5m0-4C6.67 3 6 3.67 6 4.5S6.67 6 7.5 6S9 5.33 9 4.5S8.33 3 7.5 3"></path>
                                                        <path fill="#434343"
                                                              d="M13.5 11c-.28 0-.5-.22-.5-.5s.22-.5.5-.5s.5-.22.5-.5A2.5 2.5 0 0 0 11.5 7h-1c-.28 0-.5-.22-.5-.5s.22-.5.5-.5c.83 0 1.5-.67 1.5-1.5S11.33 3 10.5 3c-.28 0-.5-.22-.5-.5s.22-.5.5-.5A2.5 2.5 0 0 1 13 4.5c0 .62-.22 1.18-.6 1.62c1.49.4 2.6 1.76 2.6 3.38c0 .83-.67 1.5-1.5 1.5m-12 0C.67 11 0 10.33 0 9.5c0-1.62 1.1-2.98 2.6-3.38c-.37-.44-.6-1-.6-1.62A2.5 2.5 0 0 1 4.5 2c.28 0 .5.22.5.5s-.22.5-.5.5C3.67 3 3 3.67 3 4.5S3.67 6 4.5 6c.28 0 .5.22.5.5s-.22.5-.5.5h-1A2.5 2.5 0 0 0 1 9.5c0 .28.22.5.5.5s.5.22.5.5s-.22.5-.5.5m9 3h-6c-.83 0-1.5-.67-1.5-1.5v-1C3 9.57 4.57 8 6.5 8h2c1.93 0 3.5 1.57 3.5 3.5v1c0 .83-.67 1.5-1.5 1.5m-4-5A2.5 2.5 0 0 0 4 11.5v1c0 .28.22.5.5.5h6c.28 0 .5-.22.5-.5v-1A2.5 2.5 0 0 0 8.5 9z"></path>
                                                    </svg>
                                                </div>
                                                <div class="text-[1rem]">دورهمی ها</div>
                                            </a>
                                        @endif
                                        {{--<div
                                            class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                            style="justify-content:normal" gap="2">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24">
                                                    <path fill="none" stroke="#434343" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="1.5"
                                                          d="M4 8.5h1.75m0 0a1.75 1.75 0 1 1 0 3.5H3m2.75-3.5a1.75 1.75 0 1 0 0-3.5H3m18 10c0 3.314-4.03 6-9 6s-9-2.686-9-6M14 5h-1a3 3 0 0 0-3 3v2m4.5-.5v.5a2 2 0 0 1-2 2H12a2 2 0 0 1-2-2v-.5a2 2 0 0 1 2-2h.5a2 2 0 0 1 2 2m2.5-1V7a2 2 0 0 1 2-2h.5a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H19a2 2 0 0 1-2-2z"></path>
                                                </svg>
                                            </div>
                                            <div class="text-[1rem]">گالری</div>
                                        </div>--}}
                                        <a
                                            {{--                                        href="/{{$business->slug}}/customer_club/register"--}}
                                            href="{{domain_route('customer-club.register',['slug'=>$business->slug])}}"
                                            class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                            style="justify-content:normal" gap="2">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24">
                                                    <g fill="#434343" fill-rule="evenodd" clip-rule="evenodd">
                                                        <path
                                                            d="M12 6.25a3.25 3.25 0 1 0 0 6.5a3.25 3.25 0 0 0 0-6.5M10.25 9.5a1.75 1.75 0 1 1 3.5 0a1.75 1.75 0 0 1-3.5 0"></path>
                                                        <path
                                                            d="M12 2.25a7.25 7.25 0 0 0-6.063 11.226l-2.587 4.48a.75.75 0 0 0 .795 1.11l2.614-.514l.861 2.52a.75.75 0 0 0 1.36.133l2.58-4.468a7.313 7.313 0 0 0 .88 0l2.58 4.468a.75.75 0 0 0 1.36-.134l.858-2.526l2.616.52a.75.75 0 0 0 .796-1.11l-2.586-4.479A7.25 7.25 0 0 0 12 2.25M6.25 9.5a5.75 5.75 0 1 1 11.5 0a5.75 5.75 0 0 1-11.5 0m3.734 6.966a7.243 7.243 0 0 1-3.027-1.757l-1.482 2.567l1.637-.322a.75.75 0 0 1 .854.493l.54 1.579zm5.508 2.556l-1.476-2.556a7.244 7.244 0 0 0 3.027-1.757l1.48 2.563l-1.638-.326a.75.75 0 0 0-.856.495z"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="text-[1rem]">باشگاه مشتریان</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-gray-300 font-bold w-full text-center py-3">
                            <a href="https://menuma.ir">
                            <span class="hover:underline text-[#999999]">
                                قدرت گرفته از
{{--                                &nbsp;--}}
                                <span class="text-blue-400">

                                    <span>
                                        <span class="text-blue-400">منوما</span>
{{--                                        <span class="text-[#eeb33f]">ما</span>--}}
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
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

                    </div>
                </div>
            </div>
            <div class="flex flex-col place-items-stretch items-stretch justify-between gap-2 min-h-screen"
                 style="justify-content:space-between" gap="2">
                <div class="z-0">
                    <div class="relative">
                        <div
                            class="flex flex-col place-items-stretch items-stretch justify-normal pt-[5.1rem] pb-[5.6rem] relative rounded-bl-[2.6rem] rounded-br-[2.6rem] overflow-hidden z-10"
                            style="justify-content:normal">
                            <div class="">
                                <img alt="{{$business->name}}" fetchpriority="high" decoding="async" data-nimg="fill"
                                     class="absolute inset-0 -z-20 object-cover coffee-pattern-placeholder-image"
                                     {{-- todo make placholder class --}}
                                     style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent;"
                                     sizes="100vw"
                                     {{-- srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2F6FtzPBQr082fa9gw2Lj7pwaJwrzyiHsv2s5QIhxV.jpg&amp;w=3840&amp;q=75 3840w"--}}
                                     @if($business->banner_path)
                                         src="/storage/{{$business->banner_path}}"
                                     @else
                                         src="/img/placeholder/coffee-pattern.jpg"
                                    @endif
                                >
                                <div class="absolute inset-0 -z-10 bg-black/[.6]"></div>
                            </div>
                            <div class="text-[1.8rem] mx-auto font-bold text-white">{{$business->name}}</div>
                            <div
                                class="text-[1rem] mx-auto font-light text-white text-center">{{$business->description}}</div>
                            <div class="mx-auto mt-[1.4rem]">
                                <div class="flex flex-row place-items-center items-center justify-normal gap-2"
                                     style="justify-content:normal" gap="2">
                                    <div class="flex gap-2">
                                        @if(!empty($business->instagram))
                                            <div class="">
                                                <a href="{{$business->instagram}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M8.00312 4.40626C6.01562 4.40626 4.4125 6.00938 4.4125 7.99688C4.4125 9.98438 6.01562 11.5875 8.00312 11.5875C9.99062 11.5875 11.5938 9.98438 11.5938 7.99688C11.5938 6.00938 9.99062 4.40626 8.00312 4.40626ZM8.00312 10.3313C6.71875 10.3313 5.66875 9.28438 5.66875 7.99688C5.66875 6.70938 6.71562 5.66251 8.00312 5.66251C9.29062 5.66251 10.3375 6.70938 10.3375 7.99688C10.3375 9.28438 9.2875 10.3313 8.00312 10.3313ZM12.5781 4.25938C12.5781 4.72501 12.2031 5.09688 11.7406 5.09688C11.275 5.09688 10.9031 4.72188 10.9031 4.25938C10.9031 3.79688 11.2781 3.42188 11.7406 3.42188C12.2031 3.42188 12.5781 3.79688 12.5781 4.25938ZM14.9563 5.10938C14.9031 3.98751 14.6469 2.99376 13.825 2.17501C13.0062 1.35626 12.0125 1.10001 10.8906 1.04376C9.73438 0.978131 6.26875 0.978131 5.1125 1.04376C3.99375 1.09688 3 1.35313 2.17812 2.17188C1.35625 2.99063 1.10312 3.98438 1.04687 5.10626C0.98125 6.26251 0.98125 9.72813 1.04687 10.8844C1.1 12.0063 1.35625 13 2.17812 13.8188C3 14.6375 3.99062 14.8938 5.1125 14.95C6.26875 15.0156 9.73438 15.0156 10.8906 14.95C12.0125 14.8969 13.0062 14.6406 13.825 13.8188C14.6438 13 14.9 12.0063 14.9563 10.8844C15.0219 9.72813 15.0219 6.26563 14.9563 5.10938ZM13.4625 12.125C13.2188 12.7375 12.7469 13.2094 12.1313 13.4563C11.2094 13.8219 9.02187 13.7375 8.00312 13.7375C6.98438 13.7375 4.79375 13.8188 3.875 13.4563C3.2625 13.2125 2.79062 12.7406 2.54375 12.125C2.17812 11.2031 2.2625 9.01563 2.2625 7.99688C2.2625 6.97813 2.18125 4.78751 2.54375 3.86876C2.7875 3.25626 3.25937 2.78438 3.875 2.53751C4.79687 2.17188 6.98438 2.25626 8.00312 2.25626C9.02187 2.25626 11.2125 2.17501 12.1313 2.53751C12.7438 2.78126 13.2156 3.25313 13.4625 3.86876C13.8281 4.79063 13.7437 6.97813 13.7437 7.99688C13.7437 9.01563 13.8281 11.2063 13.4625 12.125Z"
                                                            fill="white" fill-opacity="0.91"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if(!empty($business->telegram))
                                            <div class="">
                                                <a href="{{$business->telegram}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M14.9594 3.08125L12.8469 13.0437C12.6875 13.7469 12.2719 13.9219 11.6813 13.5906L8.4625 11.2188L6.90938 12.7125C6.7375 12.8844 6.59375 13.0281 6.2625 13.0281L6.49375 9.75L12.4594 4.35938C12.7188 4.12813 12.4031 4 12.0563 4.23125L4.68125 8.875L1.50625 7.88125C0.815626 7.66563 0.803126 7.19063 1.65 6.85938L14.0688 2.075C14.6438 1.85938 15.1469 2.20313 14.9594 3.08125Z"
                                                            fill="white" fill-opacity="0.91"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if(!empty($business->twitter))
                                            <div class="">
                                                <a href="{{$business->twitter}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                         viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_665_7)">
                                                            <path
                                                                d="M9.9895 6.775L15.8177 0H14.4365L9.376 5.8825L5.334 0H0.671997L6.78425 8.8955L0.671997 16H2.05325L7.3975 9.78788L11.666 16H16.328L9.98912 6.775H9.9895ZM8.09775 8.97375L7.47837 8.088L2.55087 1.03975H4.67237L8.64875 6.728L9.268 7.61375L14.4371 15.0075H12.3159L8.09775 8.97412V8.97375Z"
                                                                fill="white"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_665_7">
                                                                <rect width="20" height="20" fill="white"
                                                                      transform="translate(0.5)"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if(!empty($business->whatsapp))
                                            <div class="">
                                                <a href="{{$business->whatsapp}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M12.7 3.27334C12.0888 2.65595 11.3608 2.16645 10.5584 1.83337C9.75606 1.50029 8.89541 1.33031 8.02667 1.33334C4.38667 1.33334 1.42 4.3 1.42 7.94C1.42 9.10667 1.72667 10.24 2.3 11.24L1.36667 14.6667L4.86667 13.7467C5.83334 14.2733 6.92 14.5533 8.02667 14.5533C11.6667 14.5533 14.6333 11.5867 14.6333 7.94667C14.6333 6.18 13.9467 4.52 12.7 3.27334ZM8.02667 13.4333C7.04 13.4333 6.07334 13.1667 5.22667 12.6667L5.02667 12.5467L2.94667 13.0933L3.5 11.0667L3.36667 10.86C2.8185 9.98465 2.52743 8.97283 2.52667 7.94C2.52667 4.91334 4.99333 2.44667 8.02 2.44667C9.48667 2.44667 10.8667 3.02 11.9 4.06C12.4117 4.56931 12.8171 5.17511 13.0929 5.84229C13.3687 6.50946 13.5094 7.22474 13.5067 7.94667C13.52 10.9733 11.0533 13.4333 8.02667 13.4333ZM11.04 9.32667C10.8733 9.24667 10.06 8.84667 9.91333 8.78667C9.76 8.73334 9.65334 8.70667 9.54 8.86667C9.42667 9.03334 9.11333 9.40667 9.02 9.51334C8.92667 9.62667 8.82667 9.64 8.66 9.55334C8.49333 9.47334 7.96 9.29334 7.33333 8.73334C6.84 8.29334 6.51333 7.75334 6.41333 7.58667C6.32 7.42 6.4 7.33334 6.48667 7.24667C6.56 7.17334 6.65334 7.05334 6.73334 6.96C6.81334 6.86667 6.84667 6.79334 6.9 6.68667C6.95334 6.57334 6.92667 6.48 6.88667 6.4C6.84667 6.32 6.51333 5.50667 6.38 5.17334C6.24667 4.85334 6.10667 4.89334 6.00667 4.88667H5.68667C5.57333 4.88667 5.4 4.92667 5.24667 5.09334C5.1 5.26 4.67334 5.66 4.67334 6.47334C4.67334 7.28667 5.26667 8.07334 5.34667 8.18C5.42667 8.29334 6.51333 9.96 8.16667 10.6733C8.56 10.8467 8.86667 10.9467 9.10667 11.02C9.5 11.1467 9.86 11.1267 10.1467 11.0867C10.4667 11.04 11.1267 10.6867 11.26 10.3C11.4 9.91334 11.4 9.58667 11.3533 9.51334C11.3067 9.44 11.2067 9.40667 11.04 9.32667Z"
                                                            fill="white"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute left-[50%] bottom-[-4.25rem] rounded-full z-20 w-[8.5rem] h-[8.5rem] translate-x-[-50%] border-[0.7rem] border-background bg-white">
                            <div class="relative h-full w-full rounded-full border overflow-hidden border-[#e5e7eb] ">
                                <img alt="{{$business->name}}"
                                     loading="lazy"
                                     decoding="async"
                                     data-nimg="fill"
                                     class="object-cover coffee-pattern-placeholder-image bg-cover"
                                     style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                     sizes="100vw"
                                     {{-- srcset="/_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fpanel.menuma.online%2Fstorage%2FjKL32G6YpOTravreh47gyNMDh2shuC-metaRmtKUWltVlJueERZc0NyQ1N0WHEzS2JMcDlvRGVtLW1ldGFVMk55WldWdWMyaHZkQ0F5TURJekxURXlMVEF6SURFNU16VXlPUzV3Ym1jPS0ucG5n-.png&amp;w=3840&amp;q=75 3840w"--}}
                                     {{--  TODO  --}}
                                     @if($business->logo_path)
                                         src="/storage/{{$business->logo_path}}"
                                     @else
                                         src="/img/placeholder/coffee-pattern.jpg"
                                    @endif
                                >
                            </div>
                        </div>
                    </div>
                    <div class="mt-[4.3rem]">
                        <a class="mx-auto" href="{{domain_route('menu',['slug'=>$business->slug])}}">
                            <div
                                class="text-[1rem] text-center text-typography bg-white cursor-pointer whitespace-nowrap select-none py-[.8rem] px-[2.9rem] mx-auto w-fit shadow-[0_0_20px_5px_rgba(0,0,0,0.01)] font-bold border rounded-full border-[#e5e7eb]"
                                style="background-color:#fff">
                                {{-- todo dynamic routes --}}
                                <span>
                                    {{__('pages/profile.show_menu')}}
                            </span>
                            </div>
                        </a>
                        @if($hasWorkingTime)
                            <div class="mt-[1rem]">
                                <div class="flex flex-col place-items-stretch items-stretch justify-normal" gap=".5rem"
                                     style="gap: 0.5rem; justify-content: normal;">
                                    <div class="">
                                        <div
                                            class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                            gap="2" style="justify-content: space-between;">
                                            <div
                                                class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                                {{__('pages/profile.today_working_hours')}}
                                            </div>
                                            <div class="grow">
                                                <hr class="border-black/10 w-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        @if(!$workingHours->count())
                                            {{-- todo use one table tag for both --}}
                                            <table class="px-[1.6rem] w-fit mx-auto">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div
                                                            class="text-center text-red-500 font-bold  px-4 py-1 rounded-full border-[1px] border-red-200">
                                                            {{__('pages/profile.it_is_close_today')}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        @else

                                            <table class="px-[1.6rem] w-fit mx-auto">
                                                <tbody>
                                                @foreach($workingHours as $workingHour)
                                                    <tr class="py-2">
                                                        {{--<td class="text-center px-2 pb-2">صبح</td>--}}
                                                        <td class="pb-2">
                                                            <div
                                                                class="bg-white/[.5] px-4 py-1 rounded-full border border-[#e5e7eb]">
                                                                {{verta($workingHour->from)->format('H:i')}}
                                                            </div>
                                                        </td>
                                                        <td class="px-2 pb-2">
                                                            {{__('pages/profile.to')}}
                                                        </td>
                                                        <td class="pb-2">
                                                            <div
                                                                class="bg-white/[.5] px-4 py-1 rounded-full border border-[#e5e7eb]">
                                                                {{verta($workingHour->to)->format('H:i')}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(!empty($business->address) || !empty($business->location_lat) || !empty($business->location_long) )
                            <div class="flex flex-col place-items-stretch items-stretch justify-normal mt-[1rem]"
                                 style="gap:.5rem;justify-content:normal" gap=".5rem">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                        style="justify-content:space-between" gap="2">
                                        <div
                                            class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                            {{__('pages/profile.location')}}
                                        </div>
                                        <div class="grow">
                                            <hr class="border-black/10 w-full border-[#e5e7eb]">
                                        </div>
                                        @if(!empty($business->location_lat) && !empty($business->location_long))
                                            <div class="grow-0 w-fit">
                                                <a target="_blank"
                                                   href="https://www.google.com/maps/search/?api=1&amp;query={{$business->location_lat}},{{$business->location_long}}">
                                                    <div
                                                        class="text-center cursor-pointer whitespace-nowrap w-fit select-none
                                                 text-[.8rem] px-[.8rem] py-[.3rem] rounded-[1rem] bg-secondary text-white">
                                                        {{__('pages/profile.routing')}}
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="">
                                    <div
                                        class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 mt-2 px-[2.5rem]"
                                        style="justify-content:normal" gap="2">
                                        <div
                                            dir="rtl"
                                            class="text-typography text-[.9rem] text-justify py-2 rounded-[2rem]">
                                            {{$business->address}}
                                        </div>
                                        @if(!empty($business->location_lat) && !empty($business->location_long))
                                            <div
                                                x-cloak
                                                class="mt-2">
                                                <div class="rounded-[1rem] overflow-hidden h-[12.7rem] relative z-0">
                                                    <div
                                                        id="map"
                                                        class="rounded-[1rem] overflow-hidden h-[12.7rem] relative z-0 w-full h-full">

                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(!empty($business->phone_number) || !empty($business->email))
                            <div
                                class="flex flex-col place-items-stretch items-stretch justify-normal py-[1.6rem]"
                                style="gap:.5rem;justify-content:normal" gap=".5rem">
                                <div class="">
                                    <div
                                        class="flex flex-row place-items-center items-center justify-between gap-2 px-[1.9rem]"
                                        style="justify-content:space-between" gap="2">
                                        <div
                                            class="grow-0 text-[1rem] text-typography w-fit whitespace-nowrap font-bold">
                                            {{__('pages/profile.contact_us')}}
                                        </div>
                                        <div class="grow">
                                            <hr class="border-black/10 w-full">
                                        </div>
                                    </div>
                                </div>

                                <div class="px-[1.7rem]">
                                    @if(!empty($business->phone_number))
                                        <div
                                            class="flex flex-col place-items-stretch items-stretch justify-normal gap-2 px-[1rem]"
                                            style="justify-content:normal" gap="2">
                                            <div
                                                class="text-typography text-[.9rem] text-justify rounded-[2rem] border border-[#e5e7eb]">
                                                <div
                                                    class="flex flex-row place-items-center items-center justify-normal gap-0"
                                                    style="justify-content:normal" gap="0">
                                                    <div
                                                        class="bg-typography
                                                         rtl:rounded-tr-[1rem] ltr:rounded-tl-[1rem]
                                                         rtl:rounded-br-[1rem] ltr:rounded-bl-[1rem]
                                                         py-2 px-2">
                                                        <svg
                                                            x-data
                                                            x-bind:class="document.dir ==='ltr'?'flip-horizontally':''"

                                                            xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                                            viewBox="0 0 17 16" fill="none">
                                                            <path
                                                                d="M14.3981 9.90375L11.4537 8.58437L11.4456 8.58062C11.2928 8.51524 11.126 8.48901 10.9605 8.50428C10.7949 8.51956 10.6358 8.57587 10.4975 8.66812C10.4812 8.67888 10.4656 8.69056 10.4506 8.70312L8.92937 10C7.96562 9.53187 6.97062 8.54437 6.5025 7.59312L7.80125 6.04875C7.81375 6.03312 7.82562 6.0175 7.83687 6.00062C7.92714 5.86268 7.98191 5.70457 7.9963 5.54035C8.0107 5.37614 7.98427 5.21091 7.91937 5.05937V5.05187L6.59625 2.1025C6.51046 1.90454 6.36295 1.73963 6.17574 1.63239C5.98853 1.52516 5.77166 1.48135 5.5575 1.5075C4.7106 1.61894 3.93324 2.03485 3.37058 2.67756C2.80793 3.32026 2.49847 4.1458 2.5 5C2.5 9.9625 6.5375 14 11.5 14C12.3542 14.0015 13.1797 13.6921 13.8224 13.1294C14.4651 12.5668 14.8811 11.7894 14.9925 10.9425C15.0187 10.7284 14.975 10.5116 14.8679 10.3244C14.7607 10.1372 14.596 9.98963 14.3981 9.90375ZM11.5 13C9.37898 12.9977 7.34549 12.1541 5.8457 10.6543C4.34591 9.1545 3.50231 7.12102 3.5 5C3.49765 4.38968 3.71753 3.79937 4.11858 3.33931C4.51964 2.87926 5.07444 2.58091 5.67937 2.5C5.67913 2.50249 5.67913 2.505 5.67937 2.5075L6.99187 5.445L5.7 6.99125C5.68689 7.00633 5.67497 7.02242 5.66437 7.03937C5.57032 7.18369 5.51514 7.34987 5.50419 7.52178C5.49324 7.6937 5.52689 7.86553 5.60187 8.02062C6.16812 9.17875 7.335 10.3369 8.50562 10.9025C8.66185 10.9768 8.83468 11.0093 9.00721 10.9968C9.17975 10.9843 9.3461 10.9272 9.49 10.8312C9.50604 10.8204 9.52149 10.8088 9.53625 10.7962L11.0556 9.5L13.9931 10.8156H14C13.9201 11.4214 13.6222 11.9773 13.162 12.3794C12.7019 12.7814 12.111 13.0021 11.5 13Z"
                                                                fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                    <div
                                                        class="grow text-typography font-bold bg-white/[.4] py-2 px-4 rounded-tl-[1rem] rounded-bl-[1rem] text-[1rem] text-center">
                                                        <a target="_blank"
                                                           href="tel:{{$business->phone_number}}">{{$business->phone_number}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if(!empty($business->email))
                                                <div
                                                    class="text-typography text-[.9rem] text-justify rounded-[2rem] border border-[#e5e7eb]">
                                                    <div
                                                        class="flex flex-row place-items-center items-center justify-normal gap-0"
                                                        style="justify-content:normal" gap="0">
                                                        <div
                                                            class="bg-typography
                                                             rtl:rounded-tr-[1rem] ltr:rounded-tl-[1rem]
                                                             rtl:rounded-br-[1rem] ltr:rounded-bl-[1rem]
                                                              py-2 px-2">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24"
                                                                viewBox="0 0 16 16" fill="none">
                                                                <path d="M4.66667 6L8.00001 8.33333L11.3333 6"
                                                                      stroke="#fff"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.33334 11.3333V4.66666C1.33334 4.31304 1.47381 3.9739 1.72386 3.72385C1.97391 3.4738 2.31305 3.33333 2.66667 3.33333H13.3333C13.687 3.33333 14.0261 3.4738 14.2761 3.72385C14.5262 3.9739 14.6667 4.31304 14.6667 4.66666V11.3333C14.6667 11.687 14.5262 12.0261 14.2761 12.2761C14.0261 12.5262 13.687 12.6667 13.3333 12.6667H2.66667C2.31305 12.6667 1.97391 12.5262 1.72386 12.2761C1.47381 12.0261 1.33334 11.687 1.33334 11.3333Z"
                                                                    stroke="#fff"></path>
                                                            </svg>
                                                        </div>
                                                        <div
                                                            class="grow text-typography font-bold bg-white/[.4] py-2 px-4 rounded-tl-[1rem] rounded-bl-[1rem] text-[1rem] text-center">
                                                            <a target="_blank"
                                                               href="mailto:info@cafe.ir">{{$business->email}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <x-business.footer/>
            </div>
            <div
                class="fixed inset-0 bg-black/[.2] z-[51] transition-all duration-[.2s] opacity-0 pointer-events-none"></div>
        </main>
    </div>
@endsection
@section('body.end')

    {{-- TODO use npm --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <script>
        window.onload = function () {
            // console.log(L)
            let map = L.map('map').setView([{{$business->location_lat}}, {{$business->location_long}}], 15);
            // todo layer
            // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
                attribution: 'منوما'
            }).addTo(map);

            L.marker([{{$business->location_lat}}, {{$business->location_long}}]).addTo(map);
        }

    </script>
@endsection
