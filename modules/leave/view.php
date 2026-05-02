<?php
include("../../config/db.php");
include("../../includes/header.php");

$result = $conn->query("
    SELECT e.name, l.start_date, l.end_date, l.leave_type, l.status
    FROM LeaveRecord l
    JOIN Employee e ON l.employee_id = e.employee_id
");

$result2 = $conn->query("
    SELECT name 
    FROM Employee
    WHERE employee_id NOT IN (
        SELECT employee_id FROM LeaveRecord
    )
");
?>

<h2>Leave Records</h2>

<br>

<a href="add.php" class="btn-primary">+ Add Leave</a>

<br><br>

<table border="1">
<tr>
    <th>Employee</th>
    <th>Start</th>
    <th>End</th>
    <th>Type</th>
    <th>Status</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['start_date']; ?></td>
    <td><?php echo $row['end_date']; ?></td>
    <td><?php echo $row['leave_type']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

<br><br>

<h3>Employees with NO Leave</h3>
<br>

<ul>
<?php while($row = $result2->fetch_assoc()) { ?>
    <li><?php echo $row['name']; ?></li>
<?php } ?>
</ul>

<?php include("../../includes/footer.php"); ?>