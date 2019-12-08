<?php

namespace App\Product;

class Generators implements Crud {


    public function read($data)
    {
        echo "hi read ".$data;
    }

    public function create($data)
    {
        echo "hi create ".$data;
    }

    public function edit($data)
    {
        echo "hi edit ".$data;
    }

    public function delete($data)
    {
        echo "hi delete ".$data;
    }

}