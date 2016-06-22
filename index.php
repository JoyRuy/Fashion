<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<?php echo public_navigation($sel_subject, $sel_page); ?>
		</td>
		<td id="page">
			<?php if ($sel_page) { ?>
				<h2><?php echo htmlentities($sel_page['menu_name']); ?></h2>
				<div class="page-content">
					<?php echo strip_tags(nl2br($sel_page['content']), "<b><br><p><a>"); ?>
				</div>
			<?php } else { ?>
				<h2>Welcome to Joy&Ruy company</h2>
                        <?php } ?>
                        <p>Thanks for visiting! Please <a href="login.php">login</a>, or <a href="new_user.php">register</a> a new user.</p>
		</td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>