<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('anggaran');
        $this->load->model('klien');
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->admin->logged_id()) {

            $this->load->view('headfoot/header');
            $this->load->view("dashboard");
            $this->load->view('headfoot/footer');
        } else {

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }


    function administration() {
        //load the view
        $data['bulan'] = $this->anggaran->getBulan()->result();
        $data['pos'] = $this->anggaran->getPos(1)->result();
        $data['klien'] = $this->klien->getKlien()->result();
        $this->load->view('headfoot/header');
        $this->load->view('administration/input-data', $data);
        $this->load->view('headfoot/footer');
    }

    function input_admin_proses() {
        $idKlien = $this->input->post('klien');
        $tahun = $this->input->post('tahun-anggaran');
        $bulan = $this->input->post('bulan-anggaran');


        //detail anggaran
        $pos = $this->input->post('pos-anggaran');
        $uraian = $this->input->post('uraian');
        $volume = $this->input->post('volume');
        $satuan = $this->input->post('satuan');
        $hargaSatuan = $this->input->post('harga-satuan');
        $pengeluaran = $this->input->post('pengeluaran');

        $dataInsertAnggaran = [
            'id_klien' => $idKlien,
            'id_bulan' => $bulan,
            'tahun' => $tahun,
        ];

        $dataInsertDetail = [
            'id_pos' => $pos,
            'uraian' => $uraian,
            'volume' => $volume,
            'satuan' => $satuan,
            'harga_satuan' => $hargaSatuan,
            'pengeluaran' => $pengeluaran,
        ];

        $this->anggaran->insertData('tbl_anggaran', $dataInsertAnggaran);
        $this->anggaran->insertData('tbl_detail_anggaran', $dataInsertDetail);
    }

    function production() {
        //load the view
        $data['bulan'] = $this->anggaran->getBulan()->result();
        $data['pos'] = $this->anggaran->getPos(2)->result();
        $data['klien'] = $this->klien->getKlien()->result();
        $this->load->view('headfoot/header');
        $this->load->view('production/input-data', $data);
        $this->load->view('headfoot/footer');
    }

    function input_production_proses() {
        $idKlien = $this->input->post('klien');
        $tahun = $this->input->post('tahun-anggaran');
        $bulan = $this->input->post('bulan-anggaran');


        //detail anggaran
        $pos = $this->input->post('pos-anggaran');
        $uraian = $this->input->post('uraian');
        $volume = $this->input->post('volume');
        $satuan = $this->input->post('satuan');
        $hargaSatuan = $this->input->post('harga-satuan');
        $pengeluaran = $this->input->post('pengeluaran');

        $dataInsertAnggaran = [
            'id_klien' => $idKlien,
            'id_bulan' => $bulan,
            'tahun' => $tahun,
        ];

        $dataInsertDetail = [
            'id_pos' => $pos,
            'uraian' => $uraian,
            'volume' => $volume,
            'satuan' => $satuan,
            'harga_satuan' => $hargaSatuan,
            'pengeluaran' => $pengeluaran,
        ];

        $this->anggaran->insertData('tbl_anggaran', $dataInsertAnggaran);
        $this->anggaran->insertData('tbl_detail_anggaran', $dataInsertDetail);
    }

    function hardware() {
        //load the view
        $data['bulan'] = $this->anggaran->getBulan()->result();
        $data['pos'] = $this->anggaran->getPos(3)->result();
        $data['klien'] = $this->klien->getKlien()->result();
        $this->load->view('headfoot/header');
        $this->load->view('hardware/input-data', $data);
        $this->load->view('headfoot/footer');
    }

    function input_hardware_proses() {
        $idKlien = $this->input->post('klien');
        $tahun = $this->input->post('tahun-anggaran');
        $bulan = $this->input->post('bulan-anggaran');


        //detail anggaran
        $pos = $this->input->post('pos-anggaran');
        $uraian = $this->input->post('uraian');
        $volume = $this->input->post('volume');
        $satuan = $this->input->post('satuan');
        $hargaSatuan = $this->input->post('harga-satuan');
        $pengeluaran = $this->input->post('pengeluaran');

        $dataInsertAnggaran = [
            'id_klien' => $idKlien,
            'id_bulan' => $bulan,
            'tahun' => $tahun,
        ];

        $dataInsertDetail = [
            'id_pos' => $pos,
            'uraian' => $uraian,
            'volume' => $volume,
            'satuan' => $satuan,
            'harga_satuan' => $hargaSatuan,
            'pengeluaran' => $pengeluaran,
        ];

        $this->anggaran->insertData('tbl_anggaran', $dataInsertAnggaran);
        $this->anggaran->insertData('tbl_detail_anggaran', $dataInsertDetail);
    }

    function maintenance() {
        //load the view
        $data['bulan'] = $this->anggaran->getBulan()->result();
        $data['pos'] = $this->anggaran->getPos(4)->result();
        $data['klien'] = $this->klien->getKlien()->result();
        $this->load->view('headfoot/header');
        $this->load->view('maintenance/input-data', $data);
        $this->load->view('headfoot/footer');
    }

    function input_maintenance_proses() {
        $idKlien = $this->input->post('klien');
        $tahun = $this->input->post('tahun-anggaran');
        $bulan = $this->input->post('bulan-anggaran');


        //detail anggaran
        $pos = $this->input->post('pos-anggaran');
        $uraian = $this->input->post('uraian');
        $volume = $this->input->post('volume');
        $satuan = $this->input->post('satuan');
        $hargaSatuan = $this->input->post('harga-satuan');
        $pengeluaran = $this->input->post('pengeluaran');

        $dataInsertAnggaran = [
            'id_klien' => $idKlien,
            'id_bulan' => $bulan,
            'tahun' => $tahun,
        ];

        $dataInsertDetail = [
            'id_pos' => $pos,
            'uraian' => $uraian,
            'volume' => $volume,
            'satuan' => $satuan,
            'harga_satuan' => $hargaSatuan,
            'pengeluaran' => $pengeluaran,
        ];

        $this->anggaran->insertData('tbl_anggaran', $dataInsertAnggaran);
        $this->anggaran->insertData('tbl_detail_anggaran', $dataInsertDetail);
    }

}
