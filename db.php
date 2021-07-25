<?php

$co=new mysqli("localhost","root","","bindu");
$n=$_POST["n"];
$b=$_POST["b"];
$c=$_POST["c"];
$st=$co->prepare("INSERT INTO stdt(Name,Branch,Cgpa) values(?,?,?) ");
$st->bind_param("ssi",$n,$b,$c);
$st->execute();
$st->close();
$q="select * from stdt";
$r=$co->query($q);
while($row=$r->fetch_assoc()){

echo " &nbsp &nbsp NAME: ".$row["Name"]."&nbsp &nbsp BRANCH: ".$row["Branch"]." &nbsp &nbsp CGPA:".$row["Cgpa"]."<br><br>";

}
$co->close();
?>