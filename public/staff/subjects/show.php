<?php require_once('../../../private/initialize.php'); ?>
<?php 
    //$id = $_GET['id'] ?? '7';
    $id = isset($_GET['id']) ? $_GET['id'] : 'Index';
    $page_title = "Show subjects" . $id; 
?>

<?php include(SHARED_PATH .'staff_header.php'); ?>
<div id="content">
    <div id="main-menu">
        <h2>Main menu - Page <?php echo $id; ?></h2>
        <ul>
            <li><a href="<?php echo url_for('staff/subjects/index.php'); ?>">Subjects</a></li>
        </ul>
        <a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br/>
        <a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br/>
        <a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br/>
    </div>
</div>
<?php include(SHARED_PATH .'staff_footer.php'); ?>