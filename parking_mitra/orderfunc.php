<?php
class order
{
    private $conn;
    private $ordr = "ordr";
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    //***************Category*********************//
    function insert()
    {
        if (isset($_POST["insert"])) {
            $name = trim($_POST['name']);
            $mobile = trim($_POST['mobile']);
            $email = trim($_POST['email']);
            $address = trim($_POST['address']);
            $city = trim($_POST['city']);
            $state = trim($_POST['state']);
            $pincode = trim($_POST['pincode']);
            $quantity = trim($_POST['quantity']);
            try {
                $dbservice = $this->conn->query("SELECT * FROM $this->ordr WHERE name = '$name'");
                $getservice = $dbservice->fetch(PDO::FETCH_ASSOC);
                if (!empty($getservice)) {
                    echo "<div class='alert alert-danger' role='alert'>Note :- User <strong>" . $name . "</strong> already exist.</div>";
                } else {
                    $sql = "INSERT INTO $this->ordr (name, mobile, email, address, city, state, pincode, quantity) VALUES (:name, :mobile, :email, :address, :city, :state, :pincode, :quantity)";
                    $r = $this->conn->prepare($sql);
                    $insertvisitor = $r->execute(array(':name' => $name, ':mobile' => $mobile, ':email' => $email, ':address' => $address, ':city' => $city, ':state' => $state, ':pincode' => $pincode, ':quantity' => $quantity,));

                    if ($insertvisitor) {
                        echo "<div class='alert alert-success' role='alert'>Order Placed Successfully.</div>";
                    } else {
                        echo "<div class='list-group-item list-group-item-danger'>Order Not Placed.</div>";
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    function read()
    {
        $result = $this->conn->prepare("SELECT * FROM $this->ordr ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) { ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['pincode']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
            </tr>

<?php
        }
    } 
}
?>