// <?php
// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 15 === 0) {
//         echo "FuzzBuzz". PHP_EOL;
//     }elseif ($i%3===0){
//         echo "Fuzz" . PHP_EOL;
//     }elseif ($i%5===0){
//         echo "Buzz" . PHP_EOL;
//     }else {
//         echo $i . PHP_EOL;
//     }
// }

//   ?>

<?php
 $array_sam = array();
 
for ($i = 1; $i <= 100; $i++) {
        array_push($array_sam,$i);
}
echo $array_sam;
?>



