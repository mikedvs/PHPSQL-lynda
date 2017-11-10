<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = "Show Staff Pages"; ?>
<?php $view_val = isset($_GET['id']) ? $_GET['id'] : "No Val"; ?>
<?php include(SHARED_PATH . 'staff_header.php'); ?>
<div id="content">
    <a href="<?php echo url_for('staff/pages/index.php'); ?>" class="back-link">&laquo; Back to list</a>
    <h1><?php echo h($page_title); ?></h1>
    <h2>You wanted to view <?php echo h($view_val); ?>
</div>
<?php include(SHARED_PATH . 'staff_footer.php'); ?>