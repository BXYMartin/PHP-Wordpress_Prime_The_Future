<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link rel="canonical" href="<?php echo get_permalink(); ?>" />
	<meta name="robots" content="index, follow" />
    <link rel="shortcut icon" type="image/png" href="<?php if (get_option('site_icon')){echo get_site_icon_url();}else{ echo get_template_directory_uri().'/favicon.png';}?>">
    
	<link href='https://fonts.googleapis.com/css?family=PT+Serif+Caption&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title>PRIME Homepage</title>

	<?php wp_head(); ?>

    
<!-- Analytics -->
 
<!-- Analytics END -->
    
</head>
<body>

<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->


<!-- Main container -->
<div class="page-container">
    
<?php get_header(); ?>

<!-- bloc-1 -->
<div class="bloc" id="bloc-1">
	<div class="container bloc-lg bloc-md-lg">
		<div class="row">
			<div class="col-md-6">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/IMG_1022.JPG" alt="IMG_1022.JPG" />
			</div>
			<div class="align-self-center col-md-6">
				<h1 class="mg-md h1-style btn-resize-mode float-lg-none tc-black">
					Prime Lab
				</h1>
				<h3 class="mg-md btn-resize-mode h3-style">
					Uncertainty Quantification<br><br>
				</h3>
				<p>
					Our goal is to develop mathematical tools to quantify uncertainty in nature, engineering systems and our society, and thus provide more accurate and comprehensive predictions of these system states. Applications of our work include environmental protection (flood prediction), ecology (algae blooms), oil recovery and renewable energy systems.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="divider-h">
					<span class="divider"></span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- bloc-2 -->
<div class="bloc l-bloc" id="bloc-2">
	<div class="container bloc-lg bloc-no-padding-lg">
		<div class="row">
			<div class="col">
				<h1 class="text-center mg-clear hero-header-text text-purple-gradient h1-style">
					Research<br>
				</h1>
				<h3 class="mg-md float-none text-center hero-subheader tc-outer-space">
					Our research interests.
				</h3>
			</div>
		</div>
		<div class="row no-gutters scroll-fx-zoom-push scroll-fx-in-fade d-md-flex  d-none">
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s3_new.jpg" class="img-fluid mx-auto d-block img-protected" alt="s3_new" />
				<h3 class="mg-md">
					Materials
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s1_new副本.jpg" class="img-fluid mx-auto d-block img-protected" alt="s1_new副本" />
				<h3 class="mg-md">
					Medicines
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s2_new.jpg" class="img-fluid mx-auto d-block img-protected" alt="s2_new" />
				<h3 class="mg-md">
					Solar Energy
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s4_new副本.jpg" class="img-fluid mx-auto d-block img-protected" alt="s4_new副本" />
				<h3 class="mg-md">
					Microelectronics
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
		</div>
		<div class="row no-gutters  d-md-none d-flex">
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s3_new.jpg" class="img-fluid mx-auto d-block" alt="s3_new" />
				<h3 class="mg-md">
					Materials
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s1_new副本.jpg" class="img-fluid mx-auto d-block" alt="s1_new副本" />
				<h3 class="mg-md">
					Medicines
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s2_new.jpg" class="img-fluid mx-auto d-block" alt="s2_new" />
				<h3 class="mg-md">
					Solar Energy
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/s4_new副本.jpg" class="img-fluid mx-auto d-block" alt="s4_new副本" />
				<h3 class="mg-md">
					Microelectronics
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-2 END -->

