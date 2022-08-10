<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId=$_GET['id'];
  $currentPost;
    

    foreach($posts as $post) {
        
      if($post['id']==$postId) {
        $currentPost = $post;
      }
    }

  }
?>

<main id="post-container">

<div class="content-container">
    <h1 id= "main-title"><?=$currentPost["title"]?></h1>
    <p id="post-description"><?=$currentPost["description"]?></p>
    <div class="img-container">
        <img src="<?=$BASE_URL ?>/img/<?=$currentPost["img"]?>" alt="<?=$currentPost["title"]?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus soluta repellendus voluptatum ad inventore veniam, suscipit consectetur quaerat necessitatibus excepturi nisi accusamus facilis, sint odit, totam rem quibusdam animi molestiae?
    Beatae adipisci pariatur corporis nemo nostrum odio possimus rerum reprehenderit? Laudantium nobis iste molestias voluptatibus eum placeat delectus fugiat dolores quis iure doloremque, harum veniam sint nulla eveniet cupiditate autem!
    Aut sed, quis architecto ipsa corrupti natus tenetur in quae! Qui quo odio veniam iusto et rem accusamus ut, unde ea molestiae eveniet temporibus illum consectetur. Neque cumque veniam eum.
    Perferendis beatae obcaecati ea rem laudantium quidem quaerat molestiae commodi, et in voluptatum nihil amet ducimus ipsam quod, dolores laborum voluptatibus non delectus fugit similique minima cum totam? Minus, atque?
    Nemo ipsa repellat quidem neque reprehenderit? Fugiat hic quis harum quia, similique quidem suscipit placeat. Ut, autem culpa architecto illum accusamus est quidem iusto vitae, harum, tempora cupiditate quia dolor.</p>

    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus soluta repellendus voluptatum ad inventore veniam, suscipit consectetur quaerat necessitatibus excepturi nisi accusamus facilis, sint odit, totam rem quibusdam animi molestiae?
    Beatae adipisci pariatur corporis nemo nostrum odio possimus rerum reprehenderit? Laudantium nobis iste molestias voluptatibus eum placeat delectus fugiat dolores quis iure doloremque, harum veniam sint nulla eveniet cupiditate autem!
    Aut sed, quis architecto ipsa corrupti natus tenetur in quae! Qui quo odio veniam iusto et rem accusamus ut, unde ea molestiae eveniet temporibus illum consectetur. Neque cumque veniam eum.
    Perferendis beatae obcaecati ea rem laudantium quidem quaerat molestiae commodi, et in voluptatum nihil amet ducimus ipsam quod, dolores laborum voluptatibus non delectus fugit similique minima cum totam? Minus, atque?
    Nemo ipsa repellat quidem neque reprehenderit? Fugiat hic quis harum quia, similique quidem suscipit placeat. Ut, autem culpa architecto illum accusamus est quidem iusto vitae, harum, tempora cupiditate quia dolor.</p>

    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus soluta repellendus voluptatum ad inventore veniam, suscipit consectetur quaerat necessitatibus excepturi nisi accusamus facilis, sint odit, totam rem quibusdam animi molestiae?
    Beatae adipisci pariatur corporis nemo nostrum odio possimus rerum reprehenderit? Laudantium nobis iste molestias voluptatibus eum placeat delectus fugiat dolores quis iure doloremque, harum veniam sint nulla eveniet cupiditate autem!
    Aut sed, quis architecto ipsa corrupti natus tenetur in quae! Qui quo odio veniam iusto et rem accusamus ut, unde ea molestiae eveniet temporibus illum consectetur. Neque cumque veniam eum.
    Perferendis beatae obcaecati ea rem laudantium quidem quaerat molestiae commodi, et in voluptatum nihil amet ducimus ipsam quod, dolores laborum voluptatibus non delectus fugit similique minima cum totam? Minus, atque?
    Nemo ipsa repellat quidem neque reprehenderit? Fugiat hic quis harum quia, similique quidem suscipit placeat. Ut, autem culpa architecto illum accusamus est quidem iusto vitae, harum, tempora cupiditate quia dolor.</p>

</div>

<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
               <li> <a href=""><?=$tag?></a></li>
                <?php endforeach;?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
    <?php foreach($categories as $category):?>
               <li> <a href=""><?=$category?></a></li>
                <?php endforeach;?>

    </ul>


</aside>

</main>



    
    





<?php

include_once("templates/footer.php")
?>