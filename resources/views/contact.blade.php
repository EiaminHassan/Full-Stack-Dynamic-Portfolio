<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Eiamin Hassan | Contact</title>
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
        
        <div class="contact-container">
            <div class="contact-header">
                <h1>Contact Me</h1>
                <p>Get in touch</p>
            </div>
            
            <div class="contact-layout">
                <div class="contact-info-section">
                    <div class="contact-item">
                        <div class="contact-icon whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Whatsapp Me</h3>
                            <p>01863769094</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon email">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>eiaminhassan35@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon location">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-section">
                    @if(session('success'))
                        <div class="success-message">
                            <i class="fas fa-check-circle"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i>
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i>
                            Please fix the following errors:
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="project" placeholder="Project" required value="{{ old('project') }}">
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" placeholder="Message" rows="6" required>{{ old('message') }}</textarea>
                        </div>
                        
                        <button type="submit" class="send-btn">
                            Send Messages <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
