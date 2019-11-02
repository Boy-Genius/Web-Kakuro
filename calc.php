<?php
//$key = array_search('green', $array); מחזיר מיקום של פריט גרין ראשון
// count($array); אורך המערך
// unset($array[1]); מסיר פריט ממערך
for ($i=1; $i < 10 ; $i++) { 
    # code...
    for ($j=1; $j < 10; $j++) { 
        # code...
        if ($_GET ["$i$j"]<10 && $_GET ["$i$j"]>0 ){ 
            echo "enter";
            removeme($i,$j)   ;
            #var_dump($array56);
        }  
    }
}

function removeme($row, $column){
    echo $_GET ["$row$column"];
    $i = 1;
    echo $_GET [$row.($column+$i)];
    var_dump($array56);
    var_dump(${("array$row".($column+$i))});
    /*while (is_array($("array$row".($column+$i)  ) )    ) {
    echo "hurrray!";
    $i++;
   }*/
}

?>
