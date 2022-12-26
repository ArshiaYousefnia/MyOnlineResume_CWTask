
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resume</title>
        <link rel="stylesheet" href="../default.css">
        <script src="../main.js"></script>
    </head>
    <body>
        <div id="menu" class="box">
            <ul>
                <li>
                    <a href="../index.html">
                        <b>About</b>
                    </a>
                </li>
                <li>
                    <a href="./achievements.html">
                        <b>Achievements</b>
                    </a>
                </li>
                <li>
                    <a href="./skills and abilities.html">
                        <b>Skills</b>
                    </a>
                </li>
                <li>
                    <a href="./contactme.php">
                        Contact
                    </a>
                </li>
            <div class="clear"></div>
            </ul>
        </div>


        <div id="content" class="box">
            
        </div>

        <div id="menu" class="footer">
            <ul>
            <li>
               <a >
                   <b>arshia.yousefnia83@sharif.edu</b>
               </a>
            </li>
            <li>
                <a href="https://www.sharif.edu/" target="blank">
                <img src="../images/logo.png" width="20ps" alt="this had to be logo"/>
                </a>
            </li>
            <li>
                <a href="https://www.helli.ir/portal/" target="blank">
                <img src="../images/helli.png" width="20ps" alt="this had to be logo"/>
                </a>
            </li>
            <li>
                <a href="https://github.com/ArshiaYousefnia" target="_blank">
                    <img src="../images/gh.png" width="20ps" alt="this had to be logo"/>
                </a>
            </li>
            <li>
                <a href="https://quera.org/profile/tyjfhb" target="_blank">
                    <img src="../images/quera.png" width="20ps" alt="this had to be logo"/>
                </a>
            </li>
            <li>
                <a href="https://codeforces.com/profile/Arshia_Yousefnia" target="_blank">
                    <img src="../images/cf.png" width="100ps" alt="this had to be logo"/>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/arshiayousefnia/" target="_blank">
                    <img src="../images/insg.png" width="20ps" alt="this had to be logo"/>
                </a>
            </li>
            </ul>
        </div>
        <div id="heading">
            <b><i>please fill the following form to contact me</i></b><br>
        </div>
        <br>
        <form id="centero" method="post" action="">
            <b>first name:</b> <input type="text" required="required" name="firstname"><br>
            <b>last name:</b> <input type="text" required="required" name="lastname"><br>
            <b>association:</b> <input type="text" name="association"> <br>
            <b>e-mail:</b> <input type="email" required="required" name="email"> <br><br>
            <b>subject:<br></b> <input type="text" required="required" name="subject"> <br>
            <b>message:<br></b> <textarea name="message"></textarea> <br>
            <!--<b>attachments:</b> <input type="file"> <br><br>-->
            <input type="submit" name="button" value="finalize and send">
        </form>
        <?php
        if ( isset($_REQUEST["button"])){
        $txts =glob("../messages/*.txt");
        $count = count($txts) +1;
        $file = fopen("../messages/$count.txt","wb");
        fwrite($file,"message record\nnumber: ". $count ."\nname:\n\t" . $_REQUEST["firstname"] . " " . $_REQUEST["lastname"] . "\nassociation:\n\t" . $_REQUEST["association"] . "\nemail:\n\t" . $_REQUEST["email"] . "\nsubject:\n\t" . $_REQUEST["subject"] . "\nmessage:\n\n" . $_REQUEST["message"]);
        fclose($file);
        }
        ?>
    </body>
</html>