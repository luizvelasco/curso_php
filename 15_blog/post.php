<?php
    include_once('templates/header.php');

    if (isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div id="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quasi illum modi ut beatae aut at. Quam voluptatum quaerat illum enim, vitae fugit consectetur, dolore ipsum veritatis, possimus accusamus corrupti!
            Vel, consequatur distinctio voluptas, quaerat, tempore quae delectus provident aut exercitationem itaque ad optio quas architecto esse explicabo corrupti nesciunt velit totam culpa? Deleniti fuga harum, nam soluta fugit ab!
            Eveniet dolores beatae, odio itaque quibusdam neque nam explicabo earum illum cum similique placeat at optio non quod dicta dolorem nisi. Quis minus, omnis possimus ea temporibus eaque eum totam.
            Adipisci neque iste praesentium ipsa exercitationem fugiat. Deleniti, dolor soluta! Numquam nesciunt dignissimos culpa ipsum praesentium harum nulla debitis magnam ad voluptate quae totam, tempore, corporis quaerat? Dolorem, voluptatum accusantium!
            Cum at odio deserunt nobis aliquam aspernatur quidem culpa laborum eius, animi nemo vero voluptates nulla praesentium. Excepturi ea, omnis rerum id veniam accusantium nulla eius eligendi, harum aliquid officiis.</p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>

<?php
    include_once('templates/footer.php');
?>
