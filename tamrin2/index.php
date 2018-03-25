<html>
<head>
    <?php  include_once "function.php";?>
    <style>
        table,tr,td{
            border: 1px solid #dddddd;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php for ($i=0;$i<sizeof($firstName);$i++): ?>
                <td>
                     <?php echo $firstName[$i]." ".$lastName[$i]; ?>
                </td>
            <?php endfor; ?>
        </tr>
    </table>
</body>
</html>