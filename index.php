<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != ".git" && $entry !="README.md" && $entry !="index.php" && $entry != ".gitignore" && $entry !="aohd4.org~") {

            echo "<a href='$entry'>$entry</a>\n";
        }
    }

    closedir($handle);
}?>
<br />
<?php
    $file = fopen ("tempTest", 'r');

    // Outpu lines until EOF is reached
    while (! feof ($file)) {
        $line = fgets ($file);
        print "<pre>".$line."</pre>";
    }

    fclose ($file);?>

<br />

