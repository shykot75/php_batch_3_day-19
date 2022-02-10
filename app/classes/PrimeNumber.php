<?php


namespace App\classes;


class PrimeNumber
{

    protected $number;
    protected $i;
    protected $n = 0;
    protected $result;
    protected $check;

    public function __construct($post=null)
    {
        $this->number = $post['given_number'];


    }


    public function primeNumber(){
        //echo $this->number;

        if($this->number == 1 || $this->number==2){
            return "$this->number is Prime";
        }

        else{
            for($this->i = 2; $this->i < $this->number; $this->i++){
                if($this->number % $this->i == 0){
                    return "$this->number is not Prime";
                }
            }
            return "$this->number is Prime";
        }




    }
}