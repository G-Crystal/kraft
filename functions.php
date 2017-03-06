<?php

if (!function_exists('isLoggedIn')) {

	function isLoggedIn()

	{

		if (!(isset($_SESSION['userid']) && is_numeric($_SESSION['userid'])))

			return false;

		else

			return true;

	}

}
