<?php
include("./includes/header.php");
?>

<div class="container">
    <section class="sec_adv">
        <div>
            <h1 style="color: blue; text-align: center; margin-top: 60px;">IAU Supplies System</h1>
        </div>
    </section>

    <section class="sec_signin<?php echo (isset($_GET['problem']) && $_GET['problem'] == 'ErrorLogin') ? ' has-error' : ''; ?>">
        <form class="myform<?php echo (isset($_GET['problem']) && $_GET['problem'] == 'ErrorLogin') ? ' has-error' : ''; ?>" 
        action="check-login.php" method="post" style="text-align: left;">
            <?php
            // Check if there's a login error
            if (isset($_GET['problem']) && $_GET['problem'] == 'ErrorLogin') {
                echo '<div style="color: red; text-align: left; margin-bottom: 10px; font-weight: bold;">
                        Login failed! Incorrect username or password.
                      </div>';
            }
            ?>
            <input type="text" name="username" placeholder="Username"
                style="margin-bottom: 10px; display: block; width: 95%;" required />
            <div style="margin-bottom: 10px; display: flex; align-items: center;">
                <input type="password" name="password" placeholder="Enter your password here"
                    style="margin-right: 10px; flex-grow: 1;" required />
                <input type="submit" value="Login" />
            </div>
            <div
                style="display: flex; align-items: center; justify-content: space-between; white-space: nowrap; width: 100%;">
                <div style="display: flex; align-items: center; padding-right: 5px;">
                    <input type="checkbox" name="rememberme" checked />
                    <label>Remember Me</label>
                </div>
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </section>
</div>

<?php
include("./includes/footer.html");
?>