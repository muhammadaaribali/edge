<?php
include("../../config/db.php");

$employee=$conn->query("SELECT employee_id, name from Employee");
?>

<h2>Mark Attendance</h2>

<form action="../../actions/attendance_action.php" method="POST">
    <select name="employee_id" required>
        <option value="">Select Employee</option>
        <?php while($e=$employee->fetch_assoc()){ ?>
        <option value="<?php echo $e['employee_id']; ?>">
            <?php echo $e['name']; ?>
        </option>
       <?php } ?>
    </select><br><br>

    <input type="date" name="date" required><br><br>
    <input type="time" name="check_in"><br><br>
    <input type="time" name="check_out"><br><br>

    <select name="status">
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
    </select><br><br>

    <button type="submit" name="add_attendance">
        Submit
    </button>
</form>