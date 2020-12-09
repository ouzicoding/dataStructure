<?php

function printN ($N)
{
    for($i=1;$i<=$N;$i++){
        printf("%d\n",$i);
    }
    return;
}
printN(10000000);

// 占用空间大
function printN1 ($N)
{
    if ($N) {
        printN1($N-1);
        printf("%d\n",$N);
    }
    return;
}

printN1(10000000);



