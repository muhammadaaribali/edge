<?php
include("../../config/db.php");
include("../../includes/header.php");

$employees = $conn->query("SELECT employee_id, name FROM Employee");
?>

<h2>Apply Leave</h2>

<form action="../../actions/leave_action.php" method="POST">

<select name="employee_id" required>
    <option value="">Select Employee</option>
    <?php while($e = $employees->fetch_assoc()) { ?>
        <option value="<?php echo $e['employee_id']; ?>">
            <?php echo $e['name']; ?>
        </option>
    <?php } ?>
</select><br><br>

<input type="date" name="start_date" required><br><br>
<input type="date" name="end_date" required><br><br>

<select name="leave_type">
    <option value="Sick">Sick</option>
    <option value="Casual">Casual</option>
</select><br><br>

<select name="status">
    <option value="Pending">Pending</option>
    <option value="Approved">Approved</option>
</select><br><br>

<button type="submit" name="add_leave">Submit</button>

</form>

<?php include("../../includes/footer.php"); ?>