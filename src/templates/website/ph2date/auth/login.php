<?php $this->load->view('header') ?>

<?=$setting->promo_text ?>

<div class="col-md animated fadeInLeft">
<div class="well">

<?php if(!empty($this->msg_error_left) ): ?>
    <div id="msg_error" class="alert alert-danger"><?php echo $this->msg_error_left;?></div>
<?php endif ?>

<?php if(!empty($this->msg_success_left)): ?>
    <div class="alert alert-success"><?php echo $this->msg_success_left;?></div>
<?php endif ?>


<h1 class="pH0"><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>


<?php echo form_open('user/login', array('id' => 'login_form'));?>

  <?php echo form_input($id_token); ?>

<!--  <p>--><?php //echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-default"');?><!--</p>-->
<?php echo form_close();?>

  <div class="g-signin2" data-onsuccess="onSignIn"></div>

  <script>
    function onSignIn(googleUser) {

      if (!(document.getElementById('msg_error'))) {
        const profile = googleUser.getBasicProfile();

        document.getElementById("id_token").value = googleUser.getAuthResponse().id_token;

        document.getElementById("login_form").submit();
      }
    }
  </script>
</div>
</div>

<?php //$this->load->view('auth/register'); // Add the Register form view as well ?>

<?=$setting->service_description ?>

<?php $this->load->view('footer') ?>
