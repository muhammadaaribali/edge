<?php
include("../../config/db.php");
include("../../includes/header.php");

$result = $conn->query("
    SELECT e.name, s.amount, s.bonus, s.deductions,
           (s.amount + s.bonus - s.deductions) AS net_salary,
           s.effective_date
    FROM Salary s
    JOIN Employee e ON s.employee_id = e.employee_id
");
?>

<h2>Salary Records</h2>

<br>

<a href="add.php" class="btn-primary">+ Add Salary</a>

<br><br>

<table border="1">
<tr>
    <th>Employee</th>
    <th>Amount</th>
    <th>Bonus</th>
    <th>Deductions</th>
    <th>Net Salary</th>
    <th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['amount']; ?></td>
    <td><?php echo $row['bonus']; ?></td>
    <td><?php echo $row['deductions']; ?></td>
    <td><?php echo $row['net_salary']; ?></td>
    <td><?php echo $row['effective_date']; ?></td>
</tr>
<?php } ?>

</table>

<?php include("../../includes/footer.php"); ?>