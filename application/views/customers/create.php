<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Add Customer</h2>
    <form method="post">
        <input name="full_name" class="form-control mb-2" placeholder="First Name" required>
        <input name="last_name" class="form-control mb-2" placeholder="Last Name" required>
        <textarea name="address" class="form-control mb-2" placeholder="Address"></textarea>
        <input name="contact_number" class="form-control mb-2" placeholder="Contact Number" required>
        <input name="email" class="form-control mb-2" type="email" placeholder="Email" required>
        <input name="password" class="form-control mb-2" type="password" placeholder="Password" required>
        <button class="btn btn-primary">Submit</button>
        <a href="<?= site_url('customers') ?>" class="btn btn-secondary">Back</a>
    </form>
</body>
</html>
