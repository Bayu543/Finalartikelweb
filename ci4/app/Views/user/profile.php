<?= $this->include('template/admin_header'); ?>

<!-- Modern Profile Header -->
<div class="profile-hero">
    <div class="hero-gradient"></div>
    <div class="hero-pattern"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="profile-avatar-wrapper">
                    <div class="profile-avatar-modern">
                        <div class="avatar-ring"></div>
                        <div class="avatar-content">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="status-indicator">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                    </div>
                </div>
                <h1 class="profile-name"><?= htmlspecialchars($user['username']); ?></h1>
                <p class="profile-role">
                    <i class="bi bi-shield-check me-2"></i>
                    Administrator Portal Berita
                </p>
                <div class="profile-badges">
                    <span class="modern-badge badge-active">
                        <i class="bi bi-circle-fill me-1"></i>
                        Online
                    </span>
                    <span class="modern-badge badge-verified">
                        <i class="bi bi-patch-check-fill me-1"></i>
                        Verified
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Profile Content -->
<div class="profile-content">
    <div class="container">
        <div class="row">
            <!-- Profile Information Card -->
            <div class="col-lg-8">
                <div class="modern-card profile-info-card">
                    <div class="card-header-modern">
                        <div class="header-icon">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <div class="header-content">
                            <h3>Informasi Profile</h3>
                            <p>Detail informasi akun administrator</p>
                        </div>
                        <div class="header-action">
                            <button class="btn-modern-icon" onclick="editProfile()">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body-modern">
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="bi bi-hash"></i>
                                </div>
                                <div class="info-content">
                                    <label>User ID</label>
                                    <span><?= htmlspecialchars($user['user_id']); ?></span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="info-content">
                                    <label>Username</label>
                                    <span><?= htmlspecialchars($user['username']); ?></span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <label>Email Address</label>
                                    <span><?= htmlspecialchars($user['email']); ?></span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="info-content">
                                    <label>Role & Permissions</label>
                                    <span class="role-badge">
                                        <i class="bi bi-star-fill me-1"></i>
                                        Super Administrator
                                    </span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="info-content">
                                    <label>Last Login</label>
                                    <span><?= date('d M Y, H:i'); ?> WIB</span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div class="info-content">
                                    <label>Account Status</label>
                                    <span class="status-active">
                                        <i class="bi bi-check-circle-fill me-1"></i>
                                        Active & Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Card -->
                <div class="modern-card actions-card">
                    <div class="card-header-modern">
                        <div class="header-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <div class="header-content">
                            <h3>Quick Actions</h3>
                            <p>Akses cepat ke fitur-fitur utama</p>
                        </div>
                    </div>
                    <div class="card-body-modern">
                        <div class="actions-grid">
                            <a href="<?= base_url('admin/artikel'); ?>" class="action-item dashboard">
                                <div class="action-icon">
                                    <i class="bi bi-speedometer2"></i>
                                </div>
                                <div class="action-content">
                                    <h4>Dashboard</h4>
                                    <p>Kelola artikel dan konten</p>
                                </div>
                                <div class="action-arrow">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </a>
                            <a href="<?= base_url('admin/artikel/add'); ?>" class="action-item create">
                                <div class="action-icon">
                                    <i class="bi bi-plus-circle"></i>
                                </div>
                                <div class="action-content">
                                    <h4>Tambah Artikel</h4>
                                    <p>Buat artikel baru</p>
                                </div>
                                <div class="action-arrow">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </a>
                            <a href="<?= base_url('artikel'); ?>" class="action-item view">
                                <div class="action-icon">
                                    <i class="bi bi-file-text"></i>
                                </div>
                                <div class="action-content">
                                    <h4>Lihat Artikel</h4>
                                    <p>Browse semua artikel</p>
                                </div>
                                <div class="action-arrow">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </a>
                            <a href="<?= base_url('user/logout'); ?>" class="action-item logout">
                                <div class="action-icon">
                                    <i class="bi bi-box-arrow-right"></i>
                                </div>
                                <div class="action-content">
                                    <h4>Logout</h4>
                                    <p>Keluar dari sistem</p>
                                </div>
                                <div class="action-arrow">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Statistics Card -->
                <div class="modern-card stats-card">
                    <div class="card-header-modern">
                        <div class="header-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div class="header-content">
                            <h3>Statistik</h3>
                            <p>Ringkasan aktivitas</p>
                        </div>
                    </div>
                    <div class="card-body-modern">
                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-icon articles">
                                    <i class="bi bi-file-text"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">24</div>
                                    <div class="stat-label">Total Artikel</div>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon views">
                                    <i class="bi bi-eye"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">1.2K</div>
                                    <div class="stat-label">Total Views</div>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon published">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">18</div>
                                    <div class="stat-label">Published</div>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon draft">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">6</div>
                                    <div class="stat-label">Draft</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Session Info Card -->
                <div class="modern-card session-card">
                    <div class="card-header-modern">
                        <div class="header-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div class="header-content">
                            <h3>Session Info</h3>
                            <p>Informasi keamanan</p>
                        </div>
                    </div>
                    <div class="card-body-modern">
                        <div class="session-info">
                            <div class="session-item">
                                <div class="session-label">
                                    <i class="bi bi-key me-2"></i>
                                    Session ID
                                </div>
                                <div class="session-value">
                                    <code><?= substr(session_id(), 0, 16); ?>...</code>
                                </div>
                            </div>
                            <div class="session-item">
                                <div class="session-label">
                                    <i class="bi bi-clock me-2"></i>
                                    Login Time
                                </div>
                                <div class="session-value">
                                    <?= date('H:i:s'); ?> WIB
                                </div>
                            </div>
                            <div class="session-item">
                                <div class="session-label">
                                    <i class="bi bi-shield-check me-2"></i>
                                    Security Status
                                </div>
                                <div class="session-value">
                                    <span class="security-badge secure">
                                        <i class="bi bi-check-circle-fill me-1"></i>
                                        Secure
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Card -->
                <div class="modern-card activity-card">
                    <div class="card-header-modern">
                        <div class="header-icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div class="header-content">
                            <h3>Recent Activity</h3>
                            <p>Aktivitas terbaru</p>
                        </div>
                    </div>
                    <div class="card-body-modern">
                        <div class="activity-list">
                            <div class="activity-item">
                                <div class="activity-icon login">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Login to system</div>
                                    <div class="activity-time"><?= date('H:i'); ?> - Today</div>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon view">
                                    <i class="bi bi-eye"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Viewed profile page</div>
                                    <div class="activity-time"><?= date('H:i', strtotime('-5 minutes')); ?> - Today</div>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon dashboard">
                                    <i class="bi bi-speedometer2"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Accessed dashboard</div>
                                    <div class="activity-time"><?= date('H:i', strtotime('-15 minutes')); ?> - Today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modern Profile CSS -->
