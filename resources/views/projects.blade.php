<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Projects</title>
        <!-- Google Fonts: Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- FontAwesome for GitHub Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    </head>
    <body class="projects-bg">
        <div class="projects-container">
            <h1 class="projects-title">Projects</h1>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <h2 class="project-name">Data Structure Project</h2>
                    <p class="project-desc">A collection of data structure implementations and algorithms in C++.</p>
                    <a class="project-link" href="https://github.com/EiaminHassan/Data-Structure-Project.git" target="_blank">
                        <i class="fab fa-github"></i>
                        View Repository
                    </a>
                </div>
                <!-- Project 2: AI Projects (with sub-projects) -->
                <div class="project-card">
                    <h2 class="project-name">AI Projects</h2>
                    <p class="project-desc">Various artificial intelligence projects including chatbots and solvers.</p>
                    <ul class="sub-projects">
                        <li>
                            <span class="sub-title">AI Powered Chatbot</span>
                            <a class="sub-link" href="https://github.com/EiaminHassan/AI_Powered_Chatbot.git" target="_blank">
                                <i class="fab fa-github"></i>
                                View Repository
                            </a>
                        </li>
                        <li>
                            <span class="sub-title">Sudoku Solver</span>
                            <a class="sub-link" href="https://github.com/EiaminHassan/Sudoko_Solver.git" target="_blank">
                                <i class="fab fa-github"></i>
                                View Repository
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Project 3 -->
                <div class="project-card">
                    <h2 class="project-name">Compiler Design Project</h2>
                    <p class="project-desc">A project focused on building a simple compiler and understanding parsing techniques.</p>
                    <a class="project-link" href="https://github.com/EiaminHassan/Compiler_Design_Project.git" target="_blank">
                        <i class="fab fa-github"></i>
                        View Repository
                    </a>
                </div>
                <!-- Project 4 -->
                <div class="project-card">
                    <h2 class="project-name">Operating System Project</h2>
                    <p class="project-desc">Implementation of core OS concepts and process management in C.</p>
                    <a class="project-link" href="https://github.com/EiaminHassan/OS-Project.git" target="_blank">
                        <i class="fab fa-github"></i>
                        View Repository
                    </a>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>