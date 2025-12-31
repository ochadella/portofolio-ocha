<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web & UI/UX Portfolio - Ocha</title>
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
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; overflow-x: hidden; color-scheme: light; }
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
            animation: bgMove 18s ease infinite;
        }
        @keyframes bgMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .glow {
            position: fixed;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.4;
            z-index: -1;
            animation: floatGlow 14s infinite alternate ease-in-out;
        }
        .glow.one { background: #6A1452; top: 10%; left: 10%; }
        .glow.two { background: #FF49C1; bottom: 10%; right: 10%; animation-delay: 3s; }
        @keyframes floatGlow { from { transform: translateY(0); } to { transform: translateY(-60px); } }
        
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: linear-gradient(90deg, rgba(74, 17, 62, 0.95) 0%, rgba(106, 20, 82, 0.95) 50%, rgba(255, 247, 173, 0.95) 100%);
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }
        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
            width: 100%;
        }
        .navbar-content {
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
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .logo-text {
            color: white;
            font-weight: 800;
            font-size: 1.3rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        .back-btn {
            background: var(--cream);
            color: var(--dark-purple);
            padding: 10px 30px;
            border-radius: 999px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 247, 173, 0.4);
        }
        .back-btn:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 6px 25px rgba(255, 247, 173, 0.6);
        }

        .hero-portfolio {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 90px auto 40px;
            padding: 0 40px;
            text-align: center;
        }
        .hero-portfolio h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--dark-purple);
            margin-bottom: 15px;
            text-shadow: 0 2px 20px rgba(255, 73, 193, 0.3);
            word-wrap: break-word;
            max-width: 100%;
        }
        .hero-portfolio .subtitle {
            font-family: 'Caveat', cursive;
            font-size: 1.8rem;
            color: var(--hot-pink);
            margin-bottom: 20px;
        }
        .hero-portfolio p {
            font-size: 1.1rem;
            line-height: 1.8;
            max-width: 700px;
            margin: 0 auto 40px;
            color: var(--text-dark);
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }
        .filter-btn {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid var(--magenta);
            color: var(--magenta);
            padding: 12px 28px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .filter-btn:hover,
        .filter-btn.active {
            background: var(--hot-pink);
            color: white;
            border-color: var(--hot-pink);
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(255, 73, 193, 0.4);
        }

        .portfolio-grid {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto 80px;
            padding: 0 40px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        /* 🔥 CARD LINK - Bisa diklik langsung ke link external */
        .portfolio-item {
            position: relative;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            cursor: pointer;
            aspect-ratio: 4/3;
            text-decoration: none;
            display: block;
        }
        .portfolio-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(255, 73, 193, 0.3);
        }
        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }
        .portfolio-item:hover img {
            transform: scale(1.1);
        }
        .portfolio-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(106, 20, 82, 0.95), transparent 70%);
            opacity: 0;
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 25px;
        }
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        .portfolio-title {
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 8px;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }
        .portfolio-category {
            color: var(--cream);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 10px;
            transform: translateY(20px);
            transition: all 0.4s ease 0.1s;
        }
        .portfolio-link-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: white;
            color: var(--magenta);
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 700;
            transform: translateY(20px);
            transition: all 0.4s ease 0.2s;
            width: fit-content;
        }
        .portfolio-item:hover .portfolio-title,
        .portfolio-item:hover .portfolio-category,
        .portfolio-item:hover .portfolio-link-badge {
            transform: translateY(0);
        }

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

        .portfolio-iframe-wrapper {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 16px;
            position: relative;
        }

        .portfolio-iframe {
            width: 100%;
            height: 100%;
            border: none;
            transform: scale(0.6);
            transform-origin: top left;
            width: 166.7%;
            height: 166.7%;
            pointer-events: none;
        }

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
            
            .navbar-container { padding: 0 25px; }
            .navbar-content { padding: 15px 0; }
            
            .back-btn { padding: 10px 25px; font-size: 0.9rem; }
            
            .hero-portfolio { padding: 0 25px; margin: 70px auto 30px; }
            .hero-portfolio h1 { font-size: 2.8rem; }
            .hero-portfolio .subtitle { font-size: 1.5rem; }
            .hero-portfolio p { font-size: 1rem; }
            
            .filter-buttons { gap: 12px; margin-bottom: 50px; }
            .filter-btn { padding: 11px 24px; font-size: 0.9rem; }
            
            .portfolio-grid {
                padding: 0 25px;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 25px;
                margin-bottom: 60px;
            }
        }

        /* 📱 MOBILE (max-width: 640px) */
        @media (max-width: 640px) {
            body { padding: 0; margin: 0; }
            
            .navbar-container { padding: 0 15px; }
            .logo-text { font-size: 1rem; }
            .logo-image { width: 38px; height: 38px; }
            .back-btn { padding: 8px 18px; font-size: 0.8rem; }
            
            .hero-portfolio { padding: 0 15px; margin: 50px auto 25px; }
            .hero-portfolio h1 { 
                font-size: 1.75rem; 
                line-height: 1.2;
                margin-bottom: 12px;
            }
            .hero-portfolio .subtitle { 
                font-size: 1.2rem; 
                margin-bottom: 12px; 
            }
            .hero-portfolio p { 
                font-size: 0.9rem; 
                line-height: 1.6; 
                margin-bottom: 25px;
                padding: 0 5px;
            }
            
            .filter-buttons { 
                gap: 8px; 
                margin-bottom: 35px;
                padding: 0 10px;
            }
            .filter-btn { 
                padding: 9px 18px; 
                font-size: 0.8rem; 
            }
            
            .portfolio-grid {
                padding: 0 15px;
                grid-template-columns: 1fr;
                gap: 18px;
                margin-bottom: 45px;
            }
            
            .portfolio-item { border-radius: 15px; }
            .portfolio-overlay { padding: 18px; }
            .portfolio-title { font-size: 1.1rem; }
            .portfolio-category { font-size: 0.8rem; }
            .portfolio-link-badge { font-size: 0.75rem; padding: 6px 12px; }
            
            footer { padding: 25px 15px; margin-top: 50px; }
            footer p { font-size: 0.85rem; line-height: 1.6; }
            
            .glow { width: 220px; height: 220px; filter: blur(60px); }
        }

        /* 📱 EXTRA SMALL MOBILE (max-width: 400px) */
        @media (max-width: 400px) {
            .hero-portfolio h1 { font-size: 1.7rem; }
            .filter-btn { padding: 9px 16px; font-size: 0.8rem; }
            .portfolio-grid { gap: 15px; }
        }
    </style>
