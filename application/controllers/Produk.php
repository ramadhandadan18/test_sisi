<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_m');

        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function index()
    {

        $this->load->view('templates/bar');

        $this->load->view('view_Produk');
        $this->load->view('templates/footer');
    }

    public function echopre($dt)
    {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data()
    {


        $Produk = $this->Produk_m->get_data();

        $i = 0;
        if (!empty($Produk)) {
            foreach ($Produk as $k => $v) {
                $dt_final[$i]['produk_id'] = $v['produk_id'];
                $dt_final[$i]['produk_nama'] = strtoupper($v['produk_nama']);
                $dt_final[$i]['produk_nama1'] = strtoupper($v['produk_nama1']);
                $dt_final[$i]['no_hp'] = $v['no_hp'];
                $dt_final[$i]['email'] = $v['email'];
                $dt_final[$i]['jk'] = $v['jk'];
                $dt_final[$i]['alamat'] = $v['alamat'];
                $dt_final[$i]['job'] = $v['job'];
            }
        } else {
            $dt_final[$i]['produk_nama'] = "Data is null";
        }
        $object = json_decode(json_encode($dt_final), FALSE);
        // $this->echopre($object);die;
        echo json_encode(array('response' => $object));
    }

    public function save_add()
    {
        $msg = "Error Input";
        if ($this->input->post('produk_nama') == null || $this->input->post('no_hp') == null) {
            $result = false;
            $msg = "Nama dan no hp tidak boleh kosong";
        } else {
            $data = array(
                'produk_nama' => $this->input->post('produk_nama'),
                'produk_nama1' => $this->input->post('produk_nama1'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'job' => $this->input->post('job'),
            );

            $result = $this->Produk_m->save_add($data);
        }

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }
    }

    public function get_data_by_id($id)
    {

        $Produk = $this->Produk_m->get_data_by_id($id);

        echo json_encode($Produk);
    }

    public function save_edit()
    {
        $msg = "Error Edit";
        // $this->echopre($_POST);die;
        // $this->echopre($_FILES);die;
        if ($this->input->post('produk_nama') == null || $this->input->post('no_hp') == null) {
            $result = false;
            $msg = "Nama dan no hp tidak boleh kosong";
        } else {
            $id = $this->input->post('produk_id');
            $data = array(
                'produk_nama' => $this->input->post('produk_nama'),
                'produk_nama1' => $this->input->post('produk_nama1'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'job' => $this->input->post('job'),

            );
            $result = $this->Produk_m->save_edit($data, $id);
        }


        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }
    }

    public function save_delete()
    {
        $id = $this->input->post('id');
        $gambar_delete = $this->Produk_m->get_gambar_delete($id);
        $result = $this->Produk_m->deleted_data($id);
        if ($result) {
            @unlink("./assets/images/" . $gambar_delete);
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
