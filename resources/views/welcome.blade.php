<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>
    .display_flex{
        background-color: Orange;
        display: flex;
        justify-content: center;
    }
    .buttons{
        display: flex;
        justify-content: space-between;
    }
    .Home{
        background-color: aqua;
        color: black;
        border: none;
        height: 36px;
        width: 105px;
        border-radius: 2px;
        cursor: pointer;
    }
    .Edu{
        background-color: aqua;
        color: black;
        border: none;
        height: 36px;
        width: 105px;
        border-radius: 2px;
        cursor: pointer;
    }
    .Project{
        background-color: aqua;
        color: black;
        border: none;
        height: 36px;
        width: 105px;
        border-radius: 2px;
        cursor: pointer;
    }
    .Skills{
        background-color: aqua;
        color: black;
        border: none;
        height: 36px;
        width: 105px;
        border-radius: 2px;
        cursor: pointer;
    }
    .image{
        display: flex;
        justify-content: center; 
    }
    .circular{
        border-top-left-radius: 50% 50%;
        border-top-right-radius: 50% 50%;
        border-bottom-right-radius: 50% 50%;
        border-bottom-left-radius: 50% 50%;
    }
</style>
<body>
    <nav>
        <div class="display_flex">
            <h1>
                Welcome to my Portfolio
            </h1>
        </div>
        <div class="buttons">
            <button class = "Home">
                HomePage
            </button>
            <button class = "Edu">
                Education
            </button>
            <button class = "Project">
                Project
            </button>
            <button class = "Skills">
                Skills
            </button>
        </div>
    </nav>
    <div>
        <div class="image">
           <img class="circular" src="{{asset('assets/eiamin.jpg')}}" alt="Eiamin"> 
        </div>
    </div>
</body>
</html>