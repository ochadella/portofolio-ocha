<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Ocha - Graphic Designer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cream: #FFF7AD;
            --soft-pink: #FFB3AE;
            --hot-pink: #FF49C1;
            --magenta: #6A1452;
            --dark-purple: #4A113E;
            --text-dark: #2a0b1f;
        }

        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        }

        html { 
            scroll-behavior: smooth;
            overflow-x: hidden;
            color-scheme: light;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            color: var(--text-dark);
            overflow-x: hidden;
            position: relative;
            max-width: 100vw;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -2;
            background: linear-gradient(135deg, var(--cream), var(--soft-pink), var(--hot-pink), var(--magenta), var(--dark-purple));
            background-size: 300% 300%;
            animation: bgMove 18s ease infinite, fadeScene 20s ease-in-out infinite;
        }

        body::after {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            background: var(--cream);
            animation: fadeSceneReverse 20s ease-in-out infinite;
        }

        @keyframes bgMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes fadeScene {
            0%, 40% { opacity: 1; }
            50%, 90% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeSceneReverse {
            0%, 40% { opacity: 0; }
            50%, 90% { opacity: 1; }
            100% { opacity: 0; }
        }

        .ambient-layer {
            content: "";
            position: fixed;
            inset: -30%;
            z-index: 0;
            pointer-events: none;
        }

        .ambient-layer.top {
            background: radial-gradient(circle at top center, rgba(106, 20, 82, 0.55), transparent 65%);
        }

        .ambient-layer.bottom {
            background: radial-gradient(circle at bottom center, rgba(74, 17, 62, 0.65), transparent 65%);
        }

        .glow {
            position: fixed;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.6;
            z-index: 1;
            animation: floatGlow 14s infinite alternate ease-in-out;
            pointer-events: none;
        }

        .glow.one { background: #6A1452; top: 6%; left: 6%; }
        .glow.two { background: #4A113E; bottom: 6%; right: 8%; animation-delay: 3s; }
        .glow.three { background: #FF49C1; top: 40%; right: 18%; opacity: 0.35; animation-delay: 6s; }

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

        .navbar { 
            position: sticky; 
            top: 0; 
            z-index: 1000; 
            transition: transform 0.4s ease, opacity 0.4s ease; 
            background: linear-gradient(90deg, rgba(74, 17, 62, 1) 0%, rgba(106, 20, 82, 0.98) 20%, rgba(138, 43, 95, 0.95) 40%, rgba(212, 163, 115, 0.9) 60%, rgba(255, 179, 174, 0.95) 80%, rgba(255, 247, 173, 1) 100%); 
            filter: blur(0px); 
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(255, 255, 255, 0.15); 
        }

        .navbar::before { 
            content: ""; 
            position: absolute; 
            inset: 0; 
            background: linear-gradient(90deg, rgba(74, 17, 62, 0.2) 0%, rgba(106, 20, 82, 0.15) 25%, rgba(212, 163, 115, 0.1) 50%, rgba(255, 179, 174, 0.15) 75%, rgba(255, 247, 173, 0.2) 100%); 
            filter: blur(25px); 
            z-index: -1; 
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
        }

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
            background: linear-gradient(90deg, #FFF7AD, #FFE68A); 
            color: #1c0a13; 
            padding: 10px 24px; 
            border-radius: 999px; 
            font-weight: 800; 
            text-decoration: none; 
            transition: all 0.3s ease; 
            box-shadow: 0 4px 15px rgba(255, 247, 173, 0.45); 
            border: 2px solid rgba(74, 17, 62, 0.35); 
            text-shadow: none; 
            filter: saturate(1.05) contrast(1.12); 
        }

        .navbar-cta:hover { 
            transform: translateY(-2px) scale(1.05); 
            box-shadow: 0 6px 25px rgba(255, 247, 173, 0.6); 
        }

        .hero { 
            position: relative; 
            z-index: 2; 
            max-width: 1200px; 
            margin: 100px auto 0; 
            padding: 0 40px 80px; 
        }

        .hero-content { 
            background: rgba(255, 240, 246, 0.85); 
            backdrop-filter: blur(20px); 
            border-radius: 40px; 
            padding: 60px; 
            position: relative; 
            overflow: visible; 
        }

        .hero-badge-left { 
            position: absolute; 
            top: 8px; 
            left: 26px; 
            width: 90px; 
            height: 90px; 
            background: var(--magenta); 
            border-radius: 50%; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            color: white; 
            font-size: 0.75rem; 
            font-weight: 700; 
            text-align: center; 
            padding: 14px; 
            transform: rotate(-15deg); 
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3); 
            overflow: hidden; 
        }

        .hero-badge-right { 
            position: absolute; 
            top: 8px; 
            right: 26px; 
            width: 80px; 
            height: 80px; 
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
            padding: 12px; 
            transform: rotate(10deg); 
            overflow: hidden; 
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
            line-height: 1.2; 
            margin-bottom: 20px; 
            color: var(--dark-purple); 
        }

        .hero-text h1 .highlight-yellow { color: #D4A373; }
        .hero-text h1 .highlight-pink { color: var(--hot-pink); }
        .hero-text h1 .highlight-orange { color: #FF8566; }

        .hero-text p { 
            font-size: 1.05rem; 
            line-height: 1.8; 
            max-width: 650px; 
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

        .cv-section { 
            position: relative; 
            z-index: 2; 
            max-width: 1200px; 
            margin: 80px auto; 
            padding: 0 40px; 
        }

        .cv-container { 
            background: rgba(255, 240, 246, 0.9); 
            backdrop-filter: blur(20px); 
            border-radius: 40px; 
            padding: 60px; 
            text-align: center; 
        }

        .cv-container h2 { 
            font-size: 2.5rem; 
            font-weight: 800; 
            color: var(--dark-purple); 
            margin-bottom: 20px; 
        }

        .cv-container p { 
            font-size: 1.1rem; 
            line-height: 1.8; 
            margin-bottom: 30px; 
            color: var(--text-dark); 
        }

        .cv-download-btn { 
            background: var(--hot-pink); 
            color: white; 
            padding: 16px 40px; 
            border-radius: 999px; 
            font-weight: 700; 
            font-size: 1.05rem; 
            text-decoration: none; 
            display: inline-block; 
            transition: all 0.3s ease; 
            box-shadow: 0 6px 20px rgba(255, 73, 193, 0.4); 
        }

        .cv-download-btn:hover { 
            transform: translateY(-3px); 
            box-shadow: 0 8px 30px rgba(255, 73, 193, 0.6); 
        }

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
            top: -50px; 
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

        .services-section { 
            position: relative; 
            z-index: 100; 
            max-width: 1200px; 
            margin: 80px auto; 
            padding: 60px 40px; 
            text-align: center; 
        }

        .services-header { margin-bottom: 60px; }

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

        .about-image-container { position: relative; }

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

        .contact-section { 
            position: relative; 
            z-index: 2; 
            max-width: 1200px; 
            margin: 80px auto; 
            padding: 60px 40px; 
        }

        .contact-container { 
            background: rgba(255, 240, 246, 0.9); 
            backdrop-filter: blur(20px); 
            border-radius: 40px; 
            padding: 60px; 
            text-align: center; 
        }

        .contact-container h2 { 
            font-size: 2.5rem; 
            font-weight: 800; 
            color: var(--dark-purple); 
            margin-bottom: 20px; 
        }

        .contact-container p { 
            font-size: 1.1rem; 
            line-height: 1.8; 
            margin-bottom: 50px; 
            color: var(--text-dark); 
        }

        .contact-logos { 
            display: flex; 
            justify-content: center; 
            gap: 50px; 
            flex-wrap: wrap; 
            align-items: center; 
        }

        .contact-logo-link { 
            transition: all 0.3s ease; 
            display: inline-block; 
        }

        .contact-logo-link:hover { transform: translateY(-8px) scale(1.15); }

        .contact-logo-link img { 
            width: 70px; 
            height: 70px; 
            object-fit: contain; 
            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.2)); 
            transition: all 0.3s ease; 
        }

        .contact-logo-link:hover img { filter: drop-shadow(0 10px 30px rgba(255, 73, 193, 0.7)); }

        footer { 
            position: relative; 
            z-index: 2; 
            background: var(--dark-purple); 
            color: white; 
            text-align: center; 
            padding: 40px 20px; 
            margin-top: 80px; 
        }

        footer p { margin: 8px 0; }

        /* 🎯 HAMBURGER MENU */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
            padding: 10px;
            z-index: 1001;
        }
        .hamburger span {
            width: 30px;
            height: 3px;
            background: white;
            border-radius: 3px;
            transition: all 0.3s ease;
        }
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(8px, 8px);
        }
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(8px, -8px);
        }

        /* 📱 TABLET (max-width: 968px) */
        @media (max-width: 968px) {
            .hamburger { display: flex; }
            
            .navbar-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 220px;
                height: 100vh;
                background: rgba(74, 17, 62, 0.92);
                flex-direction: column;
                padding: 80px 24px 24px;
                gap: 20px;
                transition: right 0.4s ease;
                box-shadow: -4px 0 18px rgba(0,0,0,0.2);
            }
            .navbar-menu.active { right: 0; }
            .navbar-menu a {
                font-size: 1rem;
                padding: 12px 0;
                border-bottom: 1px solid rgba(255,255,255,0.08);
            }
            .navbar-cta {
                margin-top: 20px;
                text-align: center;
            }

            .navbar-container { padding: 0 25px; }
            .navbar-content { padding: 15px 0; }
            
            .hero { padding: 0 25px 60px; margin-top: 95px; }
            .hero-content { padding: 100px 30px 40px; border-radius: 30px; }
            .hero-text h1 { font-size: 2.2rem; line-height: 1.3; }
            .hero-text p { font-size: 0.95rem; line-height: 1.7; }
            .hero-badge-left, .hero-badge-right { width: 56px; height: 68px; font-size: 0.55rem; padding: 8px; }
            .hero-badge-left { top: 16px; left: 16px; }
            .hero-badge-right { top: 16px; right: 16px; }
            
            .services-section { padding: 40px 25px; }
            .services-header h2 { font-size: 2.2rem; }
            .services-grid { 
                grid-template-columns: 1fr; 
                gap: 40px; 
            }
            
            .content-section { padding: 0 25px; margin: 60px auto; }
            .content-bubble { padding: 40px 30px; border-radius: 35px; }
            .content-grid { 
                grid-template-columns: 1fr; 
                gap: 30px; 
            }
            .content-image { height: 300px; }
            .content-sticker { 
                width: 90px; 
                height: 100px; 
                font-size: 0.8rem; 
                padding: 12px;
                top: -75px;
                left: -15px;
            }
            
            .about-section { padding: 40px 25px; }
            .about-grid { 
                grid-template-columns: 1fr; 
                gap: 40px; 
            }
            .about-content { padding: 35px; }
            .about-image { height: 350px; }
            
            .contact-section { padding: 40px 25px; }
            .contact-container { padding: 40px 30px; }
            .contact-logos { gap: 35px; }
            .contact-logo-link img { width: 60px; height: 60px; }
            
            .cv-section .cv-container { padding: 40px 30px; }
        }

        /* 📱 MOBILE (max-width: 640px) */
        @media (max-width: 640px) {
            body { padding: 0; margin: 0; }
                        /* Minimal sidebar for mobile */
                        .navbar-menu {
                            width: 70%;
                            background: rgba(74, 17, 62, 0.95);
                            padding: 70px 20px 20px;
                            gap: 18px;
                        }
                        .navbar-menu a {
                            font-size: 0.95rem;
                            padding: 10px 0;
                            border-bottom: 1px solid rgba(255,255,255,0.08);
                        }
                        .navbar-menu .navbar-cta { align-self: flex-start; }
                        .navbar-cta { padding: 12px 22px; font-size: 0.85rem; letter-spacing: 0.02em; }
            
            .top-banner { font-size: 0.75rem; padding: 8px 12px; }
            
            .logo-text { font-size: 1rem; }
            .logo-image { width: 38px; height: 38px; }
            
            .hero { padding: 0 15px 45px; margin-top: 100px;}
            .hero-content { padding: 85px 20px 30px; border-radius: 22px; }
            .hero-text h1 { 
                font-size: 1.6rem; 
                line-height: 1.3;
                word-wrap: break-word;
            }
            .hero-text .handwriting { font-size: 1rem; }
            .hero-text p { 
                font-size: 0.85rem;
                line-height: 1.6;
                padding: 0 5px;
            }
            .hero-badge-left, .hero-badge-right { 
                width: 8px; 
                height: 24px; 
                font-size: 0.32rem; 
                padding: 3px;
            }
            .hero-badge-left { top: 10px; left: 6px; }
            .hero-badge-right { top: 10px; right: 6px; }
            
            .services-section { padding: 30px 15px; margin: 50px auto; }
            .services-header { margin-bottom: 35px; }
            .services-header h2 { 
                font-size: 1.6rem; 
                line-height: 1.3;
                padding: 0 5px;
            }
            .service-card { padding: 38px 20px; border-radius: 22px; }
            .service-badge { width: 62px; height: 62px; font-size: 1.5rem; top: -11px; }
            .service-card h3 { font-size: 1.1rem; margin: 22px 0 10px; }
            .service-card h4 { font-size: 1.2rem; }
            .service-card p { font-size: 0.85rem; margin-bottom: 18px; line-height: 1.6; }
            .service-cta { padding: 10px 22px; font-size: 0.85rem; }
            
            .content-section { padding: 0 15px; margin: 45px auto; }
            .content-bubble { padding: 30px 20px; border-radius: 25px; }
            .content-bubble h2 { 
                font-size: 1.5rem; 
                line-height: 1.3;
            }
            .content-bubble .handwriting { font-size: 1.2rem; }
            .content-text p { font-size: 0.9rem; line-height: 1.7; }
            .content-image { height: 230px; border-radius: 18px; }
            .content-sticker { 
                width: 65px; 
                height: 80px; 
                font-size: 0.7rem; 
                padding: 10px;
                top: -65px;
                left: -12px;
            }
            
            .about-section { padding: 30px 15px; margin: 50px auto; }
            .about-content { padding: 28px 20px; border-radius: 22px; }
            .about-greeting { padding: 9px 20px; font-size: 1rem; }
            .about-content h2 { font-size: 1.5rem; }
            .about-content p { font-size: 0.9rem; line-height: 1.7; }
            .about-image { height: 280px; border-radius: 22px; }
            .about-label { 
                font-size: 1.1rem; 
                padding: 7px 13px; 
                top: -15px;
                left: -15px;
            }
            
            .contact-section { padding: 30px 15px; margin: 50px auto; }
            .contact-container { padding: 32px 20px; border-radius: 25px; }
            .contact-container h2 { 
                font-size: 1.8rem;
                line-height: 1.3;
            }
            .contact-container p { 
                font-size: 0.95rem; 
                margin-bottom: 32px;
                line-height: 1.6;
                padding: 0 5px;
            }
            .contact-logos { gap: 28px; }
            .contact-logo-link img { width: 52px; height: 52px; }
            
            .cv-section { padding: 30px 15px; margin: 50px auto; }
            .cv-container { padding: 32px 20px; border-radius: 25px; }
            .cv-container h2 { font-size: 1.8rem; }
            .cv-container p { 
                font-size: 0.9rem; 
                margin-bottom: 28px;
                line-height: 1.6;
                padding: 0 5px;
            }
            .cv-download-btn { padding: 13px 32px; font-size: 0.95rem; }
            
            footer { padding: 28px 15px; margin-top: 55px; }
            footer p { 
                font-size: 0.85rem;
                line-height: 1.6;
            }
            
            .glow { width: 220px; height: 220px; filter: blur(60px); }
            .glow.cream, .glow.cream-two, .glow.cream-three { 
                width: 260px; 
                height: 260px; 
                height: 280px; 
                filter: blur(50px); 
            }
        }

        /* 📱 EXTRA SMALL MOBILE (max-width: 400px) */
        @media (max-width: 400px) {
            .hero-text h1 { font-size: 1.5rem; }
            .services-header h2 { font-size: 1.6rem; }
            .content-bubble h2 { font-size: 1.5rem; }
            .navbar-menu { width: 100%; right: -100%; }
            .contact-container h2, .cv-container h2 { font-size: 1.8rem; }
        }

        .logo-image, .hero-badge-left, .hero-badge-right, .about-image { 
            background: transparent !important; 
            border-radius: 0 !important; 
            overflow: visible !important; 
        }

        .logo-image img, .hero-badge-left img, .hero-badge-right img, .about-image img { 
            object-fit: contain !important; 
            background: transparent !important; 
        }
    </style>
