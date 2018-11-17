<?php


use App\Jobs\AppMailerJob;


if (!function_exists('sendmail')) {

	function sendmail(array $data) {
		try {
			
			dispatch(new AppMailerJob($data));

		} catch (\Exception $e) {

			throw $e;
		}
	}

}