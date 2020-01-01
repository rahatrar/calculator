<?php


class Calculation
{
public function calcu($fnum,$lnum,$btn){
    if(is_numeric($fnum) && is_numeric($lnum)){
        switch ($btn){
            case '+':
                $result = $fnum + $lnum;
                return $result;
                break;
            case '-':
                $result = $fnum - $lnum;
                return $result;
                break;
            case '*':
                $result = $fnum * $lnum;
                return $result;
                break;

        }
    }



}
}