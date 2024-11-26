<?php
include "db_connection.php";

if(isset($_POST['add-categories'])){
  $cat_id=mt_rand(11111,99999);
  $cat_name=$_POST['cat_name'];
  $meta_title=$_POST['meta_title'];
  $meta_key=$_POST['meta_key'];
  $meta_desc=$_POST['meta_desc'];
  $status=$_POST['status'];
  $slig_url= slug_url($cat_name);
  $date=date('M d, Y');
                              
 $quiry = "INSERT INTO `categories`( `cat_id`, `cat_name`, `cat_title`,`cat_key`, `cat_desc`, `status`,  `slug_url`, `date`)
                            VALUES (' $cat_id','$cat_name',' $meta_title',' $meta_key','$meta_desc','$status','$slig_url','$date')";
 $result=mysqli_query($conn,$quiry);
 if($result){
  ?>
  <script type='text/javascript'>
  alert('submitted successfully!')
  window.location.href="view-categories.php"
  </script>;
  
  
   <?php

 }
 else{
  echo "<script type='text/javascript'>alert('failed!')</script>";
 }
}



if(isset($_POST['add_sub-categories'])){
  $cat_id=mt_rand(11111,99999);
  $cat_name=$_POST['cat_name'];
  $meta_title=$_POST['meta_title'];
  $meta_key=$_POST['meta_key'];
  $meta_desc=$_POST['meta_desc'];
  $status=$_POST['status'];
  $slig_url= slug_url($cat_name);
  $date=date('M d, Y');
  $parent_id=$_POST['parent_id'];                          
 $quiry = "INSERT INTO `sub_categories`( `cat_id`,`parent_id`, `cat_name`, `cat_title`,`cat_key`, `cat_desc`, `status`,  `slug_url`, `date`)                              
                            VALUES (' $cat_id','$parent_id','$cat_name',' $meta_title',' $meta_key','$meta_desc','$status','$slig_url','$date')";
 $result=mysqli_query($conn,$quiry);
 if($result){
  ?>
  <script type='text/javascript'>
  alert('submitted successfully!')
  window.location.href="view_sub_categories.php";
  </script>;
  
  
   <?php

 }
 else{
  echo "<script type='text/javascript'>alert('failed!')</script>";
 }
}
function GetCategories(){
  include "db_connection.php";
  $query="SELECT * FROM `categories` ORDER BY id DESC";
  $result=mysqli_query($conn,$query);
$output = '';
  $sno=1;
 
  while($row=mysqli_fetch_array($result)){
   echo $output=" <tr>
    <td>".$sno++."</td>
    <td>".$row['cat_id']."</td>
    <td>".$row['cat_name']."</td>
    <td>".$row['cat_title']."</td>
    <td>".$row['cat_desc']."</td>
    <td>".$row['cat_key']."</td>
    <td>".$row['slug_url']."</td>
    <td>".$row['status']."</td>
    
    <td>".$row['date']."</td>
   
           </tr>";
  }
}
function GetSubCategories(){
  include "db_connection.php";
  $query="SELECT * FROM `sub_categories` ORDER BY id DESC";
  $result=mysqli_query($conn,$query);
$output = '';
  $sno=1;

 
  while($row=mysqli_fetch_array($result)){
    $parent_id= $row['parent_id'];
    $query2 = "SELECT cat_name FROM `categories` WHERE cat_id = $parent_id";
    $result2=mysqli_query($conn,$query2);
    $parent=mysqli_fetch_array($result2);
   
    
   echo " <tr>
    <td>".$sno++."</td>
    <td>".$row['cat_id']."</td>
    <td>" .$row['parent_id']."</td>
     <td>".ucwords($parent['cat_name'])."</td>
    <td>".ucwords($row['cat_name'])."</td>
    <td>".$row['cat_title']."</td>
    <td>".$row['cat_desc']."</td>
    <td>".$row['cat_key']."</td>
    <td>".$row['slug_url']."</td>
    <td>".$row['status']."</td>
    <td>".$row['date']."</td>
   
           </tr>";
  }
  
// return $output;
}

