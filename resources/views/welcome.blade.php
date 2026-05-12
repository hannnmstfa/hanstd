@extends('layouts.app')

@section('title', 'HANSTD | Membangun Hal Digital')

@section('content')
    <section id="hero" class="relative overflow-hidden px-6 pb-20 pt-32 lg:px-10 lg:pt-40">
        <div class="hero-blob hero-blob-a"></div>
        <div class="hero-blob hero-blob-b"></div>

        <div class="mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-2">
            <div class="reveal-up">
                <p class="inline-flex items-center gap-2 rounded-full border border-cyan-300/30 bg-cyan-400/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.2em] text-cyan-200">
                    Studio Teknologi Pribadi
                </p>

                <h1 class="mt-6 font-display text-4xl leading-tight text-white sm:text-5xl lg:text-6xl">
                    Membangun Hal Digital
                </h1>

                <p class="mt-6 max-w-xl text-base leading-relaxed text-slate-300 sm:text-lg">
                    HANSTD adalah platform pengembangan dan eksperimen teknologi pribadi untuk membangun produk web,
                    merancang infrastruktur mandiri, serta menciptakan proyek kreatif yang menggabungkan otomasi, cloud,
                    dan solusi digital yang terus berkembang.
                </p>

                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <a href="#proyek" class="btn-primary">Lihat Proyek</a>
                    <a href="#kontak" class="btn-secondary">Hubungi Saya</a>
                </div>
            </div>

            <div class="reveal-up lg:justify-self-end">
                <div class="terminal-card">
                    <div class="flex items-center justify-between border-b border-white/10 px-5 py-3">
                        <div class="flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-amber-300"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                        </div>
                        <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Konsol HANSTD</p>
                    </div>

                    <div class="space-y-4 px-5 py-6 font-mono text-sm text-slate-200">
                        <p><span class="text-cyan-300">$</span> inisiasi proyek --fokus="web"</p>
                        <p><span class="text-cyan-300">$</span> aktifkan self-hosting --stack="docker nginx"</p>
                        <p><span class="text-cyan-300">$</span> jalankan cloudflare tunnel --keamanan="maksimal"</p>
                        <p class="text-emerald-300">? Sistem siap dijalankan dan siap dikembangkan lebih lanjut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
        <div class="reveal-up flex items-end justify-between gap-6">
            <div>
                <p class="section-eyebrow">Tentang HANSTD</p>
                <h2 class="section-title mt-4">Mitra eksperimen teknologi untuk ide yang berani</h2>
            </div>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <article class="feature-card reveal-up">
                <h3 class="feature-title">Pengembangan Web</h3>
                <p class="feature-text">Membuat website cepat, aman, dan siap skala untuk kebutuhan personal brand, bisnis, hingga platform digital.</p>
            </article>

            <article class="feature-card reveal-up">
                <h3 class="feature-title">Self Hosting</h3>
                <p class="feature-text">Menyiapkan infrastruktur mandiri yang efisien, fleksibel, dan mudah dipelihara untuk kontrol penuh atas layanan.</p>
            </article>

            <article class="feature-card reveal-up">
                <h3 class="feature-title">Proyek Kreatif</h3>
                <p class="feature-text">Menggabungkan software, hardware, dan otomasi menjadi eksperimen teknologi yang unik serta relevan di dunia nyata.</p>
            </article>
        </div>
    </section>

    <section id="proyek" class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
        <div class="reveal-up">
            <p class="section-eyebrow">Proyek Unggulan</p>
            <h2 class="section-title mt-4">Portofolio produk yang dibangun dengan pendekatan teknis yang matang</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <div class="reveal-up">
                <x-project-card
                    title="Marketplace Penjualan Parfum"
                    description="Marketplace parfum dengan integrasi tracking pengiriman real-time dan tipe pembayaran online yang fleksibel untuk pengalaman belanja yang mulus."
                    badge="E-Commerce"
                    href="https://luxuexperfume.hanstd.com/"
                />
            </div>
            <div class="reveal-up">
                <x-project-card
                    title="Company Profile"
                    description="Website company profile dengan sistem CRUD konten untuk mengelola layanan, portofolio, tim, dan informasi perusahaan secara dinamis."
                    badge="Corporate Website"
                />
            </div>
            <div class="reveal-up">
                <x-project-card
                    title="Website Organisasi"
                    description="Website organisasi untuk publikasi kegiatan, profil kepengurusan, dokumentasi program, dan komunikasi informasi kepada anggota serta publik."
                    badge="Komunitas"
                />
            </div>
            <div class="reveal-up">
                <x-project-card
                    title="Hanstd Tools"
                    description="Web tools yang menyediakan berbagai alat praktis untuk kebutuhan sehari-hari agar pekerjaan harian lebih cepat dan efisien."
                    badge="Web Tools"
                    href="https://tools.hanstd.com"
                />
            </div>
        </div>
    </section>

    <section id="layanan" class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
        <div class="reveal-up">
            <p class="section-eyebrow">Layanan</p>
            <h2 class="section-title mt-4">Layanan teknis end-to-end untuk kebutuhan digital modern</h2>
        </div>
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                'Pembuatan Website',
                'Deployment Server',
                'Tunneling Cloudflare',
                'Integrasi API',
                'Sistem Otomatisasi',
            ] as $service)
                <article class="service-card reveal-up">
                    <div class="service-dot"></div>
                    <h3 class="text-base font-semibold text-white">{{ $service }}</h3>
                </article>
            @endforeach
        </div>
    </section>

    <section id="kontak" class="mx-auto max-w-7xl px-6 pb-24 pt-12 lg:px-10">
        <div class="reveal-up overflow-hidden rounded-3xl border border-cyan-300/25 bg-gradient-to-r from-cyan-500/15 via-blue-500/10 to-violet-500/15 p-8 shadow-[0_20px_80px_rgba(14,116,255,0.2)] backdrop-blur-xl sm:p-10">
            <p class="section-eyebrow">Kontak</p>
            <h2 class="section-title mt-4 max-w-3xl">Punya ide produk, eksperimen cloud, atau sistem otomasi? Mari kolaborasi bersama HANSTD.</h2>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="mailto:burhanmusthofa1@gmail.com" class="btn-primary">Kirim Email</a>
                <a href="#hero" class="btn-secondary">Kembali ke Atas</a>
            </div>
        </div>
    </section>
@endsection
