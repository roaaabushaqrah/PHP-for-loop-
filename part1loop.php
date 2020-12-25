<?php
echo"<h3 style ='color:red;'>Question one</h3>";
for($i=1;$i<=10;$i++){
    if($i<10){
        echo"<span style= 'color:red;'>$i- </span>";
    } else {
        echo"<span style= 'color:red;'>$i</span>";
    }
   
     
     
} 

echo "<hr>" ;
echo"<h3 style ='color:red;'>Question two</h3>";
$sum=0;
for($t=0;$t<=30;$t++){
    echo $t;
   echo " &nbsp";
    $sum+=$t;
 
  
}  echo "br>";
echo"<h3 style= 'color:red;'>total is:$sum </h3>";


echo "<hr>" ;
echo"<h3 style ='color:red;'>Question three:A</h3>";

$letter="A";
for($i=5;$i>=1;$i--){
    for($a=1;$a<=5;$a++){
        if ($i == 1 or (($a == 1 or $a == 2 or $a == 3 or $a == 4 or $a == 5) and ($i < 5 and $i> 1)) ){

            echo --$letter ," ";
            echo " &nbsp";}
       
       
    }echo "<br>"; 
}


   //or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
 

echo "<hr>" ;
echo"<h3 style ='color:red;'>Question three:B</h3>";
$letter=1;
for($i=1;$i<=5;$i++){
    for($a=1;$a<=5;$a++){
        
        echo $letter;
        echo " &nbsp";
      
    }echo "<br>";
  
    
    
    
    
}


echo "<hr>" ;
echo"<h3 style ='color:red;'>Question 4</h3>";
echo "<hr>" ;


echo "<hr>" ;
echo"<h3 style ='color:red;'>Question five</h3>";

$num=5;
 $factorial = 1; 
for($x=1; $x<=5; $x++){
  $factorial = $factorial * $x;
}echo " The factorial is:  ". $factorial;

echo "<hr>" ;
echo"<h3 style ='color:red;'>Question 6</h3>";


echo "<hr>" ;
echo"<h3 style ='color:red;'>Question 7</h3>";


echo "<hr>" ;
echo"<h3 style ='color:red;'>Question 8</h3>";

echo "<table border ='1' cellpadding='3px' cellsspacing='0px'><br/>";
for($rows=1;$rows <= 6; $rows ++){
    echo"<tr>"; 
    for($cols=1; $cols <= 5; $cols ++){
        $num2=$cols*$rows;
        echo"<td>$cols*$rows = $num2</td>";
       }echo"</tr>";
       }   

echo "</table>";




echo"<h3 style ='color:red;'>Question 9</h3>";
echo "<table border ='1' ;  width='270px' cellspacing='0px' cellpadding='30px'><br/>";
for($rows=1;$rows <= 8; $rows ++){
    echo"<tr>"; 
    for($cols=1; $cols <= 8; $cols ++){
        $num2=$cols+$rows;
        
        if($num2%2==0){ echo"<td style='background:black'> </td>";
           
        }else{ echo"<td style='background:white'> </td>";

        }
        
       }echo"</tr>";
    }  

echo "</table>";

echo"<h3 style ='color:red;'>Question Ten</h3>";

echo "<table border='1'><br />";

for ($row = 1; $row <= 10; $row ++) {
   echo "<tr>";

   for ($col = 1; $col <= 10; $col ++) {
    $num1=$col* $row ;
        echo "<td> $num1</td>";
   }

   echo "</tr>";
}

echo "</table>";
echo "<hr>" ;
echo"<h3 style ='color:red;'>Question 11</h3>";



echo "<hr>" ;

echo"<h3 style ='color:red;'>Question 12</h3>";
$k=1;
$rows=5;
for($i=1;$i<=$rows;$i++){
    for($j=1;$j<=$i;$j++){

    
    echo $k," ";
    $k++;
    }echo '<br>';
}







// $y="a ";

// for($i=5;$i >= 1; $i--){
// echo"<br>"; 
//         echo str_repeat($y,$i);
       
//         $y;
// }


/*$y=65;
   $row=5;
   for($i=1;$i <= $row; $i++){
   for($j=1;$j<=$i;$j++){
       echo chr($y)," ";
       $y++;
   }echo"<br>";
   }*/



   echo "<hr>" ;

echo"<h3 style ='color:red;'>Question 13</h3>";

echo "<pre>";
for($row =0;$row<=10;$row++){
    for($column =0; $column<=10; $column++){
        if((($column == 1 or $column ==10) and $row!=0) or(($row ==0 or$row ==5) and($column >1 and $column))){
        echo "*";

    } else {
        echo "&nbsp";
    } 
   
} echo"<br>";


} echo "</pre>";

echo "<hr>" ;

echo"<h3 style ='color:red;'>Question 14</h3>";
echo "<pre>";
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";



echo "<hr>" ;

echo"<h3 style ='color:red;'>Question 15</h3>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}


echo "<hr>" ;

echo"<h3 style ='color:red;'>Question 16</h3>";

function triangle($n) 
{ 
      
    // number of spaces 
    $k = 2 * $n - 2; 
  
    // outer loop to handle 
    // number of rows 
    // n in this case 
    for ($i = 0; $i < $n; $i++) 
    { 
          
        // inner loop to handle 
        // number spaces 
        // values changing acc.  
        // to requirement 
        for ($j = 0; $j < $k; $j++) 
            echo " "; 
  
        // decrementing k after 
        // each loop 
        $k = $k - 1; 
  
        // inner loop to handle  
        // number of columns 
        // values changing acc.  
        // to outer loop 
        for ($j = 0; $j <= $i; $j++ ) 
        { 
              
            // printing stars 
            echo "B "; 
        } 
  
        // ending line after 
        // each row 
        echo "\n"; 
    } 
} 
  
    // Driver Code 
    $n = 5; 
    triangle($n); 
   
    

    
