<!DOCTYPE html>
<!--- TODO: Implentet "dark" with livewire probaly -->
<html lang="en" class="dark">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Portfolio - PHP Developer</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<header>
		<h1>My Portfolio</h1>
		<nav>
			<ul>
				<li><a href="#about">About</a></li>
				<li><a href="#projects">Projects</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<section id="about">
			<h2>About Me</h2>
			<p>I am a PHP developer with several years of experience in developing web applications and dynamic websites. My skills include:</p>
			<ul>
				<li>PHP</li>
				<li>MySQL</li>
				<li>HTML/CSS</li>
				<li>JavaScript/jQuery</li>
				<li>Bootstrap</li>
			</ul>
		</section>
		
		<section id="projects">
			<h2>Projects</h2>
			<ul>
				<li>
					<h3>Project 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor vitae lectus nec bibendum.</p>
				</li>
				<li>
					<h3>Project 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor vitae lectus nec bibendum.</p>
				</li>
				<li>
					<h3>Project 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor vitae lectus nec bibendum.</p>
				</li>
			</ul>
		</section>
		
		<section id="contact">
			<h2>Contact Me</h2>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name">
				
				<label for="email">Email:</label>
				<input type="email" id="email" name="email">
				
				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea>
				
				<input type="submit" value="Send">
			</form>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 My Portfolio. All rights reserved.</p>
	</footer>

	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
