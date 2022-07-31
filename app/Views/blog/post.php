<section>
    <div class="container">
    <article class="blog-post">
        <?php
        echo "<div class='text-center'>";
        echo "<h1>".$post['title']."</h1>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='description'>Description:&nbsp&nbsp</label>";
        echo $post['description'];
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='description'>Tags:&nbsp&nbsp</label>";
        $item = $post['tag'];
        $str_arr = explode ("#", $item);
        $trim = array_slice($str_arr, 1);
        foreach ($trim as $cur) {
            echo "#".$cur." ";
        }
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='description'>Image:&nbsp&nbsp</label>";
        echo "<img src='http://localhost/blog/images/".$post['image']."' width='500' height='600' alt='Image'>";
        echo "</div>";
        ?>
    </article>
    </div>
</section>


