<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReccaTest extends Controller
{
    //
    public function q1($input){
        //strrev — 反轉字符串
        // return intval(strrev(strval($input)));
        return $this->q1_function($input);
    }

    public function q1_function($input){
        return intval(strrev(strval($input)));
    }



    public function q2($input){
        $input = intval($input);
        $array_data = array();
        for ($x = 1 ;$x <= $input ;$x++){
            array_push($array_data,$x);
        }
        return  collect($array_data)->sum();
    }



    public function q3($input){
        $input = intval($input);
        $array_data = array();
        for ($x = 1 ;$x <= $input ;$x++){
            array_push($array_data,$x);
        }

        return  collect($array_data)->map(function($item,$key){
            return pow($item,$item);
        })->sum();
    }
    

    public $result = 1 ;
    public function q4($input){
        $input = intval($input);
        $array_data = array();
        for ($x = 1 ;$x <= $input ;$x++){
            array_push($array_data,$x);
        }

        collect($array_data)->each(function($item,$key){
            $this->result = $this->result*$item;
        });
        return  $this->result;
    }

}
