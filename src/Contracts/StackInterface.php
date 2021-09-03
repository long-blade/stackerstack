<?php

namespace StackerStack\Contracts;

interface StackInterface
{
    public function push($data);

    public function pop();
}