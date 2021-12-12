<div class="col-md-4 sidebar">
	<?php dynamic_sidebar('filter');?>
	<div class="search-box sidebar-box">	
		<ul class="nav nav-tabs">
			<li class="active">
        		<a  href="#for-sale" data-toggle="tab">
        			<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-sale.png">FOR SALE
        		</a>
			</li>
			<li>
				<a href="#for-rent" data-toggle="tab">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-rent.png">FOR RENT
				</a>
			</li>
		</ul>
		<div class="tab-content ">
		  	<div class="tab-pane <?= (empty($_GET['for']) || $_GET['for'] == 'sale') ? 'active' : ''; ?>" id="for-sale">
		  		<form action="<?= get_home_url();?>">
				<input type="hidden" name="for" value="sale">
	          	<div class="property-location">
	          		<label>Property Location [FOR SALE]</label>
	          		<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Enter Location
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Sydney</a></li>
						    <li><a href="#">Melbourne</a></li>
						</ul>
					</div>
	          	</div>
	          	<div class="property-status">
	          		<label>Property Status</label>
	          		<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">All Status
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Available</a></li>
						    <li><a href="#">Under Contract</a></li>
						</ul>
					</div>
	          	</div>
	          	<div class="property-type">
	          		<label>Property Type</label>
	          		<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Type
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Type A</a></li>
						    <li><a href="#">Type B</a></li>
						    <li><a href="#">Type C</a></li>
						</ul>
					</div>
	          	</div>
	          	<div class="property-bathroom">
	          		<label>Bath Room</label>
	          		<select class="form-control dropdown" name="bathroom">
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '') ? 'selected' : ''; ?> value="">All</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '1') ? 'selected' : ''; ?> value="1">1</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '2') ? 'selected' : ''; ?> value="2">2</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '3') ? 'selected' : ''; ?> value="3">3</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '4') ? 'selected' : ''; ?> value="4">4</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '5') ? 'selected' : ''; ?> value="5">5</option>
	          		</select>
	          	</div>
	          	<div class="property-feet">
	          		<label>Square Feet</label>
	          		<div class="square-feet">
	          			<input name="squarefeet" type="text" id="amount" value="<?= (!empty($_GET['squarefeet'])) ? $_GET['squarefeet'] : '0 - 150'; ?>">
	          		</div>
					<div id="slider-range"></div>
	          	</div>
	          	<button class="default-button-blue">
	          		<i class="fa fa-search" aria-hidden="true"></i> SEARCH
	          	</button>
	          	</form>
			</div>
    		<div class="tab-pane <?= (!empty($_GET['for']) && $_GET['for'] == 'rent') ? 'active' : ''; ?>" id="for-rent">
    			<form action="<?= get_home_url();?>">
    				<input type="hidden" name="for" value="rent">
	          	<div class="property-location">
	          		<label>Property Location [FOR RENT]</label>
	          		<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Enter Location
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Sydney</a></li>
						    <li><a href="#">Melbourne</a></li>
						</ul>
					</div>
	          	</div>
	          	<div class="property-status">
	          		<label>Property Status</label>
	          		<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">All Status
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Available</a></li>
						    <li><a href="#">Under Contract</a></li>
						</ul>
					</div>
	          	</div>
	          	<div class="property-type">
	          		<label>Property Type</label>
	          		<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Type
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Type A</a></li>
						    <li><a href="#">Type B</a></li>
						    <li><a href="#">Type C</a></li>
						</ul>
					</div>
	          	</div>
	          	<div class="property-bathroom">
	          		<label>Bath Room</label>
	          		<select class="form-control dropdown" name="bathroom">
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '') ? 'selected' : ''; ?> value="">All</option>s
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '1') ? 'selected' : ''; ?> value="1">1</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '2') ? 'selected' : ''; ?> value="2">2</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '3') ? 'selected' : ''; ?> value="3">3</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '4') ? 'selected' : ''; ?> value="4">4</option>
	          			<option <?= (!empty($_GET['bathroom']) && $_GET['bathroom'] == '5') ? 'selected' : ''; ?> value="5">5</option>
	          		</select>
	          	</div>
	          	<button class="default-button-blue">
	          		<i class="fa fa-search" aria-hidden="true"></i> SEARCH
	          	</button>
	            </form>
			</div>
		</div>
		</div>
		<div class="contact-our-agent sidebar-box clear">
			<div class="sidebar-title">
				CONTACT OUR AGENT
			</div>
			<div class="content-sidebar clear">
				<div class="data-agent text-center clear">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/agent.jpeg">
					<div class="agent-name">
						Jhon Doel
					</div>
				</div>
				<div class="col-md-6 agent-link">
					<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:john@tonjoo.com?Subject=Hello%20John">john@tonjoo.com</a>
				</div>
				<div class="col-md-6 agent-link">
					<i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+6227421678">(+62) 274 21678</a>
				</div>
			</div>
		</div>
		<div class="leave-message sidebar-box">
			<div class="sidebar-title">
				LEAVE MESSAGE
			</div>
			<div class="form-message content-sidebar">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="message" placeholder="Message">
				<button>
					SUBMIT
				</button>
			</div>
		</div>
</div>