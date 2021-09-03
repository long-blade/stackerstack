<?php

namespace stackerstack;

class LifoStack extends Stacker
{
    protected $filePath = ROOT . DS . 'lifo_stack.json';

    /**
     * @return mixed|null
     */
    protected function get()
    {
        if (file_exists($this->filePath)){
            $data = file_get_contents($this->filePath);

            if ($data) {
                // Get current data of array.
                $tmp = json_decode($data);
                // pop the top element
                $poppedNode = array_pop($tmp);
                // Save the array without the popped element.
                file_put_contents($this->filePath, json_encode($tmp));
                return $poppedNode;
            }
        }

        return null;
    }
}