<?php
if(isset($_POST['somar'])){

$valor=$_POST['valor'];
$nota=0;

while($nota<=$valor){

	$nota++;
}

}

if(isset($_POST['sub'])){

	$valor=$_POST['valor'];
	$nota=0;
	
	while($nota>=$valor){
	
		$nota--;
	}
	
	}


?>


<form action="index.php" method="post">
<input type="text" name="valor" placeholder="digite o seu valor" value="<?=$nota;?>">
<button name="somar"> +</button>
<button name="sub">-</button>



</form>
