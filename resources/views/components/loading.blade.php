<div
    x-data x-init="
    setTimeout(()=>{$el.remove()}, 400)"
    class="fixed inset-0 bg-white z-[2009] ">
    <img alt="Loading" fetchpriority="high" width="150" height="150"
         decoding="async" data-nimg="1"
         class="mx-auto absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%]"
         style="color:transparent"
         {{--     todo    --}}
         {{--         srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcoffee_animation.26ba3a55.gif&amp;w=256&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcoffee_animation.26ba3a55.gif&amp;w=384&amp;q=75 2x"--}}
         src="/img/coffee-animation.gif">
</div>
