<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fkomentar extends CI_Controller
{
    public function index()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'Rumah Sakit Graha Permata Ibu';
        $data['kecamatan'] = 'Kecamatan Beji';
        $data['rating'] = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.3';
        $data['deskripsi'] = '
                <p>
                  Tujuan informasi laporan ini adalah untuk memberikan gambaran
                  mengenai pelaksanaan upaya peningkatan mutu yang dilakukan di
                  Rumah Sakit Grha Permata Ibu melalui pengukuran indikator
                  mutu.
                </p>
                <p>
                  Saat ini Rumah Sakit Grha Permata Ibu telah menentukan
                  indikator mutu prioritas, dimana 45 indikator itu telah
                  memenuhi persyaratan problem prone, high cost, high risk dan
                  high volume. Diharapkan dengan upaya peningkatan mutu yang
                  berkelanjutan Continous Quality Improvement (CQI) yang
                  dilakukan bisa meningkatkan mutu pelayanan dan keselamatan
                  pasien di Rumah Sakit Grha Permata Ibu.
                </p>
                <p>
                  Selain itu pula, laporan ini dapat digunakan sebagai
                  Benchmarking bagi Rumah Sakit dalam rangka memenuhi standar
                  akreditasi pokja PMKP akreditasi versi 2012.
                </p>';

        $data['gambar1'] = '1.jpg';
        $data['gambar2'] = '2.jpg';
        $data['gambar3'] = '3.jpeg';
        $data['gambar4'] = '4.jpg';

        $data['maps'] = 'maps';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function hermina()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'Rumah Sakit Umum Hermina Depok';
        $data['kecamatan'] = 'Kecamatan Pancoran Mas';
        $data['rating'] = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star-o"></i> 4.0';
        $data['deskripsi'] = '
                <p>
                  Sebagai grup bisnis, Hermina Hospitals menawarkan layanan rumah sakit umum dan telah mengembangkan layanan komprehensif. didukung oleh perawatan spesialis. 
                <p>
                  Dalam menjalankan fungsinya, Rumah Sakit Hermina menyediakan perawatan kesehatannya secara optimal dan profesional, di bawah nilai "Pertumbuhan, Kesehatan, Umur Panjang". Hermina Hospitals berkomitmen untuk menyediakan layanan bagi pasien BPJS untuk mendukung program pemerintah di Indonesia.
                </p>
                </p>
                <p>
                  "KEPERCAYAAN" sebagai nilai inti yang mencerminkan kepercayaan pelanggan dan pemangku kepentingan lainnya
                </p>';

        $data['gambar1'] = '21.jpg';
        $data['gambar2'] = '22.jpg';
        $data['gambar3'] = '23.jpg';
        $data['gambar4'] = '24.png';

        $data['maps'] = 'maps2';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function audy()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'Klinik Audy Dental Depok';
        $data['kecamatan'] = 'Kecamatan Cimanggis';
        $data['rating'] = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star"></i> 5.0';
        $data['deskripsi'] = '
                <p>
                  AUDY Dental adalah klinik dokter gigi spesialis terbesar yang telah melayani pasien di Indonesia selama lebih dari 13 tahun. Berada di bawah naungan PT. Audy Mandiri Indonesia, hingga saat ini AUDY Dental telah memiliki 18 cabang klinik di Jabodetabek dan Bandung serta melayani lebih dari 10.000 pasien setiap bulannya.
                </p>
                <p>
                  Tagline AUDY Dental “WHERE YOUR PERFECT SMILE BEGINS” kami wujudkan dalam bentuk komitmen untuk senantiasa memberikan pelayanan serta perawatan dental terbaik bagi setiap pasien melalui tim Dokter Gigi Spesialis yang expert dan berpengalaman, peralatan dan perlengkapan medis yang mutakhir, serta para staff yang terlatih dan berdedikasi.
                </p>
                <p>
                  AUDY Dental beranggotakan lebih dari 500 Dokter Gigi dan staff dengan salah satu visi misi terus berkembang serta membangun klinik di kota-kota besar di tanah air agar semakin dekat dengan pasien, sekaligus memberikan kontribusi nyata bagi peningkatan kualitas kesehatan gigi masyarakat. 
                </p>';

        $data['gambar1'] = '31.jpg';
        $data['gambar2'] = '32.jpg';
        $data['gambar3'] = '33.jpg';
        $data['gambar4'] = '34.jpg';

        $data['maps'] = 'maps3';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function puskes()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'Puskesmas Depok Utara';
        $data['kecamatan'] = 'Kecamatan Beji';
        $data['rating'] = '</i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.4';
        $data['deskripsi'] = '
                <p>
                  Kondisi lingkungan fisik dan biologik merupakan suatu komponen yang cukup penting dalam aktifitas manusia, karena kualitas lingkungan secara fisik maupun biologik sangat berperan dalam proses terjadinya gangguan kesehatan bagi warga masyarakat. 
                </p>
                <p>
                  Kualitas lingkungan di wilayah Puskesmas Depok Utara ada hubungannya dengan kondisi kota yang cukup padat terutama akibat aktifitas dan mobilitas penduduk baik dari kota Depok sendiri maupun penduduk pendatang atau penduduk musiman yang melakukan aktifitas di wilayah Puskesmas setiap hari. Profil ini juga merupakan salah satu sarana yang dapat digunakan untuk memantau dan mengevaluasi terhadap pencapaian hasil pelayanan termasuk di masa covid-19 sekarang ini dan kinerja dari seluruh program dan unit pelayanan. Profil ini juga berisi berbagai data dan informasi yang menggambarkan situasi dan kondisi kesehatan masyarakat di wilayah kerja UPTD Puskemas Depok Utara yang dapat menjadi bahan masukan dalam penyusunan perencanaan kegiatan dan program puskesmas.
                </p>
                <p>
                  UPTD Puskesmas Depok Utara secara terus menerus dan berkesinambungan mengevaluasi hasil kinerja kami dan berusaha keras untuk selalu memenuhi kepuasan pelanggan dalam seluruh kegiatan pelayanan sesuai peraturan dan perundang-undangan yang berlaku.
                </p>';

        $data['gambar1'] = '41.jpeg';
        $data['gambar2'] = '43.jpg';
        $data['gambar3'] = '42.jpg';
        $data['gambar4'] = '44.jpg';

        $data['maps'] = 'maps4';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function kfarma()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'Klinik Kimia Farma Depok';
        $data['kecamatan'] = 'Kecamatan Cilodong';
        $data['rating'] = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></i><i class="fa fa-star-o"></i> 3.8';
        $data['deskripsi'] = '
                <p>
                  Kimia Farma adalah perusahaan industri farmasi pertama di Indonesia yang didirikan oleh Pemerintah Hindia Belanda tahun 1817. Nama perusahaan ini pada awalnya adalah NV Chemicalien Handle Rathkamp & Co. Berdasarkan kebijaksanaan nasionalisasi atas eks perusahaan Belanda di masa awal kemerdekaan, pada tahun 1958, Pemerintah Republik Indonesia melakukan peleburan sejumlah perusahaan farmasi menjadi PNF (Perusahaan Negara Farmasi) Bhinneka Kimia Farma. Kemudian pada tanggal 16 Agustus 1971, bentuk badan hukum PNF diubah menjadi Perseroan Terbatas, sehingga nama perusahaan berubah menjadi PT Kimia Farma (Persero).
                </p>
                <p>
                  Pada tanggal 4 Juli 2001, PT Kimia Farma (Persero) kembali mengubah statusnya menjadi perusahaan publik, PT Kimia Farma (Persero) Tbk, dalam penulisan berikutnya disebut Perseroan. Bersamaan dengan perubahan tersebut, Perseroan telah dicatatkan pada Bursa Efek Jakarta dan Bursa Efek Surabaya (sekarang kedua bursa telah merger dan kini bernama Bursa Efek Indonesia). Berbekal pengalaman selama puluhan tahun, Perseroan telah berkembang menjadi perusahaan dengan pelayanan kesehatan terintegrasi di Indonesia. Perseroan kian diperhitungkan kiprahnya dalam pengembangan dan pembangunan bangsa, khususnya pembangunan kesehatan masyarakat Indonesia.
                </p>
                <p>
                  Berdasarkan persetujuan dari Menteri Hukum dan Hak Asasi Manusia Republik Indonesia dengan Surat Keputusannya Nomor AHU-0017895.AH.01.02 Tahun 2020 tanggal 28 Februari 2020 dan Surat Nomor AHU-AH.01.03-0115053 tanggal 28 Februari serta tertuang dalam Akta isalah RUPSLB Nomor 18 tanggal 18 September 2019, terjadi perubahan nama perusahaan yang semula PT Kimia Farma (Persero) Tbk menjadi PT Kimia Farma Tbk, efektif per tanggal 28 Februari 2020.
                </p>';

        $data['gambar1'] = '51.jpg';
        $data['gambar2'] = '52.jpg';
        $data['gambar3'] = '53.jpg';
        $data['gambar4'] = '54.jpg';

        $data['maps'] = 'maps5';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function kmutiara()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'Apotek Mutiara Depok';
        $data['kecamatan'] = 'Kecamatan Beji';
        $data['rating'] = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.7';
        $data['deskripsi'] = '
                <p>
                  Klinik mutiara 1 arh berdiri pada tanggal 01 april 2015, berdirinya klinik karena banyaknya permintaan customer dari Apotik mutiara dan warga sekitar apotik
                </p>';

        $data['gambar1'] = '61.jpg';
        $data['gambar2'] = '62.jpg';
        $data['gambar3'] = '63.jpg';
        $data['gambar4'] = '64.jpg';

        $data['maps'] = 'maps6';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function kmedika()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'Klinik Manar Medika Depok';
        $data['kecamatan'] = 'Kecamatan Limo';
        $data['rating'] = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.9';
        $data['deskripsi'] = '
                <p>
                  Klinik Manar Medika adalah Klinik yang berlokasi di Limo kota Depok. Jam operasional Klinik Manar Medika Senin - Minggu 08:00 - 22:00
                </p>';

        $data['gambar1'] = '71.jpg';
        $data['gambar2'] = '72.jpg';
        $data['gambar3'] = '73.jpg';
        $data['gambar4'] = '74.jpeg';

        $data['maps'] = 'maps7';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function rsud()
    {
        $this->load->model('fkomentar_model', 'fkomentar');

        $data['list_fkomentar'] = $this->fkomentar->getJoin();

        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';

        $data['nama_faskes'] = 'RSUD Tapos Kota Depok';
        $data['kecamatan'] = 'Kecamatan Tapos';
        $data['rating'] = '</i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i> 3.1';
        $data['deskripsi'] = '
                <p>
                  RSUD Depok atau memiliki nama lain RSUD Depok Barat adalah sebuah rumah sakit pemerintah yang terletak di Kota Depok, Jawa Barat. Rumah sakit ini dikategorikan kelas C dan terletak kurang lebih 7,7 km dari Parung, Kabupaten Bogor.
                </p>';

        $data['gambar1'] = '81.jpg';
        $data['gambar2'] = '82.jpg';
        $data['gambar3'] = '83.jpg';
        $data['gambar4'] = '84.png';

        $data['maps'] = 'maps8';
        
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/index', $data);
    }

    public function create()
    {
        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar/create', $data);
    }
    public function save()
    {
        $data['tittle'] = 'Detail Fasilitas Kesehatan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('fkomentar_model', 'fkomen', $data);

        $_isi = $this->input->post('isi');
        $data_fkomen[] = $_isi; //1
        $this->fkomen->save($data_fkomen);
        redirect(base_url() . 'index.php/fkomentar', $data);
    }
};
