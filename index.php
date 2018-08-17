<html>
    <head>
        <title>Login</title>
        <!-- <link rel="stylesheet" type="text/css" href="./css/bootstrap.css"> -->
        <link rel="icon" type="image/png" href="images/facebook.png"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <style>
        </style>
    </head>
    <body>
        <div class="row" id="row">
            <div class="box">
                    <div class="form-group">
                        <h3>Facebook-Timeline Challenge</h3>
                        <?php
                            require_once 'config.php';
                                echo '<div name="login" class="loginBox"><a href="' . htmlspecialchars($loginUrl) . '" style="text-decoration: none !important; color: white;"><i class="fab fa-facebook"></i>&nbsp;Connect with Facebook</a></div>';
                        ?>
                    </div>
            </div>
        </div>
    </body>    
</html>