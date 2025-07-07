<?= $this->include('template/public_header'); ?>

<!-- Modern Hero Section -->
<section class="modern-hero position-relative overflow-hidden">
    <div class="hero-gradient"></div>
    <div class="geometric-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="badge-modern mb-4">
                        <i class="bi bi-building me-2"></i>
                        Tentang Perusahaan
                    </div>
                    <h1 class="hero-title mb-4">
                        Membangun Masa Depan
                        <span class="text-gradient">Digital Indonesia</span>
                    </h1>
                    <p class="hero-subtitle mb-5">
                        Kami adalah platform berita digital yang berkomitmen menyajikan informasi berkualitas tinggi,
                        akurat, dan terpercaya untuk memajukan literasi digital masyarakat Indonesia.
                    </p>
                    <div class="hero-actions">
                        <a href="#story" class="btn btn-modern-primary me-3">
                            <i class="bi bi-play-circle me-2"></i>
                            Cerita Kami
                        </a>
                        <a href="<?= base_url('contact'); ?>" class="btn btn-modern-outline">
                            <i class="bi bi-envelope me-2"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="visual-card">
                        <div class="card-content">
                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-number">1M+</div>
                                    <div class="stat-label">Pembaca Aktif</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Artikel Berkualitas</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">24/7</div>
                                    <div class="stat-label">Update Berita</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">5+</div>
                                    <div class="stat-label">Kategori Berita</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Section -->
<section id="story" class="story-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="story-content">
                    <div class="section-badge mb-4">
                        <i class="bi bi-book me-2"></i>
                        Cerita Kami
                    </div>
                    <h2 class="section-title mb-4">
                        Perjalanan Menuju
                        <span class="text-gradient">Keunggulan Digital</span>
                    </h2>
                    <p class="section-description mb-4">
                        Dimulai dari visi sederhana untuk menyediakan informasi berkualitas,
                        kami telah berkembang menjadi platform berita digital terpercaya yang
                        melayani jutaan pembaca di seluruh Indonesia.
                    </p>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5>2020 - Awal Perjalanan</h5>
                            <p>Memulai sebagai blog sederhana dengan komitmen menyajikan berita berkualitas.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5>2022 - Ekspansi Platform</h5>
                            <p>Mengembangkan platform digital dengan fitur-fitur modern dan user-friendly.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5>2024 - Masa Depan</h5>
                            <p>Terus berinovasi untuk memberikan pengalaman terbaik bagi pembaca.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-mission-cards">
                    <div class="vm-card vision-card">
                        <div class="vm-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h4>Visi Kami</h4>
                        <p>Menjadi portal berita digital terdepan yang menyajikan informasi berkualitas tinggi dan dapat dipercaya oleh seluruh masyarakat Indonesia.</p>
                    </div>
                    <div class="vm-card mission-card">
                        <div class="vm-icon">
                            <i class="bi bi-target"></i>
                        </div>
                        <h4>Misi Kami</h4>
                        <ul class="mission-list">
                            <li><i class="bi bi-check2"></i> Menyajikan berita akurat dan berimbang</li>
                            <li><i class="bi bi-check2"></i> Memberikan informasi terkini berkualitas</li>
                            <li><i class="bi bi-check2"></i> Mendukung literasi digital Indonesia</li>
                            <li><i class="bi bi-check2"></i> Menghubungkan berbagai kalangan masyarakat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="categories-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <i class="bi bi-grid me-2"></i>
                Kategori Berita
            </div>
            <h2 class="section-title">
                Beragam <span class="text-gradient">Kategori Informasi</span>
            </h2>
            <p class="section-description">
                Kami menyajikan berita dari berbagai bidang untuk memenuhi kebutuhan informasi Anda
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h5>Teknologi</h5>
                    <p>Perkembangan terbaru dunia teknologi dan inovasi digital</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <h5>Olahraga</h5>
                    <p>Berita terkini dari dunia olahraga nasional dan internasional</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-bank"></i>
                    </div>
                    <h5>Politik</h5>
                    <p>Informasi politik terkini yang akurat dan berimbang</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <h5>Ekonomi</h5>
                    <p>Analisis ekonomi dan bisnis untuk kemajuan Indonesia</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-music-note"></i>
                    </div>
                    <h5>Hiburan</h5>
                    <p>Kabar terbaru dari dunia hiburan dan selebriti</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-plus-circle"></i>
                    </div>
                    <h5>Lainnya</h5>
                    <p>Berbagai topik menarik lainnya yang relevan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <i class="bi bi-heart me-2"></i>
                Nilai-Nilai Kami
            </div>
            <h2 class="section-title">
                Komitmen <span class="text-gradient">Terhadap Kualitas</span>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4>Terpercaya</h4>
                    <p>Setiap informasi yang kami sajikan telah melalui proses verifikasi yang ketat untuk memastikan akurasi dan kredibilitas.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <h4>Terkini</h4>
                    <p>Kami berkomitmen memberikan update berita terbaru setiap hari dengan kecepatan dan ketepatan informasi.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h4>Untuk Semua</h4>
                    <p>Platform kami dapat diakses secara gratis oleh semua kalangan masyarakat Indonesia tanpa terkecuali.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5 bg-gradient">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="text-white mb-3">Siap Bergabung dengan Jutaan Pembaca Lainnya?</h3>
                <p class="text-white-50 mb-0">Dapatkan informasi terkini dan berkualitas langsung di genggaman Anda</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="<?= base_url('artikel'); ?>" class="btn btn-light btn-lg me-3">
                    <i class="bi bi-newspaper me-2"></i>Baca Artikel
                </a>
                <a href="<?= base_url('contact'); ?>" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-envelope me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modern CSS Styles -->
