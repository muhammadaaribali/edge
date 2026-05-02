<?php
include("includes/auth.php");
include("includes/header.php");
?>

<div class="container">

<div class="card">
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
</div>

<div class="dashboard-grid">

    <a class="dash-card" href="modules/employee/view.php">
        <i class="bi bi-people-fill icon"></i>
        <h3>Employees</h3>
        <p>Manage employees</p>
    </a>

    <a class="dash-card" href="modules/attendance/view.php">
        <i class="bi bi-calendar-check icon"></i>
        <h3>Attendance</h3>
        <p>Track attendance</p>
    </a>

    <a class="dash-card" href="modules/salary/view.php">
        <i class="bi bi-cash-stack icon"></i>
        <h3>Salary</h3>
        <p>Manage salaries</p>
    </a>

    <a class="dash-card" href="modules/leave/view.php">
        <i class="bi bi-journal-text icon"></i>
        <h3>Leave</h3>
        <p>Leave records</p>
    </a>

</div>

</div>

<?php include("includes/footer.php"); ?>