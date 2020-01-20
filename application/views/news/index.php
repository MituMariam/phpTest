<h1>Welcome View</h1>
<h3><?php echo $title; ?></h3>
<h3><?php echo $title2; ?></h3>
<p>
  <?php print_r($users); ?>

</p>
<?php echo base_url(); ?>
<?php echo anchor('user/signup', 'Sign Up'); ?>