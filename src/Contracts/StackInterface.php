<?php

namespace StackerStack;

interface StackInterface
{
    public function push($data);

    public function pop();
}