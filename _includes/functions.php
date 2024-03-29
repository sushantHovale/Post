
<?php

	function mysqli_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysqli_error());
		}
	}
	
	function get_all_subjects() {
		global $connection;
		$query = "SELECT * 
				FROM heading 
				ORDER BY id ASC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function get_pages_for_subject($subject_id) {
		global $connection;
		$query = "SELECT * 
				FROM sub_heading 
				WHERE sub_id = {$subject_id} 
				ORDER BY position ASC";
		$page_set = mysqli_query($connection,$query);
		confirm_query($page_set);
		return $page_set;
	}

	function get_subject_by_id($subject_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM heading ";
		$query .= "WHERE id=" . $subject_id ." ";
		$query .= "LIMIT 1";
		$result_set = mysqli_query($connection,$query);
		confirm_query($result_set);
		// REMEMBER:
		// if no rows are returned, fetch_array will return false
		if ($subject = mysqli_fetch_array($result_set)) {
			return $subject;
		} else {
			return NULL;
		}
	}

	function get_page_by_id($page_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM sub_heading ";
		$query .= "WHERE id=" . $page_id ." ";
		$query .= "LIMIT 1";
		$result_set = mysqli_query($connection,$query);
		confirm_query($result_set);
		// REMEMBER:
		// if no rows are returned, fetch_array will return false
		if ($page = mysqli_fetch_array($result_set)) {
			return $page;
		} else {
			return NULL;
		}
	}

	function find_selected_page() {
		global $sel_subject;
		global $sel_page;
		if (isset($_GET['subj'])) {
			$sel_subject = get_subject_by_id($_GET['subj']);
			$sel_page = NULL;
		} elseif (isset($_GET['page'])) {
			$sel_subject = NULL;
			$sel_page = get_page_by_id($_GET['page']);
		} else {
			$sel_subject = NULL;
			$sel_page = NULL;
		}
	}

	function navigation($sel_subject, $sel_page) {		
		$output = "<ul id=\"menu\">";
		$subject_set = get_all_subjects();
		while ($subject = mysqli_fetch_array($subject_set)) {
			$output .= "<li";
			if ($subject["id"] == $sel_subject['id']) { $output .= " class=\"selected\""; }
			$output .= "><a href=\"#?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["title"]}</a>";
			$page_set = get_pages_for_subject($subject["id"]);
			$output .= "<ul class=\"pages\">";
			while ($page = mysqli_fetch_array($page_set)) {
				$output .= "<li";
				if ($page["id"] == $sel_page['id']) { $output .= " class=\"selected\""; }
				$output .= "><a href=\"post.php?page=" . urlencode($page["id"]) .
					"\">{$page["sub_title"]}</a></li>";
			}
			$output .= "</li>";
			$output .= "</ul>";
		}
		$output .= "</ul>";
		return $output;
	}
	
	function get_all_subjects_index_1() {
		global $connection;
		$query = "SELECT * FROM heading WHERE id in (1,2) ";
		$query .= "LIMIT 2";
		$subject_set = mysqli_query($connection,$query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function navigation_index_1($sel_subject, $sel_page) {		
		$output = "<ul class=\"heading\">";
		$subject_set = get_all_subjects_index_1();
		while ($subject = mysqli_fetch_array($subject_set)) {
			$output .= "<li";
			if ($subject["id"] == $sel_subject['id']) { $output .= " class=\"heading\""; }
			$output .= "><a href=\"#?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["title"]}</a></li>";
			$page_set = get_pages_for_subject($subject["id"]);
			$output .= "<ul class=\"ullist\">";
			while ($page = mysqli_fetch_array($page_set)) {
				$output .= "<li";
				if ($page["id"] == $sel_page['id']) { $output .= " class=\"ullist\""; }
				$output .= "><a href=\"show.php?page=" . urlencode($page["id"]) .
					"\">{$page["sub_title"]}</a></li>";
			}
			//$output .= "</li>";
			$output .= "</ul>";
		}
		$output .= "</ul>";
		return $output;
	}
	
	function get_all_subjects_index_2() {
		global $connection;
		$query = "SELECT * FROM heading WHERE id in (3,4) ";
		$query .= "LIMIT 2";
		$subject_set = mysqli_query($connection,$query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	
	function navigation_index_2($sel_subject, $sel_page) {		
		$output = "<ul class=\"heading\">";
		$subject_set = get_all_subjects_index_2();
		while ($subject = mysqli_fetch_array($subject_set)) {
			$output .= "<li";
			if ($subject["id"] == $sel_subject['id']) { $output .= " class=\"heading\""; }
			$output .= "><a href=\"#?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["title"]}</a></li>";
			$page_set = get_pages_for_subject($subject["id"]);
			$output .= "<ul class=\"ullist\">";
			while ($page = mysqli_fetch_array($page_set)) {
				$output .= "<li";
				if ($page["id"] == $sel_page['id']) { $output .= " class=\"ullist\""; }
				$output .= "><a href=\"show.php?page=" . urlencode($page["id"]) .
					"\">{$page["sub_title"]}</a></li>";
			}
			//$output .= "</li>";
			$output .= "</ul>";
		}
		$output .= "</ul>";
		return $output;
	}
	
	function get_all_subjects_index_3() {
		global $connection;
		$query = "SELECT * FROM heading WHERE id in (5,6) ";
		$query .= "LIMIT 1";
		$subject_set = mysqli_query($connection,$query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function navigation_index_3($sel_subject, $sel_page) {		
		$output = "<ul class=\"heading\">";
		$subject_set = get_all_subjects_index_3();
		while ($subject = mysqli_fetch_array($subject_set)) {
			$output .= "<li";
			if ($subject["id"] == $sel_subject['id']) { $output .= " class=\"heading\""; }
			$output .= "><a href=\"#?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["title"]}</a></li>";
			$page_set = get_pages_for_subject($subject["id"]);
			$output .= "<ul class=\"ullist\">";
			while ($page = mysqli_fetch_array($page_set)) {
				$output .= "<li";
				if ($page["id"] == $sel_page['id']) { $output .= " class=\"ullist\""; }
				$output .= "><a href=\"show.php?page=" . urlencode($page["id"]) .
					"\">{$page["sub_title"]}</a></li>";
			}
			//$output .= "</li>";
			$output .= "</ul>";
		}
		$output .= "</ul>";
		return $output;
	}	
	
	function navigation_user($sel_subject, $sel_page) {		
		$output = "<ul id=\"menu\">";
		$subject_set = get_all_subjects();
		while ($subject = mysqli_fetch_array($subject_set)) {
			$output .= "<li";
			if ($subject["id"] == $sel_subject['id']) { $output .= " class=\"selected\""; }
			$output .= "><a href=\"#?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["title"]}</a>";
			$page_set = get_pages_for_subject($subject["id"]);
			$output .= "<ul class=\"pages\">";
			while ($page = mysqli_fetch_array($page_set)) {
				$output .= "<li";
				if ($page["id"] == $sel_page['id']) { $output .= " class=\"selected\""; }
				$output .= "><a href=\"../user/user_post.php?page=" . urlencode($page["id"]) .
					"\">{$page["sub_title"]}</a></li>";
			}
			$output .= "</li>";
			$output .= "</ul>";
		}
		$output .= "</ul>";
		return $output;
	}
	
	
?>