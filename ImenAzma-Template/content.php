
	<div class="containers rel">
		<div class="blackbar abs"></div>
		<div class="w24 mlra">
			<header class="w24">
				<section class="mh20 header rel">
					<div class="login-container abs">
						<div class="w10 mh4 panel loginpanel abs">
							<h2>
               	<a class="close" href="#"></a>
                ورود
							</h2>
							<form class="cover" action="">
								<section class="w3 left bgl"></section>
								<section class="w7 mlra form pr1 last">
									<h3 class="mb1 mt1 txr">ورود به حساب کاربری</h3>
									<p>
		                <span>نام کاربری:</span>
										<abbr title="نام کاربری">
											<input class="txt" title="username" type="text" id="txt_username" placeholder='نام کاربری' />
										</abbr>
									</p>	
									<p>
		                <span>گذر واژه:</span>
										<abbr title="گذر واژه">
											<input class="txt" title="password" type="text" id="txt_password" placeholder='گذر واژه' />
										</abbr>
									</p>
								</section>
								<div class="hrline"></div>
								<div class="w9 lh3 pb1">
									<abbr title="ورود">
										<input class="btn right mr1" id='btn_login' type="submit" value="ورود" />
									</abbr>
									<a id="forgetpass" href="#">گذر واژه ام را فراموش کرده ام </a>
								</div>
							</form>
						</div>		
						<div class="w2 mh2 rel login">
							<a  href="#">ورود<span></span></a>
						</div>
					</div>
					<div class="header-slider">
            <div id="slider" class="nivoSlider">
                <img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" alt="Slide1" />
                <img src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" alt="Slide2" />
                <img src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" alt="Slide3" />
            </div>
					</div>
				</section>
				<section class="cover menubar">
					<div class="w6 mh3 lh2 left gtranslate last">
						<div id="google_translate_element"><span id="trans">انتخاب زبان:</span></div>
						<script>
							function googleTranslateElementInit() {
							  new google.translate.TranslateElement({
							    pageLanguage: 'en',
							    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
							  }, 'google_translate_element');
							}
						</script>
					</div>
					<div class="mh3 ml6 nav last">
						<nav class="cover">
							<?php
								get_template_part("main","nav")
							?>
							<div class="badboy"></div>
						</nav>
					</div>
				</section>
			</header>
			<div class="w24 mh18 content">
				<section class="cover">
					<div class="left cover last ">
						<div class="w8 pb1 vote panel">
							<h2>نظر سنجی</h2>
							<h3 class="txr">نظر شما در رابطه با وب سایت شرکت مهندسین مشاور ایمن آزما چیست؟</h3>
							<form class="pt1 txr">
								<input type="radio" name="question" value="well"><span class="bb">کارآمد و مفید است</span><br/>
								<input type="radio" name="question" value="good"><span class="bb">هنوز به اندازه کافی مفید نمی باشد</span><br/>
								<input type="radio" name="question" value="notgood"><span class="bb">کاربرد مفیدی ندارد</span><br/>
								<input type="radio" name="question" value="no"><span class="bb">نظری ندارم</span><br/>
								<br/>
								<span class="pt2 pr2 txc">
									<input class="btn" id='btn_vote' type="submit" value="رای" />
									<input class="btn" id='btn_result' type="submit" value="نتایج" />
								</span>
							</form>
						</div>
						<div class="w8 mh2 mail panel">
							<h2>پست الکترونیک</h2>
							<a class="txc" href="#">ورود به پست الکترونیکی</a>
						</div>
					</div>
					<div class="w16 mh16 mla sample-projects last">
						<!-- sample project -->
						<div class="panel">
							<h2>پروژه های انجام شده</h2>
							<div class="project-slider">
					        	<div class="case-train">
					            	<div class="train">
					                    <div>
					                        <div class="img_project">
					                            <img src="<?php bloginfo('template_url'); ?>/images/edalat.jpg" alt="" />
					                        </div>
					                        <div class="info_project">
					                            <h3>پروژه هتل عدالت</h3>
					                            <p><span>کارفرما:</span> معاونت محترم مهندسی قوه قضائیه</p>
					                            <p><span>مشاور:</span> مهندسین مشاور اوت</p>
					                            <p><span>سال انجام:</span> 1390</p>
					                            <p><span>آدرس:</span> مشهد - خیابان کوهسنگی نبش کوهسنگی 18</p>
					                            <p><span>توضیحات:</span> </p>
					                        </div>
					                    </div>
					                    <div>
					                        <div class="img_project">
					                            <img src="<?php bloginfo('template_url'); ?>/images/eghtesadi.jpg" alt="" />
					                        </div>
					                        <div class="info_project">
					                            <h3>مرکز بین المللی مالی واقتصادی مشهد</h3>
					                            <p><span>کارفرما:</span> -------</p>
					                            <p><span>مشاور:</span> شرکت مهندسین مشاور آبا</p>
					                            <p><span>سال انجام:</span> 1389</p>
					                            <p><span>آدرس:</span> مشهد - میدان جانباز روبروی پروما</p>
					                            <p><span>توضیحات:</span> </p>
					                        </div>
					                    </div>
					                    <div>
					                        <div class="img_project">
					                            <img src="<?php bloginfo('template_url'); ?>/images/negin.jpg" alt="" />
					                        </div>
					                        <div class="info_project">
					                            <h3>مجتمع اقامتی تجاری نگین</h3>
					                            <p><span>کارفرما:</span> -------</p>
					                            <p><span>مشاور:</span> مهندسین مشاور عمارت خورشید</p>
					                            <p><span>سال انجام:</span> 1389</p>
					                            <p><span>آدرس:</span> مشهد - خیابان شیرازی - نبش شیرازی4</p>
					                            <p><span>توضیحات:</span> </p>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <ul class="nav-bar">
					            	<li><a href="#"></a></li>
					                <li><a href="#"></a></li>
					                <li><a href="#"></a></li>
					            </ul>
							</div>
						</div>
					</div>
				</section>
				<section class="cover pb1">
					<div class="w12 mh10 right panel projects-status cover last">
						<h2>وضعيت پروژه هاي در حال انجام</h2>
						<ul class="cover">
							<li>
								<span class="percentage" >100%</span>
								<div class="progressbar">
									<div class="hider" ></div>
								</div>
								<span class="titleprogresbar">مجتمع مسکونی -تجاری رشد-بلوک سی</span>
							</li>
							<li>
								<span class="percentage" >55%</span>
								<div class="progressbar" >
									<div class="hider" ></div>
								</div>
								<span class="titleprogresbar">مرکز بین المللی مالی واقتصادی</span>
							</li>
							<li>
								<span class="percentage" >72%</span>
								<div class="progressbar">
									<div class="hider" ></div>
								</div>
								<span class="titleprogresbar">مجتمع تجاری نوید-فازیک</span>
							</li>
							<li>
								<span class="percentage" >14%</span>
								<div class="progressbar">
									<div class="hider" ></div>
								</div>
								<span class="titleprogresbar">هتل پنج ستاره نرگس 2</span>
							</li>
							<li>
								<span class="percentage" >43%</span>
								<div class="progressbar">
									<div class="hider" ></div>
								</div>
								<span class="titleprogresbar">امید سپهر بلوك سه</span>
							</li>
						</ul>
					</div>
					<div class="w11 mh16 mra panel projects-list">
						<h2>لیست پروژه های شرکت</h2>
						<div class="rel newsMainCase">
					      <div class="newsTrain">
					        <ul>
					          <li>
					            <a href="#">پروژه هتل عدالت</a>
					            <span>مشهد - خیابان کوهسنگی نبش کوهسنگی 18</span>
					          </li>
					          <li>
					            <a href="#">ساختمان مرکزی دادگستری مشهد </a>
					            <span>مشهد-بلوار فرامرز عباسی - انتهای فرامرز عباسی 41</span>
					          </li>
					          <li>
					            <a href="#">مجتمع اقامتی تجاری نگین</a>
					            <span>مشهد خیابان شیرازی - نبش شیرازی4</span>
					          </li>
					          <li>
					            <a href="#">هتل هانیه</a>
					            <span>مشهد بلوار وحدت انتهای وحدت 21</span>
					          </li>
					          <li>
					            <a href="#">797 واحدی زاهدان(پروژه وحدت)</a>
					            <span>زاهدان بلوار انقلاب - بالاتر از ترمینال جنب میدان تره بار</span>
					          </li>
					          <li>
					            <a href="#">ساختمان مرکزی استانداری بجنورد</a>
					            <span>بجنورد</span>
					          </li>
					          <li>
					            <a href="#"></a>
					            <span></span>
					          </li>
					        </ul>
					      </div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>