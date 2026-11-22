<?php
$page_title = "Journey — Contact & Global Call For Action";
require_once __DIR__ . '/includes/header.php';

$success_msg = null;
$error_msg = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $organization = trim($_POST['organization'] ?? '');
    $track = trim($_POST['track'] ?? 'General Inquiry');
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
            'category' => htmlspecialchars($track),
            'subject' => htmlspecialchars($subject),
            'message' => htmlspecialchars($message)
        ];

        if (saveInquiry($data)) {
            $success_msg = "Thank you! Your inquiry has been received by PCSDF. We will respond promptly.";
        } else {
            $error_msg = "An error occurred while saving your inquiry. Please reach out directly to chapugalle@pcsdf.org.";
        }
    }
}
?>

<!-- ==========================================================================
     JOURNEY — CONTACT & GLOBAL CALL FOR ACTION (Matching pcsdf.org Mobile Design)
     ========================================================================== -->
<section class="section" style="padding: 2.75rem 0 1.5rem 0; background: #FFFFFF;">
    <div class="container text-center">
        <h1 style="font-size: 2.45rem; font-weight: 800; color: #000000; font-family: var(--font-display); margin-bottom: 0.75rem;">
            Journey
        </h1>
        <p class="supporting-fact-text" style="font-size: 1.05rem; max-width: 720px; margin: 0 auto 1.5rem auto;">
            We would love to hear from you. Be part of a growing global network advancing peace-led, climate-friendly, regenerative solutions for present and future generations.
        </p>
    </div>
</section>

<!-- ==========================================================================
     CONTACT LOCATION & INQUIRY FORM GRID
     ========================================================================== -->
