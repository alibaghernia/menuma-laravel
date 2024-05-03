@extends('layouts.base')

@section('head.title',$business->name.' تخفیف ها ')

@section('head.start')
    <link rel="canonical"
          href="https://{{config('app.domains.main')}}/{{$business->slug}}/customer_club/register">
@endsection

@section('head.end')
    @filamentStyles
@endsection

@section('body.class','min-h-screen bg-background')
@section('body')
    <div>

        <main class="z-10 __className_e3ed35">
            <div class="min-h-screen w-full">
                <x-business.header :business="$business" position="sticky"/>
                {{--<div class="sticky z-50 top-0 w-full">
                    --}}{{--<div
                        class="flex flex-row place-items-center items-center justify-between relative px-[1.6rem] z-20 left-0 right-0 py-[1rem] bg-background"
                        style="justify-content: space-between;">
                        <div class="">
                            <div class="flex flex-row place-items-center items-center justify-normal" gap=".5rem"
                                 style="gap: 0.5rem; justify-content: normal;">
                                <div class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                         fill="none">
                                        <path d="M7.28307 19L20 19M19.9996 12L4 12M20 5L12.9719 5" stroke="#434343"
                                              stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div class="text-typography text-[1.3rem] whitespace-nowrap">کافه دمو</div>
                            </div>
                        </div>
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
                    </div>--}}{{--

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
                                            <div class="text-typography text-[1.5rem]">کافه دمو</div>
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
                                    <div class="mt-[2rem]">
                                        <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                                             style="justify-content: normal;">
                                            <div
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                gap="2" style="justify-content: normal;">
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M20.04 9.71903C20.04 9.30482 19.7042 8.96903 19.29 8.96903C18.8758 8.96903 18.54 9.30482 18.54 9.71903H20.04ZM5.45999 9.71903C5.45999 9.30482 5.12421 8.96903 4.70999 8.96903C4.29578 8.96903 3.95999 9.30482 3.95999 9.71903H5.45999ZM14.5132 20.7071L14.3408 19.9772L14.5132 20.7071ZM9.48673 20.7071L9.65916 19.9772L9.48673 20.7071ZM14.8284 5.01423L14.2962 5.54267L14.8284 5.01423ZM20.4678 11.7582C20.7596 12.0521 21.2345 12.0538 21.5284 11.7619C21.8224 11.4701 21.8241 10.9952 21.5322 10.7013L20.4678 11.7582ZM9.17157 5.01423L9.70378 5.54267L9.17157 5.01423ZM2.46779 10.7013C2.17594 10.9952 2.17762 11.4701 2.47155 11.7619C2.76548 12.0538 3.24035 12.0521 3.53221 11.7582L2.46779 10.7013ZM9.71842 18.3203L8.9813 18.1819L8.9813 18.1819L9.71842 18.3203ZM9.73776 18.2173L10.4749 18.3556L10.4749 18.3556L9.73776 18.2173ZM14.2622 18.2173L13.5251 18.3556V18.3556L14.2622 18.2173ZM14.2816 18.3203L15.0187 18.1819V18.1819L14.2816 18.3203ZM13.9918 20.5519L13.3146 20.2296V20.2296L13.9918 20.5519ZM13.1978 20.475C13.0198 20.849 13.1787 21.2965 13.5527 21.4745C13.9267 21.6525 14.3742 21.4936 14.5522 21.1196L13.1978 20.475ZM10.0082 20.5519L9.331 20.8742L9.331 20.8742L10.0082 20.5519ZM9.44778 21.1196C9.62577 21.4936 10.0733 21.6525 10.4473 21.4745C10.8213 21.2965 10.9802 20.849 10.8022 20.475L9.44778 21.1196ZM11.3611 16.4426L11.1605 15.7199H11.1605L11.3611 16.4426ZM12.6389 16.4426L12.8395 15.7199H12.8395L12.6389 16.4426ZM18.54 9.71903V14.6374H20.04V9.71903H18.54ZM5.45999 14.6374V9.71903H3.95999V14.6374H5.45999ZM14.3408 19.9772C12.8011 20.3409 11.1988 20.3409 9.65916 19.9772L9.3143 21.437C11.0808 21.8543 12.9192 21.8543 14.6857 21.437L14.3408 19.9772ZM9.65916 19.9772C7.2026 19.3969 5.45999 17.1877 5.45999 14.6374H3.95999C3.95999 17.8765 6.17421 20.6952 9.3143 21.437L9.65916 19.9772ZM14.6857 21.437C17.8258 20.6952 20.04 17.8765 20.04 14.6374H18.54C18.54 17.1877 16.7974 19.3969 14.3408 19.9772L14.6857 21.437ZM14.2962 5.54267L20.4678 11.7582L21.5322 10.7013L15.3606 4.48578L14.2962 5.54267ZM8.63937 4.48578L2.46779 10.7013L3.53221 11.7582L9.70378 5.54267L8.63937 4.48578ZM15.3606 4.48578C14.7089 3.82945 14.1681 3.28246 13.6818 2.90885C13.1785 2.52211 12.6458 2.25 12 2.25V3.75C12.1827 3.75 12.3974 3.81359 12.7679 4.09826C13.1555 4.39606 13.6146 4.85618 14.2962 5.54267L15.3606 4.48578ZM9.70378 5.54267C10.3854 4.85618 10.8445 4.39606 11.2321 4.09826C11.6026 3.81359 11.8173 3.75 12 3.75V2.25C11.3542 2.25 10.8215 2.52211 10.3182 2.90885C9.83194 3.28246 9.29106 3.82945 8.63937 4.48578L9.70378 5.54267ZM10.4555 18.4587L10.4749 18.3556L9.00064 18.0789L8.9813 18.1819L10.4555 18.4587ZM13.5251 18.3556L13.5445 18.4587L15.0187 18.1819L14.9994 18.0789L13.5251 18.3556ZM13.3146 20.2296L13.1978 20.475L14.5522 21.1196L14.669 20.8742L13.3146 20.2296ZM9.331 20.8742L9.44778 21.1196L10.8022 20.475L10.6854 20.2296L9.331 20.8742ZM13.5445 18.4587C13.6571 19.0588 13.5764 19.6793 13.3146 20.2296L14.669 20.8742C15.0675 20.0369 15.1899 19.0937 15.0187 18.1819L13.5445 18.4587ZM8.9813 18.1819C8.81015 19.0937 8.93254 20.0369 9.331 20.8742L10.6854 20.2296C10.4236 19.6793 10.3429 19.0588 10.4556 18.4587L8.9813 18.1819ZM11.5616 17.1652C11.8485 17.0856 12.1515 17.0856 12.4384 17.1652L12.8395 15.7199C12.2901 15.5674 11.7099 15.5674 11.1605 15.7199L11.5616 17.1652ZM14.9994 18.0789C14.7865 16.9449 13.9504 16.0281 12.8395 15.7199L12.4384 17.1652C12.9935 17.3193 13.417 17.7794 13.5251 18.3556L14.9994 18.0789ZM10.4749 18.3556C10.583 17.7794 11.0065 17.3193 11.5616 17.1652L11.1605 15.7199C10.0496 16.0281 9.21349 16.9449 9.00064 18.0789L10.4749 18.3556Z"
                                                            fill="#434343"></path>
                                                    </svg>
                                                </div>
                                                <div class="text-[1rem]">پروفایل</div>
                                            </div>
                                            <div
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                gap="2" style="justify-content: normal;">
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
                                            </div>
                                            <div
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                gap="2" style="justify-content: normal;">
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
                                            </div>
                                            <div
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                gap="2" style="justify-content: normal;">
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
                                            </div>
                                            <div
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                gap="2" style="justify-content: normal;">
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24">
                                                        <path fill="none" stroke="#434343" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="1.5"
                                                              d="M4 8.5h1.75m0 0a1.75 1.75 0 1 1 0 3.5H3m2.75-3.5a1.75 1.75 0 1 0 0-3.5H3m18 10c0 3.314-4.03 6-9 6s-9-2.686-9-6M14 5h-1a3 3 0 0 0-3 3v2m4.5-.5v.5a2 2 0 0 1-2 2H12a2 2 0 0 1-2-2v-.5a2 2 0 0 1 2-2h.5a2 2 0 0 1 2 2m2.5-1V7a2 2 0 0 1 2-2h.5a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H19a2 2 0 0 1-2-2z"></path>
                                                    </svg>
                                                </div>
                                                <div class="text-[1rem]">گالری</div>
                                            </div>
                                            <div
                                                class="flex flex-row place-items-center items-center justify-normal gap-2 px-[1.5rem] py-[.8rem] border-black transition-[border] duration-[.1s] hover:border-r-[5px] border-b border-b-black/[.1] last:border-b-0 cursor-pointer"
                                                gap="2" style="justify-content: normal;">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-gray-300 font-bold w-full text-center py-3"><a
                                    href="https://menuma.online/"><span class="hover:underline">قدرت گرفته از <span
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
                </div>--}}
                <div class="px-10">
                    <div
                        class="flex flex-col place-items-stretch items-stretch justify-normal max-w-lg mx-auto mt-2 gap-[1rem]"
                        style="justify-content: normal;">
                        <div class="grow text-typography text-center text-[1.2rem] font-bold">
                            {{__('pages/customer-club.register.title')}}
                        </div>
                        <div class="">
                            @livewire('components\customer-club\register-form',['business'=>$business])
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="fixed inset-0 bg-black/[.2] z-[51] transition-all duration-[.2s] opacity-0 pointer-events-none"></div>
        </main>
    </div>

@endsection


@section('body.end')
    @livewire('notifications')
    @filamentScripts
@endsection
