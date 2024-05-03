<div
    x-data="{isOpenSlider:false}"
    class="{{$position}} z-50 top-0 w-full bg-background">

    <header
        class="flex flex-row place-items-center items-center justify-between relative px-[1.6rem] z-20 end-0 start-0 py-[1rem] bg-background"
        style="justify-content: space-between;">
        <div class="">
            <div
                @click="isOpenSlider =true"
                class="flex flex-row place-items-center items-center justify-normal" gap=".5rem"
                style="gap: 0.5rem; justify-content: normal;">
                <div class="cursor-pointer">
                    <svg
                        x-data
                        x-bind:class="document.dir ==='ltr'?'flip-horizontally':''"


                        {{--                        style="transform: scale(-1,1)"--}}
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M7.28307 19L20 19M19.9996 12L4 12M20 5L12.9719 5" stroke="#434343"
                              stroke-width="1.5" stroke-linecap="round"></path>
                    </svg>
                </div>
                <h1 class="text-typography text-[1.3rem] whitespace-nowrap">
                    {{$business->name}}
                </h1>
            </div>
        </div>
        <div class="">
            <div class="flex flex-row place-items-center items-center justify-normal" gap=".5rem"
                 style="gap: 0.5rem; justify-content: normal;">
                {{--<div class="">
                    <div
                        class="px-[1rem] py-[.2rem] text-[.9rem] w-full text-center active:scale-[.99]  transition-colors duration-[.1s] select-none border  rounded-[1rem] font-bold whitespace-nowrap text-typography active:text-more border-more bg-more/[.1] active:bg-more/[.2]">
                        درخواست گارسون
                    </div>
                </div>--}}
                {{--<div class="">
                    <div class="cursor-pointer relative">
                        <div
                            class="absolute min-w-[1rem] text-center min-h-[1rem] p-[.1rem] bg-red-800 text-white rounded-[1rem] top-[-.3rem] left-0 text-[.8rem] font-semibold">
                            1
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                             viewBox="0 0 24 24"
                             fill="none">
                            <path
                                d="M9.34311 4.69205C10.2169 4.48709 11.1084 4.38462 12 4.38462C12.3823 4.38462 12.6923 4.07466 12.6923 3.69231C12.6923 3.30996 12.3823 3 12 3C11.0023 3 10.0047 3.11468 9.02691 3.34403C6.20715 4.00545 4.00545 6.20715 3.34403 9.02691C2.88532 10.9824 2.88532 13.0176 3.34403 14.9731C4.00546 17.7929 6.20715 19.9945 9.02691 20.656C10.9824 21.1147 13.0176 21.1147 14.9731 20.656C17.7928 19.9945 19.9945 17.7929 20.656 14.9731C20.8853 13.9953 21 12.9976 21 12C21 11.6176 20.69 11.3077 20.3077 11.3077C19.9253 11.3077 19.6154 11.6176 19.6154 12C19.6154 12.8915 19.5129 13.7831 19.3079 14.6569C18.7666 16.9647 16.9647 18.7666 14.6569 19.3079C12.9093 19.7179 11.0907 19.7179 9.34312 19.3079C7.03533 18.7666 5.23339 16.9647 4.69205 14.6569C4.28214 12.9093 4.28214 11.0907 4.69205 9.34311C5.23339 7.03533 7.03533 5.23339 9.34311 4.69205Z"
                                fill="#434343"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M16.2626 3.69309C16.781 3.24745 17.4438 3 18.1321 3C19.716 3 21 4.28398 21 5.86785C21 6.55619 20.7526 7.21898 20.3069 7.73736C20.2601 7.7918 20.2111 7.84464 20.16 7.89573L16.8458 11.21C15.3162 12.7395 13.3997 13.8246 11.3012 14.3493L10.6606 14.5094C9.95401 14.6861 9.31394 14.046 9.4906 13.3394L9.65074 12.6988C10.1754 10.6003 11.2605 8.68377 12.79 7.15421L16.1043 3.83997C16.1554 3.78888 16.2082 3.7399 16.2626 3.69309ZM18.253 7.84465C17.7729 7.65101 17.3389 7.34317 16.9979 7.00214C16.6568 6.6611 16.349 6.22708 16.1554 5.74703L13.7691 8.13328C12.4263 9.47608 11.471 11.1562 11.0037 12.9963C12.8438 12.529 14.5239 11.5737 15.8667 10.2309L18.253 7.84465Z"
                                  fill="#434343"></path>
                        </svg>
                    </div>
                </div>--}}
                <div class="">
                    {{-- back btn --}}
                    <div
                        x-data
                        @click="history.back()"
                        class="cursor-pointer">
                        <svg
                            x-data
                            x-bind:class="document.dir ==='ltr'?'flip-horizontally':''"
                            xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                            viewBox="0 0 24 25"
                            fill="none">
                            <path
                                d="M17.5 12.2322L6.5 12.2322M6.5 12.2322L11.0882 16.2322M6.5 12.2322L11.0882 8.23218"
                                stroke="#434343"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-business.menu-bar :business="$business"/>
</div>