<section class="section" style="padding: 1.5rem 0 3.5rem 0; background: #FFFFFF;">
    <div class="container container-compact">
        <!-- Notification Alerts -->
        <?php if ($success_msg): ?>
            <div style="background: #ECFDF5; border: 1px solid #A7F3D0; color: #065F46; padding: 1rem 1.25rem; border-radius: 2px; margin-bottom: 1.5rem; font-weight: 600;">
                <?= htmlspecialchars($success_msg) ?>
            </div>
        <?php endif; ?>

        <?php if ($error_msg): ?>
            <div style="background: #FEF2F2; border: 1px solid #FECACA; color: #991B1B; padding: 1rem 1.25rem; border-radius: 2px; margin-bottom: 1.5rem; font-weight: 600;">
                <?= htmlspecialchars($error_msg) ?>
            </div>
        <?php endif; ?>

        <!-- Official Platform Card Matching Screenshot -->
        <div class="contact-journey-card" style="margin-bottom: 2.5rem;">
            <div style="margin-bottom: 0.75rem;">
                <span style="font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: #B91C1C; background: #FEF2F2; padding: 0.25rem 0.6rem; border: 1px solid #FEE2E2;">
                    GLOBAL PLATFORM
                </span>
            </div>

            <h2 style="font-size: 1.5rem; font-weight: 800; color: #000000; font-family: var(--font-display); line-height: 1.3; margin-bottom: 0.4rem;">
                The Peace-Led Climate-Friendly Sustainable Development Forum (PCSDF)
            </h2>

            <p style="font-size: 0.85rem; font-weight: 700; color: #B91C1C; margin-bottom: 1.5rem; line-height: 1.5;">
                Registered in Singapore as a Company Limited by Guarantee (Incorporated 24 December 2021)
            </p>

            <!-- Row 1: Headquarters & Registered Location -->
            <div class="contact-journey-item">
                <div class="contact-icon-frame" aria-hidden="true">&#128205;</div>
                <div>
                    <div class="contact-label-title">Headquarters &amp; Registered Location</div>
                    <div class="contact-value-text" style="font-weight: 600;">
                        Keong Saik Road<br>
                        Chinatown, Singapore
                    </div>
                </div>
            </div>

            <!-- Row 2: Direct Email Inquiries -->
            <div class="contact-journey-item">
                <div class="contact-icon-frame" aria-hidden="true">&#9993;</div>
                <div>
                    <div class="contact-label-title">Direct Email Inquiries</div>
                    <div class="contact-value-text">
                        <a href="mailto:chapugalle@pcsdf.org" style="color: #B91C1C; font-weight: 700; text-decoration: none;">chapugalle@pcsdf.org</a><br>
                        <a href="mailto:chaihapugalle@gmail.com" style="color: #374151; font-weight: 600; text-decoration: none;">chaihapugalle@gmail.com</a><br>
                        <a href="mailto:tpcsdf@gmail.com" style="color: #374151; font-weight: 600; text-decoration: none;">tpcsdf@gmail.com</a>
                    </div>
                </div>
            </div>

            <!-- Row 3: Phone & WhatsApp -->
            <div class="contact-journey-item">
                <div class="contact-icon-frame" aria-hidden="true">&#128222;</div>
                <div>
                    <div class="contact-label-title">Phone &amp; WhatsApp</div>
                    <div class="contact-value-text">
                        <a href="https://wa.me/6597240021" target="_blank" style="color: #15803D; font-weight: 800; font-size: 1.05rem; text-decoration: none;">
                            +65 9724 0021
                        </a>
                        <div style="font-size: 0.8rem; color: #4B5563; margin-top: 0.2rem;">
                            Direct calls and WhatsApp communication
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leadership Channels -->
            <div style="margin-top: 1.75rem; border-top: 1px solid #F3F4F6; padding-top: 1.25rem;">
                <div style="font-size: 0.85rem; font-weight: 800; color: #000000; margin-bottom: 0.75rem;">
                    Global Leadership Channels
                </div>
                <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                    <a href="https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        Facebook Network &nearr;
                    </a>
                    <a href="https://ch.linkedin.com/in/jeanayoub" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        LinkedIn &nearr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Working Inquiry Form -->
        <div style="background: #FAFAFA; border: 1px solid #E5E7EB; border-radius: 2px; padding: 2rem;">
            <div style="margin-bottom: 1.25rem;">
                <span class="red-block-heading" style="font-size: 1.1rem; padding: 0.3rem 0.75rem;">
                    Send an Inquiry or Project Proposal
                </span>
                <p class="supporting-fact-text" style="font-size: 0.88rem; margin-top: 0.35rem; margin-bottom: 0;">
                    Please fill out the form below. Our leadership team responds to inquiries promptly.
                </p>
            </div>

            <form method="POST" action="<?= BASE_URL ?>/contact.php">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                    <div>
                        <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #000000; margin-bottom: 0.35rem;">
                            Full Name *
                        </label>
                        <input type="text" name="full_name" required placeholder="Your full name" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid #D1D5DB; border-radius: 2px; font-size: 0.875rem; background: #FFFFFF; color: #000000;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #000000; margin-bottom: 0.35rem;">
                            Email Address *
                        </label>
                        <input type="email" name="email" required placeholder="your.email@organization.org" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid #D1D5DB; border-radius: 2px; font-size: 0.875rem; background: #FFFFFF; color: #000000;">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                    <div>
                        <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #000000; margin-bottom: 0.35rem;">
                            Organization / Affiliation
                        </label>
                        <input type="text" name="organization" placeholder="Institution, Foundation, or State entity" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid #D1D5DB; border-radius: 2px; font-size: 0.875rem; background: #FFFFFF; color: #000000;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #000000; margin-bottom: 0.35rem;">
                            Engagement Track
                        </label>
                        <select name="track" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid #D1D5DB; border-radius: 2px; font-size: 0.875rem; background: #FFFFFF; color: #000000;">
                            <option value="Entity Partner Inquiry">Entity Partner Inquiry</option>
                            <option value="Membership & Affiliation">Membership &amp; Affiliation</option>
                            <option value="Volunteer Track">Volunteer Track</option>
                            <option value="Sponsorship & Philanthropic Capital">Sponsorship &amp; Philanthropic Capital</option>
                            <option value="General Inquiry">General Inquiry</option>
                        </select>
                    </div>
                </div>

                <div style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #000000; margin-bottom: 0.35rem;">
                        Subject *
                    </label>
                    <input type="text" name="subject" required placeholder="Subject of your message" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid #D1D5DB; border-radius: 2px; font-size: 0.875rem; background: #FFFFFF; color: #000000;">
                </div>

                <div style="margin-bottom: 1.25rem;">
                    <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #000000; margin-bottom: 0.35rem;">
                        Message *
                    </label>
                    <textarea name="message" rows="5" required placeholder="Describe your inquiry, project scope, or proposal..." style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid #D1D5DB; border-radius: 2px; font-size: 0.875rem; background: #FFFFFF; color: #000000; font-family: inherit;"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.75rem 1.5rem; font-size: 0.95rem;">
                        Submit Inquiry &rarr;
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
