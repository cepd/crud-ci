<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MahasiswaModel extends CI_Model {
  public function view(){
    return $this->db->get('mahasiswa')->result();
  }
  
  public function view_by($nim){
    $this->db->where('nim', $nim);
    return $this->db->get('mahasiswa')->row();
  }
  
  public function validation($mode){
    $this->load->library('form_validation');
    if($mode == "save")
      $this->form_validation->set_rules('input_nim', 'NIM', 'required|numeric|max_length[50]');
    
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_kontak', 'Kontak', 'required|max_length[50]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('input_jurusan', 'jurusan', 'required');
      
    if($this->form_validation->run())
      return TRUE;
    else
      return FALSE;
  }
  
  public function save(){
    $data = array(
      "nim" => $this->input->post('input_nim'),
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "kontak" => $this->input->post('input_kontak'),
      "alamat" => $this->input->post('input_alamat'),
      "jurusan" => $this->input->post('input_jurusan')
    );
    
    $this->db->insert('mahasiswa', $data);
  }
  
  public function edit($nim){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "kontak" => $this->input->post('input_kontak'),
      "alamat" => $this->input->post('input_alamat'),
      "jurusan" => $this->input->post('input_jurusan')
    );
    
    $this->db->where('nim', $nim);
    $this->db->update('mahasiswa', $data);
  }
  
  public function delete($nim){
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa');
  }
}