<script setup>

</script>

<template>
<!-- Mission & Vision Section -->
<section class="py-5 bg-light" id="mission">
  <div class="container">
    <!-- Section Header -->
    <div class="row mb-5">
      <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
        <span class="badge bg-primary bg-gradient px-3 py-2 mb-3 text-white">Our Foundation</span>
        <h2 class="fw-bold display-5 mb-4">Building Africa's Tech Future</h2>
        <p class="lead text-muted">Empowering the next generation of African innovators through comprehensive technology education and practical skills development</p>
      </div>
    </div>

    <!-- Mission & Vision Cards -->
    <div class="row g-4 mb-5">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 border-0 shadow-sm position-relative overflow-hidden">
          <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-10"></div>
          <div class="card-body p-5 position-relative">
            <div class="d-flex align-items-center mb-4">
              <div class="bg-primary bg-gradient rounded-circle p-3 me-3">
                <i class="fas fa-rocket text-white fs-4"></i>
              </div>
              <h3 class="fw-bold mb-0 text-primary">Our Mission</h3>
            </div>
            <p class="lead mb-4">To bridge the digital divide across Africa by providing world-class technology education that transforms communities and creates sustainable economic opportunities.</p>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-check-circle text-success me-2"></i>
                <span>Democratize access to quality tech education</span>
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-check-circle text-success me-2"></i>
                <span>Build local capacity in emerging technologies</span>
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-check-circle text-success me-2"></i>
                <span>Create pathways to global opportunities</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 border-0 shadow-sm position-relative overflow-hidden">
          <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-10"></div>
          <div class="card-body p-5 position-relative">
            <div class="d-flex align-items-center mb-4">
              <div class="bg-success bg-gradient rounded-circle p-3 me-3">
                <i class="fas fa-eye text-white fs-4"></i>
              </div>
              <h3 class="fw-bold mb-0 text-success">Our Vision</h3>
            </div>
            <p class="lead mb-4">To be Africa's leading technology education platform, nurturing a generation of innovators who solve local challenges with global impact.</p>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-star text-warning me-2"></i>
                <span>Africa as a global tech hub</span>
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-star text-warning me-2"></i>
                <span>1 million skilled tech professionals by 2030</span>
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-star text-warning me-2"></i>
                <span>Sustainable innovation ecosystem</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Core Values -->
    <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-12">
        <div class="card border-0 shadow-sm bg-dark text-white">
          <div class="card-body p-5">
            <div class="text-center mb-5">
              <h3 class="fw-bold mb-3">Our Core Values</h3>
              <p class="lead opacity-75">The principles that guide everything we do</p>
            </div>
            <div class="row g-4">
              <div class="col-md-3 text-center">
                <div class="bg-primary bg-gradient rounded-circle p-3 d-inline-flex mb-3">
                  <i class="fas fa-lightbulb text-white fs-4"></i>
                </div>
                <h5 class="fw-bold mb-2">Innovation</h5>
                <p class="small opacity-75">Embracing cutting-edge technologies and creative solutions</p>
              </div>
              <div class="col-md-3 text-center">
                <div class="bg-success bg-gradient rounded-circle p-3 d-inline-flex mb-3">
                  <i class="fas fa-users text-white fs-4"></i>
                </div>
                <h5 class="fw-bold mb-2">Community</h5>
                <p class="small opacity-75">Building strong networks and collaborative learning environments</p>
              </div>
              <div class="col-md-3 text-center">
                <div class="bg-warning bg-gradient rounded-circle p-3 d-inline-flex mb-3">
                  <i class="fas fa-medal text-white fs-4"></i>
                </div>
                <h5 class="fw-bold mb-2">Excellence</h5>
                <p class="small opacity-75">Delivering world-class education and maintaining high standards</p>
              </div>
              <div class="col-md-3 text-center">
                <div class="bg-info bg-gradient rounded-circle p-3 d-inline-flex mb-3">
                  <i class="fas fa-globe-africa text-white fs-4"></i>
                </div>
                <h5 class="fw-bold mb-2">Pan-African</h5>
                <p class="small opacity-75">Celebrating diversity while fostering continental unity</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="row mt-5">
      <div class="col-lg-8 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-gradient-primary p-5 rounded-4 text-white">
          <h3 class="fw-bold mb-3">Ready to Transform Your Future?</h3>
          <p class="lead mb-4 opacity-90">Join thousands of learners already building their tech careers with AfroDjango</p>
          <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="#" class="btn btn-light btn-lg px-4">Start Learning Today</a>
            <a href="#" class="btn btn-outline-light btn-lg px-4">Explore Programs</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</template>

<style scoped>
.bg-gradient-primary {
  background: linear-gradient(135deg, #0d6efd 0%, #0056b3 100%);
}

.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.badge {
  font-size: 0.875rem;
  letter-spacing: 0.5px;
}

.opacity-10 {
  opacity: 0.1 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-90 {
  opacity: 0.9 !important;
}
</style>

