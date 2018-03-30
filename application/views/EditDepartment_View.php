<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Edit Department</title>
</head>
<body>
    <?php foreach ($dept as $row) {?>
    <form name = EditDepartment method = post action = <?php echo base_url();?>index.php/department/edit>
    <table border = 1>
        <tr>
            <td>dnumber</td>
            <td><input type = text name = dnumber value = "<?php echo $row['dnumber'];?>"> </td>
        </tr>
        <tr>
            <td>dname</td>
            <td><input type = text name = dname value = "<?php echo $row['dname'];?>"> </td>
        </tr>
        <tr>
            <td colspan = 2>
                <input type = submit name = Edit value = Edit>
                <input type = reset name = Cancel value = Cancel>
            </td>
        </tr>
    </table>
    </form>
    <?php } ?>
</body>
</html>