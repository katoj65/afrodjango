<script setup>
import HeaderComponent from '@/Components/HeaderComponent.vue';
import WhatWeDo from '@/Sections/WhatWeDo.vue';

</script>

<template>
<div class="nk-body npc-landing" style="background:white;">
<div class="nk-app-root">
<div class="nk-main">
<header class="header has-header-main-s1" id="home">
<header-component/>
<!-- .header-main-->
<div class="header-content d-flex align-items-center min-vh-100 py-5">
<div class="container">
<div class="row flex-lg-row-reverse align-items-center justify-content-center g-5">
<div class="col-lg-6 mb-4 mb-lg-0">
<div class="header-image header-image-s2">
  <div class="hero-visual-wrapper">
    <div class="floating-elements">
      <div class="floating-card card-1">
        <i class="fab fa-python text-success"></i>
        <span>Python</span>
      </div>
      <div class="floating-card card-2">
        <i class="fas fa-robot text-success"></i>
        <span>AI/ML</span>
      </div>
      <div class="floating-card card-3">
        <i class="fas fa-microchip text-warning"></i>
        <span>IoT</span>
      </div>
      <div class="floating-card card-4">
        <i class="fas fa-mobile-alt text-info"></i>
        <span>Web/Mobile Dev</span>
      </div>
      <div class="floating-card card-5">
        <i class="fab fa-js-square text-danger"></i>
        <span>JavaScript</span>
      </div>
    </div>
    <div class="hero-dashboard">
      <div class="dashboard-header">
        <div class="dashboard-dots">
          <span class="dot red"></span>
          <span class="dot yellow"></span>
          <span class="dot green"></span>
        </div>
        <div class="dashboard-title">Afrodjango IDE</div>
      </div>
      <div class="dashboard-content">
        <div class="code-line">
          <span class="line-number">1</span>
          <span class="code-text"><span class="keyword">import</span> <span class="string">afrodjango</span></span>
        </div>
        <div class="code-line">
          <span class="line-number">2</span>
          <span class="code-text"><span class="keyword">from</span> <span class="string">ai</span> <span class="keyword">import</span> <span class="function">learn</span></span>
        </div>
        <div class="code-line">
          <span class="line-number">3</span>
          <span class="code-text"></span>
        </div>
        <div class="code-line typing-animation">
          <span class="line-number">4</span>
          <span class="code-text"><span class="keyword">def</span> <span class="function">build_future</span>():</span>
        </div>
        <div class="code-line">
          <span class="line-number">5</span>
          <span class="code-text">    <span class="keyword">return</span> <span class="string">"Africa Tech Revolution"</span></span>
        </div>
      </div>
    </div>
  </div>
</div><!-- .header-image -->
</div><!-- .col- -->
<div class="col-lg-5 col-md-10">
<div class="header-caption">

<h1 class="header-title" data-aos="fade-up" data-aos-delay="400">Hands-On Python, AI & STEM Training for <span class="gradient-text">Africa's Next Tech Talent</span></h1>
<div data-aos="fade-up" data-aos-delay="500">
  <p class="content enhanced-description">
    Learn by building. Afrodjango combines practical projects, and expert-led training to nurture future developers, engineers, and innovators across Africa.
  </p>

</div>

</div><!-- .header-caption -->
</div><!-- .col -->
</div><!-- .row -->
</div><!-- .container -->
</div><!-- .header-content -->



<!-- .container -->
</header>

<!-- .header -->
<what-we-do/>






