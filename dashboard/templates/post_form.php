<form>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" required>
    </div>
    <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" aria-describedby="slug" required>
    <small id="slug" class="form-text text-muted">Only downcase letter seperate by '-': title-of-post</small>
    </div>
    <div class="form-group">
    <label for="excerpt">Excerpt (optional)</label>
    <textarea name="excerpt" id="excerpt" rows="2" class="form-control"></textarea>
    </div>
    <div class="form-group">
    <label for="post">Text</label>
    <textarea name="post" id="post" rows="10" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Publish</button>
</form>
