{{-- flex items-center --}}
<div class="w-full h-fit bg-primer p-14">
    {{-- kontak & alamat --}}
    <div>
        <div class="mb-10">
            <span class="block">
                <i class="fa fa-mobile-screen text-gray-100 text-3xl"></i>
            </span>
            <span class="text-mainText font-extralight text-md md:text-lg">
                +6289523574191
                <span class="block">vgapedia@gmail.com</span>
            </span>
        </div>
        <div class="mb-10">
            <span class="block">
                <i class="fa fa-house text-gray-100 text-3xl"></i>
            </span>
            <span class="text-mainText font-extralight text-md md:text-lg">
                SK Business Centre Building A 5th Floor
                <span class="block">Jl. Stadion 03 Sidoarjo 61215</span>
            </span>
        </div>
    </div>
    {{-- konten footer --}}
    <div class="grid xs:grid-rows-3 md:grid-cols-3 text-md font-light md:text-lg text-gray-200 space-y-10 md:space-y-0">
        <div class="mx-auto w-full">
            <p class="text-xl font-medium mb-5">Pembayaran kami</p>
            <div class="grid grid-cols-3">
                <div>
                    <i><img class="w-14 lg:w-20 my-5" src="{{ asset('images/paymentMethod/bri.png') }}" alt=""></i>
                    <i><img class="w-14 lg:w-20 my-5" src="{{ asset('images/paymentMethod/bca.png') }}" alt=""></i>
                    <i><img class="w-14 lg:w-20 my-5" src="{{ asset('images/paymentMethod/paypal.png') }}" alt=""></i>
                </div>
                <div>
                    <i><img class="w-14 lg:w-20 my-5" src="{{ asset('images/paymentMethod/dana.png') }}" alt=""></i>
                    <i><img class="w-14 lg:w-20 my-5" src="{{ asset('images/paymentMethod/mastercard.png') }}" alt=""></i>
                </div>
            </div>
        </div>
        <div class="mx-auto w-full">
            <p class="text-xl font-medium mb-5">Merk Ternama</p>
            <div class="grid grid-rows-3 items-center text-mainText gap-x-2">
                <a class="w-fit" href="#">Gigabyte</a>
                <a class="w-fit" href="#">MSI</a>
                <a class="w-fit" href="#">Radeon RX Series</a>
                <a class="w-fit" href="#">Colorful</a>
                <a class="w-fit" href="#">Asus</a>
                <a class="w-fit" href="#">Nvidia</a>
            </div>
        </div>
        <div class="mx-auto w-full">
            <p class="text-xl font-medium mb-5">Jasa Pengiriman</p>
            <div class="grid grid-cols-3">
                <div>
                    <i><img class="w-20 lg:w-24 my-5" src="{{ asset('images/delivery/SiCepat.png') }}" alt=""></i>
                    <i><img class="w-20 lg:w-24 my-5" src="{{ asset('images/delivery/jne.png') }}" alt=""></i>
                    <i><img class="w-20 lg:w-24 my-5" src="{{ asset('images/delivery/jnt.png') }}" alt=""></i>
                </div>
                <div>
                    <i><img class="w-20 lg:w-24 my-5" src="{{ asset('images/delivery/lionparcel.png') }}" alt=""></i>
                </div>
            </div>
        </div>
    </div>
    {{-- nama perusahaan --}}
</div>
<div class="px-14 py-5 text-slate-100 font-thin text-center md:text-left md:text-xl bg-primer border-t border-slate-200">
    PT. VGA Kita Bersama
</div>