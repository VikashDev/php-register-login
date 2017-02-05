<?php include 'includes/header.php'; ?>
<h1>Index Page</h1>

<?php if (!empty($_SESSION)) { ?>
<a href="logout.php"><?php echo "Log Out"; ?></a> 
<?php } ?>








<?php include 'includes/footer.php'; ?>