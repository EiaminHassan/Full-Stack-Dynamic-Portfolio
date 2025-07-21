<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Eiamin Hassan | Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    </head>
    <body>
        <header class="navbar">
            <div class="logo">Eiamin Hassan Shanto</div>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="education">Education</a>
                <a href="projects">Projects</a>
                <a href="skills">Skills</a>
                <a href="contact">Contact</a>
            </nav>
        </header>
        <section class="hero" id="home">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hi, This is Eiamin</h1>
                    <!-- <h2>Computer Science & Engineering Student</h2> -->
                    <p>
                        Undergrade <strong>CSE student</strong> at Daffodil International University, 
                        Dhaka, Bangladesh who is keen about pursuing a career in 
                        <strong>Data Science & Machine Learning</strong>.
                    </p>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/eiamin-hassan-shanto/" target="_blank" class="social-link linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/EiaminHassan" target="_blank" class="social-link github">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a href="{{ url('/contact') }}" class="btn primary">Contact Me</a>
                        <a href="projects" class="btn secondary">View Projects</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('assets/eiamin.jpg') }}" alt="Eiamin Hassan" />
                </div>
            </div>
        </section>
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
