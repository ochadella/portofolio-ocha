<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Design & Photo Portfolio - Ocha</title>
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
        .portfolio-item {
            position: relative;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            cursor: pointer;
            aspect-ratio: 4/3;
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
            transform: translateY(20px);
            transition: all 0.4s ease 0.1s;
        }
        .portfolio-item:hover .portfolio-title,
        .portfolio-item:hover .portfolio-category {
            transform: translateY(0);
        }

        /* Modal Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .lightbox.active {
            display: flex;
        }
        .lightbox-content {
            max-width: 90vw;
            max-height: 90vh;
            position: relative;
        }
        .lightbox-content img {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 20px 80px rgba(255, 73, 193, 0.5);
        }
        .lightbox-close {
            position: absolute;
            top: -50px;
            right: 0;
            background: var(--hot-pink);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .lightbox-close:hover {
            transform: rotate(90deg) scale(1.1);
            background: var(--magenta);
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

        /* 📱 TABLET (max-width: 968px) */
        @media (max-width: 968px) {
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
    
    <script>
        // Dynamic base path detection
        const getBasePath = () => {
            const path = window.location.pathname;
            // If accessed via /public/ folder directly
            if (path.includes('/public/')) {
                return path.split('/public/')[0] + '/public';
            }
            // If using php artisan serve or proper Laravel setup
            return '';
        };
        
        const basePath = getBasePath();
        console.log('Base Path:', basePath);
        console.log('Current URL:', window.location.href);
    </script>
</head>
<body>
    <div class="glow one"></div>
    <div class="glow two"></div>

    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-content">
                <a href="{{ url('/') }}" class="navbar-logo">
                    <div class="logo-image">
                        <img src="{{ asset('images/logonavbar.png') }}" alt="Logo" onerror="console.error('Logo failed:', this.src); this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2250%22 height=%2250%22%3E%3Ctext y=%2230%22 font-size=%2230%22%3E🎨%3C/text%3E%3C/svg%3E'">
                    </div>
                    <div class="logo-text">Portfolio Ocha</div>
                </a>
                <a href="{{ url('/') }}" class="back-btn">← BACK TO HOME</a>
            </div>
        </div>
    </nav>

    <section class="hero-portfolio">
        <h1>🎨 Design & Photo Portfolio</h1>
        <p class="subtitle">Visual stories crafted with creativity & purpose</p>
        <p>A curated collection of my graphic design work, photography, and visual content created for brands, social media, and personal projects.</p>
    </section>

    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">ALL WORK</button>
        <button class="filter-btn" data-filter="poster">Poster Design</button>
        <button class="filter-btn" data-filter="social">Social Media</button>
        <button class="filter-btn" data-filter="photo">Photography</button>
        <button class="filter-btn" data-filter="branding">Branding</button>
    </div>

    <div class="portfolio-grid" id="portfolioGrid">
        @php
            $portfolioItems = [
                ['id' => 1, 'category' => 'poster', 'file' => 'design1.png', 'title' => 'Announce Poster Design', 'cat_name' => 'Poster Design'],
                ['id' => 2, 'category' => 'social', 'file' => 'design2.png', 'title' => 'Instagram Feed Layout', 'cat_name' => 'Social Media'],
                ['id' => 3, 'category' => 'photo', 'file' => 'design3.jpg', 'title' => 'Party Photography', 'cat_name' => 'Photography'],
                ['id' => 4, 'category' => 'branding', 'file' => 'design4.png', 'title' => 'Brand Identity Design', 'cat_name' => 'Branding'],
                ['id' => 5, 'category' => 'social', 'file' => 'design5.png', 'title' => 'Social Media Campaign', 'cat_name' => 'Social Media'],
                ['id' => 6, 'category' => 'poster', 'file' => 'design6.jpg', 'title' => 'Urban Poster', 'cat_name' => 'Poster Design'],
                ['id' => 7, 'category' => 'photo', 'file' => 'design7.jpg', 'title' => 'Landscape Session', 'cat_name' => 'Photography'],
                ['id' => 8, 'category' => 'branding', 'file' => 'design8.png', 'title' => 'Branding Kit', 'cat_name' => 'Branding'],
                ['id' => 9, 'category' => 'social', 'file' => 'design9.png', 'title' => 'Instagram Story Template', 'cat_name' => 'Social Media'],
                ['id' => 10, 'category' => 'photo', 'file' => 'design10.jpg', 'title' => 'Landscape Photography', 'cat_name' => 'Photography'],
                ['id' => 11, 'category' => 'photo', 'file' => 'design11.jpg', 'title' => 'Random Photography', 'cat_name' => 'Photography'],
                ['id' => 12, 'category' => 'photo', 'file' => 'design12.jpg', 'title' => 'Random Photography', 'cat_name' => 'Photography'],
                ['id' => 13, 'category' => 'photo', 'file' => 'design13.jpg', 'title' => 'Landscape Photography', 'cat_name' => 'Photography'],
                ['id' => 14, 'category' => 'photo', 'file' => 'design14.jpg', 'title' => 'Cinema Photography', 'cat_name' => 'Photography'],
                ['id' => 15, 'category' => 'photo', 'file' => 'design15.jpg', 'title' => 'Lifestyle Photography', 'cat_name' => 'Photography'],
                ['id' => 16, 'category' => 'photo', 'file' => 'design16.jpg', 'title' => 'Event Photography', 'cat_name' => 'Photography'],
                ['id' => 17, 'category' => 'photo', 'file' => 'design17.jpg', 'title' => 'Street Photography', 'cat_name' => 'Photography'],
                ['id' => 18, 'category' => 'photo', 'file' => 'design18.jpg', 'title' => 'Party Photography', 'cat_name' => 'Photography'],
                ['id' => 19, 'category' => 'photo', 'file' => 'design19.jpg', 'title' => 'Street Photography', 'cat_name' => 'Photography'],
                ['id' => 20, 'category' => 'poster', 'file' => 'design20.png', 'title' => 'Academic Competetion Poster', 'cat_name' => 'Poster Design'],
                ['id' => 21, 'category' => 'poster', 'file' => 'design21.png', 'title' => 'cover introduce mascot Design', 'cat_name' => 'Poster Design'],
                ['id' => 22, 'category' => 'poster', 'file' => 'design22.png', 'title' => 'mascot design', 'cat_name' => 'Poster Design'],
                ['id' => 23, 'category' => 'poster', 'file' => 'design23.png', 'title' => 'mascot filosofi Poster', 'cat_name' => 'Poster Design'],
                ['id' => 24, 'category' => 'poster', 'file' => 'design24.png', 'title' => 'Academic Competetion & Exploration Poster', 'cat_name' => 'Poster Design'],
                ['id' => 25, 'category' => 'poster', 'file' => 'design25.png', 'title' => 'Academic Competetion Poster', 'cat_name' => 'Poster Design'],
                ['id' => 26, 'category' => 'poster', 'file' => 'design26.png', 'title' => 'Academic Competetion Poster', 'cat_name' => 'Poster Design'],
            ];
        @endphp

        @foreach($portfolioItems as $item)
        <div class="portfolio-item" data-category="{{ $item['category'] }}">
            <img src="{{ asset('images/portfolio/photo/' . $item['file']) }}" 
                 alt="Design {{ $item['id'] }}"
                 onerror="console.error('Image failed to load:', this.src); this.style.backgroundColor='#f0f0f0'; this.alt='Image not found: {{ $item['file'] }}';">
            <div class="portfolio-overlay">
                <div class="portfolio-title">{{ $item['title'] }}</div>
                <div class="portfolio-category">{{ $item['cat_name'] }}</div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <button class="lightbox-close" onclick="closeLightbox()">×</button>
            <img id="lightboxImg" src="" alt="Portfolio">
        </div>
    </div>

    <footer>
        <p><strong>✨ Let's create something beautiful together!</strong></p>
        <p>📧 ochadella66@gmail.com | 📱 +62 821-4206-3367</p>
        <p>© 2025 Ocha Della - Graphic Designer & Informatika Student</p>
    </footer>

    <script>
        console.log('=== DEBUGGING INFO ===');
        console.log('Current URL:', window.location.href);
        console.log('Base URL:', '{{ url("/") }}');
        console.log('Asset URL:', '{{ asset("images/portfolio/photo/design1.png") }}');
        console.log('Public Path:', '{{ public_path("images/portfolio/photo/design1.png") }}');
        @if(file_exists(public_path('images/portfolio/photo/design1.png')))
            console.log('✅ File EXISTS in public folder');
        @else
            console.error('❌ File NOT FOUND in public folder');
        @endif
        
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

        // Lightbox functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');

        portfolioItems.forEach(item => {
            item.addEventListener('click', () => {
                const imgSrc = item.querySelector('img').src;
                lightboxImg.src = imgSrc;
                lightbox.classList.add('active');
            });
        });

        function closeLightbox() {
            lightbox.classList.remove('active');
        }

        // Close lightbox on background click
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Close lightbox with ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
        
        // Log all image load errors
        document.querySelectorAll('.portfolio-item img').forEach((img, index) => {
            img.addEventListener('error', function() {
                console.error(`❌ Image ${index + 1} failed:`, this.src);
            });
            img.addEventListener('load', function() {
                console.log(`✅ Image ${index + 1} loaded:`, this.src);
            });
        });
    </script>
</body>
</html>