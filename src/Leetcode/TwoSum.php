<?php

namespace App\Leetcode;

class TwoSum{

    public function solution($array, $target) 
    {
        $map = [];//2,..11
        for ($i=0; $i < count($array); $i++) { 
            $num    = $array[$i];
            $diff = $target - $num; 
            if (isset($map[$diff])) {
                return [$map[$diff], $i];
            }
            $map[$num] = $i;
        }
    }

}
