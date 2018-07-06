
<?php include 'includes/header.php'; ?>

<body>

	<div class="image-frame">
		<div class="image-background">
		</div>

		<div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url()?>assets/images/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" role="form" action="<?php echo base_url('login/prosesLogin');?>" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->

        </div>

	</div>
</body>

<?php include 'includes/footer.php'; ?>