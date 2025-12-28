/* =====================================================
   OCHA PORTFOLIO — RETRO MAGIC (FULL JAVASCRIPT)
===================================================== */

// ================= CURSOR GLOW =================
document.addEventListener('DOMContentLoaded', function() {
  
  // Create cursor glow element
  const cursorGlow = document.createElement('div');
  cursorGlow.classList.add('cursor-glow');
  document.body.appendChild(cursorGlow);

  // Track mouse movement
  let mouseX = 0;
  let mouseY = 0;
  let currentX = 0;
  let currentY = 0;
  const speed = 0.15; // Smooth follow speed

  document.addEventListener('mousemove', function(e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  // Smooth animation loop
  function animateCursor() {
    currentX += (mouseX - currentX) * speed;
    currentY += (mouseY - currentY) * speed;
    
    cursorGlow.style.left = currentX + 'px';
    cursorGlow.style.top = currentY + 'px';
    
    requestAnimationFrame(animateCursor);
  }
  
  animateCursor();

  // ================= AUTO-HIDE NAVBAR =================
  const navbar = document.querySelector('.site-header');
  let lastScrollY = window.scrollY;
  let ticking = false;

  function updateNavbar() {
    const currentScrollY = window.scrollY;
    
    if (currentScrollY > 100) {
      if (currentScrollY > lastScrollY) {
        // Scrolling down
        navbar.classList.add('hide');
      } else {
        // Scrolling up
        navbar.classList.remove('hide');
      }
    } else {
      // At top of page
      navbar.classList.remove('hide');
    }
    
    lastScrollY = currentScrollY;
    ticking = false;
  }

  window.addEventListener('scroll', function() {
    if (!ticking) {
      window.requestAnimationFrame(updateNavbar);
      ticking = true;
    }
  });

  // ================= REVEAL ANIMATION =================
  const revealElements = document.querySelectorAll('.reveal');

  const revealObserver = new IntersectionObserver(
    function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    }
  );

  revealElements.forEach(function(element) {
    revealObserver.observe(element);
  });

  // ================= BUTTON RIPPLE EFFECT =================
  const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');

  buttons.forEach(function(button) {
    button.addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      const rect = button.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';
      ripple.classList.add('ripple');

      button.appendChild(ripple);

      setTimeout(function() {
        ripple.remove();
      }, 600);
    });
  });

  // ================= DYNAMIC COLOR THEME =================
  let colorIndex = 0;
  const colorThemes = [
    {
      glowTop: '#FF49C1',
      glowBottom: '#FFB3AE'
    },
    {
      glowTop: '#6A1452',
      glowBottom: '#FF49C1'
    },
    {
      glowTop: '#FFB3AE',
      glowBottom: '#FFF7AD'
    }
  ];

  function changeColorTheme() {
    colorIndex = (colorIndex + 1) % colorThemes.length;
    const theme = colorThemes[colorIndex];
    
    document.documentElement.style.setProperty('--glow-top', theme.glowTop);
    document.documentElement.style.setProperty('--glow-bottom', theme.glowBottom);
  }

  // Change color theme every 8 seconds
  setInterval(changeColorTheme, 8000);

  // ================= PARALLAX EFFECT =================
  const hero = document.querySelector('.hero');

  window.addEventListener('scroll', function() {
    if (hero) {
      const scrolled = window.scrollY;
      const parallaxSpeed = 0.3;
      hero.style.transform = 'translateY(' + (scrolled * parallaxSpeed) + 'px)';
    }
  });

  // ================= SMOOTH SCROLL =================
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // ================= PERFORMANCE OPTIMIZATION =================
  // Reduce animations on low-end devices
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  
  if (prefersReducedMotion.matches) {
    document.body.style.setProperty('--animation-duration', '0s');
  }

  // ================= PAGE LOAD ANIMATION =================
  window.addEventListener('load', function() {
    document.body.classList.add('loaded');
    
    // Animate hero entrance
    if (hero) {
      setTimeout(function() {
        hero.style.opacity = '1';
        hero.style.transform = 'translateY(0)';
      }, 100);
    }
  });

  // ================= CONSOLE EASTER EGG =================
  console.log('%c🌸 Portfolio Ocha', 'font-size: 24px; font-weight: bold; color: #FF49C1;');
  console.log('%cDesigned with 💖 by Ocha Della', 'font-size: 14px; color: #6A1452;');
  console.log('%cRetro Magic Edition ✨', 'font-size: 12px; color: #FFB3AE;');

});