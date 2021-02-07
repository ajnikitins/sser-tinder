<h1><?php echo lang('login_heading'); ?></h1>
<p><?php echo lang('login_subheading'); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

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

