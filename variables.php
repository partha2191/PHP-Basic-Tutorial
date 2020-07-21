<?php
  // Single line comment
  # Single line comment
  /*
    Multiline comment
  */
    
 // echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
   
 echo "Hello World <br>";
 print 'Hello World <br>';

  #Variables
  /*
     - Prefix $
     - Start with a letter or an underscore
     - Only letters, numbers and underscores
     - Case sensitive
  */
 $_utput = "Hello World";
 echo $_utput;

  #Datatypes
  /*
     - String
     - Integers
     - floats
     - Booleans
     - Arrays
     - Objects
     - Null
     - Resources
  */
 $num1 = 10;
 $num2 = 4;
 $sum = $num1 + $num2;
 echo "<br> $sum";   
  // If we pass the same variables within single quote('') then value will not pass through variables. 
 echo '<br> $sum';

 $string1 ='Hello';
 $string2 = 'World';
   #Concatenation
 $greeting = $string1 .' '. $string2;
 $greeting1 = "$string1 $string2";

 echo "<br> $greeting";
 echo "<br> $greeting1";

   // Escape Sequences
 $string3 = 'They\'re Here';
 $string4 = "They're Here";
 $string5 = "They\"re Here";

 echo "<br> $string3";
 echo "<br> $string4";
 echo "<br> $string5 <br>";

  // Constants

 define('GREETING', 'Hello Everyone');
 echo GREETING;
 echo "<br>";
 define('GREETING', 'Hello Everyone', true);
 echo greeting;
?>