<style>
:root {
    --primary-color: #2563eb;
    --secondary-color: #64748b;
    --success-color: #10b981;
    --danger-color: #ef4444;
    --warning-color: #f59e0b;
    --info-color: #06b6d4;
    --light-color: #f8fafc;
    --dark-color: #1e293b;
    --border-color: #e2e8f0;
    --text-primary: #1e293b;
    --text-secondary: #64748b;
    --text-muted: #94a3b8;
    --border-radius: 12px;
    --border-radius-lg: 16px;
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Profile Hero Section */
.profile-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 4rem 0 2rem;
    position: relative;
    overflow: hidden;
    margin: -1.5rem -1.5rem 0 -1.5rem;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                      radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

/* Profile Avatar */
.profile-avatar-wrapper {
    position: relative;
    z-index: 2;
    margin-bottom: 2rem;
}

.profile-avatar-modern {
    position: relative;
    width: 150px;
    height: 150px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.avatar-ring {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
}

.avatar-content {
    width: 120px;
    height: 120px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    position: relative;
    z-index: 2;
}

.avatar-content i {
    font-size: 4rem;
    color: white;
}

.status-indicator {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 32px;
    height: 32px;
    background: var(--success-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid white;
    z-index: 3;
}

.status-indicator i {
    color: white;
    font-size: 1rem;
}

@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.05); opacity: 0.8; }
    100% { transform: scale(1); opacity: 1; }
}

/* Profile Info */
.profile-name {
    font-size: 2.5rem;
    font-weight: 800;
    color: white;
    margin-bottom: 0.5rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.profile-role {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.profile-badges {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.modern-badge {
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.badge-active {
    background: rgba(16, 185, 129, 0.2);
    color: #10b981;
}

.badge-verified {
    background: rgba(59, 130, 246, 0.2);
    color: #3b82f6;
}

/* Profile Content */
.profile-content {
    padding: 3rem 0;
    background: var(--light-color);
}

/* Modern Cards */
.modern-card {
    background: white;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-color);
    margin-bottom: 2rem;
    overflow: hidden;
    transition: var(--transition);
}

.modern-card:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-2px);
}

.card-header-modern {
    padding: 1.5rem 2rem;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    border-bottom: 1px solid var(--border-color);
    display: flex;
    align-items: center;
    gap: 1rem;
}

.header-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, var(--primary-color), #1d4ed8);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
}

.header-content {
    flex: 1;
}

.header-content h3 {
    margin: 0 0 0.25rem 0;
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-primary);
}

.header-content p {
    margin: 0;
    color: var(--text-secondary);
    font-size: 0.875rem;
}

