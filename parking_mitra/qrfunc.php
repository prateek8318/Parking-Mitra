<?php
class qrfunc
{
    private $conn;
    private $ordr = "ordr";
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function qrgen()
    {
        include "ap/phpqrcode/qrlib.php";
        $PNG_TEMP_DIR = 'ap/temp/';
        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);

        $fileName = $PNG_TEMP_DIR . 'test.png';

        if (isset($_POST["insert"])) {
            $codeString = $_POST['name'] . "\n";
            $codeString .= $_POST['mobile'] . "\n";
            $codeString .= $_POST['email'] . "\n";
            $codeString .= $_POST['address'] . "\n";
            $codeString .= $_POST['city'] . "\n";
            $codeString .= $_POST['state'] . "\n";
            $codeString .= $_POST['pincode'] . "\n";
            $fileName = $PNG_TEMP_DIR . md5($codeString) . '.png';
            $sql = "INSERT INTO $this->ordr (qrcode) VALUES (:qrcode)";
            $r = $this->conn->prepare($sql);
            $insertvisitor = $r->execute(array(':qrcode' => $fileName));
            QRcode::png($codeString, $fileName);
            // echo '<img src="' . $PNG_TEMP_DIR . basename($fileName) . '">';
        }
    }
}
?>