<div class="container-fluid bg-black text-white-50 footer pt-5 mt-5">
<div class="container py-5">
<div class="row g-5">
<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
<a href="index.html" class="d-inline-block mb-3">
<h3 class="text-white">Afrodjango Initiative</h3>
</a>
<p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
clita duo justo et tempor</p>
</div>
<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
<h4 class="text-white mb-4">Get In Touch</h4>
<p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
<p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
<p><i class="fa fa-envelope me-3"></i>info@example.com</p>
<div class="d-flex pt-2">
<a class="btn btn-primary btn-square me-2" href=""><i class="fab fa-twitter"></i></a>
<a class="btn btn-primary btn-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
<a class="btn btn-primary btn-square me-2" href=""><i class="fab fa-youtube"></i></a>
<a class="btn btn-primary btn-square me-2" href=""><i class="fab fa-instagram"></i></a>
<a class="btn btn-primary btn-square me-2" href=""><i class="fab fa-linkedin-in"></i></a>
</div>
</div>
<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
<h4 class="text-white mb-4">Popular Link</h4>
<a class="btn btn-link" href="">About Us</a>
<a class="btn btn-link" href="">Contact Us</a>
<a class="btn btn-link" href="">Privacy Policy</a>
<a class="btn btn-link" href="">Terms & Condition</a>
<a class="btn btn-link" href="">Career</a>
</div>
<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
<h4 class="text-white mb-4">Project Gallery</h4>
<div class="row g-2">
<div class="col-4">
<img class="img-fluid rounded w-100" src="img/project-1.jpg" alt="">
</div>
<div class="col-4">
<img class="img-fluid rounded w-100" src="img/project-2.jpg" alt="">
</div>
<div class="col-4">
<img class="img-fluid rounded w-100" src="img/project-3.jpg" alt="">
</div>
<div class="col-4">
<img class="img-fluid rounded w-100" src="img/project-4.jpg" alt="">
</div>
<div class="col-4">
<img class="img-fluid rounded w-100" src="img/project-5.jpg" alt="">
</div>
<div class="col-4">
<img class="img-fluid rounded w-100" src="img/project-6.jpg" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="container wow fadeIn" data-wow-delay="0.1s">
<div class="copyright">
<div class="row">
<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
&copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

<!--/*** The author’s attribution link below must remain intact on your website. ***/-->
<!--/*** If you wish to remove this credit link, please purchase the Pro Version from https://htmlcodex.com . ***/-->
Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
</div>
<div class="col-md-6 text-center text-md-end">
<div class="footer-menu">
<a href="">Home</a>
<a href="">Cookies</a>
<a href="">Help</a>
<a href="">FAQs</a>
</div>
</div>
</div>
</div>
</div>
</div>











































</div>
</div>
</div>
</template>
<style scoped>
#home{
background-image:
  linear-gradient(135deg, rgba(15, 23, 42, 0.85), rgba(30, 41, 59, 0.9)),
  url('../../image/img4.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;
position: relative;
overflow: hidden;
}

#home::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background:
    radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
    radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
    radial-gradient(circle at 40% 60%, rgba(16, 185, 129, 0.08) 0%, transparent 50%);
  pointer-events: none;
}

#home .container {
position: relative;
z-index: 2;
}

/* Enhanced Typography */
.header-title {
  font-size: 3.5rem;
  line-height: 1.2;
  font-weight: 800;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  color: white;
  margin-bottom: 2rem;
  letter-spacing: -0.02em;
}

.gradient-text {
  background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 50%, #34d399 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: gradient-shift 3s ease-in-out infinite;
}

