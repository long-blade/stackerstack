<?php

namespace stackerstack;

interface StackInterface
{
    public function push($data);

    public function pop();
}