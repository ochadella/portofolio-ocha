<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Ocha - Graphic Designer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>
        /* =====================================================
           COLOR PALETTE - RETRO MAGIC
        ===================================================== */
        :root {
            --cream: #FFF7AD;
            --soft-pink: #FFB3AE;
            --hot-pink: #FF49C1;
            --magenta: #6A1452;
            --dark-purple: #4A113E;
            --text-dark: #2a0b1f;
        }

        /* =====================================================
           RESET & BASE
        ===================================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* =====================================================
           🔥 ANIMATED GRADIENT BACKGROUND
        ===================================================== */
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(
                135deg,
                var(--cream),
                var(--soft-pink),
                var(--hot-pink),
                var(--magenta),
                var(--dark-purple)
            );
            background-size: 300% 300%;
            animation: bgMove 18s ease infinite;
            color: var(--text-dark);
            overflow-x: hidden;
            position: relative;
        }

        @keyframes bgMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* =====================================================
           AMBIENT GLOW EFFECTS
        ===================================================== */
        body::before,
        body::after {
            content: "";
            position: fixed;
            inset: -30%;
            z-index: 0;
            pointer-events: none;
        }

        body::before {
            background: radial-gradient(
                circle at top center,
                rgba(106, 20, 82, 0.55),
                transparent 65%
            );
        }

        body::after {
            background: radial-gradient(
                circle at bottom center,
                rgba(74, 17, 62, 0.65),
                transparent 65%
            );
        }

        /* =====================================================
           FLOATING GLOWS
        ===================================================== */
        .glow {
            position: fixed;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.6;
            z-index: 1;
            animation: floatGlow 14s infinite alternate ease-in-out;
        }

        .glow.one { background: #6A1452; top: 6%; left: 6%; }
        .glow.two { background: #4A113E; bottom: 6%; right: 8%; animation-delay: 3s; }
        .glow.three { background: #FF49C1; top: 40%; right: 18%; opacity: 0.35; animation-delay: 6s; }

        /* Cream glows */
        .glow.cream {
            background: radial-gradient(circle, rgba(255, 247, 173, 0.9) 0%, rgba(255, 247, 173, 0.5) 35%, rgba(255, 247, 173, 0.15) 60%, transparent 75%);
            width: 420px; height: 420px; top: 12%; left: 50%; transform: translateX(-50%); filter: blur(60px); opacity: 1; z-index: 5;
        }
        .glow.cream-two {
            background: radial-gradient(circle, rgba(255, 247, 173, 0.75) 0%, rgba(255, 247, 173, 0.4) 35%, rgba(255, 247, 173, 0.12) 60%, transparent 75%);
            width: 380px; height: 380px; top: 55%; left: 15%; filter: blur(70px); opacity: 0.9; z-index: 10; animation-delay: 2s;
        }
        .glow.cream-three {
            background: radial-gradient(circle, rgba(255, 247, 173, 0.8) 0%, rgba(255, 247, 173, 0.45) 35%, rgba(255, 247, 173, 0.1) 60%, transparent 75%);
            width: 350px; height: 350px; bottom: 15%; right: 12%; filter: blur(65px); opacity: 0.85; z-index: 10; animation-delay: 4s;
        }

        @keyframes floatGlow {
            from { transform: translateY(0); }
            to { transform: translateY(-60px); }
        }

        /* =====================================================
           TOP BANNER
        ===================================================== */
        .top-banner {
            position: relative;
            z-index: 100;
            background: linear-gradient(90deg, var(--magenta), var(--dark-purple));
            color: white;
            text-align: center;
            padding: 12px 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        /* =====================================================
           🔥 NAVBAR WITH ABSTRACT ORGANIC BLUR EFFECT
        ===================================================== */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: transform 0.4s ease, opacity 0.4s ease;
            overflow: hidden;
            
            /* Base gradient (not perfectly linear) */
            background: 
                radial-gradient(ellipse at 15% 50%, rgba(74, 17, 62, 1) 0%, transparent 50%),
                radial-gradient(ellipse at 35% 30%, rgba(106, 20, 82, 0.95) 0%, transparent 45%),
                radial-gradient(ellipse at 60% 70%, rgba(138, 43, 95, 0.85) 0%, transparent 50%),
                radial-gradient(ellipse at 75% 40%, rgba(212, 163, 115, 0.8) 0%, transparent 45%),
                radial-gradient(ellipse at 90% 60%, rgba(255, 179, 174, 0.9) 0%, transparent 50%),
                linear-gradient(90deg, rgba(74, 17, 62, 1) 0%, rgba(255, 247, 173, 1) 100%);
            
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.25),
                inset 0 -1px 0 rgba(255, 255, 255, 0.15);
        }

        /* Abstract blur overlay layer 1 (dark spots) */
        .navbar::before {
            content: "";
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(circle at 20% 60%, rgba(74, 17, 62, 0.6) 0%, transparent 35%),
                radial-gradient(circle at 45% 25%, rgba(106, 20, 82, 0.5) 0%, transparent 30%),
                radial-gradient(circle at 70% 80%, rgba(138, 43, 95, 0.4) 0%, transparent 40%);
            filter: blur(40px);
            z-index: -1;
            opacity: 0.8;
        }

        /* Abstract blur overlay layer 2 (light spots) */
        .navbar::after {
            content: "";
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(circle at 55% 50%, rgba(255, 247, 173, 0.5) 0%, transparent 35%),
                radial-gradient(circle at 85% 35%, rgba(255, 179, 174, 0.6) 0%, transparent 40%),
                radial-gradient(circle at 30% 75%, rgba(212, 163, 115, 0.4) 0%, transparent 30%);
            filter: blur(50px);
            z-index: -1;
            opacity: 0.7;
        }

        .navbar.hide {
            transform: translateY(-100%);
            opacity: 0;
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            position: relative;
            z-index: 1;
        }

        /* 🔥 NAVBAR CONTENT CONTAINER */
        .navbar-content {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
        }

        .logo-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--cream), var(--soft-pink));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            overflow: hidden;
        }

        .logo-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo-text {
            color: white;
            font-weight: 800;
            font-size: 1.3rem;
            text-shadow: 0 2px 10px rgba(74, 17, 62, 0.5);
        }

        .navbar-menu {
            display: flex;
            gap: 35px;
            list-style: none;
            align-items: center;
        }

        .navbar-menu a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            text-shadow: 0 2px 8px rgba(74, 17, 62, 0.4);
        }

        .navbar-menu a:hover {
            transform: translateY(-2px);
            text-shadow: 0 4px 12px rgba(255, 247, 173, 0.9);
        }

        .navbar-cta {
            background: var(--cream);
            color: var(--dark-purple);
            padding: 10px 24px;
            border-radius: 999px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 247, 173, 0.4);
        }

        .navbar-cta:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 6px 25px rgba(255, 247, 173, 0.6);
        }

        /* =====================================================
           HERO SECTION
        ===================================================== */
        .hero {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 40px auto 0;
            padding: 0 40px 80px;
        }

        .hero-content {
            background: rgba(255, 240, 246, 0.85);
            backdrop-filter: blur(20px);
            border-radius: 40px;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }

        .hero-badge-left {
            position: absolute;
            top: 30px;
            left: 30px;
            width: 120px;
            height: 120px;
            background: var(--magenta);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.75rem;
            font-weight: 700;
            text-align: center;
            padding: 20px;
            transform: rotate(-15deg);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .hero-badge-right {
            position: absolute;
            top: 30px;
            right: 30px;
            width: 100px;
            height: 100px;
            background: white;
            border: 3px solid var(--magenta);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--magenta);
            font-size: 0.7rem;
            font-weight: 700;
            text-align: center;
            padding: 15px;
            transform: rotate(10deg);
        }

        .hero-text {
            text-align: center;
            margin-bottom: 40px;
        }

        .hero-text .handwriting {
            font-family: 'Caveat', cursive;
            font-size: 1.8rem;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 20px;
            color: var(--dark-purple);
        }

        .hero-text h1 .highlight-yellow { color: #D4A373; }
        .hero-text h1 .highlight-pink { color: var(--hot-pink); }
        .hero-text h1 .highlight-orange { color: #FF8566; }
        .hero-text h1 .highlight-brown { color: #8B7355; }

        .hero-text p {
            font-size: 1.05rem;
            line-height: 1.8;
            max-width: 750px;
            margin: 0 auto 30px;
        }

        .hero-cta {
            background: var(--cream);
            color: var(--dark-purple);
            padding: 16px 40px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .hero-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-images {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 40px;
            gap: 20px;
        }

        .hero-image-left,
        .hero-image-right {
            width: 280px;
            height: 320px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            position: relative;
        }

        .hero-image-left img,
        .hero-image-right img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--soft-pink), var(--cream));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
            color: var(--dark-purple);
        }

        .placeholder-icon {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .placeholder-text {
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* =====================================================
           SCROLLING TICKER
        ===================================================== */
        .ticker {
            position: relative;
            z-index: 2;
            background: linear-gradient(90deg, #FF8566, var(--hot-pink));
            color: white;
            padding: 15px 0;
            overflow: hidden;
            white-space: nowrap;
        }

        .ticker-content {
            display: inline-block;
            animation: scroll 20s linear infinite;
            font-weight: 600;
            font-size: 1rem;
        }

        @keyframes scroll {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        /* =====================================================
           CONTENT SECTION
        ===================================================== */
        .content-section {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 40px;
        }

        .content-bubble {
            background: rgba(255, 220, 240, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 50px;
            padding: 60px;
            position: relative;
        }

        .content-bubble h2 {
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 20px;
            color: var(--dark-purple);
        }

        .content-bubble .handwriting {
            font-family: 'Caveat', cursive;
            font-size: 1.6rem;
            color: var(--hot-pink);
            margin-bottom: 30px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-top: 40px;
        }

        .content-text p {
            font-size: 1rem;
            line-height: 1.9;
            margin-bottom: 20px;
        }

        .content-text .handwriting-note {
            font-family: 'Caveat', cursive;
            font-size: 1.4rem;
            color: #FF8566;
            margin-top: 20px;
        }

        .content-image {
            width: 100%;
            height: 400px;
            background: white;
            border-radius: 30px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .content-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content-sticker {
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100px;
            height: 120px;
            background: var(--hot-pink);
            border-radius: 15px;
            transform: rotate(-10deg);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: white;
            font-size: 0.85rem;
            padding: 15px;
            text-align: center;
        }

        /* =====================================================
           SERVICES SECTION
        ===================================================== */
        .services-section {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 80px auto;
            padding: 60px 40px;
            text-align: center;
        }

        .services-header {
            margin-bottom: 60px;
        }

        .services-header h2 {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.3;
            color: var(--dark-purple);
            margin-bottom: 10px;
        }

        .services-header h2 .italic {
            font-style: italic;
            color: var(--hot-pink);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: white;
            border-radius: 30px;
            padding: 40px 30px;
            position: relative;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 3px solid var(--magenta);
        }

        .service-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 80px;
            background: var(--dark-purple);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .service-card h3 {
            font-family: 'Caveat', cursive;
            font-size: 1.4rem;
            margin: 30px 0 15px;
            color: var(--text-dark);
        }

        .service-card h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-purple);
        }

        .service-card p {
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .service-cta {
            background: var(--hot-pink);
            color: white;
            padding: 12px 30px;
            border-radius: 999px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .service-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 73, 193, 0.4);
        }

        .service-cta.pink { background: var(--hot-pink); }
        .service-cta.orange { background: #FF8566; }
        .service-cta.lime { background: #B8C649; }

        /* =====================================================
           ABOUT SECTION
        ===================================================== */
        .about-section {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 80px auto;
            padding: 60px 40px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 60px;
            align-items: center;
        }

        .about-image-container {
            position: relative;
        }

        .about-image {
            width: 100%;
            height: 450px;
            background: white;
            border-radius: 30px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-label {
            position: absolute;
            top: -20px;
            left: -20px;
            font-family: 'Caveat', cursive;
            font-size: 1.5rem;
            color: var(--hot-pink);
            background: white;
            padding: 10px 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transform: rotate(-5deg);
        }

        .about-content {
            background: rgba(255, 240, 246, 0.85);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 50px;
        }

        .about-greeting {
            background: var(--cream);
            display: inline-block;
            padding: 12px 28px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--dark-purple);
            margin-bottom: 20px;
        }

        .about-content h2 {
            font-family: 'Caveat', cursive;
            font-size: 2rem;
            color: var(--magenta);
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1rem;
            line-height: 1.9;
            margin-bottom: 15px;
        }

        /* =====================================================
           FOOTER
        ===================================================== */
        footer {
            position: relative;
            z-index: 2;
            background: var(--dark-purple);
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin-top: 80px;
        }

        footer p {
            margin: 8px 0;
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */
        @media (max-width: 968px) {
            .navbar-menu { display: none; }
            .hero-content { padding: 40px 30px; }
            .hero-text h1 { font-size: 2.5rem; }
            .hero-images { flex-direction: column; align-items: center; }
            .content-grid, .about-grid { grid-template-columns: 1fr; }
            .services-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>

    <!-- FLOATING GLOWS -->
    <div class="glow one"></div>
    <div class="glow two"></div>
    <div class="glow three"></div>
    <div class="glow cream"></div>
    <div class="glow cream-two"></div>
    <div class="glow cream-three"></div>

    <!-- TOP BANNER -->
    <div class="top-banner">
        ✉️ Get your design resources from Ocha's Vault
    </div>

    <!-- 🔥 NAVBAR WITH ABSTRACT BLUR -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-content">
                <a href="#" class="navbar-logo">
                    <div class="logo-image">
                        <div class="placeholder">
                            <div class="placeholder-icon">🌸</div>
                        </div>
                    </div>
                    <div class="logo-text">Portfolio Ocha</div>
                </a>

                <ul class="navbar-menu">
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#work" class="navbar-cta">WORK WITH ME</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-badge-left">✨ creative media</div>
            <div class="hero-badge-right">💻 Informatika</div>

            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>
                    Your design and technology<br>
                    should feel <span class="highlight-yellow">balanced</span>,<br>
                    <span class="highlight-pink">functional</span> & <span class="highlight-orange">visually<br>
                    engaging</span>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>
                </h1>
                <p>
                    But managing content and digital platforms right now feels overwhelming,<br>
                    time-consuming, and demanding? I can help turn creative ideas into engaging<br>
                    content, well-managed social media, and functional websites that connect<br>
                    with your audience and support growth.
                </p>
                <a href="#" class="hero-cta">FIND OUT HOW</a>
            </div>

            <div class="hero-images">
                <!-- 🖼️ FOTO 1: WORKSPACE CASUAL -->
                <div class="hero-image-left">
                    <div class="placeholder">
                        <div class="placeholder-icon">📸</div>
                        <div class="placeholder-text">
                            FOTO 1: Workspace Setup<br>
                            (Laptop, kopi, notebook)
                        </div>
                    </div>
                </div>

                <div style="flex: 1;"></div>

                <!-- 🖼️ FOTO 2: CREATIVE/PRESENTING -->
                <div class="hero-image-right">
                    <div class="placeholder">
                        <div class="placeholder-icon">📸</div>
                        <div class="placeholder-text">
                            FOTO 2: Creative Shot<br>
                            (Pegang design work/tablet)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCROLLING TICKER -->
    <div class="ticker">
        <div class="ticker-content">
            ✨ Design is more than just pretty visuals ✨ Design is more than just pretty visuals ✨ Design is more than just pretty visuals ✨ Design is more than just pretty visuals ✨
        </div>
    </div>

    <!-- CONTENT SECTION -->
    <section class="content-section">
        <div class="content-bubble">
            <div class="content-sticker">🎨 Design Magic</div>

            <h2>
                Your feed is full of designs trying to look professional & 
                your inbox is packed with templates you keep meaning to customize...
            </h2>
            <p class="handwriting">So, where does your creativity fit into all that?</p>

            <div class="content-grid">
                <div class="content-text">
                    <p>I get it, you don't want to add to the noise. But design isn't something you can just brush off.</p>
                    <p>You're creating the brand & posting on social media, but the magic just isn't happening.</p>
                    <p>You see all the amazing designs other businesses are putting out there, so it should be easier, right? But something's still... off.</p>
                    <p><strong>It's time to make design work for you, not against you.</strong></p>
                    <p class="handwriting-note">This is where I can help →</p>
                </div>

                <div class="content-image">
                    <div class="placeholder">
                        <div class="placeholder-icon">📱</div>
                        <div class="placeholder-text">Upload mockup<br>atau design portfolio</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="services-section">
        <div class="services-header">
            <h2>Go from post & ghost to<br>content that just <span class="italic">(gets)</span> clicks</h2>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-badge" style="background: #B8C649;">📐</div>
                <h3>Strategy & Planning</h3>
                <h4>The Visual Strategy</h4>
                <p>Your surefire path to design that isn't just adding to the noise but actually tells your story.</p>
                <a href="#" class="service-cta lime">LET'S STRATEGIZE</a>
            </div>

            <div class="service-card">
                <div class="service-badge" style="background: var(--hot-pink);">🎨</div>
                <h3>Design & Creation</h3>
                <h4>The Design Package</h4>
                <p>Tackle 30 days of high-impact design content for your business with me, custom-made just for you.</p>
                <a href="#" class="service-cta pink">START DESIGNING</a>
            </div>

            <div class="service-card">
                <div class="service-badge" style="background: var(--dark-purple);">💎</div>
                <h3>Done-for-you branding</h3>
                <h4>The Premium Suite</h4>
                <p>A portal stuffed to the brim with brand assets, templates & resources you can simply copy & paste.</p>
                <a href="#" class="service-cta orange">UNLOCK THE SUITE</a>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about-section">
        <div class="about-grid">
            <div class="about-image-container">
                <div class="about-label">Graphic Designer ✨</div>

                <!-- 🖼️ FOTO 3: PROFESSIONAL PORTRAIT -->
                <div class="about-image">
                    <div class="placeholder">
                        <div class="placeholder-icon">📸</div>
                        <div class="placeholder-text">
                            FOTO 3: Professional Portrait<br>
                            (Workspace background, confident pose)<br>
                            <small style="font-size: 0.75rem;">Smart casual outfit recommended</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-content">
                <div class="about-greeting">Heya, I'm Ocha!</div>
                <h2>Marketer by trade, small business owner by accident</h2>
                <p>I run this lovely portfolio showcasing my passion as a Graphic Designer & Tech enthusiast. I'm a D4 Informatics Engineering student who fell in love with visual storytelling.</p>
                <p>Going from a first-year IT student to now building brands and creating compelling designs - it was always a dream. And I came here, I live in a little village outside of my campus, where I spend my days designing, coding, and bringing creative ideas to life.</p>
                <p><strong>Let me help you turn your vision into stunning visual reality.</strong></p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p><strong>✨ Let's create something beautiful together!</strong></p>
        <p>📧 ocha.della@email.com | 📱 +62 xxx-xxxx-xxxx</p>
        <p>© 2025 Ocha Della - Graphic Designer & Informatika Student</p>
    </footer>

    <script>
        // AUTO-HIDE NAVBAR ON SCROLL
        let lastScroll = 0;
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            const currentScroll = window.scrollY;
            if (currentScroll > 150) {
                if (currentScroll > lastScroll) {
                    navbar.classList.add('hide');
                } else {
                    navbar.classList.remove('hide');
                }
            } else {
                navbar.classList.remove('hide');
            }
            lastScroll = currentScroll;
        });

        console.log('%c🌸 Portfolio Ocha - Final Edition', 'font-size: 20px; font-weight: bold; color: #FF49C1;');
        console.log('%c✨ Abstract Navbar Blur + Better Text Formatting', 'font-size: 14px; color: #6A1452;');
    </script>

</body>
</html>