<html>

<p id="eightrandom"></p>

	                <form action='' method='POST' enctype='multipart/form-data' >
                            <p style='font-size:40px;color:green'></p>
								
							<p style='font-size:40px;color:green'></p>
                            <p style='font-size:40px;color:green'></p>
                            
							
							<div class='form-group'> <label for='exampleInputEmail1'>Account Balance</label> <input type='text' name='bal' value='' class='form-control' id='eightrandom' placeholder=''> </div>	
							
						
						
							
							
							
							<button type='submit' name='upd' class='btn btn-default'>Submit</button> 
							</form> 
</html>

<script>
var eightdigitrandom = Math.floor(100000000000 + Math.random() * 900000000000);
document.getElementById("eightrandom") .innerHTML=eightdigitrandom;

				
// alert(val);
</script>

<?php 
$rand=rand(); 
echo $rand; 
?>

<br>

<?php 
if(isset($_POST['roll'])) 
{ 
$rand=rand(1,6); 
echo 'Dice shows'." ".$rand; 
} 
?>
<form action="random.php" method="POST">
<input type="submit" name="roll" value="roll dice">
</form>








..................................................................................<br>

<?php 

  
// This function will return a random 
// string of specified length 

function random_strings($length_of_string) 
{ 

  

    // String of all alphanumeric character 

    $str_result = '0123456789ABCDE'; 

  

    // Shufle the $str_result and returns substring 

    // of specified length 

    return substr(str_shuffle($str_result),  

                       0, $length_of_string); 
} 

  
// This function will generate 
// Random string of length 10 

echo random_strings(10); 

 echo "\n";
  
?> 