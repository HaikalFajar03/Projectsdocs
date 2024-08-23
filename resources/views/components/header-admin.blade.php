<div class="bg-[#22272E] py-5 px-10 border-b border-slate-600 sticky top-0 z-50 flex justify-between items-center">
    @php
    $path = request()->path();
    $userName = Auth::user()->name;
    @endphp
    <h1 class="text-lg text-white">
        @if ($path == 'admin-dashboard')
        Dashboard
        @elseif ($path == 'admin-alluser')
        Dashboard / Users
        @elseif ($path == 'admin-profile')
        Dashboard / Profile
        @elseif ($path == 'admin-jenis')
        Dashboard / Jenis Space
        @elseif ($path == 'admin/spaces')
        Dashboard / List Space
        @endif
    </h1>
    <div class="flex items-center gap-4">
        <span class="text-white">
            {{ $userName }}
        </span>
        <form action="{{ route('logout') }}" method="post" class="inline">
            @csrf
            @method('POST')
            <button
                class="group rounded-lg overflow-hidden bg-red-600 hover:bg-red-700 relative flex items-center gap-2.5 px-2 py-2 font-medium text-white duration-300 ease-in-out"
                type="submit">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!-- Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path fill="currentColor" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                </svg>
                Logout
            </button>
        </form>
    </div>
</div>
