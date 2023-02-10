<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$statuses = sql_select("ARTICLE", "*");
?>
<style> 
h1{
    color:white;
}
label{
    color:white;
}</style>
<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Status</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Chapo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statuses as $status) { ?>
                        <tr>
                            <td><?php echo $status['numArt']; ?></td>
                            <td><?php echo $status['dtCreArt']; ?></td>
                            <td><?php echo $status['libTitrArt']; ?></td>
                            <td><?php echo $status['libChapoArt']; ?></td>
                            <td>
                                <a href="edit.php?numArt=<?php echo $status['numArt']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo $status['numArt']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer