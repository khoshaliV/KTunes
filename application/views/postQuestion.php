<!--<<html>
    <body>
<form action="/ForumCW/index.php/auth/askquestion" method="POST">
    Your question title(max 50 characters):
        <input type="text" name='title' length="50" size="100">  <br>
    Description(max 10 characters):
        <input type="text" name='description' length="100" size="1000">  <br>
    Tags:
        <input type="text" name='tag' length="15" size="500"> <br>
    
    <input type="submit" value='Post!'>
</form>
<span style="color: red"><?php echo $errmsg ?></span> <br>

    </body>
</html>-->

<html>

    <head></head>
    <body bgcolor="#E6E6FF">
        <link rel="stylesheet" href="../../css/poststyle.css" media="screen" type="text/css" />
        <a href="html_images.asp" target="_blank">Khoshali Vithyashankar</a>
        <input type="button" value="Logout" style="float: right;"/>

        <form class="navbar-form navbar-left" role="search" style="float: right;">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>

        <form action="http://localhost/ForumCW/index.php/questionController/createQuestion" method="POST">
            <label class="label-name">KTunes</label>
            <ul class="form-style-1">

                <li><input type="text" name="hiddenFieldID" value="root" style="display: none;"></li>
                <li><label>Title<span class="required">*</span></label>
                    <input type="text" name="title" class="field-divided" placeholder="First" />&nbsp;
                <li>
                    <label>Description <span class="required">*</span></label>
                  <!--  <input type="email" name="field3" class="field-long" />-->
                    <textarea name="description" id="field5" class="field-long field-textarea"></textarea>
                </li>
                <li>
                    <label>Category</label>
                    <select name="category" class="field-select">
                        <option value="Classic">Classic</option>
                        <option value="Contemporary">Contemporary</option>
                        <option value="Rock">Rock</option>
                    </select>
                </li>
                <li>
                    <label>Tags<span class="required">*</span></label>

                    <textarea name="tags" id="field5" class="field-long field-textarea" rel="tag"></textarea>
                </li>
                <li>
                    <input type="submit" value="Ask" />
                </li>
            </ul>
        </form>
        
        
        <a class="option-list" href="" target="_blank">Home  |</a><a href="" target="_blank">  My Profile  |  </a><a href="" target="_blank">Contact Us</a>

    </body>
</html>