<?php
$this->load->view('header');
$this->load->view('loged_in_side');
?>

<div class="col-md-8">
<div class="well">
<?php if($this->session->flashdata('message_success')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('message_left');?></div>
<?php endif ?>

<?php $profile_photo = ($user->profile_photo) ? $user->profile_photo : 'default_profile.jpg' ?>
<h2><a href="<?php echo base_url('assets/uploads/member/'.$profile_photo);?>" class="color-box" rel="color-box"><img class="pic img-circle" src="<?php echo base_url('assets/uploads/member/'.$profile_photo);?>" width="250" height="250" alt="Profile Picture" /></a>
<?=ucfirst(strip_tags($user->first_name))?></h2>
<br/>
<?php if($profile_owner): ?>
    <a href="<?php echo site_url('user/edit_account/'); ?>" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i> <?=lang('edit_account')?></a>
<?php elseif(!$liked): ?>
    <a href="<?php echo site_url('user/like/'.$user->id); ?>" class="btn btn-success" ><?=lang('like_user')?></a>
    <a href="<?php echo site_url('user/pass/'.$user->id); ?>" class="btn btn-danger" ><?=lang('pass_user')?></a>
    <a href="#" class="btn btn-info" onclick="javascript:chatWith('<?=strip_tags($user->username)?>');"><?=lang('send_message')?></a>
<?php else: ?>
    <a href="#" class="btn btn-info" onclick="javascript:chatWith('<?=strip_tags($user->username)?>');"><?=lang('send_message')?></a>
<?php endif ?>
<br/><br/>

<table class="table">
<tr>
  <td class=""><?=lang('user_name')?></td>
  <td class=""><?php echo strip_tags(ucfirst($user->first_name) .' '. ucfirst($user->last_name)) ?></td>
</tr>
<tr>
  <td class="">Bio</td>
  <td class=""><?php echo ucfirst(strip_tags($user->bio)) ?></td>
</tr>

</table>

<?php if(!empty($output) AND !empty($output->output) ): ?>
    <h3><?php echo ucfirst(strip_tags($user->first_name)) ?> photos </h3>
    <?php echo $output->output; ?>
<?php endif ?>

<?php if(!empty($videos)): ?>

<h3><?=strip_tags(ucfirst($user->first_name)) .' '. lang('videos');?></h3>
<hr/>
  <div class="row">
<?php foreach ($videos as $video): ?>
    <div class="col-xs-4">
        <h4><?=$video->video_name?></h4>
        <img src="<?=base_url('assets/uploads/files/video/thum/' . $video->converted_name.".jpg") ?>" class="img-responsive imageClip">
        <a class="btn btn-default" href="<?=site_url('user/video_watch/'.$video->id) ?>"><?=lang('watch')?></a>
    </div>
<?php endforeach ?>
  </div>
<?php endif ?>

</div>
</div>

<?php $this->load->view('footer') ?>
