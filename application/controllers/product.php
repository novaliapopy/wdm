<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model("M_product");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->view('header');
        // $data['product'] = $this->M_product->get_all_product();
        // $this->load->view('product', $data);
        // $this->load->view('footer');
        $this->load->database();
        $jumlah_data = $this->M_product->jumlah_product();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'product/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 6;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $data['product'] = $this->M_product->data_product($config['per_page'],$from);
        $this->load->view('header');
        $this->load->view('product',$data);
        $this->load->view('footer');
    }

    public function add()
    {
        $product = $this->M_product;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/add_post");
    }



    public function do_add_product()
    {
        print_r($_POST);
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');

        if(!empty($_FILES['gambar']['name']))
        {       
            $config['upload_path'] =  realpath('./assets/gambar/');
            $config['allowed_types'] = 'jpeg|jpg|png|JPEG';
            $config['max_size'] = '512000';
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            print_r($config);
            print_r($this->upload->do_upload('gambar'));
            print_r($this->upload->display_errors());
        }
        if(!$this->upload->do_upload('gambar'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('hasil', 'Failed To Upload');
            //print('huhu');
            redirect('product/add');
        }else{
            $file = $this->upload->data();
            $data = array(
                'nama'           => $nama,
                'keterangan'     => $keterangan,
                'gambar'         => $file['file_name'],
            );
            $query = "SELECT * from (select * from produk where is_active='1') u
            where nama='" . $data['nama'] . "'";
            $hasil = $this->db->query($query);
            $yay = $hasil->result_array();
            $cek = $hasil->num_rows();
            if ($hasil->num_rows() > 0) {
                $this->session->set_flashdata('hasil', 'Data already exist');
                print_r('wes enek');
                redirect('product/add');
            } else {
                $insert = $this->M_product->add_product($data);
                if ($insert != '') {
                    $this->session->set_flashdata('hasil', 'Data successfully add');
                    redirect('product/add');
                } else {
                    $this->session->set_flashdata('hasil', 'Failed to add data');
                    redirect('product/add');
                }
            }

        }
    } 





    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/produk');

        $product = $this->M_product;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["produk"] = $product->getById($id);
        if (!$data["produk"]) show_404();

        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->M_product->delete($id)) {
            redirect(site_url('admin/produk'));
        }
    }
}