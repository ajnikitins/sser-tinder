<?php
$this->load->view('header');
$this->load->view('loged_in_side');
?>
<div class="col-md-8">
<div class="well">

<?php if(!empty($this->msg_error_right) ): ?>
    <div id="" class="alert alert-danger"><?php echo $this->msg_error_right;?></div>
<?php endif ?>

<?php if(!empty($this->msg_success_right)): ?>
    <div class="alert alert-success"><?php echo $this->msg_success_right;?></div>
<?php endif ?>

<h1><?=lang('edit_user_heading')?></h1>
<?php $profile_photo = ($user->profile_photo) ? $user->profile_photo : 'default_profile.jpg' ?>
<h2><a href="<?php echo base_url('assets/uploads/member/'.$profile_photo);?>" class="color-box" rel="color-box"><img class="pic img-circle" src="<?php echo base_url('assets/uploads/member/'.$profile_photo);?>" width="250" height="250" alt="Profile Picture" /></a>
<?=ucfirst(strip_tags($user->first_name))?></h2>

<br/>
<div class="clr"></div>

<form enctype="multipart/form-data" action="<?php echo site_url('user/edit_account');?>"  method="post">

  <div class="form-group" style="padding-top:20px;">
    <label for="profile_photo"><?=lang('profile_photo')?></label>
    <input type="file" class="form-control" id="profile_photo" name="profile_photo" value="<?php echo $user->profile_photo;?>">
  </div>

  <div class="form-group">
    <label for="bio">Bio</label>
    <textarea maxlength="400" class="form-control" id="bio" name="bio"><?php echo strip_tags($user->bio)?></textarea>
  </div>

  <div class="form-group">
    <label for="first_name"><?=lang('edit_user_fname_label')?></label>
    <input required="required" type="text" class="form-control" id="first_name" name="first_name" value="<?php echo strip_tags($user->first_name)?>">
  </div>

  <div class="form-group">
    <label for="last_name"><?=lang('edit_user_lname_label')?></label>
    <input required="required" type="text" class="form-control" id="last_name" name="last_name" value="<?php echo strip_tags($user->last_name)?>">
  </div>

  <div class="form-group">
    <label for="email"><?=lang('edit_user_email_label')?></label>
    <input required="required" type="email" class="form-control" id="email" name="email" value="<?php echo strip_tags($user->email)?>" disabled>
  </div>

  <div class="form-group">
    <label for="country"><?=lang('user_country')?></label>
    <input required="required" type="text" class="form-control" id="country" name="country" value="<?php echo strip_tags($user->country)?>">
  </div>

  <div class="form-group">
    <label for="city"><?=lang('user_city')?></label>
    <input required="required" type="text" class="form-control" id="city" name="city" value="<?php echo strip_tags($user->city)?>">
  </div>

  <div class="form-group">
    <label for="sex"><?=lang('user_sex')?></label>
    <select class="form-control" name="sex" id="sex">
      <option value="male" <?php if($user->sex == 'male')  echo 'selected'; ?> ><?=lang('user_sex_m')?></option>
      <option value="female" <?php if ($user->sex == 'female') echo 'selected'; ?> ><?=lang('user_sex_f')?></option>
    </select>
  </div>

  <div class="form-group">
    <label for="phone"><?=lang('edit_user_phone_label')?></label>
    <input required="required" type="tel" class="form-control" id="phone" name="phone" value="<?php echo strip_tags($user->phone)?>">
  </div>

  <div class="form-group">
    <label for="prefer_opposite_sex"><?=lang('prefer_opposite_sex')?>
    <input type="checkbox" class="form-control" id="prefer_opposite_sex" name="prefer_opposite_sex" value="1" <?php if($user->prefer_opposite_sex) echo 'checked';?>>
    </label>
  </div>

  <button type="submit" class="btn btn-danger"><?=lang('edit_user_submit_btn')?></button>
</form>

</div>
</div>

<?php $this->load->view('footer') ?>
