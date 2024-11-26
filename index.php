<?php include './includes/links.php'?>
<?php include './includes/header.php'?>
<?php include './includes/db_connection.php'?>
<?php
   include './includes/db_connection.php';
   $sql = "SELECT * FROM banner";
   $query = mysqli_query($conn, $sql);
   
  
       // Retrieve banner image and captions
      $bannerImage = !empty($res['bnimg']) ? $res['bnimg'] : 'images/default-banner.jpg'; 
       $caption1 = htmlspecialchars($res['caption1']);
      $caption2 = htmlspecialchars($res['caption2']);
       $para = htmlspecialchars($res['para']);
    
   ?>
<style>
   /*loader css*/
   .preloader {
   position: fixed;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   /*z-index: 101;*/
   background: #313131;
   display: flex;flex-flow: column;
   justify-content: center;
   align-items: center;
   flex-flow: column;
   }
   .preloader__text {
   display: flex;
   flex-flow: column;
   justify-content: center;
   align-items: center;
   }
   .preloader__text svg {
   fill: var(--primaryColor);
   fill-opacity: 0;
   stroke: var(--primaryColor);
   stroke-width: 1px;
   stroke-dasharray: 6570;
   stroke-dashoffset: 6570;
   height: 50vh;
   }
   .preloader img {
   opacity: 0;
   width: auto;
   transform: scale(.75);
   position: absolute;
   }
</style>
<style>
   /* Modal container */
   .modal {
   display: none; /* Hidden by default */
   position: fixed; 
   z-index: 105; 
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
   overflow: auto; /* Enable scrolling for small screens */
   }
   /* Modal content */
   .modal-content {
   background-color: white;
   margin: 5% auto;
   padding: 20px;
   border: 1px solid #888;
   width: 80%;
   max-width: 900px; /* Ensure maximum width for larger screens */
   border-radius: 8px;
   text-align: center;
   box-shadow: 0px 4px 16px rgba(0,0,0,0.2);
   }
   /* Modal image */
   .modal-image {
   width: 100%; /* Make the image responsive */
   height: auto; /* Maintain the aspect ratio */
   border-radius: 8px;
   margin-bottom: 20px;
   }
   /* Close button */
   .close {
   color: #aaa;
   float: right;
   font-size: 28px;
   font-weight: bold;
   cursor: pointer;
   }
   .close:hover,
   .close:focus {
   color: black;
   text-decoration: none;
   }
   /* Mobile responsiveness */
   @media only screen and (max-width: 600px) {
   .modal-content {
   width: 95%; /* Reduce the width for small screens */
   padding: 10px;
   }
   .modal-image {
   border-radius: 5px; /* Adjust border radius for small screens */
   }
   h2 {
   font-size: 1.5em; /* Reduce the heading size */
   }
   p {
   font-size: 1em; /* Adjust the paragraph font size */
   }
   }
</style>
<!-- Contact Us Modal -->
<div class="m-modal" id="contactModal">
   <div class="m-modal__container">
      <span class="m-modal__close">
         <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.66116 27.3388L27.3388 9.66117" stroke="black" stroke-linecap="round"/>
            <path d="M9.66116 9.66116L27.3388 27.3388" stroke="black" stroke-linecap="round"/>
         </svg>
      </span>
      <div class="">
         <h2>Consent Form</h2>
      </div>
      <nav class="nav-tab">
         <a href="javascript:void(0);" data-tab="one" class="active">Sale</a>
         <a href="javascript:void(0);" data-tab="two">Purchase</a>
         <a href="javascript:void(0);" data-tab="three">Rent/Lease</a>
         <a href="javascript:void(0);" data-tab="four">Tenant</a>
      </nav>
      <div class="tabContainer">
         <div id="one" class="Tabcondent active">
            <form enctype="multipart/form-data" id="saleAdd" name="saleAdd">
               <div class="m-form">
                  <div class="m-form__input">
                     <input type="text" placeholder="Name of the owner" name="sUserName" id="sUserName" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Mobile No." name="sUserMob" id="sUserMob" maxlength="13" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="email" placeholder="Email ID" name="sUserEmail" id="sUserEmail" required="required">
                  </div>
                  <div class="m-form__input">
                     <textarea placeholder="Property Details (Name/Address)" name="sUserPropDetail" id="sUserPropDetail"></textarea>
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Location" name="sUserPropLoc" id="sUserPropLoc">
                  </div>
                  <div class="m-form__input">
                     <select name="sUserPropType" id="sUserPropType">
                        <option value="Not_Choosen">Type of Property</option>
                        <option value="1Bhk">1Bhk</option>
                        <option value="2Bhk">2Bhk</option>
                        <option value="3Bhk">3Bhk</option>
                        <option value="4Bhk">4Bhk</option>
                        <option value="5Bhk">5Bhk</option>
                        <option value="Duplex">Duplex</option>
                     </select>
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Expected Price" name="sExpPrice" id="sExpPrice">
                  </div>
                  <label class="m-input__check">NOTE : 2% OF SALES CONSIDERATION</label>
                  <div class="btn-submit">
                     <button class="btn-submit" name="btnSaleSubmit" id="btnSaleSubmit" type="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
         <div id="two" class="Tabcondent">
            <form role="form" enctype="multipart/form-data" id="purchaseAdd" name="purchaseAdd">
               <div class="m-form">
                  <div class="m-form__input">
                     <input type="text" placeholder="Name of the buyer" name="pBuyerName" id="pBuyerName" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Mobile no" name="pUserMob" id="pUserMob" maxlength="13" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="email" placeholder="Email id" name="pUserEmail" id="pUserEmail" required="required">
                  </div>
                  <div class="m-form__input">
                     <textarea placeholder="Property Details(Name/Address)" name="pUserPropDetail" id="pUserPropDetail"></textarea>
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Property Area" name="pUserPropArea" id="pUserPropArea">
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Location" name="pUserPropLoc" id="pUserPropLoc">
                  </div>
                  <div class="m-form__input">
                     <select name="pUserPropType" id="pUserPropType">
                        <option value="Not_Choosen">Type of Property</option>
                        <option value="1Bhk">1Bhk</option>
                        <option value="2Bhk">2Bhk</option>
                        <option value="3Bhk">3Bhk</option>
                        <option value="4Bhk">4Bhk</option>
                        <option value="5Bhk">5Bhk</option>
                        <option value="Duplex">Duplex</option>
                     </select>
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Price" name="pUserPropPrice" id="pUserPropPrice">
                  </div>
                  <label class="m-input__check">NOTE: 1% OF SALES CONSIDERATION</label>
                  <div class="btn-submit">
                     <button class="btn-submit" name="btnPurchesSubmit" id="btnPurchesSubmit" type="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
         <div id="three" class="Tabcondent">
            <form role="form" enctype="multipart/form-data" id="rentAdd" name="rentAdd">
               <div class="m-form">
                  <div class="m-form__input">
                     <input type="text" placeholder="Landlord name/House owner name" name="rLandLord" id="rLandLord" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Mobile no" name="rUserMob" id="rUserMob" maxlength="13" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="email" placeholder="Email id" name="rUserEmail" id="rUserEmail" required="required">
                  </div>
                  <div class="m-form__input">
                     <textarea placeholder="Property Details(Name/Address)" name="rUserPropDetail" id="rUserPropDetail"></textarea>
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Location" name="rUserPropLoc" id="rUserPropLoc">
                  </div>
                  <div class="m-form__input">
                     <select name="rUserPropType" id="rUserPropType">
                        <option value="Not_Choosen">Type of Property</option>
                        <option value="1Bhk">1Bhk</option>
                        <option value="2Bhk">2Bhk</option>
                        <option value="3Bhk">3Bhk</option>
                        <option value="4Bhk">4Bhk</option>
                        <option value="5Bhk">5Bhk</option>
                        <option value="Duplex">Duplex</option>
                     </select>
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Price" name="rUserPropPrice" id="rUserPropPrice">
                  </div>
                  <label class="m-input__check">NOTE: 1 MONTH RENT FINALISED TO BE CHARGED</label>
                  <div class="btn-submit">
                     <button class="btn-submit" name="btnRentSubmit" id="btnRentSubmit" type="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
         <div id="four" class="Tabcondent">
            <form role="form" enctype="multipart/form-data" id="tenantAdd" name="tenantAdd">
               <div class="m-form">
                  <div class="m-form__input">
                     <input type="text" placeholder="Name" name="tUserName" id="tUserName" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Mobile no" name="tUserMob" id="tUserMob" maxlength="13" required="required">
                  </div>
                  <div class="m-form__input">
                     <input type="email" placeholder="Email id" name="tUserEmail" id="tUserEmail" required="required">
                  </div>
                  <div class="m-form__input">
                     <textarea placeholder="Property Details(Name/Address)" name="tUserPropDetail" id="tUserPropDetail"></textarea>
                  </div>
                  <div class="m-form__input">
                     <select name="tUserPropType" id="tUserPropType">
                        <option value="Not_Choosen">Type of Property</option>
                        <option value="1Bhk">1Bhk</option>
                        <option value="2Bhk">2Bhk</option>
                        <option value="3Bhk">3Bhk</option>
                        <option value="4Bhk">4Bhk</option>
                        <option value="5Bhk">5Bhk</option>
                        <option value="Duplex">Duplex</option>
                     </select>
                  </div>
                  <div class="m-form__input">
                     <input type="text" placeholder="Location" name="tUserPropLoc" id="tUserPropLoc">
                  </div>
                  <label class="m-input__check">NOTE- 15 DAYS RENT FINALISED TO BE CHARGED</label>
                  <div class="btn-submit">
                     <button class="btn-submit" name="btnTenantSubmit" id="btnTenantSubmit" type="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Ends: Contact Us Modal -->
