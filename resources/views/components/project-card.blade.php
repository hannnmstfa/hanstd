@props([
    'title',
    'description',
    'badge',
    'href' => null,
])

@if ($href)
    <a
        href="{{ $href }}"
        target="_blank"
        rel="noopener noreferrer"
        class="group block relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_16px_60px_rgba(2,8,23,0.45)] backdrop-blur-xl transition duration-300 hover:-translate-y-1.5 hover:border-cyan-300/40 hover:bg-white/10"
    >
@else
    <article class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_16px_60px_rgba(2,8,23,0.45)] backdrop-blur-xl transition duration-300 hover:-translate-y-1.5 hover:border-cyan-300/40 hover:bg-white/10">
@endif
    <div class="absolute -right-10 top-0 h-24 w-24 rounded-full bg-gradient-to-br from-cyan-400/35 to-violet-500/20 blur-2xl transition duration-300 group-hover:scale-110"></div>

    <span class="inline-flex rounded-full border border-cyan-300/35 bg-cyan-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-cyan-200">
        {{ $badge }}
    </span>

    <h3 class="mt-5 font-display text-xl text-white">{{ $title }}</h3>
    <p class="mt-3 text-sm leading-relaxed text-slate-300">{{ $description }}</p>

    <div class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-cyan-200 transition group-hover:text-cyan-100">
        <span>Lihat Detail</span>
        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M9 7h8v8" />
        </svg>
    </div>
@if ($href)
    </a>
@else
    </article>
@endif
