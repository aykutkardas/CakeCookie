<?php

class CakeCookie {

    # x to second
    private $table = array(
        'year'   => 31556926,
        'month'  => 2629743.83,
        'day'    => 86400,
        'hour'   => 3600 ,
        'minute' => 60,
        'second' => 1
    );


    public function setCookie($data, $time)
    {
        if(!$data || !$time)
            return false;
        
        $totalTime = 0;
        
        if(gettype($time) === 'array') {
            foreach($time as $key => $val) {
                $totalTime += $time[$key] * $this->table[$key];
            }
        }

        if(gettype($time) === 'integer') {
            $totalTime = $time;
        }

        foreach ($data as $title => $value) {
            setCookie($title, json_encode($value), time() + $totalTime);
        }

    }

    public function getCookie($title = false)
    {
        if(!$title) return $_COOKIE;
        
        if(!isset($_COOKIE[$title])) return false;

        return json_decode($_COOKIE[$title]);
    }

    public function removeCookie($title = false)
    {
        if(!$title) {
            foreach ($_COOKIE as $title => $value) {
                $this->removeCookie($title);
            }
        }

        if(!isset($_COOKIE[$title])) return false;

        setCookie($title, null, time() - 1);
    }

}