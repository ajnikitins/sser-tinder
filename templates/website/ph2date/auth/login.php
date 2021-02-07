<?php $this->load->view('header') ?>

<?= $setting->promo_text ?>

<div class="row">
  <div class="col-md-6 col-md-offset-3 animated fadeIn">
    <div class="well">

        <?php if (!empty($this->msg_error_left)): ?>
          <div id="msg_error" class="alert alert-danger"><?php echo $this->msg_error_left; ?></div>
        <?php endif ?>

        <?php if (!empty($this->msg_success_left)): ?>
          <div class="alert alert-success"><?php echo $this->msg_success_left; ?></div>
        <?php endif ?>


      <h1 class="pH0 text-center"><?php echo lang('login_heading'); ?></h1>
      <h4 class="text-center"><?php echo lang('login_subheading'); ?></h4>


        <?php echo form_open('user/login', array('id' => 'login_form')); ?>
        <?php echo form_input($id_token); ?>
        <?php echo form_close(); ?>

      <div class="g-signin2" data-onsuccess="onSignIn" data-longtitle="true" data-theme="dark"></div>

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
</div>

<?= $setting->service_description ?>

<?php $this->load->view('footer') ?>
