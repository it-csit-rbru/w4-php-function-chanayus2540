<?php
$url_array = array(
    array("http://stu2.rbru.ac.th/~s6015261011","termcs"),
    array("http://stu2.rbru.ac.th/~s6015261015","first"),
    array("http://stu2.rbru.ac.th/~s6015261005","dew"),
    array("http://stu2.rbru.ac.th/~s6015261003","deep"),
    array("http://stu2.rbru.ac.th/~s6015261003","bri")
);

function create_link($u,$t){
    return "<a href=\"$u\">$t</a>";
}
function create_table($t){
        echo '<table class="table-info">';
        echo '<thead class="#">';
        echo '<td>URL</td><td>Name</td>';
        echo '<thead>';
        echo '<tbody>';
    for($i=0;$i<sizeof($t);$i++){
        echo '<tr>';
        for($j=0;$j<sizeof($t[$i]);$j++){
            echo '<td>'.$t[$i][$j].'</td>';
        }
   echo '</tr>';
    }
    echo '</table>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
        $url = "http://stu2.rbru.ac.th/~s6015261011";
        $txt = "Click Here";
        echo '<a href="'.$url.'">'.$txt.'</a>';
        echo "<a href=\"$url\">$txt</a>";
    ?>

    <a href="<?php echo $url; ?>"><?php echo $txt;?></a>
    <?php
    echo create_link($url,$txt);
    echo $url_array[4][0]. " ".$url_array[4][1];
    ?>
    <ol>
    <?php
        for($i=0;$i<sizeof($url_array);$i++){
    ?>
        <li><?php echo create_link($url_array[$i][0],$url_array[$i][1]); ?></li>
    <?php
       }
       create_table($url_array);
    ?>
    </OL>
</body>
</html>