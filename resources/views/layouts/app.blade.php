<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="HANSTD adalah studio teknologi pribadi yang fokus pada pengembangan web, self hosting, infrastruktur Cloudflare, dan otomasi kreatif.">
    <title>{{ $title ?? 'HANSTD - Studio Teknologi Pribadi' }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#02030a] font-sans text-slate-100 antialiased">
    <div class="site-grid-bg"></div>
    <div class="glow-orb glow-orb-blue"></div>
    <div class="glow-orb glow-orb-violet"></div>

    @include('components.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('components.footer')
</body>

</html>