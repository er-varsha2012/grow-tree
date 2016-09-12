<?php
$this->load->view('frontendHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
--><?php /* echo $content; */ ?>
  <!--content-section-->
  <div class="content-section sub-page">
  <div class="container">
  <div class="row">
  <div class="col-md-8">
  <?php echo $content; ?>
   
    </div>
    
    
   
 <div class="col-lg-4">
 <div class="sidebar-contact-us">
 <div class="contact-heading">contact us</div>
   <form>
  <fieldset class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
  </fieldset>
  
  <fieldset class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email Address">
  </fieldset>
  
  
   <fieldset class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Phone Number">
  </fieldset>
  
  
  <fieldset class="form-group">
    <textarea rows="3" id="exampleTextarea" class="form-control" placeholder="Textarea"></textarea>
  </fieldset>
 
 <div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>

<input type="submit" value="Submit" class="btn ">
 
</form>
                        </div>
 </div>
    
    
    </div>
  </div>
  </div>
  <!--end-->
<?php
$this->load->view('frontendFooter');
?>