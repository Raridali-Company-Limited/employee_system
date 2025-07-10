<?php include('includes/header.php'); ?> 
<?php include('includes/db_connection.php'); ?> 

<!-- Watermark Styling -->
<style>
    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: repeating-linear-gradient(
            45deg,
            rgba(0, 0, 0, 0.03) 0,
            rgba(0, 0, 0, 0.03) 1px,
            transparent 1px,
            transparent 60px
        ),
        repeating-linear-gradient(
            -45deg,
            rgba(0, 0, 0, 0.03) 0,
            rgba(0, 0, 0, 0.03) 1px,
            transparent 1px,
            transparent 60px
        );
        z-index: -1;
        pointer-events: none;
    }

    body::after {
        content: "designed by samuel";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        font-size: 3rem;
        color: rgba(0, 0, 0, 0.05);
        z-index: 0;
        pointer-events: none;
        white-space: pre;
        background-image: repeating-linear-gradient(
            45deg,
            transparent,
            transparent 100px,
            rgba(0, 0, 0, 0.05) 100px,
            rgba(0, 0, 0, 0.05) 200px
        );
        display: flex;
        align-items: center;
        justify-content: center;
        transform: rotate(-30deg);
        text-align: center;
        line-height: 2;
    }
</style>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Employee List</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $conn->query("SELECT * FROM employees");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['position']}</td>
                            <td>\${$row['salary']}</td>
                            <td>
                                <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-outline-warning me-1'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-outline-danger'>Delete</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
