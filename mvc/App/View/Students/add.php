<div class="card">
    <div class="card-header bg-black">
        <div class="card-title text-white">
            Add Student
            <div style="float: right;">
                <a href="<?=url?>Students">Back</a>
            </div>
        </div>
    </div>
    <form action="<?=url?>Students/add" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>ID No </label>
                        <input name="id_no" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name </label>
                        <input name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Course </label>
                        <input name="course" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Year </label>
                        <input name="year_level" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?=url?>/img/no_image.png" alt="image" width="200">
                <input type="file" name="image" accept="image/x-png,image/jpeg">
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" name="add" class="btn btn-success">Save</button>
    </div>
    </form>
</div>