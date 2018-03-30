<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Show Department / Show Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<!-- spotify:user:21nnrtg7fd4npatnfr7csa3la:playlist:2sdgZClM5ar0FTE5cqdpmL -->
<iframe width="560" height="315" src="https://www.youtube.com/embed/5vRlJrkxsqo?autoplay=1&amp;start=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/J7UwSVsiwzI?autoplay=1&amp;start=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --> 
<iframe src="https://open.spotify.com/embed?uri=spotify:user:21nnrtg7fd4npatnfr7csa3la:playlist:2sdgZClM5ar0FTE5cqdpmL&view=coverart" frameborder="0" allow="encrypted-media" allowtransparency="true"></iframe>
<!--<iframe width="1" height="1" src="https://www.youtube.com/embed/V7bwm5oDAiU?autoplay=1&amp;start=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
<!--<iframe width="1" height="1" src="https://www.youtube.com/embed/mfqJyKm20Z4?autoplay=1&amp;start=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
    <h1>Department</h1>
    <a href = "<?php echo base_url();?>index.php/department/insert" class="btn btn-info" >Insert Department</a>
    <!-- <?php echo base_url();?> -->
    <table border = 1 class="table table-dark table-hover">
        <thead>
        <tr>
            <td>dnumber</td>
            <td>dname</td>
            <td colspan=2>Operation</td>
        </tr>
        </thead>
        <?php foreach($dept as $row) {?>
        <tr>
            <td><?php echo $row['dnumber']; ?></td>
            <td><?php echo $row['dname']; ?></td>
            <td><a href = "<?php echo base_url();?>index.php/department/edit/<?php echo $row['dnumber']; ?>" class="btn btn-warning">Edit</a></td>
            <td><a href = "<?php echo base_url();?>index.php/department/delete/<?php echo $row['dnumber']; ?>" class="btn btn-danger" onclick="return confirm('Want to delete?');">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    <hr>
    <h1>Employee</h1>
    <!-- <a href = "<?php echo base_url();?>index.php/employee/insert" class="btn btn-info">Insert Employee</a> -->
    <a href = "<?php echo base_url();?>index.php/department/insert_employee" class="btn btn-info">Insert Employee</a>
    <table border = 1 class="table table-dark table-hover">
        <thead>
        <tr>
            <td>ssn</td>
            <td>name</td>
            <td>dno</td>
            <td colspan=2>Operation</td>
        </tr>
        </thead>
        <?php foreach($emp as $row) {?>
        <tr>
            <td><?php echo $row['ssn']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dno']; ?></td>
            <!--<td><a href="<?php echo base_url();?>index.php/employee/edit/<?php echo $row['ssn'];?>"><input name="Edit" style= "background-color: yellow; cursor: pointer;" type="submit" value="Edit" /></a></td>-->
            <!-- 
            <td><a href = "<?php echo base_url();?>index.php/employee/edit/<?php echo $row['ssn']; ?>" class="btn btn-warning">Edit</a></td>
            <td><a href = "<?php echo base_url();?>index.php/employee/delete/<?php echo $row['ssn']; ?>" class="btn btn-danger" onclick="return confirm('Want to delete?');">Delete</a></td>
            -->
            <td><a href = "<?php echo base_url();?>index.php/department/edit_employee/<?php echo $row['ssn']; ?>" class="btn btn-warning">Edit</a></td>
            <td><a href = "<?php echo base_url();?>index.php/department/delete_employee/<?php echo $row['ssn']; ?>" class="btn btn-danger" onclick="return confirm('Want to delete?');">Delete</a></td>
        </tr>
        <?php } ?>

    </table>
    <a href = "<?php echo base_url();?>index.php/department/api_department" class="btn btn-info">Test</a>
</div>
</body>
</html>