<div class="viewport">
<div id="scroll-container">
<!-- Section 1 -->
<div class="section m-banner m-section--1">
   <div class="swiper m-top-banner">
      <div class="swiper-wrapper">
         <?php
      while ($res = mysqli_fetch_array($query)) {
         ?>
         <div class="swiper-slide">
           
            <svg width="1246.613" height="673.518" viewBox="0 0 1246.613 673.518">
               <defs>
                  <clipPath id="clip-path">
                     <rect id="Rectangle_5" data-name="Rectangle 5" width="1246.613" height="673.518" fill="none" stroke="#e49e74" stroke-width="1"/>
                  </clipPath>
               </defs>
               <g id="Group_2153" data-name="Group 2153" opacity="0.3">
                  <g id="Group_2123" data-name="Group 2123" clip-path="url(#clip-path)">
                     <path id="Path_3554" data-name="Path 3554" d="M0,307.86c3.221-18.689,5.53-37.591,9.813-56.033,23.31-100.414,76.805-179.2,172.275-222.192,101.546-45.723,201.34-39.43,294.458,25.1,79.062,54.795,131.154,131.511,171.649,216.9,19.427,40.962,35.523,83.54,55.78,124.06,25.6,51.214,59.937,96.141,104.767,132.719,108.265,88.335,261.857,47.559,315.935-75.823,39.851-90.925,35.731-181.7-19.915-265.8-59.312-89.641-191.875-124.5-291.38-42.377-28.523,23.545-52.8,52.232-79.883,79.419,2.111,1.22.708.906.235.064-15.5-27.538-31.03-55.057-46.12-82.82-1.461-2.69-1.556-8.187.207-10.261C738.314,71.436,797.715,25.447,875.53,7.619c116.245-26.632,246.081,25.93,311.372,125.716,51.637,78.922,68.1,165.345,55.853,258-8.763,66.3-32.879,126.356-76.93,176.972-68.221,78.379-155.69,111.636-258.453,103.019C814.076,663.5,744.253,612.61,685.783,543.665c-46.891-55.292-80.4-118.407-106.658-185.8-28.971-74.368-67.874-142.565-126.5-198.312C377.889,88.49,276.169,78.1,193.181,135.235c-49.576,34.132-77.321,83.171-89.217,141.443-13.689,67.063-6.689,131.591,26.226,192.3C176.67,554.71,279.4,596.319,370.449,565.88c44.253-14.794,79.538-43.109,109.882-77.854,10.575-12.109,20.36-24.908,30.82-37.777,14.171,25.216,27.836,49.905,41.871,74.38,9.874,17.222,10.255,17.234-3.062,31.951-48.712,53.834-105.892,93.987-177.991,110.138C243.656,695.467,104.852,630.848,43.744,514.368A375.053,375.053,0,0,1,2.318,378.022C1.9,374.081.79,370.213,0,366.312V307.86" transform="translate(0 0.001)" fill="none" stroke="#e49e74" stroke-width="1"/>
                  </g>
               </g>
            </svg>
            <img  src="<?php echo !empty($res['bnimg']) ? htmlspecialchars($res['bnimg'], ENT_QUOTES, 'UTF-8') : 'images/default-banner.jpg'; ?>" class="m-banner__img" alt="Banner">
            <div class="m-banner__caption">
               <div class="m-container">
                  <div class="m-caption__primary__text">
                     <div class="text-revel-box">
                        <h2 class="text-revel"><?php echo $res['caption1'] ?></h2>
                     </div>
                     <div class="text-revel-box">
                        <h2 class="text-revel">In Sales</h2>
                     </div>
                     <div class="text-revel-box">
                        <p class="para-revel">Capability to sell projects having per-unit price upto 4.7 Cr</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php
      }
      ?>
         <!-- <div class="swiper-slide">
          
            <svg width="1246.613" height="673.518" viewBox="0 0 1246.613 673.518">
               <defs>
                  <clipPath id="clip-path">
                     <rect id="Rectangle_5" data-name="Rectangle 5" width="1246.613" height="673.518" fill="none" stroke="#e49e74" stroke-width="1"/>
                  </clipPath>
               </defs>
               <g id="Group_2153" data-name="Group 2153" opacity="0.3">
                  <g id="Group_2123" data-name="Group 2123" clip-path="url(#clip-path)">
                     <path id="Path_3554" data-name="Path 3554" d="M0,307.86c3.221-18.689,5.53-37.591,9.813-56.033,23.31-100.414,76.805-179.2,172.275-222.192,101.546-45.723,201.34-39.43,294.458,25.1,79.062,54.795,131.154,131.511,171.649,216.9,19.427,40.962,35.523,83.54,55.78,124.06,25.6,51.214,59.937,96.141,104.767,132.719,108.265,88.335,261.857,47.559,315.935-75.823,39.851-90.925,35.731-181.7-19.915-265.8-59.312-89.641-191.875-124.5-291.38-42.377-28.523,23.545-52.8,52.232-79.883,79.419,2.111,1.22.708.906.235.064-15.5-27.538-31.03-55.057-46.12-82.82-1.461-2.69-1.556-8.187.207-10.261C738.314,71.436,797.715,25.447,875.53,7.619c116.245-26.632,246.081,25.93,311.372,125.716,51.637,78.922,68.1,165.345,55.853,258-8.763,66.3-32.879,126.356-76.93,176.972-68.221,78.379-155.69,111.636-258.453,103.019C814.076,663.5,744.253,612.61,685.783,543.665c-46.891-55.292-80.4-118.407-106.658-185.8-28.971-74.368-67.874-142.565-126.5-198.312C377.889,88.49,276.169,78.1,193.181,135.235c-49.576,34.132-77.321,83.171-89.217,141.443-13.689,67.063-6.689,131.591,26.226,192.3C176.67,554.71,279.4,596.319,370.449,565.88c44.253-14.794,79.538-43.109,109.882-77.854,10.575-12.109,20.36-24.908,30.82-37.777,14.171,25.216,27.836,49.905,41.871,74.38,9.874,17.222,10.255,17.234-3.062,31.951-48.712,53.834-105.892,93.987-177.991,110.138C243.656,695.467,104.852,630.848,43.744,514.368A375.053,375.053,0,0,1,2.318,378.022C1.9,374.081.79,370.213,0,366.312V307.86" transform="translate(0 0.001)" fill="none" stroke="#e49e74" stroke-width="1"/>
                  </g>
               </g>
            </svg>
            <img src="assets/img/banner2.jpg" class="m-banner__img" alt="Banner 2">
            <div class="m-banner__caption">
               <div class="m-container">
                  <div class="m-caption__primary__text">
                     <div class="text-revel-box">
                        <h2 class="text-revel">Proptech</h2>
                     </div>
                     <div class="text-revel-box">
                        <h2 class="text-revel">CRM Solutions</h2>
                     </div>
                     <div class="text-revel-box">
                        <p class="text-revel">Tactfully handling and managing 7000+ happy customers</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide">
           
            <svg width="1246.613" height="673.518" viewBox="0 0 1246.613 673.518">
               <defs>
                  <clipPath id="clip-path">
                     <rect id="Rectangle_5" data-name="Rectangle 5" width="1246.613" height="673.518" fill="none" stroke="#e49e74" stroke-width="1"/>
                  </clipPath>
               </defs>
               <g id="Group_2153" data-name="Group 2153" opacity="0.3">
                  <g id="Group_2123" data-name="Group 2123" clip-path="url(#clip-path)">
                     <path id="Path_3554" data-name="Path 3554" d="M0,307.86c3.221-18.689,5.53-37.591,9.813-56.033,23.31-100.414,76.805-179.2,172.275-222.192,101.546-45.723,201.34-39.43,294.458,25.1,79.062,54.795,131.154,131.511,171.649,216.9,19.427,40.962,35.523,83.54,55.78,124.06,25.6,51.214,59.937,96.141,104.767,132.719,108.265,88.335,261.857,47.559,315.935-75.823,39.851-90.925,35.731-181.7-19.915-265.8-59.312-89.641-191.875-124.5-291.38-42.377-28.523,23.545-52.8,52.232-79.883,79.419,2.111,1.22.708.906.235.064-15.5-27.538-31.03-55.057-46.12-82.82-1.461-2.69-1.556-8.187.207-10.261C738.314,71.436,797.715,25.447,875.53,7.619c116.245-26.632,246.081,25.93,311.372,125.716,51.637,78.922,68.1,165.345,55.853,258-8.763,66.3-32.879,126.356-76.93,176.972-68.221,78.379-155.69,111.636-258.453,103.019C814.076,663.5,744.253,612.61,685.783,543.665c-46.891-55.292-80.4-118.407-106.658-185.8-28.971-74.368-67.874-142.565-126.5-198.312C377.889,88.49,276.169,78.1,193.181,135.235c-49.576,34.132-77.321,83.171-89.217,141.443-13.689,67.063-6.689,131.591,26.226,192.3C176.67,554.71,279.4,596.319,370.449,565.88c44.253-14.794,79.538-43.109,109.882-77.854,10.575-12.109,20.36-24.908,30.82-37.777,14.171,25.216,27.836,49.905,41.871,74.38,9.874,17.222,10.255,17.234-3.062,31.951-48.712,53.834-105.892,93.987-177.991,110.138C243.656,695.467,104.852,630.848,43.744,514.368A375.053,375.053,0,0,1,2.318,378.022C1.9,374.081.79,370.213,0,366.312V307.86" transform="translate(0 0.001)" fill="none" stroke="#e49e74" stroke-width="1"/>
                  </g>
               </g>
            </svg>
            <img src="assets/img/banner3.jpg" class="m-banner__img" alt="Banner 3">
            <div class="m-banner__caption">
               <div class="m-container">
                  <div class="m-caption__primary__text">
                     <div class="text-revel-box">
                        <h2 class="text-revel">Trend-based</h2>
                     </div>
                     <div class="text-revel-box">
                        <h2 class="text-revel">Marketing Solutions</h2>
                     </div>
                     <div class="text-revel-box">
                        <p class="text-revel">Strategizing marketing campaigns backed by latest trends</p>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
      </div>
      <div class="swiper-pagination m-top-banner-bullets"></div>
   </div>
   <div class="next-section">
      <span>Scroll down</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="27.714" height="126.186" viewBox="0 0 27.714 126.186">
         <path id="Path_3553" data-name="Path 3553" d="M187.368,128.648a1.172,1.172,0,0,0-1.631,0L175,138.232V17.155a1.155,1.155,0,0,0-2.309,0V138.232l-10.738-9.569a1.153,1.153,0,1,0-1.631,1.631s12.557,11.431,12.7,11.547a1.252,1.252,0,0,0,.823.346,1.185,1.185,0,0,0,.823-.346c.115-.115,12.7-11.547,12.7-11.547a1.169,1.169,0,0,0,.332-.823A1.194,1.194,0,0,0,187.368,128.648Z" transform="translate(-159.986 -16)" fill="#cb8d67"/>
      </svg>
   </div>
</div>
<!-- Ends: Section 1 -->
<!-- Section 2 (About)-->
<div class="m-section m-section--2">
   <div class="m-container">
      <div class="m-why-choose">
         <div class="m-caption__primary__text">
            <div class="text-revel-box">
               <h1 class="text-revel-3">Why Choose <span class="text-primary">Capdeal.io</span> <br>as the Best Real Estate Company</h1>
            </div>
         </div>
         <div class="m-why-choose-content">
            <p align="justify">We are the <b>India's Fastest-growing and Best Real Estate Company in Bhubaneswar</b> born out of the need to simplify the search for a Residential and Commercial Properties, which is free of high brokerage and endless site visits. We created a unique platform of <b>Real Estate Consulting firm</b> that filled the gaps left by others in the market.</p>
            <p align="justify">Led by passionate problem-solvers and backed by experienced professionals from the real estate sector, we are the <a href="about.html">best real estate consultant</a> dedicated to becoming the most trusted place for buying, selling residential & commercial properties in Eastern India.</p>
            <p align="justify">Our goal is to become the first choice of customers in their journey of <b>Discovering, Buying, Selling, and Financing a Home.</b></p>
            <a class="m-btn-arrow" href="about.html">
               <svg width="65" height="65" viewBox="0 0 65 65" fill="none"  xmlns="http://www.w3.org/2000/svg">
                  <circle cx="32.5" cy="32.5" r="32" stroke="#ffff00"/>
                  <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#ffff00" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
               Know More
            </a>
         </div>
         <div class="m-why-choose-video">
            <video muted loop autoplay>
               <source src="assets/videos/globe.mp4" type="video/mp4">
               <source src="assets/videos/globe.m4v" type="video/m4v">
               Your browser does not support the video tag.
            </video>
         </div>
      </div>
   </div>
</div>
<!-- Ends: Section 2-->
<!-- Section 3-->
<div class="m-section m-section--3 m-statistics">
   <div class="m-container">
      <div class="m-statistics-content">
         <svg viewBox="0 0 1246.613 673.518">
            <defs>
               <clipPath id="clip-path">
                  <rect id="Rectangle_5" data-name="Rectangle 5" width="1246.613" height="673.518" fill="none" stroke="#e49e74" stroke-width="1"/>
               </clipPath>
            </defs>
            <g id="Group_2153" data-name="Group 2153" opacity="0.2">
               <g id="Group_2123" data-name="Group 2123" clip-path="url(#clip-path)">
                  <path id="Path_3554" data-name="Path 3554" d="M0,307.86c3.221-18.689,5.53-37.591,9.813-56.033,23.31-100.414,76.805-179.2,172.275-222.192,101.546-45.723,201.34-39.43,294.458,25.1,79.062,54.795,131.154,131.511,171.649,216.9,19.427,40.962,35.523,83.54,55.78,124.06,25.6,51.214,59.937,96.141,104.767,132.719,108.265,88.335,261.857,47.559,315.935-75.823,39.851-90.925,35.731-181.7-19.915-265.8-59.312-89.641-191.875-124.5-291.38-42.377-28.523,23.545-52.8,52.232-79.883,79.419,2.111,1.22.708.906.235.064-15.5-27.538-31.03-55.057-46.12-82.82-1.461-2.69-1.556-8.187.207-10.261C738.314,71.436,797.715,25.447,875.53,7.619c116.245-26.632,246.081,25.93,311.372,125.716,51.637,78.922,68.1,165.345,55.853,258-8.763,66.3-32.879,126.356-76.93,176.972-68.221,78.379-155.69,111.636-258.453,103.019C814.076,663.5,744.253,612.61,685.783,543.665c-46.891-55.292-80.4-118.407-106.658-185.8-28.971-74.368-67.874-142.565-126.5-198.312C377.889,88.49,276.169,78.1,193.181,135.235c-49.576,34.132-77.321,83.171-89.217,141.443-13.689,67.063-6.689,131.591,26.226,192.3C176.67,554.71,279.4,596.319,370.449,565.88c44.253-14.794,79.538-43.109,109.882-77.854,10.575-12.109,20.36-24.908,30.82-37.777,14.171,25.216,27.836,49.905,41.871,74.38,9.874,17.222,10.255,17.234-3.062,31.951-48.712,53.834-105.892,93.987-177.991,110.138C243.656,695.467,104.852,630.848,43.744,514.368A375.053,375.053,0,0,1,2.318,378.022C1.9,374.081.79,370.213,0,366.312V307.86" transform="translate(0 0.001)" stroke-width="1"/>
               </g>
            </g>
         </svg>
         <div class="m-statistics-items">
            <div class="m-statistics-item">
               <div class="m-statistics-figure m-statistics-figure--left">
                  <div class="swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <span class="l-text">50+</span><span class="bar"></span> Developers
                        </div>
                        <div class="swiper-slide">
                           <span class="l-text">2000+</span><span class="bar"></span> Inventories
                        </div>
                     </div>
                  </div>
               </div>
               <div class="m-statistics-figure m-statistics-figure--right">
                  <div class="swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <span class="l-text">7000+</span><span class="bar"></span> Happy Customers
                        </div>
                        <div class="swiper-slide">
                           <span class="l-text">27 lacs</span><span class="bar"></span> Sq.Ft Areas Sold
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Ends: Section 3-->
<!-- Section 4 -->
<div class="m-section m-section--4">
   <div class="m-container">
      <div class="m-caption__primary__text">
         <div class="text-revel-box">
            <h3 class="text-revel-3">Executive Profiles</h3>
         </div>
         <div class="m-section__content__desc">
            <p>Our board consists of seasoned industry professionals that bring newer perspectives and a larger vision for mutual growth of young talents and Capdeal in a market.</p>
         </div>
      </div>
      <div class="m-profile-slider">
         <div class="m-profile-slider-left">
            <div class="swiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="m-profile-content">
                        <!-- <img src="img/signature.png" alt=""> -->
                        <h4>Sakti Mishra</h4>
                        <h5>Founder & CEO</h5>
                        <div class="m-section__content__desc">
                           <p><span>ʻʻ</span> There are no shortcuts to success. Exercise patience. Plan your moves. Move forward with discipline and in a transparent manner. <span>ʼʼ</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="m-profile-content">
                        <!-- <img src="img/signature.png" alt=""> -->
                        <h4>Bichimala Mishra</h4>
                        <h5>Co-founder &amp; President</h5>
                        <div class="m-section__content__desc">
                           <p><span>ʻʻ</span> A good team drives the real estate market, and we have it. Our priority is our clients. We have always focused on long-term relationships. <span>ʼʼ</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="m-profile-content">
                        <!-- <img src="img/signature.png" alt=""> -->
                        <h4>Shivashis Sahu</h4>
                        <h5>Co-founder &amp; COO</h5>
                        <div class="m-section__content__desc">
                           <p><span>ʻʻ</span> Our goal is not just limited to buying, selling and renting but to build an everlasting relationship with the clients. <span>ʼʼ</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="m-profile-content">
                        <!-- <img src="img/signature.png" alt=""> -->
                        <h4>Akhil Kumar Dehury</h4>
                        <h5>Co-founder &amp; Executive Director - CRM + Revenue</h5>
                        <div class="m-section__content__desc">
                           <p><span>ʻʻ</span> We do our work right. We continue to learn. Moving forward with discipline and in a transparent manner helps achieve success. <span>ʼʼ</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="m-profile-content">
                        <!-- <img src="img/signature.png" alt=""> -->
                        <h4>Aakaash Mishra</h4>
                        <h5>Co-founder &amp; Vice President - Sales + Operations</h5>
                        <div class="m-section__content__desc">
                           <p><span>ʻʻ</span> It is essential to have trusting and dedicated people in the core team. Our multidisciplinary team has always been in tune with each other. It is what helped us to move forward. <span>ʼʼ</span></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="m-profile-slider-right">
            <div thumbsSlider="" class="swiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <img src="assets/img/Sakti%20Sir.png" alt="Sakti" />
                  </div>
                  <div class="swiper-slide">
                     <img src="assets/img/bichimala.png" alt="Bichimala" />
                  </div>
                  <div class="swiper-slide">
                     <img src="assets/img/shivasis.png" alt="Shivasis" />
                  </div>
                  <div class="swiper-slide">
                     <img src="assets/img/Akhil%20Sir.png" alt="Akhil" />
                  </div>
                  <div class="swiper-slide">
                     <img src="assets/img/Aakaash%20Sir.png" alt="Aakash" />
                  </div>
               </div>
            </div>
         </div>
         <div class="m-swiper-arrow m-profile-slider-arrow">
            <div class="swiper-button-next">
               <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                  <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </div>
            <div class="swiper-button-prev">
               <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                  <path d="M41 33H23M23 33L31.5 24M23 33L31.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Ends: Section 4-->
