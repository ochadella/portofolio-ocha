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
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            color: var(--text-dark);
            overflow-x: hidden;
            position: relative;
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
            margin: 60px auto 40px;
            padding: 0 40px;
            text-align: center;
        }
        .hero-portfolio h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--dark-purple);
            margin-bottom: 15px;
            text-shadow: 0 2px 20px rgba(255, 73, 193, 0.3);
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

    /* supaya tampil seperti thumbnail */
    transform: scale(0.6);
    transform-origin: top left;

    width: 166.7%;
    height: 166.7%;
    pointer-events: none;
}

        @media (max-width: 768px) {
            .hero-portfolio h1 { font-size: 2.5rem; }
            .portfolio-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }
            .filter-buttons {
                gap: 10px;
            }
            .filter-btn {
                padding: 10px 20px;
                font-size: 0.85rem;
            }
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
                <div class="portfolio-title">Portfolio Website</div>
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
        <p>📧 ocha.della@gmail.com | 📱 +62 812-3456-7890</p>
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