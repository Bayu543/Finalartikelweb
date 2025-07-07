<?= $this->include('template/public_header'); ?>

<!-- Hero Section - Modern Design -->
<section class="hero-modern">
    <div class="hero-background">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>

    <div class="container">
        <div class="row min-vh-75 align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="badge-icon">📰</span>
                        <span class="badge-text">Portal Berita Digital</span>
                    </div>

                    <h1 class="hero-title">
                        Berita <span class="text-gradient">Terkini</span><br>
                        & <span class="text-gradient">Terpercaya</span>
                    </h1>

                    <p class="hero-description">
                        Dapatkan informasi terbaru dari berbagai kategori berita.
                        Platform digital yang menyajikan konten berkualitas dengan
                        tampilan modern dan user-friendly.
                    </p>

                    <div class="hero-actions">
                        <a href="<?= base_url('artikel'); ?>" class="btn btn-primary-modern">
                            <span>Jelajahi Artikel</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <?php if (!session()->get('logged_in')): ?>
                            <a href="<?= base_url('user/login'); ?>" class="btn btn-outline-modern">
                                <span>Login Admin</span>
                                <i class="bi bi-person-circle"></i>
                            </a>
                        <?php else: ?>
                            <a href="<?= base_url('admin/artikel'); ?>" class="btn btn-outline-modern">
                                <span>Dashboard</span>
                                <i class="bi bi-speedometer2"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="visual-card card-1">
                        <div class="card-header">
                            <div class="card-dots">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="news-item">
                                <div class="news-category">Teknologi</div>
                                <div class="news-title">Inovasi AI Terbaru</div>
                                <div class="news-meta">2 jam yang lalu</div>
                            </div>
                        </div>
                    </div>

                    <div class="visual-card card-2">
                        <div class="card-header">
                            <div class="card-dots">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="news-item">
                                <div class="news-category">Olahraga</div>
                                <div class="news-title">Liga Champions</div>
                                <div class="news-meta">5 jam yang lalu</div>
                            </div>
                        </div>
                    </div>

                    <div class="visual-card card-3">
                        <div class="card-header">
                            <div class="card-dots">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="news-item">
                                <div class="news-category">Ekonomi</div>
                                <div class="news-title">Pasar Saham</div>
                                <div class="news-meta">1 hari yang lalu</div>
                            </div>
                        </div>
                    </div>

                    <div class="floating-elements">
                        <div class="element element-1"></div>
                        <div class="element element-2"></div>
                        <div class="element element-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Artikel Terbaru Section - Modern Design -->
<section class="articles-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header-modern">
            <div class="header-content">
                <div class="header-badge">
                    <span class="pulse-dot"></span>
                    <span>Artikel Terbaru</span>
                </div>
                <h2 class="section-title">
                    Berita <span class="text-gradient">Terkini</span>
                </h2>
                <p class="section-description">
                    Temukan berita terbaru dan terpercaya dari berbagai kategori
                </p>
            </div>
        </div>

        <?php if (!empty($artikel)): ?>
            <!-- Articles Grid -->
            <div class="articles-grid">
                <?php foreach ($artikel as $index => $item): ?>
                    <article class="article-card-modern" data-aos="fade-up" data-aos-delay="<?= $index * 100; ?>">
                        <div class="article-image">
                            <?php if (!empty($item['gambar'])): ?>
                                <img src="<?= base_url('gambar/' . $item['gambar']); ?>"
                                     alt="<?= htmlspecialchars($item['judul']); ?>"
                                     loading="lazy">
                            <?php else: ?>
                                <div class="image-placeholder">
                                    <i class="bi bi-image"></i>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($item['nama_kategori'])): ?>
                                <div class="article-category">
                                    <?= htmlspecialchars($item['nama_kategori']); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="article-content">
                            <h3 class="article-title">
                                <a href="<?= base_url('artikel/' . ($item['slug'] ?? 'artikel-' . $item['id'])); ?>">
                                    <?= htmlspecialchars($item['judul']); ?>
                                </a>
                            </h3>

                            <p class="article-excerpt">
                                <?= htmlspecialchars(substr($item['isi'], 0, 120)); ?>...
                            </p>

                            <div class="article-meta">
                                <div class="meta-info">
                                    <span class="meta-date">
                                        <i class="bi bi-clock"></i>
                                        Baru saja
                                    </span>
                                </div>

                                <a href="<?= base_url('artikel/' . ($item['slug'] ?? 'artikel-' . $item['id'])); ?>"
                                   class="read-more-btn">
                                    <span>Baca</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- View All Button -->
            <div class="view-all-section">
                <a href="<?= base_url('artikel'); ?>" class="btn btn-view-all">
                    <span>Lihat Semua Artikel</span>
                    <i class="bi bi-grid-3x3-gap"></i>
                </a>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="bi bi-file-text"></i>
                </div>
                <h3>Belum Ada Artikel</h3>
                <p>Artikel akan segera hadir. Silakan kembali lagi nanti.</p>
                <?php if (session()->get('logged_in')): ?>
                    <a href="<?= base_url('admin/artikel/add'); ?>" class="btn btn-primary-modern">
                        <span>Tambah Artikel Pertama</span>
                        <i class="bi bi-plus-circle"></i>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Features Section - Modern Design -->
