<?php

namespace App\StackerStack\src\Contracts;

interface StackInterface
{
    public function push($data);

    public function pop();
}