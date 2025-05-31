<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Edit Customer</h2>
    <form method="post">
        <input name="full_name" class="form-control mb-2" value="<?= $customer->full_name ?>" required>
        <input name="last_name" class="form-control mb-2" value="<?= $customer->last_name ?>" required>
        <textarea name="address" class="form-control mb-2"><?= $customer->address ?></textarea>
        <input name="contact_number" class="form-control mb-2" value="<?= $customer->contact_number ?>" required>
        <input name="email" class="form-control mb-2" value="<?= $customer->email ?>" required>
        <input name="password" class="form-control mb-2" type="password" placeholder="Leave blank to keep current">
        <button class="btn btn-primary">Update</button>
        <a href="<?= site_url('customers') ?>" class="btn btn-secondary">Back</a>
    </form>
</body>
</html>