</head>
<body>
    <div class="ambient-layer top"></div>
    <div class="ambient-layer bottom"></div>
    <div class="glow one"></div>
    <div class="glow two"></div>
    <div class="glow three"></div>
    <div class="glow cream"></div>
    <div class="glow cream-two"></div>
    <div class="glow cream-three"></div>

    <div class="top-banner">✉️ Get your design resources from Ocha's Vault</div>

    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-content">
                <a href="#home" class="navbar-logo">
                    <div class="logo-image"><img src="/images/logonavbar.png" alt="Logo"></div>
                    <div class="logo-text">Portfolio Ocha</div>
                </a>
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="navbar-menu" id="navbarMenu">
                    <li><a href="#cv" class="nav-link">CV</a></li>
                    <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                    <li><a href="#contact" class="navbar-cta nav-link">WORK WITH ME</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-badge-left"><img src="/images/3.png" alt="Humanize"></div>
            <div class="hero-badge-right"><img src="/images/4.png" alt="Build Trust"></div>
            <div class="hero-text">
                <p class="handwriting">Hey, I'm a Creative Media & Informatics Student</p>
                <h1>Your design and technology<br>should feel<br><span class="highlight-yellow">balanced</span>, <span class="highlight-pink">functional</span> & <span class="highlight-orange"><br>visually engaging</span></h1>
                <p>But managing content and digital platforms right now feels overwhelming,<br>time-consuming, and demanding?<br>I can help turn creative ideas into engaging content, well-managed<br>social media, and functional websites that connect with<br>your audience and support growth.</p>
            </div>
        </div>
    </section>

    <div class="ticker">
        <div class="ticker-content">✨ Creativity, strategy, and technology work better together ✨ Creativity, strategy, and technology work better together ✨ Creativity, strategy, and technology work better together ✨</div>
    </div>

    <section class="cv-section" id="cv">
        <div class="cv-container">
            <h2>📄 My Curriculum Vitae</h2>
            <p>Discover my educational background, skills, and professional experience.<br>Download my CV to learn more about my journey in creative media and informatics.</p>
            <a href="https://drive.google.com/file/d/1hQm1NVPs7MEYZGyY7iEUw0nW9F1bj1Er/view?usp=sharing" download class="cv-download-btn">📥 VIEW CV</a>
        </div>
    </section>

    <section class="content-section">
        <div class="content-bubble">
            <div class="content-sticker">🎨 Design Magic</div>
            <h2>Your digital space is filled with content, ideas, and tools you're trying to manage all at once…</h2>
            <p class="handwriting">So where does creativity, strategy, and structure come in?</p>
            <div class="content-grid">
                <div class="content-text">
                    <p>I get it, you don't want to add more noise. But managing your digital presence isn't something you can ignore.</p>
                    <p>You're creating content and posting on social media, but things don't feel consistent or effective yet.</p>
                    <p>You see others building strong content and platforms, so it feels like it should be easier, right? But something's still... off.</p>
                    <p><strong>It's time to make creativity, strategy, and technology work for you, not against you.</strong></p>
                    <p class="handwriting-note">This is where I can help →</p>
                </div>
                <div class="content-image"><img src="/images/5.png" alt="Mockup"></div>
            </div>
        </div>
    </section>

    <section class="services-section" id="portfolio">
        <div class="services-header">
            <h2>From ideas to impact,<br>creative work that <span class="italic">(actually)</span> connects</h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-badge" style="background: #B8C649;">📐</div>
                <h3>Website & UI/UX</h3>
                <h4>Web & UI/UX Portfolio</h4>
                <p>Explore my work in website design and UI/UX from layout, user flow, to clean and functional interfaces built with purpose.</p>
                <a href="{{ url('/portfolio/webuiux') }}" class="service-cta lime" style="position: relative; z-index: 20; cursor: pointer;">LET'S VIEW</a>
            </div>

            <div class="service-card">
                <div class="service-badge" style="background: var(--hot-pink);">🎨</div>
                <h3>Design & SocMed Creation</h3>
                <h4>Photo & Visual Design</h4>
                <p>A collection of creative visuals, photography, and graphic designs crafted to tell stories and elevate visual identity.</p>
                <a href="{{ url('/portfolio/designphoto') }}" class="service-cta pink" style="position: relative; z-index: 20; cursor: pointer;">SEE CREATIVE WORK</a>
            </div>

            <div class="service-card">
                <div class="service-badge" style="background: var(--dark-purple);">💎</div>
                <h3>Motion & Video</h3>
                <h4>Video Portfolio</h4>
                <p>Short videos, reels, and motion content edited with storytelling, rhythm, and audience engagement in mind.</p>
                <a href="{{ url('/portfolio/videoportof') }}" class="service-cta orange" style="position: relative; z-index: 20; cursor: pointer;">WATCH VIDEOS</a>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="about-grid">
            <div class="about-image-container">
                <div class="about-label">Creative Media & Web Enthusiast ✨</div>
                <div class="about-image"><img src="/images/6.png" alt="About"></div>
            </div>
            <div class="about-content">
                <div class="about-greeting">Heya, I'm Ocha!</div>
                <h2>Creative by passion, Informatics student by training</h2>
                <p>This portfolio showcases my journey in creative media, social media management, and my growing interest in web development. I'm a D4 Informatics student who enjoys turning ideas into structured, engaging digital work.</p>
                <p>Starting as an IT student, I gradually explored creative work, content creation, and digital platforms through projects and organizations. Today, I focus on developing creative content, managing social media, and building simple web-based solutions to support digital communication.</p>
                <p><strong>Let me help you turn your vision into stunning visual reality.</strong></p>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="contact-container">
            <h2>💌 Let's Connect!</h2>
            <p>Ready to bring your creative ideas to life?<br>Feel free to reach out through any of these channels.</p>
            <div class="contact-logos">
                <a href="https://wa.me/682142063367" target="_blank" class="contact-logo-link">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
                </a>
                <a href="https://instagram.com/chdelf" target="_blank" class="contact-logo-link">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                </a>
                <a href="mailto:ochadella66@gmail.com" target="_blank" class="contact-logo-link">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg" alt="Gmail">
                </a>
                <!-- <a href="https://linkedin.com/in/ochadella" target="_blank" class="contact-logo-link">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
                </a> -->
            </div>
        </div>
    </section>

    <footer>
        <p><strong>✨ Let's create something beautiful together!</strong></p>
        <p>📧 ochadella66@gmail.com | 📱 +62 821 4206 3367</p>
        <p>© 2025 Ocha Della - Graphic Designer & Informatika Student</p>
    </footer>

    <script>
        // Hamburger menu toggle
        const hamburger = document.getElementById('hamburger');
        const navbarMenu = document.getElementById('navbarMenu');
        const navLinks = document.querySelectorAll('.nav-link');
        
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navbarMenu.classList.toggle('active');
        });
        
        // Close menu when clicking nav links
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navbarMenu.classList.remove('active');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !navbarMenu.contains(e.target)) {
                hamburger.classList.remove('active');
                navbarMenu.classList.remove('active');
            }
        });
        
        // Navbar hide on scroll
        let lastScroll = 0;
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', function() {
            const currentScroll = window.scrollY;
            if (currentScroll > 150) {
                if (currentScroll > lastScroll) { navbar.classList.add('hide'); }
                else { navbar.classList.remove('hide'); }
            } else { navbar.classList.remove('hide'); }
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>