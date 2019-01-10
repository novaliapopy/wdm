<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model
{
    private $_table = "produk";

    public $produk_id;
    public $nama;
    public $gambar = "default.jpg";
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }


    function jumlah_product(){
        return $this->db->get('produk')->num_rows();
    }

    function data_product($number,$offset){
      $this->db->where('is_active',1);
      return $query = $this->db->get('produk',$number,$offset)->result();       
  }


  public function get_all_product()
  {
    $query  = "SELECT * FROM `produk` WHERE is_active='1'" ;
    $product = $this->db->query($query);
    return $product->result_array();
}


public function add_product($data)
{
    $this->db->insert('produk',$data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
}



public function getAll()
{
    return $this->db->get($this->_table)->result();
}

public function getById($id)
{
    return $this->db->get_where($this->_table, ["produk_id" => $id])->row();
}

public function save()
{
    $post = $this->input->post();
    $this->produk_id = uniqid();
    $this->nama = $post["nama"];
    $this->keterangan = $post["keterangan"];
    $this->db->insert($this->_table, $this);
}

public function update()
{
    $post = $this->input->post();
    $this->produk_id = $post["id"];
    $this->nama = $post["nama"];
    $this->keterangan = $post["keterangan"];
    $this->db->update($this->_table, $this, array('produk_id' => $post['id']));
}

public function delete($id)
{
    return $this->db->delete($this->_table, array("produk_id" => $id));
}
}