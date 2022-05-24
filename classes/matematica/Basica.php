<?php

namespace matematica;

class Basica{
    public function somar($x, $y){
        if(is_numeric($x) && is_numeric($y))
        return $x+$y;
    }
}