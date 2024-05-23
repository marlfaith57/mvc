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
       
                <th>Name</th>
                <th>Price</th>
               
                <th>Option</th>
            </thead>
            <tbody>
                <?php foreach ($args as $product): ?>
                    <tr>
                       
                        <td><?= $product->name ?></td>
                        <td><?= $product->price ?></td>
                      
                        <td>
                            <a href="<?= url ?>Students/edit/<?= $product->id ?>">Edit</a> |
                            <a href="<?= url ?>Students/delete/<?= $product->id ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>