<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Customer List</h2>
    <a href="<?= site_url('customers/create') ?>" class="btn btn-success mb-3">Add New</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Contact</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $c): ?>
                <tr>
                    <td><?= $c->id ?></td>
                    <td><?= $c->full_name ?> <?= $c->last_name ?></td>
                    <td><?= $c->email ?></td>
                    <td><?= $c->contact_number ?></td>
                    <td>
                        <a href="<?= site_url('customers/edit/'.$c->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('customers/delete/'.$c->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
