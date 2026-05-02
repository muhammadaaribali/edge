<?php
include("../../config/db.php");
include("../../includes/header.php");

$result = $conn->query("
    SELECT a.attendance_id, e.name, a.date, a.check_in, a.check_out, a.status
    FROM Attendance a
    JOIN Employee e ON a.employee_id = e.employee_id
");
?>

<h2>Attendance Records</h2>

<br>

<a href="add.php" class="btn-primary">+ Add Attendance</a>

<br><br>
<table border="1">
<tr>
    <th>ID</th>
    <th>Employee</th>
    <th>Date</th>
    <th>Check In</th>
    <th>Check Out</th>
    <th>Status</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['attendance_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['check_in']; ?></td>
    <td><?php echo $row['check_out']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>
<?php include("../../includes/footer.php"); ?>