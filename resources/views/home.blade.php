<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Horizons - Technology Magazine</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpeg') }}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <a href="/">Tech Horizons</a>
            </div>
            
            <div class="nav-menu">
                <ul class="nav-links">
                    <li><a href="#themes">Themes</a></li>
                    <li><a href="#latest">Latest Articles</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
                
                <div class="auth-buttons">
                    @auth
                        <a href="{{ auth()->user()->role === 'Éditeur' ? route('editeur.dashboard') : route('user.dashboard') }}" 
                           class="btn dashboard-btn">Dashboard</a>
                        <form action="{{ route('logout') }}" method="POST" class="logout-form">
                            @csrf
                            <button type="submit" class="btn logout-btn">Logout</button>
                        </form>
                    @else
                        <a href="{{route('login')}}" class="btn login-btn">Sign In</a>
                        <a href="{{route('register')}}" class="btn signup-btn">Get Started</a>
                    @endauth
                </div>
            </div>

            <button class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Discover the Future of Technology</h1>
                <p>Stay ahead with in-depth articles on AI, IoT, Cybersecurity, and more.</p>
                @guest
                    <a href="{{route('register')}}" class="cta-button">Start Reading Today</a>
                @endguest
            </div>
        </section>

        <section id="themes" class="themes-section">
            <h2>Popular Themes</h2>
            <div class="themes-grid">
                <div class="theme-card">
                    <div class="theme-icon">🤖</div>
                    <h3>Artificial Intelligence</h3>
                    <p>Explore the latest in AI and machine learning</p>
                </div>
                <div class="theme-card">
                    <div class="theme-icon">🔒</div>
                    <h3>Cybersecurity</h3>
                    <p>Stay secure in the digital age</p>
                </div>
                <div class="theme-card">
                    <div class="theme-icon">📱</div>
                    <h3>Internet of Things</h3>
                    <p>Connected devices shaping our future</p>
                </div>
                <div class="theme-card">
                    <div class="theme-icon">🥽</div>
                    <h3>Virtual Reality</h3>
                    <p>Immersive technologies and experiences</p>
                </div>
            </div>
        </section>

        <section id="latest" class="latest-articles">
            <h2>Latest Articles</h2>
            <div class="articles-grid">
                <!-- Cette partie sera dynamique avec les vrais articles -->
                @foreach(range(1, 3) as $index)
                <article class="article-card">
                    <div class="article-image"></div>
                    <div class="article-content">
                        <h3>Sample Article Title</h3>
                        <p>Brief description of the article content goes here...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </article>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="footer" id="about">
        <div class="footer-content">
            <div class="footer-section">
                <h4>About Tech Horizons</h4>
                <p>Your source for the latest technology insights and innovations.</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#themes">Themes</a></li>
                    <li><a href="#latest">Latest Articles</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <ul>
                    <li><a href="mailto:contact@techhorizons.com">Email Us</a></li>
                    <li><a href="">GitHub</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Tech Horizons. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>
