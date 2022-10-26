@extends('layout.template')

@section('content')
    {{-- homeImage --}}
    <div class="flex flex-col md:flex-row items-center bg-primer border-t">
        <div class="w-full h-fit mx-auto">
            <div class="swiper mySwiper md:h-[500px]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide h-56 md:h-[500px] w-full relative">
                        <img class="object-fill" src="{{ asset('images/homePicture/pc.jpg') }}" alt="">
                        {{-- subtitle desktop --}}
                        <div class="p-8 max-w-md block absolute z-20 md:top-72 md:left-0 text-left">
                            <h1 class="text-sm md:text-3xl font-semibold text-white">Banyak Pilihan . . .</h1>
                            <p class="text-mainText text-sm md:text-lg">
                                Kami bekerja sama dengan beberapa perusahaan <span class="font-medium text-secondary">VGA</span> ternama, sehingga dapat menyesuaikan kebutuhan <span class="font-medium text-secondary">VGA</span> di setiap harinya . . .
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide h-56 md:h-[600px] w-full relative">
                        <img class="object-fill" src="{{ asset('images/homePicture/pc2.jpg') }}" alt="">
                        {{-- subtitle desktop --}}
                        <div class="p-8 max-w-md block absolute z-20 md:top-96 md:left-0 text-left">
                            <h1 class="text-sm md:text-3xl font-semibold text-white">Banyak Pilihan . . .</h1>
                            <p class="text-mainText text-sm md:text-lg">
                                Kami bekerja sama dengan beberapa perusahaan <span class="font-medium text-secondary">VGA</span> ternama, sehingga dapat menyesuaikan kebutuhan <span class="font-medium text-secondary">VGA</span> di setiap harinya . . .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <section class="mt-5 mx-auto container">
        <div class="px-5">
            <h1 class="text-2xl md:text-3xl text-center font-medium text-gray-800">SELAMAT DATANG</h1>
            <p class="text-center text-slate-600 text-md md:text-lg font-thin">Dapatkan VGA atau Komponen PC mu dengan harga terbaik!</p>
        </div>
        <div class="py-10 px-5">
            <div>
                {{-- produk kami --}}
                <div class="bg-tersier md:py-1">
                    <p class="font-semibold text-lg md:text-2xl text-slate-100 text-center align-middle">Produk Kami</p>
                </div>
                {{-- card section --}}
                <div class="border-2 border-slate-300 py-10">
                    <div class="grid xs:grid-rows-4 md:grid-cols-4 gap-y-10">
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 mx-auto w-fit">
                        {{-- <a href="#" class="px-4 py-2 text-white hover:bg-biru bg-blue-900 rounded-full">Lainnya . . .</a> --}}
                        <button class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full"><a href="#">Lainnya . . .</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-10 px-5">
            {{-- kategori --}}
            <div>
                <div class="bg-tersier md:py-1">
                    <p class="font-semibold text-lg md:text-2xl text-slate-100 text-center align-middle">Kategori</p>
                </div>
                {{-- card section --}}
                <div class="border-2 border-slate-300 py-10">
                    <div class="grid xs:grid-rows-4 md:grid-cols-4 gap-y-10">
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc2.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc2.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc2.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                        <div class=" h-fit shadow-2xl w-4/5 mx-auto rounded-md transform transition duration-300 hover:scale-110">
                            {{-- card image --}}
                            <img class="h-48 w-full object-cover rounded-t-md" src="{{ asset('images/homePicture/pc2.jpg') }}" alt="">
                            <div class="m-5">
                                {{-- card name --}}
                                <p class="text-lg font-medium">Lorem</p>
                                {{-- card desc --}}
                                <p class="text-base font-light md:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                                </p>
                                {{-- card button --}}
                                <div class="my-5">
                                    <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 mx-auto w-fit">
                        {{-- <a href="#" class="px-4 py-2 text-white hover:bg-biru bg-blue-900 rounded-full">Lainnya . . .</a> --}}
                        <button class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full"><a href="#">Lainnya . . .</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- about --}}
    <div class="mt-16">
        <h1 class="text-center font-bold text-3xl text-gray-800">Tentang Kami</h1>
    </div>
    <div class="w-full h-fit grid xs:grid-rows-2 lg:p-32 md:grid-cols-2 py-16">
        <div class="p-14 text-right relative">
            <span class="text-xl font-medium text-gray-800">VGAPEDIA</span>
            <p class="text-base font-light md:text-lg">
                Kami adalah toko online yang berfokus pada penjualan VGA(Video Graphics Adaptor) dan part-part lainnya yang berhubungan dengan komputer. <span class="block leading-relaxed font-medium">Mari, wujudkan komputer impian mu dengan kami !!</span>
            </p>
            <svg class="w-8/12 sm:w-1/2 md:w-1/2 absolute lg:w-64 -z-10 -top-10 right-0" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#5dcab5" d="M49.2,-69C62.4,-58.2,70.7,-41.9,71.2,-26.4C71.7,-11,64.3,3.7,60.3,20.8C56.4,37.8,56,57.1,46.5,70.1C37,83,18.5,89.5,4.3,83.6C-10,77.7,-19.9,59.5,-32.8,47.6C-45.7,35.8,-61.4,30.4,-71.5,18.7C-81.6,6.9,-86.1,-11.2,-78.9,-23.3C-71.7,-35.3,-53,-41.2,-37.9,-51.4C-22.8,-61.6,-11.4,-76,3.3,-80.6C18,-85.1,36,-79.8,49.2,-69Z" transform="translate(100 100)" />
            </svg>
        </div>
        <div class="p-14 text-left relative">
            <span class="text-xl font-medium text-gray-800">Follow Kami !</span>
            <p class="text-base font-light md:text-lg">
                follow kami di sosial media
            </p>
            <span class="flex space-x-5">
                <svg class="w-2/12 sm:w-1/12 lg:w-10" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>vgapedia.offc</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <svg class="w-2/12 sm:w-1/12 lg:w-10" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>vgapedia_</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                <svg class="w-2/12 sm:w-1/12 lg:w-10" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>vgapediaoffc_</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
            </span>
            <svg class="w-8/12 sm:w-1/2 md:w-1/2 absolute lg:w-64 -z-10 -top-20 left-0" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#5dcab5" d="M39.7,-48.8C48.7,-48.1,51.4,-32.8,55.6,-18.4C59.8,-4,65.5,9.6,63.2,21.8C61,34,50.8,45,38.9,57.4C27.1,69.9,13.5,84,-0.4,84.6C-14.4,85.1,-28.7,72.2,-38.3,59C-47.9,45.7,-52.7,32.2,-59.9,17.6C-67.2,3.1,-76.9,-12.5,-72.2,-22.3C-67.4,-32.2,-48.3,-36.2,-33.9,-35.1C-19.5,-34,-9.7,-27.8,2.8,-31.7C15.3,-35.5,30.7,-49.4,39.7,-48.8Z" transform="translate(100 100)" />
            </svg>
        </div>
    </div>
@endsection