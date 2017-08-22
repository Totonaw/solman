<?php 

namespace Solman\Library;

class SolmanArray{
    
    static function _reverse(array $array, $preserved=false){
        return array_reverse($array,$preserved);
    }
}