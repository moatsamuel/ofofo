
    @extends("layouts.site")

    @section("content")

    <!-- Hero Section -->
    <section class="hero-section container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="hero-title">
                    Speak Freely.<br>
                    Stay <span class="glow-text">Hidden.</span>
                </h1>
                <p class="hero-subtitle">
                    The most secure way to receive anonymous messages from your friends, coworkers, and fans. No
                    tracking. Partial encryption. Total secrecy.
                </p>
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <a href="register.html" class="btn btn-premium">Start Receiving Messages</a>
                    <a href="#how-it-works" class="btn btn-outline-glow">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="container py-5">
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="ph-duotone ph-mask-happy feature-icon"></i>
                    <h3 class="feature-title">100% Anonymous</h3>
                    <p class="feature-desc">
                        We never reveal the identity of the sender. Receive honest feedback without the fear of
                        judgment.
                    </p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="ph-duotone ph-shield-check feature-icon"></i>
                    <h3 class="feature-title">Secure & Private</h3>
                    <p class="feature-desc">
                        Messages are encrypted and stored securely. Your privacy is our top priority.
                    </p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="ph-duotone ph-paper-plane-tilt feature-icon"></i>
                    <h3 class="feature-title">Easy Sharing</h3>
                    <p class="feature-desc">
                        Get your unique link instantly and share it on Instagram, Snapchat, or WhatsApp with one click.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="container py-5 my-5">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center">
                <h2 class="section-title fw-bold display-5">How It Works</h2>
                <p class="text-muted">Simple steps to get started in seconds.</p>
            </div>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-md-4">
                <div class="step-card p-4">
                    <span class="step-number">01</span>
                    <h4 class="mt-4 fw-bold">Create Account</h4>
                    <p class="text-muted">Register with your username to generate your personal inbox.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card p-4">
                    <span class="step-number">02</span>
                    <h4 class="mt-4 fw-bold">Share Link</h4>
                    <p class="text-muted">Post your Asiri link on your social media stories or bios.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card p-4">
                    <span class="step-number">03</span>
                    <h4 class="mt-4 fw-bold">Read Secrets</h4>
                    <p class="text-muted">Open your inbox and see what people really think about you.</p>
                </div>
            </div>
        </div>
    </section>

    @endsection
   