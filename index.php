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
   
    
    // この下にプログラムを書きましょう。
    $re = $dbh->query("SELECT * FROM coffee");  // tb1のデータをSELECTします
    print '<div class="flex-container">';
    while($kekka = $re->fetch()) {
       
       print "<img src='https://mystyle.ucc.co.jp/magazine/wp-content/uploads/2019/08/2166_01.jpg' alt='あいうえお' width='300' height='300'>";
        print $kekka[0];
        print " ";
        print $kekka[1];
        print " ";
        print $kekka[2];
        print " ";
        print $kekka[3];
       
        
        print"<div class='box'>";
        print "</div>";
    }
    print "</div>";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
</body>
</html>