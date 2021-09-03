<?php

namespace StackerStack;

abstract class Stacker implements StackInterface
{
    /**
     * @param $data
     */
    public function push($data)
    {
        $this->add($data);
    }

    /**
     * @return mixed
     */
    public function pop()
    {
        return $this->get();
    }

    /**
     * @param $data
     */
    protected function add($data): void
    {
        if (file_exists($this->filePath))
            $fileData = file_get_contents($this->filePath);

        if(isset($fileData) && $fileData){
            $tmp = json_decode($fileData);
            array_push($tmp, $data);
            $jsonData = json_encode($tmp);
            file_put_contents($this->filePath, $jsonData);
        }else{
            //First time
            $jsonData = json_encode([$data]);
            file_put_contents($this->filePath, $jsonData);
        }
    }


}