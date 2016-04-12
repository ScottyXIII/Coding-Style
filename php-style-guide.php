

We follow CodeIgniter stlye syntax when writing PHP.

Class, method and variable Naming: 
Class names must start with a capital letter and each word seperated by an underscore. 
All Class methods and functions are all lowercase seperated by an under score.
Variables are all lowercase and seperated by an underscore. 

<?php

// Class names start with a captial letter followed by all lowercase seperated by an underscore. 
public function My_class_name 
{
  
  // Variables are all lowercase seperated by an underscore.
  public $my_public_variable; 
  
  // Functions and methods are all lower case and seperated by an underscore 
  public function my_public_method() 
  {
  
  }

}

// Try to keep variables names as short as posisble with appropriate names that makes it easier to read if we need to jump in
// the code again.
?>


Curly braces. 
For any class, method or function the first curly brace is allways dropped to the next line. 
Any conditional statments or loops will have the first curly brace on the first line.
<?php 

// The curly brace on a new line
class My_class 
{
  
  // The curly brace on a new line
  public function my_function() 
  {
      // Curly brace stays on the same line for conditional statments.
      if ($foo) {
        
      }
      
       // Same with loops.
      while ($bar) {
        
      }
  }
  
}
?>


When writing your (MVC) views we start to mix HTML and PHP. We use the following syntax in all our View php files to 
keep things clean and readable


<html> 

<body> 
  <?php if ($user == 'admin'): ?>
    <p> User is admin! </p>  
  <?php endif; ?> 
</body>
</html>

instead of opening a php tag just to echo out a variable use the short tag <?=$var?> This shortag 
is dependent on the server settings. 


Comments: 
  Your code should really speak for it self but sometimes we need to explain something that may not be so obvious to the reader.
  