<!-- bloc-3 -->
<div class="bloc l-bloc" id="bloc-3">
	<div class="container bloc-lg bloc-lg-lg">
		<div class="row">
			<div class="col">
				<h1 class="text-center mg-clear hero-header-text text-fire-gradient">
					Professor<br>
				</h1>
				<h3 class="mg-md float-none text-center hero-subheader tc-outer-space">
					Our Team Leader
				</h3>
			</div>
			<div class="col-md-6 offset-md-3 offset-lg-1 col-lg-10">
				<div class="card card-style border-0">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Intro.jpg" class="img-fluid mx-auto d-block img-protected img-bloc-3-style" alt="Intro" />
					<div class="card-body">
						<h3 class="mg-md text-center">
							Prof. Peng Wang
						</h3>
						<h5 class="mg-md h5-style text-lg-center">
							I am computational mathematician working on uncertainty quantification. <br><br>We combines mathematical theory and state-of-the-art computational tools to solve scientific and engineering problems with domain scientists.<br><br>Email: wang.peng AT buaa DOT edu DOT cn<br><br>
						</h5>
						<div class="row d-md-flex  d-none">
							<div class="col-6 col-sm-2 offset-sm-2 offset-lg-0 col-lg-3">
								<div class="text-center">
									<a href="https://www.researchgate.net/profile/Peng_Wang423?ev=hdr_xprf&amp;_sg=cc7avuk1cL0DsVfxKJ731OnePwjF-woUc7cmnQP2sy_AElKt0meGOhyTNl53upaguulu8YzVsaNQGHe9HbMCeWom" class="btn btn-d btn-lg btn-style">Research Gate<br></a>
								</div>
							</div>
							<div class="col-6 col-sm-2 col-lg-3">
								<div class="text-center">
									<a href="https://scholar.google.com.hk/citations?user=1gHU6ygAAAAJ&amp;hl=zh-CN&amp;oi=sra" class="btn btn-d btn-lg btn-google-scholar-style">Google Scholar</a>
								</div>
							</div>
							<div class="col-6 col-sm-2 col-lg-3">
								<div class="text-center">
									<a href="#" class="btn btn-d btn-lg btn-funding-info-style" data-toggle="modal" data-target="#modal-41129">Funding Info</a>
								</div>
							</div>
							<div class="col-6 col-sm-2 col-lg-3">
								<div class="text-center container-div-style">
									<a href="#" class="btn btn-d btn-lg btn-my-background-style" data-toggle="modal" data-target="#modal-30050">Background</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="modal-41129" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog  modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="mg-clear">
									Funding Info
								</h3>
							</div>
							<div class="modal-body">
								<div id="accordion-34537">
									<div class="card">
										<div class="modal-header" id="heading1">
											<a href="#" class="a-btn" data-toggle="collapse" data-target="#accordion-34537-item-1" aria-expanded="true" aria-controls="accordion-34537-item-1" target="#accordion-34537-item-1">2017-2021</a>
										</div>
										<div id="accordion-34537-item-1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion-34537">
											<div class="modal-body">
												<p>
													(Co-PI) State Key Research Project, Material Genome Initiative (16,125,000 RMB) —— National Ministry of Science and Technology, China
												</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="modal-header" id="heading2">
											<a href="#" class="a-btn" data-toggle="collapse" data-target="#accordion-34537-item-2" aria-expanded="false" aria-controls="accordion-34537-item-2" target="#accordion-34537-item-2">2016-2019</a>
										</div>
										<div id="accordion-34537-item-2" class="collapse" aria-labelledby="heading2" data-parent="#accordion-34537">
											<div class="modal-body">
												<p>
													(PI) General Project, PDF/CDF methods and its numerical scheme for parametric uncertainty quantification (534,000 RMB) —— National Committee of Natural Science Research, China
												</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="modal-header" id="heading3">
											<a href="#" class="a-btn" data-toggle="collapse" data-target="#accordion-34537-item-3" aria-expanded="false" aria-controls="accordion-34537-item-3" target="#accordion-34537-item-3">2015-2018</a>
										</div>
										<div id="accordion-34537-item-3" class="collapse" aria-labelledby="heading3" data-parent="#accordion-34537">
											<div class="modal-body">
												<p>
													(PI) Recruitment Program of Global Experts (2,000,000 RMB) —— Organization Department of CPC
												</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="modal-header" id="heading4">
											<a href="#" class="a-btn" data-toggle="collapse" data-target="#accordion-34537-item-4" aria-expanded="false" aria-controls="accordion-34537-item-4" target="#accordion-34537-item-4">2017-2020</a>
										</div>
										<div id="accordion-34537-item-4" class="collapse" aria-labelledby="heading4" data-parent="#accordion-34537">
											<div class="modal-body">
												<p>
													(Co-PI) General Project, Uncertainty quantification and diagnosis for software faults (620,000 RMB) —— National Committee of Natural Science Research, China
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a href="#" class="btn btn-d btn-lg" data-toggle="modal" data-target="#modal-41129">OK<br></a>
							</div>
						</div>
					</div>
				</div>
				<div id="modal-30050" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog  modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="mg-clear">
									Background
								</h3>
							</div>
							<div class="modal-body">
								<ul class="nav nav-tabs" id="nav-19282-tab" role="tablist">
									<li class="nav-item">
										<a class="a-btn nav-link active" id="nav-19282-tab-1" data-toggle="tab" href="#nav-19282-content-1" role="tab" aria-controls="nav-19282-content-1" aria-selected="true">Education</a>
									</li>
									<li class="nav-item">
										<a class="a-btn nav-link" id="nav-19282-tab-2" data-toggle="tab" href="#nav-19282-content-2" role="tab" aria-controls="nav-19282-content-2" aria-selected="false">Employment</a>
									</li>
									<li class="nav-item">
										<a class="a-btn nav-link" id="nav-19282-tab-3" data-toggle="tab" href="#nav-19282-content-3" role="tab" aria-controls="nav-19282-content-3" aria-selected="false">Position</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="nav-19282-content-1" role="tabpanel" aria-labelledby="nav-19282-content-1">
										<p>
											<br>
										</p><img src="<?php echo get_template_directory_uri(); ?>/img/UCSD.jpg" class="img-fluid rounded-circle img-placeholder-us-style float-lg-right" alt="UCSD" />
										<div class="form-group">
											<h5 class="mg-md">
												🇺🇸 2011 University of California, San Diego
											</h5>
											<p>
												Ph.D in Computational Science
											</p>
										</div><img src="<?php echo get_template_directory_uri(); ?>/img/UCSD.jpg" class="img-fluid rounded-circle img-placeholder-us-style float-lg-right" alt="UCSD" />
										<h5 class="mg-md">
											🇺🇸 2010&nbsp;University of California, San Diego
										</h5>
										<p>
											M.Sc in Engineering Science
										</p><img src="<?php echo get_template_directory_uri(); ?>/img/Durham.jpg" class="img-fluid rounded-circle img-placeholder-us-style float-lg-right" alt="Durham" />
										<h5 class="mg-md">
											🇬🇧 2007&nbsp;University of Durham
										</h5>
										<p>
											M.Eng 1st honor in Mechanical Engineering
										</p>
									</div>
									<div class="tab-pane fade-tab-bs" id="nav-19282-content-2" role="tabpanel" aria-labelledby="nav-19282-content-2">
										<p>
											<br>
										</p><img src="<?php echo get_template_directory_uri(); ?>/img/Beihang.jpg" class="img-fluid rounded-circle img-placeholder-us-style float-lg-right" alt="UCSD" />
										<h5 class="mg-md">
											2014–Now&nbsp;Beihang University
										</h5>
										<p>
											Professor of Mathematics
										</p><img src="<?php echo get_template_directory_uri(); ?>/img/Pnnl.jpg" class="img-fluid rounded-circle img-placeholder-us-style float-lg-right" alt="UCSD" />
										<h5 class="mg-md">
											2011–2013&nbsp;Pacific Northwest National Laboratory
										</h5>
										<p>
											Post Doctorate Research Associate
										</p><img src="<?php echo get_template_directory_uri(); ?>/img/Pnnl.jpg" class="img-fluid rounded-circle img-placeholder-us-style float-lg-right" alt="UCSD" />
										<h5 class="mg-md">
											2013&nbsp;Pacific Northwest National Laboratory
										</h5>
										<p>
											Staff Scientist
										</p><img src="<?php echo get_template_directory_uri(); ?>/img/Oundle.jpg" class="img-fluid rounded-circle img-placeholder-us-style float-lg-right" alt="UCSD" />
										<h5 class="mg-md">
											2013&nbsp;Oundle School
										</h5>
										<p>
											Teaching Fellow
										</p>
									</div>
									<div class="tab-pane fade-tab-bs" id="nav-19282-content-3" role="tabpanel" aria-labelledby="nav-19282-content-3">
										<p>
											<br>
										</p>
										<h5 class="mg-md">
											2015–Now International Journal for Uncertainty Quantification
										</h5>
										<p>
											Editorial Board&nbsp;
										</p>
										<h5 class="mg-md">
											2016–Now 4th Reformation Committee for Scientific Policy of China
										</h5>
										<p>
											Board Member
										</p>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a href="#" class="btn btn-d btn-lg" data-toggle="modal" data-target="#modal-30050">OK<br></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-3 END -->

