<?php
	function f($a) {
		echo "
			$a
		";
	}
	function project_preview($name, $desc, $img, $link)
	{
		echo <<<EOF
			<a class="project" href="$link">
				<img src="$img" alt="">
				<h3> $name </h3>
				<p> $desc </p>
			</a>
		EOF;
		
	}
?>