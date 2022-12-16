<?php if(!empty($_GET['pid']) && !empty($pagesData)):
$page = $pagesData[$_GET['pid']]; ?>

<h1><?php echo $page['name']; ?></h1>
<div class="content"><?php echo $page['content']; ?></div>

<?php if($page['name'] == 'Contact'): ?>
<h2>Feedback</h2>
<form action = "reply.php" method="POST">
    <p>Name: <input type="text" name="name" /></p>
    <p>Phone: <input type="tel" name="phone" /></p>
    <p>Email: <input type="email" name="email" /></p>
    <p><textarea name="message" cols="30" rows="5" placeholder="Message..."></textarea></p>
    <button  type="submit">Send</button>
</form>
<?php endif; ?>

<?php endif; ?>