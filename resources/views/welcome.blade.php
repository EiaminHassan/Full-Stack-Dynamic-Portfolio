<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Eiamin Hassan | Welcome</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    </head>
    <body>
        <header class="navbar">
            <div class="logo">Eiamin Hassan</div>
            <nav>
                <a href="home">Home</a>
                <a href="education">Education</a>
                <a href="projects">Projects</a>
                <a href="skills">Skills</a>
            </nav>
        </header>
        <section class="hero" id="home">
            <img src="{{ asset('assets/eiamin.jpg') }}" alt="Eiamin Hassan" />
            <h1>Welcome to My Portfolio</h1>
            <h2>
                Aspiring Data & ML Engineer | Problem Solver | Tech Enthusiast
            </h2>
            <div class="btn-group">
                <a href="education" class="btn">Education</a>
                <a href="projects" class="btn">Projects</a>
                <a href="skills" class="btn">Skills</a>
            </div>
            <p>
                Hi, I'm <strong>Eiamin Hassan</strong>, a
                <strong>Computer Science & Engineering (CSE)</strong> student
                with a passion for
                <strong>Data Science & Machine Learning</strong>.
            </p>
        </section>
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
