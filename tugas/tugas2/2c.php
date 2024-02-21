<?php
for ($d = 10; $d >= 1; $d--) {
     for ($s = 1; $s <= $d; $s++) {
          echo "<div style='height: 50px; width: 50px; background-color:salmon; display: inline-block; text-align: center; line-height: 50px; border: 2px black solid; margin:-1px;'>
          $s</div>";
     }
     echo "<br>";
}

?>