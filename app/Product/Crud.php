<?php

namespace App\Product;

interface Crud {

    public function read($data);

    public function create($data);

    public function edit($data);

    public function delete($data);

}