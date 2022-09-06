<?php

# 2. Пусть дан массив с числами. Найдите с помощью класса ArraySumHelper сумму квадратов элементов этого массива.

include('ArraySumHelper.php');

$arr = [6,4,2];

echo ArraySumHelper::getSum2($arr);