.header-action {
    margin-left: auto;
}

.btn-modern-icon {
    width: 40px;
    height: 40px;
    border: none;
    background: rgba(37, 99, 235, 0.1);
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition);
}

.btn-modern-icon:hover {
    background: var(--primary-color);
    color: white;
    transform: scale(1.1);
}

.card-body-modern {
    padding: 2rem;
}

/* Info Grid */
.info-grid {
    display: grid;
    gap: 1.5rem;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: var(--light-color);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.info-item:hover {
    background: #f1f5f9;
    transform: translateX(5px);
}

.info-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--primary-color), #1d4ed8);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
    flex-shrink: 0;
}

.info-content {
    flex: 1;
}

.info-content label {
    display: block;
    font-size: 0.875rem;
    color: var(--text-secondary);
    margin-bottom: 0.25rem;
    font-weight: 500;
}

.info-content span {
    font-size: 1rem;
    color: var(--text-primary);
    font-weight: 600;
}

.role-badge {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
}

.status-active {
    color: var(--success-color);
    font-weight: 600;
    display: inline-flex;
    align-items: center;
}

/* Actions Grid */
.actions-grid {
    display: grid;
    gap: 1rem;
}

.action-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: var(--light-color);
    border-radius: var(--border-radius);
    text-decoration: none;
    color: var(--text-primary);
    transition: var(--transition);
    border: 1px solid var(--border-color);
}

.action-item:hover {
    background: white;
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
    color: var(--text-primary);
}

.action-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.action-item.dashboard .action-icon {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.action-item.create .action-icon {
    background: linear-gradient(135deg, #10b981, #059669);
}

.action-item.view .action-icon {
    background: linear-gradient(135deg, #06b6d4, #0891b2);
}

.action-item.logout .action-icon {
    background: linear-gradient(135deg, #ef4444, #dc2626);
}

.action-content {
    flex: 1;
}

.action-content h4 {
    margin: 0 0 0.25rem 0;
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--text-primary);
}

.action-content p {
    margin: 0;
    color: var(--text-secondary);
    font-size: 0.875rem;
}

.action-arrow {
    color: var(--text-muted);
    font-size: 1.25rem;
    transition: var(--transition);
}

.action-item:hover .action-arrow {
    color: var(--primary-color);
    transform: translateX(5px);
}

/* Statistics Grid */
.stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: var(--light-color);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.stat-item:hover {
    background: white;
    box-shadow: var(--shadow-sm);
    transform: translateY(-2px);
}

.stat-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
    flex-shrink: 0;
}

.stat-icon.articles {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.stat-icon.views {
    background: linear-gradient(135deg, #10b981, #059669);
}

.stat-icon.published {
    background: linear-gradient(135deg, #06b6d4, #0891b2);
}

.stat-icon.draft {
    background: linear-gradient(135deg, #f59e0b, #d97706);
}

.stat-content {
    flex: 1;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text-primary);
    line-height: 1;
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.75rem;
    color: var(--text-secondary);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Session Info */
.session-info {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.session-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background: var(--light-color);
    border-radius: var(--border-radius);
}

.session-label {
    font-size: 0.875rem;
    color: var(--text-secondary);
    font-weight: 500;
    display: flex;
    align-items: center;
}

.session-value {
    font-size: 0.875rem;
    color: var(--text-primary);
    font-weight: 600;
}

.session-value code {
    background: #f1f5f9;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.75rem;
    color: var(--primary-color);
}

.security-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
}

.security-badge.secure {
    background: rgba(16, 185, 129, 0.1);
    color: var(--success-color);
}

/* Activity List */
.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: var(--light-color);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.activity-item:hover {
    background: white;
    box-shadow: var(--shadow-sm);
}

.activity-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.875rem;
    flex-shrink: 0;
}

.activity-icon.login {
    background: linear-gradient(135deg, #10b981, #059669);
}

.activity-icon.view {
    background: linear-gradient(135deg, #06b6d4, #0891b2);
}

.activity-icon.dashboard {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.activity-content {
    flex: 1;
}

.activity-title {
    font-size: 0.875rem;
    color: var(--text-primary);
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.activity-time {
    font-size: 0.75rem;
    color: var(--text-muted);
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile-hero {
        padding: 2rem 0 1rem;
        margin: -1rem -1rem 0 -1rem;
    }

    .profile-name {
        font-size: 2rem;
    }

    .profile-role {
        font-size: 1rem;
    }

    .profile-badges {
        flex-direction: column;
        align-items: center;
    }

    .card-header-modern {
        padding: 1rem 1.5rem;
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }

    .header-action {
        margin-left: 0;
    }

    .card-body-modern {
        padding: 1.5rem;
    }

    .stats-grid {
        grid-template-columns: 1fr;
    }

    .action-item {
        padding: 1rem;
    }

    .info-item {
        flex-direction: column;
        text-align: center;
        gap: 0.75rem;
    }

    .activity-item {
        padding: 0.75rem;
    }
}

@media (max-width: 576px) {
    .profile-content {
        padding: 2rem 0;
    }

    .modern-card {
        margin-bottom: 1.5rem;
    }

    .profile-avatar-modern {
        width: 120px;
        height: 120px;
    }

    .avatar-content {
        width: 100px;
        height: 100px;
    }

    .avatar-content i {
        font-size: 3rem;
    }
}
</style>

<!-- Modern JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize profile animations
    initializeAnimations();

    // Initialize interactive features
    initializeInteractivity();

    // Initialize real-time updates
    initializeRealTimeUpdates();
});

function initializeAnimations() {
    // Animate cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
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
    document.querySelectorAll('.modern-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        card.style.transitionDelay = (index * 0.1) + 's';
        observer.observe(card);
    });

    // Animate stats numbers
    animateNumbers();
}

function initializeInteractivity() {
    // Add hover effects to action items
    document.querySelectorAll('.action-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-4px)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(-2px)';
        });
    });

    // Add click effects to buttons
    document.querySelectorAll('.btn-modern-icon').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();

            // Create ripple effect
            const ripple = document.createElement('div');
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 255, 255, 0.6)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.left = '50%';
            ripple.style.top = '50%';
            ripple.style.width = '20px';
            ripple.style.height = '20px';
            ripple.style.marginLeft = '-10px';
            ripple.style.marginTop = '-10px';

            this.style.position = 'relative';
            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
}

function initializeRealTimeUpdates() {
    // Update time every minute
    setInterval(updateTime, 60000);

    // Update session info
    updateSessionInfo();
}

function animateNumbers() {
    const numbers = document.querySelectorAll('.stat-number');

    numbers.forEach(number => {
        const target = parseInt(number.textContent.replace(/[^\d]/g, ''));
        const suffix = number.textContent.replace(/[\d]/g, '');

        if (target) {
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    number.textContent = target + suffix;
                    clearInterval(timer);
                } else {
                    number.textContent = Math.floor(current) + suffix;
                }
            }, 30);
        }
    });
}

