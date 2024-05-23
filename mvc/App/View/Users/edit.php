<?php foreach ($args as $user): ?>
<form action="<?= url ?>Users/edit/<?= $user->id ?>" method="post">
    <div class="card">
        <div class="card-header bg-black">
            <div class="card-title text-white">
                Update User
                <div style="float: right;">
                    <a href="<?= url ?>Users">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Username </label>
                    <input name="username" class="form-control" required value="<?= $user->username?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Password </label>
                    <input type="password" name="password" class="form-control" required value="<?= $user->password?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Role </label>
                    <select name="role" class="form-control">
                        <option value="user" <?= $user->role == 'user'?'selected':''?>>User</option>
                        <option value="administrator" <?= $user->role == 'administrator'?'selected':''?>>Administrator</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input name="id" type="hidden" value="<?= $user->id ?>">
            <button type="submit" name="edit" class="btn btn-success">Save</button>
        </div>
    </div>
</form>
<?php endforeach;?>