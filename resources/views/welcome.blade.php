<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">
    <link
        rel="icon"
        type="image/png"
        href="<?= htmlspecialchars($schoolLogo) ?>">
    </link>
    <title>
        <?= htmlspecialchars($schoolName) ?>
        —
        <?= htmlspecialchars($tagline) ?>
    </title>


    <meta
        name="description"
        content="<?= htmlspecialchars($schoolName) ?> — <?= htmlspecialchars($tagline) ?>">


    <meta
        name="theme-color"
        content="#075985">


    <!-- Tailwind CSS -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Animate.css -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />


    <!-- Tailwind Configuration -->

    <script>
        tailwind.config = {

            theme: {

                extend: {

                    fontFamily: {

                        sans: [
                            'Inter',
                            'ui-sans-serif',
                            'system-ui',
                            'sans-serif'
                        ],

                        display: [
                            'Plus Jakarta Sans',
                            'Inter',
                            'sans-serif'
                        ]

                    },


                    colors: {

                        school: {

                            950: '#031B3A',
                            900: '#052B5C',
                            800: '#063A78',
                            700: '#075985',
                            600: '#0877B9',
                            500: '#0EA5E9',
                            400: '#38BDF8',
                            300: '#7DD3FC',
                            200: '#BAE6FD',
                            100: '#E0F2FE',
                            50: '#F0F9FF'

                        }

                    },


                    boxShadow: {

                        soft: '0 20px 60px rgba(3, 27, 58, .10)',

                        card: '0 12px 40px rgba(3, 27, 58, .08)',

                        blue: '0 20px 60px rgba(14, 165, 233, .25)'

                    },


                    animation: {

                        float: 'float 6s ease-in-out infinite',

                        marquee: 'marquee 30s linear infinite',

                        pulseSlow: 'pulseSlow 3s ease-in-out infinite'

                    },


                    keyframes: {

                        float: {

                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },

                            '50%': {
                                transform: 'translateY(-12px)'
                            }

                        },

                        marquee: {

                            '0%': {
                                transform: 'translateX(0)'
                            },

                            '100%': {
                                transform: 'translateX(-50%)'
                            }

                        },

                        pulseSlow: {

                            '0%, 100%': {
                                opacity: '.5'
                            },

                            '50%': {
                                opacity: '1'
                            }

                        }

                    }

                }

            }

        }
    </script>


    <!-- Google Fonts -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">


    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }


        /* HERO */

        .hero-background {

            background-image:

                linear-gradient(115deg,
                    rgba(3, 27, 58, .97),
                    rgba(5, 58, 120, .88),
                    rgba(8, 119, 185, .72)),

                url('assets/img/hero1.png'
                );

            background-size: cover;

            background-position: center;

        }


        /* GRID */

        .grid-background {

            background-image:

                linear-gradient(rgba(14, 165, 233, .08) 1px,
                    transparent 1px),

                linear-gradient(90deg,
                    rgba(14, 165, 233, .08) 1px,
                    transparent 1px);

            background-size: 50px 50px;

        }


        /* TEXT GRADIENT */

        .gradient-text {

            background:
                linear-gradient(135deg,
                    #7DD3FC,
                    #E0F2FE);

            -webkit-background-clip: text;

            background-clip: text;

            color: transparent;

        }


        /* GLASS */

        .glass {

            background:
                rgba(255, 255, 255, .08);

            border:
                1px solid rgba(255, 255, 255, .15);

            backdrop-filter:
                blur(18px);

        }


        /* SELECTION */

        ::selection {

            background: #0EA5E9;

            color: white;

        }


        /* SCROLLBAR */

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {

            background:
                #0EA5E9;

            border-radius:
                999px;

        }


        /* Animasi dengan kelas animate.css */
        .animate-scroll {
            opacity: 0;
        }

        .animate-scroll.animate__animated {
            opacity: 1;
        }

        /* Animasi untuk bagian atas (langsung aktif) */
        .animate-hero {
            animation: fadeInUp 0.8s ease both;
        }

        .animate-hero-delay-1 {
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        .animate-hero-delay-2 {
            animation: fadeInUp 0.8s ease 0.4s both;
        }

        .animate-hero-delay-3 {
            animation: fadeInUp 0.8s ease 0.6s both;
        }
    </style>

</head>


<body
    class="
        bg-white
        text-slate-900
        antialiased
    ">


    <!-- =========================================================
     NAVBAR
========================================================= -->

    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <nav>
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="h-24 flex items-center justify-between">

                    <!-- LOGO -->
                    <a href="#home" class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center shadow-lg overflow-hidden">
                            <img src="{{ $schoolLogo ?? asset('images/default-logo.png') }}" alt="Logo {{ $schoolName ?? 'Sekolah' }}" class="w-10 h-10 object-contain">
                        </div>
                        <div class="hidden sm:block">
                            <div class="text-white font-extrabold text-sm tracking-tight">SMK MUHAMMADIYAH</div>
                            <div class="text-white/50 text-[10px] tracking-[.25em]">KANDANGHAUR</div>
                        </div>
                    </a>

                    <!-- DESKTOP MENU -->
                    <div class="hidden lg:flex items-center gap-8">
                        <a href="#home" class="text-sm text-white/75 hover:text-white transition">Beranda</a>
                        <a href="#profil" class="text-sm text-white/75 hover:text-white transition">Profil</a>
                        <a href="#keahlian" class="text-sm text-white/75 hover:text-white transition">Keahlian</a>
                        <a href="#fasilitas" class="text-sm text-white/75 hover:text-white transition">Fasilitas</a>
                        <a href="#berita" class="text-sm text-white/75 hover:text-white transition">Berita</a>
                        <a href="#kontak" class="text-sm text-white/75 hover:text-white transition">Kontak</a>
                    
                        <a href="{{ $pcmbUrl ?? '#' }}" class="text-sm text-white/75 hover:text-white transition">PCMB</a>
                        <a href="{{ $bkkUrl ?? '#' }}" class="text-sm text-white/75 hover:text-white transition">BKK</a>
                        <a href="{{ $tracerUrl ?? '#' }}" class="text-sm text-white/75 hover:text-white transition">Tracer</a>

                        <!-- AUTHENTICATION (Desktop) -->
                        @if (Route::has('login'))
                            <div class="flex items-center space-x-4">
                                @auth
                                    <a href="{{ url('/home') }}" class="px-5 py-2.5 rounded-full bg-white text-school-900 font-bold text-sm hover:bg-school-50 transition shadow-lg">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-full bg-white text-school-900 font-bold text-sm hover:bg-school-50 transition shadow-lg">
                                        Log in
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full bg-white text-school-900 font-bold text-sm hover:bg-school-50 transition shadow-lg">
                                            Daftar
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>

                    <!-- MOBILE BUTTON -->
                    <button id="mobileMenuButton" type="button" class="lg:hidden w-11 h-11 rounded-xl glass text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- MOBILE MENU -->
            <div id="mobileMenu" class="hidden lg:hidden mx-5 mb-4 rounded-2xl bg-school-950 border border-white/10 p-4 shadow-2xl">
                <div class="flex flex-col gap-1">
                    <a href="#home" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">Beranda</a>
                    <a href="#profil" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">Profil</a>
                    <a href="#keahlian" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">Program Keahlian</a>
                    <a href="#fasilitas" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">Fasilitas</a>
                    <a href="#berita" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">Berita</a>
                    <a href="#kontak" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">Kontak</a>
                    <a href="{{ $pcmbUrl ?? '#' }}" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition" target="_blank" >PCMB</a>
                    <a href="{{ $bkkUrl ?? '#' }}" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition" target="_blank" >BKK</a>
                    <a href="{{ $tracerUrl ?? '#' }}" class="px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">Tracer</a>

                    <!-- AUTHENTICATION (Mobile) -->
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="mt-2 text-center px-4 py-3 rounded-xl bg-white text-school-900 font-bold hover:bg-school-50 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="mt-2 text-center px-4 py-3 rounded-xl bg-white text-school-900 font-bold hover:bg-school-50 transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="mt-2 text-center px-4 py-3 rounded-xl bg-white text-school-900 font-bold hover:bg-school-50 transition">Daftar</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </header>



    <!-- =========================================================
     HERO (ANIMASI LANGSUNG AKTIF)
========================================================= -->

    <section
        id="home"
        class="
        hero-background
        min-h-screen
        relative
        overflow-hidden
        flex
        items-center
    ">


        <!-- GRID -->

        <div
            class="
            absolute
            inset-0
            grid-background
            opacity-30
        "></div>


        <!-- GLOW -->

        <div
            class="
            absolute
            top-1/4
            right-[-150px]
            w-[500px]
            h-[500px]
            rounded-full
            bg-school-400/20
            blur-[100px]
        "></div>


        <div
            class="
            absolute
            bottom-[-150px]
            left-[-150px]
            w-[500px]
            h-[500px]
            rounded-full
            bg-blue-400/20
            blur-[100px]
        "></div>


        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
            pt-32
            pb-20
            w-full
            relative
        ">

            <div
                class="
                grid
                lg:grid-cols-12
                gap-12
                items-center
            ">


                <!-- HERO LEFT -->

                <div class="lg:col-span-8 animate-hero">

                    <h1
                        class="
                        mt-7
                        text-5xl
                        sm:text-6xl
                        lg:text-8xl
                        font-extrabold
                        leading-[.95]
                        tracking-[-.055em]
                        text-white
                    ">

                        Sekolah

                        <span class="block gradient-text">

                            Pusat Keunggulan.

                        </span>

                    </h1>


                    <p
                        class="
                        mt-7
                        max-w-2xl
                        text-lg
                        lg:text-xl
                        leading-8
                        text-white/65
                    ">

                        <?= htmlspecialchars($schoolName) ?>
                        hadir untuk membangun generasi yang
                        berakhlak mulia, terampil, berprestasi,
                        dan siap menghadapi dunia kerja maupun
                        pendidikan masa depan.

                    </p>


                    <div
                        class="
                        mt-9
                        flex
                        flex-wrap
                        gap-4
                    ">


                        <a
                            href="<?= htmlspecialchars($pcmbUrl) ?>"
                            target="_blank"
                            class="
                            inline-flex
                            items-center
                            gap-3
                            px-7
                            py-4
                            rounded-full
                            bg-white
                            text-school-900
                            font-extrabold
                            shadow-blue
                            hover:-translate-y-1
                            transition
                        ">

                            Daftar PCMB

                            <svg
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 12h14m-6-6 6 6-6 6" />

                            </svg>

                        </a>


                        <a
                            href="#profil"
                            class="
                            inline-flex
                            items-center
                            gap-3
                            px-7
                            py-4
                            rounded-full
                            bg-white/10
                            border
                            border-white/20
                            text-white
                            font-semibold
                            hover:bg-white/15
                            transition
                        ">

                            Kenali Sekolah Kami

                        </a>

                    </div>

                </div>


                <!-- HERO CARD -->

                <div class="lg:col-span-4 animate-hero-delay-1">

                    <div
                        class="
                        glass
                        rounded-[2rem]
                        p-7
                        animate-float
                    ">

                        <div
                            class="
                            text-white/45
                            text-xs
                            uppercase
                            tracking-[.2em]
                            font-bold
                        ">

                            Berdiri Sejak

                        </div>


                        <div
                            class="
                            mt-1
                            text-6xl
                            font-extrabold
                            text-white
                        ">

                            1997

                        </div>


                        <div
                            class="
                            mt-6
                            h-px
                            bg-white/10
                        "></div>


                        <div
                            class="
                            mt-6
                            grid
                            grid-cols-2
                            gap-5
                        ">

                            <div>

                                <div
                                    class="
                                    text-3xl
                                    font-extrabold
                                    text-sky-300
                                ">

                                    6

                                </div>


                                <div
                                    class="
                                    mt-1
                                    text-xs
                                    text-white/45
                                ">

                                    Konsentrasi Keahlian

                                </div>

                            </div>


                            <div>

                                <div
                                    class="
                                    text-3xl
                                    font-extrabold
                                    text-sky-300
                                ">

                                    25+

                                </div>


                                <div
                                    class="
                                    mt-1
                                    text-xs
                                    text-white/45
                                ">

                                    Tahun Pengalaman

                                </div>

                            </div>

                        </div>


                        <div
                            class="
                            mt-7
                            text-sm
                            leading-6
                            text-white/45
                        ">

                            <?= htmlspecialchars($tagline) ?>.

                        </div>

                    </div>

                </div>

            </div>


            <!-- HERO MARQUEE -->

            <div
                class="
                mt-20
                overflow-hidden
                border-y
                border-white/10
                animate-hero-delay-2
            ">

                <div
                    class="
                    flex
                    whitespace-nowrap
                    animate-marquee
                    py-5
                    text-xs
                    font-bold
                    tracking-[.25em]
                    text-white/35
                ">

                    <span class="mx-8">
                        BERAKHLAK MULIA
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        TERAMPIL
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        BERPRESTASI
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        SIAP KERJA
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        WIRAUSAHA
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        MELANJUTKAN PENDIDIKAN
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        BERAKHLAK MULIA
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        TERAMPIL
                    </span>

                    <span>•</span>

                    <span class="mx-8">
                        BERPRESTASI
                    </span>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================================
     STATISTICS (ANIMASI SCROLL)
========================================================= -->

    <section
        class="
        relative
        z-10
        -mt-10
        pb-10
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
        ">

            <div
                class="
                bg-white
                rounded-3xl
                shadow-soft
                border
                border-slate-100
                p-6
                md:p-8
                animate-scroll
            ">

                <div
                    class="
                    grid
                    grid-cols-2
                    lg:grid-cols-4
                    gap-6
                ">

                    <?php foreach ($statistics as $stat): ?>

                        <div
                            class="
                            text-center
                            lg:text-left
                            lg:border-r
                            lg:last:border-r-0
                            border-slate-100
                        ">

                            <div
                                class="
                                text-3xl
                                md:text-4xl
                                font-extrabold
                                text-school-800
                            ">

                                <?= htmlspecialchars($stat['number']) ?>

                            </div>


                            <div
                                class="
                                mt-1
                                text-xs
                                md:text-sm
                                text-slate-400
                                font-medium
                            ">

                                <?= htmlspecialchars($stat['label']) ?>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================================
     PROFIL (ANIMASI SCROLL)
========================================================= -->

    <section
        id="profil"
        class="
        py-28
        bg-white
        relative
        overflow-hidden
    ">


        <div
            class="
            absolute
            right-0
            top-0
            w-1/2
            h-full
            grid-background
            opacity-40
        "></div>


        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
            relative
        ">

            <div
                class="
                grid
                lg:grid-cols-2
                gap-16
                items-center
            ">


                <!-- IMAGE -->

                <div class="relative animate-scroll">

                    <div
                        class="
                        rounded-[2rem]
                        overflow-hidden
                        aspect-[4/5]
                    ">

                        <img
                            src="{{asset('assets/img/logo.png')}}"
                            alt="SMK Muhammadiyah Kandanghaur"
                            class="
                            w-full
                            h-full
                            object-cover
                        ">

                    </div>

                </div>


                <!-- CONTENT -->

                <div class="animate-scroll">

                    <div
                        class="
                        text-school-600
                        text-sm
                        font-bold
                        uppercase
                        tracking-[.2em]
                    ">

                        Tentang Sekolah

                    </div>


                    <h2
                        class="
                        mt-4
                        text-4xl
                        sm:text-5xl
                        font-extrabold
                        tracking-tight
                        text-school-950
                    ">

                        Lebih dari sekadar
                        <span class="text-school-600">
                            sekolah.
                        </span>

                    </h2>


                    <p
                        class="
                        mt-6
                        text-lg
                        leading-8
                        text-slate-600
                    ">

                        <?= htmlspecialchars($schoolName) ?>
                        merupakan lembaga pendidikan kejuruan
                        yang berkomitmen menghasilkan lulusan
                        berkualitas dengan landasan akhlak mulia,
                        keterampilan, dan penguasaan teknologi.

                    </p>


                    <!-- VISI -->

                    <div
                        class="
                        mt-8
                        rounded-2xl
                        bg-school-50
                        border
                        border-school-100
                        p-6
                    ">

                        <div
                            class="
                            text-xs
                            uppercase
                            tracking-widest
                            font-bold
                            text-school-600
                        ">

                            Visi Kami

                        </div>


                        <div
                            class="
                            mt-2
                            text-2xl
                            font-extrabold
                            text-school-950
                        ">

                            "<?= htmlspecialchars($tagline) ?>."

                        </div>

                    </div>


                    <!-- MISI -->

                    <div class="mt-8">

                        <div
                            class="
                            text-xs
                            uppercase
                            tracking-widest
                            font-bold
                            text-slate-400
                        ">

                            Misi Utama

                        </div>


                        <div
                            class="
                            mt-4
                            space-y-4
                        ">

                            <?php

                            $missions = [

                                'Mengembangkan ilmu pengetahuan dan teknologi sesuai potensi peserta didik.',

                                'Meningkatkan mutu lulusan untuk bekerja, berwirausaha, dan melanjutkan pendidikan.',

                                'Mengamalkan nilai-nilai keagamaan dalam kehidupan sehari-hari.',

                                'Meningkatkan kepedulian terhadap lingkungan hidup.',

                                'Meningkatkan kompetensi IPTEK berwawasan regional, nasional, dan global.',

                                'Menjalankan pelayanan terbaik.',

                                'Menumbuhkan jiwa patriotis dan nasionalis.'

                            ];

                            ?>


                            <?php foreach ($missions as $index => $mission): ?>

                                <div
                                    class="
                                    flex
                                    gap-3
                                ">

                                    <div
                                        class="
                                        shrink-0
                                        w-7
                                        h-7
                                        rounded-full
                                        bg-school-100
                                        text-school-600
                                        flex
                                        items-center
                                        justify-center
                                        text-xs
                                        font-bold
                                    ">

                                        <?= $index + 1 ?>

                                    </div>


                                    <p
                                        class="
                                        text-sm
                                        leading-6
                                        text-slate-600
                                    ">

                                        <?= htmlspecialchars($mission) ?>

                                    </p>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================================
     CORE VALUES (ANIMASI SCROLL)
========================================================= -->

    <section
        class="
        py-28
        bg-school-950
        text-white
        relative
        overflow-hidden
    ">


        <div
            class="
            absolute
            inset-0
            grid-background
            opacity-20
        "></div>


        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
            relative
        ">

            <div class="max-w-3xl animate-scroll">

                <div
                    class="
                    text-sky-300
                    text-sm
                    uppercase
                    tracking-[.2em]
                    font-bold
                ">

                    Nilai Sekolah

                </div>


                <h2
                    class="
                    mt-4
                    text-4xl
                    sm:text-5xl
                    font-extrabold
                ">

                    8 Core Value

                </h2>


                <p
                    class="
                    mt-5
                    text-white/50
                    text-lg
                    leading-8
                ">

                    Nilai yang menjadi fondasi dalam membangun
                    budaya sekolah dan membentuk karakter
                    seluruh warga sekolah.

                </p>

            </div>


            <div
                class="
                mt-14
                grid
                sm:grid-cols-2
                lg:grid-cols-4
                gap-4
            ">

                <?php foreach ($coreValues as $value): ?>

                    <div
                        class="
                        rounded-2xl
                        border
                        border-white/10
                        bg-white/[.04]
                        p-7
                        hover:bg-white/[.08]
                        hover:border-sky-400/30
                        transition
                        group
                        animate-scroll
                    ">

                        <div
                            class="
                            text-sky-300
                            text-xs
                            font-bold
                        ">

                            <?= htmlspecialchars($value['number']) ?>

                        </div>


                        <h3
                            class="
                            mt-5
                            text-xl
                            font-extrabold
                            group-hover:text-sky-300
                            transition
                        ">

                            <?= htmlspecialchars($value['title']) ?>

                        </h3>


                        <p
                            class="
                            mt-3
                            text-sm
                            leading-6
                            text-white/40
                        ">

                            <?= htmlspecialchars($value['text']) ?>

                        </p>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>



    <!-- =========================================================
     WHY SCHOOL (ANIMASI SCROLL)
========================================================= -->

    <section
        class="
        py-28
        bg-school-50
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
        ">

            <div
                class="
                grid
                lg:grid-cols-12
                gap-12
            ">


                <div class="lg:col-span-4 animate-scroll">

                    <div
                        class="
                        text-school-600
                        text-sm
                        uppercase
                        tracking-[.2em]
                        font-bold
                    ">

                        Mengapa Kami?

                    </div>


                    <h2
                        class="
                        mt-4
                        text-4xl
                        sm:text-5xl
                        font-extrabold
                        text-school-950
                    ">

                        Tempat tumbuhnya
                        masa depan.

                    </h2>


                    <p
                        class="
                        mt-5
                        text-slate-500
                        leading-7
                    ">

                        Kami menggabungkan pendidikan karakter,
                        kompetensi kejuruan, teknologi, dan
                        pengalaman industri.

                    </p>

                </div>


                <div
                    class="
                    lg:col-span-8
                    grid
                    sm:grid-cols-2
                    gap-5
                ">

                    <?php

                    $why = [

                        [
                            '01',
                            'Kurikulum Islami',
                            'Pendidikan kejuruan terintegrasi dengan nilai-nilai Islam dan pembentukan karakter.'
                        ],

                        [
                            '02',
                            'Fasilitas Modern',
                            'Lingkungan belajar dan fasilitas praktik yang mendukung pengembangan kompetensi.'
                        ],

                        [
                            '03',
                            'Mitra Industri',
                            'Kerja sama dengan dunia industri untuk mendekatkan pembelajaran dengan kebutuhan kerja.'
                        ],

                        [
                            '04',
                            'Masa Depan Lulusan',
                            'Mempersiapkan lulusan untuk bekerja, berwirausaha, maupun melanjutkan pendidikan.'
                        ]

                    ];

                    ?>


                    <?php foreach ($why as $item): ?>

                        <div
                            class="
                            bg-white
                            rounded-2xl
                            p-7
                            border
                            border-school-100
                            hover:-translate-y-1
                            transition
                            shadow-card
                            animate-scroll
                        ">

                            <div
                                class="
                                text-school-500
                                text-sm
                                font-extrabold
                            ">

                                <?= $item[0] ?>

                            </div>


                            <h3
                                class="
                                mt-4
                                text-xl
                                font-extrabold
                                text-school-950
                            ">

                                <?= htmlspecialchars($item[1]) ?>

                            </h3>


                            <p
                                class="
                                mt-3
                                text-sm
                                leading-6
                                text-slate-500
                            ">

                                <?= htmlspecialchars($item[2]) ?>

                            </p>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================================
     PROGRAM KEAHLIAN (ANIMASI SCROLL)
========================================================= -->

    <section
        id="keahlian"
        class="
        py-28
        bg-white
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
        ">


            <div
                class="
                flex
                flex-col
                md:flex-row
                md:items-end
                justify-between
                gap-8
            ">

                <div class="animate-scroll">

                    <div
                        class="
                        text-school-600
                        text-sm
                        uppercase
                        tracking-[.2em]
                        font-bold
                    ">

                        Pendidikan Kejuruan

                    </div>


                    <h2
                        class="
                        mt-4
                        text-4xl
                        sm:text-5xl
                        font-extrabold
                        text-school-950
                    ">

                        Temukan keahlianmu.

                    </h2>

                </div>


                <p
                    class="
                    max-w-xl
                    text-slate-500
                    leading-7
                    animate-scroll
                ">

                    Enam konsentrasi keahlian dirancang
                    untuk mempersiapkan siswa menghadapi
                    dunia kerja, industri, kewirausahaan,
                    dan pendidikan tinggi.

                </p>

            </div>


            <div
                class="
                mt-14
                grid
                md:grid-cols-2
                lg:grid-cols-3
                gap-6
            ">

                <?php foreach ($programs as $index => $program): ?>

                    <article
                        class="
                        group
                        rounded-3xl
                        overflow-hidden
                        border
                        border-slate-100
                        bg-white
                        shadow-card
                        hover:-translate-y-2
                        transition
                        duration-300
                        animate-scroll
                    ">


                        <!-- IMAGE -->

                        <div
                            class="
                            relative
                            aspect-[16/10]
                            overflow-hidden
                            bg-school-900
                        ">

                            <img
                                src="<?= htmlspecialchars($program['image']) ?>"
                                alt="<?= htmlspecialchars($program['title']) ?>"
                                class="
                                w-full
                                h-full
                                object-cover
                                group-hover:scale-110
                                transition
                                duration-700
                            ">


                            <div
                                class="
                                absolute
                                inset-0
                                bg-gradient-to-t
                                from-school-950/80
                                to-transparent
                            "></div>


                            <div
                                class="
                                absolute
                                top-5
                                left-5
                            ">

                                <span
                                    class="
                                    px-3
                                    py-1.5
                                    rounded-full
                                    bg-white
                                    text-school-900
                                    text-xs
                                    font-extrabold
                                ">

                                    <?= htmlspecialchars($program['short']) ?>

                                </span>

                            </div>


                            <div
                                class="
                                absolute
                                bottom-5
                                left-5
                                right-5
                            ">

                                <div
                                    class="
                                    text-white/50
                                    text-xs
                                    uppercase
                                    tracking-widest
                                ">

                                    Konsentrasi Keahlian

                                </div>

                            </div>

                        </div>


                        <!-- CONTENT -->

                        <div class="p-7">

                            <h3
                                class="
                                text-xl
                                font-extrabold
                                text-school-950
                            ">

                                <?= htmlspecialchars($program['title']) ?>

                            </h3>


                            <p
                                class="
                                mt-3
                                text-sm
                                leading-6
                                text-slate-500
                            ">

                                <?= htmlspecialchars($program['description']) ?>

                            </p>


                            <div
                                class="
                                mt-6
                                flex
                                items-center
                                justify-between
                                pt-5
                                border-t
                                border-slate-100
                            ">

                                <span
                                    class="
                                    text-xs
                                    font-bold
                                    uppercase
                                    tracking-wider
                                    text-slate-400
                                ">

                                    Pendidikan 3 Tahun

                                </span>


                                <span
                                    class="
                                    w-9
                                    h-9
                                    rounded-full
                                    bg-school-50
                                    text-school-600
                                    flex
                                    items-center
                                    justify-center
                                    group-hover:bg-school-600
                                    group-hover:text-white
                                    transition
                                ">

                                    →

                                </span>

                            </div>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>



    <!-- =========================================================
     FASILITAS (ANIMASI SCROLL)
========================================================= -->

    <section
        id="fasilitas"
        class="
        py-28
        bg-slate-950
        text-white
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
        ">

            <div class="max-w-3xl animate-scroll">

                <div
                    class="
                    text-sky-300
                    text-sm
                    uppercase
                    tracking-[.2em]
                    font-bold
                ">

                    Fasilitas Unggulan

                </div>


                <h2
                    class="
                    mt-4
                    text-4xl
                    sm:text-5xl
                    font-extrabold
                ">

                    Belajar dengan
                    fasilitas yang nyata.

                </h2>


                <p
                    class="
                    mt-5
                    text-white/45
                    text-lg
                    leading-8
                ">

                    Lingkungan belajar dirancang untuk
                    memberikan pengalaman praktik yang
                    dekat dengan dunia kerja dan industri.

                </p>

            </div>


            <div
                class="
                mt-14
                grid
                md:grid-cols-2
                lg:grid-cols-3
                gap-5
            ">

                <?php foreach ($facilities as $facility): ?>

                    <article
                        class="
                        group
                        relative
                        overflow-hidden
                        rounded-3xl
                        aspect-[4/3]
                        animate-scroll
                    ">

                        <img
                            src="<?= htmlspecialchars($facility['image']) ?>"
                            alt="<?= htmlspecialchars($facility['title']) ?>"
                            class="
                            absolute
                            inset-0
                            w-full
                            h-full
                            object-cover
                            group-hover:scale-110
                            transition
                            duration-700
                        ">


                        <div
                            class="
                            absolute
                            inset-0
                            bg-gradient-to-t
                            from-black/90
                            via-black/20
                            to-transparent
                        "></div>


                        <div
                            class="
                            absolute
                            bottom-6
                            left-6
                            right-6
                        ">

                            <h3
                                class="
                                text-xl
                                font-extrabold
                            ">

                                <?= htmlspecialchars($facility['title']) ?>

                            </h3>


                            <p
                                class="
                                mt-2
                                text-sm
                                leading-5
                                text-white/55
                            ">

                                <?= htmlspecialchars($facility['text']) ?>

                            </p>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>



    <!-- =========================================================
     INDUSTRY (ANIMASI SCROLL)
========================================================= -->

    <section
        class="
        py-28
        bg-white
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
        ">

            <div
                class="
                grid
                lg:grid-cols-2
                gap-16
                items-center
            ">


                <div class="animate-scroll">

                    <div
                        class="
                        text-school-600
                        text-sm
                        uppercase
                        tracking-[.2em]
                        font-bold
                    ">

                        Sekolah & Dunia Industri

                    </div>


                    <h2
                        class="
                        mt-4
                        text-4xl
                        sm:text-5xl
                        font-extrabold
                        text-school-950
                    ">

                        Belajar hari ini.
                        <br>

                        <span class="text-school-600">
                            Siap menghadapi esok.
                        </span>

                    </h2>


                    <p
                        class="
                        mt-6
                        text-lg
                        leading-8
                        text-slate-500
                    ">

                        Pembelajaran kejuruan diarahkan agar
                        siswa memiliki kompetensi yang relevan
                        dengan kebutuhan dunia usaha dan dunia
                        industri.

                    </p>


                    <a
                        href="<?= htmlspecialchars($pcmbUrl) ?>"
                        target="_blank"
                        class="
                        inline-flex
                        items-center
                        gap-3
                        mt-8
                        px-7
                        py-4
                        rounded-full
                        bg-school-950
                        text-white
                        font-bold
                        hover:bg-school-800
                        hover:-translate-y-1
                        transition
                    ">

                        Bergabung Sekarang

                        <span>→</span>

                    </a>

                </div>


                <div
                    class="
                    grid
                    grid-cols-2
                    gap-4
                ">

                    <?php

                    $future = [

                        [
                            '01',
                            'Sertifikasi',
                            'Kompetensi'
                        ],

                        [
                            '02',
                            'Magang',
                            'Industri'
                        ],

                        [
                            '03',
                            'Siap',
                            'Bekerja'
                        ],

                        [
                            '04',
                            'Lanjut',
                            'Kuliah'
                        ],

                        [
                            '05',
                            'Bangun',
                            'Usaha'
                        ],

                        [
                            '06',
                            'Tumbuh',
                            'Bersama'
                        ]

                    ];

                    ?>


                    <?php foreach ($future as $item): ?>

                        <div
                            class="
                            rounded-3xl
                            bg-school-50
                            border
                            border-school-100
                            p-6
                            min-h-[150px]
                            hover:bg-school-950
                            group
                            transition
                            animate-scroll
                        ">

                            <div
                                class="
                                text-xs
                                font-bold
                                text-school-500
                                group-hover:text-sky-300
                            ">

                                <?= $item[0] ?>

                            </div>


                            <div
                                class="
                                mt-5
                                text-xl
                                font-extrabold
                                text-school-950
                                group-hover:text-white
                            ">

                                <?= htmlspecialchars($item[1]) ?>

                            </div>


                            <div
                                class="
                                text-sm
                                text-slate-400
                                group-hover:text-white/40
                            ">

                                <?= htmlspecialchars($item[2]) ?>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================================
     BERITA (ANIMASI SCROLL)
========================================================= -->

    <section
        id="berita"
        class="
        py-28
        bg-school-50
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
        ">


            <div
                class="
                flex
                flex-col
                md:flex-row
                md:items-end
                justify-between
                gap-6
            ">

                <div class="animate-scroll">

                    <div
                        class="
                        text-school-600
                        text-sm
                        uppercase
                        tracking-[.2em]
                        font-bold
                    ">

                        Kabar Sekolah

                    </div>


                    <h2
                        class="
                        mt-4
                        text-4xl
                        sm:text-5xl
                        font-extrabold
                        text-school-950
                    ">

                        Berita & Kegiatan

                    </h2>

                </div>


                <a
                    href="<?= htmlspecialchars($website) ?>"
                    target="_blank"
                    class="
                    text-sm
                    font-bold
                    text-school-600
                    hover:text-school-900
                    animate-scroll
                ">

                    Lihat Berita Lainnya →

                </a>

            </div>


            <div
                class="
                mt-14
                grid
                md:grid-cols-3
                gap-6
            ">

                <?php foreach ($news as $item): ?>

                    <article
                        class="
                        bg-white
                        rounded-3xl
                        overflow-hidden
                        border
                        border-school-100
                        shadow-card
                        group
                        animate-scroll
                    ">


                        <div
                            class="
                            aspect-[16/10]
                            relative
                            overflow-hidden
                            bg-school-900
                        ">

                            <img
                                src="<?= htmlspecialchars($item['image']) ?>"
                                alt="<?= htmlspecialchars($item['title']) ?>"
                                class="
                                w-full
                                h-full
                                object-cover
                                group-hover:scale-105
                                transition
                                duration-700
                            ">


                            <div
                                class="
                                absolute
                                inset-0
                                bg-school-950/10
                            "></div>


                            <div
                                class="
                                absolute
                                top-5
                                left-5
                            ">

                                <span
                                    class="
                                    px-3
                                    py-1.5
                                    rounded-full
                                    bg-white
                                    text-school-950
                                    text-[10px]
                                    font-extrabold
                                    tracking-wider
                                ">

                                    <?= htmlspecialchars($item['category']) ?>

                                </span>

                            </div>

                        </div>


                        <div class="p-7">

                            <div
                                class="
                                text-xs
                                font-bold
                                tracking-wider
                                text-school-500
                            ">

                                <?= htmlspecialchars($item['date']) ?>

                            </div>


                            <h3
                                class="
                                mt-3
                                text-xl
                                font-extrabold
                                text-school-950
                            ">

                                <?= htmlspecialchars($item['title']) ?>

                            </h3>


                            <p
                                class="
                                mt-3
                                text-sm
                                leading-6
                                text-slate-500
                            ">

                                <?= htmlspecialchars($item['text']) ?>

                            </p>


                            <a
                                href="<?= htmlspecialchars($website) ?>"
                                target="_blank"
                                class="
                                inline-flex
                                items-center
                                gap-2
                                mt-6
                                text-sm
                                font-bold
                                text-school-600
                            ">

                                Baca Selengkapnya

                                <span>→</span>

                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>



    <!-- =========================================================
     CTA pcmb (ANIMASI SCROLL)
========================================================= -->

    <section
        class="
        py-28
        bg-gradient-to-br
        from-school-950
        via-school-800
        to-school-600
        relative
        overflow-hidden
    ">


        <div
            class="
            absolute
            inset-0
            grid-background
            opacity-20
        "></div>


        <div
            class="
            absolute
            top-[-200px]
            right-[-150px]
            w-[500px]
            h-[500px]
            rounded-full
            border
            border-sky-300/10
        "></div>


        <div
            class="
            absolute
            bottom-[-250px]
            left-[-150px]
            w-[600px]
            h-[600px]
            rounded-full
            border
            border-sky-300/10
        "></div>


        <div
            class="
            max-w-5xl
            mx-auto
            px-5
            lg:px-8
            text-center
            relative
            animate-scroll
        ">

            <div
                class="
                inline-flex
                px-4
                py-2
                rounded-full
                border
                border-white/15
                bg-white/10
                text-sky-200
                text-xs
                font-bold
                uppercase
                tracking-[.2em]
            ">

                Penerimaan Peserta Didik Baru

            </div>


            <h2
                class="
                mt-7
                text-4xl
                sm:text-6xl
                font-extrabold
                text-white
                tracking-tight
            ">

                Masa depanmu

                <span class="block gradient-text">

                    dimulai di sini.

                </span>

            </h2>


            <p
                class="
                mt-6
                max-w-2xl
                mx-auto
                text-lg
                leading-8
                text-white/50
            ">

                Jadilah bagian dari keluarga besar
                <?= htmlspecialchars($schoolName) ?>.
                Kembangkan potensi, kuasai keahlian,
                dan siapkan dirimu untuk masa depan.

            </p>


            <div
                class="
                mt-9
                flex
                flex-col
                sm:flex-row
                justify-center
                gap-4
            ">


                <a
                    href="<?= htmlspecialchars($pcmbUrl) ?>"
                    target="_blank"
                    class="
                    inline-flex
                    justify-center
                    items-center
                    gap-3
                    px-8
                    py-4
                    rounded-full
                    bg-white
                    text-school-900
                    font-extrabold
                    hover:-translate-y-1
                    hover:bg-school-50
                    transition
                    shadow-xl
                ">

                    Daftar PCMB Sekarang

                    <span>→</span>

                </a>


                <a
                    href="<?= htmlspecialchars($whatsappUrl) ?>"
                    target="_blank"
                    class="
                    inline-flex
                    justify-center
                    items-center
                    gap-3
                    px-8
                    py-4
                    rounded-full
                    border
                    border-white/20
                    bg-white/10
                    text-white
                    font-semibold
                    hover:bg-white/15
                    transition
                ">

                    Hubungi WhatsApp

                </a>

            </div>

        </div>

    </section>



    <!-- =========================================================
     KONTAK (ANIMASI SCROLL)
========================================================= -->

    <section
        id="kontak"
        class="
        py-28
        bg-white
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
        ">

            <div
                class="
                grid
                lg:grid-cols-12
                gap-12
            ">


                <!-- CONTACT INFO -->

                <div class="lg:col-span-5 animate-scroll">

                    <div
                        class="
                        text-school-600
                        text-sm
                        uppercase
                        tracking-[.2em]
                        font-bold
                    ">

                        Hubungi Kami

                    </div>


                    <h2
                        class="
                        mt-4
                        text-4xl
                        sm:text-5xl
                        font-extrabold
                        text-school-950
                    ">

                        Mari terhubung.

                    </h2>


                    <p
                        class="
                        mt-5
                        text-slate-500
                        leading-7
                    ">

                        Untuk informasi mengenai pendaftaran,
                        program keahlian, kegiatan sekolah,
                        atau pertanyaan lainnya, silakan
                        hubungi kami.

                    </p>


                    <div
                        class="
                        mt-9
                        space-y-6
                    ">


                        <!-- ADDRESS -->

                        <div class="flex gap-4">

                            <div
                                class="
                                w-11
                                h-11
                                rounded-xl
                                bg-school-50
                                text-school-600
                                flex
                                items-center
                                justify-center
                                shrink-0
                            ">

                                <svg
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9
                                       a1.998 1.998 0 01-2.827 0
                                       l-4.244-4.243
                                       a8 8 0 1111.314 0z" />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0
                                       3 3 0 016 0z" />

                                </svg>

                            </div>


                            <div>

                                <div
                                    class="
                                    font-bold
                                    text-school-950
                                ">

                                    Alamat

                                </div>


                                <div
                                    class="
                                    mt-1
                                    text-sm
                                    leading-6
                                    text-slate-500
                                ">

                                    <?= htmlspecialchars($address) ?>

                                </div>

                            </div>

                        </div>


                        <!-- WHATSAPP -->

                        <div class="flex gap-4">

                            <div
                                class="
                                w-11
                                h-11
                                rounded-xl
                                bg-school-50
                                text-school-600
                                flex
                                items-center
                                justify-center
                                shrink-0
                            ">

                                <svg
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28
                                       a1 1 0 01.948.684l1.498
                                       4.493a1 1 0 01-.502 1.21
                                       l-2.257 1.13
                                       a11.042 11.042 0 005.516
                                       5.516l1.13-2.257
                                       a1 1 0 011.21-.502l4.493
                                       1.498A1 1 0 0121 15.72V19
                                       a2 2 0 01-2 2h-1
                                       C9.716 21 3 14.284 3 6V5z" />

                                </svg>

                            </div>


                            <div>

                                <div
                                    class="
                                    font-bold
                                    text-school-950
                                ">

                                    WhatsApp

                                </div>


                                <a
                                    href="<?= htmlspecialchars($whatsappUrl) ?>"
                                    target="_blank"
                                    class="
                                    mt-1
                                    block
                                    text-sm
                                    text-school-600
                                    hover:underline
                                ">

                                    <?= htmlspecialchars($whatsapp) ?>

                                </a>

                            </div>

                        </div>


                        <!-- WEBSITE -->

                        <div class="flex gap-4">

                            <div
                                class="
                                w-11
                                h-11
                                rounded-xl
                                bg-school-50
                                text-school-600
                                flex
                                items-center
                                justify-center
                                shrink-0
                            ">

                                <svg
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9
                                       m9-9a9 9 0 00-9-9
                                       m9 9H3
                                       m9-9a9 9 0 010 18
                                       m0-18c2.485 2.735
                                       3.75 5.865
                                       3.75 9S14.485 18.265
                                       12 21
                                       m0-18c-2.485 2.735
                                       -3.75 5.865
                                       -3.75 9S9.515 18.265
                                       12 21" />

                                </svg>

                            </div>


                            <div>

                                <div
                                    class="
                                    font-bold
                                    text-school-950
                                ">

                                    Website

                                </div>


                                <a
                                    href="<?= htmlspecialchars($website) ?>"
                                    target="_blank"
                                    class="
                                    mt-1
                                    block
                                    text-sm
                                    text-school-600
                                    hover:underline
                                ">

                                    smkmuhkandanghaur.sch.id

                                </a>

                            </div>

                        </div>


                        <!-- INSTAGRAM -->

                        <div class="flex gap-4">

                            <div
                                class="
                                w-11
                                h-11
                                rounded-xl
                                bg-school-50
                                text-school-600
                                flex
                                items-center
                                justify-center
                                shrink-0
                            ">

                                <span
                                    class="
                                    text-sm
                                    font-extrabold
                                ">

                                    IG

                                </span>

                            </div>


                            <div>

                                <div
                                    class="
                                    font-bold
                                    text-school-950
                                ">

                                    Instagram

                                </div>


                                <a
                                    href="<?= htmlspecialchars($instagram) ?>"
                                    target="_blank"
                                    class="
                                    mt-1
                                    block
                                    text-sm
                                    text-school-600
                                    hover:underline
                                ">

                                    @smkmuhkandanghaur

                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- CONTACT FORM -->

                <div class="lg:col-span-7 animate-scroll">

                    <div
                        class="
                        rounded-[2rem]
                        bg-school-950
                        p-7
                        sm:p-10
                        shadow-soft
                    ">

                        <div
                            class="
                            text-sky-300
                            text-sm
                            font-bold
                            uppercase
                            tracking-[.2em]
                        ">

                            Kirim Pesan

                        </div>


                        <h3
                            class="
                            mt-3
                            text-2xl
                            font-extrabold
                            text-white
                        ">

                            Ada yang ingin ditanyakan?

                        </h3>


                        <form
                            class="
                            mt-8
                            grid
                            sm:grid-cols-2
                            gap-5
                        "
                            action="#"
                            method="POST">


                            <!-- NAME -->

                            <div>

                                <label
                                    class="
                                    text-sm
                                    text-white/50
                                ">

                                    Nama Lengkap

                                </label>


                                <input
                                    type="text"
                                    name="nama"
                                    placeholder="Masukkan nama lengkap"
                                    class="
                                    mt-2
                                    w-full
                                    rounded-xl
                                    border
                                    border-white/10
                                    bg-white/5
                                    px-4
                                    py-3.5
                                    text-white
                                    placeholder:text-white/25
                                    outline-none
                                    focus:border-sky-400
                                ">

                            </div>


                            <!-- EMAIL -->

                            <div>

                                <label
                                    class="
                                    text-sm
                                    text-white/50
                                ">

                                    Email

                                </label>


                                <input
                                    type="email"
                                    name="email"
                                    placeholder="email@example.com"
                                    class="
                                    mt-2
                                    w-full
                                    rounded-xl
                                    border
                                    border-white/10
                                    bg-white/5
                                    px-4
                                    py-3.5
                                    text-white
                                    placeholder:text-white/25
                                    outline-none
                                    focus:border-sky-400
                                ">

                            </div>


                            <!-- SUBJECT -->

                            <div class="sm:col-span-2">

                                <label
                                    class="
                                    text-sm
                                    text-white/50
                                ">

                                    Subjek

                                </label>


                                <input
                                    type="text"
                                    name="subjek"
                                    placeholder="Subjek pesan"
                                    class="
                                    mt-2
                                    w-full
                                    rounded-xl
                                    border
                                    border-white/10
                                    bg-white/5
                                    px-4
                                    py-3.5
                                    text-white
                                    placeholder:text-white/25
                                    outline-none
                                    focus:border-sky-400
                                ">

                            </div>


                            <!-- MESSAGE -->

                            <div class="sm:col-span-2">

                                <label
                                    class="
                                    text-sm
                                    text-white/50
                                ">

                                    Pesan

                                </label>


                                <textarea
                                    name="pesan"
                                    rows="5"
                                    placeholder="Tulis pesan Anda..."
                                    class="
                                    mt-2
                                    w-full
                                    rounded-xl
                                    border
                                    border-white/10
                                    bg-white/5
                                    px-4
                                    py-3.5
                                    text-white
                                    placeholder:text-white/25
                                    outline-none
                                    resize-none
                                    focus:border-sky-400
                                "></textarea>

                            </div>


                            <!-- BUTTON -->

                            <div class="sm:col-span-2">

                                <button
                                    type="submit"
                                    class="
                                    inline-flex
                                    items-center
                                    justify-center
                                    gap-3
                                    px-7
                                    py-3.5
                                    rounded-full
                                    bg-white
                                    text-school-900
                                    font-bold
                                    hover:bg-school-50
                                    transition
                                ">

                                    Kirim Pesan

                                    <span>→</span>

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================================
     FOOTER
========================================================= -->

    <footer
        class="
        bg-school-950
        text-white
    ">

        <div
            class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
            py-16
        ">

            <div
                class="
                grid
                md:grid-cols-2
                lg:grid-cols-4
                gap-10
            ">


                <!-- BRAND -->

                <div class="lg:col-span-2 animate-scroll">

                    <div
                        class="
                        flex
                        items-center
                        gap-3
                    ">

                        <div
                            class="
                            w-12
                            h-12
                            rounded-xl
                            bg-white
                            flex
                            items-center
                            justify-center
                        ">

                            <img
                                src="<?= htmlspecialchars($schoolLogo) ?>"
                                alt="Logo"
                                class="
                                w-10
                                h-10
                                object-contain
                            ">

                        </div>


                        <div>

                            <div
                                class="
                                font-extrabold
                            ">

                                SMK MUHAMMADIYAH

                            </div>


                            <div
                                class="
                                text-xs
                                text-white/35
                                tracking-[.2em]
                            ">

                                KANDANGHAUR

                            </div>

                        </div>

                    </div>


                    <p
                        class="
                        mt-6
                        max-w-md
                        text-sm
                        leading-7
                        text-white/40
                    ">

                        Mencetak generasi yang beriman,
                        berilmu, berakhlak mulia, serta
                        memiliki keterampilan unggul
                        sesuai tuntutan dunia kerja.

                    </p>


                    <div
                        class="
                        mt-7
                        text-sky-300
                        font-bold
                    ">

                        "<?= htmlspecialchars($tagline) ?>."

                    </div>

                </div>


                <!-- NAVIGATION -->

                <div class="animate-scroll">

                    <div
                        class="
                        text-sm
                        font-bold
                    ">

                        Navigasi

                    </div>


                    <div
                        class="
                        mt-5
                        space-y-3
                        text-sm
                        text-white/40
                    ">

                        <a
                            href="#profil"
                            class="block hover:text-white transition">
                            Profil
                        </a>


                        <a
                            href="#keahlian"
                            class="block hover:text-white transition">
                            Program Keahlian
                        </a>


                        <a
                            href="#fasilitas"
                            class="block hover:text-white transition">
                            Fasilitas
                        </a>


                        <a
                            href="#berita"
                            class="block hover:text-white transition">
                            Berita
                        </a>


                        <a
                            href="#kontak"
                            class="block hover:text-white transition">
                            Kontak
                        </a>

                    </div>

                </div>


                <!-- SERVICES -->

                <div class="animate-scroll">

                    <div
                        class="
                        text-sm
                        font-bold
                    ">

                        Layanan

                    </div>


                    <div
                        class="
                        mt-5
                        space-y-3
                        text-sm
                        text-white/40
                    ">

                        <a
                            href="<?= htmlspecialchars($pcmbUrl) ?>"
                            target="_blank"
                            class="
                            block
                            hover:text-white
                            transition
                        ">

                            PCMB

                        </a>


                        <a
                            href="<?= htmlspecialchars($whatsappUrl) ?>"
                            target="_blank"
                            class="
                            block
                            hover:text-white
                            transition
                        ">

                            WhatsApp

                        </a>


                        <a
                            href="<?= htmlspecialchars($website) ?>"
                            target="_blank"
                            class="
                            block
                            hover:text-white
                            transition
                        ">

                            Website Resmi

                        </a>


                        <a
                            href="<?= htmlspecialchars($instagram) ?>"
                            target="_blank"
                            class="
                            block
                            hover:text-white
                            transition
                        ">

                            Instagram

                        </a>

                    </div>

                </div>

            </div>


            <!-- COPYRIGHT -->

            <div
                class="
                mt-14
                pt-7
                border-t
                border-white/10
                flex
                flex-col
                md:flex-row
                items-center
                justify-between
                gap-4
                animate-scroll
            ">

                <p
                    class="
                    text-xs
                    text-white/30
                ">

                    © <?= $year ?>
                    <?= htmlspecialchars($schoolName) ?>.
                    All rights reserved.

                </p>


                <p
                    class="
                    text-xs
                    text-white/30
                ">

                    <?= htmlspecialchars($tagline) ?>

                </p>

            </div>

        </div>

    </footer>



    <!-- =========================================================
     FLOATING WHATSAPP
========================================================= -->

    <a
        href="<?= htmlspecialchars($whatsappUrl) ?>"
        target="_blank"
        aria-label="WhatsApp"
        class="
        fixed
        right-5
        bottom-5
        z-40
        w-14
        h-14
        rounded-full
        bg-green-500
        text-white
        flex
        items-center
        justify-center
        shadow-xl
        hover:scale-110
        transition
        animate-scroll
    ">

        <svg
            class="w-7 h-7"
            viewBox="0 0 24 24"
            fill="currentColor">

            <path
                d="M20.52 3.48A11.82 11.82 0 0012.05 0
               C5.5 0 .17 5.33.17 11.89
               c0 2.1.55 4.15 1.6 5.96L.1 24l6.3-1.65
               a11.87 11.87 0 005.65 1.44h.01
               c6.55 0 11.88-5.33 11.88-11.89
               0-3.17-1.23-6.15-3.42-8.42z
               M12.06 21.75h-.01
               a9.86 9.86 0 01-5.03-1.38l-.36-.21
               -3.74.98 1-3.65-.24-.38
               a9.83 9.83 0 01-1.51-5.22
               c0-5.43 4.42-9.85 9.86-9.85
               2.63 0 5.1 1.03 6.96 2.89
               a9.82 9.82 0 012.89 6.97
               c-.01 5.43-4.43 9.85-9.82 9.85z" />

            <path
                d="M17.48 14.3c-.3-.15-1.77-.87-2.05-.97
               -.28-.1-.48-.15-.68.15
               -.2.3-.78.97-.96 1.17
               -.18.2-.35.22-.65.07
               -.3-.15-1.26-.46-2.4-1.48
               -.89-.79-1.49-1.76-1.67-2.06
               -.17-.3-.02-.46.13-.61
               .13-.13.3-.35.45-.52
               .15-.18.2-.3.3-.5
               .1-.2.05-.37-.02-.52
               -.07-.15-.68-1.63-.93-2.23
               -.25-.6-.5-.52-.68-.53
               -.18-.01-.37-.01-.57-.01
               -.2 0-.52.07-.8.37
               -.28.3-1.04 1.02-1.04 2.49
               0 1.47 1.07 2.88 1.22 3.08
               .15.2 2.1 3.2 5.08 4.49
               .71.31 1.27.5 1.7.64
               .71.23 1.35.2 1.86.12
               .57-.08 1.77-.72 2.02-1.42
               .25-.7.25-1.3.18-1.42
               -.07-.12-.27-.2-.57-.35z" />

        </svg>

    </a>



    <!-- =========================================================
     JAVASCRIPT
========================================================= -->

    <script>
        /*
        |--------------------------------------------------------------------------
        | NAVBAR
        |--------------------------------------------------------------------------
        */

        const navbar =
            document.getElementById('navbar');


        window.addEventListener(
            'scroll',
            function() {

                if (window.scrollY > 40) {

                    navbar.classList.add(
                        'bg-school-950/95',
                        'backdrop-blur-xl',
                        'shadow-xl'
                    );

                } else {

                    navbar.classList.remove(
                        'bg-school-950/95',
                        'backdrop-blur-xl',
                        'shadow-xl'
                    );

                }

            }
        );



        /*
        |--------------------------------------------------------------------------
        | MOBILE MENU
        |--------------------------------------------------------------------------
        */

        const mobileButton =
            document.getElementById(
                'mobileMenuButton'
            );


        const mobileMenu =
            document.getElementById(
                'mobileMenu'
            );


        mobileButton.addEventListener(
            'click',
            function() {

                mobileMenu.classList.toggle(
                    'hidden'
                );

            }
        );



        /*
        |--------------------------------------------------------------------------
        | CLOSE MOBILE MENU
        |--------------------------------------------------------------------------
        */

        document
            .querySelectorAll(
                '#mobileMenu a'
            )
            .forEach(
                function(link) {

                    link.addEventListener(
                        'click',
                        function() {

                            mobileMenu.classList.add(
                                'hidden'
                            );

                        }
                    );

                }
            );



        /*
        |--------------------------------------------------------------------------
        | SCROLL REVEAL - ANIMASI SAAT DISCROLL
        |--------------------------------------------------------------------------
        */

        const scrollElements =
            document.querySelectorAll(
                '.animate-scroll'
            );


        const scrollObserver =
            new IntersectionObserver(
                function(entries) {

                    entries.forEach(
                        function(entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target.classList.add(
                                    'animate__animated',
                                    'animate__fadeInUp'
                                );

                            }

                        }
                    );

                }, {
                    threshold: 0.08
                }
            );


        scrollElements.forEach(
            function(element) {

                scrollObserver.observe(
                    element
                );

            }
        );
    </script>


</body>

</html>