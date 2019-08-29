<?php
/**
 * 斐波那契数列，递归实现
 */
function feib($n) {
    if($n==0) {
        return 0;
    } elseif($n<=2) {
        return 1;
    }else {
        return feib($n-1)+feib($n-2);
    }
}
echo feib(13);