function GetCategories_Name(){
  include "db_connection.php";
  $query="SELECT * FROM `categories`";
  $result=mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($result)) { 
  //  echo" <option value=".$row['cat_id'].">echo ucwords(.$row['cat_name'])</option>";
   echo "<option value='".$row['cat_id']."'>".ucwords($row['cat_name'])."</option>";
     }
}


 if(isset($_POST['cat_id'])){
  $p_id=$_POST['cat_id'];
  $query2 = "SELECT * FROM `sub_categories` WHERE parent_id = $p_id";
  $result=mysqli_query($conn,$query2);
  ?><option selected>Choose...</option><?php
  while ($row = mysqli_fetch_assoc($result)) { 
   
     echo "<option value=".$row['cat_id'].">".ucwords($row['cat_name'])."</option>";
       }
 }

 if(isset($_POST['add_product'])){
  $pro_id=mt_rand(11111,99999);
  $Product_Name =( $_POST['Product_Name']);
  $parent_id=$_POST['parent_id'];
  $Product_Sub_Category=$_POST['Product_Sub_Category'];
  $pro_desc = mysqli_real_escape_string($conn, $_POST['pro_desc']);
  $MRP=$_POST['MRP'];
  $Seling_Price=$_POST['Seling_Price'];
  $Stock=$_POST['Stock'];

  // $Product_image=$_POST['Product_image'];
 $filename=$_FILES['Product_image']['name'];
 $tempname=$_FILES['Product_image']['tmp_name'];
 $destinaton='assets/img/uplode/'.$filename;
  $images=move_uploaded_file($tempname,$destinaton);

  $meta_title = mysqli_real_escape_string($conn, $_POST['meta_title']);
  $meta_key = mysqli_real_escape_string($conn, $_POST['meta_key']);
  $meta_desc = mysqli_real_escape_string($conn, $_POST['meta_desc']);
  $date=date('M d, Y');   
  $status=$_POST['status'];
  $slug_url= slug_url($Product_Name);
  
  $query = "INSERT INTO `product` (`pro_id`, `pro_name`, `pro_cat`, `pro_sub_cat`, `pro_desc`, `mrp`, `selling_price`, `stocks`, `pro_img`, `meta_title`, `meta_key`, `meta_desc`, `date`, `status`, `slug_url`) 
  VALUES ('$pro_id', '$Product_Name', '$parent_id', '$Product_Sub_Category', '$pro_desc', '$MRP', '$Seling_Price', '$Stock', '$filename', '$meta_title', '$meta_key', '$meta_desc', '$date', '$status', '$slug_url')";

$result = mysqli_query($conn, $query);
 if($result){
  ?>
  <script type='text/javascript'>
  alert('submitted successfully!')

  </script>;
   <?php
 }
 else{
  echo "<script type='text/javascript'>alert('failed!')</script>";
 }
}

function slug_url($string){
  $slug=preg_replace('/[^a-zA-Z0-9 -]/','',$string);
  $slug=str_replace(' ','-',$slug);
  $slug=strtolower($slug);
  return $slug;
}


// banner add
// if(isset($_POST['add_banner'])){
//   $socket =  "http://localhost/realestate/admin/";
//   $caption1 = $_POST['caption1'];
//   $caption2 = $_POST['caption2'];
//   $para = $_POST['para'];
//   // $ban_img = $_POST['ban_img'];
//   $ban_img = $_FILES['ban_img']['name'];
//   $temp = $_FILES['ban_img']['tmp_name'];
//   $folder = $socket."assets/img/banner/".$ban_img;
//   move_uploaded_file($temp, $folder);

//   $query="INSERT INTO `banner`( `bnimg`, `caption1`, `caption2`, `para`) VALUES ('$folder','$caption1','$caption2','$para')";
//   $result = mysqli_query($conn,$query);

//   if($result){
//     echo "data inserted";
//     header("Location: banner.php");
//     exit();
//   }
//   else{
//     echo "data not inserted";
//   }


// }


if (isset($_POST['add_banner'])) {
    // Base URL for accessing files
    $socket = "http://localhost/realestate/admin/";

    // Collect input data
    $caption1 = mysqli_real_escape_string($conn, $_POST['caption1']);
    $caption2 = mysqli_real_escape_string($conn, $_POST['caption2']);
    $para = mysqli_real_escape_string($conn, $_POST['para']);

    // File upload configuration
    $ban_img = $_FILES['ban_img']['name'];
    $temp = $_FILES['ban_img']['tmp_name'];

    // Define the file upload directory (absolute server path)
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/realestate/admin/assets/img/banner/";
    $uploadUrl = $socket . "assets/img/banner/"; // Base URL for storing in the database

    // Validate file upload
    if (isset($_FILES['ban_img']) && $_FILES['ban_img']['error'] === 0) {
        // Validate file type (allow only image files)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = mime_content_type($temp); // Check MIME type

        if (in_array($fileType, $allowedTypes)) {
            // Generate a unique file name to avoid overwriting
            $uniqueFileName = time() . "_" . basename($ban_img);
            $targetFile = $uploadDir . $uniqueFileName; // Full server path
            $fileUrl = $uploadUrl . $uniqueFileName;    // File URL for database

            // Move the uploaded file to the target directory
            if (move_uploaded_file($temp, $targetFile)) {
                // Insert data into the database
                $query = "INSERT INTO `banner` (`bnimg`, `caption1`, `caption2`, `para`) VALUES ('$fileUrl', '$caption1', '$caption2', '$para')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "Data inserted successfully.";
                    header("Location: banner.php");
                    exit();
                } else {
                    echo "Error inserting data: " . mysqli_error($conn);
                }
            } else {
                echo "Failed to upload the file.";
            }
        } else {
            echo "Invalid file type. Only JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "No file uploaded or an error occurred during file upload.";
    }
}




