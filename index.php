<?php

 $string = "F;E;L;I;P;E";

$transformArray = explode(";",$string);

$reversed = array_reverse($transformArray);

 print_r($reversed); 