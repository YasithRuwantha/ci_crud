<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center bg-light" style="height:100vh;">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
        <h3 class="text-center mb-4">Add Customer</h3>
        <form method="post">
            <input name="full_name" class="form-control mb-3" placeholder="First Name" required>
            <input name="last_name" class="form-control mb-3" placeholder="Last Name" required>
            <textarea name="address" class="form-control mb-3" placeholder="Address"></textarea>
            <input name="contact_number" class="form-control mb-3" placeholder="Contact Number" required>
            <input name="email" type="email" class="form-control mb-3" placeholder="Email" required>
            <input name="password" type="password" class="form-control mb-3" placeholder="Password" required>
            <div class="d-flex justify-content-between">
                <a href="<?= site_url('customers') ?>" class="btn btn-secondary">Back</a>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

</html>
