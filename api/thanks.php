<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Apple Support</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg">

<style>
body{
    margin:0;
    background:#f5f5f7;
    font-family:-apple-system,BlinkMacSystemFont,"SF Pro Text","SF Pro Display",Helvetica,Arial,sans-serif;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#1d1d1f;
}

/* Card */
.card{
    width:100%;
    max-width:460px;
    background:#fff;
    border-radius:28px;
    padding:40px 32px;
    box-shadow:
        0 4px 20px rgba(0,0,0,.06),
        0 20px 40px rgba(0,0,0,.08);
    text-align:center;
}

/* Logo */
.logo{
    width:48px;
    margin:0 auto 14px;
}

/* Title */
h1{
    font-size:22px;
    font-weight:600;
    margin-bottom:8px;
}

/* Spinner */
.spinner{
    width:42px;
    height:42px;
    border:3px solid #e5e5ea;
    border-top:3px solid #1d1d1f;
    border-radius:50%;
    margin:22px auto 12px;
    animation:spin 1s linear infinite;
}

@keyframes spin{
    to{transform:rotate(360deg);}
}

/* Secured */
.secured{
    font-size:13px;
    color:#0071e3;
    margin-bottom:18px;
    animation:pulse 1.4s infinite;
}

@keyframes pulse{
    0%{opacity:.4}
    50%{opacity:1}
    100%{opacity:.4}
}

/* Progress steps */
.steps{
    text-align:left;
    margin:18px auto;
    font-size:14px;
    color:#6e6e73;
}

.steps div{
    padding:6px 0;
}

.steps .done{
    color:#1d1d1f;
    font-weight:500;
}

/* Description */
.desc{
    font-size:14px;
    color:#6e6e73;
    line-height:1.6;
    margin-top:16px;
}

/* Countdown */
.timer{
    font-size:13px;
    color:#6e6e73;
    margin-top:22px;
}

/* Responsive tweaks */
@media(max-width:480px){
    .card{
        padding:32px 20px;
        border-radius:22px;
    }

    h1{
        font-size:20px;
    }

    .desc{
        font-size:13px;
    }
}
</style>
</head>

<body>

<div class="card">

    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple">

    <h1>Apple Support</h1>

    <div class="spinner"></div>

    <div class="secured">🔒 Secured Connection</div>

    <div class="steps">
        <div class="done">✔ Contact request received</div>
        <div class="done">✔ Device status verified</div>
        <div class="done">✔ Location data synced</div>
        <div>⏳ Connecting to support team…</div>
    </div>

    <div class="desc">
        Thank you for contacting Apple Support.<br><br>
        Our system is preparing assistance for your request.
        Please keep your device connected.
    </div>

    <div class="timer">
        Returning to Home in <strong><span id="time">5</span></strong> seconds…
    </div>

</div>

<script>
let t = 5;
const el = document.getElementById("time");

const countdown = setInterval(()=>{
    t--;
    el.textContent = t;
    if(t === 0){
        clearInterval(countdown);
        window.location.href = "https://icloud.com"; // ganti sesuai kebutuhan
    }
},1000);
</script>

</body>
</html>