<!-- Section 5 -->
<div class="m-section m-section--5">
   <div class="m-container">
      <div class="m-caption__primary__text">
         <div class="text-revel-box">
            <h3 class="text-revel-3">Signature <span class="text-primary">Capdeal Services</span></h3>
         </div>
         <div class="m-section__content__desc">
            <p>With almost 3 decades of experience in the real estate market, our team offers extensive knowledge for a wide range of services and develops strategies with multifaceted options to improve your asset performance.</p>
         </div>
      </div>
      <div class="m-service-slider">
         <div class="swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="m-service-slider-item">
                     <svg width="64.107" height="59.124" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M148.6,8c1.7,3.1,3.8,6.1,5,9.4c1.5,4.4,2.1,9,3.3,14.2c5-3.2,9.6-6.1,14.1-9.2c4.1-2.8,7.8-2.5,11.3,1.1
                           c5,5.1,10,10.1,15.1,15.1c3.4,3.3,3.8,6.9,1.1,10.9c-3,4.6-6,9.2-9.3,14.3c4.6,1,8.8,1.9,12.9,2.9c9.9,2.2,9.9,2.3,11,12.9
                           c1.6,0,3.4,0,5.1,0c61.3,0,122.6,0,183.9,0.1c3,0,5-0.7,6.9-3.2c4.1-5.5,10.1-8,16.9-8c15.2-0.1,30.4-0.2,45.6,0
                           c11.9,0.2,20.8,8.4,21.1,20.3c0.5,15.8,0.4,31.7,0,47.5c-0.3,10.6-7.5,18.6-17.5,20.4c-10,1.8-19.1-3.2-23.6-12.9
                           c-0.3-0.7-0.6-1.4-1.2-2.6c-1.5,1.4-2.8,2.6-4,3.8c-33.4,33.4-66.8,66.8-100.2,100.2c-9.2,9.2-16,9.2-25.3,0
                           c-10.6-10.6-21.2-21.3-33-33.1c-1.2,1.9-1.9,3.6-3.2,4.9c-18.2,18.4-36.5,36.7-54.9,54.9c-12.3,12.2-32,7.1-36.1-9.2
                           c-1.9-7.6-0.2-14.5,5.3-20.2c10.7-10.8,21.4-21.6,32.2-32.3c3.6-3.6,7.6-3.7,10.8-0.7c3.2,3.1,3.1,7.3-0.7,11.1
                           c-10.2,10.3-20.5,20.6-30.9,30.9c-2.7,2.7-4,5.5-1.9,9.1c2.5,4.3,7.2,4.7,11,1c5.4-5.2,10.6-10.5,15.8-15.8
                           c13.8-13.8,27.7-27.7,41.5-41.5c8-8,15.5-8,23.5,0c11,10.9,21.9,22,33.5,33.7c1.5-1.9,2.5-3.6,3.9-5c36.9-37,73.9-73.9,110.8-110.9
                           c0.8-0.8,1.6-1.6,2.4-2.4c2.4-2.7,5.3-3.8,8.7-2.6c3.7,1.4,4.8,4.5,4.8,8.2c0,3.4,0,6.8,0,10.2c0.1,4.2,2.3,6.7,6.5,7.1
                           c3.7,0.4,6.9-2.7,7-7.1c0.2-15.2,0.1-30.4,0-45.6c0-4.4-2.8-6.8-7.2-6.8c-15-0.1-30.1-0.1-45.1,0c-4.5,0-7.2,3-6.9,7
                           c0.3,4.1,2.6,6.5,7,6.5c3.6,0,7.1,0,10.7,0c3.6,0,6.9,1.3,7.5,4.9c0.4,2.6-0.5,6.3-2.3,8.2c-7.3,8-15.2,15.5-22.8,23.1
                           c-24.4,24.4-48.7,48.7-73.1,73.1c-8.7,8.7-15.8,8.7-24.6-0.1c-9.8-9.8-19.7-19.7-29.5-29.5c-0.9-0.9-1.9-1.7-3.1-2.8
                           c-7.3,7.3-14.5,14.6-21.7,21.7c-2.7,2.7-5.9,3.3-9.3,1.4c-3.1-1.8-4-4.7-3.2-7.9c0.4-1.6,1.6-3.1,2.8-4.4c6.9-7,13.9-14,20.9-21
                           c6.5-6.4,14.6-6.4,21.1,0c11.4,11.3,22.6,22.7,33.5,33.8c22.5-22.5,44.8-44.8,67.1-67.1c-66.3,0-132.8,0-197.8,0
                           c-7.9,7.8-14.9,15.2-22.5,21.8c-1.6,1.4-6.2,0.5-8.8-0.8c-4.9-2.4-9.2-5.8-14.2-9c-1.2,5.8-2.3,10.8-3.3,15.8
                           c-1.3,6-3.3,7.7-9.2,7.8c-7.1,0.1-14.2,0-21.4,0c-4.6,0-7.2-2.3-8.2-6.7c-1.1-5.4-2.3-10.7-3.6-17c-4.7,3-8.9,5.8-13.2,8.6
                           c-5.7,3.7-8.4,3.5-13.1-1.5c-5.8-6-11.3-12.3-17-18.4c-0.6-0.7-1.9-1-2.9-1c-9.9-0.1-19.7,0-30.1,0c-0.1,1.9-0.3,3.6-0.3,5.4
                           c0,67.8,0,135.6,0,203.3c0,15.3,8,23.2,23.4,23.3c8.1,0,16.1,0,24.6,0c2.7-14.6,9.7-26.4,21.7-35c9-6.4,19-9.6,30-9.6
                           c24.8,0,40.7,13.7,51.7,44.6c1.6,0,3.4,0,5.1,0c84.8,0,169.5,0,254.3,0c15.7,0,23.6-7.9,23.6-23.5c0-50,0-100,0-150
                           c0-1.6-0.1-3.3,0.1-4.8c0.5-3.9,2.7-6.2,6.6-6.5c4.2-0.3,6.7,1.9,7.7,5.9c0.4,1.5,0.2,3.2,0.2,4.8c0,50.3,0,100.6,0,150.9
                           c0,23-14.6,37.7-37.5,37.7c-34,0-67.9,0-101.9,0c-1.8,0-3.5,0-6,0c2.5,9.7,4.8,19,7.2,28.3c6.3,24.6,12.6,49.1,18.9,73.7
                           c3.6,14.1-1.1,22.1-15.2,26.3c-0.4,0.1-0.8,0.5-1.2,0.8c-2.6,0-5.2,0-7.8,0c-8.7-2.6-14.2-8-16.4-17.1c-5.3-22-11-43.9-16.6-65.8
                           c-3.9-15.3-7.9-30.6-11.8-45.8c-8.1,0-15.7,0-23.8,0c0,2.3,0,4.2,0,6.1c0,32.8-0.3,65.7,0.1,98.5c0.1,12.1-4.4,20.2-15.9,24.1
                           c-2.6,0-5.2,0-7.8,0c-11.6-4.2-15.9-12.5-15.7-24.7c0.5-32.8,0.2-65.6,0.2-98.4c0-1.9,0-3.7,0-5.9c-6.6,0-12.6,0.3-18.5-0.1
                           c-3.9-0.2-5.6,1-6.5,4.9c-8.7,34.7-17.8,69.4-26.3,104.1c-2.5,10.1-7,17.5-17.5,20.1c-2.6,0-5.2,0-7.8,0
                           c-17.6-7.5-19.8-12.4-14.9-31.5c4.5-17.5,8.9-35,13.4-52.6c0.3-1.3,0.5-2.7,0.7-4.3c-34.2,13.1-67.3-8.6-72.5-40.6
                           c-6.6,0-13.2,0.2-19.8-0.1c-5.9-0.2-12.1-0.1-17.7-1.7c-15.6-4.4-24.7-18-24.7-35.9c0-73.8,0-147.5,0-221.3c0-1.9,0.1-3.9,0.3-5.8
                           C21.7,96.1,32.1,84.1,47,80.5c2.6-0.6,5.3-0.9,7.9-1.4c1.2-10.4,1.2-10.4,11.5-12.6c4-0.9,8-1.7,12.5-2.7c-3.4-5.2-6.4-9.8-9.4-14.4
                           c-2.6-3.9-2.3-7.5,1.2-10.9c5-4.9,9.8-9.8,14.8-14.7c4.3-4.3,6.7-4.5,12-1.1c4.4,2.8,8.8,5.7,13.7,8.8c1.2-5.6,1.9-10.6,3.5-15.3
                           c1-3,3.2-5.6,4.9-8.4C129.2,8,138.9,8,148.6,8z M183.3,46.1c-3-3-5.8-5.7-8.7-8.6c-3.4,2.2-7,4.6-10.7,7c-8.2,5.3-19.1,0.8-21.1-8.7
                           c-0.9-4.4-1.9-8.7-2.9-13c-4.2,0-7.9,0-11.9,0c-1,4.8-1.9,9.6-3,14.2c-1.9,8-12.9,12.5-19.9,8.2C101,42.6,97,39.9,93,37.4
                           c-2.9,2.9-5.6,5.6-8.5,8.5c2.4,3.7,4.7,7.3,7.1,11c5.3,8.3,1,19-8.5,21.1c-3.5,0.8-7,1.2-10.4,2.3c-1.2,0.4-2.3,2.1-2.8,3.5
                           c-0.5,1.5,0,3.2-0.1,4.8c-0.3,3.1,0.6,4.7,4,5.1c3.5,0.4,7,1.3,10.4,2.2c7.9,2,12.4,12.9,8,19.9c-2.5,4.1-5.2,8.1-7.5,11.5
                           c2.9,3.2,5.5,6.1,8.1,9.1c3.7-2.4,7.4-4.5,10.7-7c4.3-3.3,8.5-3,13.2-1.3c6.2,2.3,8,7.2,9.1,13.1c2,10.4,2.2,10.4,12.8,9.8
                           c0.3,0,0.6-0.2,1.2-0.5c0.9-4,1.8-8.3,2.7-12.5c2-9.5,12.9-14,21.1-8.7c3.8,2.4,7.5,4.9,10.4,6.8c3.3-3.1,6.1-5.7,9-8.4
                           c-2.3-3.5-4.6-7.3-7.1-10.8c-2.7-3.6-2.8-7.4-1.4-11.5c1.9-5.7,5.5-8.9,11.7-10c12.1-2.1,12.1-2.3,11.6-13.2c0-0.3-0.2-0.6-0.4-1.2
                           c-4.4-0.9-9-1.9-13.6-2.9c-8.2-1.8-12.9-12.8-8.4-20C178.2,53.9,180.8,50,183.3,46.1z M419.9,112.2c-0.2-0.6-0.3-1.3-0.5-1.9
                           c-6.1-2.2-11-5.9-13.3-11.9c-1.3-3.5-3-4.4-6.6-4.4c-60.5,0.1-120.9,0.1-181.4,0.1c-1.7,0-3.4,0-5.1,0c-0.7,9.9-1.4,10.8-10.7,12.7
                           c-4.2,0.9-8.4,1.8-12.8,2.7c1.4,3.8,3.2,5.5,7.2,5.5c71.8-0.1,143.6-0.1,215.4-0.2C414.7,114.8,417.3,113.1,419.9,112.2z
                           M171.2,368.9c0.1-20.6-16.6-37.5-37.1-37.5c-20.6-0.1-37.4,16.6-37.5,37.1c-0.1,20.4,16.8,37.5,37.2,37.5
                           C154.5,406.1,171.1,389.6,171.2,368.9z M310.5,376.2c0.2,1.4,0.2,2.7,0.6,3.9c8.9,34.9,17.9,69.8,26.8,104.6
                           c1.2,4.8,4.2,6.6,8.5,5.6c3.8-1,4.9-3.4,3.7-8.4c-4.9-19.2-9.8-38.5-14.8-57.7c-4.1-15.9-8.1-31.9-12.2-48
                           C318.7,376.2,314.7,376.2,310.5,376.2z M186,376.1c0.3,0.4,0.6,0.7,0.9,1.1c-4.2,8.1-8.4,16.1-12.6,24.2c-0.5,1-0.9,2.1-1.2,3.2
                           c-6.7,26.1-13.3,52.2-20,78.3c-0.7,2.8-0.7,5.6,2.1,6.5c2.3,0.8,5.5,0.8,7.6-0.3c1.6-0.7,2.4-3.6,3-5.7c6.6-25.3,13-50.6,19.5-75.9
                           c2.6-10.4,5.2-20.8,7.9-31.4C190.4,376.1,188.2,376.1,186,376.1z M246.9,376.2c-0.1,1.2-0.2,1.8-0.2,2.4c0,35.1,0,70.1,0,105.2
                           c0,0.8-0.3,2,0.1,2.4c1.6,1.5,3.4,3.7,5.2,3.8c1.4,0.1,3.3-2.3,4.4-4c0.6-0.9,0.2-2.5,0.2-3.8c0-33.6,0-67.2,0-100.8
                           c0-1.7-0.2-3.4-0.3-5.2C253,376.2,250.1,376.2,246.9,376.2z M35,114.9c12,0,24.1-0.2,36.2,0.1c4.1,0.1,6.2-1.4,7.1-5.5
                           c-5.3-1.2-10.3-2.2-15.3-3.3c-5.9-1.3-7.3-2.9-7.7-8.7c-0.1-0.9-0.2-1.9-0.3-2.8C44,93.6,34.6,103.1,35,114.9z"/>
                        <path d="M120.8,189.3c11.6,0,23.3,0,34.9,0c6.7,0,9.1,2.4,9.2,9c0.1,8.2,0.1,16.5,0,24.7c-0.1,6.2-2.7,8.9-8.9,8.9
                           c-23.6,0.1-47.2,0.1-70.7,0c-6.5,0-9.1-2.7-9.2-9.2c-0.1-8.2-0.1-16.5,0-24.7c0.1-6.2,2.6-8.7,8.9-8.8
                           C96.9,189.3,108.8,189.3,120.8,189.3z M90.7,217.1c19.9,0,39.5,0,59.2,0c0-4.5,0-8.6,0-12.9c-19.9,0-39.5,0-59.2,0
                           C90.7,208.6,90.7,212.6,90.7,217.1z"/>
                        <path d="M362.4,327.4c-21.8,0-43.6,0-65.4,0c-1.5,0-3,0.2-4.3-0.2c-3.7-0.9-6-3.3-5.9-7.2c0-3.6,2.1-6,5.7-6.9
                           c1.4-0.4,2.9-0.3,4.3-0.3c44.1,0,88.2,0,132.3,0c1.3,0,2.6-0.1,3.9,0.1c3.9,0.9,6.3,3.3,6.1,7.5c-0.2,4-2.5,6.2-6.3,6.8
                           c-1.4,0.3-2.9,0.1-4.4,0.1C406.3,327.4,384.3,327.4,362.4,327.4z"/>
                        <path d="M390.8,295.4c-12.9,0-25.9,0-38.8,0c-5.8,0-9-2.5-9.2-7c-0.1-4.7,3.2-7.5,9.2-7.5c26,0,52,0,78.1,0c5.7,0,8.9,2.7,8.9,7.3
                           c0,4.6-3.2,7.1-8.9,7.2c-1,0-1.9,0-2.9,0C415,295.4,402.9,295.4,390.8,295.4z"/>
                        <path d="M108.9,259.5c-8.1,0-16.1,0-24.2,0c-5.3,0-8.5-2.8-8.6-7.1c-0.1-4.3,3.3-7.4,8.4-7.4c16.1-0.1,32.3-0.1,48.4,0
                           c5.3,0,8.3,3,8.2,7.4c-0.1,4.5-3,7-8.5,7.1C124.7,259.6,116.8,259.5,108.9,259.5z"/>
                        <path d="M133.8,56c16.9-0.1,30.9,13.8,30.9,30.7c0,16.7-13.7,30.6-30.4,30.8c-16.9,0.2-31-13.7-31.2-30.6
                           C103,70.2,116.9,56.2,133.8,56z M134.2,103c8.7-0.1,16-7.5,16-16.2c0-9-7.5-16.4-16.5-16.2c-8.8,0.2-16,7.4-16,16.2
                           C117.7,95.7,125.3,103.2,134.2,103z"/>
                        <path d="M141.1,368.8c0,3.4,0.2,6.8,0,10.1c-0.3,4.1-2.6,6.5-6.8,6.7c-4.2,0.2-7.1-2.1-7.3-6.1c-0.4-7.2-0.4-14.5,0-21.7
                           c0.2-4,3.3-6.3,7.4-6.1c4,0.2,6.5,2.7,6.7,6.9C141.3,362,141.1,365.4,141.1,368.8z"/>
                     </svg>
                     <h4>Sales & Marketing Solutions</h4>
                     <p>Optimise your expenditures and outperform...</p>
                     <a href="sales-marketing-solutions.html">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="32.5" cy="32.5" r="32"/>
                           <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-service-slider-item">
                     <svg width="64.107" height="59.124" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M50.1,174.2c-20,68.2-10,131.1,29.5,189.9c-4.3,3.1-8.6,6.1-13.2,9.4C54.4,356.8,45,339,38,320.1
                           c-17.9-49-19.4-98.5-4.1-148.4c1.3-4.2,0.6-6.1-3.3-7.9c-6.1-2.8-12.2-5.8-17.8-9.5c-2.6-1.7-4.9-4.9-5.6-7.8
                           c-0.9-3.9,2.3-6.5,5.7-8.3c15.2-8.2,30.4-16.3,45.4-24.6c2.3-1.3,4.5-3.2,6-5.4c39-55,91.9-88.1,158.5-97.9
                           c99.5-14.7,197.9,38.1,241.4,128.6c0.7,1.5,1.5,3.1,2.5,5.1c8.2-2.1,16.3-4,24.4-6.2c3.9-1.1,7.5-1.4,10.5,1.8
                           c3,3.2,2.4,6.8,1.1,10.6c-5.7,16.2-11.4,32.4-16.9,48.7c-0.8,2.5-1.1,5.4-0.7,8c7.8,59.4-5,113.9-38.5,163.5c-0.5,0.7-1,1.4-1.5,2.1
                           c-0.2,0.3-0.5,0.5-1,0.9c-4.3-3-8.6-6.1-12.2-8.7c7.1-13.2,14.6-25.6,20.6-38.7c16.8-37.2,21.9-76.2,16.1-116.5
                           c-0.4-2.4-2-5.2-3.8-6.9c-12.1-11.1-24.4-21.9-36.6-32.8c-2.9-2.6-5.6-5.3-4.7-9.7c1-4.5,4.5-6.1,8.6-7.1c6-1.4,12-3.1,18.3-4.8
                           c-8.7-18.6-19.4-35.4-32.8-50.3c-45.9-50.9-103.4-76.3-171.9-73.2c-70.1,3.3-125.9,34.9-166.9,91.9c-1.6,2.2-2.2,5.7-1.9,8.5
                           c1.5,16.8,3.4,33.6,5,50.4c0.8,7.9-5.7,12-12.9,8.5c-3.1-1.5-6.1-3.2-9.1-4.8C56.9,177.8,54,176.2,50.1,174.2z M448.6,166
                           c8.4,7.5,15.9,14.1,23.8,21.1c3.5-10.2,6.7-19.5,10.3-29.9C471,160.2,460.3,162.9,448.6,166z M64,162.8c-1.2-10.9-2.2-20.8-3.3-31.5
                           c-9.5,5.1-18.2,9.9-27.8,15.1C43.6,152,53.4,157.2,64,162.8z"/>
                        <path d="M172.7,276.8c-10.1,0-16-3.1-20-9.4c-6.4-10.2-12.7-20.5-18.7-30.9c-5.7-9.9-2.6-20.8,7.3-26.7c1.6-1,3.3-1.9,5-2.7
                           c2.8-1.3,3.2-3.3,3.1-6.3c-0.4-7.4-0.4-14.8,0-22.1c0.2-3-0.4-4.9-3.1-6.2c-2.2-1-4.3-2.2-6.3-3.5c-8.4-5.6-11.4-16.2-6.4-25
                           c6.2-10.9,12.7-21.7,19.5-32.2c5.9-9.1,17.2-11.9,26.9-6.2c6.2,3.7,10.9,3.9,16.6-0.8c3.9-3.2,8.8-5.6,13.6-7.3
                           c5.4-2,7.1-5.1,7-10.8c-0.3-12.9,8-20.8,20.9-20.9c0.3,0,0.7,0,1,0c11.6,0,23.1-0.1,34.7,0c12,0.1,20.4,8.2,20.1,20.1
                           c-0.2,6.4,1.9,9.5,7.8,11.8c6,2.4,11.5,6.2,17,9.7c2.8,1.8,5.2,2,8.1,0.3c3.3-1.8,6.7-3.8,10.3-4.6c8.5-2,16.6,1.6,21.4,9.2
                           c6.3,10.1,12.5,20.2,18.5,30.5c5.8,10,2.9,20.7-7,26.8c-1.2,0.7-2.3,1.5-3.6,2c-4,1.5-5.1,3.9-4.6,8.4c0.8,6.4,0.8,13.1,0,19.6
                           c-0.5,4.5,0.7,6.8,4.6,8.4c1.6,0.6,3.1,1.6,4.5,2.5c8.7,5.7,11.7,16.3,6.5,25.3c-6.1,10.8-12.5,21.4-19.2,31.8
                           c-6,9.4-17.3,12.2-27.2,6.3c-6.1-3.6-10.5-3.6-16.2,0.7c-4.8,3.7-10.7,6.2-16.3,8.8c-3.1,1.4-4.5,3.2-4.3,6.7
                           c0.1,3.1,0.1,6.3-0.6,9.2c-2.1,8.6-9.8,14.4-19.1,14.5c-12.4,0.1-24.8,0.1-37.3,0c-11.6-0.1-20.2-8.3-19.8-19.9
                           c0.2-6.6-1.9-9.9-8-12.2c-5.9-2.3-11.2-6-16.6-9.4c-3-2-5.4-2-8.5-0.3C179.7,274.1,175,275.8,172.7,276.8z M363.6,153.4
                           c-1-1.9-1.6-3.1-2.3-4.3c-4.8-8-9.6-15.9-14.4-23.9c-4.4-7.3-4.5-7.5-11.9-3.2c-9.1,5.2-17.5,4.8-26.1-1.2
                           c-4.8-3.3-9.9-6.5-15.3-8.6c-11.5-4.4-17-12.3-16.1-24.6c0.3-4-1.4-5.5-5.4-5.5c-10.3,0.2-20.7,0.1-31.1,0.1c-7.4,0-7.5,0-7.4,7.5
                           c0.1,10.2-4.4,17.2-13.8,21.5c-6.6,3-12.8,6.7-18.9,10.5c-7.7,4.9-15.4,5.4-23.4,1c-1.5-0.8-3-1.6-4.5-2.5c-2.9-1.7-5.1-1.1-6.9,1.9
                           c-5.6,9.3-11.2,18.6-16.9,27.8c-1.8,2.9-1.2,4.7,1.7,6.1c1.6,0.7,3,1.7,4.5,2.5c8.3,4.7,11.5,11.7,10.6,21.1
                           c-0.6,6.6-0.1,13.4-0.1,20.1c0,2.6,0.2,5.2-0.2,7.7c-1.3,8-7.1,12.2-13.9,15.4c-3.8,1.8-4.6,3.8-2.1,7.6c5,7.6,9.5,15.6,14.2,23.4
                           c4.7,7.7,4.7,7.8,12.6,3.3c8.7-5,16.9-4.3,25.2,1.2c5,3.3,10.1,6.7,15.7,8.9c11.5,4.5,17,12.3,16.1,24.6c-0.3,4,1.4,5.5,5.4,5.4
                           c10.3-0.2,20.7-0.1,31.1-0.1c7.4,0,7.5,0,7.4-7.5c-0.1-10.2,4.4-17.2,13.8-21.5c6.6-3,12.8-6.6,18.9-10.5c7.7-4.9,15.4-5.4,23.4-1
                           c1.5,0.8,3,1.6,4.5,2.5c2.9,1.7,5.1,1.1,6.9-1.9c5.6-9.3,11.1-18.6,16.9-27.8c1.8-2.9,1.2-4.7-1.7-6.1c-1.6-0.7-3-1.6-4.5-2.5
                           c-8.4-4.8-11.4-11.5-10.6-21.1c0.5-6.8,0-13.7,0-20.6c0-2.2-0.2-4.5,0.1-6.7c1.2-7.5,6.1-12,12.7-15.2
                           C359.8,156.3,361.6,154.8,363.6,153.4z"/>
                        <path d="M208.1,378.3c4.5-4.7,8.1-8.4,11.6-12.1c5.8,5.7,11.6,11,17.1,16.7c1.3,1.3,2,3.7,2,5.6c0.1,38.2,0.1,76.4,0.1,115
                           c-5.4,0-10.6,0-16.6,0c0-1.7,0-3.5,0-5.3c0-33.7-0.1-67.4,0.1-101.1c0-3.9-0.9-6.9-4-9.4C214.9,384.8,211.5,381.5,208.1,378.3z"/>
                        <path d="M290.2,365.9c4.5,4.5,8.2,8,12.8,12.6c-3.6,3.2-7.3,6.6-11.1,9.8c-2.6,2.2-3.4,4.7-3.4,8.1c0.1,33.7,0.1,67.4,0.1,101.1
                           c0,1.9,0,3.8,0,6.1c-5.4,0-10.6,0-16.3,0c-0.1-1.5-0.2-3.2-0.2-4.8c0-35.8,0.1-71.6-0.1-107.3c0-4.7,1.4-8.2,4.7-11.4
                           C281.4,375.5,285.7,370.6,290.2,365.9z"/>
                        <path d="M181.2,322.1c13.7,0.1,24.7,11.5,24.5,25.3c-0.2,13.4-11.6,24.4-25.1,24.2c-13.8-0.2-24.8-11.6-24.5-25.3
                           C156.3,332.8,167.6,321.9,181.2,322.1z M189.1,347.1c0.1-4.4-3.4-8.3-7.9-8.5c-4.4-0.2-8.3,3.3-8.6,7.7c-0.3,4.6,3.5,8.7,8.1,8.7
                           C185.2,355.2,189,351.5,189.1,347.1z"/>
                        <path d="M329.9,371.6c-13.8-0.1-24.9-11.4-24.7-25.2c0.2-13.5,11.4-24.4,24.9-24.4c13.7,0.1,24.8,11.4,24.7,25.2
                           C354.7,360.7,343.4,371.8,329.9,371.6z M321.8,346.9c0,4.4,3.7,8.1,8.1,8.2c4.6,0.1,8.5-3.9,8.4-8.5c-0.2-4.4-4-8.1-8.4-8
                           C325.4,338.7,321.7,342.4,321.8,346.9z"/>
                        <path d="M147.7,404.9c-0.1,13.5-11.2,24.6-24.7,24.6c-13.7,0.1-24.9-11.1-24.9-24.9c0-13.4,11.2-24.6,24.7-24.6
                           C136.6,380,147.8,391.1,147.7,404.9z M123,396.5c-4.4-0.1-8.2,3.5-8.4,7.9c-0.2,4.4,3.4,8.3,7.8,8.5c4.6,0.2,8.7-3.6,8.7-8.2
                           C131.1,400.3,127.5,396.6,123,396.5z"/>
                        <path d="M387.9,429.5c-13.5,0-24.7-11.2-24.7-24.6c0-13.8,11.2-25,24.9-24.9c13.5,0,24.7,11.1,24.7,24.6
                           C412.9,418.3,401.7,429.5,387.9,429.5z M388.2,396.5c-4.5-0.1-8.3,3.5-8.4,7.9c-0.2,4.6,3.6,8.6,8.3,8.6c4.5,0,8.1-3.7,8.2-8.2
                           C396.3,400.4,392.6,396.6,388.2,396.5z"/>
                        <path d="M164.3,503.6c0-13.2-0.7-26.3,0.2-39.2c0.7-10.6-1.6-19-10.5-25.3c-1.4-0.9-2.3-2.4-3.7-3.8c4-3.8,7.7-7.3,11.4-10.7
                           c5.7,5.5,11.7,11.1,17.5,16.8c1,1,1.5,2.8,1.5,4.3c0.1,19.2,0.1,38.4,0.1,57.9C175.3,503.6,170,503.6,164.3,503.6z"/>
                        <path d="M346.6,503.7c-5.8,0-10.9,0-16.6,0c0-9.6,0-19,0-28.4c0-9.1-0.1-18.2,0.1-27.3c0.1-2.4,0.6-5.5,2.1-7.1
                           c5.3-5.8,11.1-11.2,16.9-16.9c3.7,3.9,7.2,7.6,12.1,12.6c-3.5,3-7.2,6.3-11,9.4c-2.8,2.2-3.7,4.9-3.6,8.5
                           C346.7,470.7,346.6,487,346.6,503.7z"/>
                        <path d="M255.5,247.6c-32.2,0-58.1-26-58.1-58.1c0-31.5,26.1-57.5,57.6-57.6c32.4-0.1,58.5,26,58.4,58.4
                           C313.3,221.7,287.1,247.7,255.5,247.6z M255.6,148.4c-22.9-0.1-41.6,18.5-41.6,41.3c0,22.6,18.4,41.3,41,41.4
                           c23.1,0.1,41.9-18.5,41.9-41.6C296.8,167,278.2,148.5,255.6,148.4z"/>
                     </svg>
                     <h4>Technology Solutions</h4>
                     <p>Get a clear insight into all sales, marketing and retention activities...</p>
                     <a href="technology-solutions.html">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="32.5" cy="32.5" r="32"/>
                           <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-service-slider-item">
                     <svg width="64.107" height="59.124" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M51.3,277.1c0,55.1,0,109.4,0,164c71,0,141.8,0,213.3,0c0-1.7,0-3.5,0-5.3c0-24.3,0-48.6,0-72.9c0-6,2.2-9.3,6.7-10
                           c5.7-1,9.7,2.8,9.7,9.5c0,24.3,0,48.6,0,72.9c0,1.8,0,3.7,0,6c5.4,0,10.3-0.1,15.2,0c6.4,0.1,9.4,3.1,9.4,9.5
                           c0,7.2,0.4,14.5-0.7,21.5c-3.3,20.7-19.9,34.6-40.8,34.6c-38.8,0.1-77.7,0-116.5,0c-31.3,0-62.6,0-93.9,0
                           c-26.4,0-43.7-17.3-43.8-43.6c0-4.4-0.1-8.9,0-13.3c0.2-5.5,3.2-8.5,8.7-8.7c5.1-0.2,10.2,0,15.9,0c0-2.3,0-4.3,0-6.3
                           c0-54.2,0-108.5,0-162.7c0-9.4,2.4-11.7,11.9-11.7c23.8,0,47.6,0,71.3,0c6.4,0,10.3,3.8,9.6,9.2c-0.6,4.5-4,7.1-9.6,7.2
                           c-20.2,0-40.4,0-60.6,0C55.4,277.1,53.6,277.1,51.3,277.1z M248.4,490.2c34.9,4.9,43.3-13.8,40.3-32.1c-87.3,0-174.6,0-262.3,0
                           c0,2.9,0,5.4,0,7.9c0.3,12.2,8.4,22.4,20.4,24.1c6.6,0.9,13.5,0.2,20.6,0.2c0.6-6.5-1.9-15.4,7.8-15.7c10.9-0.4,8.1,9.4,8.9,15.7
                           c49.5,0,98.5,0,147.5,0c0.6-12.4,2.4-15.8,8.2-16C245.7,474.1,247.7,477.7,248.4,490.2z"/>
                        <path d="M159.5,384.6c-16.1,11-31.6,12.3-46.6-0.9c-3.1,1.7-6,3.5-9.1,5c-12.2,6-26.4,1.7-32.9-9.8c-6.5-11.6-3-26.2,9-32.9
                           c5.9-3.3,8.2-6.4,7.5-13.6c-1-11,4.3-20.1,13.3-26.9c0.4-0.3,0.8-0.6,1.3-0.9c38.4-18.9,68.9-48.5,101.7-75
                           c16.1-13,32-26.3,47.9-39.5c6.5-5.3,11.2-4.5,15.4,2.8c2.3,3.8,4.6,7.6,6.7,11.5c2.5,4.7,1.4,9.3-2.5,11.7
                           c-4.2,2.5-8.7,1.2-11.8-3.6c-0.9-1.4-1.8-2.9-3.1-5c-34.3,28.3-68.4,56.4-102.9,84.9c2.6,4.6,5.2,9.2,7.8,13.7
                           c4.2,7.3,8.5,14.5,12.6,21.8c2.8,5.1,2,9.7-2.1,12.2c-4.2,2.6-9.1,1.2-12.1-3.9c-5.8-9.9-11.5-19.8-17.2-29.7
                           c-0.8-1.4-1.8-2.8-2.9-4.7c-10.1,5.9-20.2,11.4-29.7,17.6c-6.8,4.4-8.5,13.4-4.5,20.6c5.3,9.6,10.7,19.1,16.4,28.4
                           c4.8,7.9,14.2,11,21.8,5.9c34.4-22.7,73.8-33.6,111.6-48.4c18.8-7.3,37.7-14.2,57-21.5c-2.3-4-4.3-7.6-6.4-11.3
                           c-9.7-16.7-19.3-33.5-29-50.2c-2-3.4-3-7.1-0.1-9.9c1.9-1.9,5.3-3.2,8-3.1c2,0,4.7,2.2,5.9,4.2c13.6,23.1,27,46.4,40.3,69.7
                           c3.5,6.1,1.3,10.5-6.2,13.3c-33.7,12.7-67.5,25.3-101.2,38c-6.4,2.4-12.7,4.8-19.6,7.4c5.2,9,10.3,17.6,15,26.5
                           c8.6,16.1-1.7,35-19.7,36.3c-10.4,0.7-18.2-3.8-23.4-12.7C170.3,403.4,165.1,394.2,159.5,384.6z M173.8,376.6
                           c5.7,9.9,10.9,19.1,16.3,28.2c2.5,4.2,7.2,5.5,11,3.3c4-2.3,5.6-6.2,3.6-10.1c-5.2-9.9-11-19.5-16.8-29.5
                           C182.9,371.4,178.5,373.9,173.8,376.6z M95.3,355.8c-10.8,5.5-13.5,9.7-10.2,15.2c3.3,5.4,8.8,5.1,18.1-1.4
                           C100.7,365.1,98.1,360.6,95.3,355.8z"/>
                        <path d="M502.9,88.1c0,15.7,0,31.5,0,47.2c0,16.5-10.1,26.7-26.5,26.7c-31.7,0-63.3,0-95,0c-16.1,0-26.4-10.3-26.4-26.2
                           c0-15.2,0-30.5,0-45.7c0-6.5,3.1-10.2,8.2-10.2c5.1,0,8.2,3.8,8.2,10.2c0,15.1,0,30.1,0,45.2c0,7.4,2.9,10.2,10.3,10.2
                           c31.5,0,63,0,94.4,0c7.4,0,10.3-2.9,10.3-10.3c0-31.5,0-63,0-94.4c0-7.4-2.9-10.3-10.2-10.3c-31.5,0-63,0-94.4,0
                           c-7.4,0-10.2,2.9-10.3,10.2c0,4.6,0.1,9.2,0,13.9c-0.2,5.3-3.5,8.7-8.1,8.8c-4.7,0-8.1-3.4-8.2-8.6c-0.1-5.8-0.2-11.6,0-17.4
                           c0.6-12.4,10.8-22.9,23.3-23c33.7-0.3,67.4-0.3,101.1,0c13.1,0.1,23.2,11.1,23.4,24.5C503,55.3,502.9,71.7,502.9,88.1z"/>
                        <path d="M428.9,416.7c-15.9,0-31.8,0-47.7,0c-15.7,0-26.1-10.4-26.1-26c0-32-0.1-64,0-96c0-15.4,10.4-25.8,25.8-25.8
                           c32.2-0.1,64.3-0.1,96.5,0c15,0,25.5,10.5,25.6,25.5c0.1,15.4,0,30.8,0,46.2c0,6.5-3,10.3-8.1,10.4c-5.3,0.1-8.3-3.8-8.4-10.6
                           c0-14.7,0-29.4,0-44.1c0-8.1-2.7-10.9-10.6-10.9c-31.3,0-62.6,0-93.9,0c-7.7,0-10.4,2.8-10.4,10.6c0,31.3,0,62.6,0,93.9
                           c0,7.7,2.8,10.5,10.6,10.5c31.3,0,62.6,0,93.9,0c7.7,0,10.5-2.8,10.5-10.5c0-4.6-0.1-9.2,0.1-13.9c0.2-4.9,3.5-8.3,7.9-8.4
                           c4.7-0.1,8.2,3.3,8.4,8.5c0.2,6,0.3,12-0.1,18c-0.8,12.8-11.4,22.7-24.6,22.8C461.7,416.8,445.3,416.7,428.9,416.7z"/>
                        <path d="M125,162.1c0,21,0,42.1,0,63.1c0,8-2.7,10.8-10.8,10.8c-31.1,0-62.3,0-93.4,0c-8,0-10.8-2.7-10.8-10.8
                           c0-42.1,0-84.2,0-126.3c0-8.1,2.7-10.8,10.8-10.8c31.1,0,62.3,0,93.4,0c8,0,10.8,2.7,10.8,10.8C125,120,125,141,125,162.1z
                           M26.8,104.6c0,38.7,0,76.7,0,114.6c27.4,0,54.5,0,81.5,0c0-38.3,0-76.2,0-114.4c-1.1-0.1-1.9-0.2-2.7-0.2
                           C79.5,104.6,53.3,104.6,26.8,104.6z"/>
                        <path d="M215.5,6c41,0.2,73.9,33.3,73.8,74.3c-0.1,40.7-33.5,73.7-74.6,73.5c-40.4-0.2-73.5-33.7-73.2-74.3
                           C141.7,38.8,175,5.8,215.5,6z M272.8,79.9c0-31.6-25.8-57.5-57.4-57.5c-31.9,0.1-57.6,25.8-57.6,57.8c0,31.3,25.9,57.2,57.1,57.2
                           C247,137.4,272.9,111.7,272.8,79.9z"/>
                        <path d="M429,375.6c-18.1,0-32.9-14.8-32.9-33c0.1-18.2,14.9-32.8,33.1-32.7c17.9,0.1,32.6,14.8,32.6,32.7
                           C461.8,360.8,447.1,375.6,429,375.6z M429.1,359.2c9-0.1,16.2-7.5,16.3-16.4c0-8.9-7.4-16.4-16.3-16.4c-9.2,0-16.7,7.5-16.5,16.7
                           C412.7,352,420.1,359.2,429.1,359.2z"/>
                        <path d="M428.9,96.5c0,7.6,0,15,0,22.3c0,6.5-3,10.3-8,10.4c-5.3,0.1-8.3-3.8-8.4-10.6c0-7.2,0-14.3,0-22c-6.7-0.8-16.5,2-16.1-9
                           c0.4-9.8,9.3-7.2,16.1-7.9c0-2.8-0.1-5.5,0-8.2c0.3-13.7,10.8-24.2,24.6-24.4c5.3-0.1,10.6-0.1,15.9,0c5.2,0.1,8.7,3.5,8.7,8.1
                           c0,4.6-3.4,8-8.7,8.2c-4.3,0.1-8.6,0-12.8,0c-8.7,0-11.3,2.6-11.3,11.3c0,1.5,0,3,0,4.8c6.6,1.1,16.2-1.9,16.1,8.7
                           C444.9,98.4,435.8,95.9,428.9,96.5z"/>
                        <path d="M347.4,252.4c-5.5,0-9.1-2.9-9.6-7.3c-0.6-4.3,2.4-8.1,7.2-9.1c13.2-2.7,26.5-5.4,39.7-8c5.9-1.2,10.2,1.2,11.3,6
                           c1.2,5.1-1.7,9.1-7.9,10.4c-12.7,2.7-25.4,5.2-38.2,7.8C348.9,252.4,347.9,252.4,347.4,252.4z"/>
                        <path d="M331.4,144.6c-1.6,3.1-2.3,5.3-3.5,7c-7.6,10.3-15.3,20.5-23,30.7c-3.7,4.8-8.4,5.7-12.3,2.7c-3.9-3-4.3-7.6-0.9-12.2
                           c7.8-10.6,15.7-21,23.6-31.5c2.4-3.1,5.7-5,9.3-3.2C327.2,139.4,329.1,142.3,331.4,144.6z"/>
                        <path d="M364.4,186.5c-2,2.8-3.1,5.5-5,7c-10.5,8.2-21.2,16.1-31.9,24c-4.3,3.2-8.9,2.5-11.8-1.3c-3-3.9-2.2-8.6,2.3-12
                           c10.4-7.9,21-15.8,31.5-23.6c3-2.2,6.4-3.2,9.4-0.9C361,181.3,362.4,183.9,364.4,186.5z"/>
                        <path d="M67,170.3c-5.1,0-10.3,0.1-15.4,0c-5.3-0.1-8.7-3.5-8.7-8.1c0-4.7,3.4-8.1,8.6-8.2c10.6-0.1,21.2-0.1,31.8,0
                           c5.3,0.1,8.7,3.5,8.7,8.1c0,4.6-3.4,8.1-8.7,8.2C78,170.4,72.5,170.3,67,170.3z"/>
                        <path d="M67.3,203.1c-5.1,0-10.3,0.1-15.4,0c-5.5-0.1-9.1-3.6-9-8.4c0.1-4.6,3.6-7.9,8.9-7.9c10.4-0.1,20.9-0.1,31.3,0
                           c5.5,0.1,9.1,3.6,9,8.4c-0.1,4.6-3.6,7.8-8.9,7.9C77.9,203.2,72.6,203.1,67.3,203.1z"/>
                        <path d="M75.7,121c2.9,0,5.8-0.2,8.7,0c4.6,0.4,7.7,3.8,7.7,8.1c0,4.3-3.1,7.9-7.6,8.2c-5.8,0.3-11.6,0.3-17.4,0
                           c-4.6-0.2-7.7-3.8-7.7-8c0-4.3,3.1-7.8,7.6-8.2C69.8,120.8,72.8,121,75.7,121z"/>
                        <path d="M200.1,47.2c0.9,0.4,2.7,0.9,4.4,1.8c15.1,7.5,30.2,15.1,45.4,22.6c3.6,1.8,6.5,4,6.5,8.4c0,4.3-2.9,6.6-6.5,8.4
                           c-15.2,7.5-30.2,15.1-45.4,22.6c-8.3,4.1-13.7,0.7-13.7-8.6c0-15.2-0.1-30.4,0-45.7C190.8,50.7,194.2,47,200.1,47.2z M229.8,79.9
                           c-8.1-4-15-7.5-22.3-11.1c0,7.7,0,14.7,0,22.3C214.9,87.4,221.8,83.9,229.8,79.9z"/>
                     </svg>
                     <h4>Digital Services</h4>
                     <p>Transform your social media profile into a robust lead...</p>
                     <a href="digital-services.html">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="32.5" cy="32.5" r="32"/>
                           <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-service-slider-item">
                     <svg width="64.107" height="59.124" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M123.9,206.8c8.4,0,16-0.1,23.6,0c6,0.1,9.7,3.4,9.6,8.4c-0.1,4.8-3.7,8-9.5,8.1c-7.6,0.1-15.2,0-23.6,0c0,2.1,0,4.1,0,6.1
                           c0,71.1,0,142.2,0,213.3c0,8.5-2.6,12.4-8.2,12.5c-5.3,0.1-7.8-3.3-8.5-11.8c-1.9-22.3-21.3-39-43.9-37.8
                           c-21.8,1.2-39.1,19.9-38.8,42c0.3,22,18.2,40.2,40.2,40.7c8.8,0.2,17.6,0.1,26.4,0.1c129.9,0,259.9,0,389.8,0c2.2,0,4.5,0,7.5,0
                           c0-2.2,0-4.2,0-6.2c0-86.8,0-173.6,0-260.4c0-1.2,0-2.4,0-3.6c0-7.5,2.8-11.4,8.3-11.4c5.4,0,8.3,3.9,8.3,11.3
                           c0,91.8,0,183.6,0,275.4c0,8.8-2.6,11.4-11.4,11.4c-141.8,0-283.7,0-425.5,0c-34.9,0-60-25.1-60-60.1c0-87.1-0.1-174.3,0-261.4
                           c0-34.4,26.4-60.4,60-59.4c29.9,0.9,54.8,25.4,55.8,55.3C124.2,188.3,123.9,197.3,123.9,206.8z M24.8,405.6
                           c27.9-22.3,55.1-22.1,82.7,0c0-2.5,0-4.4,0-6.2c0-51.9,0-103.9,0-155.8c0-20.9,0.2-41.8-0.1-62.6c-0.3-22.5-18.9-40.4-41.4-40.4
                           c-22.7,0-41.2,18.2-41.2,41.1c-0.2,73.5-0.1,147-0.1,220.5C24.6,403.2,24.7,404.1,24.8,405.6z"/>
                        <path d="M455.3,107.7c-5.6,0-10.7,0-16.2,0c0,63.2,0,126.4,0,189.9c5.2,0,10.5,0,16.2,0c0-2,0-3.9,0-5.7c0-40.7,0-81.4,0-122.1
                           c0-1.7-0.2-3.5,0.1-5.2c0.7-4.5,3.4-7.1,8-7.4c4.3-0.3,7.8,3,8.4,7.5c0.2,1.4,0.1,2.8,0.1,4.1c0,44.5,0,89-0.1,133.5
                           c0,3.5-0.7,7.2-2,10.5c-10.1,25.6-20.3,51.2-30.7,76.7c-1.1,2.7-3.2,5.5-5.6,6.9c-4.1,2.5-8.9,0-11.1-5.2
                           c-10.9-27-21.6-54-32.3-81.1c-0.8-2-1-4.4-1-6.6c0-84.4-0.1-168.7,0-253.1c0-24,18.2-42.5,41.5-42.5c23.1,0,41.2,18.4,41.3,42.1
                           c0.1,26.9,0.1,53.8,0,80.7c0,6-3.4,9.7-8.5,9.6c-4.8-0.1-7.9-3.7-8.1-9.5c0-1.6,0-3.1,0-4.7C455.3,120.4,455.3,114.3,455.3,107.7z
                           M406,107.7c0,63.6,0,126.8,0,189.8c5.6,0,10.8,0,16,0c0-63.5,0-126.5,0-189.8C416.6,107.7,411.4,107.7,406,107.7z M455,57.5
                           c1.4-12.9-1.2-23.7-13.1-30c-9.2-4.9-18.4-4-26.6,2.3c-9.2,7-10.8,16.8-9.3,27.6C422.5,57.5,438.6,57.5,455,57.5z M455,90.7
                           c0-5.7,0-10.8,0-16.1c-16.5,0-32.8,0-49.1,0c0,5.5,0,10.7,0,16.1C422.4,90.7,438.6,90.7,455,90.7z M409.6,314.5
                           c2.1,5.3,3.6,9.8,5.7,14.1c0.5,1.2,2.5,2.3,3.8,2.3c7.6,0.2,15.2,0.2,22.7,0c1.2,0,3.1-0.9,3.6-1.9c2.1-4.6,3.9-9.4,5.9-14.6
                           c-12.1,0-23.4,0-34.8,0C414.4,314.5,412.4,314.5,409.6,314.5z M422.9,347.9c2.5,6.1,4.7,11.8,7.6,18.8c2.9-7.2,5.1-12.9,7.4-18.8
                           C432.7,347.9,428.1,347.9,422.9,347.9z"/>
                        <path d="M224.2,270.7c-2.3-1-4.1-1.8-5.9-2.7c-16.9-8.7-26.1-22.6-27.8-41.3c-0.3-3.2-1-5-4-6.7c-17-9.7-17-32.9-0.2-42.9
                           c5.3-3.1,5.4-4.3,1.1-8.6c-21.8-22-28-54.7-15.6-82.7c12.5-28.3,41-45.9,72.1-44.4c11.2,0.5,21.7,3.5,31.6,8.9
                           c5.8,3.2,7.7,7.5,5.5,12.1c-2.3,4.7-7.3,5.6-13.4,2.5c-30.3-15.6-65.5-4.2-80,25.9c-11.1,23.1-5.6,51.2,13.8,67.9
                           c4.8,4.1,5.9,8.9,5.4,14.8c2.6,0,4.7,0,7.3,0c-1.6-14.2-3.1-28-4.6-41.8c-0.8-7.2-1.7-14.4-2.5-21.6c-0.8-8.2,4.6-13.1,12.1-9.7
                           c14,6.4,27.4,6.5,41.5,0.1c8.1-3.7,13.3,1.6,12.2,11c-2.3,20-4.6,40.1-6.8,60.1c-0.1,0.5,0,1,0,1.9c2.2,0,4.3,0,7.2,0
                           c-2-8.2,3.6-12.6,8.6-17.7c17.5-17.9,21.1-44.3,9.7-66.5c-0.5-0.9-1-1.8-1.5-2.7c-2.2-4.7-0.8-9.5,3.3-11.6c4.1-2.1,9.3-0.8,11.3,4
                           c3.5,8.2,7.3,16.5,8.8,25.2c4.2,25.2-3.5,46.9-21.4,65.1c-3.5,3.5-3.2,5.2,1.2,7.7c8.5,4.8,13.1,12.2,13.1,22
                           c-0.1,9.8-4.9,16.9-13.3,21.9c-1.5,0.9-3,3.2-3.1,4.9c-1.7,24.1-17.9,42.4-41.7,46.8c-1.9,0.4-4.1,1.3-5.2,2.7
                           c-14.5,18.1-33.7,27.8-56.1,32.4c-12.5,2.6-20,10.7-21.2,21.7c-1.5,13.9,9.3,26.3,23.4,26.8c5.7,0.2,11.4,0,17.1,0.1
                           c5.6,0.1,9.2,3.6,9.1,8.4c-0.1,4.7-3.6,8.1-9,8c-8.1-0.1-16.3,0.4-24.2-0.9c-18.4-3-32.2-19.1-33-37.3
                           c-0.9-19.5,10.7-36.1,29.1-41.6c7.3-2.2,14.7-3.7,21.9-6.2C209,283.2,217.1,278.1,224.2,270.7z M207.2,223.7
                           c-0.7,18,15.2,33.4,33.9,32.8c17.7-0.5,33.1-16.5,31.5-32.8C250.8,223.7,229,223.7,207.2,223.7z M239.8,206.8c13.1,0,26.2,0,39.3,0
                           c6.6,0,10.4-3,10.4-8.2c0.1-5.2-3.7-8.4-10.2-8.4c-26.2,0-52.4,0-78.7,0c-6.6,0-10.3,3-10.4,8.2c-0.1,5.2,3.7,8.4,10.2,8.4
                           C213.6,206.9,226.7,206.8,239.8,206.8z M230.8,173.4c6.3,0,12.2,0,18.3,0c2-17.9,3.9-35.6,6-55.1c-10.6,7.1-20.1,6-30.4,0.6
                           C226.9,137.9,228.8,155.5,230.8,173.4z"/>
                        <path d="M289.6,422.1c5.8,0,10.8,0,16.6,0c0-3.2,0.1-6.4,0-9.6c-0.2-4.7,2-7.7,6.3-9.7c3.7-1.7,7.5-3.5,10.7-6
                           c4.4-3.5,8.6-3.9,13.2-0.8c2.3,1.5,4.8,2.7,7.6,4.3c2.8-4.7,5.4-9.3,8.2-14.2c-3.3-1.9-6.3-3.6-9.2-5.4c-3.6-2.2-4.9-5.4-4.4-9.7
                           c0.4-4.2,0.7-8.6,0.1-12.8c-0.7-5.2,0.9-8.7,5.4-11.1c2.6-1.4,5-2.9,8-4.7c-2.8-4.8-5.4-9.4-8.1-14.3c-3.1,1.8-6,3.3-8.8,4.9
                           c-3.9,2.2-7.4,1.9-11-0.7c-3.3-2.4-6.8-4.8-10.6-6.3c-5.5-2.2-7.9-5.7-7.5-11.5c0.2-2.6,0-5.1,0-8c-5.5,0-10.7,0-16.6,0
                           c0,3.1-0.1,6.2,0,9.2c0.2,5-2.2,8-6.6,10c-3.7,1.7-7.4,3.7-10.7,6.1c-4.3,3.3-8.3,3.6-12.8,0.7c-2.3-1.5-4.8-2.7-7.7-4.4
                           c-2.7,4.7-5.4,9.2-8.3,14.2c3,1.8,5.8,3.5,8.6,5.1c4.1,2.3,5.5,5.6,5,10.4c-0.5,4.2-0.5,8.6,0,12.8c0.5,4.5-0.6,7.8-4.5,10.1
                           c-5.3,3.2-10.7,6.3-16.1,9.3c-4.5,2.4-8.9,1.2-11.3-2.7c-2.4-3.9-1.2-8.8,3.1-11.6c2.2-1.4,4.3-2.9,6.7-3.8c4.3-1.6,5.2-4.5,5-8.8
                           c-0.1-2.9-1.1-4.4-3.5-5.6c-2.8-1.4-5.4-3-8.1-4.6c-4.5-2.9-5.9-6.9-3.4-11.5c5.3-9.7,10.8-19.2,16.5-28.7c2.6-4.4,6.6-5.3,11.2-3.1
                           c2.3,1.1,4.7,2.3,6.7,3.9c3.9,3.1,7.5,2.8,10.9-0.3c1.2-1.1,2.3-2.8,2.5-4.4c0.4-3.4,0-6.9,0.2-10.3c0.2-5.3,3.2-8.6,8.3-8.7
                           c11-0.2,22.1-0.2,33.1,0c4.9,0.1,7.9,3.3,8.2,8.2c0.2,2.4,0.4,4.9,0,7.2c-0.8,5,1,8.3,5.8,9.7c1.6,0.5,3.6,0.5,5-0.1
                           c3.1-1.4,5.9-3.5,9-5.1c4.8-2.5,8.9-1.7,11.6,2.9c5.7,9.4,11.2,19,16.5,28.7c2.4,4.3,1.1,8.5-3,11.2c-2.3,1.5-4.7,3-7.2,4.1
                           c-3.5,1.6-5.1,3.8-4.8,7.9c0.2,3.1,0.9,5.1,3.8,6.4c2.6,1.2,5.1,2.8,7.6,4.4c4.7,3,6.1,7.1,3.4,11.9c-5.3,9.5-10.7,18.9-16.3,28.2
                           c-2.7,4.6-6.8,5.5-11.6,3c-2.6-1.3-5.2-2.8-7.6-4.4c-2.7-1.8-4.8-1.9-7.9-0.3c-3.7,1.9-4.5,4.3-4.4,8.1c0.2,16-0.6,16.7-16.4,16.7
                           c-7.6,0-15.2,0-22.8,0c-7.5,0-10.4-2.9-10.5-10.2c0-2.1,0-4.1,0-6.2c0-8.2-5.8-11.6-12.9-7.6c-2.7,1.5-5.3,3.2-8.1,4.5
                           c-4.3,1.9-7.9,0.5-10.2-3.3c-2.3-3.9-1.8-8,2.1-10.6c6-4,12.3-7.8,18.8-10.7c2.2-1,5.9,0.3,8.6,1.4c3.9,1.7,7.2,4.7,11.2,6.4
                           c5.2,2.1,7.7,5.5,7.3,11.1C289.5,416.2,289.6,418.9,289.6,422.1z"/>
                        <path d="M357.2,471.9c-16.2,0-32.4,0-48.6,0c-6.8,0-10.7-3.2-10.6-8.5c0.2-5.1,3.9-8,10.6-8c31.4,0,62.8,0,94.2,0
                           c13.1,0,19.4-6.3,19.5-19.2c0-4.8-0.2-9.7,0.1-14.5c0.3-4.6,3.9-7.8,8.2-7.6c4.6,0.2,7.8,2.8,8,7.3c0.3,7.6,0.7,15.3-0.4,22.7
                           c-2.5,16.6-16,27.8-32.8,27.9C389.3,472,373.2,471.9,357.2,471.9z"/>
                        <path d="M322.8,364.4c0,13.5-11.2,24.7-24.7,24.7c-13.8,0-25-11.2-24.9-25c0.1-13.5,11.2-24.6,24.7-24.7
                           C311.6,339.3,322.8,350.6,322.8,364.4z M306.2,364.1c0-4.4-3.7-8.2-8.2-8.2c-4.4,0-8.2,3.6-8.3,8c-0.1,4.7,3.8,8.6,8.4,8.5
                           C302.6,372.4,306.2,368.6,306.2,364.1z"/>
                        <path d="M181.6,413.9c13.8-0.1,25.1,11,25.2,24.7c0.1,13.5-10.9,24.8-24.4,24.9c-13.7,0.2-25.1-10.9-25.2-24.7
                           C157,425.4,168.1,414,181.6,413.9z M181.9,447c4.4,0,8.2-3.6,8.3-8c0.1-4.6-3.8-8.5-8.4-8.5c-4.4,0.1-8.1,3.8-8.1,8.3
                           C173.7,443.2,177.4,446.9,181.9,447z"/>
                        <path d="M343.1,223.4c-6.4,0-12.8,0.1-19.1,0c-5.7-0.1-9.3-3.3-9.4-8.2c-0.1-4.9,3.5-8.3,9.2-8.3c13.1-0.1,26.2-0.1,39.3,0
                           c5.7,0,9.3,3.3,9.4,8.1c0.1,4.9-3.6,8.3-9.2,8.4C356.5,223.5,349.8,223.4,343.1,223.4z"/>
                        <path d="M239.7,24.6c-4.5-0.1-8.1-4-8-8.5c0.1-4.5,4-8.1,8.5-8c4.5,0.1,8.1,4,8,8.5C248,21.1,244.2,24.7,239.7,24.6z"/>
                        <path d="M140.7,124c-4.5,0.1-8.3-3.6-8.4-8.1c-0.1-4.5,3.6-8.3,8.1-8.4c4.5-0.1,8.3,3.6,8.4,8.1C148.9,120,145.2,123.9,140.7,124z"
                           />
                        <path d="M347.6,115.5c0.1,4.5-3.5,8.3-8,8.5c-4.5,0.1-8.3-3.5-8.5-8c-0.1-4.5,3.5-8.3,8-8.5C343.6,107.3,347.4,111,347.6,115.5z"/>
                        <path d="M334.2,66.1c-0.1,4.5-3.7,8.1-8.2,8.1c-4.4,0-8.2-3.8-8.3-8.1c-0.1-4.6,4-8.5,8.6-8.4C330.8,57.9,334.3,61.6,334.2,66.1z"/>
                        <path d="M153.8,157.2c4.4-0.1,8.3,3.6,8.4,8c0.1,4.3-3.5,8.3-7.9,8.5c-4.7,0.2-8.6-3.5-8.6-8.3C145.7,160.9,149.3,157.2,153.8,157.2
                           z"/>
                        <path d="M326.1,157.2c4.5,0.1,8.1,3.7,8.1,8.2c0,4.7-3.9,8.5-8.6,8.3c-4.4-0.2-8.1-4.2-7.9-8.5C317.9,160.8,321.7,157.1,326.1,157.2
                           z"/>
                        <path d="M198.5,29.6c0.1,4.4-3.6,8.2-8,8.4c-4.4,0.1-8.3-3.6-8.5-7.9c-0.2-4.7,3.6-8.6,8.3-8.5C194.8,21.5,198.4,25.1,198.5,29.6z"
                           />
                        <path d="M289.9,37.9c-4.4,0.1-8.3-3.6-8.5-8.1c-0.1-4.5,3.5-8.3,8-8.4c4.6-0.1,8.3,3.4,8.5,8C298,33.8,294.3,37.8,289.9,37.9z"/>
                        <path d="M153.7,74.3c-4.5-0.1-8-3.8-8-8.3c0-4.5,3.7-8.2,8.1-8.2c4.6,0,8.5,4.1,8.3,8.6C162,70.7,158,74.4,153.7,74.3z"/>
                     </svg>
                     <h4>Creative Agency</h4>
                     <p>Creative brand communication partner creating aggressive designs...</p>
                     <a href="creative-agency.html">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="32.5" cy="32.5" r="32"/>
                           <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-service-slider-item">
                     <svg width="64.107" height="59.124" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M166.1,504.3c-18-2.7-31-13.6-42.8-26.5c-5.2-5.7-10.9-10.9-16.3-16.4c-26.3-26.3-52.7-52.7-79-79
                           c-24.5-24.5-24.6-58.1-0.2-82.6c11.1-11.1,22.2-22.3,33-33.1c19.7,19.7,39.2,39.1,59.3,59.2c-5.5,5.4-11.5,11.2-17.4,17
                           c-4.5,4.4-8.9,8.8-13.3,13.3c-3.2,3.3-3.8,7.9-0.8,10.9c8.9,9.2,18.1,18,27.6,27.4c1.2-3.5,2.3-6.6,3.4-9.7
                           c7.6-20.3,22.1-32.6,43.4-36.6c16.1-3,32.2-5.9,48.3-8.8c1.2-0.2,2.5-0.6,5.3-1.3c-1.7-2.3-2.6-4.4-4.2-5.4
                           c-17.7-11.8-29.3-28-34.7-48.6c-0.4-1.5-1.9-3.3-3.4-3.8c-15-5.7-22.6-16.4-22.6-32.3c0-17.8-0.1-35.6,0-53.5
                           c0.2-53.2,38.8-96.6,91.6-103.3c56.5-7.1,110.2,36,114.5,92.7c1.5,20.1,0.7,40.4,0.8,60.6c0.1,14.1,0,28.3,0,42.4
                           c0,16.6-9.9,27-26.3,26.3c-9.1-0.3-16.1,1.1-21.9,9c-3.2,4.4-8.7,7-12.9,10.7c-1.4,1.2-2.1,3-3.8,5.4c10.1,1.9,18.8,3.5,27.6,5.2
                           c9.9,1.9,20,3.3,29.8,5.7c18.8,4.5,32.1,16,38.8,34.1c6.8,18.3,12.6,37,18.8,55.6c0.1,0.4,0,0.9,0,1.9c-56.2,0-112.5,0-168.7,0
                           c-0.2,0.3-0.4,0.7-0.5,1c4,3.3,8,6.7,12.4,10.4c-16.6,14.9-31.7,28.8-47.2,42.2c-7.1,6.1-16.2,8-25.1,10.2
                           C175.1,504.3,170.6,504.3,166.1,504.3z M191.9,393.7c9.4,9.5,18.6,18.5,27.5,27.7c2.3,2.4,4.7,3.3,8,3.3
                           c51.4-0.1,102.7-0.1,154.1-0.1c1.7,0,3.4,0,5.8,0c-4-12-7.5-23.3-11.5-34.4c-5.3-14.8-16-23.7-31.5-26.6
                           c-12.9-2.4-26.2-3.7-38.7-7.3c-11.9-3.4-20-0.8-27.7,8.7c-6.7,8.3-15,15.3-22.7,23c-1.5-1.4-2.7-2.5-3.8-3.6
                           c-9.4-9.4-18.8-18.9-28.4-28.2c-1.3-1.3-4-2.2-5.8-1.9c-17.4,2.9-34.8,6-52.1,9.4c-15,2.9-25.3,11.8-30.7,26.2
                           c-1.7,4.7-3.1,9.4-4.8,14.1c-0.9,2.4-0.6,4.1,1.4,5.9c4.5,4.1,8.7,8.6,13,12.9c5.7,5.7,9.1,5.8,15.2,0.2
                           C170,413.5,180.7,403.8,191.9,393.7z M255,174.6c10.7,11.3,21.6,21.3,35.5,27.6c14,6.3,28.8,8.1,44.2,7.8c0,3.3,0,6,0,8.8
                           c2.6,1,5.1,1.9,7,2.6c0-13.6,1.7-27.1-0.3-40.1c-5.5-35.9-26.4-60.3-61.1-70.9c-34.6-10.5-65-1.3-89.9,24.9
                           c-23.3,24.4-24.5,54.9-22.2,86.4c2.5-1,4.8-1.9,7.3-2.8c0.1-2.9,0.3-5.7,0.4-9.1C208.4,211.7,234.3,199,255,174.6z M191.5,225.6
                           c0,14.3-0.5,28.1,0.1,41.8c1.2,25.2,13.2,44.2,35.8,55.2c22.1,10.8,43.9,8.5,64.3-5.2c1.5-1,2.8-2.2,4.1-3.3c-0.2-0.3-0.4-0.7-0.5-1
                           c-13.2,0-26.5,0-39.8,0c0-5.5,0-10.5,0-15.9c2.1,0,3.9,0,5.6,0c14.9,0,29.9-0.1,44.8,0.1c3.4,0,5.2-1.2,6.5-4.1
                           c4.1-8.9,6.3-18.1,6.3-27.9c0-11.9-0.1-23.8,0.1-35.6c0-3.3-1.1-4.4-4.3-4.7c-13.9-1.3-27-5.6-39-12.7c-7.1-4.3-13.7-9.4-20.9-14.4
                           C237.2,214.1,216,223.4,191.5,225.6z M41.4,309.3c-19.5,15.6-21.3,42.2-3.9,60.2c2.7,2.8,5.4,5.5,8.2,8.2
                           c32.8,32.8,65.6,65.6,98.4,98.4c17.9,17.8,45.5,16.1,60.3-2.9c-12.1-12.2-24.2-24.3-36.2-36.4c-12.1,9.5-24,8.7-35.2-2.5
                           c-17.9-17.9-36-35.7-53.7-53.9c-3.2-3.3-5.9-7.7-7.4-12c-3-8.6,0.1-16.3,5.6-22.8C65.3,333.3,53.3,321.3,41.4,309.3z M217.9,461.4
                           c3.2-3,6.4-6,9.1-8.6c-12.2-12.3-24.1-24.3-36.2-36.6c-3.2,2.9-6.5,5.9-9.5,8.7C193.7,437.2,205.6,449.1,217.9,461.4z M53.5,297
                           c12.1,12.2,24,24.2,35.6,35.9c2.7-2.6,5.5-5.2,7.8-7.3c-12-12.1-24-24-36.1-36.1C58.6,291.7,56.1,294.4,53.5,297z M233.3,342.2
                           c7.6,7.6,15.1,15.1,21.9,22c7.2-7.2,14.7-14.7,22.2-22.2C262.9,346.3,248,346.2,233.3,342.2z M342,277.4c-3.1,1.7-7.4,2.5-8.8,5
                           c-2.4,4.3-3.1,9.6-4.5,14.5C341.4,298.6,344.8,293.8,342,277.4z M175.4,237.3c-4.1,1.2-7,5.3-7.5,10.6c-0.7,6.7,1.9,11.8,7.5,14.7
                           C175.4,254,175.4,245.6,175.4,237.3z M334.9,263.2c6.1-4.2,8.3-9.4,7.5-15.7c-0.6-4.7-2.9-8.4-7.5-11.1
                           C334.9,245.6,334.9,254,334.9,263.2z"/>
                        <path d="M379.7,170.2c2.8-16.4,5.4-31.7,8.1-47.7c-6,0-11.7,0-17.5,0c-18.2,0-27.7-9.4-27.7-27.5c0-19.3,0-38.5,0-57.8
                           c0-16.3,9.9-26.2,26-26.2c35.8,0,71.6,0,107.4,0c15.8,0,25.6,9.7,25.7,25.4c0.1,20.2,0.1,40.5,0,60.7c-0.1,15.5-9.9,26-25.3,25.1
                           c-14.4-0.9-26.2,3.1-38,11.2c-17.6,12.1-36,22.8-54.1,34.1C383.1,168.2,381.9,168.9,379.7,170.2z M401.5,137.1
                           c0.9-0.1,1.2,0,1.5-0.1c9.5-5.9,19.6-11.2,28.5-18c13.3-10.1,27.6-14.5,44.2-12.7c7.6,0.8,10.3-2.5,10.3-10.3c0-19.4,0-38.8,0-58.3
                           c0-8.1-2.5-10.7-10.6-10.7c-35.5,0-70.9,0-106.4,0c-7.8,0-10.3,2.5-10.3,10.4c0,19.4,0,38.8,0,58.3c0,8.5,2.3,10.7,10.9,10.7
                           c12.2,0,24.3,0,37,0C404.9,116.8,403.2,126.7,401.5,137.1z"/>
                        <path d="M55.1,207.7c7.4-4.4,14.1-8.4,21-12.5c2.8,4.6,5.3,8.8,8.1,13.6c-15.6,9.4-30.9,18.6-46.6,28c-9.3-15.5-18.5-30.7-27.9-46.5
                           c4.4-2.7,8.7-5.3,13.5-8.3c4.9,8.2,9.8,16.1,14.9,24.6C70.5,72.2,209,7.9,321,45.2c-1.5,4.8-3,9.6-4.4,14.4
                           C192.7,20.5,76.6,106.8,55.1,207.7z"/>
                        <path d="M451.2,190.5c-5.1,8.5-9.5,15.7-14.2,23.4c-4.5-2.7-8.9-5.3-13.6-8.1c9.4-15.6,18.6-31,27.9-46.6
                           c15.6,9.4,30.8,18.5,46.5,27.9c-2.7,4.5-5.3,8.9-8.1,13.7c-7.6-4.5-15-8.9-22.9-13.6c22.8,77,10,146.9-38.2,210.8
                           c-1.2-0.8-1.9-1.2-2.5-1.7c-3.2-2.6-6.5-5.2-10-8.1C461.1,328.6,473.1,263.3,451.2,190.5z"/>
                        <path d="M469.7,43.2c0,5,0,9.9,0,15.2c-31.7,0-63.1,0-94.9,0c0-5,0-9.9,0-15.2C406.3,43.2,437.9,43.2,469.7,43.2z"/>
                        <path d="M437.9,74.9c0,5.2,0,10.1,0,15.4c-21.1,0-42.1,0-63.2,0c0-5.3,0-10.2,0-15.4C395.7,74.9,416.5,74.9,437.9,74.9z"/>
                        <path d="M469.6,90.4c-5.2,0-10,0-15.2,0c0-5.1,0-10,0-15.3c4.9,0,9.9,0,15.2,0C469.6,80.1,469.6,85.1,469.6,90.4z"/>
                     </svg>
                     <h4>Post Sales Services</h4>
                     <p>Get a value-oriented walkthrough from pre-sale and property...</p>
                     <a href="post-sales-services.html">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="32.5" cy="32.5" r="32"/>
                           <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="m-swiper-arrow m-service-slider-arrow">
            <div class="swiper-button-next">
               <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                  <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </div>
            <div class="swiper-button-prev">
               <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                  <path d="M41 33H23M23 33L31.5 24M23 33L31.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Ends: Section 5-->
