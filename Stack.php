<?php


class Stack
{
    private $stack;
    private $limit;

    public function __construct($limit)
    {
        $this->limit=$limit;
        $this->stack= array();
    }

    public function push($item){
        if(count($this->stack)<$this->limit){
            array_unshift($this->stack,$item);
        }
        else{
            throw new RuntimeException("Stack is full");
        }
    }
    public function pop(){
        if($this->isEmpty()){
            throw new RuntimeException("Stack is empty!");
        }
        else{
            return array_shift($this->stack);
        }
    }
    public function top(){
        return current($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function checkEmpty(){
        if(count($this->stack)==0){
            echo "empty";
        }
        else{
            echo " Not empty";
        }
    }
}