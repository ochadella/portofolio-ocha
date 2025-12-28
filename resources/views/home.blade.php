@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <h1>Hi, aku Ocha 👋</h1>
    <h2>Graphic Designer & Social Media Enthusiast</h2>

    <p>
        Mahasiswa D4 Teknik Informatika yang tertarik pada desain visual,
        branding, dan pengembangan website estetik dengan sentuhan kreatif.
    </p>

    <div class="hero-buttons">
        <a href="#" class="btn-primary">Lihat Portfolio</a>
        <a href="#" class="btn-secondary">Download CV</a>
    </div>
</section>

<!-- ================= RETRO MAGIC COLOR PALETTE ================= -->
<div class="palette">

    <span
        style="background:#FFF7AD"
        onclick="setTheme(
            'linear-gradient(135deg,#FFF7AD,#FFB3AE,#FF49C1,#6A1452)',
            '#FF49C1',
            '#6A1452'
        )">
    </span>

    <span
        style="background:#FFB3AE"
        onclick="setTheme(
            'linear-gradient(135deg,#FFB3AE,#FF49C1,#6A1452,#4A113E)',
            '#FF49C1',
            '#4A113E'
        )">
    </span>

    <span
        style="background:#FF49C1"
        onclick="setTheme(
            'linear-gradient(135deg,#FF49C1,#FFB3AE,#6A1452,#4A113E)',
            '#FF49C1',
            '#6A1452'
        )">
    </span>

    <span
        style="background:#6A1452"
        onclick="setTheme(
            'linear-gradient(135deg,#6A1452,#FF49C1,#FFB3AE,#FFF7AD)',
            '#6A1452',
            '#4A113E'
        )">
    </span>

    <span
        style="background:#4A113E"
        onclick="setTheme(
            'linear-gradient(135deg,#4A113E,#6A1452,#FF49C1,#FFB3AE)',
            '#6A1452',
            '#4A113E'
        )">
    </span>

</div>

{{-- TAMBAHAN WAJIB: BRIDGE FUNCTION --}}
<script>
    function setTheme(gradient, glowTop, glowBottom) {
        document.body.style.background = gradient;
        document.body.style.backgroundSize = '300% 300%';
        document.body.style.animation = 'bgMove 14s ease infinite';

        /* sinkron dengan glow layout */
        document.documentElement.style.setProperty('--glow-top', glowTop);
        document.documentElement.style.setProperty('--glow-bottom', glowBottom);
    }
</script>

@endsection
