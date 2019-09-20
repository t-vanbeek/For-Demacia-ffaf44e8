<?php
$klasgenoten = array(1 =>'Thorvald',
                     2 =>'Tyrese',
                     3=>'Wahid',
                     4=>'Randy',
                     5=>'Sven'
                    );
    
var_dump(count($klasgenoten));
foreach ($klasgenoten as $klasgenoot){
    echo "$klasgenoot".PHP_EOL;
}
?>