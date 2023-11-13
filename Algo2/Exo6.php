<?php
$elements=array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);
function alimenterListederoulante($elements) {
  echo"<select>";
        foreach($elements as $denomination){
            echo "<option> $denomination </option>";
        }
  echo"</select>";
};