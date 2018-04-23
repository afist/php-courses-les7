<?php

namespace lib\ReadFile;

class ReadFile
{
    private $_file_way;

    public function __construct($file_way)
    {
        $this->_file_way = $file_way;
    }
    private function readFile()
    {
        return file_get_contents($this->_file_way);
    }

    public function readFileJson()
    {
        return json_decode(file_get_contents($this->_file_way), true);
    }

    /**
     * @return mixed
     */
    public function getFileWay()
    {
        return $this->_file_way;
    }

    /**
     * @param mixed $file_way
     */
    public function setFileWay($file_way)
    {
        $this->_file_way = $file_way;
    }


}

// $file = '1.txt';
// header('Content-Type: txt');
// header('Content-Disposition: attachment; filename="1.txt"');
// readfile($file);