<!-- bloc-4 -->
<div class="bloc l-bloc" id="bloc-4">
	<div class="container bloc-lg bloc-md-lg">
		<div class="row">
			<div class="col">
				<h1 class="text-center mg-clear hero-header-text text-spark-gradient">
					Resources
				</h1>
				<h3 class="mg-md float-none text-center hero-subheader tc-outer-space">
					Our Scientific Resources
				</h3>
			</div>
			<div class="col-md-6 offset-md-3 offset-lg-1 col-lg-10">
				<ul class="nav nav-tabs" id="nav-38537-tab" role="tablist">
					<li class="nav-item">
						<a class="a-btn nav-link active float-lg-none" id="nav-38537-tab-1" data-toggle="tab" href="#nav-38537-content-1" role="tab" aria-controls="nav-38537-content-1" aria-selected="true">Journal Papers</a>
					</li>
					<li class="nav-item">
						<a class="a-btn nav-link" id="nav-38537-tab-2" data-toggle="tab" href="#nav-38537-content-2" role="tab" aria-controls="nav-38537-content-2" aria-selected="false">Books</a>
					</li>
					<li class="nav-item">
						<a class="a-btn nav-link" id="nav-38537-tab-3" data-toggle="tab" href="#nav-38537-content-3" role="tab" aria-controls="nav-38537-content-3" aria-selected="false">Codes</a>
					</li>
					<li class="nav-item">
						<a class="a-btn nav-link" id="nav-38537-tab-3" data-toggle="tab" href="#nav-38537-content-4" role="tab" aria-controls="nav-38537-content-3" aria-selected="false">Videos<br></a>
					</li>
				</ul>
				<div class="tab-content new-border">
					<div class="tab-pane fade show active" id="nav-38537-content-1" role="tabpanel" aria-labelledby="nav-38537-content-1">
						<ul class="list-unstyled">
							<li>
								<div class="row">
									<div class="col-lg-2">
										<h4 class="tc-black mg-clear h4-2020-style">
											<strong>2020</strong><br>
										</h4>
									</div>
									<div class="col offset-lg--1">
										<h4 class="h4-bloc-4-style paper-title-style tc-black mg-clear ">
											irradpy: Python package for MERRA-2 download, extraction and usage for clear-sky irradiance modelling, Solar Energy, 2020, vol. 199, pp. 685-693.
										</h4>
										<p class="mg-clear">
											* J. Bright*, X. Bai, Y. Zhang, X. Sun, B. Acord and P. Wang (2020)
										</p>
										<p class="mg-clear">
											<i>Solar Energy, 2020, vol. 199, pp. 685-693</i>
										</p>
										<p>
											Keyword: clear-sky detection, solar irradiance, irradpy
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane fade-tab-bs" id="nav-38537-content-2" role="tabpanel" aria-labelledby="nav-38537-content-2">
						<ul class="list-unstyled">
							<li>
								<div class="row">
									<div class="col-lg-2">
										<h4 class="tc-black mg-clear h4-2020-style">
											<strong>2019</strong>
										</h4>
									</div>
									<div class="col offset-lg--1">
										<h4 class="h4-bloc-4-style paper-title-style tc-black mg-clear">
											Introduction to Uncertainty Quantification<br>
										</h4>
										<p class="mg-clear">
											* P. Wang and D. Xiu (2018)
										</p>
										<p class="mg-clear">
											<i>China Science Publishing &amp; Media, 2019 (in Chinese)</i><br>
										</p>
										<p>
											ISBN：9787030594723
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane fade-tab-bs" id="nav-38537-content-3" role="tabpanel" aria-labelledby="nav-38537-content-3">
						<ul class="list-unstyled">
							<li>
								<div class="row">
									<div class="col-lg-2">
										<h4 class="tc-black mg-clear h4-2020-style">
											<strong>2020</strong>
										</h4>
									</div>
									<div class="col offset-lg--1">
										<h4 class="h4-bloc-4-style paper-title-style tc-black mg-clear">
											IrradPy<br>
										</h4>
										<p class="mg-clear">
											IrradPy Python Package for solar irradiance modelling.<br>
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane fade-tab-bs" role="tabpanel" aria-labelledby="nav-38537-content-4" id="nav-38537-content-4">
						<p>
							Not available for now!
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-4 END -->

