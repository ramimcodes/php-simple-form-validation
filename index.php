<?php

$first_name = '';
$last_name = '';
$username = '';
$password = '';
$confirm_password = '';
$city = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = formData('first_name');
    $last_name = formData('last_name');
    $username = formData('username');
    $password = formData('password');
    $confirm_password = formData('confirm_password');
    $city = formData('city');

    if (!$first_name) {
        $errors['first_name'] = 'This field is required';
    }
    if (!$last_name) {
        $errors['last_name'] = 'This field is required';
    }
    if (!$username) {
        $errors['username'] = 'This field is required';
    }
    if (!$password) {
        $errors['password'] = 'This field is required';
    }
    if (!$confirm_password) {
        $errors['confirm_password'] = 'This field is required';
    }
    if (!$city) {
        $errors['city'] = 'This field is required';
    }
}

function formData($filed)
{
    return $_POST[$filed];
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP FORM VALIDATION</title>
</head>

<main class="container">
    <div class="py-5">
        <h3 class="text-center">PHP FORM VALIDATION</h3>
        <hr>
    </div>

    <form action="" method="POST" class="row g-3">
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">First name</label>
            <input name="first_name" type="text" class="form-control <?php if (isset($errors['first_name'])) echo 'is-invalid' ?>" id="validationServer01" value="">
            <div class="invalid-feedback">This field is required</div>
        </div>
        <div class="col-md-4">
            <label class="form-label">Last name</label>
            <input name="last_name" type="text" class="form-control <?php if (isset($errors['last_name'])) echo 'is-invalid' ?>" value="">
            <div class="invalid-feedback">
                This field is required
            </div>
        </div>
        <div class="col-md-4">
            <label class="form-label">Username</label>
            <div class="input-group has-validation">
                <input name="username" type="text" class="form-control <?php if (isset($errors['username'])) echo 'is-invalid' ?>">
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer02" class="form-label">Password</label>
            <input name="password" type="number" class="form-control <?php if (isset($errors['password'])) echo 'is-invalid' ?>" value="">
            <div class="invalid-feedback">
                This field is required
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer02" class="form-label">Confirm Password</label>
            <input name="confirm_password" type="number" class="form-control <?php if (isset($errors['confirm_password'])) echo 'is-invalid' ?>" value="">
            <div class="invalid-feedback">
                This field is required
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-label">City</label>
            <input name="city" type="text" class="form-control <?php if (isset($errors['first_name'])) echo 'is-invalid' ?>">
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</main>

<body>

</body>

</html>