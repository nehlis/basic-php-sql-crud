<?php

use controllers\UserController;

require_once 'functions.php';

?>

<!doctype html>
<html lang="nl">
<?php require_once 'layouts/head.php'; ?>
<body>
<?php

$uc = new UserController();

$uc->delete(2);

?>

<?php require_once 'layouts/footer.php'; ?>
</body>
</html>