<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Design</title>
    <link rel="stylesheet" href="button.css">
</head>
<body>
    <div class = "img">
    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
    <div class = "Title">
        <h1>nike airmax1020</h1>
    </div>
    <button class = "buttons">Add to cart</button>
    <script>
        document.querySelectorAll("button").forEach(varName=>{
            varName.onclick = function(){
                document.querySelector('h1').innerText = "Price of this pair is 100$";
            };
        });
    </script>
</body>
</html>