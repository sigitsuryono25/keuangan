<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('anggaran');
        $this->load->model('klien');
        $this->load->library('form_validation');
    }

   
    function klien() {
        //load the view
        $data['klien'] = $this->klien->getAll();
        $this->load->view('headfoot/header');
        $this->load->view('klien/list-klien', $data);
        $this->load->view('headfoot/footer');
    }

    function tambah_klien() {
        $this->load->view('headfoot/header');
        $this->load->view('klien/input-data-klien');
        $this->load->view('headfoot/footer');
    }

    function input_klien_proses() {
        // $idKlien = $this->input->post('klien');
        $namaPerusahaan = $this->input->post('nama_perusahaan');
        $namaKlien = $this->input->post('nama_klien');
        $alamatKlien = $this->input->post('alamat_klien');
        $emailKlien = $this->input->post('email_klien');
        $teleponKlien = $this->input->post('telepon_klien');

        $dataInsertKlien = [
            // 'id_klien' => $idKlien,
            'nama_perusahaan' => $namaPerusahaan,
            'nama_klien' => $namaKlien,
            'alamat_klien' => $alamatKlien,
            'email_klien' => $emailKlien,
            'telepon_klien' => $teleponKlien,
        ];

        $this->klien->insertData('tbl_klien', $dataInsertKlien);
        
        redirect('master/klien');
    }

    function edit_klien($idKlien)
    {
        $data['klien'] = $this->klien->getById($idKlien);
        $this->load->view('headfoot/header');
        $this->load->view('klien/edit-data-klien', $data);
        $this->load->view('headfoot/footer');
    }

    function update_klien($idKlien){
        $namaPerusahaan = $this->input->post('nama_perusahaan');
        $namaKlien = $this->input->post('nama_klien');
        $alamatKlien = $this->input->post('alamat_klien');
        $emailKlien = $this->input->post('email_klien');
        $teleponKlien = $this->input->post('telepon_klien');

        $dataUpdateKlien = [
            // 'id_klien' => $idKlien,
            'nama_perusahaan' => $namaPerusahaan,
            'nama_klien' => $namaKlien,
            'alamat_klien' => $alamatKlien,
            'email_klien' => $emailKlien,
            'telepon_klien' => $teleponKlien,
        ];

        $where = ['id_klien' => $idKlien];

        $this->klien->updateData('tbl_klien', $dataUpdateKlien, $where);
        
        redirect('master/klien');
    }

    function delete_klien($idKlien){
        $where = ['id_klien' => $idKlien];
        $this->klien->deleteData('tbl_klien', $where);
        
        redirect('master/klien');
        
    }

    function pos() {
        //load the view
        $this->load->view('headfoot/header');
        $this->load->view('pos/list-pos');
        // $this->load->view('pos/input-data-pos');
        $this->load->view('headfoot/footer');
    }

    function input_pos_proses() {
        $idPos = $this->input->post('pos');
        $idKategori = $this->input->post('kategori');
        $namaPos = $this->input->post('nama-pos');

        $dataInsertPos = [
            'id_pos' => $idPos,
            'id_kategori' => $idKategori,
            'nama_pos' => $namaPos,
        ];

        $this->pos->insertData('tbl_pos', $dataInsertPos);
    }

    function user() {
        //load the view
        $this->load->view('headfoot/header');
        $this->load->view('user/list-user');
        // $this->load->view('user/input-data-user');
        $this->load->view('headfoot/footer');
    }

    function input_user_proses() {
        $idUser = $this->input->post('user');
        $idPeran = $this->input->post('id-peran');
        $namaUser = $this->input->post('nama-user');
        $teleponUser = $this->input->post('telepon-user');
        $gajiUser = $this->input->post('gaji-user');

        $dataInsertUser = [
            'id_user' => $idUser,
            'id_peran' => $idPeran,
            'nama_user' => $namaUser,
            'telepon_user' => $teleponUser,
            'gaji_user' => $gajiUser,
        ];

        $this->user->insertData('tbl_pos', $dataInsertUser);
    }

}

/* End of file Controllername.php */
