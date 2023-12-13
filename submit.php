
<?php
 if(isset($_POST['submit'])){
    // Retrieve form data
    $first_name = $_POST["fname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email setup
    $to = "charlymatt@icloud.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message_body = "First Name: " . $first_name . "\r\n";
    $message_body .= "Email: " . $email . "\r\n";
    $message_body .= "Message:\r\n" . $message;

    // Send email
    mail($to, $subject, $message_body) or die("Error!");
   echo '<!DOCTYPE html>
   <html>
   <head>
       <Title> Form Send</Title>
       <link rel = "stylesheet" href = "app.css"/>
       <style>
       </style>
   </head>
   <body>
   <header>
           <div class = "container">
          <h1 style = "float:left"> Charly Tennis</h1>
          <nav> 
           <ul>
               <li><!--leads to the about us page-->
               <a href = "index.html"> Home </a>
                </li>
               <li><!--leads to the about us page-->
               <a href = "about.html"> About Us </a>
               </li>
               <li><!--leads to reserve a lesson-->
               <a href = "book.html"> Book a Lesson</a>
               </li>
            </ul>
          </nav>
          </div>
       </header>
   <div class = "form_container">
   <h1 style = "color:white">Charly Tennis</h1>
   <p> Thank you for signing up with charly tennis, your email was successfully send</p>
   
   </body>
   <footer>
       <div class = "footer_container">
       <address>
       CEO Charly Rapin<br>
       charlymatt@icloud.com<br>
       Scottsdale Az<br>
       USA
   </address>
   </div>
   </footer>
   <script src = "app.js"></script>
   
   </html>';

 }
?>