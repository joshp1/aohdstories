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
	echo nl2br(file_get_contents( "README.md" )); // get the contents, and echo it out.
?>
<br />
test
