<?php
class register
{
    private $conn;
    private $user_details = "user_details";
    private $admin = "admin";
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
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            try {
                $dbservice = $this->conn->query("SELECT * FROM $this->user_details WHERE name = '$name'");
                $getservice = $dbservice->fetch(PDO::FETCH_ASSOC);
                if (!empty($getservice)) {
                    echo "<div class='alert alert-danger' role='alert'>Note :- User <strong>" . $name . "</strong> already exist.</div>";
                } else {
                    $sql = "INSERT INTO $this->user_details (name, email, password) VALUES (:name, :email, :password)";
                    $r = $this->conn->prepare($sql);
                    $insertvisitor = $r->execute(array(':name' => $name, ':email' => $email, ':password' => $password));

                    if ($insertvisitor) {
                        echo "<div class='alert alert-success' role='alert'>Account created Successfully.</div>";
                    } else {
                        echo "<div class='list-group-item list-group-item-danger'>Data not successfully Inserted.</div>";
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    function read()
    {
        $result = $this->conn->prepare("SELECT * FROM $this->user_details ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) { ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>

<?php
        }
    }
    function login()
    {
        if (isset($_POST['submit'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            try {
                $dbservice = $this->conn->query("SELECT * FROM $this->user_details WHERE email = '$email' AND password='$password'");
                $getservice = $dbservice->fetch(PDO::FETCH_ASSOC);
                if (empty($getservice)) {
                    echo "<div class='alert alert-danger' role='alert'>User not exist or Invalid Credentials.</div>";
                } else {
                    session_start();
                    $_SESSION['email'] = $getservice['email'];
                    header("location: index6.php");
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    function admininsert()
    {
        if (isset($_POST["insert"])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            try {
                $dbservice = $this->conn->query("SELECT * FROM $this->admin WHERE name = '$name'");
                $getservice = $dbservice->fetch(PDO::FETCH_ASSOC);
                if (!empty($getservice)) {
                    echo "<div class='alert alert-danger' role='alert'>Note :- User <strong>" . $name . "</strong> already exist.</div>";
                } else {
                    $sql = "INSERT INTO $this->admin (name, email, password) VALUES (:name, :email, :password)";
                    $r = $this->conn->prepare($sql);
                    $insertvisitor = $r->execute(array(':name' => $name, ':email' => $email, ':password' => $password));

                    if ($insertvisitor) {
                        echo "<div class='alert alert-success' role='alert'>Account created Successfully.</div>";
                    } else {
                        echo "<div class='list-group-item list-group-item-danger'>Data not successfully Inserted.</div>";
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    function adminlogin()
    {
        if (isset($_POST['submit'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            try {
                $dbservice = $this->conn->query("SELECT * FROM $this->admin WHERE email = '$email' AND password='$password'");
                $getservice = $dbservice->fetch(PDO::FETCH_ASSOC);
                if (empty($getservice)) {
                    echo "<div class='alert alert-danger' role='alert'>Note :- User not exist.</div>";
                } else {
                    session_start();
                    $_SESSION['email'] = $getservice['email'];
                    header("location: ap/index.php");
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
?>