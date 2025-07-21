<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eiamin Hassan | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="logo">Eiamin Hassan</div>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="education">Education</a>
            <a href="projects">Projects</a>
            <a href="skills">Skills</a>
            <a href="contact">Contact</a>
        </nav>
    </header>
    <section class="hero">
        <h1>Welcome to My Portfolio</h1>
        <p>
            Hi, I'm <strong>Eiamin Hassan Shanto</strong>, a
            <strong>Computer Science & Engineering (CSE)</strong> student
            with a passion for
            <strong>Data Science & Machine Learning</strong>.
        </p>
        <div class="contact-info" style="margin-top:2rem;">
            <h2>Contact Info</h2>
            <p>
              Email: 
              <a href="mailto:eiaminhassan35@gmail.com?subject=Hello%20Eiamin&body=I%20am%20contacting%20you%20from%20your%20portfolio." target="_blank">
                eiaminhassan35@gmail.com
              </a>
            </p>
        </div>
    </section>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>