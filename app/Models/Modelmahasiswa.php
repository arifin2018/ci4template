<?php
namespace App\Models;

use CodeIgniter\Model;
class Modelmahasiswa extends Model
# Alasan menggunakan Query Builder,Query Builder menggunakan PDO parameter binding untuk untuk melindungi aplikasi kita dari serangan injeksi SQL jadi kita tidak perlu lagi melakukan filter string sebagai binding.
# Selain itu Query Builder lebih cepat untuk mengkoneksian database 
{
    function tampildata(){              #Query Builder 
        return $this->db->table('mahasiswa')->get();
    }
    function simpan($data){
        return $this->db->table('mahasiswa')->insert($data);
    }
    function hapusdata($nim){
        return $this->db->table('mahasiswa')->delete(['mhsnim' => $nim]);
    }
    function ambildata($nim){
        return $this->db->table('mahasiswa')->getWhere(['mhsnim' => $nim]);
    }
    function editdata($data, $nim){
        return $this->db->table('mahasiswa')->update($data, ['mhsnim' => $nim]);
    }
}
            
?>