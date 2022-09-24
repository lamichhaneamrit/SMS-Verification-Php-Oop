<?php
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP: Login and Registration With Email & Mobile Verification</title>
    <link rel="stylesheet" href='assets/css/style.css' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body class="body">
    <div class="wrapper">
        <div class="wrapper-inner">
            <div class="header-wrapper">
                <h1>Wellcome</h1>
                <h3>This is an simple Login and Registration system with Email & Mobile verification</h3>
            </div>
            <!--HEADER WRAPPER ENDS-->
            <div class="sign-div">
                <div class="sign-in">
                    <form method="POST">
                        <div class="signIn-inner">
                            <div class="input-div">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <button type="submit" name="login">Login</button>
                            </div>
                            <div class="error shake-horizontal">Errors shows here</div>
                    </form>
                </div>
            </div>
            <div class="r-pass">
                <a href="account/recovery/">I forget my Password</a>
            </div>
        </div>
        <!--CONTENT WRAPPER ENDS-->
        <div class="footer-wrapper">
            <div class="inner-footer-wrap">
                <div class="sign-up"><button class="sign-up-btn" onclick="location.href=' account/settings';"
                        type="submit">Sign Up</button></div>
            </div>
        </div>
        <!--FOOTER WRAPPER ENDS-->
    </div>
    </div>
    <!--WRAPPER ENDS-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</html>