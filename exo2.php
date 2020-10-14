<html>
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <style>
        th {
        background-color: #d4812e; /*rgb(212,129,46);*/
        }
        td,
        th {
        border: 1px solid black;
        height: 30px;
        width: 30px;
        }
        table {
        border-spacing: 0;
        border-collapse: collapse;
        table-layout: fixed;
        text-align: center;
        }
        strong {
        font-size: larger;
        }
        .pair {
        background: #e9d8c4; /*rgb(233,216,196);*/
        }
        .impair {
        background: #baa691; /*rgb(186,166,145);*/
        }
    </style>
</head>
<body>
<table>
<tr><th></th>
<?php 
$array = [];
for ($i =2; $i < 11; $i++) { 
    $temp = [];
    for ($n=2; $n < 11; $n++) { 
        array_push($temp, $i*$n);
    }
    array_push($array, $temp);
    echo"<th>$i</th>";
}
echo '</tr>';
$i = 2;
foreach ($array as $arrayOfTheArray) {
    echo $i%2 == 0 ? "<tr class=pair><th>$i</th>" : "<tr class=impair><th>$i</th>";
    $n = 2;
    foreach ($arrayOfTheArray as $value) {
        echo $n == $i ? "<td><strong>$value</strong></td>" : "<td>$value</td>";
        $n++;
    }
    $i++;
    echo '</tr>';
}

