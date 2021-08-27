<?php 
$con=mysqli_connect("localhost","root","","DATABASE_NAME");
$sql="select * from students order by physics, chemistry, math, sum(physics+chemistry+math) as totalMark desc";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>){
  $i=1;
  while($row=mysqli_fetch_assoc($res)){
    mysqli_query($con,"update students set merit='$i' where id='".$row['id']."'");
    $i++;
  }
}
