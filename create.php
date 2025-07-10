<?php include('includes/header.php'); ?>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h2 class="mb-0">Add New Employee</h2>
        </div>
        <div class="card-body">
            <form action="save_employee.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="text" class="form-control" name="position" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input type="number" step="0.01" class="form-control" name="salary" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
