<?php foreach ($args as $product): ?>
<div class="card">
    <div class="card-header bg-black">
        <div class="card-title text-white">
            Update Product
            <div style="float: right;">
                <a href="<?= url ?>Products">Back</a>
            </div>
        </div>
    </div>
    <form action="<?= url ?>Products/edit/<?= $product->id?>" method="post"  enctype="multipart/form-data">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name </label>
                        <input name="name" class="form-control" required value="<?= $product->name?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price </label>
                        <input name="price" class="form-control" required value="<?= $product->price?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <input name="id" type="hidden" required value="<?= $product->id?>">
        <button type="submit" name="edit" class="btn btn-success">Save</button>
    </div>
    </form>
</div>
<?php endforeach; ?>