<section class="features-section">
    <div class="container">
        <div class="section-header-modern">
            <div class="header-content">
                <div class="header-badge">
                    <span class="star-icon">⭐</span>
                    <span>Keunggulan</span>
                </div>
                <h2 class="section-title">
                    Mengapa Memilih <span class="text-gradient">Portal Berita</span>?
                </h2>
                <p class="section-description">
                    Platform berita digital terdepan dengan berbagai keunggulan dan fitur modern
                </p>
            </div>
        </div>

        <div class="features-grid">
            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon">
                    <div class="icon-wrapper">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                </div>
                <h3>Berita Terkini</h3>
                <p>Update berita terbaru setiap hari dengan informasi yang akurat dan terpercaya</p>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon">
                    <div class="icon-wrapper">
                        <i class="bi bi-shield-check"></i>
                    </div>
                </div>
                <h3>Terpercaya</h3>
                <p>Sumber berita yang dapat dipercaya dengan verifikasi fakta yang ketat</p>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon">
                    <div class="icon-wrapper">
                        <i class="bi bi-globe"></i>
                    </div>
                </div>
                <h3>Beragam Kategori</h3>
                <p>Teknologi, olahraga, politik, ekonomi, dan berbagai kategori menarik lainnya</p>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                    <div class="icon-wrapper">
                        <i class="bi bi-phone"></i>
                    </div>
                </div>
                <h3>Mobile Friendly</h3>
                <p>Akses mudah dari perangkat apapun dengan tampilan yang responsif</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-card">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-content">
                        <h2>Tetap Update dengan Berita Terbaru</h2>
                        <p>Dapatkan notifikasi berita terkini langsung ke email Anda. Jangan sampai ketinggalan informasi penting!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter-form">
                        <form class="subscription-form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Masukkan email Anda" required>
                                <button type="submit" class="btn btn-subscribe">
                                    <span>Berlangganan</span>
                                    <i class="bi bi-send"></i>
                                </button>
                            </div>
                            <small class="form-text">Kami menghargai privasi Anda. Email tidak akan dibagikan.</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern CSS Styles -->
<style>
/* CSS Variables for consistent theming */
:root {
    --primary-color: #2563eb;
    --primary-dark: #1d4ed8;
    --secondary-color: #64748b;
    --accent-color: #f59e0b;
    --success-color: #10b981;
    --text-dark: #1e293b;
    --text-light: #64748b;
    --bg-light: #f8fafc;
    --bg-white: #ffffff;
    --border-color: #e2e8f0;
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
    --radius-sm: 0.375rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
    --radius-xl: 1rem;
}

/* Global Styles */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: var(--text-dark);
}

.min-vh-75 {
    min-height: 75vh;
}

.text-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Hero Section */
.hero-modern {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    opacity: 0.9;
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
        radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(255,255,255,0.1) 0%, transparent 50%);
    background-size: 100px 100px;
    animation: patternMove 20s linear infinite;
}