<!-- Section 6-->
<div class="m-section m-section--6">
   <div class="m-partner">
      <div class="m-partner-image">
         <img src="img/partner-bg.png" alt="Real Estate Property">
      </div>
      <div class="m-partner-container">
         <div class="m-caption__primary__text">
            <div class="text-revel-box">
               <h3 class="text-revel-3">Meet our <span class="text-primary">co-visionaries</span></h3>
            </div>
            <div class="m-section__content__desc">
               <p>With our zest for perfection, we have garnered trust and established long term partnerships with reputed real estate developers.</p>
            </div>
         </div>
         <div class="m-partner-list">
            <a href="#!"><img src="img/partner1.png" alt="Assotech"></a>
            <a href="#!"><img src="img/partner2.png" alt="Evos"></a>
            <a href="#!"><img src="img/partner3.png" alt="Group G"></a>
            <a href="#!"><img src="img/partner4.png" alt="Utkal Builders"></a>
         </div>
         <div class="m-partner-list">
            <a href="#!"><img src="img/partner5.png" alt="Stalwart"></a>
            <a href="#!"><img src="img/partner6.png" alt="Saswat"></a>
            <a href="#!"><img src="img/partner7.png" alt="Trident"></a>
            <a href="#!"><img src="img/partner8.png" alt="Khushi"></a>
         </div>
         <div class="m-partner-list">
            <a href="#!"><img src="img/partner9.png" alt="Avinash"></a>
            <a href="#!"><img src="img/partner10.png" alt="Aman Shikhar Green City"></a>
            <a href="#!"><img src="img/mapple-tree.png" alt="Aman Shikhar Green City"> </a>
            <a href="#!"> </a>
         </div>
         <!-- <a class="m-btn-arrow" href="#!">
            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
            	<circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
            	<path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Know More
            </a> -->
      </div>
   </div>
