<?php

namespace StackerStack;

class FifoStack extends Stacker
{
    protected $filePath = ROOT . DS . 'fifo_stack.json';

    /**
     * @param bool $associative
     * @return mixed|null
     */
    protected function get(bool $associative)
    {
        if (file_exists($this->filePath)){
            $data = file_get_contents($this->filePath);

            if ($data) {
                // Get current data of array.
                $tmp = json_decode($data, $associative);
                // pop the top element
                $poppedNode = array_shift($tmp);
                // Save the array without the popped element.
                file_put_contents($this->filePath, json_encode($tmp));
                return $poppedNode;
            }
        }

        return null;
    }
}