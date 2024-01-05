<div class="container mx-auto" dir="rtl">
    <style>
        #qr-code-loadding {
            width: 500px;
            display: none;
        }

        #hidden-qr-code {
            display: none;
        }
    </style>

    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <div id="hidden-qr-code"></div>
    <div class="">
        <div id="qr-code-loadding">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
            </svg>
        </div>
        <div id="qrcode" class="text-center items-center justify-center p-5">
        </div>
    </div>

    {{--<button id="btn-update-qr-code" class="">Update QR code</button>--}}
    <div class="text-center items-center justify-center">
        <button id="btn-download-qr-code" dir="rtl"
                class="border p-2 rounded-md
                inline-block mx-auto bg-blue-500 text-white ">
            دانلود
            QR code
        </button>

        <a dir="rtl" href="{{route('filament.cafeRestaurant.resources.tables.edit',1)}}"
           class="border p-2 rounded-md mt-2
            mx-auto text-blue-500 bg-white
            inline-block
            border-blue-500 text-center">
            بازگشت به پنل
        </a>
    </div>

    <script type="text/javascript">
        // window.onload = function () {
        let qrCodeEl = document.getElementById('qrcode');
        let qrCodeLoaddingEl = document.getElementById('qr-code-loadding');
        let hiddenQrCodeEl = document.getElementById('hidden-qr-code');
        let btnUpdateQrCodeEl = document.getElementById('btn-update-qr-code');
        let btnDownloadQrCodeEl = document.getElementById('btn-download-qr-code');

        let qrCode = new QRCode(document.getElementById("qrcode"), {
            text: "{{'https://menuma.online/q/'. $table->qrCode->slug}}",
            width: 500,
            height: 500,

        });

        let hiddenQrCode = new QRCode(document.getElementById("hidden-qr-code"), {
            text: "{{'https://menuma.online/q/'. $table->qrCode->slug}}",
            {{--text: "{{ route('units.check', ['code' => '$unit->code']) }}"--}}
            width: 1000,
            height: 1000,

        });


        {{--btnUpdateQrCodeEl.addEventListener('click', (e) => {--}}
        {{--    let xhttp = new XMLHttpRequest();--}}
        {{--    xhttp.onreadystatechange = function () {--}}
        {{--        if (this.readyState == 4 && this.status == 200) {--}}
        {{--            // document.getElementById("demo").innerHTML = this.responseText;--}}
        {{--            qrCode.makeCode(this.responseText);--}}
        {{--            hiddenQrCode.makeCode(this.responseText);--}}
        {{--            qrCodeEl.style.display = 'block';--}}
        {{--            qrCodeLoaddingEl.style.display = 'none';--}}
        {{--        }--}}
        {{--    };--}}
        {{--    xhttp.open("GET",--}}
        {{--        "",--}}
        {{--        --}}{{--            "{{ route('units.qr-codes.update-qr-code', ['unit' => '$unit->id']) }}",--}}
        {{--            true--}}
        {{--    );--}}
        {{--    qrCodeEl.style.display = 'none';--}}
        {{--    qrCodeLoaddingEl.style.display = 'block';--}}
        {{--    xhttp.send();--}}

        {{--});--}}

        btnDownloadQrCodeEl.addEventListener('click', (e) => {
            let imageBase64 = hiddenQrCodeEl.childNodes[1].src;

            let aEl = document.createElement("a");
            aEl.href = imageBase64;
            aEl.download = "qr-code-{{ $table->qrCode->id }}.png"; //File name Here
            aEl.click(); //Downloaded file
        });

    </script>

</div>
