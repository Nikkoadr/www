<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - SMK Muhammadiyah Kandanghaur</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="antialiased bg-gray-100 font-sans">

    <div class="min-h-screen flex items-center justify-center px-5">

        {{-- Wrapper --}}
        <div class="relative w-full max-w-sm">

            {{-- Cyan Shape Behind Card --}}
            <div
                class="absolute
                       inset-0
                       bg-cyan-500
                       rounded-2xl
                       rotate-[6deg]
                       translate-x-1
                       translate-y-1">
            </div>

            {{-- Login Card --}}
            <div
                class="relative
                       bg-white
                       rounded-2xl
                       shadow-lg
                       shadow-gray-300/60
                       px-10
                       py-10">

                {{-- Logo --}}
                <div class="flex justify-center mb-5">

                    <img
                        src="{{ asset('assets/img/logo.png') }}"
                        alt="Logo SMK Muhammadiyah Kandanghaur"
                        class="w-14 h-14 object-contain">

                </div>

                {{-- Title --}}
                <h1 class="text-center text-2xl font-semibold text-gray-900 mb-7">
                    Login
                </h1>

                {{-- Form --}}
                <form action="{{ route('login') }}" method="POST">

                    @csrf

                    {{-- Email --}}
                    <div class="mb-6">

                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="Masukan Email"

                            class="w-full
                                   px-3
                                   py-2.5
                                   bg-transparent
                                   border-0
                                   border-b-2
                                   @error('email')
                                       border-red-400
                                   @else
                                       border-gray-300
                                   @enderror
                                   text-sm
                                   text-gray-800
                                   placeholder-gray-400
                                   outline-none
                                   focus:border-cyan-500
                                   transition-colors
                                   duration-200">

                        @error('email')
                            <p class="mt-1.5 text-xs text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Password --}}
                    <div class="mb-4">

                        <input
                            type="password"
                            name="password"
                            id="password"
                            required
                            autocomplete="current-password"
                            placeholder="Masukan Password"

                            class="w-full
                                   px-3
                                   py-2.5
                                   bg-transparent
                                   border-0
                                   border-b-2
                                   @error('password')
                                       border-red-400
                                   @else
                                       border-gray-300
                                   @enderror
                                   text-sm
                                   text-gray-800
                                   placeholder-gray-400
                                   outline-none
                                   focus:border-cyan-500
                                   transition-colors
                                   duration-200">

                        @error('password')
                            <p class="mt-1.5 text-xs text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Remember Me / Forgot Password
                         Tidak ditampilkan agar persis seperti referensi --}}

                    {{-- Login Button --}}
                    <button
                        type="submit"

                        class="w-full
                               mt-2
                               bg-cyan-500
                               hover:bg-cyan-600
                               text-white
                               text-sm
                               font-medium
                               py-3
                               rounded-md
                               transition-colors
                               duration-200">

                        Login

                    </button>

                </form>

                {{-- Register --}}
                @if (Route::has('register'))

                    <p class="text-center text-sm mt-5 text-gray-900">

                        Belum punya akun?

                        <a
                            href="{{ route('register') }}"
                            class="text-cyan-600 hover:text-cyan-700
                                   hover:underline
                                   transition-colors">

                            Daftar di sini

                        </a>

                    </p>

                @endif

                {{-- Back Home --}}
                <div class="mt-5 text-center">

                    <a
                        href="/"

                        class="text-sm
                               text-gray-500
                               hover:text-cyan-600
                               transition-colors">

                        ← Kembali ke Home

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>