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
            background-color :black;width:232px;
            display:block;float:left;
           border-bottom :2px solid;border-left :2px solid;border-top :2px solid;
        }
        #hda a 
        {   color :white;text-decoration :none;
        }
        #hdb
        {border:2px solid;
            display:block;float: left;
        }
        #hdr {background :black;
            display :block;}
        }
        #hdr a
        {   color:white;

            text-decoration: none;}
    </style>
    <body><div id = 'hdr'>
        <a href = "../">Back</a></div>
        <div id = "hda">
<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry !="index.php" && $entry !="ideas") {

            echo "<a href='$entry'>$entry</a>|\n";
        }
    }

    closedir($handle);
}?>
</div><div id = "hdb">
<pre>
<?php
    $file = fopen ("ideas", 'r');

    // Outpu lines until EOF is reached
    while (! feof ($file)) {
        $line = fgets ($file);
        print $line;
    }

    fclose ($file);?>
</pre></div>


</body></html>