<!-- bloc-5 -->
<div class="bloc tc-blue l-bloc" id="bloc-5">
	<div class="container bloc-lg bloc-lg-lg">
		<div class="row">
			<div class="col">
				<h1 class="text-center mg-clear hero-header-text text-core-gradient">
					Team
				</h1>
				<h3 class="mg-md float-none text-center hero-subheader tc-outer-space">
					Our Team Members
				</h3>
			</div>
			<div class="col-md-6 offset-md-3 offset-lg-1 col-lg-10">
				<div id="carousel-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
					<ol class="carousel-indicators">
						<li data-target="#carousel-1" data-slide-to="0" class="active">
						</li>
						<li data-target="#carousel-1" data-slide-to="1">
						</li>
						<li data-target="#carousel-1" data-slide-to="2">
						</li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-inline-block w-100" alt="slide 1" src="<?php echo get_template_directory_uri(); ?>/img/Group.jpg" />
							<div class="carousel-caption">
								<h1 class="mg-md sm-shadow">
									Team Photo
								</h1>
							</div>
						</div>
						<div class="carousel-item">
							<img alt="slide 2" class="d-inline-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image-wide.png" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="slide 3" src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image-wide.png" />
							<div class="carousel-caption">
							</div>
						</div>
					</div><a class="carousel-nav-controls carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><svg width="26" height="26" viewBox="0 0 32 32"><path class="carousel-nav-icon carousel-prev-icon" d="M22,2L9,16,22,30"></path></svg><span class="sr-only">Previous</span></a><a class="carousel-nav-controls carousel-control-next" href="#carousel-1" role="button" data-slide="next"><svg width="26" height="26" viewBox="0 0 32 32"><path class="carousel-nav-icon carousel-next-icon" d="M10.344,2l13,14-13,14"></path></svg><span class="sr-only">Next</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-5 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"><path class="scroll-to-top-btn-icon" d="M30,22.656l-14-13-14,13"/></svg></a>
<!-- ScrollToTop Button END-->


<?php get_footer(); ?>

</div>
<!-- Main container END -->
    
<?php wp_footer(); ?>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/scrollFX.js?7058"></script>

</body>
</html>
