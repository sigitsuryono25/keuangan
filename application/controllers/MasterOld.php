<?php
class MasterOld extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login_status') != TRUE) {
            $this->session->set_flashdata('notif', 'LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
        $this->load->helper('currency_format_helper');
    }

    function index()
    {
        $data = array(
            'title' => 'Master Data',
            'active_master' => 'active',
            'kd_pos' => $this->model_app->getKodePos(),
            'kd_klien' => $this->model_app->getKodeKlien(),
            'kd_staff' => $this->model_app->getKodeStaff(),
            'data_klien' => $this->model_app->getAllData('tbl_klien'),
            'data_staff' => $this->model_app->getAllData('tbl_staff'),
        );
        $this->load->view('element/v_header', $data);
        $this->load->view('pages/v_master');
        $this->load->view('element/v_footer');
    }

    //
    //    ===================== INSERT =====================
    function tambah_pos()
    {
        $data = array(
            'kode_pos' => $this->input->post('kode_pos'),
            'kategori_pos' => $this->input->post('kategori_pos'),
            'nama_pos' => $this->input->post('nama_pos'),
        );
        $this->model_app->insertData('tbl_pos', $data);
        redirect("master");
    }
    function tambah_klien()
    {
        $data = array(
            'kode_klien' => $this->input->post('kode_klien'),
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'nama_klien' => $this->input->post('nama_klien'),
            'alamat_klien' => $this->input->post('alamat_klien'),
            'email_klien' => $this->input->post('email_klien'),
            'telepon_klien' => $this->input->post('telepon_klien'),
        );
        $this->model_app->insertData('tbl_klien', $data);
        redirect("master");
    }
    function tambah_staff()
    {
        $data = array(
            'kode_staff' => $this->input->post('kode_staff'),
            'id_peran' => $this->input->post('id_peran'),
            'nama_staff' => $this->input->post('nama_staff'),
            'telepon_staff' => $this->input->post('telepon_staff'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
        );
        $this->model_app->insertData('tbl_pegawai', $data);
        redirect("master");
    }


    //    ======================== EDIT =======================
    function edit_pos()
    {
        $id['kode_pos'] = $this->input->post('kode_pos');
        $data = array(
            'kategori_pos' => $this->input->post('kategori_pos'),
            'nama_pos' => $this->input->post('nama_pos'),
        );
        $this->model_app->updateData('tbl_pos', $data, $id);
        redirect("master");
    }
    function edit_klien()
    {
        $id['kode_klien'] = $this->input->post('kode_klien');
        $data = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'nama_klien' => $this->input->post('nama_klien'),
            'alamat_klien' => $this->input->post('alamat_klien'),
            'email_klien' => $this->input->post('email_klien'),
            'telepon_klien' => $this->input->post('telepon_klien'),
        );
        $this->model_app->updateData('tbl_klien', $data, $id);
        redirect("master");
    }

    function edit_staff()
    {
        $id['kode_staff'] = $this->input->post('kode_staff');
        $data = array(
            'id_peran' => $this->input->post('id_peran'),
            'nama_staff' => $this->input->post('nama_staff'),
            'telepon_staff' => $this->input->post('telepon_staff'),
            'gaji_staff' => $this->input->post('gaji_staff'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
        );
        $this->model_app->updateData('tbl_staff', $data, $id);
        redirect("master");
    }

    //    ========================== DELETE =======================
    function hapus_pos()
    {
        $id['kode_pos'] = $this->uri->segment(3);
        $this->model_app->deleteData('tbl_pos', $id);
        redirect("master");
    }
    function hapus_klien()
    {
        $id['kode_klien'] = $this->uri->segment(3);
        $this->model_app->deleteData('tbl_klien', $id);
        redirect("master");
    }
    function hapus_staff()
    {
        $id['kode_staff'] = $this->uri->segment(3);
        $this->model_app->deleteData('tbl_staff', $id);
        redirect("master");
    }
}
