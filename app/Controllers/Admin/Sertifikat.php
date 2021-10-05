<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\All_model;

class Sertifikat extends BaseController
{
    public function index()
    {
        return view('admin/sertifikat_input_v.php');
    }
}
