<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
  <div class="container">
    <a class="navbar-brand" href="<?= site_url(); ?>/admin/home">
      <img src="<?php echo base_url(); ?>public/images/logo.svg" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url(); ?>/admin/home">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url(); ?>/admin/login">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url(); ?>/admin/login">List Faskes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url(); ?>/admin/register">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success nav-link px-4 text-white" href="<?= site_url(); ?>/admin/login">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>