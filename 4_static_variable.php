<?php
function myFunction()
{
    //khai bao bien static - giữ giá trị qua các lần gọi hàm.
    static $staticVar = 10;
    //khai bao bien thuong - luôn reset mỗi lần gọi hàm.
    $normalVar = 10;

    $staticVar++;
    $normalVar++;

    echo "<br> staticVar is " . $staticVar;
    echo "<br> normalVar is " . $normalVar;

  
}
  //goi ham
  myFunction();
  myFunction();
  myFunction();
?>