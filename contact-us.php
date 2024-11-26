<?php include './includes/links.php'?>
<?php include './includes/header.php'?>
	

	

	
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

			<div class="m-inner-page-banner">
				<img src="img/contact-banner.jpg" alt="Contact Banner">
				<div class="m-page-title">
					<h2>Contact Us</h2>
				</div>
			</div>
			<div class="m-inner-page-content m-contact-us">
				<div class="m-about-sec1">
		          <h3 class="text-revel-3">Send us a <span class="text-primary">message</span></h3>
		          <!-- <p>Thank you for visiting Peach online. <br>Please contact us and let us know how we can help you move forward!</p> -->
		        </div>
				
				<div class="m-container">
					<form method="post">	
						<div class="m-contact-container">
							<div class="m-contact-form">
								<div class="m-input-group m-input-half">
									<input type="text" name="contactFName" id="contactFName" class="m-input-field" placeholder="First name *" required>
								</div>
								<div class="m-input-group m-input-half">
									<input type="text" name="contactLName" id="contactLName" class="m-input-field" placeholder="Surname *" required>
								</div>
								<div class="m-input-group m-input-half">
									<input type="text" name="contactNumber" id="contactNumber" class="m-input-field" placeholder="Phone number *" required>
								</div>
								<div class="m-input-group m-input-half">
									<input type="email" name="contactEmail" id="contactEmail" class="m-input-field" placeholder="Email address *" required>
								</div>
								<div class="m-input-group m-input-full">
									<textarea class="m-input-textarea" name="contactComment" id="contactComment" rows="7" placeholder="Additional details"></textarea>
								</div>

								<div class="m-form-submit">
									<svg width="65" height="65" viewBox="0 0 65 65" fill="none">
										<circle cx="32.5" cy="32.5" r="32" stroke="#fff"></circle>
										<path d="M23 33H41M41 33L32.5 24M41 33L32.5 41.5" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<span>Send Message</span>
									<input type="submit" name="mbtnsubmit" id="mbtnsubmit" value="Send Message">
								</div>
							</div>

							<div class="m-contact-address">
								<h1>Real Estate Service Provider</h1><br>
								<div class="m-contact-addresses">
									<div class="m-contact-address-item">
										<h6>Head Office:</h6>
										<span>Plot No: 108/3607, 1st Floor,</span>
										<span>Opp. Pal Heights Gate No. 3,</span>
										<span>Jaydev Vihar, Bhubaneswar, Odisha, 751013</span>
										<span>Call: <a href="tel:+91 7969451111"><strong>+91 7969451111</strong> </a></span>
									</div>
									
									<div class="m-contact-address-item">
										<h6>Ranchi Office:</h6>
										<span>3rd Floor, Pancharatna Square,</span>
										<span>Beside Bihar Club, Court Road,</span>
										<span>Ranchi, Jharkhand, 834001</span>
										<span>Call: <a href="tel:+91 7969451122"><strong>+91 7969451122</strong> </a></span>
									</div>
									
									<div class="m-contact-address-item">
										<a href="raipur/index.html"><h6>Raipur Office:</h6></a>
										<span>Unit No: 4027, 4th Floor, Currency</span>
										<span>Tower, VIP road, Telibandha, Raipur,</span>
										<span>Chhattisgarh, 492001</span>
										<span>Call: <a href="tel:+91 7969451133"><strong>+91 7969451133</strong> </a></span>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="m-contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.051563495967!2d85.82049231532474!3d20.298132717692575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a7bd57076c83%3A0xb22467edab3fd9a8!2sCapdeal%20Realty%20Care%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1661233050576!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

			</div>
      <?php include './includes/footer.php'?>


<script>
var swiper = new Swiper(".m-profile-slider-right .swiper", {
    spaceBetween: 10,
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

var swiper = new Swiper(".m-award-slider .swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: ".m-about-sec4 .m-news-slider-arrow .swiper-button-next",
      prevEl: ".m-about-sec4 .m-news-slider-arrow .swiper-button-prev"
    },
    breakpoints: {
      320: {
      	slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
      	slidesPerView: 2,
      },
    1024: {
      	slidesPerView: 3,
      	spaceBetween: 40,
    	},
 	1680: {
 		slidesPerView: 4,
 		spaceBetween: 60,
 		},
    }
});

</script>



</body>

<!-- Mirrored from capdeal.io/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 04:17:33 GMT -->
</html>