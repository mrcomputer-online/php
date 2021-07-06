<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
           <input type="text" name="numb1" placeholder="number1">
           <input type="text" name="numb2" placeholder="number2">
          <select name="operator">
              <option>NONE</option>    
              <option>ADD</option>
              <option>SUBTRACT</option>
              <option>MULTIPLY</option>
              <option>DIVIDE</option>
          </select>
          <button type="submit" name="submit" value="submit">CALCULATE</button>
       </form>
       <p style="font-size:10px;"> THE RESULT IS:</p>
    <?php
     if (isset($_GET['submit'])) {
        $result1=$_GET['numb1'];
        $result2=$_GET['numb2'];
        $operator=$_GET['operator'];
        switch ($operator) {
            case "NONE";
               echo "umekosa boya we";
             break;
              case "ADD";
               echo $result1 + $result2;

            break;
              case "SUBTRACT";
                echo $result1 - $result2;   
          
           break;
              case "MULTIPLY";
               echo $result1 * $result2;

          break;
              case "DIVIDE";
               echo $result1 / $result2;

                
        }
    }
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";


       $text = "hellow world";
       // way of use variable
       $a = 15;
       $b = 30;
       echo $a+$b+10;
       echo "<br>";
       $name = $_POST['username'];
       $nama="shop";
       echo $text;
       //variable scope
         //global & local scope outside the function
         $z = 5;
         function myTest() {
             $y = 6;
             echo "<p> variable inside function is: $y<p>";
         }
         myTest ();
         echo "<p> variable outside function is: $z<p>";

       //just a story
       print "my notebook";
       echo "<br>";
       echo $name." is going to $nama";
       echo "<br>";
       echo str_word_count ("hi juma ok");
       echo "<br>";
       echo strlen("mafele & lucas");
       echo "<br>";
       echo strrev ("hi mafele");
       echo "<br>";
       echo strpos ("hi mafele","mafele");
       echo "<br>";
       echo str_replace (" mafele","simon", "hi  mafele");
       echo "<br>";
       echo "hellow world";
       echo "<h1> my name is mafele </h1>";
       echo "<h2> my father's name is lucas </h2>";
       echo "<h3> my mother's name is patrisia </h3>";
       echo "<h3> I come from MWANZA and i have 20 years old.<h3>";
       echo "<h3> I was born in 2000 from MWANZA region<h3>";
       echo "<p> below there is the register form that form if you can regist you can see my other details so just regist form table below<p>"; 
       $name = array ("mafele","manase","swai","mwana","shamsa","tina");
       echo $name['5'];
       echo "<br>";
       if ($a == $b){
           echo "true!";
       }
        else {
           echo "false!";
       }
           
     

    ?>
     
    <form method="POST">
        <input type="text" name="username">
        <input type="email" name="gmail">
        <input type="email-password" name="email-password">
        <button>submit</button>
    </form>
</body>
</html>