<?php
$url="https://www.modernhoney.com/wp-content/uploads/2019/12/One-Bowl-Chocolate-Chip-Cookie-Recipe-5-scaled.jpg";
$nbeRepetitions=4;
function repeterImage($url,$nbeRepetitions){
    for($j=0;$j<$nbeRepetitions;$j++) {
        echo"<img src='$url'>";
    }
}
repeterImage($url,$nbeRepetitions);
