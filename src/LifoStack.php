<?php

namespace StackerStack;

class LifoStack extends Stacker
{
    protected $filePath = ROOT . DS . 'lifo_stack.json';


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
                $poppedNode = array_pop($tmp);
                // Save the array without the popped element.
                file_put_contents($this->filePath, json_encode($tmp, JSON_UNESCAPED_UNICODE));
                return $poppedNode;
            }
        }

        return null;
    }
}