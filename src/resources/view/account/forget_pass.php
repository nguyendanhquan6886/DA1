<?php
if (isset($_POST['forget'])) {
    $mail = $_POST['email'];

    if (empty($mail)) {
        $emailMess = "*Please enter your email";
    } else {
        $checkmail = check_email($mail);
        if (!empty($checkmail) && isset($checkmail['kh_pass'])) {
            $forgetMess = "Your password is: " . $checkmail['kh_pass'];
        } else {
            $forgetMess = "Incorrect email address!";
        }
    }
}
?>
<div class="form-wrapper d-flex align-items-center justify-content-center flex-column">
    <h2 class="fw-bold">Login</h2>
    <form class="form" method="post" action="">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            <p class="text-danger form-message mt-1 fw-semibold text-center">
                <?php echo !empty($emailMess) ? $emailMess : ""  ?></p>
        </div>
        <p class="text-danger form-message mt-1 fw-semibold text-center">
            <?php echo !empty($forgetMess) ? $forgetMess : ""  ?></p>
        <button type="submit" class="btn btn-dark w-100 text-uppercase" name="forget">Restore</button>
    </form>
    <p class="mt-4">Sign in to your account? <a href="index.php?act=login">Login</a></p>
</div>