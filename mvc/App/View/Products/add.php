<div class="card">
    <div class="card-header bg-black">
        <div class="card-title text-white">
            Add Product
            <div style="float: right;">
                <a href="<?=url?>Products">Back</a>
            </div>
        </div>
    </div>
    <form action="<?=url?>Products/add" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name </label>
                        <input name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Price </label>
                        <input name="price" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" name="add" class="btn btn-success">Save</button>
    </div>
    </form>
</div>