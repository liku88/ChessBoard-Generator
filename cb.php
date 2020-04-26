<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess Board Generator</title>
    <link rel="stylesheet" href="cb.css">
</head>
<body>
  <form action="" method="post">
   <input type="text" name="input" required>
   <input type="submit" value="Generate Board" name="generate">
   </form>
   <br>
   <br>
   <table>
       <?php
       
       if(isset($_POST['generate'])){
           $input = $_POST['input'];
           for($i=1; $i<=$input; $i++){
               echo "<tr>";
               for($j = 1; $j<=$input; $j++){
                   
                   if(($i + $j) %2 == 0){
                       echo "<td class = 'bgcolor'> </td>";
                   }else{
                       echo "<td> </td>";
                   }
               }
               
               
               
               echo "</tr>";
           }
       }
       
       
       
       
       
       ?>
       
       
       
       
       
   </table>
    
</body>
</html>