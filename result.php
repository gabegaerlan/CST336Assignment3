<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('./styles.css');
        </style>
    </head>
    <?php
        $fid = $_GET['id'];
    ?>
    
    <body bgcolor="#e1e1e1">
    
    <div id="EndResult">
    <font face="Times New Roman" size="7">Your Results Are:</font>
    <br />
    <br />
    <br /><br />
    
    
    <?php
    // if($fid == 1){}
    
    
    
    $answer1=$_POST['answerOne'];
    $answer2=$_POST['answerTwo'];
    $answer3=$_POST['answerThree'];
    
    $score = 0;
    
    if($answer1 == "B"){$score++;}
    if($answer2 == "A"){$score++;}
    if($answer3 == "C"){$score++;}
    
    echo"<font face='Berlin Sans FB' size='10'>YOUR SCORE IS <br>".$score."/3"."</font>";
    ?>
    <br />
    <br />
    
    <!--<a href="/assignment3/index.php" class="button">REFRESH!</a>-->
    <form>
    <input type="button" value="Refresh" onclick="window.location.href='/assignment3/index.php'" />
    </form>
    </div>
        
        
        
    </body>
    
    
    
</html>