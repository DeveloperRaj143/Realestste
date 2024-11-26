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
				<img src="img/team-banner.jpg" alt="">
				<div class="m-page-title">
					<h2>Our Team</h2>
				</div>
			</div>
			<div class="m-inner-page-content m-team">
				<!--	
				<section class="filters">
				  <button class="filter" data-filter="Sales">Sales</button>
				  <button class="filter" data-filter="Operations">Operations</button>
				  <button class="filter" data-filter="CRM">CRM</button>
				  <button class="filter" data-filter="Marketing">Marketing</button>
				  <button class="filter" data-filter="BusinessDev">Business Development</button>
				  <button class="filter" data-filter="Accounts">Accounts</button>
				  <button class="filter" data-filter="HRAdmin">HR & Admin</button>
				  <button class="filter" data-filter="Support">Support Staff</button>
				  <button class="filter" data-filter="it">IT</button>
				</section>
                -->
				<div class="m-container">
					<section class="products">
					    <a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Ankit%20Sir.jpg"/></div>
						      <p class="tag-line">The Strategy King</p>
						      <h3 class="team__member-name">ANKIT MITTAL</h3>
						      <p class="team__member-designation">GM SALES</p>
						    </div>
						</a>
					    <!--<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/p dev sir.jpg"/></div>
						      <p class="tag-line">The Strategy King</p>
						      <h3 class="team__member-name">PRASENJIT DEB</h3>
						      <p class="team__member-designation">GM SALES</p>
						    </div>
						</a>-->
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/R%20Bhatnagar%20Sir.jpg"/></div>
						      <p class="tag-line">The Strategy King</p>
						      <h3 class="team__member-name">ROHIT BHATNAGAR</h3>
						      <p class="team__member-designation">GM SALES</p>
						    </div>
						</a>
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/s%20bhagat%20sir.jpg"/></div>
						      <p class="tag-line">The Strategy King</p>
						      <h3 class="team__member-name">SANDEEP BHAGAT </h3>
						      <p class="team__member-designation">DGM SALES</p>
						    </div>
						</a>
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/laxmi%20sir-min.jpg"/></div>
						      <p class="tag-line">Finance & Accounts </p>
						      <h3 class="team__member-name">LAXMI MISHRA </h3>
						      <p class="team__member-designation">AGM - Finance & Accounts</p>
						    </div>
						</a>
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/madhu%20ma%27am-min.jpg"/></div>
						      <p class="tag-line">HR</p>
						      <h3 class="team__member-name">MADHUSMITA PRIYADARSHINI</h3>
						      <p class="team__member-designation">Senior - HRBP</p>
						    </div>
						</a>
					    <a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Prashant-Tiwari.jpg"/></div>
						      <p class="tag-line">The Strategy King</p>
						      <h3 class="team__member-name">PRASANT TIWARI</h3>
						      <p class="team__member-designation">AGM SALES</p>
						    </div>
						</a>
						
						 
						<!-- <a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/ajit-kumar-swain.jpg"/></div>
						      <p class="tag-line">The Lead Hustler</p>
						      <h3 class="team__member-name">AJIT KUMAR SWAIN </h3>
						      <p class="team__member-designation">ASST. MANAGER (SALES)</p>
						    </div>
						</a>
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Rohit-kumar-pandey.jpg"/></div>
						      <p class="tag-line">The Aggressive Achiever</p>
						      <h3 class="team__member-name">ROHIT KUMAR PANDEY</h3>
						      <p class="team__member-designation">EXECUTIVE (SALES)</p>
						    </div>
						</a>
						 
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Bijaylaxmi-Khatua.jpg"/></div>
						      <p class="tag-line">The Solution Seller</p>
						      <h3 class="team__member-name">BIJAYLAXMI KHATUA</h3>
						      <p class="team__member-designation">EXECUTIVE (SALES)</p>
						    </div>
						</a>
						 
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/punyaraj-pradhan.jpg"/></div>
						      <p class="tag-line">The Sales Guru</p>
						      <h3 class="team__member-name">PUNYARAJ PRADHAN</h3>
						      <p class="team__member-designation">EXECUTIVE (SALES)</p>
						    </div>
						</a>
						
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/ramya_ranjan_sahoo.jpg"/></div>
						      <p class="tag-line">The Hot Shot</p>
						      <h3 class="team__member-name">RAMYA RANJAN SAHOO</h3>
						      <p class="team__member-designation">LEASING & SALES</p>
						    </div>
						</a>
						
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/SHAIBAL-CHHOTRAY.jpg"/></div>
						      <p class="tag-line">The Sales Express</p>
						      <h3 class="team__member-name">SHAIBAL CHHOTRAY</h3>
						      <p class="team__member-designation">SR. MANAGER SALES</p>
						    </div>
						</a>
					 
						<!--<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/sushanta-kumar-sahoo.jpg"/></div>
						      <p class="tag-line">The Asset Grabber</p>
						      <h3 class="team__member-name">SUSHANTA KUMAR SAHOO</h3>
						      <p class="team__member-designation">ASST. MANAGER (SALES)</p>
						    </div>
						</a> 
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Trilochan-mohapatra.jpg"/></div>
						      <p class="tag-line">The Proposal Pusher</p>
						      <h3 class="team__member-name">TRILOCHAN MOHAPATRA</h3>
						      <p class="team__member-designation">EXECUTIVE (SALES)</p>
						    </div>
						</a>
						 
						<!--<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/ajeet_sahoo.png"/></div>
						      <p class="tag-line">The Proposal Acer</p>
						      <h3 class="team__member-name">AJEET SAHOO</h3>
						      <p class="team__member-designation">EXECUTIVE (SALES)</p>
						    </div>
						</a>-->
						 
						<!--<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/khirod_panda.png"/></div>
						      <p class="tag-line">The Pipeline Pro</p>
						      <h3 class="team__member-name">KHIROD PANDA  </h3>
						      <p class="team__member-designation">SENIOR EXECUTIVE (SALES)</p>
						    </div>
						</a> 
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/manasmita_rautray.png"/></div>
						      <p class="tag-line">The Data Miner</p>
						      <h3 class="team__member-name">MANASMITA RAUTRAY</h3>
						      <p class="team__member-designation">EXECUTIVEs SALES SUPPORT</p>
						    </div>
						</a>
						<!--<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/poonam_begum.png"/></div>
						      <p class="tag-line">Cold Call Queen </p>
						      <h3 class="team__member-name">POONAM BEGUM</h3>
						      <p class="team__member-designation">EXECUTIVE SALES SUPPORT</p>
						    </div>
						</a>
						<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/jeffrey_ekka.jpg"/></div>POONAM BEGUM
						      <p class="tag-line">Pipeline Pro</p>
						      <h3 class="team__member-name">JEFFREY EKKA</h3>
						      <p class="team__member-designation">ASSISTANT MANAGER (SALES)</p>
						    </div>
						</a>-->
						 
						<!--<a class="product" data-filter="Sales">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/ashrita_dodray.jpg"/></div>
						      <p class="tag-line">Coffee's for Closure</p>
						      <h3 class="team__member-name">ASHRITA DODRAY</h3>
						      <p class="team__member-designation">EXECUTIVE (SALES)</p>
						    </div>
						</a>-->
						 
						

						<a class="product" data-filter="Operations">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Gurdev-Singh.jpg"/></div>
						      <p class="tag-line">The Decision-maker</p>
						      <h3 class="team__member-name">GURDEV SINGH</h3>
						      <p class="team__member-designation">AGM - BD</p>
						    </div>
						</a>
						 

                    
					  	<a class="product" data-filter="CRM">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/priyadarshini-sahu.jpg"/></div>
						      <p class="tag-line">The Data Digest</p>
						      <h3 class="team__member-name">PRIYADARSHINI SAHU</h3>
						      <p class="team__member-designation">SR. MANAGER (CRM)</p>
						    </div>
						</a>
					<!--	<a class="product" data-filter="CRM">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/bibekananda-routray.jpg"/></div>
						      <p class="tag-line">The Aggregator</p>
						      <h3 class="team__member-name">BIBEKANANDA ROUTRAY</h3>
						      <p class="team__member-designation">SR. EXECUTIVE (CRM)</p>
						    </div>
						</a>-->


						<!--<a class="product" data-filter="Marketing">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/samreen_khalid.jpg"/></div>
						      <p class="tag-line">The Brand Maestro</p>
						      <h3 class="team__member-name">SAMREEN KHALID</h3>
						      <p class="team__member-designation">MARKETING HEAD</p>
						    </div>
						</a>-->
						<a class="product" data-filter="Marketing">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/diptiranjan-sahoo.jpg"/></div>
						      <p class="tag-line">The Art Alchemist</p>
						      <h3 class="team__member-name">DIPTIRANJAN SAHOO</h3>
						      <p class="team__member-designation">LEAD DESIGNER (GRAPHICS)</p>
						    </div>
						</a>
						
						
						 
						 
					<!--	<a class="product" data-filter="Marketing">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/soumyajeet_pattnaik.jpg"/></div>
						      <p class="tag-line">Digital Dr.</p>
						      <h3 class="team__member-name">SOUMYAJEET PATTNAIK </h3>
						      <p class="team__member-designation">DIGITAL MARKETING SPECIALIST </p>
						    </div>
						</a>-->
						<!--<a class="product" data-filter="Marketing">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/bhagirathi_behera.jpg"/></div>
						      <p class="tag-line">The Millennial Designer</p>
						      <h3 class="team__member-name">BHAGIRATHI BEHERA</h3>
						      <p class="team__member-designation">SENIOR GRAPHIC DESIGNER</p>
						    </div>
						</a>-->


						<!--<a class="product" data-filter="BusinessDev">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/JUNED-AHAMMAD-KHAN.jpg"/></div>
						      <p class="tag-line">The Earning Eagle</p>
						      <h3 class="team__member-name">JUNED AHAMMAD KHAN</h3>
						      <p class="team__member-designation">EXECUTIVE (BUSINESS DEVELOPMENT)</p>
						    </div>
						</a>-->

						 

						<a class="product" data-filter="HRAdmin">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Biswa-Ranjan-Behera.jpg"/></div>
						      <p class="tag-line">The Ever Efficient</p>
						      <h3 class="team__member-name">BISWARANJAN BEHERA</h3>
						      <p class="team__member-designation">SR. EXECUTIVE (ADMIN)</p>
						    </div>
						</a>
						<!--<a class="product" data-filter="HRAdmin">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/sujata-singh.jpg"/></div>
						      <p class="tag-line">The Converse Commander</p>
						      <h3 class="team__member-name">SUJATA SINGH</h3>
						      <p class="team__member-designation">SR. EXECUTIVE (HR)</p>
						    </div>
						</a>
						<a class="product" data-filter="HRAdmin">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/sanjay-goswami.jpg"/></div>
						      <p class="tag-line">The King of Coverage</p>
						      <h3 class="team__member-name">SANJAY GOSWAMI</h3>
						      <p class="team__member-designation">ASST. MANAGER (SALES)</p>
						    </div>
						</a>-->
						<a class="product" data-filter="HRAdmin">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Jagan-Kumar-Pradhan.jpg"/></div>
						      <p class="tag-line">The Schedule Geek</p>
						      <h3 class="team__member-name">JAGAN KUMAR PRADHAN</h3>
						      <p class="team__member-designation">EXECUTIVE (ADMIN)</p>
						    </div>
						</a>
						<!--<a class="product" data-filter="HRAdmin">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/chitralekha-mohanty.jpg"/></div>
						      <p class="tag-line">The Quiz Queen</p>
						      <h3 class="team__member-name">CHITRALEKHA MOHANTY</h3>
						      <p class="team__member-designation">EXECUTIVE (FRONT OFFICE)</p>
						    </div>
						</a>


						<a class="product" data-filter="Support">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/Patita-Nayak.jpg"/></div>
						      <p class="tag-line">The Office Dynamo</p>
						      <h3 class="team__member-name">PATITA NAYAK</h3>
						      <p class="team__member-designation">SUPPORT MANAGER</p>
						    </div>
						</a>
						<a class="product" data-filter="Support">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/anwar_mohammad.jpg"/></div>
						      <p class="tag-line">The Lightning McQueen</p>
						      <h3 class="team__member-name">ANWAR MOHAMMAD</h3>
						      <p class="team__member-designation">DRIVER</p>
						    </div>
						</a>
						<a class="product" data-filter="Support">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/mahesh-digal.jpg"/></div>
						      <p class="tag-line">The Sunny Little Solution</p>
						      <h3 class="team__member-name">MAHESH DIGAL</h3>
						      <p class="team__member-designation">SUPPORT STAFF</p>
						    </div>
						</a>
						<a class="product" data-filter="Support">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/rajendra-kumar-nayak.jpg"/></div>
						      <p class="tag-line">The Support Beacon</p>
						      <h3 class="team__member-name">RAJENDRA NAYAK</h3>
						      <p class="team__member-designation">SUPPORT STAFF</p>
						    </div>
						</a>

						<a class="product" data-filter="it">
						    <div class="product__inner">
						      <div class="product__image"><img class="product__image-inner" src="img/rama_krushna.jpg"/></div>
						      <p class="tag-line">Dr Fix It</p>
						      <h3 class="team__member-name">RAMAKRUSHNA SAHOO</h3>
						      <p class="team__member-designation">EXECUTIVE IT</p>
						    </div>
						</a>-->
					  
					</section>
				</div>
			</div>
			<?php include './includes/footer.php'?>

