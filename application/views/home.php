
<html>

    <head>
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

    </head>
    <body bgcolor="#E6E6FF" class="dataArea">
        <link rel="stylesheet" href="../../css/poststyle.css" media="screen" type="text/css" />
        <a href="html_images.asp" target="_blank"><?php
            echo 'Welcome back ' . $user["name"];
            ?>
        </a>
        <input type="button" value="Logout" style="float: right;"/>   


        <form class="navbar-form navbar-left" role="search" style="float: right;">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>

        <form>
            <label class="label-name">KTunes</label> <br>

            <label style="font-size: 50;">Trending Now...</label>
            <button class="button-ask1">Ask Question</button><br>
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


        <a class="option-list" href="" target="_blank">Home  |</a><a href="" target="_blank">  My Profile  |  </a><a href="" target="_blank">Contact Us</a>

    </body>
</html>