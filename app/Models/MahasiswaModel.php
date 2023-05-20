<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $nama = "Siti Rahmah";
    protected $foto = "Cas_Foto.jpg";

    public function getNama()
    {
        return $this->nama;
    }

    public function getFoto()
    {
        return $this->foto;
    }
}
