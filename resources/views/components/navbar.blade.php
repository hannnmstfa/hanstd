<header id="navbar" class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-slate-950/50 backdrop-blur-xl transition-all duration-300">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
        <a href="#hero" class="group inline-flex items-center gap-3" aria-label="Beranda HANSTD">
            <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-400/70 via-blue-500/70 to-violet-500/70 text-sm font-bold text-white shadow-[0_0_30px_rgba(79,70,229,0.45)]">H</span>
            <span class="font-display text-lg tracking-[0.22em] text-slate-100 transition group-hover:text-cyan-300">HANSTD</span>
        </a>

        <nav class="hidden items-center gap-8 text-sm font-medium text-slate-300 lg:flex">
            <a href="#tentang" class="nav-link">Tentang</a>
            <a href="#proyek" class="nav-link">Proyek</a>
            <a href="#layanan" class="nav-link">Layanan</a>
            <a href="#kontak" class="nav-link">Kontak</a>
        </nav>

        <button
            type="button"
            class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/5 p-2.5 text-slate-200 transition hover:border-cyan-300/40 hover:text-cyan-200 lg:hidden"
            aria-controls="mobile-menu"
            aria-expanded="false"
            data-mobile-toggle
        >
            <span class="sr-only">Buka menu navigasi</span>
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden border-t border-white/10 bg-slate-950/90 lg:hidden" data-mobile-menu>
        <nav class="mx-auto flex max-w-7xl flex-col px-6 py-5 text-sm font-medium text-slate-200">
            <a href="#tentang" class="mobile-nav-link">Tentang</a>
            <a href="#proyek" class="mobile-nav-link">Proyek</a>
            <a href="#layanan" class="mobile-nav-link">Layanan</a>
            <a href="#kontak" class="mobile-nav-link">Kontak</a>
        </nav>
    </div>
</header>