</div>
<!-- Ends: Section 6-->
<!-- Section 7 (testimonial)-->
<div class="m-section m-section--7">
   <div class="m-container">
      <div class="m-caption__primary__text">
         <div class="text-revel-box">
            <h3 class="text-revel-3">Developer’s <span class="text-primary">Feedback</span></h3>
         </div>
      </div>
      <div class="m-testimonial">
         <div class="swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="m-testimonial-item">
                     <div class="m-testimonial-by">
                        <div class="m-testimonial-by-img"><img src="img/client1.png" alt="Ashish Garg"></div>
                        <div class="m-testimonial-by-name">
                           <h5>Ashish Garg</h5>
                           <span>Director, Group G</span>
                        </div>
                     </div>
                     <div class="m-testimonial-text">
                        <p>Team Capdeal has done a phenomenal job in helping us achieve 900cr project sales in a short span! Capdeal's abundant experience in sales and marketing was a great asset for our project. Look forward to a long term association with Capdeal.</p>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-testimonial-item">
                     <div class="m-testimonial-by">
                        <div class="m-testimonial-by-img"><img src="img/client2.png" alt="Sharad Baid"></div>
                        <div class="m-testimonial-by-name">
                           <h5>Sharad Baid</h5>
                           <span>Managing Director, Utkal Builders</span>
                        </div>
                     </div>
                     <div class="m-testimonial-text">
                        <p>After being in the real estate industry for more than two decades, for the first time I have felt that our organisation can work with a real estate brokerage firm because of their professionalism and transparency. We look forward to a fruitful association with team Capdeal in the coming years.</p>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-testimonial-item">
                     <div class="m-testimonial-by">
                        <div class="m-testimonial-by-img"><img src="img/client4.png" alt="Kalinga Keshari Rath"></div>
                        <div class="m-testimonial-by-name">
                           <h5>Kalinga Keshari Rath</h5>
                           <span>Managing Director, Evos Buildcon</span>
                        </div>
                     </div>
                     <div class="m-testimonial-text">
                        <p>Team Capdeal has a flair for looking beyond what is in plain sight. The greatest value they get to the table is their out-of-the-box thinking approach which creates multiple options to fulfill the objectives of both the parties for a win-win solution. I have known them for a good time and they represent the best in class in the industry. </p>
                        <p>I wish them all success and look forward to our continuing partnership.</p>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-testimonial-item">
                     <div class="m-testimonial-by">
                        <div class="m-testimonial-by-img"><img src="img/client5.png" alt="Sanjeev Srivastva"></div>
                        <div class="m-testimonial-by-name">
                           <h5>Sanjeev Srivastva</h5>
                           <span>Managing Director, Assotech</span>
                        </div>
                     </div>
                     <div class="m-testimonial-text">
                        <p>I have known Sakti from Assotech Cosmopolis days when he was leading the sales team and he has now evolved into an industry expert. It is noteworthy to see him grow in his stature professionally to become one of the respected dealmakers in the real estate space. Today, he is credited with some of the landmark deals in the real estate industry.</p>
                        <p>I wish team Capdeal all the very best and am confident they will create new milestones in the years to come.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Ends: Section 7-->
