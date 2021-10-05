<?php

/**
 * @Author: Gilbaskoro
 * @Date:   2021-02-15 12:31:27
 * @Last Modified by:   Gilbaskoro
 * @Last Modified time: 2021-10-05 14:20:41
 */
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface // terhubung dengan file app\Config\Filter.php
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if(! session()->get('status_login_manna')){
            // maka redirct ke halaman login
            return redirect()->to(base_url()); 
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}