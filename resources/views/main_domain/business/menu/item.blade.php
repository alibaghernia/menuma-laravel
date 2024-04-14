<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--        <meta name="viewport" content="width=device-width">--}}
    {{--  todo  --}}
    <title>{{$business->name}} - منو - منوما</title>
    <meta name="next-head-count" content="3">
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

    @vite('resources/css/app.css')
</head>
<body
    x-data="{scrolled : false}"
    class="min-h-screen bg-background">
<div id="">
    <main class="z-10 ">
        <div class="bg-background min-h-screen">
            <x-business.header :business="$business" position="fixed"/>

            <div
                class="fixed inset-0 bg-black/[.2] z-[51] transition-all duration-[.2s] opacity-0 pointer-events-none">
            </div>
            {{--            todo check--}}
        </div>
    </main>

</div>

@vite('resources/js/app.js')
<script>

</script>
</body>
</html>
