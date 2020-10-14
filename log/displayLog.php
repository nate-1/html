<html> 
<head>
</head>
<body>

<?php
    $path = "/home/nate/0.Trading_stock_market/logs/current_day/global/log.log";
    if(file_exists($path)) {
        $file = fopen($path, "r");
        $i = 0;
        if(!empty($_GET)) {
            $nbLine =  intval($_GET["line"]);
            while (($line = fgets($file)) !== false) {
                if($i>=$nbLine) {
                    echo "<span class=line id=i$i>$line</span>";
                    echo $i . " in there";
                }
                else {
                    echo $i;

                }
                $i++;
            }
        }
        else {
            while (($line = fgets($file)) !== false) {
                echo "<span class=line id=i$i>$line</span>";
                $i++;
            }
        }
    }
    else 
        die("No file yet");
?>
</body>
</html>