function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('id-ID', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    });

    const timeElements = document.querySelectorAll('.session-value');
    timeElements.forEach(element => {
        if (element.textContent.includes('WIB')) {
            element.textContent = timeString + ' WIB';
        }
    });
}

function updateSessionInfo() {
    // Simulate session activity
    const activities = [
        { icon: 'bi-box-arrow-in-right', title: 'Login to system', type: 'login' },
        { icon: 'bi-eye', title: 'Viewed profile page', type: 'view' },
        { icon: 'bi-speedometer2', title: 'Accessed dashboard', type: 'dashboard' },
        { icon: 'bi-file-text', title: 'Viewed articles', type: 'view' },
        { icon: 'bi-plus-circle', title: 'Created new article', type: 'create' }
    ];

    // This would typically come from a real API
    // For demo purposes, we'll just update the display
}

function editProfile() {
    // Show edit profile modal or redirect to edit page
    showNotification('Edit profile functionality coming soon!', 'info');
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="bi bi-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-triangle' : 'info-circle'}"></i>
            <span>${message}</span>
        </div>
        <button class="notification-close" onclick="this.parentElement.remove()">
            <i class="bi bi-x"></i>
        </button>
    `;

    // Add to page
    document.body.appendChild(notification);

    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentElement) {
            notification.remove();
        }
    }, 5000);
}

// Add notification styles
const notificationStyles = `
<style>
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-lg);
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    min-width: 300px;
    border-left: 4px solid;
    animation: slideInRight 0.3s ease;
}

.notification-success {
    border-left-color: var(--success-color);
}

.notification-error {
    border-left-color: var(--danger-color);
}

.notification-info {
    border-left-color: var(--info-color);
}

.notification-content {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.notification-content i {
    font-size: 1.25rem;
}

.notification-success .notification-content i {
    color: var(--success-color);
}

.notification-error .notification-content i {
    color: var(--danger-color);
}

.notification-info .notification-content i {
    color: var(--info-color);
}

.notification-close {
    background: none;
    border: none;
    color: var(--text-muted);
    cursor: pointer;
    padding: 0.25rem;
    border-radius: 4px;
    transition: var(--transition);
}

.notification-close:hover {
    background: var(--light-color);
    color: var(--text-primary);
}

@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes ripple {
    to {
        transform: scale(4);
        opacity: 0;
    }
}
</style>
`;

document.head.insertAdjacentHTML('beforeend', notificationStyles);
</script>

<?= $this->include('template/footer'); ?>
