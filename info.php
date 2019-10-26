
<?php
echo # insert top html code...
'
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body class=info>
<form action="solve.php" methood="GET">

    <table border=1 align=center name=table1>

    <tbody>
';

for ($i=1; $i < 10; $i++) { 
    echo '<tr>';
    for ($j=1; $j < 10; $j++) {
    echo '<td>';
    if ($_GET[tristate."$i$j"]==""){
    echo '<input class=sqare2 type=number max=9 min=1 name='.$i.$j.'>';
    }
    else{    
        echo '<input class=known readonly=true name='.$i.$j.' value='.$_GET[tristate."$i$j"].'>';
    }

    echo '</td>';
    }
    echo '</tr>';
}

echo # insert bottom html code...
'
    </tbody>
    </table>
    <input type=submit class=submit>
    </form>
    </body>
    </html>
';


?>