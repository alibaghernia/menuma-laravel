<div id="" dir="rtl">
    <main class="z-10 ">

        <div class="flex flex-col place-items-stretch items-stretch justify-between min-h-screen"
             style="justify-content: space-between;">
            <div class="">
                <div class="flex flex-col place-items-stretch items-stretch justify-normal pt-[2.5rem] px-[2rem]"
                     style="justify-content: normal;">
                    <div class="mx-auto">
                        <a class="text-[2.5rem] flex items-center font-bold" href="/">
                            <div class="text-primary">منو</div>
                            <div class="text-secondary">ما</div>
                        </a></div>
                    <div class="mt-[3rem]">
                        @if($isSubmitted)
                            <div class="border-[#e5e7eb] shadow-lg">
                                <div
                                    class="place-items-stretch flex flex-col items-center justify-center px-6 mx-auto lg:py-0"
                                    style="justify-content: normal;">
                                    <div class="mx-auto mb-7 text-[2rem] text-gray-800"><a href="/"></a></div>
                                </div>
                                <div class="flex flex-row place-items-stretch items-stretch justify-normal"
                                     style="justify-content: normal;">
                                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8"><h1
                                            class="text-base font-bold leading-tight tracking-tight text-gray-900 xmd:text-xl ddd:text-white">
                                            درخواست شما ثبت شد</h1>
                                        <p class="text-xs text-gray-500">کارشناسان ما به زودی با شما تماس خواهند
                                            گرفت</p></div>
                                </div>
                                <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                                     style="justify-content: normal;">
                                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8"><a href="/">
                                            <div
                                                class="text-[1rem] cursor-pointer whitespace-nowrap select-none w-full hover:bg-blue-700 font-bold py-2 px-4 rounded justify-center text-center bg-primary text-white">
                                                بازگشت به صفحه اصلی
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        @else
                            <div
                                class="w-full bg-white rounded-lg shadow ddd:border md:mt-0 sm:max-w-md xl:p-0 ddd:bg-gray-800 ddd:border-gray-700 mx-auto">
                                <div>
                                    <div class="flex flex-row place-items-stretch items-stretch justify-normal"
                                         style="justify-content: normal;">
                                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                            <h1
                                                class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ddd:text-white">
                                                فرم درخواست منو</h1>
                                            <p class="text-xs text-gray-500">پس از ثبت درخواست مشاوران ما در اسرع وقت با
                                                شما
                                                تماس خواهند گرفت.</p></div>
                                    </div>
                                    <div class="flex flex-col place-items-stretch items-stretch justify-normal"
                                         style="justify-content: normal;">
                                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                            <div><label for="name"
                                                        class="block mb-2 text-sm font-medium text-gray-900 ddd:text-white">
                                                    نام و نام خانوادگی شما
                                                </label>
                                                <input type="text" name="name" id="name" wire:model="name"
                                                       class="mb-2 text-sm font-medium bg-gray-50 border border-[#e5e7eb] text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-500 block w-full p-2.5"
                                                       required="" placeholder="">
                                            </div>
                                            <div>
                                                <label for="mobile"
                                                       class="block mb-2 text-sm font-medium text-gray-900 ddd:text-white">
                                                    شماره تماس
                                                </label>
                                                <input type="text" name="name" id="name" wire:model="phoneNumber"
                                                       class="mb-2 text-sm font-medium bg-gray-50 border border-[#e5e7eb] text-gray-900 sm:text-sm rounded-lg focus:ring-blue-700 focus:border-blue-500 block w-full p-2.5  flex-row text-left">
                                            </div>
                                            <div wire:click="submit"
                                                 class="text-[1rem] cursor-pointer whitespace-nowrap select-none w-full hover:bg-blue-700 font-bold py-2 px-4 rounded-lg justify-center text-center bg-primary text-white">
                                                ثبت درخواست
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            {{--<div class="">
                <div class="mx-10 border-t p-5">
                    <div class="flex flex-row place-items-center items-center justify-center gap-2" gap="2"
                         style="justify-content: center;">
                        <div class="text-typography/[.8]">میزبانی شده توسط</div>
                        <div class=""><a target="_blank" class="font-bold text-typography" href="https://mtserver.ir">MT
                                Server</a></div>
                    </div>
                </div>
            </div>--}}
        </div>

    </main>
</div>
