<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$statuses = sql_select("MEMBRE", "*");
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
            <h1>Membre</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Prénoms</th>
                        <th>Nom</th>
                        <th>Pseudo</th>
                        <th>Mot de passe</th>
                        <th>Email</th>
                        <th>Autorisation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statuses as $status) { ?>
                        <tr>
                            <td><?php echo $status['numMemb']; ?></td>
                            <td><?php echo $status['dtCreaMemb']; ?></td>
                            <td><?php echo $status['prenomMemb']; ?></td>
                            <td><?php echo $status['nomMemb']; ?></td>
                            <td><?php echo $status['pseudoMemb']; ?></td>
                            <td><?php echo $status['passMemb']; ?></td>
                            <td><?php echo $status['eMailMemb']; ?></td>
                            <td><?php echo $status['numStat']; ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo $status['numMemb']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo $status['numMemb']; ?>" class="btn btn-danger">Delete</a>
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