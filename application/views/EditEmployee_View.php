<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Edit Department</title>
</head>
<body>
    <?php foreach ($emp as $row) {?>
    <form name = EditDepartment method = post action = <?php echo base_url();?>index.php/department/edit_employee>
    <table border = 1>
        <tr>
            <td>ssn</td>
            <td><input type = text name = ssn value = "<?php echo $row['ssn'];?>"> </td>
        </tr>
        <tr>
            <td>name</td>
            <td><input type = text name = name value = "<?php echo $row['name'];?>"> </td>
        </tr>
        <tr>
            <td>dno</td>
            <td>
            <select name = dno>
                <?php foreach($dept as $rows) { 
                    if($row['dno'] == $rows['dnumber']){?>
                    <option value = <?php echo $rows['dnumber'];?> selected> <?php echo $rows['dnumber'];?> </option> 
                <?php } else { ?>
                    <option value = <?php echo $rows['dnumber']; ?>> <?php echo $rows['dnumber'];?> </option> 
                <?php }
                } ?>
            </select>
            </td>
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