<?php 
 $business = [
    'Name' => "JimtrioTech",
    'founder' => 'Jimmy and Freedom',
    'year' => '2026',
    'location' => 'Donholm , Nairobi',
 ];
  $businessnature = [
    'transpotation' => 'public transport',
     'sacco company' => [
        'kinatwa sacco',
         'makos sacco',
         'BenJo Sacco'
     ]
    
 ];
 foreach ($businessnature as $key => $value) {
    if (is_array($value)) {
        echo "<h2>$key:</h2>";
        echo "<ul>";
        foreach ($value as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>$key: $value</p>";
    }
    }
    require 'index.view.php';


?>