<?php

    $id = $_GET['id'];
    $query = mysqli_query($connection, "DELETE FROM category WHERE id='$id'");

?>

<script>
    alert('Successfully deleted');
    location.href="?page=category"
</script>