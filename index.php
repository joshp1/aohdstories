<!doctype html>
<html>
    <head>
        <title>
            Aohd stories and comics
        </title>
    </head>
    <script type="module" src="https://md-block.verou.me/md-block.js"></script>
    <style language = "text/css">
        #hda {
            background color :grey;width:55;
            display:block;float:left;
        }
        #hdb
        {
            background-color:grey;
            display:block;float:left;width:210;
        }
        #hdr a
        {   color:white;

            text-decoration: none;
        }
    </style>
    <body>
        <div id = "hda">
<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != ".git" && $entry !="README.md" && $entry !="index.php" && $entry != ".gitignore" && $entry !="aohd4.org~" && $entry !="txt") {

            echo "<a href='$entry'>$entry</a>|\n";
        }
    }

    closedir($handle);
}?>
</div><div id = 'hdb'>
<md-block>
<?php
    $file = fopen ("README.md", 'r');

    // Outpu lines until EOF is reached
    while (! feof ($file)) {
        $line = fgets ($file);
        print $line;
    }

    fclose ($file);?>
</md-block></div>
</body></html>