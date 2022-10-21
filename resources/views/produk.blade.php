@extends('layout.template')
@section('content')
    <div class="w-full h-fit">
        <div class="bg-tersier">
            <div class="px-9 py-2 md:px-10 md:flex md:justify-between items-center">
                <div>
                    <h1 class="text-2xl font-semibold text-white">Semua Produk</h1>
                </div>
                <div>
                    <form action="" method="get" class="md:flex md:gap-x-10">
                        <div>
                            <span class="font-medium text-white block">Memory Type</span>
                            <select name="memType" id="memTyper" class="border-[1px] rounded-md focus:border-white border-primer">
                                <option value="GDDR3">GDDR3</option>
                                <option value="GDDR4">GDDR4</option>
                                <option value="GDDR5">GDDR5</option>
                            </select>
                        </div>
                        <div>
                            <span class="font-medium text-white block">Memory Capacity</span>
                            <p class="inline text-white">Min </p><select name="memCapMin" id="memCapMin" class="border-[1px] rounded-md focus:border-white border-primer">
                                <option value="1GB">1GB</option>
                                <option value="2GB">2GB</option>
                                <option value="4GB">4GB</option>
                                <option value="6GB">6GB</option>
                                <option value="8GB">8GB</option>
                            </select>
                            <p class="inline text-white">Max </p><select name="memCapMax" id="memCapMax" class="border-[1px] rounded-md focus:border-white border-primer">
                                <option value="1GB">1GB</option>
                                <option value="2GB">2GB</option>
                                <option value="4GB">4GB</option>
                                <option value="6GB">6GB</option>
                                <option value="8GB">8GB</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" name="filter" value="filter" class="px-4 py-1 rounded-md bg-primer hover:bg-primer-gelap text-white mt-2"><i class="fas fa-filter text-white"></i> Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="p-9 md:p-14 grid xs:grid-cols-1 md:grid-cols-4 gap-10">
                {{-- card section --}}               
                    {{-- card --}}
                    @foreach ($vgas as $vga)
                    <div class="h-fit shadow-2xl w-full mx-auto transform transition duration-300 hover:scale-110">
                        {{-- card image --}}
                        <img class="h-48 w-full object-contain rounded-t-md" src="{{ asset('images/upload/vga') }}/{{ $vga->image }}" alt="">
                        <div class="m-5 border-t border-tersier">
                            {{-- card name --}}
                            <p class="text-lg font-medium">{{ $vga->name }}</p>
                            {{-- card desc --}}
                            <p class="text-base font-light md:text-lg">
                                <span class="block">Core Frequency : {{ $vga->core_freq }} MHz</span>
                                <span class="block">Memory Frequency : {{ $vga->memory_freq }}MHz</span>
                                <span class="block">Memory Capacity : {{ $vga->memory_cap }}</span>
                                <span class="block">Memory Type : {{ $vga->memory_type }}</span>
                            </p>
                            {{-- card button --}}
                            <div class="my-5">
                                <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="">Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection