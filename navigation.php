<?php require_once './pagesData.php'; ?>

<div class="main">

    <?php if(empty($_GET['pid'])): ?>
    <nav class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <?php if (!empty($pagesData)): ?>
            <?php foreach($pagesData as $id => $page): ?>
            <li><a href="/navigation.php?pid=<?php echo $id; ?>"><?php echo $page['name']; ?></a></li>
            <?php endforeach;
            endif; ?>
        </ul>
    </nav>   
    <?php else: require_once './page.php'; endif; ?>
</div>
