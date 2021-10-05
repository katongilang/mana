<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\All_model;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/home_v');
    }
}
