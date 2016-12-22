<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Online Examination</title>
		</head>
		<body>
			<?php
				var_dump($teacher);
				var_dump($courses);
			?>
			<h1> Teacher Dashboard </h1>

			<p> Dashboard should show </p>
			<ol>
				<li> Classes by quarter/year </li>
				<li> Students in the classes</li>
				<li> Exams for each class</li>
			</ol>
			<h3> Current Courses </h3>
			
			<?php
			foreach($courses as $course) {
			
			?>
			<button> <?= $course['course_name'] ?> </button>
			<?php
			}
			?>
			<p>
				Teacher has the option to create, edit, delete EXAMS ONLY
			</p>
			<p>
				Teacher should be able to add students to their class
			</p>
		</body>
		</html>		