<?php
Kirby::plugin('mh/versions', [
  'siteMethods' => [
    'getTimeSinceRelease' => function () {
			$today = new Datetime(date('Y-m-d'));
			$filename = './VERSION';
			if (file_exists($filename)):
				$changed = filemtime($filename);
				$changedDate = date("Y-m-d", $changed);
				$changed = filemtime($filename);
				$d1=strtotime($changed);
	    	$d2=ceil(($changed-time())/60/60/24) * -1;

				if ($d2 >= 30):
					$months =ceil($d2/30);
					if ("months" == 1):
						$released = $months." month ago";
					else:
						$released = $months." months ago";
					endif;

				elseif ($d2 >= 2):
					$released = $d2 ." days ago";

				elseif ($d2 == 1):
					$released = "yesterday";

				elseif ($d2 == 0):
					$hours = ceil(($changed-time())/60/60) * -1;
					if ($hours < 1):
						$minutes = ceil(($changed-time())/60) * -1;
						$released = $minutes ." minutes ago";
					else:
						$released = $hours ." hours ago";
					endif;
				endif;
			return $released;
			endif;
			return "Not Available";
		},

		'getCurrentVersion' => function () {
			$filename = './VERSION';
			if (file_exists($filename)):
				$version = file_get_contents($filename , true);
			else:
				$version = "X.X.X";
			endif;
			return $version;
		},

		'getTimeSinceContentUpdate' => function () {
			$changed = $this->modified('Y-m-d H:i');
				$d1=strtotime($changed);
				$d2=ceil(($d1-time())/60/60/24) * -1;
				if ($d2 >= 30):
					$months =ceil($d2/30);
					if ("months" == 1):
						$released = $months." month ago";
					else:
						$released = $months." months ago";
					endif;

				elseif ($d2 >= 2):
					$released = $d2 ." days ago";

				elseif ($d2 == 1):
					$released = "yesterday";

				elseif ($d2 == 0):
					$hours = ceil(($d1-time())/60/60) * -1;
					if ($hours < 1):
						$minutes = ceil(($d1-time())/60) * -1;
						$released = $minutes ." minutes ago";
					else:
						$released = $hours ." hours ago";
					endif;
				endif;
			return $released;
		},
	]
]);
?>