<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>      
        
    <form action="index.php" method="post">
            
    <table>
        <tr>
            <td>Numar:</td>
            <td><input type="text" name="numar"></td>
        </tr>        
        <tr>
            <td>Functii:</td>
            <td><input type="text" name="functie1"/></td>
            <td><input type="text" name="functie2"/></td>
            <td><input type="text" name="functie3"/></td>
            <td><input type="text" name="functie4"/></td>
            <td><input type="text" name="functie5"/></td>
        </tr>
                
        <tr>
             <td><input type="submit" name="ok" value="ok"><td>
        </tr>             
    </table>      
    </form>        
        
 <?php
    //numarul meu si functiile alese sunt puse in tabloul superglobal $_POST 
    
    $rez=array();
    require_once 'includes/functii.php';
    if(isset($_POST['ok'])){
      $x=$_POST['numar'];    //numarul este pus intr-o variabila $x
      $key=0;
      foreach($_POST as $i=> $val){
             switch($val){            //grupam rezultatele intr-un vector $rez
             case 'increment':
                 $rez[$key]=increment($x);
                 $key++;
                 break;
             case 'sum':
                 $rez[$key]=sum($x);
                 $key++;
                 break;
             case 'double':
                 $rez[$key]=double($x);
                 $key++;
                 break;
             case 'multiply_by_three':
                 $rez[$key]=multiply_by_three($x);
                 $key++;
                 break;
             case 'add_two':
                 $rez[$key]=add_two($x);
                 $key++;
                 break;
         }         
      }     
  }  
  
 print "Pentru numarul $x rezultatele sunt: <br />";
 foreach($rez as $i => $v)
          print "$v <br />"; 
      
     
?>
  
 
     </body>
</html>