@keyframes patternMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(100px, 100px); }
}

.hero-content {
    color: white;
    z-index: 2;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-xl);
    border: 1px solid rgba(255, 255, 255, 0.2);
    margin-bottom: 1.5rem;
    font-size: 0.875rem;
    font-weight: 500;
}

.badge-icon {
    font-size: 1.2rem;
}

.hero-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 1.5rem;
}

.hero-description {
    font-size: 1.125rem;
    line-height: 1.7;
    margin-bottom: 2rem;
    opacity: 0.9;
    max-width: 500px;
}

.hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

/* Modern Buttons */
.btn-primary-modern {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--bg-white);
    color: var(--primary-color);
    padding: 0.875rem 1.5rem;
    border-radius: var(--radius-lg);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    box-shadow: var(--shadow-lg);
}

.btn-primary-modern:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-xl);
    color: var(--primary-dark);
}

.btn-outline-modern {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: transparent;
    color: white;
    padding: 0.875rem 1.5rem;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: var(--radius-lg);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.btn-outline-modern:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
    color: white;
    transform: translateY(-2px);
}

/* Hero Visual */
.hero-visual {
    position: relative;
    height: 500px;
}

.visual-card {
    position: absolute;
    background: var(--bg-white);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-lg);
    padding: 1rem;
    min-width: 200px;
    animation: float 6s ease-in-out infinite;
}

.card-1 {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.card-2 {
    top: 50%;
    right: 20%;
    animation-delay: 2s;
}

.card-3 {
    bottom: 20%;
    left: 30%;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.75rem;
}

.card-dots {
    display: flex;
    gap: 0.25rem;
}

.card-dots span {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--border-color);
}

.card-dots span:first-child { background: #ef4444; }
.card-dots span:nth-child(2) { background: #f59e0b; }
.card-dots span:nth-child(3) { background: var(--success-color); }

.news-category {
    font-size: 0.75rem;
    color: var(--primary-color);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.news-title {
    font-weight: 600;
    color: var(--text-dark);
    margin: 0.25rem 0;
}

.news-meta {
    font-size: 0.75rem;
    color: var(--text-light);
}

.floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.element {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    animation: float 8s ease-in-out infinite;
}

.element-1 {
    width: 60px;
    height: 60px;
    top: 10%;
    right: 10%;
    animation-delay: 1s;
}

.element-2 {
    width: 40px;
    height: 40px;
    bottom: 30%;
    right: 30%;
    animation-delay: 3s;
}

.element-3 {
    width: 80px;
    height: 80px;
    top: 60%;
    left: 5%;
    animation-delay: 5s;
}

/* Section Headers */
.section-header-modern {
    text-align: center;
    margin-bottom: 4rem;
}

.header-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--bg-light);
    color: var(--text-dark);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-xl);
    border: 1px solid var(--border-color);
    margin-bottom: 1rem;
    font-size: 0.875rem;
    font-weight: 500;
}

.pulse-dot {
    width: 8px;
    height: 8px;
    background: var(--success-color);
    border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.2); }
}

