<?php
namespace App\Controllers;

use CodeIgniter\Controller; #belum paham
use App\Models\Modelmahasiswa; #untuk menguhubungkan ke Model Mahasiswa

class Mahasiswa extends Controller{
    
    public function index(){
        $mhs = new Modelmahasiswa(); #variable mhs,samain dengan use Modelmahasiswa,modelnya
        $data = ['tampildata' => $mhs ->tampildata()->getResult()]; #untuk memanggil fungsi tampildata di Modelmahasiswa
    
        echo View('viewtampilmahasiswa',$data);
    }

    public function formtambah(){
        helper('form');
        echo View('viewformtambah');
    }

    public function simpandata(){
        $data = [
            'mhsnim' => $this->request->getpost('nim'),
            'mhsnama' => $this->request->getpost('nama'),
            'mhsjenkel' => $this->request->getpost('jenkel'),
            'mhstmplahir' => $this->request->getpost('tempat'),
            'mhstgllahir' => $this->request->getpost('tanggal'),
            'mhsalamat' => $this->request->getpost('alamat'),
            'mhstelp' => $this->request->getpost('telp'),           
        ];
        $mhs = new Modelmahasiswa();

        $simpan = $mhs->simpan($data);

        if ($simpan) {
            return redirect()->to('/mahasiswa/index');
        }
    }
    function hapus(){
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();
        $mhs -> hapusdata($nim); 

        return redirect()->to('/mahasiswa/index');
    }
    function formedit(){
        helper('form');
        $uri = service('uri');
        $nim = $uri->getSegment('3');
        $mhs = new Modelmahasiswa();

        $ambildata = $mhs->ambildata($nim);

        if (count($ambildata->getResult()) > 0){
            $row = $ambildata->getRow();
            $data = [
                'nim' => $nim,
                'nama' => $row->mhsnama,
                'jenkel' => $row->mhsjenkel,
                'tempat' => $row->mhstmplahir,
                'tanggal' => $row->mhstgllahir,
                'alamat' => $row->mhsalamat,
                'telp' => $row->mhstelp,
            ];
            echo View('viewformedit',$data);
        }
    }
    function updatedata(){
        $nim = $this->request->getpost('nim');
        $data = [
            'mhsnama' => $this->request->getpost('nama'),
            'mhsjenkel' => $this->request->getpost('jenkel'),
            'mhstmplahir' => $this->request->getpost('tempat'),
            'mhstgllahir' => $this->request->getpost('tanggal'),
            'mhsalamat' => $this->request->getpost('alamat'),
            'mhstelp' => $this->request->getpost('telp'),           
        ];
        $mhs = new Modelmahasiswa();

        $update = $mhs->editdata($data, $nim);

        if ($update) {
            return redirect()->to('/mahasiswa/index');
        }
    }
}