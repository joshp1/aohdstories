<!doctype html>
<html>
    <head>
        <title>
            Aohd stories and comics
        </title>
    </head>
    <script type="module" src="https://md-block.verou.me/md-block.js"></script>
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
<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != ".git" && $entry !="README.md" && $entry !="index.php" && $entry != ".gitignore" && $entry !="aohd4.org~" && $entry !="txt") {

            echo "<a href='$entry'>$entry</a>|\n";
        }
    }

    closedir($handle);
}?>
</div>
<md-block>
<?php
    $file = fopen ("README.md", 'r');

    // Outpu lines until EOF is reached
    while (! feof ($file)) {
        $line = fgets ($file);
        print $line;
    }

    fclose ($file);?>
</md-block>

<?php

$gitOut = shell_exec ('git log');
echo $gitOut + '/n</br />';?>

</body></html>