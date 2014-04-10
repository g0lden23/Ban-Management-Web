<?php require_once "header.php"; ?>

    <div class="container">
		<ul class="wizard">         
			<li><span class="badge">1</span> <span class="hidden-xs">Welcome</span></li>
			<li class="active"><span class="badge">2</span> <span class="hidden-xs">Configuration</span></li>
			<li><span class="badge">3</span> <span class="hidden-xs">Installation</span></li>
			<li><span class="badge">4</span> <span class="hidden-xs">Finished</span></li>
		</ul>
		
		<div class="content">
			<h1>Configuration</h1>
			<form role="form" name="form" class="row center-text">
				<div class="form-section col-sm-6">
					<h2>Database</h2>
					<div class="form-group">
						 <label>Hostname</label><input type="text" class="form-control" name="hostname" placeholder="localhost" />
					</div>
					<div class="form-group">
						 <label>Username</label><input type="text" class="form-control" name="username" placeholder="root" />
					</div>
					<div class="form-group">
						 <label>Password</label><input type="password" class="form-control" name="password" placeholder="" />
					</div>
					<div class="form-group">
						 <label>Database</label><input type="text" class="form-control" name="database" placeholder="ban-management" />
					</div>
					<div class="form-group">
						 <label>Table Prefix</label><input type="text" class="form-control" name="prefix" placeholder="bm_" />
						 <span class="help-block">This table prefix will be used for all tables generated by this site.</span>
					</div>
				</div>
				
				<div class="form-section col-sm-6">
					<h2>System settings</h2>
					<div class="form-group">
						 <label>Site URL</label><input type="text" class="form-control" name="location" placeholder="http://www.awesome-server.com" />
					</div>
					<div class="form-group">
						 <label>Locale</label>
						 <select name="locale" size="1" class="form-control">
						  <option>en</option>
						  <option>de</option>
						</select>
					</div>
					<div class="form-group">
						 <label>Security Key</label><input type="text" class="form-control" name="password" maxlength="32" placeholder="TTCk1YmjWQqUuz9HYaStRdbgrFNr7PNk" />
					</div>
					<div class="form-group">
						<label>Heads up!</label>
						 <p>Once the installation is finished, please go on creating a master account for the admin panel.</p>
					</div>
				</div>
			</form>
		</div>
		
		<div class="buttons">
			<a href="step3.php" class="btn btn-primary">Continue <i class="fa fa-chevron-right"></i></a>
		</div>
		
		<div class="footer">
			<hr>
			&copy; 2014 by the <a href="https://github.com/ftbastler/Ban-Management-Web/graphs/contributors">Ban-Management WebApp crew</a>.
		</div>
    </div>

<?php require_once "footer.php"; ?>