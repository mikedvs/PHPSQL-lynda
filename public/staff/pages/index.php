<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = "Staff Pages"; ?>
<?php 
    // Create Associative array with all values of pages
    $pages = [
        ['id'=>'1', 'position'=> '1', 'visible'=> '1', 'name'=> 'About UNSW Global' ],
        ['id'=>'2', 'position'=> '2', 'visible'=> '1', 'name'=> 'History' ],
        ['id'=>'3', 'position'=> '3', 'visible'=> '0', 'name'=> 'Leadership' ],
        ['id'=>'4', 'position'=> '4', 'visible'=> '1', 'name'=> 'Contact Us' ],
    ];
?>
<?php include(SHARED_PATH . 'staff_header.php'); ?>
<div id="content">
    <h1><?php echo $page_title; ?></h1>
    <div class="actions">
        <a href="<?php echo url_for('staff/pages/new.php'); ?>" class="action">Create New Page</a>
    </div>
    <table class="list">
            <tbody><tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach($pages as $page) {?>
                <tr>
                    <td><?php echo h($page['id']);?></td>
                    <td><?php echo h($page['position']);?></td>
                    <td><?php echo $page['visible'] == '1' ? 'true' : 'false';?></td>
                    <td><?php echo h($page['name']);?></td>
                    <td><a class="action " href="<?php echo url_for('staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
                    <td><a class="action " href="<?php echo url_for('staff/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
                    <td><a class="action " href="">Delete</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
</div>
<?php include(SHARED_PATH . 'staff_footer.php'); ?>