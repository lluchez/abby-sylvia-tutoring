<?php
	$version_number = '20180304'; // to by-pass cache (needs a better system for bower resources)
	$page = new Page($version_number);
	$page->css->add('bundle');
?>
<html lang="en">
<head>
	<title>Abby and Sylvia - Tutoring</title>
	<!-- <link rel="SHORTCUT ICON" href="<?php ?>"/> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta name="keywords" content="tutoring, k-12, math, reading, writing, academic skills, social emotional, chicago, illinois"/>
	<meta name="description" content=""/>
	<meta name="author" content="Lionel Luchez"/>
	<meta name="robots" content="index,follow"/>
<?php
	$page->write_header();
?>
</head>
<body>
	<div class="container">
<?php
	include DIR_VIEWS.'layout/_header.php';
?>
		<div class="content">
			<div class="block">
				<h1>Our Mission</h1>
				<ul>
					<li>To provide consistent, individualized academic support at the time and in the setting that is most comfortable for students</li>
					<li>To enhance students’ academic self-confidence and improve or maintain academic performance</li>
					<li>To find learning strategies that work for individual students, which they can apply as they obtain knowledge and skills in the school setting</li>
					<li>To develop and nurture creative and critical thinking skills</li>
				</ul>
			</div>

			<div class="block">
				<h1>Meet Abby &amp; Sylvia</h1>
				<div class="meet-tutor meet-abby">
					<img src="<?php echo DIR_IMG ?>tutors/abby.jpg" title="Abby Green" />
					<p><strong>Abby Green</strong> ipsum lorem dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.</p>
					<p>Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.</p>
				</div>
				<div class="meet-tutor meet-sylvia">
				<img src="<?php echo DIR_IMG ?>tutors/sylvia.jpg" title="Sylvia Luchez" />
					<p><strong>Sylvia Luchez</strong> studied at the University of Chicago, where she obtained her B.A. in English Language and Literature with a minor in Visual Arts. She holds an M.Ed. in Secondary Visual Arts Education and is licensed to teach art at the high school level and English Language Arts at the middle school level. Sylvia taught K-8 art and language arts at Chicago Grammar School in Chicago for 5 years. She student taught Visual Arts at Oak Park and River Forest High School.</p>
					<p>Sylvia believes that art can be a powerful way of helping students to understand academic concepts and develop social-emotional skills. She loves working with students one-on- one and catering lessons to students’ interests and needs, so that students can walk away from each tutoring session having engaged with the material and learned it deeply. Sylvia also works to find academic strategies that will help students to stay organized with their materials and interpret content knowledge they receive at school, so they can retain this knowledge and be able to apply it to diverse situations.</p>
				</div>
			</div>

			<div class="block">
				<h1>Rates</h1>
				<p>Our rate differs depending on the age group, learning needs of the student, and location of the tutoring sessions. Please feel free to email or call us for more information.</p>
				<div class="contacts">
					<div><a href="mailto:<?php echo $config["email"] ?>"><?php echo $config["email"] ?></a></div>
<?php
				foreach($config["phones"] as $name => $phone) :
?>
					<div><?php echo $name; ?>: <?php echo $phone; ?></div>
<?php
				endforeach;
?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>