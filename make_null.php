<?php

// Make NA values NULL

$columns = array(
'id',
'Order',
'Family',
'Genus',
'Species',
'Fos',
'Ter',
'Aqu',
'Arb',
'Leaves',
'Flowers',
'Seeds',
'Fruits',
'Arthro',
'Vert',
'Diu',
'Noc',
'Crepu',
'Wet_warm',
'Wet_cold',
'Dry_warm',
'Dry_cold',
'Body_mass_g',
'Age_at_maturity_min_y',
'Age_at_maturity_max_y',
'Body_size_mm',
'Size_at_maturity_min_mm',
'Size_at_maturity_max_mm',
'Longevity_max_y',
'Litter_size_min_n',
'Litter_size_max_n',
'Reproductive_output_y',
'Offspring_size_min_mm',
'Offspring_size_max_mm',
'Dir',
'Lar',
'Viv',
'OBS',
);



foreach ($columns as $column)
{
	echo 'UPDATE traits SET `' . $column . '`=NULL WHERE `' . $column . '`="NA";' . "\n";
}

?>
