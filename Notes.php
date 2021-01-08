How to Javascript Variable Use In Php
<script>
	var a="hello";
</script>
<?php
$con="<script>document.write(a)</script>";
echo $con;
?>
============================================

How to Php variable use In Javascript
<?php
$a=10;
?>
<script>
	var b="<?php echo $a ?>";
	document.write(b);
</script>

