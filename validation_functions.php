	<?php 
		//presence
		function has_presence($v){
			return isset($v) && $v !== ""; 
		}
		//strlength
		// $value="";
		// $min = 3;
		// if(strlen($value) < $min)
		// 	echo 'Validation failed<br>';
		// $max = 6;
		function has_max_length($v, $max){
			return strlen($v) <= $max;
		}
		//type
		// if(!is_string($value))
		// 	echo 'Validation failed. <br>';
		//inclusion
		function has_inclusion_in($v, $set){
			return in_array($v, $set);
		}
		//unique

		//format
		// if(!preg_match('/@/', $value)){
		// 	echo 'Validation failed<br>';
		// } 

		function validate_max_lengths($fields_with_max_lengths){
			global $errors;
			foreach($fields_with_max_lengths as $field => $max){
				$value = trim($_POST[$field]);
				if(!has_max_length($value, $max))
					$errors[$field] = ucfirst($field) . ' is too long.';
			}
		}

		function form_errors($errors=array()){
			$output="";
			if(!empty($errors)){
				$output .= "<div class=\"error\">";
				$output .= "Please fix the following errors:";
				$output .= "<ul>";
				foreach($errors as $key => $error) {
					$output .= "<li>{$error}</li>";
				}
				$output .= "</ul>";
				$output .= "</div>";
			}
			return $output;
		}
	?>
