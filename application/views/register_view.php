<html>
    <body>
<form action="/ForumCW/index.php/auth/createaccount" method="POST">
    Enter your name (max 50 characters):
        <input type="text" name='name' length="20" size="50">  <br>
    Enter your username (max 10 characters):
        <input type="text" name='uname' length="10" size="10">  <br>
    Enter password:
        <input type="password" name='pword' length="15" size="30"> <br>
    Confirm password:
        <input type="password" name='conf_pword' length="15" size="30">
    <input type="submit" value='Register!'>
</form>
<span style="color: red"><?php echo $errmsg ?></span> <br>

    </body>
</html>
