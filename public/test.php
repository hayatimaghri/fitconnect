
<?php

require_once '../app/Repositories/AdherentRepository.php';

$repository = new AdherentRepository();

$adherents = $repository->findAll();

echo "<pre>";
print_r($adherents);
echo "</pre>";


?>