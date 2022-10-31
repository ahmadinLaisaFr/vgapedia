@extends('layout.template')
@section('content')
    <div class="w-full h-fit">
        <div class="bg-tersier">
            <div class="px-9 py-2 md:px-10 md:flex md:justify-between items-center">
                <div>
                    <h1 class="text-2xl font-semibold text-white">Semua Kategori</h1>
                </div>
            </div>
        </div>
        <div class="p-9 md:p-14 grid xs:grid-cols-1 md:grid-cols-4 gap-10">
                {{-- card section --}}               
                    {{-- card --}}
                    @foreach ($kategoris as $kategori)
                    <div class="h-fit shadow-xl w-full mx-auto transform transition duration-300 hover:scale-110">
                        {{-- card image --}}
                        <a class="" href="{{ route('kategori.detail', ['kategori' => $kategori->slug]) }}"><img class="h-48 w-full object-fill" src="{{ asset('images/upload/kategori') }}/{{ $kategori->image }}" alt=""></a>
                        <div class="m-5 border-t border-tersier">
                            {{-- card name --}}
                            <p class="text-lg font-medium">{{ $kategori->name }}</p>
                            {{-- card button --}}
                            <div class="my-5">
                                <a class="px-4 py-2 text-white hover:bg-primer-gelap bg-primer rounded-full" href="{{ route('kategori.detail', ['kategori' => $kategori->slug]) }}">Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection