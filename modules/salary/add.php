<?php
include("../../config/db.php");

$employees=$conn->query("SELECT employee_id, name from Employee");
?>

<h2>Add salary</h2>

<form action="../../actions/salary_action.php" method="POST">
    <select name="employee_id" required>
        <option value="">Select Employee</option>
        <?php while($e=$employees->fetch_assoc()){ ?>
        <option value="<?php echo $e['employee_id'];?>">
            <?php echo $e['name']; ?>
        </option>
        <?php } ?>
    </select><br><br>

    <input type="number" name="amount" placeholder="Salary Amount" required><br><br>
    <input type="number" name="bonus" placeholder="Bonus"><br><br>
    <input type="number" name="deductions" placeholder="Deductions"><br><br>
    <input type="date" name="effective_date"><br><br>

    <button type="submit" name="add_salary">Add Salary</button>
</form>