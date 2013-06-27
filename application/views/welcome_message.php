<head>
<meta charset="UTF-8" />
<title>Document</title>
<!-- Bootstrap -->
<link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo site_url('js/jquery-1.9.1.min.js');?>"></script>
<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>

</head>
<body>
	

<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">Home</a></li>
  <li><a href="#profile">Profile</a></li>
  <li><a href="#messages">Messages</a></li>
  <li><a href="#settings">Settings</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="home">
  texto1
  </div>
  <div class="tab-pane" id="profile">
  texto2.
  </div>
  <div class="tab-pane" id="messages">
  text3.
  </div>
  <div class="tab-pane" id="settings">
  .text4
  </div>
</div>
<script>
$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
</script>
  <script src="<?php echo site_url('js/bootstrap-transition.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-tab.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-alert.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-modal.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-dropdown.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-scrollspy.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-tooltip.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-popover.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-button.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-collapse.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-carousel.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-typeahead.js');?>"></script>
    <script src="<?php echo site_url('js/bootstrap-affix.js');?>"></script>
</body>
</html>
