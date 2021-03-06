<!DOCTYPE html>
<html lang="en">
<body>
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><b>AI</b>Games</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="navbar-login-singup">
                <a class="navbar-login" data-toggle="modal" data-target="#loginModal">Log In / Sign Up</a>
            </li>
        </ul>
    </nav>

    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog-centered" id="loginDialogFade">
            <div class="form">
                <form class="login-form" method="POST" action="mail/registration_email.php">
                    <input id="inputEmail" name="email" type="text" placeholder="User Email"/>
                    <p class="help-block text-danger wrong-email"></p>

                    <input id="inputPassword" type="password" placeholder="Password"/>
                    <p class="help-block text-danger wrong-pass"></p>

                    <button onclick="LogIn();">Login</button>

                    <span class="d-inline-block message mt-2" style="font-size: 13px; text-transform: none !important;">
                        <p style="display: inline" class="m-0 p-0">Not registered? </p>
                        <button type="submit" onclick="Create()" class="d-inline btn-link p-0" role="link"
                                style="text-transform: none !important; width: auto">
                            Sign Up
                        </button>
                    </span>
                    <!--<a type="submit" id="signUp-link">Sign Up</a></p>-->
                    <!--<button type="submit" value="Sign Up">Sign Up</button>-->
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#signUp-link").click(function () {
            var email = email;
            alert("AjaxFires");
            $.ajax({
                type: "POST",
                url: "mail/registration_email.php",
                data: "email=" + email,
                success: function () {
                    //do stuff after the AJAX calls successfully completes
                    window.location = 'mail/registration_email.php?email=' + email;
                    Create();
                },
                error: function () {
                    alert("ajax failed");
                }
            });
        });
    </script>
</body>
</html>