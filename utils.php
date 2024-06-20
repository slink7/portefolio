<?php
	function f($a) {
		echo "
			$a
		";
	}
	function project_preview($name, $desc, $img, $link)
	{
		echo <<<EOF
			<a class="project_preview" href="$link">
				<div style="project_image">
					<img src="$img" alt="">
				</div>
				<div class="project_info">
					<h3> $name </h3>
					<p> $desc </p>
				</div>
			</a>
		EOF;
		
	}
?>