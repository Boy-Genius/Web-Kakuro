
<?php 
echo # insert top html code...
'
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

$varray= "array$i$j"; 
$$varray = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
echo "$varray:";
echo '<pre>' , var_dump($$varray) , '</pre>';	
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
?>

<?php include 'calc.php';?>

