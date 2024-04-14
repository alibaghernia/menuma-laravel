<div x-cloak>
    @if($isRegistered)
        <div class="mx-auto w-full text-center">
            اطلاعات شما ثبت شد.
            <br>
            <a class=" inline-block mt-5 py-2 px-2.5 bg-blue-500 text-white rounded-lg shadow
             hover:bg-blue-600"
            href="{{domain_route('profile',['slug'=>$business->slug])}}">
                رفتن به صفحه اصلی
            </a>
        </div>
    @else
        <form wire:submit="submit">
            {{ $this->form }}
            <button type="submit"
                    class="w-full mt-[1.5rem] bg-blue-600 hover:bg-blue-500 py-1.5 rounded-lg text-white">
                ثبت نام
            </button>
        </form>

        <x-filament-actions::modals/>
    @endif
</div>
