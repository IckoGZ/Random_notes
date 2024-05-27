//This PHP tries to find a coincidence for a hash because juggling

<?php
function find_md4_match() {
    $prefix = "0e";
    for ($i = 0; $i < 1000000; $i++) {
        $candidate = $prefix . $i;
        if ($candidate == hash("md4", $candidate)) {
            return $candidate;
        }
    }
    return null; // No se encontró ninguna coincidencia
}

$matching_md4 = find_md4_match();

if ($matching_md4 !== null) {
    echo "Se encontró una coincidencia: " . $matching_md4 . PHP_EOL;
} else {
    echo "No se encontró ninguna coincidencia." . PHP_EOL;
}
?>