</body>

<script>
const filters = [...document.querySelectorAll(".filter")];
const grid = document.querySelector(".products");
const products = [...document.querySelectorAll(".product")];

// Get the computed style of the first product
const computedStyle = getComputedStyle(products[0]);
// Get druation and easing from the computed style so the animation settings match the CSS transition
const duration =
	parseFloat(computedStyle.transitionDuration.replace("ms", "")) * 1000;
const easing = computedStyle.transitionTimingFunction;
const animationSettings = { duration, easing };

let isAnimating = false;

const makeSelection = async (filter) => {
	// Do not start a new animation if one is currently running
	if (isAnimating) return;
	// Notate that an animation is currently running
	isAnimating = true;

	// Find the otherFilters (the ones you didn't click on)
	const otherFilters = filters.filter((f) => f != filter);
	// Deselect the otherFilters
	otherFilters.forEach((f) => f.classList.remove("is-active"));
	// Toggle the selection of current filter
	filter.classList.toggle("is-active");

	// Get the value of selected filter
	const selection = filter.classList.contains("is-active")
		? filter.dataset.filter
		: null;

	// Mark non-matched products to be hidden
	const hiddenProducts = products.filter(
		// Products can belong to more than one category. The data-filter attribute can be a list of filter valuse separated by a comma (,)
		// Make sure that there was a selection made, and if so make sure the product's list of filter categories does not include the selection
		(p) => selection != null && !p.dataset.filter.split(",").includes(selection)
	);
	// Mark matched products to be visible
	const activeProducts = products.filter(
		// Products can belong to more than one category. The data-filter attribute can be a list of filter valuse separated by a comma (,)
		// Make sure that there either wasn't a selection made, or if there was make sure the product's list of filter categories includes the selection
		(p) => selection == null || p.dataset.filter.split(",").includes(selection)
	);

	// Get the initial height of the grid to smoothly animate the size
	grid.__start = grid.offsetHeight;

	// Get the initial position data for each product
	products.forEach((p) => {
		p.__start = {
			hidden: p.classList.contains("is-hidden"),
			left: p.offsetLeft,
			top: p.offsetTop
		};
	});

	// Apply the visibility changes to each product
	hiddenProducts.forEach((p) => p.classList.add("is-hidden"));
	activeProducts.forEach((p) => p.classList.remove("is-hidden"));

	// Get the final position data for each product
	products.forEach((p) => {
		p.__end = {
			hidden: p.classList.contains("is-hidden"),
			left: p.offsetLeft,
			top: p.offsetTop
		};
	});

	// Get the final height of the grid to smoothly animate the size
	grid.__end = grid.offsetHeight;

	// Animate the height of the grid from the initial height to the new hight after the products have been filtered
	const gridAnimation = grid.animate(
		[
			{
				height: `${grid.__start}px`
			},
			{
				height: `${grid.__end}px`
			}
		],
		animationSettings
	);

	// Do the product animations, and return an array that contains promises for each of the products collection of animations
	const productAnimations = products.map((p, i) => {
		// Was this product previously hidden?
		const previouslyHidden = p.__start.hidden;
		// Is this product currently hidden?
		const currentlyHidden = p.__end.hidden;

		// Was the product previously hidden and becoming visible?
		const newlyHidden = !previouslyHidden && currentlyHidden;
		// Was the product previously visible and becoming hidden?
		const newlyVisible = previouslyHidden && !currentlyHidden;
		// Was the product perviously visible and staying visible?
		const persistentlyVisible = !previouslyHidden && !currentlyHidden;

		// Get the difference from the starting and ending positions of the product card so we can animate it from where it was to where it's going (only happens if the product is persistentlyVisible)
		const x = p.__start.left - p.__end.left;
		const y = p.__start.top - p.__end.top;

		// If the product is newlyHidden apply left and top style values from the starting offset. This way the element will remain in the same position after it becomes absolutely positioned and is animating out of the grid
		if (newlyHidden) {
			p.style.left = `${p.__start.left}px`;
			p.style.top = `${p.__start.top}px`;
		}

		// Animate the product's position if it's persistentlyVisible, or animate its scale if it's hidden
		const outerAnimation = p.animate(
			[
				{
					...(persistentlyVisible
						? { transform: `translate(${x}px, ${y}px)` }
						: {
								transform: `scale(${previouslyHidden ? 0 : 1}, ${
									previouslyHidden ? 0 : 1
								})`
						  })
				},
				{
					...(persistentlyVisible
						? { transform: `translate(0, 0)` }
						: {
								transform: `scale(${currentlyHidden ? 0 : 1}, ${
									currentlyHidden ? 0 : 1
								})`
						  })
				}
			],
			{ ...animationSettings }
		);

		// Get the inner container
		const inner = p.querySelector(".product__inner");
		// Animate the scale of the inner element to the opposite scale of the outer element. This will make it look like the container is shrinking around the contents of the product card, rather than the contents of the card scaling down with it
		const innerAnimation = inner.animate(
			[
				{
					transform: `scale(${newlyVisible ? "2, 2" : "1, 1"})`
				},
				{
					transform: `scale(${newlyHidden ? "2, 2" : "1, 1"})`
				}
			],
			animationSettings
		);

		// Return a new Promise that resolves once the outer and inner animations have completed, and then cleans up the temp position styles
		return Promise.all([outerAnimation.finished, innerAnimation.finished]).then(
			() => {
				// Clean up the top and left styles we added to newlyHidden products
				if (newlyHidden) {
					p.style.left = "";
					p.style.top = "";
				}
			}
		);
	});

	// Wait for every animation to finish
	await Promise.all([...productAnimations, gridAnimation]);
	// Notate that all current animations have completed
	isAnimating = false;
};

// Set an explicit height/width to the product cards so they dont grow or shrink when they become absolutely positioned and are removed from the page. The Height/Width value is grabbed from the first product on the page that isn't hidden. This way we set everything to the same explicit size. This is recalculated as the screen size changes
const resize = () => {
	products.forEach((p) => {
		p.style.height = "";
		p.style.width = "";
	});
	const { height, width } = getComputedStyle(
		products.find((p) => !p.classList.contains("is-hidden"))
	);
	products.forEach((p) => {
		p.style.height = `${height}px`;
		p.style.width = `${width}px`;
	});
};

// Apply the initial explicit height/width of the product cards
resize();
// Add resize event listener to recalculate explicit height/width
window.addEventListener("resize", resize);
// Add event listener to do the filtering/animation on click
filters.forEach((f) => f.addEventListener("click", () => makeSelection(f)));
	


</script>


<!-- Mirrored from capdeal.io/our-team.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 04:17:44 GMT -->
</html>