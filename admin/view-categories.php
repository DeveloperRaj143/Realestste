<?php

// include "db_connection.php";
// $quiry="SELECT * FROM `categories`";
// $result=mysqli_query($conn,$quiry);
// $sno=1;
    
  

?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- DataTables CSS CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
    <!-- DataTables JS CDN -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <?php include 'links.php' ?>
    <?php include 'function.php' ?>

</head>

<body class="crm_body_bg">


    <?php include 'sidebar.php' ?>
   

        <section class="main_content dashboard_part large_header_bg">

        <?php include 'header.php' ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                           
                            <div class="white_card_body ">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header mt-3">
                                        <h4>Category List</h4>
                                        <!-- <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form active="#">
                                                        <div class="search_field dataTables_filter" id="example_filter">
                                                            <input type="search"   aria-controls="example" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="add_button ms-2">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                                    class="btn_1">Add New</a>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="QA_table mb_30">
                                       
                                       
                                     
                                        <table class="table  display" id="example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL No</th>
                                                    <th scope="col">Category Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">title</th>
                                                    <th scope="col">Description </th>
                                                    <th scope="col">Key</th>
                                                    <th scope="col">Slug URL</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">date</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php echo GetCategories();?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
            <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
            <?php include 'footer.php' ?>