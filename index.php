<?php
include_once "header.php";
?>


<br>
<div class="row">
    <div class="col-lg-8">
        <h2>Where does it come from?</h2>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </div>
    <div class="col-lg-4" style="padding-top: 3.2rem;">
        <img style="width: 40%;" class="rounded" src="pic/woman1.jpg" alt="">
    </div>
</div>

<?php

$x = 15;
for ($i=0; $i < $x; $i++) { 
      echo "<a style='color:red;'>a változó aktuális értéke: ".$i."</a><br>";
}  
echo "<br>"." ez még bekerült!";
echo "<br>"." Vége a php kódnak!";

echo "<br>"." menu_keszites 2!";
echo "<br>"." menu_keszites folytatása 2!";

$z = 57;
$y = "elemek";
$valtozo01 = "elemecske_master";
$elem = array('alap', 'kalap', 'kabat', 'bicikli', 'motor');
$new = "nemtudom mi a franc ez, master";








echo "teszt kezdete";
$new_1 = 11;
if ($new_1 < 10) {
    echo "a megadott szám kissebb mint 10!";
}
elseif ($new_1> 10) {
    echo "a megadott szám nagyobb mint 10!";
}
else {
    echo "a megadott szám 10!";
}
echo "teszt folytatása";

?>

