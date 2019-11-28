
<?php 
#initiate(); # why doesnt it work?

$cube = initiate();
$cube = initClean($cube);
#makeDebug($cube);


for ($i=1; $i < 10 ; $i++) { 
    # code...
    for ($j=1; $j < 10; $j++) { 
        # code...
        if ($_GET ["$i$j"]<10 && $_GET ["$i$j"]>0 ){ 
            echo "enter";
            $cube = removeme($i,$j,$cube)   ;
            echo "1.the value is:" , var_dump($cube[2][3][2]);
        }  
    }
}

makeDebug($cube);

function removeme($row, $column,$cube){
    echo $_GET ["$row$column"];
    $i = 1;
    $bool=var_dump($_GET ["$row($column+$i)"]=="");
    echo "$bool"."!!!!!!!!!!!!";
    while ($bool) {
        # to the the right!
        if( isset($cube[$row-1] [$column-1+$i] ) ){
            echo "im deleting you";
                $key = array_search($_GET ["$row$column"] , $cube[$row-1][$column-1+$i]);
                echo $key;
                echo $cube[$row-1][$column-1+$i][$key];
                unset($cube[$row-1][$column-1+$i][$key]);
                #$cube[$row][ ($column+1) ][$key] = NULL;
                echo "2.the value is:" , var_dump($cube[2][3][2]);
                echo var_dump($cube[$row-1][$column-1+$i]);
               
                #echo $cube[$row][ ($column+1) ][$key];
    
        }
        $i++;
        $bool=var_dump($_GET ["$row($column+$i)"]=="");
    }
   
   return $cube;
}

function initiate(){
    for($i=0;$i<9;$i++){
        for($j=0;$j<9;$j++){
         
            $cube[$i][$j] = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

        }     
    }
    return $cube;
}

function initClean($cube){
    for($i=1;$i<10;$i++){
        for($j=1;$j<10;$j++){
            if ($_GET ["$i$j"]!=""){ // checks if query parameter contains info
                
            $cube[$i-1][$j-1] = $_GET ["$i$j"]; // inserts parameter info into node
            #echo var_dump($cube[$i-1][$j-1]); ##debugging

            }
        }     
    }
    return $cube; ## not needed
}
function makeDebug($cube){
        # insert top html code...
    echo '
    <html>
    <head>
    <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>
        <table>

        <tbody>

    ';

    for($i=1;$i<10;$i++){
    echo "<tr>";
    for($j=1;$j<10;$j++){
    echo "<td>";
     if ($_GET ["$i$j"]==""){

    echo "$i$j:";
    echo '<pre>'  , var_dump($cube[$i-1][$j-1]) , '</pre>';	
       }
    elseif($_GET ["$i$j"]=="╲"){
    echo $_GET ["$i$j"."D"];
    echo $_GET ["$i$j"];
    echo $_GET ["$i$j"."R"];
    }
    elseif($_GET ["$i$j"]>0  && $_GET ["$i$j"]<10){
    echo $_GET ["$i$j"];
    }
    elseif($_GET ["$i$j"]=="⬛"){
    echo ⬛;
    }
    echo "</td>";
    }
    echo "</tr>";
    }

}

?>

<?php require 'calc.php';?>

