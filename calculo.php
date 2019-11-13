<!DOCTYPE html><html>
<head>
    <TITLE>P(A+G) calc</TITLE>
</head>
<body><center>
    <h1>Resultado adquirido apartir dos valores inseridos</h1>
<?php
$pag=$_POST['progressao'];
$a1=$_POST['a1'];
$an=$_POST['an'];
$n=$_POST['n'];
$r=$_POST['r'];
if($a1=="" && $an=="" && $n=="" && $r==""){
  header("location: index.php") ;
}
if($pag=="pa"){
    if($an==""){
         $an=$a1+($n-1)*$r;
         echo "<h2>O Termo Geral da PA é ".$an."<h2>";
    } else if($r==""){
        $r=($an-$a1)/($n-1);
        echo "<h2>A razão da PA é ".$r."<h2>";
    } else if($a1==""){
        $a1=$an-(($n-1)*$r);
        echo "<h2>O Termo Inicial da PA é ".$a1."<h2>";
    } else if($n==""){
        $n=(($an-$a1)/$r)+1;
        echo "<h2>O Numero de termos/posição do termo da PA é ".$n."<h2>";
    }
}else{
    if($an==""){
        $an=$a1*$r**($n-1);
        echo "<h2>O Termo Geral da PG é ".$an."<h2>";
    } else if($a1==""){
        $a1=$an/($r**($n-1));
        echo "<h2>O Termo Inicial da PG é ".$a1."<h2>";
    } else if($r==""){
        $r=(($an/$a1)**(1/($n-1)));
        echo "<h2>A razão da PG é ".$r."<h2>";
    } else if($n==""){
        $n=1+log($an/$a1, $r);
        
        
        
        echo "<h2>O Numero de termos/posição do termo da PG é ".$n."<h2>";

    }
}

?>
    <form action="index.php">
    <input type="submit" value="Voltar">
    </form>
    </center></body>
    </html>