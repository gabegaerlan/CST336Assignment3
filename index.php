<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("./styles.css");
            </style>
        <title>Subaru quiz</title>
    </head>
    
    
    <body>
        <?php
        // creating random generator
        $randomID =rand(1,3);
        echo $randomID;
        ?>
        
        <div id='Questions'>
            <center><font face='Times New Roman' size='10'>Subaru Quiz!</font></center>
            <br />
            <br />
            <br /><br />
            <?php
            if($randomID == 1)
            {
                
            echo"

            <form action='result.php?id=1' method='post' id='quizForm' id='1'>
                <ol>
                    
                    <li>
                        
                    
                    <h3>Question 1 </h3>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='A'/>
                    <label for='answerOneA'>A) I am A</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='B'/>
                    <label for='answerOneB'>B) I am B</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='C'/>
                    <label for='answerOneC'>C) I am C</label>
                    </div>
                    
                    <h3>Question 2 </h3>

                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                    <label for='answerTwoA'>A) I am A</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='B'/>
                    <label for='answerTwoB'>B) I am B</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='C'/>
                    <label for='answerTwoC'>C) I am C</label>
                    </div>
                    
                    <h3>Question 3 </h3>

                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='A'/>
                    <label for='answerThreeA'>A) I am A</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='B'/>
                    <label for='answerThreeB'>B) I am B</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='C'/>
                    <label for='answerThreeC'>C) I am C</label>
                    </div>
                    
                    
                    
                    
                    </li>
                    
                </ol>
                <input type='submit' value='Submit Quiz' />
                
            </form>";
            }
            
            
            if($randomID == 2)
            {
                
            echo"

            <form action='result.php?id=2' method='post' id='quizForm' id='2'>
                <ol>
                    
                    <li>
                        
                    
                    <h3>Question 1 </h3>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='A'/>
                    <label for='answerOneA'>A) Who is A?</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='B'/>
                    <label for='answerOneB'>B) Who is B?</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='C'/>
                    <label for='answerOneC'>C) Who is C?</label>
                    </div>
                    
                    <h3>Question 2 </h3>

                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                    <label for='answerTwoA'>A) Who is A?</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='B'/>
                    <label for='answerTwoB'>B) Who is B?</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='C'/>
                    <label for='answerTwoC'>C) Who is C?</label>
                    </div>
                    
                    <h3>Question 3 </h3>

                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='A'/>
                    <label for='answerThreeA'>A) Who is A?</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='B'/>
                    <label for='answerThreeB'>B) Who is B?</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='C'/>
                    <label for='answerThreeC'>C) Who is C?</label>
                    </div>
                    
                    
                    
                    
                    </li>
                    
                </ol>
                <input type='submit' value='Submit Quiz' />
                
            </form>";
            }            
            
            
            if($randomID == 3)
            {
                
            echo"

            <form action='result.php?id=3' method='post' id='quizForm' id='3'>
                <ol>
                    
                    <li>
                        
                    
                    <h3>Question 1 </h3>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='A'/>
                    <label for='answerOneA'>A) Hi I'm A</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='B'/>
                    <label for='answerOneB'>B) Hi I'm B</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='C'/>
                    <label for='answerOneC'>C) Hi I'm C</label>
                    </div>
                    
                    <h3>Question 2 </h3>

                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                    <label for='answerTwoA'>A) Hi I'm A</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='B'/>
                    <label for='answerTwoB'>B) Hi I'm B</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='C'/>
                    <label for='answerTwoC'>C) Hi I'm C</label>
                    </div>
                    
                    <h3>Question 3 </h3>

                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='A'/>
                    <label for='answerThreeA'>A) Hi I'm A</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='B'/>
                    <label for='answerThreeB'>B) Hi I'm B</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='C'/>
                    <label for='answerThreeC'>C) Hi I'm C</label>
                    </div>
                    
                    
                    
                    
                    </li>
                    
                </ol>
                <input type='submit' value='Submit Quiz' />
                
            </form>";
            }            
            
            ?>
        </div>
        
    </body>
</html>