<form action="" method="POST" class="form-area" enctype= multipart/form-data>
                <div class="group">
                   <h1 class="form-heading">Create New Account</h1>
                </div>
                <div class="group">
                    <input type="text" class="control" name="full_name" placeholder="Enter Name.">
                    <?php if(isset($name_error)):?>
                        <span class="error">
                        <?php echo  $name_error ?>
                        </span>
                    <?php endif;?>
                </div>
                <div class="group">
                    <input type="email" class="control" name="email" placeholder="Enter Email.">
                    <?php if(isset($email_error)):?>
                        <span class="error">
                        <?php echo  $email_error ?>
                        </span>
                    <?php endif;?>
                </div>
                <div class="group">
                    <input type="password" class="control" name="password" placeholder="Enter password.">
                    <?php if(isset($password_error)):?>
                        <span class="error">
                        <?php echo  $password_error ?>
                        </span>
                    <?php endif;?>
                </div>
                <div class="group">
                    <label for="file" id="file-label" class="file-label">
                        <i class="fas fa-cloud-download-alt upload-icon"></i>
                        Choose Image
                    </label>
                    <input type="file" id="file" class="file" name="img" >
                    <?php if(isset($img_error)):?>
                        <span class="error">
                        <?php echo  $img_error ?>
                        </span>
                    <?php endif;?>
                </div>
                <div class="group">
                    <input type="submit" name="signup" class="btn signup-btn account-btn" value="Sign Up" >
                </div>
                <div class="group">
                    <a href="login.php" class="link">already have a account ?</a>
                </div>
            </form>