@keyframes gradient-shift {
  0%, 100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.enhanced-description {
  font-size: 1.25rem;
  color: rgba(255, 255, 255, 0.9);
  font-weight: 400;
  line-height: 1.7;
  margin-bottom: 2rem;
}

/* Achievement Badges */
.achievement-badges {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
  flex-wrap: wrap;
}

.badge-item {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  padding: 0.75rem 1.25rem;
  border-radius: 50px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: white;
  font-size: 0.9rem;
  font-weight: 600;
  transition: all 0.3s ease;
}

.badge-item:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.badge-item i {
  font-size: 1.1rem;
}

/* Feature Highlights */
.feature-highlights {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.highlight-item {
  display: flex;
  align-items: center;
  color: rgba(255, 255, 255, 0.9);
  font-size: 1rem;
  font-weight: 500;
}

.highlight-item i {
  font-size: 1.2rem;
}

/* Action Buttons */
.hero-actions {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.action-buttons {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.btn-primary {
  background: linear-gradient(135deg, #3b82f6, #1d4ed8);
  border: none;
  padding: 1rem 2rem;
  font-weight: 600;
  text-decoration: none;
  border-radius: 12px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
  position: relative;
  overflow: hidden;
}

.btn-primary::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: left 0.6s ease;
}

.btn-primary:hover::before {
  left: 100%;
}

.btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(59, 130, 246, 0.5);
  background: linear-gradient(135deg, #2563eb, #1d4ed8);
}

.btn-outline-light {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255, 255, 255, 0.3);
  color: white;
  padding: 1rem 2rem;
  font-weight: 600;
  text-decoration: none;
  border-radius: 12px;
  transition: all 0.3s ease;
}

.btn-outline-light:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
  border-color: rgba(255, 255, 255, 0.5);
}

/* Trust Indicators */
.trust-indicators {
  display: flex;
  gap: 1.5rem;
  align-items: center;
  flex-wrap: wrap;
}

.trust-item {
  opacity: 0.7;
  transition: all 0.3s ease;
}

.trust-item:hover {
  opacity: 1;
  transform: scale(1.1);
}

.trust-logo {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.trust-logo i {
  font-size: 1.5rem;
}

/* Hero Visual Elements */
.hero-visual-wrapper {
  position: relative;
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.floating-elements {
  position: absolute;
  width: 100%;
  height: 100%;
}

.floating-card {
  position: absolute;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 16px;
  padding: 1rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: white;
  font-weight: 600;
  font-size: 0.9rem;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
  transition: all 0.3s ease;
}

.floating-card:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-5px) scale(1.05);
}

.floating-card i {
  font-size: 1.2rem;
}

.card-1 {
  top: 15%;
  left: 20%;
  margin-top: -30px;
  animation: float 6s ease-in-out infinite;
}

.card-2 {
  top: 20%;
  right: 15%;
  margin-top: -30px;
  animation: float 6s ease-in-out infinite 1s;
}

.card-3 {
  bottom: 35%;
  left: 15%;
  animation: float 6s ease-in-out infinite 2s;
}

.card-4 {
  bottom: 5%;
  right: 20%;
  animation: float 6s ease-in-out infinite 3s;
}

.card-5 {
  top: 45%;
  right: 10%;
  animation: float 6s ease-in-out infinite 4s;
}

@keyframes float {
  0%, 100% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(-20px) rotate(2deg);
  }
}

/* Code Dashboard */
.hero-dashboard {
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(15px);
  border-radius: 16px;
  border: 1px solid rgba(255, 255, 255, 0.1);
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
  width: 90%;
  max-width: 400px;
  margin: 0 auto;
}

.dashboard-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1.5rem;
  background: rgba(0, 0, 0, 0.6);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.dashboard-dots {
  display: flex;
  gap: 0.5rem;
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.dot.red { background: #ff5f56; }
.dot.yellow { background: #ffbd2e; }
.dot.green { background: #27c93f; }

.dashboard-title {
  color: #a0e7e5;
  font-size: 0.9rem;
  font-weight: 600;
}

.dashboard-content {
  padding: 1.5rem;
  font-family: 'SF Mono', Monaco, 'Cascadia Code', monospace;
}

.code-line {
  display: flex;
  align-items: center;
  margin-bottom: 0.5rem;
  min-height: 1.5rem;
}

.line-number {
  color: #6b7280;
  width: 30px;
  font-size: 0.8rem;
  text-align: right;
  margin-right: 1rem;
}

.code-text {
  color: #e5e7eb;
  font-size: 0.9rem;
}

.keyword {
  color: #f59e0b;
  font-weight: 600;
}

.string {
  color: #10b981;
}

.function {
  color: #3b82f6;
}

.typing-animation .code-text {
  border-right: 2px solid #3b82f6;
  animation: typing 2s steps(20) infinite;
}

@keyframes typing {
  0% { border-color: transparent; }
  50% { border-color: #3b82f6; }
  100% { border-color: transparent; }
}

/* Responsive Design */
@media (max-width: 1200px) {
  .header-title {
    font-size: 3rem;
  }

  .hero-visual-wrapper {
    height: 400px;
  }
}

@media (max-width: 992px) {
  .header-title {
    font-size: 2.5rem;
  }

  .enhanced-description {
    font-size: 1.1rem;
  }

  .hero-visual-wrapper {
    height: 300px;
    margin-bottom: 3rem;
  }

  .floating-card {
    padding: 0.75rem;
    font-size: 0.8rem;
  }

  .hero-dashboard {
    width: 100%;
    max-width: 350px;
  }
}

@media (max-width: 768px) {
  .achievement-badges {
    justify-content: center;
  }

  .action-buttons {
    justify-content: center;
  }

  .btn-primary, .btn-outline-light {
    width: 100%;
    text-align: center;
  }

  .trust-indicators {
    justify-content: center;
  }
}

@media (max-width: 576px) {
  .header-title {
    font-size: 2rem;
    text-align: center;
  }

  .enhanced-description {
    font-size: 1rem;
    text-align: center;
  }

  .hero-visual-wrapper {
    height: 250px;
  }

  .floating-card {
    display: none;
  }

  .hero-dashboard {
    max-width: 300px;
  }

  .badge-item {
    font-size: 0.8rem;
    padding: 0.5rem 1rem;
  }
}

.code-snippet {
  background: rgba(0, 0, 0, 0.4);
  border-radius: 16px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.1);
  width: 100%;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

.code-header {
  display: flex;
  gap: 8px;
  padding: 16px;
  background: rgba(0, 0, 0, 0.6);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.code-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.code-dot.red { background: #ff5f56; }
.code-dot.yellow { background: #ffbd2e; }
.code-dot.green { background: #27c93f; }

.code-snippet pre {
  margin: 0;
  padding: 24px;
  font-family: 'SF Mono', Monaco, 'Cascadia Code', 'Roboto Mono', Consolas, 'Courier New', monospace;
  font-size: 14px;
  line-height: 1.6;
  color: #a0e7e5;
  overflow-x: auto;
}

/* Features Section */
.features-preview {
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  padding: 100px 0;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 32px;
}

.feature-card {
  background: white;
  padding: 48px 32px;
  border-radius: 20px;
  text-align: center;
  border: 1px solid rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  position: relative;
  overflow: hidden;
}

.feature-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(135deg, #3498db, #9b59b6);
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.feature-card:hover::before {
  transform: scaleX(1);
}

.feature-card:hover {
  transform: translateY(-12px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.feature-icon {
  font-size: 56px;
  margin-bottom: 24px;
  display: inline-block;
  animation: bounce 3s ease-in-out infinite;
}

.feature-card h3 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 16px;
  color: #1a1a2e;
}

.feature-card p {
  font-size: 16px;
  color: #6c757d;
  line-height: 1.6;
  margin: 0;
}

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}

/* Responsive Design */
@media (max-width: 992px) {
  .hero-content {
    padding-right: 0;
    margin-bottom: 60px;
  }

  .hero-visual {
    padding-left: 0;
  }

  .visual-card {
    height: 400px;
  }
}

@media (max-width: 576px) {
  .hero-section {
    padding: 60px 0;
  }

  .hero-title {
    font-size: 32px;
  }

  .hero-subtitle {
    font-size: 18px;
  }

  .hero-actions {
    flex-direction: column;
  }

  .btn {
    width: 100%;
    justify-content: center;
  }

  .features-grid {
    gap: 24px;
  }

  .feature-card {
    padding: 32px 24px;
  }

  .hero-content {
    padding-right: 0;
  }

  .hero-visual {
    padding-left: 0;
  }
}
</style>
