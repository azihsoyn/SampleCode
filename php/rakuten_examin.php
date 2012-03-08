<?php

class F{
    private static $cache = array();
    public function __construct(){
        self::$cache;
    }

    public function f($num){
        if(array_key_exists($num, self::$cache)) return self::$cache[$num];
        if($num < 1) return 0;
        $res = $this->f($num - 3) + $this->f($num - 2) + $this->f($num - 1);
        if($num < 4) $res += 1;
        self::$cache[$num] = $res;
        return $res;
    }
}

$f = new F();
print_r($f->f(100));
