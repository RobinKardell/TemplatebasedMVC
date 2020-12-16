<?php
$params = URI::getURIParameters();
$key = $params[2];
?>
<h1><?php echo $key ?>'s Profile Page!</h1>
<?php
echo "<pre>";
UserProfile::getUserDetails($_GET['username']);
?>