<header>
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="help.php">Help</a></li>
			<li class="account-dropdown">
				<a href="vedit_account.php">Account</a>
				<ul>
					<li><a href="edit_profile.php">Edit Profile</a></li>
					<li><a href="add_product.php">Add Product</a></li>
				</ul>
			</li>
			<li><a href="signout.php">Sign Out</a></li>
		</ul>
	</nav>
</header>

<style>
	header {
		background-color: #333;
		color: #fff;
		padding: 10px 0;
		display: flex;
		justify-content: space-between;
	}
	
	nav ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		text-align: center;
	}
	
	nav ul li {
		display: inline-block;
		margin-right: 20px;
	}
	
	nav ul li a {
		color: #fff;
		text-decoration: none;
		padding: 5px 10px;
		border-radius: 5px;
		transition: background-color 0.3s ease;
	}
	
	nav ul li a:hover {
		background-color: #555;
	}
	
	nav ul li ul {
		position: absolute;
		top: 100%;
		right: 0;
		background-color: #333;
		padding: 10px;
		border-radius: 5px;
		display: none;
	}
	
	.account-dropdown ul {
		right: 0;
		left: auto;
	}
	
	nav ul li:hover ul {
		display: block;
	}
	
	nav ul li ul li {
		display: block;
		margin-bottom: 10px;
	}
	
	nav ul li ul li a {
		padding: 10px;
	}
    
</style>

