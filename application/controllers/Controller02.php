<?php 
    class Controller02 extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("model02");
        }
        
        public function index(){
            $data['data'] = $this->model02->getAll();
            $this->load->view('remidi/v_tampilremidi', $data);
        }

        public function tambah(){
            $this->load->view('remidi/v_tambahremidi');
        }

        public function simpanTambah(){
            $id_02 = $this->input->post('txt_id_02');
            $nama_aset = $this->input->post('txt_nama_aset');
            $jenis_aset = $this->input->post('txt_jenis_aset');
            $kondisi = $this->input->post('txt_kondisi');
            $jumlah = $this->input->post('txt_jumlah');

            $data_input = [
                'id_02' => $id_02,
                'nama_aset' => $nama_aset,
                'jenis_aset' => $jenis_aset,
                'kondisi' => $kondisi,
                'jumlah' => $jumlah,
            ];

            $simpan = $this->model02->add($data_input);
            redirect('Controller02/index');
        }
    }
?>