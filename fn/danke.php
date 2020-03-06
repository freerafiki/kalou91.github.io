<?php
// PHP code goes here
mail('plmlcu91@gmail.com', $_POST['mailad'], $_POST['name']);
echo "Danke, du hast es gescahfft! Du kriegst eine Bestätigungsmail geschickt an " . $_POST["mailad"];
?> 