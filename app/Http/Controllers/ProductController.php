<?php

namespace App\Http\Controllers;

use App\Product\Crud;

class ProductController {

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function read()
    {
        $khayrul = "khayrul". '<br>';
        $this->crud->read($khayrul);

    }

    public function create()
    {
        $khayrul = "khayrul";
        $this->crud->create($khayrul);

    }


}