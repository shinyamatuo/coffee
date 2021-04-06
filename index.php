<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h1>～コーヒー豆のおすすめ！～</h1>
    
        
        
    </form>
    <?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');


try { 

    $dbh = new PDO($dsn);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    // この下にプログラムを書きましょう。
    $re = $dbh->query("SELECT * FROM coffee");  // tb1のデータをSELECTします

    print '<div class="flex-container">';
    while($kekka = $re->fetch()) {

        print $kekka[0];
        print "<br>";
        
       
        print '<div style= "background-color:#7776BC;width:200px;">';
        print "</div>";
        print $kekka[1];
        print "　|　";
        print $kekka[4];
        print "　|　";
        print $kekka[5];
        print "<br>";
        print "<img src='$kekka[5]' alt='あいうえお' width='300' height='300'>";
        print "|";
        print $kekka[2];
        print "円";
        print "　";
        print "（ 評価 ）";
        print $kekka[3];
        print "<div class='box'>";
        print "</div>";
        print "<br>";
    }
    
    print "</div>";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
</body>
</html>