<!-- Section 8-->
<div class="m-section m-section--8">
   <div class="m-container">
      <div class="m-caption__primary__text">
         <div class="text-revel-box">
            <h3 class="text-revel-3">Our Project <span class="text-primary">Portfolio</span></h3>
         </div>
         <div class="m-section__content__desc">
            <p>Capdeal has cemented its position as #1 realty and force to reckon with. Explore our milestones and achievements that have helped shape our story.</p>
         </div>
      </div>
      <div class="m-swiper-arrow m-work-slider-arrow">
         <div class="swiper-button-next">
            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
               <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
               <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </div>
         <div class="swiper-button-prev">
            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
               <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
               <path d="M41 33H23M23 33L31.5 24M23 33L31.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </div>
      </div>
      <div class="m-work-slider">
         <div class="swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="m-work-slider-item">
                     <div class="m-work-slider-item-media">
                        <img src="img/projects/pro-cosmo.jpg" alt="Cosmopolis">
                     </div>
                     <div class="m-work-slider-item-content">
                        <h4>Cosmopolis <span class="text-primary"></span></h4>
                        <p><strong>The First Lifestyle Township in Odisha-</strong> Capdeal delivered record-breaking secondary sales.</p>
                        <a class="m-btn-arrow" href="cosmopolis.html">
                           <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                              <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           Know More
                        </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-work-slider-item">
                     <div class="m-work-slider-item-media">
                        <img src="img/projects/pro-pride.jpg" alt="Assotech Pride">
                     </div>
                     <div class="m-work-slider-item-content">
                        <h4>Assotech Pride<span class="text-primary"></span></h4>
                        <p><strong>The Biggest Project in Bhubaneswar-</strong> Capdeal is its exclusive sales partner.</p>
                        <a class="m-btn-arrow" href="assotech-pride.html">
                           <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                              <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           Know More
                        </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-work-slider-item">
                     <div class="m-work-slider-item-media">
                        <img src="img/projects/pro-grand_awaas.jpg" alt="Group G">
                     </div>
                     <div class="m-work-slider-item-content">
                        <h4>Group G<span class="text-primary"></span></h4>
                        <p><strong>The Largest Integrated Township of Odisha-</strong> Capdeal performed exceptionally well during the peak of the pandemic.</p>
                        <a class="m-btn-arrow" href="group-g.html">
                           <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                              <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           Know More
                        </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="m-work-slider-item">
                     <div class="m-work-slider-item-media">
                        <img src="img/projects/pro-sea_rose.jpg" alt="Evos Sea Roses">
                     </div>
                     <div class="m-work-slider-item-content">
                        <h4>Evos Sea Roses<span class="text-primary"></span></h4>
                        <p><strong>A Sea-facing Luxury Project at Puri-</strong> Capdeal delivered exceptional work in record time.</p>
                        <a class="m-btn-arrow" href="evos-sea-roses.html">
                           <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="32.5" cy="32.5" r="32" stroke="#4A4A49"/>
                              <path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           Know More
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Ends: Section 8-->
<!-- Section 9-->
<!-- Ends: Section 9-->
<!-- Section 10-->
<!-- Ends: Section 10-->
<!-- Section 12-->
<!-- Ends: Section 12-->
<!-- Section 13-->
<div class="m-section m-section--13">
   <div class="m-container">
      <div class="m-cta">
         <h3>Know how can we<br>give your business momentum.</h3>
         <button class="m-btn btn-transform-business">Transform My Business</button>
      </div>
   </div>
