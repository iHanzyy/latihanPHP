<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        /* Meringkas CSS */
        body{display:flex;justify-content:center;align-items:center;min-height:100vh;margin:0;background:linear-gradient(135deg,#1e293b,#0f172a);font-family:'Arial',sans-serif;overflow:hidden}h1{font-size:6rem;color:#fff;text-transform:uppercase;font-weight:700;letter-spacing:5px;position:relative;cursor:pointer;user-select:none;overflow:hidden}h1::after{content:'';position:absolute;left:0;bottom:-5px;width:100%;height:3px;background:linear-gradient(90deg,#F5F5F5,#F8E7F6,#DD88CF);transform:scaleX(0);transform-origin:left;transition:transform 0.5s ease-in-out}h1:hover::after{transform:scaleX(1)}h1:hover{text-shadow:0 0 10px #F5F5F5,0 0 20px #F8E7F6,0 0 30px #DD88CF;transition:text-shadow 0.3s ease-in-out}body::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:radial-gradient(circle,rgb(255 255 255 / .1) 10%,transparent 10.01%);background-size:20px 20px;animation:backgroundAnimation 10s infinite linear;z-index:-1;pointer-events:none}@keyframes backgroundAnimation{0%{transform:translateY(0) translateX(0)}100%{transform:translateY(-1000px) translateX(-1000px)}}
    </style>
</head>
<body>
    <?php 
    print ("<h1>HELLO WORLD!</h1>");
    ?>
</body>
</html>