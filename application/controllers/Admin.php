<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function home()
    {
        $data['tittle'] = 'Temukan Apa Yang Anda Butuhkan';
        $data['home'] = 'active';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar');
        $this->load->view('admin/home/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function home_admin()
    {
        $data['tittle'] = 'Home Fasilitas Kesehatan';
        $data['home'] = 'active';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-admin', $data);
        $this->load->view('admin/home/after-auth');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function home_after_auth()
    {
        $data['tittle'] = 'Home Fasilitas Kesehatan';
        $data['home'] = 'active';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/home/after-auth');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function categories()
    {
        $data['tittle'] = 'Semua Kategori dan Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = 'active';
        $data['list'] = '';
        $data['daftar'] = '';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar');
        $this->load->view('admin/categories/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function categories_after_auth()
    {
        $data['tittle'] = 'Semua Kategori dan Fasilitas Kesehatan';
        $data['home'] = '';
        $data['categories'] = 'active';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/categories/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function list_faskes()
    {
        $data['tittle'] = 'Daftar Fasilitas Kesehatan yang Terdaftar';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = 'active';
        $data['daftar'] = '';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar');
        $this->load->view('admin/list_faskes/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function list_faskes_after_auth()
    {
        $data['tittle'] = 'Daftar Fasilitas Kesehatan yang Terdaftar';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = 'active';
        $data['daftar'] = '';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('lfaskes');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['tittle'] = 'Masuk dan Jelajahi Keseluruhan Layanan';
            $this->load->view('layout1/v_style', $data);
            $this->load->view('layout1/v_navbar-auth');
            $this->load->view('admin/login/index');
            $this->load->view('layout1/v_footer');
            $this->load->view('layout1/v_script');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $users = $this->db->get_where('users', ['email' => $email])->row_array();

            if ($users) {
                if ($users['role'] == 'public') {
                    if (password_verify($password, $users['password'])) {
                        $data = [
                            'id' => $users['id'],
                            'username' => $users['username'],
                            'email' => $users['email'],
                            'role' => $users['role'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin/home_after_auth');
                    } else {
                        redirect('admin/login');
                    }
                } elseif ($users['role'] === 'administrator') {
                    if (password_verify($password, $users['password'])) {
                        $data = [
                            'id' => $users['id'],
                            'username' => $users['username'],
                            'email' => $users['email'],
                            'role' => $users['role'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin/home_admin');
                    } else {
                        redirect('admin/login');
                    }
                }
            } else {
                redirect('admin/login');
            }
        }
    }

    public function register()
    {
        $data['tittle'] = 'Daftar dan Nikmati Keseluruhan Layanan';
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-auth');
        $this->load->view('admin/register/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function register_success()
    {
        $data2['tittle'] = 'Pendaftaran Success';
        $this->load->view('layout1/v_style', $data2);
        $this->load->view('admin/register_success/index');
        $this->load->view('layout1/v_script');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == FALSE) {
            $data['tittle'] = 'Daftar dan Nikmati Keseluruhan Layanan';
            $this->load->view('layout1/v_style', $data);
            $this->load->view('layout1/v_navbar-auth');
            $this->load->view('admin/register/index');
            $this->load->view('layout1/v_footer');
            $this->load->view('layout1/v_script');
        } else {
            $data = [
                'username' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'created_at' => time(),
                'last_login' => time(),
                'status' => 1,
                'role' => 'public'
            ];

            $this->db->insert('users', $data);
            redirect('admin/register_success');
        }
    }

    public function details()
    {
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

        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('fkomentar', $data);
    }

    public function maps()
    {
        $data['tittle'] = 'Peta RS Graha Permata Ibu';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.180421771685!2d106.8112276147699!3d-6.37069249539009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eea618bfe82b%3A0x72a838530118e8ec!2sRumah%20Sakit%20Grha%20Permata%20Ibu!5e0!3m2!1sid!2sid!4v1655693687419!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function maps2()
    {
        $data['tittle'] = 'Peta RS Hermina Depok';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9544568182027!2d106.82297521477001!3d-6.39987029536935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebe73955c329%3A0x4f2bdf277a20025e!2sRSU%20Hermina%20Depok!5e0!3m2!1sid!2sid!4v1657160417890!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function maps3()
    {
        $data['tittle'] = 'Peta Klinik Gigi Audy Dental Depok';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.302760765151!2d106.84336301429087!3d-6.354839763937468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec38d4f7cef3%3A0xa95525286852cb2!2sAudy%20Dental%20Depok%20%7C%20Klinik%20Dokter%20Gigi%20Spesialis!5e0!3m2!1sid!2sid!4v1657160491258!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function maps4()
    {
        $data['tittle'] = 'Peta Puskesmas Depok Utara';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.073523167961!2d106.80865521429126!3d-6.38451236422459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9cac4f12cb3%3A0x2d34cee0d7047613!2sPuskesmas%20Depok%20Utara!5e0!3m2!1sid!2sid!4v1657160527792!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function maps5()
    {
        $data['tittle'] = 'Peta Apotek Kimia Farma Depok';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9993034923837!2d106.83296412695312!3d-6.3940899999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebf39ec2d2f3%3A0x708d6dabf74c3098!2sLaboratorium%20Klinik%20Kimia%20Farma%20Depok!5e0!3m2!1sid!2sid!4v1657160631594!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function maps6()
    {
        $data['tittle'] = 'Peta Apotek Mutiara Depok';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31720.305835905376!2d106.78299341562499!3d-6.389068600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9564b10fe35%3A0xb76dba6bec697720!2sKlinik%20Apotek%20Mutiara!5e0!3m2!1sid!2sid!4v1657160698923!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function maps7()
    {
        $data['tittle'] = 'Peta Klinik Manar Medika Depok';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.231466638366!2d106.77339421429097!3d-6.364082864026757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eede6e3075b1%3A0xf36eb2e82d5d4e65!2sKLINIK%20DAN%20APOTEK%20MANAR%20MEDIKA!5e0!3m2!1sid!2sid!4v1657160761049!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function maps8()
    {
        $data['tittle'] = 'Peta RSUD Kota Depok';
        $data['home'] = '';
        $data['categories'] = '';
        $data['list'] = '';
        $data['daftar'] = '';
        $data['maps'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9246815517226!2d106.75624181429137!3d-6.403705164411053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e8e7cb10676b%3A0x50367589ec61dde7!2sRSUD%20Kota%20Depok!5e0!3m2!1sid!2sid!4v1657160791039!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_navbar-after-auth', $data);
        $this->load->view('admin/maps/index');
        $this->load->view('layout1/v_footer');
        $this->load->view('layout1/v_script');
    }

    public function dashboard_settings()
    {
        $data['tittle'] = 'Pengaturan';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout1/v_style', $data);
        $this->load->view('layout1/v_sidebar-settings');
        $this->load->view('admin/dashboard_settings/index', $data);
    }
}

