<?php
class crud
{
    private $conn;
    private $banner = "banner";
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    //***************Category*********************//
    function insert()
    {
        if (isset($_POST["insert"])) {
            $title = trim($_POST['name']);
            $description = trim($_POST['description']);
            // File upload handling
            $targetDir = "uploads/";
            $imageName = basename($_FILES["image"]["name"]);
            $targetFilePath = $targetDir . $imageName;
            $imageFileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Check if the image is valid
            $isValid = true;
            if (!empty($_FILES["image"]["tmp_name"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if ($check === false) {
                    $isValid = false;
                    echo "Invalid image file.";
                }
            }

            // Check if the file already exists
            if (file_exists($targetFilePath)) {
                $isValid = false;
                echo "File already exists.";
            }

            // Check file size (limit to 2MB)
            if ($_FILES["image"]["size"] > 2097152) {
                $isValid = false;
                echo "File size exceeds 2MB.";
            }

            // Allow certain image file formats
            $allowedTypes = array("jpg", "jpeg", "png", "gif");
            if (!in_array($imageFileType, $allowedTypes)) {
                $isValid = false;
                echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            }
            try {
                $dbservice = $this->conn->query("SELECT * FROM $this->banner WHERE name = '$title'");
                $getservice = $dbservice->fetch(PDO::FETCH_ASSOC);
                if (!empty($getservice)) {
                    echo "<div class='alert alert-danger' role='alert'>Notice <strong>" . $title . "</strong> already exist.</div>";
                } elseif($isValid) {
                    $sql = "INSERT INTO $this->banner (name, description, image) VALUES (:name, :description, :image)";
                    $r = $this->conn->prepare($sql);
                    $insertvisitor = $r->execute(array(':name' => $title, ':description' => $description, ':image' => $imageName));

                    if ($insertvisitor) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
                        echo "<div class='alert alert-success' role='alert'>Banner <strong>" . $title . "</strong> Added Successfully.</div>";
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
        $result = $this->conn->prepare("SELECT * FROM $this->banner ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) { ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo '<img src="uploads/' . $row["image"] . '" alt="Image" width="100px" height="100px">'; ?></td>
                <td>
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" title="edit_records" data-target="#editModal-<?php echo $row['id']; ?>"><i class="ti-pencil-alt">Edit</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" title="edit_records" data-target="#deleteModal-<?php echo $row['id']; ?>"><i class="ti-pencil-alt">Delete</button>
                </td>
            </tr>
            <div class="modal fade" id="editModal-<?php echo $row['id']; ?>" tabindex="<?php echo $row['id']; ?>" role="dialog" aria-labelledby="editModal-<?php echo $row['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="H2">Edit Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name : </label>
                                    <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Title" value="<?php echo $row['name']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description : </label>
                                    <input type="text" name="description" class="form-control" id="exampleInputDetails" placeholder="Details" value="<?php echo $row['description']; ?>" />
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-rounded btn-danger mr-2" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="deleteModal-<?php echo $row['id']; ?>" tabindex="<?php echo $row['id']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="H2">Are you sure want to delete this record?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <form role="form" method="post" class="form-horizontal" id="popup-validation">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="modal-body">
                                <button type="submit" class="btn btn-rounded btn-primary mb-3" name="delete">Yes</button>
                                <button class="btn btn-rounded btn-danger mb-3" data-dismiss="modal">No</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<?php
        }
    }

    function update()
    {
        if (isset($_POST["submit"])) {
            $id = trim($_POST['id']);
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            try {
                $sql = "UPDATE banner set name = :a, description = :b WHERE id  = '$id'";
                $q = $this->conn->prepare($sql);
                $insertservice = $q->execute(array(':a' => $name, ':b' => $description));
                if ($insertservice) {
                    echo "<div class='alert alert-success' role='alert'>Details <strong>" . $description . "</strong> Updated Successfully.</div>";
                } else {
                    echo "<div class='list-group-item list-group-item-danger'>Data not Successfully Inserted.</div>";
                }
                $db = null;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    function delete()
    {
        if (isset($_POST["delete"])) {

            $id = $_POST['id'];
            try {
                $dbdeletecompany = "DELETE FROM banner WHERE id = ?";
                $q = $this->conn->prepare($dbdeletecompany);
                $response = $q->execute(array($id));
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
?>