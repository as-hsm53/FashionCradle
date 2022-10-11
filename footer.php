<?php global $lumise;
?>
<footer class="footer">
    <div class="container">
        <div class="footer_content">
            <a href="http://localhost:2124/FashionCradle/" class="footer_logo"><img src="<?php echo theme('assets/images/logo_favicon.png', true); ?>"></a>
            <p>
               
                Email: <a href="mailto:fashioncradle15@gmail.com" target="_blank">fashioncradle15@gmail.com</a><br>
               
            <ul class="tsd_social">
                <li><a href="https://facebook.com/fashion_cradle" target="_blank" class="fa fa-facebook"></a></li>
                <li><a href="https://twitter.com/fashion_cradle" target="_blank" class="fa fa-twitter"></a></li>
                <li><a href="https://instagram.com/fashion_cradle" target="_blank" class="fa fa-instagram"></a></li>
            </ul>
        </div>
        <div class="footer_content">
            <h4>Custom care</h4>
            <ul class="link">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
            </ul>
        </div>
        <div class="footer_content">
            <h4>More</h4>
            <ul class="link">
            
                <li><a href="#">FAQs</a></li>
            
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer_content">
            <h4>Feedback</h4>
            <p></p>
            <form action="" class="form-sub" method="post">
                <input type="text" placeholder="Email address here" name="email" style="margin-bottom: 10px;">
                <textarea name="textarea" placeholder="Enter you Feedback" style="margin-bottom: 10px;"></textarea>
                <input type="submit" value="Send" name="feedback">
            </form>
        </div>
    </div>
    <div class="container">
 <div class="copyright">
            <p>Copyright © 2017 <a href="http://localhost:2124/FashionCradle" >fashioncradle.com</a> | <a href="https://www.lumise.com/privacy">Privacy &amp; policy</a><a href="https://www.lumise.com/terms">Term of services</a></p>
        </div> 
    </div>
</footer>
</body>
<?php

include('feedback.php');
if(isset($_POST["feedback"])){

    $email= $_POST['email'];
    $feedback= $_POST['textarea'];

    $query = "INSERT INTO fashion_cradle_feedback(email,feedback) VALUES('$email','$feedback')";

    
    if($email !="" or $feedback !=""){
        $result=mysqli_query($conn,$query);

     
    }
}

?>
</html>