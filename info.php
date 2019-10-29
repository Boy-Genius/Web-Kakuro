
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
    echo '  <select  name='.$i.$j.' class=square2> 
            <option ></option>
            ';
            for ($n=1; $n < 10; $n++) { 
              echo '<option value='.$n.'>'.$n.'</option>';  
            }
            echo '</select>';
    }
	elseif($_GET[tristate."$i$j"]=="╲")
	{    
        ##echo '<input class=known readonly=true name=test value='.$_GET[tristate."$i$j"].'>';
	echo 
        '<div class=slashBackground > 
        <input class=known readonly=true name='.$i.$j.' value='.$_GET[tristate."$i$j"].'>
        </div>
        <div class=dualinput>
        <select  name='.$i.$j.'R class=right> 
        <option ></option>
        ';
        for ($n=1; $n < 100; $n++) { 
          echo '<option value='.$n.'>'.$n.'</option>';  
        }
    echo
        '
        </select>
        <select  name='.$i.$j.'R class=down> 
        <option ></option>
        ';
        for ($n=1; $n < 100; $n++) { 
          echo '<option value='.$n.'>'.$n.'</option>';  
        }
    echo
        '
        </select>
        </div>
        ';
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
