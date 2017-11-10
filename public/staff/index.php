<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = "Staff Area Page"; ?>
<?php include(SHARED_PATH .'staff_header.php'); ?>
<div id="content">
    <div id="main-menu">
        <h2>Main menuz</h2>
        <ul>
            <li><a href="<?php echo url_for('staff/subjects/index.php'); ?>">Subjects</a></li>
            <li><a href="<?php echo url_for('staff/pages/index.php'); ?>">Pages</a></li>
        </ul>
    </div>
</div>
<?php include(SHARED_PATH .'staff_footer.php'); ?>