</div>
<!-- Ends: Section 13-->
<?php include './includes/footer.php'?>
<script>
   $(".next-section").on("click", function(){$('html, body').animate({scrollTop: $('.m-section--2').offset().top}, 'slow');});
   
   // Banner Slider
   var swiper = new Swiper(".m-top-banner", {
   	spaceBetween: 0,
   	effect: "fade",
   	autoplay: {
   	    delay: 5000,
   	  },
   	pagination: {
   	  el: ".m-top-banner .swiper-pagination",
   	  clickable: true,
   	},
   });
   
   
   // Section 3
   var swiper = new Swiper(".m-statistics-figure .swiper", {
       direction: "vertical",
       loop: true,
       autoplay: {
         delay: 2500
       }
   });
   
   // section4 slider
   var swiper = new Swiper(".m-profile-slider-right .swiper", {
       spaceBetween: 10,
       allowTouchMove: false,
       // effect: "fade",
       watchSlidesProgress: true
     });
     var swiper2 = new Swiper(".m-profile-slider-left .swiper", {
       spaceBetween: 10,
       navigation: {
         nextEl: ".m-profile-slider .swiper-button-next",
         prevEl: ".m-profile-slider .swiper-button-prev"
       },
       thumbs: {
         swiper: swiper
       }
   });
   
   // Section 5
    var swiper = new Swiper(".m-service-slider .swiper", {
       slidesPerView: 1,
       spaceBetween: 30,
       navigation: {
         nextEl: ".m-service-slider-arrow .swiper-button-next",
         prevEl: ".m-service-slider-arrow .swiper-button-prev"
       },
       breakpoints: {
         480: {
         	slidesPerView: 2,
           spaceBetween: 20,
         },
         1024: {
         	slidesPerView: 3,
           spaceBetween: 40,
        	},
        	1200: {
         	slidesPerView: 4,
           spaceBetween: 50,
        	},
        	1680: {
        		slidesPerView: 5,
           spaceBetween: 80,
        	},
        }
   });
   
   // Section 7
   var swiper = new Swiper(".m-testimonial .swiper", {
       slidesPerView: 2,
       spaceBetween: 50,
       grabCursor: true,
       autoplay: {
         delay: 10000
       },
       breakpoints: {
         320: {
         	slidesPerView: 1,
           spaceBetween: 20,
         },
         1024: {
         	slidesPerView: 2,
           spaceBetween: 40,
        	},
        }
   });
   
   // Section 8
   var swiper = new Swiper(".m-work-slider .swiper", {
       slidesPerView: 1,
       spaceBetween: 20,
       navigation: {
         nextEl: ".m-work-slider-arrow .swiper-button-next",
         prevEl: ".m-work-slider-arrow .swiper-button-prev"
       },
       breakpoints: {
         576: {
         	slidesPerView: "auto",
           spaceBetween: 20,
         },
         1024: {
         	slidesPerView: "2",
           spaceBetween: 40,
        	},
        	1366: {
        		slidesPerView: "3",
           spaceBetween: 80,
        	},
        }
   });
   
   
   // Section 9
   var tabHandle = new Swiper(".m-location-slider-tabs .swiper", {
       spaceBetween: 0,
       slidesPerView: 3,
       watchSlidesProgress: true
     });
     var tabContent = new Swiper(".m-location-slider .swiper", {
       spaceBetween: 0,
       thumbs: {
         swiper: tabHandle
       }
   });
   
   
   // Section 10
   var swiper = new Swiper(".m-news-slider .swiper", {
       slidesPerView: 1,
       spaceBetween: 20,
       navigation: {
         nextEl: ".m-news-slider-arrow .swiper-button-next",
         prevEl: ".m-news-slider-arrow .swiper-button-prev"
       },
       breakpoints: {
         320: {
         	slidesPerView: 1,
           spaceBetween: 20,
         },
         768: {
         	slidesPerView: 2,
           spaceBetween: 30,
         },
         1024: {
         	slidesPerView: "auto",
           spaceBetween: 50,
        	},
        	1680: {
        		slidesPerView: "auto",
           spaceBetween: 90,
        	},
        }
   });
   
   // Section 11: Video Control
   $('.m-video__file').parent().click(function () {
     if($(this).children(".m-video__file").get(0).paused){
     		$(this).children(".m-video__file").get(0).play();   
     		$(this).children(".m-video-holder .m-video__play-btn").fadeOut();
         	$(this).children(".m-video__thumb").fadeOut();
       }
       else{       
       // 	$(this).children(".video").get(0).pause();
     		// $(this).children(".m-video-section__media .m-section__link").fadeIn();
       }
   });
   
   // Section 12
   var swiper = new Swiper(".m-blog-slider .swiper", {
       slidesPerView: 3,
       // loop: true,
       spaceBetween: 20,
       navigation: {
         nextEl: ".m-blog-slider-arrow .swiper-button-next",
         prevEl: ".m-blog-slider-arrow .swiper-button-prev"
       },
       breakpoints: {
         320: {
         	slidesPerView: 1,
           spaceBetween: 20,
         },
         430: {
         	slidesPerView: 2,
           spaceBetween: 30,
         },
         1024: {
         	slidesPerView: 3,
           spaceBetween: 50,
        	},
        	1680: {
           spaceBetween: 100,
        	},
        }
   });
   
   
   
   	
</script>
<script>
   // Get the modal
   const modal = document.getElementById("modal");
   
   // Get the close button (x icon)
   const closeBtn = document.querySelector(".close");
   
   // Function to display the modal on page load
   window.onload = function() {
     modal.style.display = "block";
   };
   
   // Function to close the modal when the x icon is clicked
   closeBtn.onclick = function() {
     modal.style.display = "none";
   };
   
   // Close the modal when user clicks outside of the modal content
   window.onclick = function(event) {
     if (event.target == modal) {
       modal.style.display = "none";
     }
   };
</script>
</body>
<!-- Mirrored from capdeal.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 04:17:26 GMT -->
</html>