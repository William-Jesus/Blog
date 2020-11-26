<?php
require_once "./functions/post_helper.php";

if (empty($_GET["post_id"])){
    $action = "functions/save_post.php";
}
if (isset($_GET["post_id"])){
    $action = "functions/update_post.php";

    $post = get_post($_GET["post_id"]);

}

?>
<form action="<?php echo $action;?>" method="POST">
<input type="hidden" name="id" value="<?php echo $post->id; ?>">
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" value="<?php echo $post->title; ?>" required>
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input name="slug" type="text" class="form-control" id="slug" aria-describedby="slug" value="<?php echo $post->slug; ?>" required>
        <small id="slug" class="form-text text-muted">Only downcase letter seperate by '-': title-of-post</small>
    </div>
    <div class="form-group">
        <label for="excerpt">Excerpt (optional)</label>
        <textarea name="excerpt" id="excerpt" rows="2" class="form-control"><?php echo $post->excerpt; ?></textarea>
    </div>
    <div class="form-group">
        <label for="post">Text</label>
        <textarea name="text" id="post" rows="10" class="form-control" required><?php echo $post->text; ?></textarea>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
