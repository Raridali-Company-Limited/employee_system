<?php include('includes/header.php'); ?>
<?php include('includes/db_connection.php'); 

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM employees WHERE id = ?");
$stmt->execute([$id]);
$employee = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark">
            <h2 class="mb-0">Edit Employee</h2>
        </div>
        <div class="card-body">
            <form action="save_employee.php" method="POST">
                <input type="hidden" name="id" value="<?= $employee['id'] ?>">

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $employee['name'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $employee['email'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="text" class="form-control" name="position" value="<?= $employee['position'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input type="number" step="0.01" class="form-control" name="salary" value="<?= $employee['salary'] ?>" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
