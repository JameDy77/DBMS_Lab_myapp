<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Insert Department</title>
</head>
<body>
    <form name = InsertDepartment method = post action = <?php echo base_url();?>index.php/department/insert>
    <table border = 1>
        <tr>
            <td>dnumber</td>
            <td><input type = text name = dnumber > </td>
        </tr>
        <tr>
            <td>dname</td>
            <td><input type = text name = dname > </td>
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