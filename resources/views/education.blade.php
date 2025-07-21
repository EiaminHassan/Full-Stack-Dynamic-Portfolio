<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Eiamin Hassan | Education</title>
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
        <section class="education-section">
            <h2 class="education-title">EDUCATION</h2>
            <div class="timeline">
                <!-- Card 1 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <span class="timeline-year">2017</span>
                        <div class="timeline-degree">SSC (Secondary School Certificate)</div>
                        <div class="timeline-institution">Purinda K.M. Sadekur Rahman High School</div>
                        <p class="timeline-desc">
                            Successfully completed Secondary School Education with foundational knowledge in science and mathematics.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <span class="timeline-year">2019</span>
                        <div class="timeline-degree">HSC (Higher Secondary Certificate)</div>
                        <div class="timeline-institution">Narsingdi Government College</div>
                        <p class="timeline-desc">
                            Specialized in science with emphasis on physics, chemistry, and higher mathematics.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <span class="timeline-year">2022 – 2025</span>
                        <div class="timeline-degree">BSc in Computer Science & Engineering</div>
                        <div class="timeline-institution">Daffodil International University</div>
                        <p class="timeline-desc">
                            Currently pursuing a bachelor's degree focusing on Data Science, AI, ML.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
