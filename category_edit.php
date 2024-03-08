<h1 class="mt-4">Category</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
    <li class="breadcrumb-item active">Edit</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-plus me-1"></i>
        Edit Category
    </div>
    <div class="card-body">
        <?php
            $id = $_GET['id'];
            if(isset($_POST['submit'])) {
                
                $category = $_POST['category'];
                $query = mysqli_query($connection, "UPDATE category SET category='$category' WHERE id = '$id'");
                if($query) {
                    echo '<script> alert("Success Update new Category!"); location.href="?page=category" </script>';
                } else {
                    echo '<script> alert("Failed Update new Category!") </script>';
                }
            }
            
            $query = mysqli_query($connection, "SELECT * FROM category WHERE id = '$id'");
            $data = mysqli_fetch_array($query);

        ?>
        <form method="post">
            <div class="row">
                <div class="col-sm-3">Category Name</div>
                <div class="col-sm-9"><input name="category" type="text" class="form-control" value="<?php echo $data['category']?>"></div>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <a href="?page=category" class="btn btn-secondary" style="margin-right:10px;">Cancel</a>
                <button class="btn btn-primary" name="submit" value="submit">Add</button>
            </div>
        </form>
    </div>
</div>