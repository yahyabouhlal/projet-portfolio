<?php 
    $msg = '';
    $msgClass = '';

    //check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        //check required filds
        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
            //passed
            //check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'plese use à valide email';
                $msgClass = 'alert-danger';
            } else {
                //passsed
                $toEmail = 'anasnori81@gmail.com';
                $subject = 'Contact request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Subject</h4><p>'.$subject.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                        ';

                        //Email Headers
                        $headers = "MIME-Version: 1.0" ."\r\n";
                        $headers .="Content-Type:text/html;charset=UTF-8" . " \r\n";

                        //additional header
                        $headers .= "from: " .$name. "<".$email.">". "\r\n";

                        if(mail($toEmail, $subject, $body, $headers)){
                           //email send
                            $msg = 'email send';
                            $msgClass = 'alert-success';
                        } else {
                            $msg = 'not send';
                            $msgClass = 'alert-danger';
                        }
                        
            }
            
        } else {
            //not passed
            $msg = 'plese fil all the field';
            $msgClass = 'alert-danger';

        }

    }

?>



<section class="contact pt-100 pb-100" id="CONTACT">
  <div class="container">
  <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"> 
            <?php echo $msg; ?>
         </div>
        <?php endif; ?>
     <div class="row">
        <div class="col-xl-6 mx-auto text-center">
           <div class="section-title mb-100">
            <h4 class="h1 text-center A-bottom"><?= _H1CONTACT ?></h4>
            <p class="A-bottom"><?= _textPortfolio ?></p>
           </div>
        </div>
     </div>
     <div class="row text-center">
           <div class="col-md-8 A-bottom">
              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact-form" id="submit-form">
                 <div class="row">
                    <div class="col-xl-6">
                       <input type="text" name="name" placeholder="<?= _form_name ?>" value="<?php echo isset($_post['name']) ? $name : ''; ?>">
                    </div>
                    <div class="col-xl-6">
                       <input type="text" name="email" placeholder="<?= _form_emil ?>" value="<?php echo isset($_post['email']) ? $email : ''; ?>">
                    </div>
                    <div class="col-xl-6">
                       <input type="text" name="subject" placeholder="<?= _form_subject ?>" value="<?php echo isset($_post['subject']) ? $subject : ''; ?>">
                    </div>
                    <div class="col-xl-6">
                       <input type="text" placeholder="<?= _form_phone ?>">
                    </div>
                    <?php echo isset($_post['message']) ? $message : ''; ?>
                    <div class="col-xl-12">
                       <textarea  name="message" placeholder="<?= _form_message ?>" cols="30" rows="10"></textarea>
                       <input name="submit" class="A-bottom" type="submit" value="send message" data-toggle="modal" data-target="#exampleModal">
                    </div>
                 </div>
              </form>
           </div>
           <div class="col-md-4">
              <div class="single-contact A-bottom">
                 <i class="fa fa-map-marker"></i>
                 <h5>Address</h5>
                 <p>N° 590  AGENDIS Youssoufia, Maroc.</p>
              </div>
              <div class="single-contact A-bottom">
                 <i class="fa fa-phone"></i>
                 <h5>Phone</h5>
                 <p>(+212) 617 749 073</p>
              </div>
              <div class="single-contact A-bottom">
                 <i class="fa fa-envelope"></i>
                 <h5>Email</h5>
                 <p>yahya.bouhlal.b@gmail.com</p>
              </div>
           </div>
     </div>
  </div>
  
</section>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <form>
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit">Subscribe Now</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->