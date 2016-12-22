<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Examination</title>
</head>
<body>
	<?php
		var_dump($student);
		var_dump($courses);
	?>
	<h1> Student Dashboard </h1>
	<?php
	foreach($courses as $course) { ?>
		<a href="/classes/course_info/<?=$course['course_id']?>" > <button> <?=$course['course_name']?>  </a> </button>
	<?php
	}
	?>
</body>
</html>