<?php
echo '<pre>';
foreach (glob('*') as $a=> $b){
	echo $b ."\n";
}

echo '</pre>';