.section-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.section-description {
    font-size: 1.125rem;
    color: var(--text-light);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
/* Articles Section */
.articles-section {
    padding: 5rem 0;
    background: var(--bg-light);
}

.articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.article-card-modern {
    background: var(--bg-white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
}

.article-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.article-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.article-card-modern:hover .article-image img {
    transform: scale(1.05);
}

.image-placeholder {
    width: 100%;
    height: 100%;
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-light);
    font-size: 2rem;
}

.article-category {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: var(--primary-color);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.article-content {
    padding: 1.5rem;
}

.article-title {
    margin-bottom: 0.75rem;
}

.article-title a {
    color: var(--text-dark);
    text-decoration: none;
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.article-title a:hover {
    color: var(--primary-color);
}

.article-excerpt {
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.article-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.meta-date {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    color: var(--text-light);
    font-size: 0.875rem;
}

.read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.875rem;
    transition: all 0.3s ease;
}

.read-more-btn:hover {
    color: var(--primary-dark);
    transform: translateX(4px);
}

.view-all-section {
    text-align: center;
}

.btn-view-all {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--primary-color);
    color: white;
    padding: 1rem 2rem;
    border-radius: var(--radius-lg);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: var(--shadow-md);
}

.btn-view-all:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
    color: white;
}

.empty-state {
    text-align: center;
    padding: 4rem 2rem;
}

.empty-icon {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 1rem;
}

.empty-state h3 {
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.empty-state p {
    color: var(--text-light);
    margin-bottom: 2rem;
}

/* Features Section */
.features-section {
    padding: 5rem 0;
    background: var(--bg-white);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.feature-card {
    text-align: center;
    padding: 2rem 1rem;
    border-radius: var(--radius-xl);
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.feature-card:hover::before {
    opacity: 0.05;
}

.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
    border-color: var(--primary-color);
}

.feature-icon {
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 2;
}

.icon-wrapper {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    border-radius: 50%;
    color: white;
    font-size: 2rem;
    transition: all 0.3s ease;
}

.feature-card:hover .icon-wrapper {
    transform: scale(1.1) rotate(5deg);
}

.feature-card h3 {
    color: var(--text-dark);
    font-weight: 700;
    margin-bottom: 0.75rem;
    position: relative;
    z-index: 2;
}

.feature-card p {
    color: var(--text-light);
    line-height: 1.6;
    position: relative;
    z-index: 2;
}

/* Newsletter Section */
.newsletter-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
}

.newsletter-card {
    background: var(--bg-white);
    border-radius: var(--radius-xl);
    padding: 3rem;
    box-shadow: var(--shadow-xl);
    border: 1px solid var(--border-color);
}

.newsletter-content h2 {
    color: var(--text-dark);
    font-weight: 800;
    margin-bottom: 1rem;
    font-size: clamp(1.5rem, 3vw, 2.5rem);
}

.newsletter-content p {
    color: var(--text-light);
    font-size: 1.125rem;
    line-height: 1.6;
}

.subscription-form {
    max-width: 400px;
    margin-left: auto;
}

.input-group {
    display: flex;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-color);
}

.input-group .form-control {
    border: none;
    padding: 1rem 1.5rem;
    font-size: 1rem;
    flex: 1;
    outline: none;
}

.input-group .form-control:focus {
    box-shadow: none;
}

.btn-subscribe {
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 1rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-subscribe:hover {
    background: var(--primary-dark);
    color: white;
}

.form-text {
    color: var(--text-light);
    margin-top: 0.5rem;
    font-size: 0.875rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-actions {
        flex-direction: column;
        align-items: stretch;
    }

    .btn-primary-modern,
    .btn-outline-modern {
        justify-content: center;
    }

    .articles-grid {
        grid-template-columns: 1fr;
    }

    .features-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }

    .newsletter-card {
        padding: 2rem 1rem;
    }

    .subscription-form {
        margin-left: 0;
        margin-top: 2rem;
    }

    .input-group {
        flex-direction: column;
    }

    .btn-subscribe {
        justify-content: center;
    }
}
</style>

<!-- Modern JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth page load
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';

    window.addEventListener('load', function() {
        document.body.style.opacity = '1';
    });

    // Newsletter form handling
    const subscriptionForm = document.querySelector('.subscription-form');
    if (subscriptionForm) {
        subscriptionForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;

            if (email) {
                // Simulate subscription
                const button = this.querySelector('.btn-subscribe');
                const originalText = button.innerHTML;

                button.innerHTML = '<span>Berhasil!</span> <i class="bi bi-check-circle"></i>';
                button.style.background = 'var(--success-color)';

                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.style.background = 'var(--primary-color)';
                    this.reset();
                }, 2000);
            }
        });
    }

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

    // Simple parallax effect for hero
    let ticking = false;

    function updateParallax() {
        const scrolled = window.pageYOffset;
        const heroPattern = document.querySelector('.hero-pattern');

        if (heroPattern) {
            const rate = scrolled * 0.5;
            heroPattern.style.transform = `translateY(${rate}px)`;
        }

        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });
});
</script>

<?= $this->include('template/public_footer'); ?>
