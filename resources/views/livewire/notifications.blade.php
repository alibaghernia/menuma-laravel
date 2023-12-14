@php
//    use Filament\Support\Enums\Alignment;
    use Filament\Support\Enums\VerticalAlignment;
@endphp

<div>
    <div
{{--        @class([--}}
{{--            'fi-no pointer-events-none fixed inset-4 z-50 mx-auto flex gap-3',--}}
{{--            match ('static::$alignment') {--}}
{{--                'start', 'left' => 'items-start',--}}
{{--               'center' => 'items-center',--}}
{{--                'end', 'right' => 'items-end',--}}
{{--              'static::$alignment' => 'items-end',--}}
{{--            },--}}
{{--            match ('static::$verticalAlignment') {--}}
{{--                'start' => 'flex-col-reverse justify-end',--}}
{{--                VerticalAlignment::End => 'flex-col justify-end',--}}
{{--                VerticalAlignment::Center => 'flex-col justify-center',--}}
{{--                'static::$alignment' => 'flex-col justify-center'--}}
{{--            },--}}
{{--        ])--}}
        role="status"
    >
        @foreach ($notifications as $notification)
            {{ $notification }}
        @endforeach
    </div>

    {{--    @if ($broadcastChannel = $this->getBroadcastChannel())--}}
    {{--        <x-filament-notifications::echo :channel="$broadcastChannel" />--}}
    {{--    @endif--}}
</div>
