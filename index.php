<?php
include("./Actions/connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./Assets/css/index.css">
	<title>Home</title>
</head>
<body>
	<Header>
		<img src="./Assets/Images/logo.png" alt="Logo" id="logo">
		<h1 id="blood-distribution-system">Blood Distribution System</h1>
		<div class="topnav1">
			<!-- <div class="buttons"> -->
				<a class="CTA" id="login-button" href="./Partials/login.php">Login</a>
				<a id="signup-button" href="./Partials/signup.php">Sign Up</a>
			<!-- </div> -->
		</div>
		<div class="topnav">
			<a href="#home">Home</a>
			<a href="#about">About Us</a>
			<a href="#Contact">Contact Us</a>
			<a href="#FAQs">FAQs</a>
		</div>
	</Header>
	<div class="image" style="width: 100%;margin-left: 350px ;margin-top: 0px; padding-bottom: 270px;"><img src="./Assets/Images/homeimg1.jpg" alt="Random Image" id="homeimg"></div>
	<div class="image" style="margin-top:-550px;padding-bottom:270px;">
		<a class="CTA" href="./Partials/login.php" style="margin-left: 35px;">I Am a Hospital</a>
		<a class="CTA" href="./Partials/login.php" style="margin-left: 965px;">I Am a Blood Bank</a>
	</div>
	<!-- <div class="image" style="width: 25%;"></div> -->
	<div id="home">
		<H2>Home</H2>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum inventore dicta enim, corrupti tenetur debitis provident. Sit, nostrum voluptatem! Earum, quaerat obcaecati. Aperiam sint quia amet libero aliquam reprehenderit eveniet, sed, ea nihil corporis ut ipsam aut consequatur vitae eligendi praesentium enim. Corrupti in error, rerum saepe sint explicabo dolorem optio alias inventore asperiores, minus unde aliquam voluptatum eveniet est totam expedita qui tenetur vel laboriosam nesciunt sed minima omnis! Unde corporis a non ducimus asperiores, reprehenderit pariatur exercitationem architecto soluta eveniet nostrum voluptatum doloremque quo sunt? Magnam vero minus accusamus, ex voluptatum adipisci corrupti excepturi iste? Nisi ullam vitae blanditiis recusandae dignissimos saepe error.
	</div>
		<div id="about">
			<h2>About Us</h2>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum inventore dicta enim, corrupti tenetur debitis provident. Sit, nostrum voluptatem! Earum, quaerat obcaecati. Aperiam sint quia amet libero aliquam reprehenderit eveniet, sed, ea nihil corporis ut ipsam aut consequatur vitae eligendi praesentium enim. Corrupti in error, rerum saepe sint explicabo dolorem optio alias inventore asperiores, minus unde aliquam voluptatum eveniet est totam expedita qui tenetur vel laboriosam nesciunt sed minima omnis! Unde corporis a non ducimus asperiores, reprehenderit pariatur exercitationem architecto soluta eveniet nostrum voluptatum doloremque quo sunt? Magnam vero minus accusamus, ex voluptatum adipisci corrupti excepturi iste? Nisi ullam vitae blanditiis recusandae dignissimos saepe error.
		</div>
	</div>
	<div style="width: 500px; height: 720px; background-color: Blue;"><img src="" alt="Random Image">
	</div>
	<section class="faq-section" id="FAQs">
		<div class="container">
			<div class="row">
							<!-- ***** FAQ Start ***** -->
				<div class="col-md-6 offset-md-3">
		
					<div class="faq-title text-center pb-3">
						<h2>FAQ</h2>
					</div>
				</div>
				<div class="col-md-6 offset-md-3">
					<div class="faq" id="accordion">
						<div class="card">
							<div class="card-header" id="faqHeading-1">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
										<span class="badge">1</span>What is Lorem Ipsum?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
								<div class="card-body">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-2">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
										<span class="badge">2</span> Where does it come from?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
								<div class="card-body">
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-3">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
										<span class="badge">3</span>Why do we use it?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
								<div class="card-body">
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-4">
								<div class="mb-0">
										<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
										<span class="badge">4</span> Where can I get some?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
								<div class="card-body">
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="faqHeading-5">
								<div class="mb-0">
											<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
										<span class="badge">5</span> What is Lorem Ipsum?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
								<div class="card-body">
									<p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-6">
								<div class="mb-0">
											<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
										<span class="badge">6</span> Where does it come from?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
								<div class="card-body">
									<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-7">
								<div class="mb-0">
											<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
										<span class="badge">7</span> Why do we use it?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
								<div class="card-body">
									<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="Contact">
		<p>Reach out to us at <u>rdxtribution@blood.com</u></p>
	</section>
	<Footer>
		&copy; All Rights Reserved
	</Footer>
</body>
</html>