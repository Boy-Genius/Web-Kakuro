<html>

<body style="
background-image: url('/cat.jpg');
background-repeat: no-repeat;
background-size: 100% 100%;
height: 100%; width: 100%;
">

<script type="text/javascript" charset="utf-8">
  /**
   *  loops thru the given 3 values for the given control
   */
  function tristate(control, value1, value2, value3) {
    switch (control.value.charAt(0)) {
      case value1:
        control.value = value2;
      break;
      case value2:
        control.value = value3;
      break;
      case value3:
        control.value = value1;
      break;
      default:
        // display the current value if it's unexpected
        alert(control.value);
    }
  }
  function tristate_Marks(control) {
    tristate(control,'\u2753', '\u2705', '\u274C');
  }
  function tristate_Circles(control) {
    tristate(control,'\u25EF', '\u25CE', '\u25C9');
  }
  function tristate_Ballot(control) {
    tristate(control,'\u2610', '\u2611', '\u2612');
  }
  function tristate_Check(control) {
    tristate(control,'\u25A1', '\u2754', '\u2714');
  }

</script>

<form>
    <table border=1>

    <tbody>
    <input style="border: 1;"
       id="tristate00" 
       type=""  
       readonly="true" 
       size="1" 
       value=""  
       onclick="switch(this.form.tristate00.value.charAt(0)) { 
         case '': this.form.tristate00.value='&#x2572;'; break;  
         case '&#x2572': this.form.tristate00.value='&#x2B1B;'; break; 
         case '&#x2B1B': this.form.tristate00.value=''; break; 
       };" 
       />
       <input style="border: 1;"
       id="tristate01" 
       type=""  
       readonly="true" 
       size="1" 
       value=""  
       onclick="switch(this.form.tristate01.value.charAt(0)) { 
         case '': this.form.tristate01.value='&#x2572;'; break;  
         case '&#x2572': this.form.tristate01.value='&#x2B1B;'; break; 
         case '&#x2B1B': this.form.tristate01.value=''; break; 
       };" 
       />

        <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>

    <tr>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    <td><input type="checkbox" max=3></td>
    
    </tr>
    
    </tbody>
    </table>
</form>


<?php 


?>

</body>




</html>
