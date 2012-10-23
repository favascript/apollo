<div id="page-profile">
	<h1>Your profile</h1>
	<h6>*required</h6>
	
	<div class="section 505 left">
		<div class="component">
			<header>
				<h2>Personal Info</h2>
				<h3>To be shown in Alumni Directory</h3>
			</header>
			<form name="personal-info" id="personal-info" action="#">
				<fieldset>
					<ul>
						<li>
							<label for="first-name">*First Name</label>
							<input id="first-name" name="first-name" type="text" required autofocus>
						</li>
						<li>
							<label for="last-name">*Last Name</label>
							<input id="last-name" name="last-name" type="text" required>
						</li>
						<li>
							<label for="degree">Degree</label>
							<span class="no-edit">Bachelor of Science in Education/Elementary Teacher Education</span>
						</li>
						<li>
							<label for="degree-year">Year Degree Received</label>
							<span class="no-edit">2004</span>
						</li>
						<li>
							<label for="campus">Campus</label>
							<span class="no-edit">Boise</span>
						</li>
						<li>
							<label for="employer">Employer Name</label>
							<input id="employer" name="employer" type="text">
						</li>
						<li>
							<label for="employer-city">Employer City</label>
							<input id="employer-city" name="employer-city" type="text">
						</li>
						<li>
							<label for="employer-state">Employer State/Province</label>
							<select name="employer-state" id="employer-state">
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
								<option value="option5">option5</option>
							</select>
						</li>
						<li>
							<label for="industry">Industry</label>
							<select name="industry" id="industry">
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
								<option value="option5">option5</option>
							</select>
						</li>
						<li>
							<label for="title">Title</label>
							<select name="title" id="title">
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
								<option value="option5">option5</option>
							</select>
						</li>
						<li>
							<label for="military-branch">Current or Former Military Branch, if any</label>
							<select name="military-branch" id="military-branch">
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
								<option value="option5">option5</option>
							</select>
						</li>
					</ul>
				</fieldset>				
			</form><!-- #personal-info -->
		</div><!-- .component -->
		<div class="component">
			<header>
				<h2>Additional Info</h2>
			</header>
			<form name="additional-info" id="additional-info" action="#">
				<fieldset>
					<ul>
						<li>
							<label for="email">*Email Address</label>
							<input id="email" name="email" type="text" required>
						</li>
						<li>
							<label for="email-confirm">*Confirm Email Address</label>
							<input id="email-confirm" name="email-confirm" type="text" required>
						</li>
						<li>
							<label for="secondary-email">Secondary Email</label>
							<input id="secondary-email" name="secondary-email" type="text">
						</li>
						<li>
							<label for="address-1">*Address 1</label>
							<input id="address-1" name="address-1" type="text" required>
						</li>
						<li>
							<label for="address-2">Address 2</label>
							<input id="address-2" name="address-2" type="text">
						</li>
						<li>
							<label for="city">*City</label>
							<input id="city" name="city" type="text" required>
						</li>
						<li>
							<label for="state-province">*State/Province</label>
							<select name="state-province" id="state-province">
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
								<option value="option5">option5</option>
							</select>
						</li>
						<li>
							<label for="country">*Country</label>
							<select name="country" id="country">
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
								<option value="option5">option5</option>
							</select>
						</li>
						<li>
							<label for="zip-code">*Zip/Postal Code</label>
							<input id="zip-code" name="zip-code" type="text" required>
						</li>
						<li>
							<label for="phone-type">Phone Type</label>
							<select name="phone-type" id="phone-type">
								<option value="option1">option1</option>
								<option value="option2">option2</option>
								<option value="option3">option3</option>
								<option value="option4">option4</option>
								<option value="option5">option5</option>
							</select>
						</li>
						<li>
							<label for="phone-number">Phone Number</label>
							<input id="phone-number" name="phone-number" type="text">
						</li>
					</ul>
				</fieldset>
			</form><!-- #additional-info -->
		</div><!-- .component -->
	</div><!-- .section.505 -->
	
	<div class="section 425 right">
		<div class="component">
			<header>
				<h2>Profile Photo</h2>
			</header>
			<img src="img/sandbox/thumb/your-profile.jpg">
			<input type="file">
			<input type="checkbox" name="show-in-dir" id="show-in-dir" value="yes" checked> <label for="show-in-dir">Show in directory</label>
		</div><!-- .component -->
		<div class="component">
			<header>
				<h2>Additional Info</h2>
			</header>
			<form name="birthdate-gender" id="birthdate-gender" action="#" >
				<fieldset>
					<ul>
						<li>
							<label for="birthdate">Birthdate</label>
							<select name="birthmonth" id="birthmonth">
								<option value="jan">January</option>
								<option value="feb">February</option>
								<option value="mar">March</option>
								<option value="apr">April</option>
								<option value="may">May</option>
							</select>
							<select name="birthday" id="birthday">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
							</select>
							<select name="birthyear" id="birthyear">
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
							</select>
						</li>
						<li>
							<label for="gender">Gender</label>
							<select name="gender" id="gender">
								<option value="female">Female</option>
								<option value="male">Male</option>
								<option value="option3">Transgender Female</option>
								<option value="option4">Transgender Male</option>
								<option value="option5">Other</option>
							</select>
						</li>
					</ul>
				</fieldset>
			</form><!-- #birthdate-gender -->
		</div><!-- .component -->
		<div class="component">
			<header>
				<h2>Set your password</h2>
			</header>
			<form name="password-reset" id="password-reset" action="#">
				<fieldset>
					<ul>
						<li>
							<label for="password">*Create a Password</label>
							<input type="text" name="password" id="password" required>
						</li>
						<li>
							<label for="password-confirm">*Confirm Your Password</label>
							<input type="text" name="password-confirm" id="password-confirm" required>
						</li>
					</ul>
				</fieldset>
			</form><!-- #password-reset -->
		</div><!-- .component -->
		<div class="component">
			<header>
				<h2>Options</h2>
				<h3>Phoenix representatives may contact me about the following:</h3>
			</header>
		</div><!-- .component -->
	</div><!-- .section.425.right -->
</div><!-- #page-profile -->