<?php // destruct.php

require_once 'Paragraph.php';

$paragraph = new Paragraph('I ❤️ GaryClarkeTech');

unset($paragraph);

?>

<!doctype html>
<html lang="en">

<body>
<?php echo $paragraph; ?>
</body>
</html>