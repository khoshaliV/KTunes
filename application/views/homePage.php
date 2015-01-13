<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>Login</title>
        <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
        <script >
            $(document).ready(function ($) {
                $('.button-ask1').click(function (e) {
                    e.preventDefault();

                    window.location.replace("http://localhost/ForumCW/index.php/questionController/");

                });

                $('.questionView').click(function (e) {


                    e.preventDefault();
                    $.ajax({url: 'http://localhost/ForumCW/index.php/questionController/viewQuestion',
                        type: 'post',
                        data: {'questionID': $(this).attr('questionID')},
                        success: function (data) {
                            $('.dataArea').html(data);
                            $('#btnPost').bind("click", function (e) {
                                e.preventDefault();

                                $("#frmAns").submit();

                            });

                            $('#btnLike').bind("click", function (e) {
                                e.preventDefault();

                                $.ajax({url: 'http://localhost/ForumCW/index.php/questionController/like',
                                    type: 'post',
                                    data: {'questionID': $(this).attr('questionID')},
                                    success: function (data) {
                                        alert("Liked Succesfully")
                                    }
                                });

                            });
                            $('#btnDislike').bind("click", function (e) {
                                e.preventDefault();

                                $.ajax({url: 'http://localhost/ForumCW/index.php/questionController/dislike',
                                    type: 'post',
                                    data: {'questionID': $(this).attr('questionID')},
                                    success: function (data) {
                                        alert("Disliked Succesfully")
                                    }
                                });

                            });

                        }, error: function (data) {
                            //alert(data);
                        }});


                });

            });

        </script>


        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

    </head>

    <body>

        <div id="wrap">
            <div id="regbar">
                <div id="navthing">
                    <h2><a href="#" id="loginform">Login</a> | <a href="#" id="registrationform">Register</a></h2>
                    <div class="login">
                        <div class="arrow-up"></div>
                        <div class="formholder">
                            <div class="randompad">
                                <form action="index.php/auth/authenticate" method="POST">
                                    <fieldset>

                                        <label name="email">Email</label>
                                        <input name="user" type="text" value="example@example.com" />
                                        <label name="password">Password</label>
                                        <input name="pass" type="password" />
                                        <input type="submit" value="Login" />

                                        <span style="color: red"></span> <br>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="register">
                        <div class="arrow-up2"></div>
                        <div class="formholder2">
                            <div class="randompad2">
                                <fieldset>
                                    <form action="index.php/auth/createaccount" method="POST">
                                        <label name="name1">Name</label>
                                        <input name="name" type="text"/>
                                        <label name="email1">Email</label>
                                        <input name="email" type="email"/>
                                        <label name="username1">Username</label>
                                        <input name="username" type="text"/>
                                        <label name="password1">Password</label>
                                        <input name="password" type="password" />
                                        <label name="confirmpassword">Confirm Password</label>
                                        <input name="cpassword" type="password" />
                                        <input type="submit" value="Register" />
                                    </form>
                                </fieldset>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div style="background-color: whitesmoke">

            <form>
                <label class="label-name">KTunes</label> <br>

                <label style="font-size: 50;">Trending Now...</label>
                
                <button class="button-ask" style="float: right;">Questions</button>
                <button class="button-ask" style="float: right;">Tags</button>
                <button class="button-ask" style="float: right;">Users</button><br><br><bt


                    <?php foreach ($questions as $value) {
                        ?>
                        <form action="action_page.php">
                            <fieldset>

                                <h1 class="questionView" questionID="<?php echo $value['questionID']; ?>" ><?php echo $value['title']; ?>:</h1><br>

                                <br>
                                <label>6 views</label><label> <?php echo $value['likes']; ?>  votes</label><label>  0 answers </label>
                                Asked 3h ago by
                                <a><?php echo $value['userID']; ?></a><br>
                                <?php
                                $tagList = explode(" ", $value['keyword']);
                                foreach ($tagList as $row) {
                                    echo "<button>" . $row . "</button>";
                                    ?>

                                <?php } ?>
                                <br><br>
                                <input type="submit" value="Report"></fieldset>
                        </form>
                    <?php } ?>

            </form>


        </div>
      

        <script src="js/index.js"></script>

    </body>

</html>



<!--<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            .registerbutton{
                float: left;
                background-color: grey;
                width: 50%;
            }
            .loginbutton{
                float: left;
                background-color: blanchedalmond;
                width: 50%;
                margin-left: 2px;
            }
            .buttonx{
                background-color: blue;
            }
            .abc{
                background-color: blue;
                margin-left: 4px;
            }
            .registerbuttondiv{
                background-color: yellow;
                margin-left: 8px;
            }
            .loginbuttondiv{
                background-color: blueviolet;
                margin-left: 8px;
            }
            
           

        </style>
    </head>
    <body>
        <h1>K Tunes</h1>
        <h1>We be burning... :D</h1>
        <div class="container abc">
            dkggj
            <div class="row clearfix buttonx">
                <div class="col-md-6 column registerbutton">
                    <div class="registerbuttondiv"> 
                    <button type="button" class="btn btn-default">Register</button>
                    </div>
                </div>
                <div class="col-md-6 column loginbutton">
                    <div class="loginbuttondiv">
                    <button type="button" class="btn btn-default">Login</button
                    </div>
                    <h3 class="text-center">
                        ----KTUNES----
                    </h3>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-6 column">
                </div>
                <div class="col-md-6 column">
                </div>
            </div>
        </div>
    </body>
</html>
-->
