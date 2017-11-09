<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = "Staff Area Page"; ?>
<?php include(SHARED_PATH .'staff_header.php'); ?>
<div id="content">
    <div id="main-menu">
        <h2>Main menu</h2>
        <ul>
            <li><a href="/subjects/index.php">Subjects</a></li>
        </ul>
        <?php echo $_SERVER['SCRIPT_NAME']; ?><hr/>
        <?php echo $_SERVER['PHP_SELF']; ?><hr />
        <?php echo $_SERVER['REQUEST_URI']; ?><hr />
    </div>
</div>
<?php include(SHARED_PATH .'staff_footer.php'); ?>