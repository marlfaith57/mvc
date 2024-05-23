<div class="card">
    <div class="card-header bg-black">
        <div class="card-title text-white">
            Students
            <div style="float: right;">
                <a href="<?= url ?>Students/add">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped" width="100%">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Option</th>
            </thead>
            <tbody>
                <?php foreach ($args as $student): ?>
                    <tr>
                        <td><?= $student->id_no ?></td>
                        <td><?= $student->name ?></td>
                        <td><?= $student->course ?></td>
                        <td><?= $student->year_level ?></td>
                        <td>
                            <a href="<?= url ?>Students/edit/<?= $student->id ?>">Edit</a> |
                            <a href="<?= url ?>Students/delete/<?= $student->id ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>