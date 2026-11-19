<?php
$page_title = "Contact Us & Start a Project";
require_once __DIR__ . '/includes/header.php';

$success_msg = null;
$error_msg = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $organization = trim($_POST['organization'] ?? '');
    $category = trim($_POST['category'] ?? 'General Inquiry');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($full_name) || empty($email) || empty($subject) || empty($message)) {
        $error_msg = "Please fill in all required fields (Name, Email, Subject, and Message).";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Please enter a valid email address.";
    } else {
        $data = [
            'full_name' => htmlspecialchars($full_name),
            'email' => htmlspecialchars($email),
            'organization' => htmlspecialchars($organization),
            'category' => htmlspecialchars($category),
            'subject' => htmlspecialchars($subject),
            'message' => htmlspecialchars($message)
        ];

        if (saveInquiry($data)) {
            $success_msg = "Thank you! Your message and project inquiry have been received by the PCSDF Secretariat. We will respond promptly.";
        } else {
            $error_msg = "An error occurred while saving your inquiry. Please reach out directly to chaihapugalle@gmail.com.";
        }
    }
}
?>

<!-- Contact Hero -->
<section class="hero-section" style="padding: 2.8rem 0;">
    <div class="container">
        <div class="hero-badge-wrap">
            <span class="badge badge-primary">Get in Touch</span>
            <span class="badge badge-gold">Start a Project</span>
        </div>
        <h1 class="display-title" style="margin-bottom: 0.85rem;">
            Ready to Bring Your Vision to Life?
        </h1>
        <p class="hero-lead container-narrow" style="margin: 0 0 1.25rem 0;">
            Let us discuss your project, institutional collaboration, or policy transition, and explore how we can help you achieve your goals across all systems and generations.
        </p>
    </div>
</section>

<!-- Contact Form & Headquarters Grid -->
<section class="section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Details -->
            <div>
                <div class="contact-info-card">
                    <span class="badge badge-primary" style="margin-bottom: 0.75rem; font-size: 0.68rem;">Global Secretariat</span>
                    <h2 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 1.25rem;">
                        The Peace-Led Climate-Friendly Sustainable Development Forum
                    </h2>

                    <!-- Address -->
                    <div class="contact-item">
                        <div class="contact-icon">&#128205;</div>
                        <div class="contact-item-content">
                            <h4>Secretariat Address</h4>
                            <p>
                                60 Paya Lebar Road<br>
                                #06-28 Paya Lebar Square<br>
                                Singapore 409051
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon">&#9993;</div>
                        <div class="contact-item-content">
                            <h4>Direct Email</h4>
                            <p>
                                <a href="mailto:<?= htmlspecialchars(CONTACT_EMAIL) ?>">
                                    <?= htmlspecialchars(CONTACT_EMAIL) ?>
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="contact-item">
                        <div class="contact-icon">&#128222;</div>
                        <div class="contact-item-content">
                            <h4>WhatsApp Call &amp; Messaging</h4>
                            <p>
                                <a href="https://wa.me/6580701667" target="_blank" style="font-weight: 700; color: var(--emerald);">
                                    <?= htmlspecialchars(CONTACT_PHONE) ?>
                                </a>
                                <span style="display: block; font-size: 0.75rem; color: var(--text-muted);">
                                    (<?= htmlspecialchars(CONTACT_WHATSAPP_NOTE) ?>)
                                </span>
                            </p>
                        </div>
                    </div>

                    <!-- Social Channels -->
                    <div style="border-top: 1px solid var(--border-subtle); padding-top: 1.25rem; margin-top: 1.25rem;">
                        <h4 style="font-size: 0.85rem; margin-bottom: 0.65rem;">Global Channels &amp; Network</h4>
                        <div style="display: flex; gap: 0.6rem; flex-wrap: wrap;">
                            <a href="<?= URL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                                Facebook Network
                            </a>
                            <a href="<?= URL_LINKEDIN ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inquiry Form -->
            <div>
                <div class="form-card">
                    <h3 style="font-size: 1.35rem; margin-bottom: 0.35rem; color: var(--text-main);">
                        Start a Project or Inquiry
                    </h3>
                    <p style="font-size: 0.825rem; color: var(--text-muted); margin-bottom: 1.25rem;">
                        Submissions are delivered directly to the Secretariat Board.
                    </p>

                    <?php if ($success_msg): ?>
                        <div class="alert alert-success">
                            <?= htmlspecialchars($success_msg) ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($error_msg): ?>
                        <div class="alert alert-danger">
                            <?= htmlspecialchars($error_msg) ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= BASE_URL ?>/contact.php" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="full_name">Full Name *</label>
                            <input type="text" id="full_name" name="full_name" class="form-control" required placeholder="e.g. Dr. Eleanor Vance" value="<?= isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : '' ?>">
                        </div>

                        <div class="grid-form-2col">
                            <div class="form-group">
                                <label class="form-label" for="email">Official Email *</label>
                                <input type="email" id="email" name="email" class="form-control" required placeholder="name@institution.org" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="organization">Organization / Government</label>
                                <input type="text" id="organization" name="organization" class="form-control" placeholder="Ministry / NGO / Fund" value="<?= isset($_POST['organization']) ? htmlspecialchars($_POST['organization']) : '' ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="category">Collaboration Category</label>
                            <select id="category" name="category" class="form-control">
                                <option value="PFICF-RSSDF Policy Adoption">PFICF-RSSDF Policy Adoption &amp; Advisory</option>
                                <option value="Entity Partner Affiliation">Entity Partner &amp; Focal Point Affiliation</option>
                                <option value="Regenerative Finance & Green Bonds">Regenerative Finance &amp; Green Bonds</option>
                                <option value="Academic & Scientific Research">Academic &amp; Scientific Research</option>
                                <option value="General Inquiry" selected>General Inquiry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" class="form-control" required placeholder="Brief outline of your initiative" value="<?= isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '' ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Detailed Message / Scope of Work *</label>
                            <textarea id="message" name="message" class="form-control" required placeholder="Describe your proposal, objectives, and how we can collaborate..."><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '' ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.75rem;">
                            Submit Project Inquiry &rarr;
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