<style>
:root {
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
    --accent-color: #3b82f6;
    --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --text-dark: #1f2937;
    --text-light: #6b7280;
    --bg-light: #f8fafc;
    --border-radius: 16px;
    --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Modern Hero Section */
.modern-hero {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    display: flex;
    align-items: center;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
}

.geometric-shapes {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    animation: float 6s ease-in-out infinite;
}

.shape-1 {
    width: 200px;
    height: 200px;
    top: 10%;
    left: 10%;
    animation-delay: 0s;
}

.shape-2 {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 10%;
    animation-delay: 2s;
}

.shape-3 {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 60%;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

.min-vh-75 {
    min-height: 75vh;
}

.badge-modern {
    display: inline-flex;
    align-items: center;
    padding: 8px 16px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 500;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1.1;
    color: white;
    margin-bottom: 1.5rem;
}

.text-gradient {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    max-width: 500px;
}

.btn-modern-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border: none;
    color: white;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
}

.btn-modern-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.6);
    color: white;
}

.btn-modern-outline {
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 10px 24px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
    backdrop-filter: blur(10px);
}

.btn-modern-outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
    transform: translateY(-2px);
    color: white;
}

/* Hero Visual */
.hero-visual {
    position: relative;
}

.visual-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border-radius: var(--border-radius);
    padding: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: var(--shadow-lg);
}

.stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.stat-item {
    text-align: center;
    color: white;
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    color: #fbbf24;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.875rem;
    opacity: 0.9;
}

/* Section Styles */
.section-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 16px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 1rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 1rem;
    line-height: 1.2;
}

.section-description {
    font-size: 1.125rem;
    color: var(--text-light);
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
}

/* Story Section */
.story-section {
    background: var(--bg-light);
}

.timeline-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
    position: relative;
}

.timeline-marker {
    width: 16px;
    height: 16px;
    background: var(--primary-color);
    border-radius: 50%;
    margin-right: 1rem;
    margin-top: 4px;
    position: relative;
    z-index: 2;
}

.timeline-marker::before {
    content: '';
    position: absolute;
    top: 16px;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 60px;
    background: linear-gradient(to bottom, var(--primary-color), transparent);
}

.timeline-item:last-child .timeline-marker::before {
    display: none;
}