</head>
<body>
    <div class="glow one"></div>
    <div class="glow two"></div>

    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-content">
                <a href="/" class="navbar-logo">
                    <div class="logo-image">
                        <img src="/images/logonavbar.png" alt="Logo">
                    </div>
                    <div class="logo-text">Portfolio Ocha</div>
                </a>
                <a href="/" class="back-btn">← BACK TO HOME</a>
            </div>
        </div>
    </nav>

    <section class="hero-portfolio">
        <h1>💻 Web & UI/UX Portfolio</h1>
        <p class="subtitle">Digital experiences designed with user in mind</p>
        <p>Explore my web design projects, UI/UX case studies, and interactive prototypes crafted to solve real problems and create seamless user experiences.</p>
    </section>

    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">ALL WORK</button>
        <button class="filter-btn" data-filter="website">Website Design</button>
        <button class="filter-btn" data-filter="uiux">UI/UX Design</button>
        <button class="filter-btn" data-filter="minigames">mini games</button>
    </div>

    <div class="portfolio-grid" id="portfolioGrid">

        <!-- 🔥 PORTFOLIO ITEM 6 - Portfolio Website -->
        <a href="https://rshp.vercel.app/" target="_blank" class="portfolio-item" data-category="website">
            <div class="portfolio-iframe-wrapper">
                <iframe 
                    src="https://rshp.vercel.app/"
                    loading="lazy"
                    frameborder="0"
                    scrolling="no"
                    class="portfolio-iframe"
                ></iframe>
            </div>
            <div class="portfolio-overlay">
                <div class="portfolio-title">RSHP Projek Website</div>
                <div class="portfolio-category">Website Design</div>
                <div class="portfolio-link-badge">
                    🌐 Visit Website
                </div>
            </div>
        </a>

        <!-- 🔥 PORTFOLIO ITEM 6d - Video Demo Website -->
        <a href="https://drive.google.com/file/d/1rm7L6qDHv_0xvW5N-9KISGofbjBLUxMU/view?usp=sharing" target="_blank" class="portfolio-item" data-category="website">
            <div class="portfolio-iframe-wrapper">
                <iframe 
                    src="https://drive.google.com/file/d/1rm7L6qDHv_0xvW5N-9KISGofbjBLUxMU/preview"
                    loading="lazy"
                    frameborder="0"
                    allow="autoplay"
                    class="portfolio-iframe"
                    style="transform: scale(1); width: 100%; height: 100%;"
                ></iframe>
            </div>
            <div class="portfolio-overlay">
                <div class="portfolio-title">Website Video Demo</div>
                <div class="portfolio-category">Website Design</div>
                <div class="portfolio-link-badge">
                    ▶️ Watch Video
                </div>
            </div>
        </a>

        <!-- 🔥 PORTFOLIO ITEM - Forfaza minigames -->
        <a href="https://ochadella.github.io/forfaza/" target="_blank" class="portfolio-item" data-category="minigames">
            <img src="/images/forfazaproject.png" alt="Forfaza Project">
            <div class="portfolio-overlay">
                <div class="portfolio-title">Forfaza Project</div>
                <div class="portfolio-category">Website Design</div>
                <div class="portfolio-link-badge">
                    🌐 Visit Website
                </div>
            </div>
        </a>

        <!-- 🔥 PORTFOLIO ITEM - Foraraloterbaik minigames -->
        <a href="https://ochadella.github.io/foraraloterbaik/" target="_blank" class="portfolio-item" data-category="minigames">
            <img src="/images/foraraloterbaik.png" alt="Foraraloterbaik Project">
            <div class="portfolio-overlay">
                <div class="portfolio-title">Foraraloterbaik Project</div>
                <div class="portfolio-category">Website Design</div>
                <div class="portfolio-link-badge">
                    🌐 Visit Website
                </div>
            </div>
        </a>


        <!-- 🔥 PORTFOLIO ITEM 6c - UAS Project Figma -->
        <a href="https://www.figma.com/proto/UKBZWy3krmz6w3xntTDbhY/project-uas?node-id=4-2375&t=kbKrdq6ZEzLYZvBz-0&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=4%3A2375" target="_blank" class="portfolio-item" data-category="uiux">
            <img src="/images/trashine.png" alt="UAS Project Prototype">
            <div class="portfolio-overlay">
                <div class="portfolio-title">UAS Interactive Prototype</div>
                <div class="portfolio-category">UI/UX Design</div>
                <div class="portfolio-link-badge">
                    ▶️ View Prototype
                </div>
            </div>
        </a>

    </div>

    <footer>
        <p><strong>✨ Let's create something beautiful together!</strong></p>
        <p>📧 ochadella66@gmail.com | 📱 +62 821-4206-3367</p>
        <p>© 2025 Ocha Della - Graphic Designer & Informatika Student</p>
    </footer>

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');
                
                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Filter items
                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    </script>
</body>
</html>