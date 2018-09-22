<!DOCTYPE HTML>
<html>
<?php
    include_once "head.php" ;
    ?>
<body>
    <div class="main">
            <div class="login">
                    <div class="login-top">
                        <img src="../images/p.png">
                    </div>
                    <h1>Welcome Mr. Mafmudin</h1>
                    <div class="login-bottom">
                    <form method ="post" action="proses_login.php">
                            <input type="text" placeholder="Pengguna" name="pengguna" required=" ">
                            <input type="password" class="password" name="pass" placeholder="Kata Sandi" required=" ">	
                            <input type="submit" value="login"><br/>
                            <input type="submit" value="cancel" onclick="../">
                    </form>
                    </div>
            </div>
    </div>
<?php
    include_once "foot.php" ;
    ?>
</body>
</html>