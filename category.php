<h1 class="mt-4">Category</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Category List
    </div>
    <div class="card-body">
        <a href="?page=category_add" class="btn btn-primary mb-2"> Add Category</a>
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    $query = mysqli_query($connection, "select * from category");
                    while( $data = mysqli_fetch_array($query)){ ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $data['category'] ?></td>
                            <td>
                                <a href="?page=category_edit&id=<?php echo $data['id']?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="?page=category_delete&id=<?php echo $data['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Want to Delete?')">Delete</a>
                            </td>
                        </tr>

                    <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>