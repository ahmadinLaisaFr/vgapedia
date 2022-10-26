@extends('layout.template')
@section('content')
    <div class="w-full h-fit">
        <div class="bg-tersier">
            <div class="px-9 py-2 md:px-10 md:flex md:justify-between items-center">
                <div class="">
                    <h1 class="text-2xl font-semibold text-white align-middle">{{ isset($kategori_name) ? $kategori_name :'Semua Produk' }}</h1>
                </div>
            </div>
        </div>
        <div class="px-9 pt-2 text-lg md:text-xl">
            <a href="/" class="font-thin text-mainText align-middle">Home</a>
            <span class="font-thin text-mainText align-middle">/</span>
            <a href="{{ isset($kategori_name) ? '' : '/produk' }}" class="font-semibold text-tersier align-middle">{{ isset($kategori_name) ? $kategori_name :'Semua Produk' }}</a>
        </div>
        <div class="p-9 md:p-14 grid xs:grid-cols-1 md:grid-cols-4 gap-10">
            {{-- card section --}}               
                {{-- card --}}
                @foreach ($products as $product)
                <div class="h-fit shadow-2xl w-full mx-auto transform transition duration-300 hover:scale-110">
                    {{-- card image --}}
                    <img class="h-48 w-full object-contain" src="{{ asset('images/upload/produk') }}/{{ $product->image }}" alt="">
                    <div class="m-5 border-t border-tersier h-32 overflow-auto">
                        {{-- card name --}}
                        <p class="text-lg font-medium">{{ $product->name }}</p>
                        {{-- card desc --}}
                        <p class="text-base font-light md:text-lg">
                            {{ $product->short_description }}
                        </p>
                    </div>
                    <div class="m-5">
                        <span class=" font-medium text-xl">Rp. {{ $product->regular_price }}</span>
                    </div>
                    <div class="m-5">
                        <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="">Detail</a>
                    </div>
                    {{-- card button --}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection