    <div class="container">
        <h1>Create New Post</h1>
        <?php
            if($_POST) {
                echo \Config\Services::validation()->listErrors();
            }
        ?>
        <form class="" action="/blog/create" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title"><strong>Title:</strong></label>
                <input type="text" class="form-control" name="title" id="title" value="">
            </div>
            <div class="form-group">
                <label for="description"><Strong>Description:</Strong></label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image"><strong>Image</strong></label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="tag"><strong>Tag: (Separate by a #)</strong></label>
                <input type="text" class="form-control" name="tag" id="tag" value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Create</button>
            </div>
        </form>
    </div>
