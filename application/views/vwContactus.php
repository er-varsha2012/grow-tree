<?php
$this->load->view('frontendHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<!--content-section-->
<div class="content-section sub-page">
  <div class="container">
  <div class="row">
    <?php  echo $content;  ?>
	<?php /* echo "hi"; */ ?>
    </div>
  </div>
  </div>
  <!--end-->
<?php
$this->load->view('frontendFooter');
?>