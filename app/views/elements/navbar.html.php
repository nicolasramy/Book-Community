<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="/">Book Community</a>

			<div class="nav-collapse">
			<ul class="nav">
				<li>
					<?php echo $this->html->link('Books', array('Books::index')); ?>
				</li>
				<li>
					<?php echo $this->html->link('Authors', array('Authors::index')); ?>
				</li>
			</ul>

			<ul class="nav pull-right">
				<li>
					<?php echo $this->html->link('Login', array('Authors::login')); ?>
				</li>
				<li>
					<?php echo $this->html->link('Register', array('Authors::add')); ?>
				</li>
				<li>
					<?php echo $this->html->link('Logout', array('Authors::logout')); ?>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>
