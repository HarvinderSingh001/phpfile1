<!-- <?php  for($i=0;$i<5;$i++){?>
  helllo 
<?php }?> -->

<!-- 
<html>
<?php
$a = 1;
$b = 2;
if ($a === 1) {
    if ($b == 2) {
        ?><head></head><?php
    } else {
        ?><body></body><?php
    }
}
?> -->

<!-- : endcontrol statement -->


<?php $a = 10; if($a<100): ?>
  This conditional block is executed

  <?php else: ?>
      otherwise this will be executed
      <?php endif; ?>