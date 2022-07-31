<table class="blog-section">

    <div class="container">
        <?php
        if ($title) {
            echo "<table class='table table-striped '>
                    <thead >
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Title</th>
                        </tr>
                    </thead>";
            $count = 1;
            echo "<tbody>";
            foreach ($title as $titleItem) {

                echo "<tr>";
                echo "<th scope='row'>$count</th>";
                echo "<td><a href='/blog/".url_title($titleItem['title'])."'>";
                echo $titleItem['title'];
                echo "</a></td>";
                $count++;
                echo "</tr>";
            }
            echo "</tbody>";

        } else {
            echo "<p class='text-center'>";
            echo "No Posts Have Been Found";
            echo "</p>";
        }

        ?>
    </div>
    <?php echo $pager->links(); ?>
    </table>
</section>