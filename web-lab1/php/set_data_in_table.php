<tr class="result-table-row">
    <th>X</th>
    <th>Y</th>
    <th>R</th>
    <th>RESULT</th>
    <th>TIME</th>
    <th>EXECUTION TIME</th>
</tr>

<?php foreach ($_SESSION['history'] as $value) { ?>
    <tr class="result-table-row" >
        <td><?php echo $value[0] ?></td>
        <td><?php echo $value[1] ?></td>
        <td><?php echo $value[2] ?></td>
        <td><?php echo $value[3] ? 'True' : 'False'; ?></td>
        <td><?php echo $value[4] ?></td>
        <td><?php echo number_format($value[5], 10, ".", "") * 1000000 ?></td>
    </tr>
<?php }?>

