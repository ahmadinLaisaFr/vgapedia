<nav class="bg-primer p-3 w-full">
    <div>
    {{-- navigasi mobile --}}
        <div class="flex flex-col md:flex-row justify-between items-center px-3 space-y-3 md:hidden">
            <div class="flex items-center w-full justify-between">
                <h1 class="font-bold bg-gradient-to-tr from-secondary to-tersier text-4xl text-transparent bg-clip-text"><a href="/">Tech.Kit</a></h1>
                <div class="dropdown">
                    <button class="dropbtn">
                        <span><i class="fa fa-bars text-white text-3xl"></i></span>
                    </button>
                    <div class="dropdown-content -left-[130px]">
                        <div class="border-b border-tersier border-opacity-60">
                            <a href="{{ route('kategori') }}">Kategori</a>
                            <a href="{{ route('produk') }}">Produk</a>
                        </div>
                        <div>
                            <a href="#">Login</a>
                            <a href="#">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <form action="" method="get" class="w-full relative">
                    <input type="text" name="search" placeholder="search here ..." class="rounded-md p-2 w-full focus:outline-1 focus:outline-secondary-gelap">
                    <button type="submit" class="bg-secondary-gelap hover:bg-secondary rounded-r-md p-2 px-5 absolute right-0"><i class="fa fa-search text-white text-base"></i></button>
                </form>
            </div>
        </div>
    {{-- navigasi desktop --}}
        <div class="hidden md:flex flex-col md:flex-row justify-between items-center px-5 space-y-3 md:space-y-0">
            <div class="">
                <h1 class="text-4xl font-bold bg-gradient-to-tr from-secondary to-tersier text-transparent bg-clip-text"><a href="/">Tech.Kit</a></h1>
            </div>
            <div class="w-96">
                <form action="" method="get" class="w-full relative">
                    <input type="text" name="search" placeholder="search here ..." class="rounded-md p-2 w-full focus:outline-1 focus:outline-secondary-gelap">
                    <button type="submit" class="bg-secondary-gelap hover:bg-secondary rounded-r-md p-2 px-5 absolute right-0"><i class="fa fa-search text-white text-base"></i></button>
                </form>
            </div>
            <div class="text-white hidden md:block">
                <ul class="space-x-5">
                    {{-- <li class="inline"><a href="#" class="hover:text-slate-500">Home</a></li>
                    <li class="inline"><a href="#" class="hover:text-slate-500">About</a></li>
                    <li class="inline"><a href="#" class="hover:text-slate-500">Contact</a></li> --}}
                    <li class="inline"><a href="#" class="hover:text-slate-500">Login</a></li>
                    <li class="inline"><a href="#" class="hover:text-slate-500">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="bg-gray-900 py-2 hidden md:block">
    <ul class=" text-slate-100 text-xl font-semibold text-left align-middle px-10">
        <li class="inline"><a href="{{ route('produk') }}" class="hover:text-slate-300 border-x px-2">Produk</a></li>
        <li class="inline"><a href="{{ route('kategori') }}" class="hover:text-slate-300 border-x px-2">Kategori</a></li>
    </ul>
</div>