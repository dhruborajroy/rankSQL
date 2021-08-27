<?php 
$con=mysqli_connect("localhost","root","","DATABASE_NAME");
$sql="select * from students order by physics DESC , chemistry DESC, math DESC";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
  $i=1;
  while($row=mysqli_fetch_assoc($res)){
    $swl="update students set merit='$i' where id='".$row['id']."'";
    mysqli_query($con,$swl);
    echo $row['name']."<br>";
    echo $row['merit']."<br>";
    $i++;
  }
}
