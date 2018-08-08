<section class="contactsection">
    <div class="row">
        
 
        
        <form class="form col-lg-5 col-md-8" method="post">
            <h4 class="contact-header text-left">Say hi!</h4>
                <div class="row">
                    <div class="form-group col-lg-6 text-left">
                      
                        <input type="text" id="email" name="firstname"  placeholder="Name" required>
                    </div>
         
                    <div class="form-group col-lg-6 text-left">
                        <input type="text" id="email" name="email"  placeholder="Email" required>
                    </div>
                 </div> <!--end row -->

                 <div class="row">
                    <div class="form-group col-lg-6 text-left">
                        <input type="text" id="email" name="subject"  placeholder="Subject" required>
                    </div>
                 </div> <!--end row -->
                      

                    <div class="form-group text-left col-lg-12">
                        <textarea id="message" name="submit-message" rows="3"  placeholder="Enter your message..."></textarea>
                    </div>

                    <div class="button text-right" id="form-button">
                        <button type="submit" name="submit" class="btn btn-default submit"  id="contact-button2">Submit</button>
                    </div>

                     <div class="social-links-bottompage text-left">
                        <a href="https://github.com/amlstudio" class="fa fa-github"></a>
                        <a href="https://www.linkedin.com/in/mika-lehtinen-48a33488" class="fa fa-linkedin"></a>
                    </div>
            </div>
        </form>
        <?php

    if (isset($_POST['submit'])){
        $name = $_POST['firstname'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['submit-message'];

        $mailTo = "mika@amlstudio.se";
        $headers = "From: ". $mailFrom;
        $txt = "This email was sent from: ".$name.".\n\n".$message;


        mail($mailTo, $subject, $txt, $headers);
 
    }
?>
</section>