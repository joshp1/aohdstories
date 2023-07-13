<!doctype html>
<html>
    <head>
        <title>
            Aohd stories and comics
        </title>
    </head>
    <style language = "text/css">
        #hdr 
        {
            background-color:grey;
        }
        #hdr a
        {   color:white;

            text-decoration: none;
        }
    </style>
    <body>
        <div id = "hdr">
            <md-block>
<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != ".git" && $entry !="README.md" && $entry !="index.php" && $entry != ".gitignore" && $entry !="aohd4.org~") {

            echo "<a href='$entry'>$entry</a>\n";
        }
    }

    closedir($handle);
}?></md-block>
</div>
<?php
    $file = fopen ("README.md", 'r');

    // Outpu lines until EOF is reached
    while (! feof ($file)) {
        $line = fgets ($file);
        print "<pre>".$line."</pre>";
    }

    fclose ($file);?>

<br />

</body></html>