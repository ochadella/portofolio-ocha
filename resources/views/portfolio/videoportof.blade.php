<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Video & Motion Portfolio - Ocha</title>
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
        html { scroll-behavior: smooth; overflow-x: hidden; }
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
        .video-item {
            position: relative;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            cursor: pointer;
            aspect-ratio: 16/9;
            text-decoration: none;
            display: block;
        }
        .video-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(255, 73, 193, 0.3);
        }
        .video-thumbnail {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }
        .video-item:hover .video-thumbnail img {
            transform: scale(1.1);
        }
        
        /* Play Button Overlay */
        .play-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
        }
        .video-item:hover .play-overlay {
            background: rgba(106, 20, 82, 0.6);
        }
        .play-button {
            width: 80px;
            height: 80px;
            background: var(--hot-pink);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            box-shadow: 0 8px 30px rgba(255, 73, 193, 0.5);
        }
        .video-item:hover .play-button {
            transform: scale(1.2);
            background: var(--cream);
        }
        .play-button::after {
            content: "▶";
            color: white;
            font-size: 2rem;
            margin-left: 5px;
            transition: all 0.3s ease;
        }
        .video-item:hover .play-button::after {
            color: var(--dark-purple);
        }

        .video-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(106, 20, 82, 0.95), transparent);
            padding: 25px;
            transform: translateY(100%);
            transition: all 0.4s ease;
        }
        .video-item:hover .video-info {
            transform: translateY(0);
        }
        .video-title {
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 8px;
        }
        .video-category {
            color: var(--cream);
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .video-duration {
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.85rem;
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
            
            .hero-portfolio { padding: 0 25px; margin: 50px auto 30px; }
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
            
            .play-button { width: 70px; height: 70px; }
            .play-button::after { font-size: 1.8rem; }
        }

        /* 📱 MOBILE (max-width: 640px) */
        @media (max-width: 640px) {
            body { padding: 0; margin: 0; }
            
            .navbar-container { padding: 0 15px; }
            .logo-text { font-size: 1rem; }
            .logo-image { width: 38px; height: 38px; }
            .back-btn { padding: 8px 18px; font-size: 0.8rem; }
            
            .hero-portfolio { padding: 0 15px; margin: 30px auto 20px; }
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
            
            .video-item { border-radius: 15px; }
            .video-overlay { padding: 18px; }
            .video-title { font-size: 1.1rem; }
            .video-category { font-size: 0.8rem; }
            .play-button { width: 55px; height: 55px; }
            .play-button::after { font-size: 1.4rem; }
            
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
                <a href="{{ url('/') }}" class="navbar-logo">
                    <div class="logo-image">
                        <img src="{{ asset('images/logonavbar.png') }}" alt="Logo">
                    </div>
                    <div class="logo-text">Portfolio Ocha</div>
                </a>
                <a href="{{ url('/') }}" class="back-btn">← BACK TO HOME</a>
            </div>
        </div>
    </nav>

    <section class="hero-portfolio">
        <h1>🎬 Video & Motion Portfolio</h1>
        <p class="subtitle">Stories that move, inspire & engage</p>
        <p>A showcase of my video editing, motion graphics, and visual storytelling work created for social media, events, and creative projects.</p>
    </section>

    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">ALL VIDEOS</button>
        <button class="filter-btn" data-filter="reels">Reels & Shorts</button>
        <button class="filter-btn" data-filter="event">Event Videos</button>
    </div>

    <div class="portfolio-grid" id="portfolioGrid">
        <!-- Video Item 1 - Google Drive (UPDATED) -->
        <a href="https://drive.google.com/file/d/1I-jFjc3hU43BE1ucuzqqjem4s7AWecmt/view?usp=drive_link" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video1.jpg') }}" alt="Video 1">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Instagram Reel - Product Launch</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 2 - Google Drive Event -->
        <a href="https://drive.google.com/file/d/1WBm0Wtq24v7FVvvPYhOYCfAJY-Zd7K3K/view?usp=drive_link" target="_blank" class="video-item" data-category="event">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video2.png') }}" alt="Video 2">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Campus Event Highlight</div>
                <div class="video-category">
                    Event Videos
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 3 - Google Drive (UPDATED) -->
        <a href="https://drive.google.com/file/d/1k-AoTATEsFHjaWGa2cH-AERhQ22aJo_5/view?usp=sharing" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video3.jpg') }}" alt="Video 3">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Creative Transition Reel</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 4 - Google Drive Event -->
        <a href="https://drive.google.com/file/d/11Xeu1l3YtKMS4StkIACU73joRgbKGvH-/view?usp=drive_link" target="_blank" class="video-item" data-category="event">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video4.png') }}" alt="Video 4">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Workshop Documentation</div>
                <div class="video-category">
                    Event Videos
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 5 - Google Drive (UPDATED) -->
        <a href="https://drive.google.com/file/d/1sqZBNnPjhIglYRJqwxA0LGlIE62_HmD-/view?usp=sharing" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video5.jpg') }}" alt="Video 5">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Behind The Scenes - Photoshoot</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 6 - Instagram Reel (CHANGED FROM EVENT) -->
        <a href="https://www.instagram.com/reel/DQQtHkJEu-M/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video6.jpg') }}" alt="Video 6">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Conference Opening Video</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 7 - Instagram Reel (CHANGED FROM EVENT) -->
        <a href="https://www.instagram.com/reel/DNiAWRPx7sW/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video7.jpg') }}" alt="Video 7">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Seminar Aftermovie</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 8 - Google Drive -->
        <a href="https://drive.google.com/file/d/1tHSDKMdeaSOpk3El37xnTu55lXI516mn/view?usp=drive_link" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video8.png') }}" alt="Video 8">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">TikTok Viral Trend Edit</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 9 - Instagram Reel -->
        <a href="https://www.instagram.com/reel/DKycbFmS92F/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video9.jpg') }}" alt="Video 9">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Tutorial Video Edit</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
                </div>
            </div>
        </a>

        <!-- Video Item 10 - Google Drive -->
        <a href="https://drive.google.com/file/d/1XTuEduqrL2ovQ2pw37DXzumlB_IClTc-/view?usp=drive_link" target="_blank" class="video-item" data-category="reels">
            <div class="video-thumbnail">
                <img src="{{ asset('images/portfolio/video/video10.png') }}" alt="Video 10">
                <div class="play-overlay">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="video-info">
                <div class="video-title">Creative Content Reel</div>
                <div class="video-category">
                    Reels & Shorts
                    <span class="video-duration">2:00</span>
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
        const videoItems = document.querySelectorAll('.video-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');
                
                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Filter items
                videoItems.forEach(item => {
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