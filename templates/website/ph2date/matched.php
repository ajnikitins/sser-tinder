<?php
    $this->load->view('header');
    $this->load->view('loged_in_side');
?>

<div class="col-md-8">
    <div class="well">

        <?php if (!empty($this->msg_error_right)): ?>
            <div id="" class="alert alert-danger"><?php echo $this->msg_error_right; ?></div>
        <?php endif ?>

        <?php if (!empty($this->msg_success_right)): ?>
            <div class="alert alert-success"><?php echo $this->msg_success_right; ?></div>
        <?php endif ?>

        <h1><?= lang('matched_users') ?></h1>
        <div class="clr"></div>
        </br>

        <?php if (!empty($users)): ?>
            <?php foreach ($users AS $user): ?>

                <div class="row" style="border-bottom: 1px solid #ccc;margin-top:10px;">
                    <?php $profile_photo = ($user->profile_photo) ? $user->profile_photo : 'default_profile.jpg'; ?>
                    <div class="col-md-4">
                        <img class="pic img-circle"
                             src="<?php echo base_url('assets/uploads/member/' . $profile_photo); ?>" width="150"
                             height="150" alt="Profile Picture"/>

                             <div style="display:inline-block;padding:15px;">
                                <h2><?=ucfirst(strip_tags($user->first_name))?></h2>
                                <a href="#" class="btn btn-danger" style="width:120px;" onclick="javascript:chatWith('<?=strip_tags($user->username)?>');"><?=lang('send_message')?></a>
                                <a href="<?=site_url('user/message_box/'.strip_tags($user->username))?>" class="btn btn-danger" style="margin-top:3px;width:120px;"><?=lang('view_message')?></a>
                            </div>

                    </div>

                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tr>
                                <td class=""><?= lang('user_name') ?></td>
                                <td class=""><?php echo strip_tags(ucfirst($user->first_name) . ' ' . ucfirst($user->last_name)) ?></td>
                            </tr>
                            <tr>
                                <td class="">Bio</td>
                                <td class=""><?php echo ucfirst(strip_tags($user->bio)) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>

    </div>
</div>
<?php $this->load->view('footer'); ?>