.timeline-content h5 {
    color: var(--text-dark);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.timeline-content p {
    color: var(--text-light);
    margin: 0;
}

/* Vision Mission Cards */
.vision-mission-cards {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.vm-card {
    background: white;
    padding: 2rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    border-left: 4px solid var(--primary-color);
}

.vm-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.vm-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.vm-icon i {
    font-size: 1.5rem;
    color: white;
}

.vm-card h4 {
    color: var(--text-dark);
    font-weight: 700;
    margin-bottom: 1rem;
}

.vm-card p {
    color: var(--text-light);
    line-height: 1.6;
    margin: 0;
}

.mission-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mission-list li {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
    color: var(--text-light);
}

.mission-list li i {
    color: var(--primary-color);
    margin-right: 0.75rem;
    font-size: 1.1rem;
}

/* Categories Section */
.categories-section {
    background: var(--bg-light);
}

.category-card {
    background: white;
    padding: 2rem;
    border-radius: var(--border-radius);
    text-align: center;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
    height: 100%;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.category-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-color);
}

.category-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    transition: var(--transition);
}

.category-card:hover .category-icon {
    transform: scale(1.1) rotate(5deg);
}

.category-icon i {
    font-size: 2rem;
    color: white;
}

.category-card h5 {
    color: var(--text-dark);
    font-weight: 700;
    margin-bottom: 1rem;
}

.category-card p {
    color: var(--text-light);
    line-height: 1.6;
    margin: 0;
}

/* Values Section */
.value-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: var(--border-radius);
    text-align: center;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
    height: 100%;
    position: relative;
    overflow: hidden;
}

.value-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
}

.value-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
}

.value-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    transition: var(--transition);
}

.value-card:hover .value-icon {
    transform: scale(1.1);
}

.value-icon i {
    font-size: 2rem;
    color: white;
}

.value-card h4 {
    color: var(--text-dark);
    font-weight: 700;
    margin-bottom: 1rem;
}

.value-card p {
    color: var(--text-light);
    line-height: 1.6;
    margin: 0;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
}

.bg-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.125rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .stats-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .vision-mission-cards {
        gap: 1.5rem;
    }

    .shape {
        display: none;
    }

    .hero-actions {
        flex-direction: column;
        gap: 1rem;
    }

    .hero-actions .btn-modern-primary,
    .hero-actions .btn-modern-outline {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }

    .section-title {
        font-size: 1.75rem;
    }

    .vm-card,
    .category-card,
    .value-card {
        padding: 1.5rem;
    }
}
</style>

<!-- Modern JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth page loading
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.6s ease';

    window.addEventListener('load', function() {
        document.body.style.opacity = '1';
    });

    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Add scroll animations to cards
    document.querySelectorAll('.vm-card, .category-card, .value-card, .timeline-item').forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        el.style.transitionDelay = (index * 0.1) + 's';
        observer.observe(el);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Parallax effect for hero
    let ticking = false;

    function updateParallax() {
        const scrolled = window.pageYOffset;
        const heroSection = document.querySelector('.modern-hero');
        const shapes = document.querySelectorAll('.shape');

        if (heroSection) {
            const rate = scrolled * 0.5;
            heroSection.style.transform = `translateY(${rate}px)`;
        }

        shapes.forEach((shape, index) => {
            const rate = scrolled * (0.2 + index * 0.1);
            shape.style.transform = `translateY(${rate}px) rotate(${rate * 0.1}deg)`;
        });

        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);

    // Counter animation for stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');

        counters.forEach(counter => {
            const target = counter.textContent;
            const numericValue = parseInt(target.replace(/\D/g, ''));
            const suffix = target.replace(/\d/g, '');

            if (numericValue) {
                let current = 0;
                const increment = numericValue / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= numericValue) {
                        counter.textContent = numericValue + suffix;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current) + suffix;
                    }
                }, 30);
            }
        });
    }

    // Trigger counter animation when hero is visible
    const heroObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                heroObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const heroStats = document.querySelector('.stats-grid');
    if (heroStats) {
        heroObserver.observe(heroStats);
    }

    // Add hover effects to buttons
    document.querySelectorAll('.btn-modern-primary, .btn-modern-outline').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px) scale(1.05)';
        });

        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});
</script>

<?= $this->include('template/public_footer'); ?>
