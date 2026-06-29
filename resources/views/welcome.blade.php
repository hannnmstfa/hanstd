<x-app-layout>
    <section id="hero" class="relative overflow-hidden px-6 pb-20 pt-32 lg:px-10 lg:pt-40">
        <div class="hero-blob hero-blob-a"></div>
        <div class="hero-blob hero-blob-b"></div>

        <div class="mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-2">
            <div class="reveal-up">
                <p
                    class="inline-flex items-center gap-2 rounded-full border border-cyan-300/30 bg-cyan-400/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.2em] text-cyan-200">
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
                    <a href="#kontak" class="btn-secondary">Diskusikan Proyek Anda</a>
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
                        <p><span class="text-cyan-300">$</span> publish aplikasi --hosting="self-hosted"</p>
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
                <p class="feature-text">Membuat website cepat, aman, dan siap skala untuk kebutuhan personal brand,
                    bisnis, hingga platform digital.</p>
            </article>

            <article class="feature-card reveal-up">
                <h3 class="feature-title">Self Hosting</h3>
                <p class="feature-text">Menyiapkan infrastruktur mandiri yang efisien, fleksibel, dan mudah dipelihara
                    untuk kontrol penuh atas layanan.</p>
            </article>

            <article class="feature-card reveal-up">
                <h3 class="feature-title">Proyek Kreatif</h3>
                <p class="feature-text">Menggabungkan software, hardware, dan otomasi menjadi eksperimen teknologi yang
                    unik serta relevan di dunia nyata.</p>
            </article>
        </div>
    </section>

    <section id="proyek" class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
        <div class="reveal-up">
            <p class="section-eyebrow">Proyek Unggulan</p>
            <h2 class="section-title mt-4">Portofolio proyek yang dibangun dengan pendekatan teknis yang matang</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <div class="reveal-up">
                <x-project-card title="Penjualan Parfum"
                    description="Website penjualan parfum dengan integrasi tracking pengiriman real-time dan tipe pembayaran online yang fleksibel untuk pengalaman belanja yang mulus."
                    badge="E-Commerce" href="https://luxuexperfume.hanstd.com/" />
            </div>
            <div class="reveal-up">
                <x-project-card title="Company Profile"
                    description="Website company profile dengan sistem CRUD konten untuk mengelola layanan, portofolio, tim, dan informasi perusahaan secara dinamis."
                    badge="Corporate Website" />
            </div>
            <div class="reveal-up">
                <x-project-card title="Website Organisasi"
                    description="Website organisasi untuk publikasi kegiatan, profil kepengurusan, dokumentasi program, dan komunikasi informasi kepada anggota serta publik."
                    badge="Komunitas" />
            </div>
            <div class="reveal-up">
                <x-project-card title="Hanstd Tools"
                    description="Web tools yang menyediakan berbagai alat praktis untuk kebutuhan sehari-hari agar pekerjaan harian lebih cepat dan efisien."
                    badge="Web Tools" href="https://tools.hanstd.com" />
            </div>
            <div class="reveal-up">
                <x-project-card title="POS & Manajemen Inventaris"
                    description="Platform kasir digital untuk toko sepeda listrik dengan fitur transaksi cepat, pengelolaan stok, data pelanggan, riwayat penjualan, dan laporan bisnis secara real-time."
                    badge="Web POS" />
            </div>
            <div class="reveal-up">
                <x-project-card title="Manajemen Inventaris AC"
                    description="Platform digital untuk mengelola data aset AC, monitoring jadwal maintenance, dokumentasi perbaikan, dan pelaporan guna meningkatkan efisiensi operasional perusahaan."
                    badge="Inventaris" />
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
               
            <div class="reveal-up overflow-hidden rounded-3xl border border-cyan-300/25 bg-gradient-t
          o         -r from-cyan-500/15 via-blue-500/10 to-violet-500/15 p-8 shadow-[0_20px_80px_rgba(14,116,255,0.2)] backdrop-blur-xl sm:p-10">
            <p class="section-eyebrow">Kontak</p>
            <h2 class="section-title mt-4 max-w-3xl">Punya ide produk, eksperimen cloud, atau sistem otomasi? Mari kolaborasi bersama HANSTD.</h2>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="mailto:burhanmusthofa1@gmail.com" class="btn-primary">Kirim Email</a>
                <a href="https://www.
   l    inkedin.com/in/hannnmstfa" target="_blank" rel="noopener noreferrer" class="btn-secondary">LinkedIn</a>

                       <a href="https://github.com/hannnmstfa" target="_blank" rel="noopener noreferrer" class="btn-secondary">GitHub</a>
            </div>
        </div>
    </section>

    <a href="#hero" id="backToTopBtn" class="fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-slate-900 text-white shadow-[0_20px_40px_rgba(0,0,0,0.45)] opacity-0 invisible pointer-events-none transition-opacity duration-300 ease-in-out hover:-translate-y-0.5 hover:bg-slate-800" aria-label="Kembali ke atas">
        <span class="text-2xl leading-none">↑</span>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const backToTopBtn = document.getElementById('backToTopBtn');
            const heroSection = document.getElementById('hero');
            if (!backToTopBtn || !heroSection) return;

            const updateButtonVisibility = () => {
                if (window.scrollY > 200) {
                    backToTopBtn.classList.remove('opacity-0', 'invisible', 'pointer-events-none');
                    backToTopBtn.classList.add('opacity-100');
                } else {
                    backToTopBtn.classList.add('opacity-0', 'invisible', 'pointer-events-none');
                    backToTopBtn.classList.remove('opacity-100');
                }
            };

            backToTopBtn.addEventListener('click', function (event) {
                event.preventDefault();
                heroSection.scrollIntoView({ behavior: 'smooth' });
            });

            updateButtonVisibility();
            window.addEventListener('scroll', updateButtonVisibility);
        });
    </script>
</x-app-layout>