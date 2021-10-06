<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Sertifikat_m;

class Sertifikat extends BaseController
{
    public function __construct()
    {
        $this->Sertifikat_m = new Sertifikat_m();
    }

    public function index()
    {
        $data['karyawan'] = $this->Sertifikat_m->get_karyawan();
        return view('admin/sertifikat_input_v.php',$data);
    }
}
