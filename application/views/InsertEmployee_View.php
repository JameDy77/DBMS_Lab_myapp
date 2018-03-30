<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Insert Department</title>
</head>
<body>
    <form name = InsertEmployee method = post action = <?php echo base_url();?>index.php/department/insert_employee>
    <table border = 1>
        <tr>
            <td>ssn</td>
            <td><input type = text name = ssn > </td>
        </tr>
        <tr>
            <td>name</td>
            <td><input type = text name = name > </td>
        </tr>
        <tr>
            <td>dno</td>
            <td>
                <select name = dno>
                <?php foreach($dept as $row) { ?>
                    <option value = <?php echo $row['dnumber']; ?>><?php echo $row['dname'];?></option> 
                <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan = 2>
                <input type = submit name = Insert value = Insert>
                <input type = reset name = Cancel value = Cancel>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>