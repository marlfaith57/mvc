<div class="card">
    <div class="card-header bg-black">
        <div class="card-title text-white">
            Students
            <div style="float: right;">
                <a href="<?= url ?>Users/add">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped" width="100%">
            <thead>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Option</th>
            </thead>
            <tbody>
            <?php foreach ($args as $user): ?>
                <tr>
                    <td><?= $user->username ?></td>
                    <td><?= $user->password ?></td>
                    <td><?= $user->role ?></td>
                    <td>
                        <a href="<?= url ?>Users/edit/<?= $user->id ?>">Edit</a> |
                        <a href="<?= url ?>Users/delete/<?= $user->id ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>