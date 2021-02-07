<?php $this->load->view('header') ?>

<?=$setting->promo_text ?>

<div class="col-md-4 animated fadeInLeft">
<div class="well">

<?php if(!empty($this->msg_error_left) ): ?>
    <div id="" class="alert alert-danger"><?php echo $this->msg_error_left;?></div>
<?php endif ?>

<?php if(!empty($this->msg_success_left)): ?>
    <div class="alert alert-success"><?php echo $this->msg_success_left;?></div>
<?php endif ?>


<h1 class="pH0"><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>


<?php echo form_open('user/login');?>

  <div class="form-group">
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </div>

  <div class="form-group">
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </div>

  <div class="checkbox">
  <label>
      <input name='remember' id="remember" type="checkbox"> <?php echo lang('login_remember_label');?>
    </label>
  </div>

  <p><?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-default"');?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
  <div class="g-signin2" data-onsuccess="onSignIn"></div>

  <script>
    function onSignIn(googleUser) {
      let profile = googleUser.getBasicProfile();
      console.log("ID: " + profile.getId()); // Don't send this directly to your server!
      console.log('Full Name: ' + profile.getName());
      console.log('Given Name: ' + profile.getGivenName());
      console.log('Family Name: ' + profile.getFamilyName());
      console.log("Image URL: " + profile.getImageUrl());
      console.log("Email: " + profile.getEmail());

      var id_token = googleUser.getAuthResponse().id_token;
      console.log("ID Token: " + id_token);
    }
  </script>
</div>
</div>

<?php $this->load->view('auth/register'); // Add the Register form view as well ?>

<?=$setting->service_description ?>

<?php $this->load->view('footer') ?>
