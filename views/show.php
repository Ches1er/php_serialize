<style>
    table{
        border: #000000 1px solid;
        border-collapse: collapse;
    }
    th,td{
        border: #000000 1px solid;
    }
</style>
<table>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
<?php $array = getArrayFromFile();
foreach ($array as $key=>$v):
    $name=$v["name"];
    $surname=$v["surname"];
    ?>
        <tr>
            <td><?=$key;?></td>
            <td><?=$name;?></td>
            <td><?=$surname;?></td>
        </tr>

<?php endforeach; ?>
</table>
