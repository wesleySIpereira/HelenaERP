<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // firt pass the information for page ex: title subtitle etc;
        $data=[
           'titulo'=>'Phw-erp'
          

        ];
        return view('home/index',$data);
    }
}
