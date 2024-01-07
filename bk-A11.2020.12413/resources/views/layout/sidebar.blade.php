<!-- sidenav  -->
<aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="">
        <img src="{{asset('./assets/img/logo-ct.png')}}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand" style="text-transform: uppercase;">{{Auth::user()->nama}}</span>
      </a>
    </div>
    
    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
          @if (Auth::user()->role->nama_role == 'admin')
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin-dashboard')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin-dokter')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dokter</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin-pasien')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Pasien</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin-poli')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Poliklinik</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin-obat')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Obat</span>
            </a>
          </li>
          @elseif (Auth::user()->role->nama_role == 'pasien')
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('pasien-dashboard')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('pasien-poliklinik')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Poliklinik</span>
            </a>
          </li>
          @elseif (Auth::user()->role->nama_role == 'dokter')
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('dokter-dashboard')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('dokter-jadwal-periksa')}}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Atur Jadwal Periksa</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('dokter-daftar-periksa') }}">
              
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Daftar Periksa</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('dokter-riwayat-periksa') }}">
             
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Riwayat Periksa</span>
            </a>
          </li>
          @endif

        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Halaman Akun</h6>
        </li>
        

        @auth
        <li class="mt-0.5 w-full">
          <form method="POST" action="{{ url('logout') }}">
            @csrf
            <button type="submit" class="hover:shadow-soft-2xl rounded py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
           
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Keluar</span>
          </button>
          </form>
        </li>
        @else

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/sign-in.html">
            
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Masuk</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/sign-up.html">
            
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Daftar</span>
          </a>
        </li>
        @endauth
      </ul>
    </div>
  </aside>

  <!-- end sidenav -->