// function getBanner(){
//   include "db_connection.php";
//   $query="SELECT * FROM `banner` ORDER BY id DESC";
//   $result=mysqli_query($conn,$query);
// $output = '';
//   $sno=1;
 
//   while($row=mysqli_fetch_array($result)){
//    echo $output=" <tr>
//     <td>".$sno++."</td>
//     <td>".$row['id']."</td>
//     <td>".$row['caption1']."</td>
//     <td>".$row['caption2']."</td>
//     <td>".$row['para']."</td>
//     <td>".$row['bnimg']."</td>
//     <td>
//     <img src='" . $row['bnimg'] . "' alt='Banner Image' height='50px' width='50px'>
// </td>
   
   
//            </tr>";
//   }
// }

function getBanner() {
  // Include the database connection
  include "db_connection.php";

  // Query to fetch all banners
  $query = "SELECT * FROM `banner` ORDER BY id DESC";
  $result = mysqli_query($conn, $query);

  // Initialize output variable
  $output = '';
  $sno = 1;

  // Check if the query returned any rows
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $output .= "<tr>
              <td>" . $sno++ . "</td>
              <td>" . $row['id'] . "</td>
              <td>" . htmlspecialchars($row['caption1'], ENT_QUOTES, 'UTF-8') . "</td>
              <td>" . htmlspecialchars($row['caption2'], ENT_QUOTES, 'UTF-8') . "</td>
              <td>" . htmlspecialchars($row['para'], ENT_QUOTES, 'UTF-8') . "</td>
              <td>
                  <img src='" . htmlspecialchars($row['bnimg'], ENT_QUOTES, 'UTF-8') . "' alt='Banner Image' height='50' width='50'>
              </td>
             
              <td>
                  <a href='edit.php?id=" . $row['id'] . "' class='btn btn-sm btn-success'><i class='fas fa-edit'></i></a>
                  <a href='delete.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure you want to delete this item?\");'><i class='fas fa-trash-alt'></i></a>
              </td>
          </tr>";
      }
  } else {
      $output = "<tr><td colspan='6'>No banners found.</td></tr>";
  }

  // Return the generated output
  return $output;
}


function getBannerEdit(){
  
}



// if (isset($_POST['add_banner'])) {
 
//   $caption1 = mysqli_real_escape_string($conn, $_POST['caption1']);
//   $caption2 = mysqli_real_escape_string($conn, $_POST['caption2']);
//   $para = mysqli_real_escape_string($conn, $_POST['para']);

//   // File upload handling
//   if (isset($_FILES['ban_img']) && $_FILES['ban_img']['error'] === UPLOAD_ERR_OK) {
//       $ban_img = $_FILES['ban_img']['name'];
//       $temp = $_FILES['ban_img']['tmp_name'];

//       // Set a valid folder for uploaded files
//       $upload_dir = "./assets/img/banner/";
//       if (!is_dir($upload_dir)) {
//           mkdir($upload_dir, 0777, true); // Create directory if not exists
//       }

//       // Ensure unique file name
//       $file_ext = pathinfo($ban_img, PATHINFO_EXTENSION);
//       $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
//       if (in_array(strtolower($file_ext), $allowed_exts)) {
//           $unique_filename = uniqid() . '.' . $file_ext;
//           $folder = $upload_dir . $unique_filename;

//           // Move uploaded file to target folder
//           if (move_uploaded_file($temp, $folder)) {
//               // SQL query
//               $query = "INSERT INTO `banner` (`bnimg`, `caption1`, `caption2`, `para`) 
//                         VALUES ('$folder', '$caption1', '$caption2', '$para')";
//               $result = mysqli_query($conn, $query);

//               if ($result) {
//                   echo "Data inserted successfully.";
//                   header("Location: banner.php");
//                 exit();
//               } else {
//                   echo "Error: " . mysqli_error($con);
//               }
//           } else {
//               echo "Failed to move uploaded file.";
//           }
//       } else {
//           echo "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
//       }
//   } else {
//       echo "File upload error.";
//   }


  
// }






?>