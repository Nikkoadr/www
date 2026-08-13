<?php
// ===============================
// KONFIGURASI
// ===============================
$schoolName = "SMK Muhammadiyah Kandanghaur";
$schoolShort = "SMK MUHAMMADIYAH KANDANGHAUR";

// Ganti dengan URL tracer study sebenarnya
$tracerUrl = "https://tracervokasi.kemendikdasmen.go.id/login";

// QR Code menggunakan layanan QR Server
$qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?size=600x600&margin=20&data="
    . urlencode($tracerUrl);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tracer Study Alumni | <?= htmlspecialchars($schoolName) ?></title>

    <meta name="description"
        content="Tracer Study Alumni <?= htmlspecialchars($schoolName) ?>">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui']
                    },
                    animation: {
                        'float': 'float 4s ease-in-out infinite',
                        'pulse-soft': 'pulse-soft 2s ease-in-out infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-8px)'
                            }
                        },
                        'pulse-soft': {
                            '0%, 100%': {
                                transform: 'scale(1)'
                            },
                            '50%': {
                                transform: 'scale(1.03)'
                            }
                        }
                    }
                }
            }
        }
    </script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        .qr-shadow {
            box-shadow:
                0 25px 60px rgba(15, 23, 42, 0.15),
                0 8px 20px rgba(15, 23, 42, 0.08);
        }

        .gradient-text {
            background: linear-gradient(135deg,
                    #0f766e,
                    #2563eb);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40
                w-[500px] h-[500px]
                rounded-full
                bg-blue-200/40
                blur-3xl">
        </div>
        <div class="absolute top-[40%] -left-40
                w-[450px] h-[450px]
                rounded-full
                bg-teal-200/40
                blur-3xl">
        </div>
    </div>
    <header class="sticky top-0 z-50">
        <nav class="glass border-b border-white/50 bg-white/80 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="h-20 flex items-center justify-between">
                    
                    <!-- Logo & Brand Header -->
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="w-12 h-12 rounded-xl bg-white shadow-sm border border-slate-100 flex items-center justify-center overflow-hidden">
                            <img 
                                src="{{ asset('assets/img/logo.png') }}" 
                                alt="Logo <?= htmlspecialchars($schoolName) ?>" 
                                class="w-10 h-10 object-contain"
                            >
                        </div>
                        <div class="leading-tight">
                            <div class="font-bold text-slate-900 text-sm md:text-base group-hover:text-blue-600 transition">
                                <?= htmlspecialchars($schoolShort) ?>
                            </div>
                            <div class="text-xs text-slate-500">
                                Tracer Study Alumni
                            </div>
                        </div>
                    </a>

                    <!-- Navigation Links -->
                    <div class="flex items-center gap-4 text-xs text-slate-500">
                        <a href="/" class="hover:text-blue-600 transition font-medium">
                            Home
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="scan"
            class="relative min-h-[calc(100vh-80px)]
                flex items-center">
            <div class="max-w-7xl mx-auto
                px-5 lg:px-8
                py-16 lg:py-20
                w-full">
                <div class="grid lg:grid-cols-2
                    gap-14 lg:gap-20
                    items-center">
                    <div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl
                           font-extrabold
                           leading-[1.08]
                           tracking-tight
                           text-slate-900">
                            Mari Terhubung
                            <span class="gradient-text">
                                Kembali
                            </span>
                            dengan Sekolah
                        </h1>
                        <p class="mt-6
                          text-lg
                          leading-8
                          text-slate-600
                          max-w-xl">
                            Bantu kami mengetahui perjalanan dan perkembangan
                            alumni setelah lulus dengan mengisi
                            <strong class="text-slate-800">
                                Tracer Study Alumni
                            </strong>
                            <?= htmlspecialchars($schoolName) ?>.
                        </p>
                        <!-- CTA -->
                        <div class="mt-8 flex flex-col sm:flex-row gap-4">
                            <a href="<?= htmlspecialchars($tracerUrl) ?>"
                                target="_blank"
                                class="inline-flex items-center
                              justify-center gap-3
                              px-6 py-3.5
                              rounded-xl
                              bg-blue-600
                              hover:bg-blue-700
                              text-white
                              font-semibold
                              shadow-lg shadow-blue-600/20
                              transition
                              hover:-translate-y-0.5">
                                Isi Tracer Study
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                        <!-- Trust -->
                        <div class="mt-10
                            flex flex-wrap
                            items-center gap-x-8 gap-y-4
                            text-sm text-slate-500">
                        </div>

                    </div>


                    <!-- RIGHT QR CODE -->
                    <div class="flex justify-center lg:justify-end">

                        <div class="relative">

                            <!-- Decorative circles -->
                            <div class="absolute
                                -top-8 -right-8
                                w-24 h-24
                                rounded-full
                                bg-blue-100
                                -z-10">
                            </div>

                            <div class="absolute
                                -bottom-8 -left-8
                                w-32 h-32
                                rounded-full
                                bg-teal-100
                                -z-10">
                            </div>


                            <!-- QR CARD -->
                            <div class="glass
                                rounded-[2rem]
                                border border-white
                                p-6 sm:p-8
                                qr-shadow
                                w-[320px] sm:w-[390px]
                                animate-float">


                                <div class="text-center">

                                    <div class="text-sm
                                        font-semibold
                                        text-blue-600
                                        uppercase
                                        tracking-wider">

                                        Scan QR Code

                                    </div>

                                    <h2 class="mt-2
                                       text-2xl
                                       font-extrabold
                                       text-slate-900">

                                        Tracer Study Alumni

                                    </h2>

                                </div>


                                <!-- QR -->
                                <div class="mt-6
                                    bg-white
                                    rounded-2xl
                                    p-4
                                    border border-slate-100">

                                    <img
                                        src="<?= htmlspecialchars($qrCodeUrl) ?>"
                                        alt="QR Code Tracer Study"
                                        class="w-full aspect-square
                                       object-contain
                                       rounded-xl">

                                </div>


                                <!-- URL -->
                                <div class="mt-5
                                    text-center">

                                    <p class="text-xs
                                      text-slate-400
                                      mb-1">

                                        Akses melalui

                                    </p>

                                    <p class="text-sm
                                      font-semibold
                                      text-slate-700
                                      break-all">

                                        <?= htmlspecialchars($tracerUrl) ?>

                                    </p>

                                </div>


                                <!-- Button -->
                                <a href="<?= htmlspecialchars($tracerUrl) ?>"
                                    target="_blank"
                                    class="mt-5
                                  flex items-center
                                  justify-center
                                  w-full
                                  py-3
                                  rounded-xl
                                  bg-slate-900
                                  hover:bg-slate-800
                                  text-white
                                  font-semibold
                                  transition">

                                    Buka Tracer Study

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- =====================================
     FOOTER
===================================== -->
    <footer class="border-t border-slate-200
               bg-white">

        <div class="max-w-7xl mx-auto
                px-5 lg:px-8
                py-8">

            <div class="flex flex-col
                    md:flex-row
                    items-center
                    justify-between
                    gap-4">

                <div class="text-center md:text-left">

                    <p class="font-semibold text-slate-900">
                        <?= htmlspecialchars($schoolName) ?>
                    </p>

                    <p class="text-sm text-slate-500 mt-1">
                        Bergerak Maju Menjadi yang Terdepan
                    </p>

                </div>


                <p class="text-sm text-slate-400">

                    &copy; <?= date('Y') ?>
                    <?= htmlspecialchars($schoolName) ?>

                </p>

            </div>

        </div>

    </footer>

</body>

</html>