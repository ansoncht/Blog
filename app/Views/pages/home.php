    <section>
        <?php
            $session = \Config\Services::session();
            if (isset($session->success)) {
                echo "<div id='message' class='alert alert-success text-center alert-dismissible fade show mb-0' role='alert'>";
                    echo $session->success;
                    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close' onclick='hide()'>";
                        echo "<span aria-hidden='true'>";
                            echo "&times;";
                        echo "</span>";
                    echo "</button>";
                echo "</div>";
            }
        ?>
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">Blog</h1>
                <p class="lead">This is the blog project that I have created.</p>
                <hr class="my-4">
                <p>It uses PHP, CodeIgniter, JavaScript, and MySQL.</p>
            </div>
        </div>
    </section>
    <section class="blog-section">
        <div class="container">
            <div class="row">
            <?php
                if ($news) {
                    foreach ($news as $newsItem) {
                        echo "<div class='col-sm-6' style='margin-bottom: 1em'>";
                        echo "<div class='card'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>".$newsItem['title']."</h5>";
                        echo "<a href='/blog/".$newsItem['slug']."'>Discover</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p class='text-center'>";
                        echo "No Posts Have Been Found";
                    echo "</p>";
                }
            ?>
            </div>
        </div>
    </section>
    <script>
        function hide() {
            document.getElementById("message").style.visibility = "hidden";
        }
    </script>