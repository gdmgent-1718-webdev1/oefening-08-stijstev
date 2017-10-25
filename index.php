<?php
function fiftyShades () {
    for ($i = 0; $i < 50; $i++){
        $color = $i * 5;
        echo "<div style='background-color: rgb({$color} , {$color} , {$color}); width: 80px; height: 40px;'></div>" , PHP_EOL;
    }
}
fiftyShades();

