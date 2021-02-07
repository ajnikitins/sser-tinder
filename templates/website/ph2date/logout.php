<?php
$this->load->view('header');
$this->load->view('loged_in_side');
?>
<div class="col-md-8">
<div class="well">

<?php if(!empty($this->msg_error_right) ){ ?>
<div id="" class="alert alert-danger"><?php echo $this->msg_error_right;?></div>
<?php } ?>
<?php if(!empty($this->msg_success_right)){ ?>
<div class="alert alert-success"><?php echo $this->msg_success_right;?></div>
<?php } ?>

  <div class="g-signin2" data-onsuccess="onSignIn" style="display:none"></div>

  <script>
      function onSignIn() {
        gapi.auth2.getAuthInstance().signOut();
        window.location.href="<?=site_url('user/logout/do')?>"
      }
  </script>

</div>
</div>
<?php
$this->load->view('footer');
?>
