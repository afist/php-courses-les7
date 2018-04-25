<?php

namespace lib\ChangeFileXml;

class ChangeFileJson
{
    private $_file_way;

    public function __construct($file_way)
    {
        $this->_file_way = $file_way;
    }

    public function readFileJson()
    {
        return json_decode(file_get_contents($this->_file_way), true);
    }
    public function writeFilePhpToJson($arr)
    {
        file_put_contents($this->_file_way, json_encode($arr, true));
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