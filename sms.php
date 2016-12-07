<?php
/*#############################################################################
                                PREPARE FOR BATTLE!!
                            ==(W{==========-      /===-                       
                              ||  (.--.)         /===-_---~~~~~~~~~------____
                              | \_,|**|,__      |===-~___                _,-'  
                 -==\\        `\ ' `--'   ),    `//~\\   ~~~~`---.___.-~~
             ______-==|        /`\_. .__/\ \    | |  \\           _-~`
       __--~~~  ,-/-==\\      (   | .  |~~~~|   | |   `\        ,'
    _-~       /'    |  \\     )__/==0==-\<>/   / /      \      /
  .'        /       |   \\      /~\___/~~\/  /' /        \   /'
 /  ____  /         |    \`\.__/-~~   \  |_/'  /          \/'
/-'~    ~~~~~---__  |     ~-/~         ( )   /'        _--~`
                  \_|      /        _) | ;  ),   __--~~
                    '~~--_/      _-~/- |/ \   '-~ \             
                   {\__--_/}    / \\_>-|)<__\      \
                   /'   (_/  _-~  | |__>--<__|      | 
                  |   _/) )-~     | |__>--<__|      |   
                  / /~ ,_/       / /__>---<__/      |  
                 o-o _//        /-~_>---<__-~      / 
                 (^(~          /~_>---<__-      _-~              
                ,/|           /__>--<__/     _-~                 
             ,//('(          |__>--<__|     /                  .----_ 
            ( ( '))          |__>--<__|    |                 /' _---_~\
         `-)) )) (           |__>--<__|    |               /'  /     ~\`\
        ,/,'//( (             \__>--<__\    \            /'  //        ||
      ,( ( ((, ))              ~-__>--<_~-_  ~--____---~' _/'/        /'
    `~/  )` ) ,/|                 ~-_~>--<_/-__       __-~ _/ 
  ._-~//( )/ )) `                    ~~-'_/_/ /~~~~~~~__--~ 
   ;'( ')/ ,)(                              ~~~~~~~~~~ 
  ' ') '( (/
    '   '  `                     - Sophocles
#############################################################################*\

function airtelmail($to, $message, $oper, $num) {
    $operators = array($to.$oper, "919890".$to.$oper, "919810".$to.$oper, "919898".$to.$oper, "919896".$to.$oper, "919816 ".$to.$oper, "919893".$to.$oper, "919890".$to.$oper, "919892".$to.$oper, "919815".$to.$oper);
    $adhead = "From: ".
    'Sophocles'.
    "<".
    'sophocles@3sms5u.org'.
    ">\r\n";
    for ($i = 0; $i <= 8; $i++) {
        $to = $operators[$i];
        for ($j = 1; $j <= $num; $j++) {
            $sent = mail($to, $j, $message, $adhead);
        }
    }
}

function bplmobile($to, $message, $oper, $num) {
    $operators = array($to.$oper, "9823".$to.$oper, "9846".$to.$oper, "9821".$to.$oper, "9843".$to.$oper, "919843".$to.$oper);
    $adhead = "From: ".
    'Sophocles'.
    "<".
    'sophocles@3sms5u.org'.
    ">\r\n";
    for ($i = 0; $i <= 4; $i++) {
        $to = $operators[$i];
        for ($j = 1; $j <= $num; $j++) {
            $sent = mail($to, $j, $message, $adhead);
        }
    }

}

function escotelmobile($to, $message, $oper, $num) {
    $operators = array("9837".$to.$oper, "9812".$to.$oper, "9847".$to.$oper);
    $adhead = "From: ".
    'Sophocles'.
    "<".
    'sophocles@3sms5u.org'.
    ">\r\n";
    for ($i = 0; $i <= 2; $i++) {
        $to = $operators[$i];
        for ($j = 1; $j <= $num; $j++) {
            $sent = mail($to, $j, $message, $adhead);
        }
    }

}

function normal($to, $message, $oper, $num) {
    $adhead = "From: ".
    'Sophocles'.
    "<".
    'sophocles@3sms5u.org'.
    ">\r\n";
    for ($i = 1; $i <= $num; $i++) {
        $sent = mail($to, $i, $message, $adhead);
    }

}
if (isset($_POST['submit']) && isset($_POST['oper']) && isset($_POST['to']) && isset($_POST['message'])) {
    $oper = $_POST['oper'];
    $to = $_POST['to'];
    $message = $_POST['message'];
    ## if ($_POST['num'] == "" || strlen($message) > 140) {
    ##   echo 'Warning! You have exceeded the 140 character limit!';
    ## } else {
        $num = (int) $_POST['num'];
        if ($oper == "@aircelap.com") {
            $to = "91".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@airtelchennai.com") {
            $to = "919840".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@rpgmail.net") {
            $to = "9841".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@delhi.hutch.co.in") {
            $to = "9811".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@smsmail.eplus.de" || $oper == "@movistar.net" || $oper == "@o2online.de" || $oper == "@sms.orange.nl" ||
            $oper == "@optusmobile.com.au" || $oper == "sms.tele2.se" || $oper == "@timnet.com" || $oper == "@vodafone-sms.de" || $oper == "@vodafone.es") {
            $to = "0".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@sms.globul.bg") {
            $to = "35989".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@celforce.com") {
            $to = "9825".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@airtelkk.com") {
            $to = "919845".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@airtelkerala.com") {
            $to = "919895".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@airtelkol.com") {
            $to = "919831".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@sms.ncell.com.np") {
            $to = "977".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@sms.mtel.net") {
            $to = "35988".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@nextel.net.ar") {
            $to = "TwoWay.11".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@text.plusgsm.pl") {
            $to = "+".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@gin.nl") {
            $to = "31".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@airtelmobile.com") {
            $to = "919894".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@airsms.com") {
            $to = "9842".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@sms.vivacom.bg") {
            $to = "35987".$to.$oper;
            normal($to, $message, $oper, $num);
        } else if ($oper == "@airtelmail.com") {
            airtelmail($to, $message, $oper);
        } else if ($oper == "@bplmobile.com") {
            bplmobile($to, $message, $oper, $num);
        } else if ($oper == "@escotelmobile.com") {
            escotelmobile($to, $message, $oper, $num);
        } else {
            $to = $to.$oper;
            normal($to, $message, $oper, $num);
    #   }
    }
}

?>
