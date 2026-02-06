<script setup>







</script>

<template>

<div class="header-main header-main-s1 is-sticky modern-header">
<div class="container header-container">
<div class="header-wrap">
<div class="header-logo">


<a href="html/index.html" class="logo-link">

<!-- <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
<img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> -->
<strong class="logo-text">
Afrodjango Initiative
</strong>

</a>
</div>
<div class="header-toggle">
<button class="menu-toggler" data-target="mainNav">
<em class="menu-on icon ni ni-menu"></em>
<em class="menu-off icon ni ni-cross"></em>
</button>
</div><!-- .header-nav-toggle -->
<nav class="header-menu" data-content="mainNav">
<ul class="menu-list ms-lg-auto">
<li class="menu-item">
<a href="#" class="menu-link">
About
</a>
</li>
<li class="menu-item">
<a href="#" class="menu-link">Contact</a>
</li>
<li class="menu-item"><a href="#home" class="menu-link nav-link">Programs</a></li>
<li class="menu-item"><a href="#service" class="menu-link nav-link">Community</a></li>
<li class="menu-item"><a href="#feature" class="menu-link nav-link">News</a></li>
<li class="menu-item"><a href="#feature" class="menu-link nav-link">Support</a></li>
</ul>
</nav><!-- .nk-nav-menu -->
</div><!-- .header-warp-->
</div><!-- .container-->
</div>





</template>
<style scoped>
.modern-header {
  background: black !important;
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  transition: all 0.3s ease;
  padding: 16px 0;
}

.header-main.is-sticky {
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.logo-text {
  font-size: 23px;
  font-weight: 800;
  color: white;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  letter-spacing: -0.5px;
  transition: all 0.3s ease;
}

.logo-link:hover .logo-text {
  transform: scale(1.05);
}

.menu-link {
  color: white !important;
  font-weight: 500;
  font-size: 15px;
  transition: all 0.3s ease;
  padding: 8px 16px;
  border-radius: 8px;
  position: relative;
}

.menu-link::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  background: linear-gradient(135deg, #3498db, #9b59b6);
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

.menu-link:hover {
  color: white !important;
  background: rgba(255, 255, 255, 0.1);
}

.menu-link:hover::before {
  width: 80%;
}

.menu-toggler {
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 8px;
  padding: 8px;
  transition: all 0.3s ease;
}

.menu-toggler:hover {
  background: rgba(255, 255, 255, 0.2);
}

.header-container {
  max-width: 1200px;
  margin: 0 auto;
}

.header-wrap {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.menu-list {
  display: flex;
  align-items: center;
  gap: 8px;
  margin: 0;
  list-style: none;
}

@media (max-width: 768px) {
  .logo-text {
    font-size: 24px;
  }

  .modern-header {
    padding: 12px 0;
  }

  .menu-list {
    display: none;
  }
}
</style>
