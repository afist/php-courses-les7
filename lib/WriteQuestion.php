<?php

class WriteQuestion
{
    private $arr;
    private $question;
    private $random;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }
    private function findQuestion()
    {
        $count = count($this->arr)-1;
        $random = random_int(0, $count);
        $this->question = $this->arr[$random];
        $this->random = $random ;
    }
    public function deleteQuestion($random)
    {
        return array_splice($this->arr, $this->random,1);
    }
    public function getQuestion(){
        $this->findQuestion();
        return $this->question;
    }
}