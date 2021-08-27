<?php
namespace App\Controllers\Home;


use App\Controllers\AbstractControllers;
use App\Model\Gallery as ModelAbout;

class Gallery extends AbstractControllers

{
    public function index()
    {

        $modelclass = new \App\Model\About();
        //$list = $modelclass->list();

        // $this->gener('About', $list);
    }

    public function about()
    {
        $funget = new ModelAbout();
        $this->gener('Gallery',$funget->getAllTitle());
    }

}