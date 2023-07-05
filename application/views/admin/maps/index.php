<div class="page-content page-home">
  <section
    class="store-breadcrumbs"
    data-aos="fade-down"
    data-aos-delay="100"
  >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/admin/home_after_auth">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/admin/details">Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Maps
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="embed-responsive embed-responsive-16by9">
          <?php echo $maps ?>
        </div>
      </div>
    </div>
  </div>
</div>