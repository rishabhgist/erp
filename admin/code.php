
		if ($_POST['fname'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> First name is Empty!</div>';
		}elseif ($_POST['lname'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Last name is Empty!</div>';
		}elseif ($_POST['father'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Father name is Empty!</div>';
		}elseif ($_POST['mother'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Mother name is Empty!</div>';
		}elseif ($_POST['email'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Email is Empty!</div>';
		}elseif ($_POST['dob'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Date of Birth is Empty!</div>';
		}elseif ($_POST['course'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Course is Empty!</div>';
		}elseif ($_POST['sessionf'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Session From is Empty!</div>';
		}elseif ($_POST['sessiont'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Session To is Empty!</div>';
		}elseif ($_POST['address2'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Address is Empty!</div>';
		}elseif ($_POST['mobile'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Mobile is Empty!</div>';
		}elseif ($_POST['address1'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Address is Empty!</div>';
		}

		/*	Education Field Check */
						
		/*High School */

		elseif ($_POST['highschool_school'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> High School is Empty!</div>';
		}elseif ($_POST['highschool_board'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> High School Board is Empty!</div>';
		}elseif ($_POST['highschool_percent'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> High School Percent is Empty!</div>';
		}

		/*Intermediate*/

		elseif ($_POST['inter_school'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Intermediate School is Empty!</div>';
		}elseif ($_POST['inter_board'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert">Intermediate Board is Empty!</div>';
		}elseif ($_POST['inter_percent'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Intermediate Percentage is Empty!</div>';
		}

		/*Graduation*/

		elseif ($_POST['grad_school'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Graduation School is Empty!</div>';
		}elseif ($_POST['grad_board'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Graduation Board is Empty!</div>';
		}elseif ($_POST['grad_percent'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Graduation Percentage is Empty!</div>';
		}




	}else {