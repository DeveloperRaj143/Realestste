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
                                 <h3 class="m-0">Add Banner</h3>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body">
                           <div class="card-body">
                              <form action="function.php" method="post" enctype="multipart/form-data">
                                 <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Caption1</label>
                                       <input type="text" class="form-control" name="caption1" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Caption2</label>
                                       <input type="text" class="form-control" name="caption2" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Paragrap</label>
                                       <input type="text" class="form-control" name="para" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Banner Images</label>
                                       <input type="file" class="form-control" name="ban_img" id="inputEmail4" placeholder="Category name">
                                    </div>
                                   
                                 </div>                              
                                 <button type="submit" name="add_banner" class="btn btn-primary">Add Banners</button>
                              </form>
                           </div>
                        </div>
                     </div>
                    </div>
                </div>
                </div>
            </div>

            <?php include 'footer.php' ?>