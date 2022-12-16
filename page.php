<?php if(!empty($_GET['pid']) && !empty($pagesData)):
$page = $pagesData[$_GET['pid']]; ?>

<h1><?php echo $page['name']; ?></h1>
<div class="content"><?php echo $page['content']; ?></div>

<?php if($page['name'] == 'Contact'): ?>

<h2>Feedback</h2>
<form action = "message.php" method="post">
 <p>Name: <input type="text" name="name" /></p>
 <p>Phone: <input type="text" name="phone" /></p>
 <p>Email: <input type="text" name="email" /></p>
 <p>Message: <input type="text" name="message" /></p>
 <p><input type="submit" /></p>
</form>

<?php endif; ?>

<?php endif; ?>