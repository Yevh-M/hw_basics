<?php

$a = -20;
settype ($a, "bool");

var_dump ($a);
// число з відємним знаком приймнається, як ціле число і прирівнюється до 1,
// тому приймає значення "true"