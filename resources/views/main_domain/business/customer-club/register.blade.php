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
