
<html>

    <head>
        <script >
            $(document).ready(function ($) {
                $('#btnPost').click(function (e) {
                    e.preventDefault();

                    $("#frmAns").submit();

                });


            });

        </script>



    </head>
    <body bgcolor="#E6E6FF">
        <link rel="stylesheet" href="../../css/poststyle.css" media="screen" type="text/css" />
        <a href="html_images.asp" target="_blank"> <?php echo $question[0]['userID']; ?></a>
        <input type="button" value="Logout" style="float: right;"/>

        <form class="navbar-form navbar-left" role="search" style="float: right;">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>


        <label class="label-name">KTunes</label> <br>

        <label style="font-size: 30;"><?php echo $question[0]['title'] ?></label>
        <label>Asked 3h ago by </label><a><?php echo $question[0]['userID'] ?></a>
        <button questionID="<?php echo $question[0]['questionID'] ?>" id="btnLike">Like</button><button questionID="<?php echo $question[0]['questionID'] ?>" id="btnDislike">Dislike</button>
        </br></br>

        <?php foreach ($answer as $value) {
            ?>

        

            <label><?php echo $value['answer']; ?></label><br>
            <label>4</label><label>6</label><label>Answered 3h ago by </label><a><?php echo $value['userId']; ?></a>
            <button style="float: right">Report</button>

        <?php }
        ?>


        <form id="frmAns" action="http://localhost/ForumCW/index.php/answerController/postAnswer" method="POST">
            <fieldset>
                <input type="text" name="user_id" value=" <?php echo $question[0]['userID']; ?>" style="display: none;"/>
                <input type="text" name="question_id" value=" <?php echo $question[0]['questionID']; ?>" style="display: none;"/>

                Your answer:
                <textarea name="answer" rows="5" cols="50" name="description">

                </textarea>
            </fieldset>
        </form>
        <button id = "btnPost">Post</button>





        <a class="option-list" href="" target="_blank">Home  |</a><a href="" target="_blank">  My Profile  |  </a><a href="" target="_blank">Contact Us</a>

    </body>
</html>
