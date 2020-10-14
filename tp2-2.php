<html>
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
    <?php 
    $month = [1=>"Janvier", 2=>"Fevrier", =>3"Mars", =>4"Avril", =>5"Mai", "Juin"=>6, "Juillet"=>7, "Août"=>8, "Septembre"=>9, "Octobre"=>10, "Novemebre"=>11, "Decembre"=>12];
    $outputMonth = "Mois : ";
    echo $month["Janvier"];
    for ($i=1; $i < 13; $i++) { 
        $outputMonth += $month[$i];
    }
    echo $outputMonth;
    ?>