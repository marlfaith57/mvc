<?php foreach ($args as $student): ?>
<div class="card">
    <div class="card-header bg-black">
        <div class="card-title text-white">
            Update Student
            <div style="float: right;">
                <a href="<?= url ?>Students">Back</a>
            </div>
        </div>
    </div>
    <form action="<?= url ?>Students/edit/<?= $student->id?>" method="post"  enctype="multipart/form-data">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ID No </label>
                        <input name="id_no" class="form-control" required value="<?= $student->id_no?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name </label>
                        <input name="name" class="form-control" required value="<?= $student->name?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course </label>
                        <input name="course" class="form-control" required value="<?= $student->course?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Year </label>
                        <input name="year_level" class="form-control" required value="<?= $student->year_level?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?=url?>img/<?= !empty($student->image)?$student->image:'no_image.png' ?>" alt="image" width="200">
                <input type="file" name="image" accept="image/x-png,image/jpeg">
            </div>
        </div>
    </div>
    <div class="card-footer">
        <input name="id" type="hidden" required value="<?= $student->id?>">
        <button type="submit" name="edit" class="btn btn-success">Save</button>
    </div>
    </form>
</div>
<?php endforeach; ?>