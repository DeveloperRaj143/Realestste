<?php
include 'db_connection.php';
error_reporting(0);

// Fetch banner data if `id` is passed
$id = $_GET['id'];
$query = "SELECT * FROM `banner` WHERE id = $id";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_array($result);

// Handle form submission to update banner
if (isset($_POST['editadd_banner'])) {
    // Collect input data
    $id = intval($_POST['id']); // Use the 'id' sent in the form (hidden field)
    $caption1 = mysqli_real_escape_string($conn, $_POST['editcaption1']);
    $caption2 = mysqli_real_escape_string($conn, $_POST['editcaption2']);
    $para = mysqli_real_escape_string($conn, $_POST['editpara']);

    // File upload configuration
    $ban_img = $_FILES['editban_img']['name'];
    $temp = $_FILES['editban_img']['tmp_name'];

    // Define the file upload directory (absolute server path)
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/realestate/admin/assets/img/banner/";
    $uploadUrl = "http://localhost/realestate/admin/assets/img/banner/"; // Base URL for storing in the database

    // Initialize file URL for the database
    $fileUrl = null;

    // Validate file upload
    if (isset($_FILES['editban_img']) && $_FILES['editban_img']['error'] === 0) {
        // Validate file type (allow only image files)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = mime_content_type($temp); // Check MIME type

        if (in_array($fileType, $allowedTypes)) {
            // Generate a unique file name to avoid overwriting
            $uniqueFileName = time() . "_" . basename($ban_img);
            $targetFile = $uploadDir . $uniqueFileName; // Full server path
            $fileUrl = $uploadUrl . $uniqueFileName;    // File URL for database

            // Move the uploaded file to the target directory
            if (!move_uploaded_file($temp, $targetFile)) {
                die("Failed to upload the file.");
            }
        } else {
            die("Invalid file type. Only JPEG, PNG, and GIF files are allowed.");
        }
    }

    // Construct the SQL query
    $query = "UPDATE banner SET caption1 = ?, caption2 = ?, para = ?";
    $params = [$caption1, $caption2, $para];

    // If a new image was uploaded, update the `bnimg` field
    if ($fileUrl) {
        $query .= ", bnimg = ?";
        $params[] = $fileUrl;
    }

    $query .= " WHERE id = ?";
    $params[] = $id;

    // Prepare and execute the statement
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, str_repeat('s', count($params) - 1) . 'i', ...$params);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script type='text/javascript'>alert('Data updated successfully.!')</script>";
        header("Location: view_banner.php");
        exit();
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    <?php include 'links.php' ?>
</head>
<body class="crm_body_bg">

    <?php include 'sidebar.php' ?>

    <section class="main_content dashboard_part large_header_bg">
        <?php include 'header.php' ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Edit Banner</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="card-body">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <!-- Hidden ID Field -->
                                        <input type="hidden" name="id" value="<?php echo $res['id']; ?>">

                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Caption1</label>
                                                <input type="text" class="form-control" value="<?php echo $res['caption1']; ?>" name="editcaption1" id="inputEmail4" placeholder="Category name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Caption2</label>
                                                <input type="text" class="form-control" value="<?php echo $res['caption2']; ?>" name="editcaption2" id="inputEmail4" placeholder="Category name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Paragraph</label>
                                                <input type="text" class="form-control" value="<?php echo $res['para']; ?>" name="editpara" id="inputEmail4" placeholder="Category name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Banner Image</label>
                                                <input type="file" class="form-control" name="editban_img" id="inputEmail4" placeholder="Choose Banner Image">
                                                <br>
                                                <img src="<?php echo $res['bnimg']; ?>" alt="Current Banner" height="100" width="100">
                                            </div>
                                        </div>

                                        <button type="submit" name="editadd_banner" class="btn btn-primary">Update Banner</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php' ?>
    </section>
</body>
</html>
