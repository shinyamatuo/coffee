<!DOCTYPE html>
<html>
<head>
    <style>
     .flex-container{
        background-color: peru; 
        display: flex;
        flex-wrap: wrap;
    }

    .box {
            
            margin: 25px;
            padding: 25px;
            border: 5px solid peru;
            }
    
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h1>～コーヒー豆のおすすめ！～</h1>
<?php 

header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    // この下にプログラムを書きましょう。
    $re = $dbh->query("SELECT * FROM coffee");  // tb1のデータをSELECTします

   
    while($kekka = $re->fetch()) {
        print "<div class='flex-container'>";
        print $kekka[0];
        print "<br>";
        
        
        print "<div class='box' border= '5px solid blak'>";
        print "<a href='$kekka[6]'><img src='$kekka[5]' alt='あいうえお' width='400' height='400'></a>";
        print "</div>";

        print "<div class='box' >";
        print "<br>";
        print " ";
        print "<br>";
        print " ";
        print "<br>";
        print $kekka[1];
        print "<br>";
        print " ";
        print "<br>";
        print " ";
        print "<br>";
        print "（ 評価 ）$kekka[3]";
        print "<br>";
        print " ";
        print "<br>";
        print " $kekka[2]";
        print " 円";
        print "<br>";
        print " ";
        print "<br>";
        print " ";
        print "<br>";
        print " ";
        print "<br>";
        print " ";
        print "<br>";
        print $kekka[4];
        print "<br>";
        print " ";
        print "<br>";
        print "</div>";
    }
    
    print "</div>";

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
        
        
 
   




</body>
</html>