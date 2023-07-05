<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/admin/home_after_auth">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Detail Faskes
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="card-body">
        <div class="row mb-2" style="display: flex; justify-content:center;">
            <div class="col-sm-10">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">ID</td>
                            <td><?= $lfaskes->id ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Nama</td>
                            <td><?= $lfaskes->nama ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Alamat</td>
                            <td><?= $lfaskes->alamat ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Latlong</td>
                            <td><?= $lfaskes->latlong ?></td>
                        </tr>
                        <tr class="d-none">
                            <td>Jenis ID</td>
                            <td><?= $lfaskes->jenis_id ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Deskripsi</td>
                            <td><?= $lfaskes->deskripsi ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Rating</td>
                            <td><?= $lfaskes->skor_rating ?></td>
                        </tr>
                        <tr class="d-none">
                            <td>Foto1</td>
                            <td><?= $lfaskes->foto1 ?></td>
                        </tr>
                        <tr class="d-none">
                            <td>Foto2</td>
                            <td><?= $lfaskes->foto2 ?></td>
                        </tr>
                        <tr class="d-none">
                            <td>Foto3</td>
                            <td><?= $lfaskes->foto3 ?></td>
                        </tr>
                        <tr class="d-none">
                            <td>Kecamatan ID</td>
                            <td><?= $lfaskes->kecamatan_id ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Website</td>
                            <td><a href="#"><?= $lfaskes->website ?></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Dokter</td>
                            <td><?= $lfaskes->jumlah_dokter ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Pegawai</td>
                            <td><?= $lfaskes->jumlah_pegawai ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>