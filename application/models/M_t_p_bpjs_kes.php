<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_t_p_bpjs_kes extends CI_Model {
    
  

public function update($data, $id)
{
    $this->db->where('ID', $id);
    return $this->db->update('T_P_BPJS_KES', $data);
}

public function select_id($id)
{
  $this->db->select('ID');
  $this->db->from('T_P_BPJS_KES');
  $this->db->where('BPJS_KES', $id);
  $akun = $this->db->get ();
  return $akun->result ();
}





  public function select()
  {
    $this->db->select('*');
    $this->db->from('T_P_BPJS_KES');

    if($this->session->userdata('t_p_bpjs_kes_delete_logic')==0)
    {
      $this->db->where('MARK_FOR_DELETE',FALSE);
    }
    $this->db->order_by("ID", "asc");
    $akun = $this->db->get ();
    return $akun->result ();
  }

  public function delete($id)
  {
    $this->db->where('ID',$id);
    $this->db->delete('T_P_BPJS_KES');
  }

  function tambah($data)
  {
    $this->db->insert('T_P_BPJS_KES', $data);
    return TRUE;
  }

}


