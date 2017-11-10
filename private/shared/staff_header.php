<?php if(!isset($page_title)) { $page_title = 'Staff Area';} ?>
<?php echo $_GET['page']; ?>
<!doctype html>
<html>
    <head>
        <title>
            UNSW Global - <?php echo h($page_title); ?> 
        </title>
        <meta charset='utf-8'>
        <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
    </head>
    <body>
        <header>
            <h1>UNSW GLobal staff area</h1>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo url_for('staff/index.php'); ?>">Menu</a>
                </li>
        </nav>