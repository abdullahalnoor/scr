<form action="POST" class="form-area">
                <div class="group">
                   <h1 class="form-heading">Create New Account</h1>
                </div>
                <div class="group">
                    <input type="text" class="control" name="full_name" placeholder="Enter Name.">
                </div>
                <div class="group">
                    <input type="email" class="control" name="email" placeholder="Enter Email.">
                </div>
                <div class="group">
                    <input type="password" class="control" name="password" placeholder="Enter password.">
                </div>
                <div class="group">
                    <label for="file" id="file-label" class="file-label">
                        <i class="fas fa-cloud-download-alt upload-icon"></i>
                        Choose Image
                    </label>
                    <input type="file" id="file" class="file" name="img" >
                </div>
                <div class="group">
                    <input type="submit"  class="btn signup-btn account-btn" value="Sign Up" >
                </div>
                <div class="group">
                    <a href="login.php" class="link">already have a account ?</a>
                </div>
            </form>