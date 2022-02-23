<?php
require "Conf.php";

function clear($str, $signs): string
{
    while(in_array(substr($str, -1), $signs) || in_array(substr($str, 0, 1), $signs)){
        if(in_array(substr($str, -1), $signs)){
            $str = substr($str, 0, -1);
        }
        if(in_array(substr($str, 0, 1), $signs)){
            $str = substr($str, 1);
        }
        if(in_array($str, $signs)){
            return $str;
        }
    }
    return $str;
}

function countWords($text, $signs): array
{
    //$signs = [',', '.', '(', ')', ':', ';', '-', ' ', ''];
    $res = [];
    $text = strtolower($text);
    $arr = explode(' ', $text);
    foreach ($arr as $str){
        $str = clear($str, $signs);
        if(!in_array($str, $signs)){
            if(array_key_exists($str, $res)){
                $res[$str]++;
            } else {
                $res[$str] = 1;
            }
        }
    }
    return $res;
}

function useOneBracket(string $str, $itemArr): string
{
    $arr = str_split($str);
    //$itemArr = ['(', ')'];
    $temp = '';
    return implode(array_reduce($arr, function($acc, $i) use (&$temp, $itemArr){
        if(in_array($i, $itemArr)){
            if($i === $temp || in_array($temp, $itemArr)){
                return $acc;
            }
        }
        $temp = $i;
        array_push($acc, $i);
        return $acc;
    }, []));
}

function luckyNumber(): array
{
    $returnArr = [];
    $number = 0;
    while(strlen((string) $number) < 7){
        $length = strlen((string) $number);
        if($length < 6){
            for($i = 0; $i < 6 - $length; $i++){
                $number = 0 . $number;
            }
        }
        $array  = array_map(function($n){
            return intval($n);
        }, str_split($number));
        $arrayCount1 = array_slice($array, 0, count($array)/2);
        $arrayCount2 = array_slice($array, count($array)/2, count($array)/2);
        if(array_sum($arrayCount1) === array_sum($arrayCount2)){
            $returnArr[] = (string)$number;
        }
        $number++;
    }
    return $returnArr;
}

function wordReverse(string $str): string
{
    $arr = str_split($str);
    $str = '';
    for($i = count($arr) - 1; $i >= 0; $i--){
        $str = $str . $arr[$i];
    }
    return $str;
}

function lettersSwap(string $text, $alphabet): string
{
    //$alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $res = [];
    $arr = str_split($text);
    foreach ($arr as $item){
        if(in_array($item, $alphabet)){
            $index = array_search($item, $alphabet);
            $res[] = $alphabet[count($alphabet) - 1 - $index];
            continue;
        }
        $res[] = $item;
    }
    return implode($res);
}

function uniqueWords(string $text, $signs): array
{
    $arr = countWords($text, $signs);
    $res = [];
    foreach ($arr as $key => $value){
        if($value === 1){
            $res[] = $key;
        }
    }
    return $res;
}

