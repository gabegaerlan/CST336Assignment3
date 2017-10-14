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
                        
                    
                    <h3>What is the fuel tank capacity of a 2018 Subaru Wrx Sti? (Approximate) </h3>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='A'/>
                    <label for='answerOneA'>A) 16.3 gallons</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='B'/>
                    <label for='answerOneB'>B) 15.9 gallons</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='C'/>
                    <label for='answerOneC'>C) 14.7 gallons</label>
                    </div>
                    
                    <h3>What type of drivetrain does a 2018 Subaru Wrx Sti have?</h3>

                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                    <label for='answerTwoA'>A) AWD (All Wheel Drive)</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='B'/>
                    <label for='answerTwoB'>B) RWD (Rear Wheel Drive)</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='C'/>
                    <label for='answerTwoC'>C) FWD (Front Wheel Drive)</label>
                    </div>
                    
                    
                    <h3>How many gears in the transmission does a 2018 Subaru Wrx Sti </h3>

                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='A'/>
                    <label for='answerThreeA'>A) 8</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='B'/>
                    <label for='answerThreeB'>B) 6</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='C'/>
                    <label for='answerThreeC'>C) 7</label>
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
                        
                    
                    <h3>What type of Engine does a 2018 Subaru Wrx Sti have? </h3>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='A'/>
                    <label for='answerOneA'>A) In-Line 4-Cylinder with Single-Scroll MHI TD04 Turbo and Internal Wastegate</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='B'/>
                    <label for='answerOneB'>B) Intercooled Turbo Premium Unleaded H-4</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='C'/>
                    <label for='answerOneC'>C) Premium Unleaded V-6</label>
                    </div>
                    
                    <h3> How many Liters in the displacement is a 2018 Subaru Wrx Sti </h3>

                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                    <label for='answerTwoA'>A) 2.5L</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='B'/>
                    <label for='answerTwoB'>B) 3.2L</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='C'/>
                    <label for='answerTwoC'>C) 3.7L</label>
                    </div>
                    
                    <h3>How many SAE Net Horsepower @ RPM : </h3>

                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='A'/>
                    <label for='answerThreeA'>A) 268</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='B'/>
                    <label for='answerThreeB'>B) 350hp</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='C'/>
                    <label for='answerThreeC'>C) 305hp</label>
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
                        
                    
                    <h3>Does a Subaru Wrx Sti come installed in Automatic? </h3>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='A'/>
                    <label for='answerOneA'>A) Yes</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='B'/>
                    <label for='answerOneB'>B) No</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerOne' id='answerOne' value='C'/>
                    <label for='answerOneC'>C) I don't know</label>
                    </div>
                    
                    <h3>What does 'Subaru' mean in Japanese </h3>

                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                    <label for='answerTwoA'>A) Unite</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='B'/>
                    <label for='answerTwoB'>B) Stars</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerTwo' id='answerTwo' value='C'/>
                    <label for='answerTwoC'>C) Race</label>
                    </div>
                    
                    <h3>Subaru cars are known for their use of _______ </h3>

                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='A'/>
                    <label for='answerThreeA'>A) They look cool</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='B'/>
                    <label for='answerThreeB'>B) Rear Wheel Drivetrain</label>
                    </div>
                    
                    <div>
                    <input type='radio' name='answerThree' id='answerThree' value='C'/>
                    <label for='answerThreeC'>C) Boxer Engines</label>
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