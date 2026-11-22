<?php
$page_title = "Contact Us & Join the Movement";
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
            $success_msg = "Thank you! Your message and project inquiry have been received by the PCSDF leadership team. We will respond as soon as possible.";
        } else {
            $error_msg = "An error occurred while saving your inquiry. Please reach out directly to chapugalle@pcsdf.org or chaihapugalle@gmail.com.";
        }
    }
}
?>

<!-- Contact Hero -->
<section class="section" style="background: var(--bg-surface); border-bottom: 2px solid var(--primary); padding: 3.5rem 0 2.5rem 0;">
    <div class="container text-center">
        <span class="badge badge-primary" style="margin-bottom: 0.75rem;">Get In Touch</span>
        <h1 class="display-title" style="margin-bottom: 0.75rem;">
            Begin Your Extraordinary Journey
        </h1>
        <p class="section-subtitle" style="max-width: 740px; margin-bottom: 0;">
            We would love to hear from you. Be part of a growing global network advancing peace-led, climate-friendly, regenerative solutions for present and future generations.
        </p>
    </div>
</section>

<!-- Contact Form & Institutional Info Grid -->
<section class="section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Details -->
            <div>
                <div class="contact-info-card" style="border-top: 3px solid var(--primary);">
                    <span class="badge badge-primary" style="margin-bottom: 0.75rem; font-size: 0.68rem;">Global Platform</span>
                    <h2 style="font-size: 1.35rem; color: var(--text-main); margin-bottom: 0.75rem;">
                        The Peace-Led Climate-Friendly Sustainable Development Forum (PCSDF)
                    </h2>
                    <p style="font-size: 0.8rem; color: var(--primary); font-weight: 700; margin-bottom: 1.25rem;">
                        Registered in Singapore as a Company Limited by Guarantee (Incorporated 24 December 2021)
                    </p>

                    <!-- Address -->
                    <div class="contact-item">
                        <div class="contact-icon" style="color: var(--primary); font-size: 1.1rem;">&#128205;</div>
                        <div class="contact-item-content">
                            <h4>Headquarters &amp; Registered Location</h4>
                            <p style="color: var(--text-body);">
                                Keong Saik Road<br>
                                Chinatown, Singapore
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon" style="color: var(--primary); font-size: 1.1rem;">&#9993;</div>
                        <div class="contact-item-content">
                            <h4>Direct Email Inquiries</h4>
                            <p>
                                <a href="mailto:chapugalle@pcsdf.org" style="color: var(--primary); font-weight: 600; display: block;">
                                    chapugalle@pcsdf.org
                                </a>
                                <a href="mailto:chaihapugalle@gmail.com" style="color: var(--text-body); font-size: 0.8rem; display: block;">
                                    chaihapugalle@gmail.com
                                </a>
                                <a href="mailto:tpcsdf@gmail.com" style="color: var(--text-muted); font-size: 0.78rem; display: block;">
                                    tpcsdf@gmail.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- WhatsApp & Direct Calling -->
                    <div class="contact-item">
                        <div class="contact-icon" style="color: var(--primary); font-size: 1.1rem;">&#128222;</div>
                        <div class="contact-item-content">
                            <h4>Phone &amp; WhatsApp</h4>
                            <p>
                                <a href="https://wa.me/6597240021" target="_blank" style="font-weight: 700; color: #15803D; font-size: 0.95rem;">
                                    +65 9724 0021
                                </a>
                                <span style="display: block; font-size: 0.75rem; color: var(--text-muted); margin-top: 2px;">
                                    Direct calls and WhatsApp communication
                                </span>
                            </p>
                        </div>
                    </div>

                    <!-- Social Channels -->
                    <div style="border-top: 1px solid var(--border-subtle); padding-top: 1.25rem; margin-top: 1.25rem;">
                        <h4 style="font-size: 0.85rem; margin-bottom: 0.65rem;">Global Leadership Channels</h4>
                        <div style="display: flex; gap: 0.6rem; flex-wrap: wrap;">
                            <a href="<?= URL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                                Facebook Network
                            </a>
                            <a href="https://www.linkedin.com/in/chaitri-hapugalle" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                                LinkedIn
                            </a>
                        </div>
                    </div>

                    <div style="margin-top: 1.5rem; padding: 1rem; background: var(--bg-surface-elevated); border-left: 3px solid var(--primary); font-size: 0.8rem; line-height: 1.5; color: var(--text-body);">
                        <strong>Together, we can help shape a more peaceful, sustainable, and resilient world.</strong><br>
                        <span style="color: var(--text-muted); font-size: 0.75rem;">Apply Now &bull; Join the Movement &bull; Be Part of the Change</span>
                    </div>
                </div>
            </div>

            <!-- Inquiry Form -->
            <div>
                <div class="form-card" style="border-top: 3px solid var(--primary);">
                    <h3 style="font-size: 1.35rem; margin-bottom: 0.35rem; color: var(--text-main);">
                        Submit Your Application or Inquiry
                    </h3>
                    <p style="font-size: 0.825rem; color: var(--text-muted); margin-bottom: 1.25rem;">
                        We welcome individuals, institutions, youth, professionals, changemakers, philanthropists, and partners from all backgrounds.
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
                            <label class="form-label" for="full_name">Your Name *</label>
                            <input type="text" id="full_name" name="full_name" class="form-control" required placeholder="e.g. Dr. Eleanor Vance" value="<?= isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : '' ?>">
                        </div>

                        <div class="grid-form-2col">
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-control" required placeholder="name@institution.org" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="organization">Organization / Institution</label>
                                <input type="text" id="organization" name="organization" class="form-control" placeholder="Government / NGO / Sovereign Fund" value="<?= isset($_POST['organization']) ? htmlspecialchars($_POST['organization']) : '' ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="category">Collaboration Track</label>
                            <select id="category" name="category" class="form-control">
                                <option value="Member">Member – Join our community and contribute ideas, expertise, and collaboration</option>
                                <option value="Volunteer">Volunteer – Support events, research, outreach, communications, and operations</option>
                                <option value="Sponsor">Sponsor – Help power impactful programs, partnerships, and global initiatives</option>
                                <option value="Entity Partner Affiliation">Entity Partner &amp; Focal Point Affiliation</option>
                                <option value="PFICF-RSSDF Policy Advisory">PFICF-RSSDF Policy Adoption &amp; Advisory</option>
                                <option value="General Inquiry" selected>General Inquiry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" class="form-control" required placeholder="e.g. Collaboration Proposal on Regenerative Governance" value="<?= isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '' ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Message / Scope of Collaboration *</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required placeholder="Please provide brief background and the collaborative aims..."><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '' ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Submit Inquiry &rarr;
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
