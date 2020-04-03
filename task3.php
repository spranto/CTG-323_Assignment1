<?php

    function recur($num)
    {
        if($num == 1) return 1;
        else return $num * recur($num - 1);
    }
    echo recur(5);
?>