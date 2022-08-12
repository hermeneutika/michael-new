foreach ($test as $i)
#$count=0;
echo "count b4 loop= ".$count;
{
  $x++;
  echo "x= ".$x;
  echo "i= ".$i;
  echo "count in loop= ".$count;
  $var1=count($test)-1;
  echo "var1 = ".$var1;
  $count++;
  echo $i. "<br>";
  echo "string1= ".$test[1];
  echo "string2= ".$test[2];
  echo "string3= ".$test[3];
  $locate=$i;
  echo "count in loop= ".$count;
  #echo "locate= ".$locate;
 # $query="select * from $comment where 'full'=1001003";
  #$result=mysqli_query($conn,$query);
  #$row= mysqli_fetch_array($result, MYSQLI_BOTH);
#$linkamend=$row["text"];
#$linklocate=$row["full"];

}
echo "count after loop=".$count;