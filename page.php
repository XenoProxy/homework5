<?php if(!empty($_GET['pid']) && !empty($pagesData)):
$page = $pagesData[$_GET['pid']]; ?>

<h1><?php echo $page['name']; ?></h1>
<div class="content"><?php echo $page['content']; ?></div>

<?php if($page == 'contact'):

// форма

endif; ?>

<?php endif; ?>