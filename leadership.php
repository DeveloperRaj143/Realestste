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
				<img src="img/leader-banner.png" alt="Leader Banner">
				<div class="m-page-title">
					<h2>Leadership</h2>
				</div>
			</div>
			<div class="m-inner-page-content m-leader">
				<div class="m-about-sec1">
					<p>Led by passionate problem-solvers and backed by experienced professionals from the real estate sector, we are dedicated to becoming the most trusted place to find the perfect space to buy, sell or rent.</p>
				</div>
				
			<div class="m-section m-section--4">
				<div class="m-container">
					<div class="m-profile-list">
						<div class="m-profile-slider">
							<div class="m-profile-slider-left">
								<div class="m-profile-content">
			                        <h4>Sakti Mishra</h4>
			                        <h5>Co-founder & CEO</h5>
			                        <div class="m-section__content__desc">
			                        	<p>Sakti Mishra is the Founder and CEO of Capdeal-Easy Real Estate. He has over 2 decades of experience in real estate markets and is a trusted adviser to developers, occupiers and investors. He is widely acknowledged for revolutionising the sector with his visionary outlook and technology-based solutions.</p>
			                        	<p>He set up Capdeal in 2015 and under his leadership Capdeal is now the undisputed leading name in real estate services in Odisha.</p>
			                        </div>
			                    </div>
			                </div>
			                <div class="m-profile-slider-right">
			                    <div class="swiper-slide">
			                        <img src="img/Sakti%20Sir.png" alt="Sakti Mishra" />
			                    </div>
			              	</div>
		                </div>
		                
		                <div class="m-profile-slider">
							<div class="m-profile-slider-left">
								<div class="m-profile-content">
		                          <h4>Sandeep Khandelwal</h4>
		                          <h5>Managing Director </h5>
		                          <div class="m-section__content__desc">
		                          	<p>"From the day we started Capdeal, our vision was to maintain a uniform standard of approach for every type of product no matter big or small. We put all our heart, thoughts, and ideas into making every real estate transaction fruitful. And I am proud to say that we have been extremely successful in doing that."</p>
		                          	<p> </p>
		                          </div>
			                    </div>
			                </div>
			                <div class="m-profile-slider-right">
			                    <div class="swiper-slide">
			                        <img src="img/SANDEEP%20KHANDELWA.png" alt="SANDEEP KHANDELWA" />
			                    </div>
			              	</div>
		                </div>

		                <div class="m-profile-slider">
							<div class="m-profile-slider-left">
								<div class="m-profile-content">
			                        <h4>Bichimala Mishra</h4>
		                            <h5>Co-founder &amp; President</h5>
		                            <div class="m-section__content__desc">
		                                <p>Bichimala Mishra is the Co-founder and CIO of Capdeal- Easy Real Estate. She always had a driving fantasy to create a team truly passionate about providing quality real estate services. From the day of Capdeal’s inception, the primary vision was to maintain a uniform standard of approach for every type of product no matter big or small.</p>
		                                <p>The team at Capdeal puts all their heart, thoughts and ideas into making every real estate transaction fruitful.</p>
		                            </div>
			                    </div>
			                </div>
			                <div class="m-profile-slider-right">
			                    <div class="swiper-slide">
			                        <img src="img/bichimala.png" alt="Bichimala Mishra" />
			                    </div>
			              	</div>
		                </div>

		                <div class="m-profile-slider">
							<div class="m-profile-slider-left">
								<div class="m-profile-content">
		                          <h4>Shivashis Sahu</h4>
		                          <h5>Co-founder &amp; COO </h5>
		                          <div class="m-section__content__desc">
		                          	<p>From the beginning, Capdeal’s approach to conducting real estate transactions had to be ethical and responsible. As the team size increased with time, we always tried to focus on why we started in the first place. Shivashis possesses a combination of sales, operational expertise and strategy development turning around slow-performing businesses.</p>
		                          	<p>Shivashis states that the goal is not limited to buying, selling and renting but to building an everlasting relationship with the clients.</p>
		                          </div>
			                    </div>
			                </div>
			                <div class="m-profile-slider-right">
			                    <div class="swiper-slide">
			                        <img src="img/shivasis.png" alt="Shivashis Sahu" />
			                    </div>
			              	</div>
		                </div>
		                
		                

		                <div class="m-profile-slider">
							<div class="m-profile-slider-left">
								<div class="m-profile-content">
			                        <h4>Mr. Akhil Kumar Dehury</h4>
		                            <h5>Co-founder & Executive Director - CRM + Revenue</h5>
		                            <div class="m-section__content__desc">
		                            	<p>We do our work right. We continue to learn. Moving forward with discipline and in a transparent manner helps achieve success.</p>
		                            </div>
			                    </div>
			                </div>
			                <div class="m-profile-slider-right">
			                    <div class="swiper-slide">
			                        <img src="img/Akhil%20Sir.png" alt="Akhil Kumar Dehury" />
			                    </div>
			              	</div>
		                </div>

		                <div class="m-profile-slider">
							<div class="m-profile-slider-left">
								<div class="m-profile-content">
			                        <h4>Aakaash Mishra</h4>
		                            <h5>Co-founder & Vice President - Sales + Operations </h5>
		                            <div class="m-section__content__desc">
		                            	<p>It is essential to have trusting and dedicated people in the core team. Our multidisciplinary team has always been in tune with each other. It is what helped us to move forward.</p>
		                            </div>
			                    </div>
			                </div>
			                <div class="m-profile-slider-right">
			                    <div class="swiper-slide">
			                        <img src="img/Aakaash%20Sir.png" alt="Aakash Mishra"/>
			                    </div>
			              	</div>
		                </div>

	                </div>
				</div>
			</div>

			</div>

		<div class="m-section m-about-sec4 widget">
	<div class="m-container">
		<div class="m-caption__primary__text">
              <div class="text-revel-box"><h3 class="text-revel-3">Timeline</h3></div>
              <div class="m-section__content__desc">
                  <p>We’ll let our stories speak for themselves. Browse our press releases below or reach out to the team for a warm introduction.</p>
              </div>
        </div>

          <div class="m-news-slider m-award-slider">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="m-news-slider-item">
                      	<div class="m-news-slider-item-media">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="52.889" viewBox="0 0 53 52.889">
						  <defs>
						    <clipPath id="clip-path">
						      <rect id="Rectangle_36" data-name="Rectangle 36" width="53" height="52.889" transform="translate(0 -4)" />
						    </clipPath>
						  </defs>
						  <g id="award1" transform="translate(0 4)">
						    <g id="Group_180" data-name="Group 180" clip-path="url(#clip-path)">
						      <path id="Path_22972" data-name="Path 22972" d="M4.526,12.933c.912-1.438,2.356-2.1,3.805-3.062-.016.444-.009.731-.038,1.015a4.977,4.977,0,0,1-1.946,3.692,7.072,7.072,0,0,1-1.209.605.834.834,0,0,0-.561.979c.126.814.2,1.637.331,2.458.538-1.654,1.8-2.772,2.782-4.189A5.94,5.94,0,0,1,6.211,20.9c-.623.5-.691.693-.44,1.452.281.85.582,1.694.952,2.533-.067-1.915.915-3.487,1.513-5.214.114.053.209.066.233.114a7.216,7.216,0,0,1,.476,6.375,6.713,6.713,0,0,1-.542.86A1.138,1.138,0,0,0,8.351,28.3c.513.831,1.039,1.655,1.619,2.469-.477-2.034.047-3.988.277-5.961l.172-.065a11.4,11.4,0,0,1,.833,1.144,7.13,7.13,0,0,1,.851,5.973,1.653,1.653,0,0,0,.513,2.054c.7.564,1.337,1.214,2.05,1.8-1.081-1.852-1.127-3.921-1.467-6.1a6.181,6.181,0,0,1,.553.338A7.638,7.638,0,0,1,16.93,36.4a1.371,1.371,0,0,0,.869,1.485c.631.271,1.23.618,1.878.881-1.336-1.557-1.831-3.5-2.718-5.355a1.88,1.88,0,0,1,.491.021,7.309,7.309,0,0,1,4.695,5.334c.189.815.388,1.137,1.218,1.233.878.1,1.749.264,2.646.344-1.846-.952-2.823-2.7-4.091-4.17l.08-.227a13.34,13.34,0,0,1,2.013.248A5.886,5.886,0,0,1,27.75,39.1c.673,1.218.683,1.224,2.044.987.608-.106,1.206-.266,1.839-.408.16.491.083.782-.455.874-.557.1-1.1.242-1.658.357a.9.9,0,0,0-.826.9,3.184,3.184,0,0,1-1.509,2.352,7.255,7.255,0,0,1-3.661,1.395,6.227,6.227,0,0,1-1.108-.091A6.292,6.292,0,0,1,26.3,41.145c-1.046-.147-2.02-.31-3-.4a.763.763,0,0,0-.609.384,3.1,3.1,0,0,1-2.238,1.907,6.776,6.776,0,0,1-4.5-.039,3.227,3.227,0,0,1-.38-.206,6.045,6.045,0,0,1,4.971-2.913c-.35-.144-.705-.274-1.047-.434-.547-.255-1.087-.529-1.628-.8a.939.939,0,0,0-1.295.2,2.75,2.75,0,0,1-2.206.852A7.644,7.644,0,0,1,9.9,38.124a2.518,2.518,0,0,1-.361-.358.823.823,0,0,1-.1-.191,6.35,6.35,0,0,1,5.573-.738c-.249-.2-.5-.388-.746-.594q-1.012-.862-2.014-1.734a1.173,1.173,0,0,0-1.417-.243,2.9,2.9,0,0,1-1.747.123,8.877,8.877,0,0,1-4.7-3.084,3.507,3.507,0,0,1-.278-.485,5.283,5.283,0,0,1,3.1-.016c.965.289,1.885.731,2.67,1.045-.461-.7-1.023-1.545-1.586-2.392A1.275,1.275,0,0,0,6.958,28.8a3.184,3.184,0,0,1-1.81-.481,10.276,10.276,0,0,1-3.834-4.291,3.765,3.765,0,0,1-.167-.542,6.147,6.147,0,0,1,3.07.9c.874.559,1.667,1.244,2.394,1.8-.3-.7-.636-1.561-1.045-2.379a1.305,1.305,0,0,0-.718-.662c-1.987-.456-3-1.93-3.825-3.587a20.532,20.532,0,0,1-.872-2.206A5.257,5.257,0,0,1,0,16.467a7.423,7.423,0,0,1,4.594,3.985c-.144-.871-.258-1.748-.446-2.609a1.389,1.389,0,0,0-.8-.884,3.892,3.892,0,0,1-1.427-1.138A10.446,10.446,0,0,1,.23,10.376,5.126,5.126,0,0,1,.3,9.745a8.487,8.487,0,0,1,3.666,4.788c.054-1,.138-1.994.142-2.991a.931.931,0,0,0-.415-.7A3.9,3.9,0,0,1,1.82,7.95a8.126,8.126,0,0,1,.185-4.306,3.733,3.733,0,0,1,.191-.4A9.29,9.29,0,0,1,4.532,8.837c.263-.853.545-1.749.811-2.65a.536.536,0,0,0-.022-.374,2.969,2.969,0,0,1,.172-3.129,26.012,26.012,0,0,1,2-2.592c.04-.05.127-.062.191-.092.812,1.624.261,4.508-1.173,5.569A3.829,3.829,0,0,0,5.28,7.945,7.932,7.932,0,0,1,9.286,5.968a4.284,4.284,0,0,1-.8,2.354,3.979,3.979,0,0,1-2.827,1.789c-.784.1-.9.25-.982,1.038-.059.594-.1,1.189-.15,1.783" transform="matrix(0.966, 0.259, -0.259, 0.966, 6.436, -3.327)" />
						      <path id="Path_22973" data-name="Path 22973" d="M199.626,12.933c-.912-1.438-2.356-2.1-3.805-3.062.016.444.009.731.038,1.015a4.977,4.977,0,0,0,1.947,3.692,7.071,7.071,0,0,0,1.209.605.834.834,0,0,1,.561.979c-.126.814-.2,1.637-.332,2.458-.538-1.654-1.8-2.772-2.782-4.189a5.94,5.94,0,0,0,1.478,6.47c.623.5.691.693.44,1.452-.281.85-.582,1.694-.951,2.533.067-1.915-.915-3.487-1.513-5.214-.114.053-.209.066-.233.114a7.216,7.216,0,0,0-.476,6.375,6.714,6.714,0,0,0,.542.86A1.137,1.137,0,0,1,195.8,28.3c-.513.831-1.039,1.655-1.618,2.469.477-2.034-.048-3.988-.278-5.961l-.172-.065a11.4,11.4,0,0,0-.833,1.144,7.132,7.132,0,0,0-.851,5.973,1.653,1.653,0,0,1-.513,2.054c-.7.564-1.337,1.214-2.05,1.8,1.081-1.852,1.127-3.921,1.467-6.1a6.172,6.172,0,0,0-.553.338,7.637,7.637,0,0,0-3.177,6.44,1.371,1.371,0,0,1-.869,1.485c-.631.271-1.23.618-1.878.881,1.336-1.557,1.831-3.5,2.718-5.355a1.882,1.882,0,0,0-.491.021,7.309,7.309,0,0,0-4.694,5.334c-.19.815-.388,1.137-1.218,1.233-.878.1-1.749.264-2.647.344,1.846-.952,2.823-2.7,4.091-4.17l-.08-.227a13.343,13.343,0,0,0-2.013.248A5.886,5.886,0,0,0,176.4,39.1c-.673,1.218-.683,1.224-2.044.987-.608-.106-1.206-.266-1.839-.408-.16.491-.083.782.455.874.557.1,1.1.242,1.658.357a.9.9,0,0,1,.826.9,3.184,3.184,0,0,0,1.509,2.352,7.255,7.255,0,0,0,3.661,1.395,6.228,6.228,0,0,0,1.108-.091,6.292,6.292,0,0,0-3.881-4.318c1.046-.147,2.021-.31,3-.4a.763.763,0,0,1,.609.384,3.1,3.1,0,0,0,2.238,1.907A6.776,6.776,0,0,0,188.2,43a3.257,3.257,0,0,0,.38-.206,6.045,6.045,0,0,0-4.971-2.913c.349-.144.7-.274,1.047-.434.547-.255,1.087-.529,1.628-.8a.939.939,0,0,1,1.3.2,2.749,2.749,0,0,0,2.206.852,7.644,7.644,0,0,0,4.463-1.576,2.507,2.507,0,0,0,.361-.358.817.817,0,0,0,.1-.191,6.35,6.35,0,0,0-5.573-.738c.249-.2.5-.388.746-.594q1.012-.862,2.015-1.734a1.173,1.173,0,0,1,1.417-.243,2.9,2.9,0,0,0,1.747.123,8.877,8.877,0,0,0,4.7-3.084,3.491,3.491,0,0,0,.278-.485,5.283,5.283,0,0,0-3.1-.016c-.965.289-1.885.731-2.67,1.045.461-.7,1.023-1.545,1.586-2.392a1.274,1.274,0,0,1,1.345-.653,3.184,3.184,0,0,0,1.81-.481,10.276,10.276,0,0,0,3.834-4.291A3.72,3.72,0,0,0,203,23.49a6.148,6.148,0,0,0-3.07.9c-.874.559-1.667,1.244-2.394,1.8.3-.7.636-1.561,1.045-2.379a1.3,1.3,0,0,1,.718-.662c1.987-.456,3-1.93,3.825-3.587A20.531,20.531,0,0,0,204,17.349a5.257,5.257,0,0,0,.151-.882,7.422,7.422,0,0,0-4.594,3.985c.144-.871.258-1.748.446-2.609a1.389,1.389,0,0,1,.8-.884,3.893,3.893,0,0,0,1.427-1.138,10.446,10.446,0,0,0,1.692-5.445,5.056,5.056,0,0,0-.069-.631,8.488,8.488,0,0,0-3.666,4.788c-.054-1-.138-1.994-.142-2.991a.931.931,0,0,1,.415-.7,3.9,3.9,0,0,0,1.872-2.9,8.126,8.126,0,0,0-.185-4.306,3.761,3.761,0,0,0-.191-.4,9.29,9.29,0,0,0-2.336,5.593c-.263-.853-.544-1.749-.811-2.65a.534.534,0,0,1,.022-.374,2.969,2.969,0,0,0-.172-3.129,26.014,26.014,0,0,0-2-2.592c-.039-.05-.127-.062-.191-.092-.812,1.624-.261,4.508,1.173,5.569a3.829,3.829,0,0,1,1.231,2.376,7.93,7.93,0,0,0-4.006-1.977,4.284,4.284,0,0,0,.8,2.354,3.978,3.978,0,0,0,2.827,1.789c.784.1.9.25.982,1.038.06.594.1,1.189.151,1.783" transform="matrix(0.966, -0.259, 0.259, 0.966, -150.716, 49.511)" />
						    </g>
						  </g>
						</svg>

                      	</div>
                          <h5>2023</h5>
                          <h4>In 2023, Capdeal achieved a significant milestone by expanding its team to over 110 members and forging pivotal partnerships with developers, thereby establishing a prominent presence in Eastern India's real estate landscape.</h4>
                      </div>
                  </div>    
                  <div class="swiper-slide">
                      <div class="m-news-slider-item">
                      	<div class="m-news-slider-item-media">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="52.889" viewBox="0 0 53 52.889">
						  <defs>
						    <clipPath id="clip-path">
						      <rect id="Rectangle_36" data-name="Rectangle 36" width="53" height="52.889" transform="translate(0 -4)" />
						    </clipPath>
						  </defs>
						  <g id="award1" transform="translate(0 4)">
						    <g id="Group_180" data-name="Group 180" clip-path="url(#clip-path)">
						      <path id="Path_22972" data-name="Path 22972" d="M4.526,12.933c.912-1.438,2.356-2.1,3.805-3.062-.016.444-.009.731-.038,1.015a4.977,4.977,0,0,1-1.946,3.692,7.072,7.072,0,0,1-1.209.605.834.834,0,0,0-.561.979c.126.814.2,1.637.331,2.458.538-1.654,1.8-2.772,2.782-4.189A5.94,5.94,0,0,1,6.211,20.9c-.623.5-.691.693-.44,1.452.281.85.582,1.694.952,2.533-.067-1.915.915-3.487,1.513-5.214.114.053.209.066.233.114a7.216,7.216,0,0,1,.476,6.375,6.713,6.713,0,0,1-.542.86A1.138,1.138,0,0,0,8.351,28.3c.513.831,1.039,1.655,1.619,2.469-.477-2.034.047-3.988.277-5.961l.172-.065a11.4,11.4,0,0,1,.833,1.144,7.13,7.13,0,0,1,.851,5.973,1.653,1.653,0,0,0,.513,2.054c.7.564,1.337,1.214,2.05,1.8-1.081-1.852-1.127-3.921-1.467-6.1a6.181,6.181,0,0,1,.553.338A7.638,7.638,0,0,1,16.93,36.4a1.371,1.371,0,0,0,.869,1.485c.631.271,1.23.618,1.878.881-1.336-1.557-1.831-3.5-2.718-5.355a1.88,1.88,0,0,1,.491.021,7.309,7.309,0,0,1,4.695,5.334c.189.815.388,1.137,1.218,1.233.878.1,1.749.264,2.646.344-1.846-.952-2.823-2.7-4.091-4.17l.08-.227a13.34,13.34,0,0,1,2.013.248A5.886,5.886,0,0,1,27.75,39.1c.673,1.218.683,1.224,2.044.987.608-.106,1.206-.266,1.839-.408.16.491.083.782-.455.874-.557.1-1.1.242-1.658.357a.9.9,0,0,0-.826.9,3.184,3.184,0,0,1-1.509,2.352,7.255,7.255,0,0,1-3.661,1.395,6.227,6.227,0,0,1-1.108-.091A6.292,6.292,0,0,1,26.3,41.145c-1.046-.147-2.02-.31-3-.4a.763.763,0,0,0-.609.384,3.1,3.1,0,0,1-2.238,1.907,6.776,6.776,0,0,1-4.5-.039,3.227,3.227,0,0,1-.38-.206,6.045,6.045,0,0,1,4.971-2.913c-.35-.144-.705-.274-1.047-.434-.547-.255-1.087-.529-1.628-.8a.939.939,0,0,0-1.295.2,2.75,2.75,0,0,1-2.206.852A7.644,7.644,0,0,1,9.9,38.124a2.518,2.518,0,0,1-.361-.358.823.823,0,0,1-.1-.191,6.35,6.35,0,0,1,5.573-.738c-.249-.2-.5-.388-.746-.594q-1.012-.862-2.014-1.734a1.173,1.173,0,0,0-1.417-.243,2.9,2.9,0,0,1-1.747.123,8.877,8.877,0,0,1-4.7-3.084,3.507,3.507,0,0,1-.278-.485,5.283,5.283,0,0,1,3.1-.016c.965.289,1.885.731,2.67,1.045-.461-.7-1.023-1.545-1.586-2.392A1.275,1.275,0,0,0,6.958,28.8a3.184,3.184,0,0,1-1.81-.481,10.276,10.276,0,0,1-3.834-4.291,3.765,3.765,0,0,1-.167-.542,6.147,6.147,0,0,1,3.07.9c.874.559,1.667,1.244,2.394,1.8-.3-.7-.636-1.561-1.045-2.379a1.305,1.305,0,0,0-.718-.662c-1.987-.456-3-1.93-3.825-3.587a20.532,20.532,0,0,1-.872-2.206A5.257,5.257,0,0,1,0,16.467a7.423,7.423,0,0,1,4.594,3.985c-.144-.871-.258-1.748-.446-2.609a1.389,1.389,0,0,0-.8-.884,3.892,3.892,0,0,1-1.427-1.138A10.446,10.446,0,0,1,.23,10.376,5.126,5.126,0,0,1,.3,9.745a8.487,8.487,0,0,1,3.666,4.788c.054-1,.138-1.994.142-2.991a.931.931,0,0,0-.415-.7A3.9,3.9,0,0,1,1.82,7.95a8.126,8.126,0,0,1,.185-4.306,3.733,3.733,0,0,1,.191-.4A9.29,9.29,0,0,1,4.532,8.837c.263-.853.545-1.749.811-2.65a.536.536,0,0,0-.022-.374,2.969,2.969,0,0,1,.172-3.129,26.012,26.012,0,0,1,2-2.592c.04-.05.127-.062.191-.092.812,1.624.261,4.508-1.173,5.569A3.829,3.829,0,0,0,5.28,7.945,7.932,7.932,0,0,1,9.286,5.968a4.284,4.284,0,0,1-.8,2.354,3.979,3.979,0,0,1-2.827,1.789c-.784.1-.9.25-.982,1.038-.059.594-.1,1.189-.15,1.783" transform="matrix(0.966, 0.259, -0.259, 0.966, 6.436, -3.327)" />
						      <path id="Path_22973" data-name="Path 22973" d="M199.626,12.933c-.912-1.438-2.356-2.1-3.805-3.062.016.444.009.731.038,1.015a4.977,4.977,0,0,0,1.947,3.692,7.071,7.071,0,0,0,1.209.605.834.834,0,0,1,.561.979c-.126.814-.2,1.637-.332,2.458-.538-1.654-1.8-2.772-2.782-4.189a5.94,5.94,0,0,0,1.478,6.47c.623.5.691.693.44,1.452-.281.85-.582,1.694-.951,2.533.067-1.915-.915-3.487-1.513-5.214-.114.053-.209.066-.233.114a7.216,7.216,0,0,0-.476,6.375,6.714,6.714,0,0,0,.542.86A1.137,1.137,0,0,1,195.8,28.3c-.513.831-1.039,1.655-1.618,2.469.477-2.034-.048-3.988-.278-5.961l-.172-.065a11.4,11.4,0,0,0-.833,1.144,7.132,7.132,0,0,0-.851,5.973,1.653,1.653,0,0,1-.513,2.054c-.7.564-1.337,1.214-2.05,1.8,1.081-1.852,1.127-3.921,1.467-6.1a6.172,6.172,0,0,0-.553.338,7.637,7.637,0,0,0-3.177,6.44,1.371,1.371,0,0,1-.869,1.485c-.631.271-1.23.618-1.878.881,1.336-1.557,1.831-3.5,2.718-5.355a1.882,1.882,0,0,0-.491.021,7.309,7.309,0,0,0-4.694,5.334c-.19.815-.388,1.137-1.218,1.233-.878.1-1.749.264-2.647.344,1.846-.952,2.823-2.7,4.091-4.17l-.08-.227a13.343,13.343,0,0,0-2.013.248A5.886,5.886,0,0,0,176.4,39.1c-.673,1.218-.683,1.224-2.044.987-.608-.106-1.206-.266-1.839-.408-.16.491-.083.782.455.874.557.1,1.1.242,1.658.357a.9.9,0,0,1,.826.9,3.184,3.184,0,0,0,1.509,2.352,7.255,7.255,0,0,0,3.661,1.395,6.228,6.228,0,0,0,1.108-.091,6.292,6.292,0,0,0-3.881-4.318c1.046-.147,2.021-.31,3-.4a.763.763,0,0,1,.609.384,3.1,3.1,0,0,0,2.238,1.907A6.776,6.776,0,0,0,188.2,43a3.257,3.257,0,0,0,.38-.206,6.045,6.045,0,0,0-4.971-2.913c.349-.144.7-.274,1.047-.434.547-.255,1.087-.529,1.628-.8a.939.939,0,0,1,1.3.2,2.749,2.749,0,0,0,2.206.852,7.644,7.644,0,0,0,4.463-1.576,2.507,2.507,0,0,0,.361-.358.817.817,0,0,0,.1-.191,6.35,6.35,0,0,0-5.573-.738c.249-.2.5-.388.746-.594q1.012-.862,2.015-1.734a1.173,1.173,0,0,1,1.417-.243,2.9,2.9,0,0,0,1.747.123,8.877,8.877,0,0,0,4.7-3.084,3.491,3.491,0,0,0,.278-.485,5.283,5.283,0,0,0-3.1-.016c-.965.289-1.885.731-2.67,1.045.461-.7,1.023-1.545,1.586-2.392a1.274,1.274,0,0,1,1.345-.653,3.184,3.184,0,0,0,1.81-.481,10.276,10.276,0,0,0,3.834-4.291A3.72,3.72,0,0,0,203,23.49a6.148,6.148,0,0,0-3.07.9c-.874.559-1.667,1.244-2.394,1.8.3-.7.636-1.561,1.045-2.379a1.3,1.3,0,0,1,.718-.662c1.987-.456,3-1.93,3.825-3.587A20.531,20.531,0,0,0,204,17.349a5.257,5.257,0,0,0,.151-.882,7.422,7.422,0,0,0-4.594,3.985c.144-.871.258-1.748.446-2.609a1.389,1.389,0,0,1,.8-.884,3.893,3.893,0,0,0,1.427-1.138,10.446,10.446,0,0,0,1.692-5.445,5.056,5.056,0,0,0-.069-.631,8.488,8.488,0,0,0-3.666,4.788c-.054-1-.138-1.994-.142-2.991a.931.931,0,0,1,.415-.7,3.9,3.9,0,0,0,1.872-2.9,8.126,8.126,0,0,0-.185-4.306,3.761,3.761,0,0,0-.191-.4,9.29,9.29,0,0,0-2.336,5.593c-.263-.853-.544-1.749-.811-2.65a.534.534,0,0,1,.022-.374,2.969,2.969,0,0,0-.172-3.129,26.014,26.014,0,0,0-2-2.592c-.039-.05-.127-.062-.191-.092-.812,1.624-.261,4.508,1.173,5.569a3.829,3.829,0,0,1,1.231,2.376,7.93,7.93,0,0,0-4.006-1.977,4.284,4.284,0,0,0,.8,2.354,3.978,3.978,0,0,0,2.827,1.789c.784.1.9.25.982,1.038.06.594.1,1.189.151,1.783" transform="matrix(0.966, -0.259, 0.259, 0.966, -150.716, 49.511)" />
						    </g>
						  </g>
						</svg>

                      	</div>
                          <h5>2022</h5>
                          <h4>Expansion & relaunch of the website: Capdeal set up its branch office at Ranchi and relaunched its website: www.capdeal.io</h4>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="m-news-slider-item">
                      	<div class="m-news-slider-item-media">
                        <svg id="award2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.263" height="53.283" viewBox="0 0 53.263 53.283">
						  <defs>
						    <clipPath id="clip-path">
						      <rect id="Rectangle_37" data-name="Rectangle 37" width="53.263" height="53.283" fill="#fff"/>
						    </clipPath>
						  </defs>
						  <g id="Group_186" data-name="Group 186" clip-path="url(#clip-path)">
						    <path id="Path_22974" data-name="Path 22974" d="M84.26,0a3.266,3.266,0,0,1,.167.943,123.485,123.485,0,0,1-3.137,16.321,1.286,1.286,0,0,0,.448,1.46,42.491,42.491,0,0,0,9.2,6.3.826.826,0,0,1,.53,1.04,3.461,3.461,0,0,1-.561,1.254,14.282,14.282,0,0,1-9.487,5.062,41.963,41.963,0,0,1-9.395-.159,60.245,60.245,0,0,0-10.172-.486,14.948,14.948,0,0,0-9.889,4.278,2.034,2.034,0,0,1-.181.136c-.07-.213-.139-.4-.191-.582-2.337-8.374-4.639-16.758-7.052-25.11a1.7,1.7,0,0,1,.693-2.088,14.719,14.719,0,0,1,7.7-3.376,38.179,38.179,0,0,1,8.772.055,71.918,71.918,0,0,0,10.689.585A15.046,15.046,0,0,0,83.714.094.253.253,0,0,0,83.74,0Z" transform="translate(-38.247)"/>
						    <path id="Path_22975" data-name="Path 22975" d="M0,66.778A2.367,2.367,0,0,1,2.181,65a2.149,2.149,0,0,1,2.314,1.679Q6,72,7.484,77.326q4.048,14.482,8.1,28.963a2.607,2.607,0,0,1-.012,1.771c-.353.876-2.752,1.53-3.484.96a2.316,2.316,0,0,1-.845-1.264Q8.7,98.65,6.151,89.547,3.168,78.867.186,68.186A4.781,4.781,0,0,0,0,67.714v-.937" transform="translate(0 -55.951)"/>
						  </g>
						</svg>

                      	</div>
                          <h5>2021</h5>
                          <h4>Expansion & Project: Introduction of the in-house Marketing team and got associated with Evos, Utkal, Eastern- Estate, etc</h4>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="m-news-slider-item">
                      	<div class="m-news-slider-item-media">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="52.889" viewBox="0 0 53 52.889">
						  <defs>
						    <clipPath id="clip-path">
						      <rect id="Rectangle_36" data-name="Rectangle 36" width="53" height="52.889" transform="translate(0 -4)" />
						    </clipPath>
						  </defs>
						  <g id="award1" transform="translate(0 4)">
						    <g id="Group_180" data-name="Group 180" clip-path="url(#clip-path)">
						      <path id="Path_22972" data-name="Path 22972" d="M4.526,12.933c.912-1.438,2.356-2.1,3.805-3.062-.016.444-.009.731-.038,1.015a4.977,4.977,0,0,1-1.946,3.692,7.072,7.072,0,0,1-1.209.605.834.834,0,0,0-.561.979c.126.814.2,1.637.331,2.458.538-1.654,1.8-2.772,2.782-4.189A5.94,5.94,0,0,1,6.211,20.9c-.623.5-.691.693-.44,1.452.281.85.582,1.694.952,2.533-.067-1.915.915-3.487,1.513-5.214.114.053.209.066.233.114a7.216,7.216,0,0,1,.476,6.375,6.713,6.713,0,0,1-.542.86A1.138,1.138,0,0,0,8.351,28.3c.513.831,1.039,1.655,1.619,2.469-.477-2.034.047-3.988.277-5.961l.172-.065a11.4,11.4,0,0,1,.833,1.144,7.13,7.13,0,0,1,.851,5.973,1.653,1.653,0,0,0,.513,2.054c.7.564,1.337,1.214,2.05,1.8-1.081-1.852-1.127-3.921-1.467-6.1a6.181,6.181,0,0,1,.553.338A7.638,7.638,0,0,1,16.93,36.4a1.371,1.371,0,0,0,.869,1.485c.631.271,1.23.618,1.878.881-1.336-1.557-1.831-3.5-2.718-5.355a1.88,1.88,0,0,1,.491.021,7.309,7.309,0,0,1,4.695,5.334c.189.815.388,1.137,1.218,1.233.878.1,1.749.264,2.646.344-1.846-.952-2.823-2.7-4.091-4.17l.08-.227a13.34,13.34,0,0,1,2.013.248A5.886,5.886,0,0,1,27.75,39.1c.673,1.218.683,1.224,2.044.987.608-.106,1.206-.266,1.839-.408.16.491.083.782-.455.874-.557.1-1.1.242-1.658.357a.9.9,0,0,0-.826.9,3.184,3.184,0,0,1-1.509,2.352,7.255,7.255,0,0,1-3.661,1.395,6.227,6.227,0,0,1-1.108-.091A6.292,6.292,0,0,1,26.3,41.145c-1.046-.147-2.02-.31-3-.4a.763.763,0,0,0-.609.384,3.1,3.1,0,0,1-2.238,1.907,6.776,6.776,0,0,1-4.5-.039,3.227,3.227,0,0,1-.38-.206,6.045,6.045,0,0,1,4.971-2.913c-.35-.144-.705-.274-1.047-.434-.547-.255-1.087-.529-1.628-.8a.939.939,0,0,0-1.295.2,2.75,2.75,0,0,1-2.206.852A7.644,7.644,0,0,1,9.9,38.124a2.518,2.518,0,0,1-.361-.358.823.823,0,0,1-.1-.191,6.35,6.35,0,0,1,5.573-.738c-.249-.2-.5-.388-.746-.594q-1.012-.862-2.014-1.734a1.173,1.173,0,0,0-1.417-.243,2.9,2.9,0,0,1-1.747.123,8.877,8.877,0,0,1-4.7-3.084,3.507,3.507,0,0,1-.278-.485,5.283,5.283,0,0,1,3.1-.016c.965.289,1.885.731,2.67,1.045-.461-.7-1.023-1.545-1.586-2.392A1.275,1.275,0,0,0,6.958,28.8a3.184,3.184,0,0,1-1.81-.481,10.276,10.276,0,0,1-3.834-4.291,3.765,3.765,0,0,1-.167-.542,6.147,6.147,0,0,1,3.07.9c.874.559,1.667,1.244,2.394,1.8-.3-.7-.636-1.561-1.045-2.379a1.305,1.305,0,0,0-.718-.662c-1.987-.456-3-1.93-3.825-3.587a20.532,20.532,0,0,1-.872-2.206A5.257,5.257,0,0,1,0,16.467a7.423,7.423,0,0,1,4.594,3.985c-.144-.871-.258-1.748-.446-2.609a1.389,1.389,0,0,0-.8-.884,3.892,3.892,0,0,1-1.427-1.138A10.446,10.446,0,0,1,.23,10.376,5.126,5.126,0,0,1,.3,9.745a8.487,8.487,0,0,1,3.666,4.788c.054-1,.138-1.994.142-2.991a.931.931,0,0,0-.415-.7A3.9,3.9,0,0,1,1.82,7.95a8.126,8.126,0,0,1,.185-4.306,3.733,3.733,0,0,1,.191-.4A9.29,9.29,0,0,1,4.532,8.837c.263-.853.545-1.749.811-2.65a.536.536,0,0,0-.022-.374,2.969,2.969,0,0,1,.172-3.129,26.012,26.012,0,0,1,2-2.592c.04-.05.127-.062.191-.092.812,1.624.261,4.508-1.173,5.569A3.829,3.829,0,0,0,5.28,7.945,7.932,7.932,0,0,1,9.286,5.968a4.284,4.284,0,0,1-.8,2.354,3.979,3.979,0,0,1-2.827,1.789c-.784.1-.9.25-.982,1.038-.059.594-.1,1.189-.15,1.783" transform="matrix(0.966, 0.259, -0.259, 0.966, 6.436, -3.327)" />
						      <path id="Path_22973" data-name="Path 22973" d="M199.626,12.933c-.912-1.438-2.356-2.1-3.805-3.062.016.444.009.731.038,1.015a4.977,4.977,0,0,0,1.947,3.692,7.071,7.071,0,0,0,1.209.605.834.834,0,0,1,.561.979c-.126.814-.2,1.637-.332,2.458-.538-1.654-1.8-2.772-2.782-4.189a5.94,5.94,0,0,0,1.478,6.47c.623.5.691.693.44,1.452-.281.85-.582,1.694-.951,2.533.067-1.915-.915-3.487-1.513-5.214-.114.053-.209.066-.233.114a7.216,7.216,0,0,0-.476,6.375,6.714,6.714,0,0,0,.542.86A1.137,1.137,0,0,1,195.8,28.3c-.513.831-1.039,1.655-1.618,2.469.477-2.034-.048-3.988-.278-5.961l-.172-.065a11.4,11.4,0,0,0-.833,1.144,7.132,7.132,0,0,0-.851,5.973,1.653,1.653,0,0,1-.513,2.054c-.7.564-1.337,1.214-2.05,1.8,1.081-1.852,1.127-3.921,1.467-6.1a6.172,6.172,0,0,0-.553.338,7.637,7.637,0,0,0-3.177,6.44,1.371,1.371,0,0,1-.869,1.485c-.631.271-1.23.618-1.878.881,1.336-1.557,1.831-3.5,2.718-5.355a1.882,1.882,0,0,0-.491.021,7.309,7.309,0,0,0-4.694,5.334c-.19.815-.388,1.137-1.218,1.233-.878.1-1.749.264-2.647.344,1.846-.952,2.823-2.7,4.091-4.17l-.08-.227a13.343,13.343,0,0,0-2.013.248A5.886,5.886,0,0,0,176.4,39.1c-.673,1.218-.683,1.224-2.044.987-.608-.106-1.206-.266-1.839-.408-.16.491-.083.782.455.874.557.1,1.1.242,1.658.357a.9.9,0,0,1,.826.9,3.184,3.184,0,0,0,1.509,2.352,7.255,7.255,0,0,0,3.661,1.395,6.228,6.228,0,0,0,1.108-.091,6.292,6.292,0,0,0-3.881-4.318c1.046-.147,2.021-.31,3-.4a.763.763,0,0,1,.609.384,3.1,3.1,0,0,0,2.238,1.907A6.776,6.776,0,0,0,188.2,43a3.257,3.257,0,0,0,.38-.206,6.045,6.045,0,0,0-4.971-2.913c.349-.144.7-.274,1.047-.434.547-.255,1.087-.529,1.628-.8a.939.939,0,0,1,1.3.2,2.749,2.749,0,0,0,2.206.852,7.644,7.644,0,0,0,4.463-1.576,2.507,2.507,0,0,0,.361-.358.817.817,0,0,0,.1-.191,6.35,6.35,0,0,0-5.573-.738c.249-.2.5-.388.746-.594q1.012-.862,2.015-1.734a1.173,1.173,0,0,1,1.417-.243,2.9,2.9,0,0,0,1.747.123,8.877,8.877,0,0,0,4.7-3.084,3.491,3.491,0,0,0,.278-.485,5.283,5.283,0,0,0-3.1-.016c-.965.289-1.885.731-2.67,1.045.461-.7,1.023-1.545,1.586-2.392a1.274,1.274,0,0,1,1.345-.653,3.184,3.184,0,0,0,1.81-.481,10.276,10.276,0,0,0,3.834-4.291A3.72,3.72,0,0,0,203,23.49a6.148,6.148,0,0,0-3.07.9c-.874.559-1.667,1.244-2.394,1.8.3-.7.636-1.561,1.045-2.379a1.3,1.3,0,0,1,.718-.662c1.987-.456,3-1.93,3.825-3.587A20.531,20.531,0,0,0,204,17.349a5.257,5.257,0,0,0,.151-.882,7.422,7.422,0,0,0-4.594,3.985c.144-.871.258-1.748.446-2.609a1.389,1.389,0,0,1,.8-.884,3.893,3.893,0,0,0,1.427-1.138,10.446,10.446,0,0,0,1.692-5.445,5.056,5.056,0,0,0-.069-.631,8.488,8.488,0,0,0-3.666,4.788c-.054-1-.138-1.994-.142-2.991a.931.931,0,0,1,.415-.7,3.9,3.9,0,0,0,1.872-2.9,8.126,8.126,0,0,0-.185-4.306,3.761,3.761,0,0,0-.191-.4,9.29,9.29,0,0,0-2.336,5.593c-.263-.853-.544-1.749-.811-2.65a.534.534,0,0,1,.022-.374,2.969,2.969,0,0,0-.172-3.129,26.014,26.014,0,0,0-2-2.592c-.039-.05-.127-.062-.191-.092-.812,1.624-.261,4.508,1.173,5.569a3.829,3.829,0,0,1,1.231,2.376,7.93,7.93,0,0,0-4.006-1.977,4.284,4.284,0,0,0,.8,2.354,3.978,3.978,0,0,0,2.827,1.789c.784.1.9.25.982,1.038.06.594.1,1.189.151,1.783" transform="matrix(0.966, -0.259, 0.259, 0.966, -150.716, 49.511)" />
						    </g>
						  </g>
						</svg>

                      	</div>
                          <h5>2020</h5>
                          <h4>Benchmark: Capdeal took exclusive sales right of a primary project, Assotech Pride</h4>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="m-news-slider-item">
                      	<div class="m-news-slider-item-media">
                         <svg id="award2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.263" height="53.283" viewBox="0 0 53.263 53.283">
						  <defs>
						    <clipPath id="clip-path">
						      <rect id="Rectangle_37" data-name="Rectangle 37" width="53.263" height="53.283" fill="#fff"/>
						    </clipPath>
						  </defs>
						  <g id="Group_186" data-name="Group 186" clip-path="url(#clip-path)">
						    <path id="Path_22974" data-name="Path 22974" d="M84.26,0a3.266,3.266,0,0,1,.167.943,123.485,123.485,0,0,1-3.137,16.321,1.286,1.286,0,0,0,.448,1.46,42.491,42.491,0,0,0,9.2,6.3.826.826,0,0,1,.53,1.04,3.461,3.461,0,0,1-.561,1.254,14.282,14.282,0,0,1-9.487,5.062,41.963,41.963,0,0,1-9.395-.159,60.245,60.245,0,0,0-10.172-.486,14.948,14.948,0,0,0-9.889,4.278,2.034,2.034,0,0,1-.181.136c-.07-.213-.139-.4-.191-.582-2.337-8.374-4.639-16.758-7.052-25.11a1.7,1.7,0,0,1,.693-2.088,14.719,14.719,0,0,1,7.7-3.376,38.179,38.179,0,0,1,8.772.055,71.918,71.918,0,0,0,10.689.585A15.046,15.046,0,0,0,83.714.094.253.253,0,0,0,83.74,0Z" transform="translate(-38.247)" />
						    <path id="Path_22975" data-name="Path 22975" d="M0,66.778A2.367,2.367,0,0,1,2.181,65a2.149,2.149,0,0,1,2.314,1.679Q6,72,7.484,77.326q4.048,14.482,8.1,28.963a2.607,2.607,0,0,1-.012,1.771c-.353.876-2.752,1.53-3.484.96a2.316,2.316,0,0,1-.845-1.264Q8.7,98.65,6.151,89.547,3.168,78.867.186,68.186A4.781,4.781,0,0,0,0,67.714v-.937" transform="translate(0 -55.951)" />
						  </g>
						</svg>
                      	</div>
                          <h5>2017 - 2019</h5>
                          <h4>Capdeal Edge: Topped Bhubaneswar’s realty industry in secondary sales, rental deals and services</h4>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="m-news-slider-item">
                      	<div class="m-news-slider-item-media">
                         <svg id="award2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.263" height="53.283" viewBox="0 0 53.263 53.283">
						  <defs>
						    <clipPath id="clip-path">
						      <rect id="Rectangle_37" data-name="Rectangle 37" width="53.263" height="53.283" />
						    </clipPath>
						  </defs>
						  <g id="Group_186" data-name="Group 186" clip-path="url(#clip-path)">
						    <path id="Path_22974" data-name="Path 22974" d="M84.26,0a3.266,3.266,0,0,1,.167.943,123.485,123.485,0,0,1-3.137,16.321,1.286,1.286,0,0,0,.448,1.46,42.491,42.491,0,0,0,9.2,6.3.826.826,0,0,1,.53,1.04,3.461,3.461,0,0,1-.561,1.254,14.282,14.282,0,0,1-9.487,5.062,41.963,41.963,0,0,1-9.395-.159,60.245,60.245,0,0,0-10.172-.486,14.948,14.948,0,0,0-9.889,4.278,2.034,2.034,0,0,1-.181.136c-.07-.213-.139-.4-.191-.582-2.337-8.374-4.639-16.758-7.052-25.11a1.7,1.7,0,0,1,.693-2.088,14.719,14.719,0,0,1,7.7-3.376,38.179,38.179,0,0,1,8.772.055,71.918,71.918,0,0,0,10.689.585A15.046,15.046,0,0,0,83.714.094.253.253,0,0,0,83.74,0Z" transform="translate(-38.247)" />
						    <path id="Path_22975" data-name="Path 22975" d="M0,66.778A2.367,2.367,0,0,1,2.181,65a2.149,2.149,0,0,1,2.314,1.679Q6,72,7.484,77.326q4.048,14.482,8.1,28.963a2.607,2.607,0,0,1-.012,1.771c-.353.876-2.752,1.53-3.484.96a2.316,2.316,0,0,1-.845-1.264Q8.7,98.65,6.151,89.547,3.168,78.867.186,68.186A4.781,4.781,0,0,0,0,67.714v-.937" transform="translate(0 -55.951)" />
						  </g>
						</svg>
                      	</div>
                          <h5>2016</h5>
                          <h4>1st Exclusive Project: Capdeal got associated with Group G, reviving an underrated project, Grand Bazaar</h4>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="m-news-slider-item">
                      	<div class="m-news-slider-item-media">
                         <svg id="award2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.263" height="53.283" viewBox="0 0 53.263 53.283">
						  <defs>
						    <clipPath id="clip-path">
						      <rect id="Rectangle_37" data-name="Rectangle 37" width="53.263" height="53.283" />
						    </clipPath>
						  </defs>
						  <g id="Group_186" data-name="Group 186" clip-path="url(#clip-path)">
						    <path id="Path_22974" data-name="Path 22974" d="M84.26,0a3.266,3.266,0,0,1,.167.943,123.485,123.485,0,0,1-3.137,16.321,1.286,1.286,0,0,0,.448,1.46,42.491,42.491,0,0,0,9.2,6.3.826.826,0,0,1,.53,1.04,3.461,3.461,0,0,1-.561,1.254,14.282,14.282,0,0,1-9.487,5.062,41.963,41.963,0,0,1-9.395-.159,60.245,60.245,0,0,0-10.172-.486,14.948,14.948,0,0,0-9.889,4.278,2.034,2.034,0,0,1-.181.136c-.07-.213-.139-.4-.191-.582-2.337-8.374-4.639-16.758-7.052-25.11a1.7,1.7,0,0,1,.693-2.088,14.719,14.719,0,0,1,7.7-3.376,38.179,38.179,0,0,1,8.772.055,71.918,71.918,0,0,0,10.689.585A15.046,15.046,0,0,0,83.714.094.253.253,0,0,0,83.74,0Z" transform="translate(-38.247)" />
						    <path id="Path_22975" data-name="Path 22975" d="M0,66.778A2.367,2.367,0,0,1,2.181,65a2.149,2.149,0,0,1,2.314,1.679Q6,72,7.484,77.326q4.048,14.482,8.1,28.963a2.607,2.607,0,0,1-.012,1.771c-.353.876-2.752,1.53-3.484.96a2.316,2.316,0,0,1-.845-1.264Q8.7,98.65,6.151,89.547,3.168,78.867.186,68.186A4.781,4.781,0,0,0,0,67.714v-.937" transform="translate(0 -55.951)" />
						  </g>
						</svg>
                      	</div>
                          <h5>2015</h5>
                          <h4>Company Incorporation: Capdeal founded as a primary, secondary and rental market realty organisation</h4>
                      </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="m-swiper-arrow m-news-slider-arrow">
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

<link rel="stylesheet" href="../unpkg.com/swiper%4011.1.14/swiper-bundle.min.css"/>
<script src="../unpkg.com/swiper%4011.1.14/swiper-bundle.min.js"></script>

<script>
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
<?php include './includes/footer.php'?>
</body>

<!-- Mirrored from capdeal.io/leadership.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 04:17:41 GMT -->
</html>