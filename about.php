<?php
$page_title = "Latest About Us, Incorporations, Vision, Mission, Patrons, Board & Entity Partners";
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     ABOUT US & GOVERNANCE — SECOND PAGE DIRECT FROM WWW.PCSDF.ORG
     ========================================================================== -->
<section class="section" style="padding: 2.75rem 0 1.5rem 0; background: #FFFFFF;">
    <div class="container">
        <!-- Breadcrumb / Slogan -->
        <div style="margin-bottom: 1.25rem;">
            <span class="red-block-heading" style="font-size: 1rem; padding: 0.25rem 0.65rem;">
                PCSDF &bull; Institutional Updates &amp; Introductions
            </span>
        </div>

        <h1 style="font-size: 2.15rem; font-weight: 800; color: #000000; font-family: var(--font-display); line-height: 1.2; margin-bottom: 0.85rem;">
            Latest About Us, Incorporations, Vision, Mission, Patrons, Board Members, Advisors &amp; Entity Partners
        </h1>

        <p class="supporting-fact-text" style="font-size: 1.05rem; font-weight: 600; color: #000000; max-width: 900px; margin-bottom: 1rem;">
            We are a network of networks that support all countries, ten dependent states and two non-voting UN countries &mdash; Vatican and Palestine.
        </p>

        <div style="background: #FEF2F2; border-left: 3px solid #B91C1C; padding: 0.85rem 1.15rem; margin-bottom: 2rem;">
            <p style="font-size: 0.9rem; color: #000000; margin: 0; font-weight: 600;">
                Official Social &amp; Verification Channels: Click on the official Facebook Network links below for all verified profiles, focal points, and institutional records.
            </p>
        </div>
    </div>
</section>

<!-- ==========================================================================
     VISION & MISSION (Pure Black Supporting Facts, Red Block Headings)
     ========================================================================== -->
<section class="section" style="padding: 1.5rem 0; background: #FAFAFA; border-top: 1px solid #E5E7EB; border-bottom: 1px solid #E5E7EB;">
    <div class="container">
        <div class="grid-2col">
            <!-- Vision -->
            <div style="background: #FFFFFF; border: 1px solid #E5E7EB; padding: 1.75rem; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
                <span class="red-block-heading">Our Vision</span>
                <p class="supporting-fact-text" style="margin-top: 0.5rem;">
                    Peace-led stewardship that fosters the flourishing and regeneration of interconnected systems &mdash; human and non-human &mdash; across societies, ecosystems, planetary boundaries, the shared global commons, and outer space as part of our broader cosmic commons.
                </p>
                <p class="supporting-fact-text">
                    The Forum envisions a peaceful and regenerative future in which human societies, biodiversity, ecosystems, and planetary systems flourish together, guided by peace, ethical stewardship, faith traditions, Indigenous wisdom, scientific knowledge, innovation, and respect for human dignity.
                </p>
            </div>

            <!-- Mission -->
            <div style="background: #FFFFFF; border: 1px solid #E5E7EB; padding: 1.75rem; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
                <span class="red-block-heading">Our Mission</span>
                <p class="supporting-fact-text" style="margin-top: 0.5rem;">
                    The Peace-Led Climate-Friendly Sustainable Development Forum advances peace-led, faith- and Indigenous-inspired, climate-friendly, and regenerative approaches to sustainability and governance in response to the interconnected challenges of the global polycrisis.
                </p>
                <p class="supporting-fact-text">
                    Through dialogue, knowledge exchange, partnerships, policy innovation, and financial innovation, the Forum promotes systems thinking and international cooperation that strengthen resilience, regeneration, and stewardship across environmental, social, economic, governance, technological, cultural, digital, and ecological systems.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 1: Board of Directors
     ========================================================================== -->
<section class="section" id="board" style="padding: 2.75rem 0; background: #FFFFFF;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem; border-bottom: 2px solid #E5E7EB; padding-bottom: 1rem;">
            <div>
                <span class="red-block-heading">1. Board of Directors</span>
                <p class="supporting-fact-text" style="margin-bottom: 0;">
                    Governing PCSDF's constitutional roadmap, institutional oversight, and strategic development.
                </p>
            </div>
            <div>
                <a href="https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                    View Board on Facebook Network &nearr;
                </a>
            </div>
        </div>

        <?php
        $board_members = [
            ['name' => 'Chaitri N. Hapugalle', 'role' => 'Founder & Board Director', 'note' => 'Architect of the PFICF-RSSDF framework. Leading planetary intergenerational stewardship.'],
            ['name' => 'Saji Prelis', 'role' => 'Board Director', 'note' => 'International leader in youth peacebuilding, violent conflict mitigation, and civic transformation.'],
            ['name' => 'Paul Fraser Turner', 'role' => 'Board Director', 'note' => 'Senior strategist with The Fund for Peace (FFP). Expert in fragile states indices and human security.'],
            ['name' => 'Christoph Klein', 'role' => 'Board Director', 'note' => 'Managing Partner at ESG Portfolio Management. Pioneer in regenerative finance and green bonds.'],
            ['name' => 'Thomas Wuchte', 'role' => 'Board Director', 'note' => 'Executive Director of the Center for Multilateral Leadership. Veteran international diplomat.']
        ];
        ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.25rem;">
            <?php foreach ($board_members as $idx => $m): ?>
                <div style="background: #FFFFFF; border: 1px solid #E5E7EB; border-left: 3px solid #B91C1C; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-size: 0.7rem; font-weight: 800; color: #B91C1C; text-transform: uppercase;">Director #0<?= $idx + 1 ?></span>
                        <span style="font-size: 0.72rem; color: #6B7280; font-weight: 600;">Verified Member</span>
                    </div>
                    <h3 style="font-size: 1.15rem; color: #000000; font-weight: 800; font-family: var(--font-display); margin-bottom: 0.25rem;">
                        <?= htmlspecialchars($m['name']) ?>
                    </h3>
                    <div style="font-size: 0.8rem; font-weight: 700; color: #B91C1C; margin-bottom: 0.5rem;">
                        <?= htmlspecialchars($m['role']) ?>
                    </div>
                    <p class="supporting-fact-text" style="font-size: 0.85rem; line-height: 1.6; margin-bottom: 0.85rem;">
                        <?= htmlspecialchars($m['note']) ?>
                    </p>
                    <div style="border-top: 1px solid #F3F4F6; padding-top: 0.5rem;">
                        <a href="https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 700; color: #B91C1C;">
                            Facebook Dossier &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 2: Distinguished Patrons
     ========================================================================== -->
<section class="section" id="patrons" style="padding: 2.75rem 0; background: #FAFAFA; border-top: 1px solid #E5E7EB; border-bottom: 1px solid #E5E7EB;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem; border-bottom: 2px solid #E5E7EB; padding-bottom: 1rem;">
            <div>
                <span class="red-block-heading">2. Distinguished Patrons</span>
                <p class="supporting-fact-text" style="margin-bottom: 0;">
                    Diplomats, economists, scientists, and moral authorities stewarding PCSDF’s intergenerational covenant.
                </p>
            </div>
            <div>
                <a href="https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                    View Patrons on Facebook Network &nearr;
                </a>
            </div>
        </div>

        <?php
        $patrons_list = [
            ['name' => 'Otaviano Canuto', 'title' => 'Patron and Senior Advisor', 'bio' => 'Former Vice President and Executive Director at the World Bank; Senior Fellow at Policy Center for the New South.'],
            ['name' => 'Katherine Marshall', 'title' => 'Patron and Senior Advisor', 'bio' => 'Senior Fellow at Georgetown University Berkley Center; international expert on faith, ethics, and world development.'],
            ['name' => 'Dr. Frannie Léautier', 'title' => 'Patron and Senior Advisor', 'bio' => 'CEO of SouthBridge Investments; former Senior VP at African Development Bank; former Vice President at World Bank.'],
            ['name' => 'Dr. Azza Karam', 'title' => 'Patron and Senior Advisor', 'bio' => 'President & CEO of Lead Integrity; former Secretary General of Religions for Peace; expert on multilateralism.'],
            ['name' => 'Honourable Prasad Kariyawasam', 'title' => 'Patron and Senior Advisor', 'bio' => 'Former Foreign Secretary of Sri Lanka; former Ambassador to the United States and High Commissioner to India.'],
            ['name' => 'Honourable Mohieddine Ben Jemaa', 'title' => 'Patron and Senior Advisor', 'bio' => 'Eminent diplomat, multilateral negotiator, and champion of sustainable regional governance.'],
            ['name' => 'Jean Ayoub', 'title' => 'Patron and Senior Advisor', 'bio' => 'Recognised for foundational contribution to PCSDF; 17 years Secretary-General & CEO of International Social Service (ISS).'],
            ['name' => 'Dr. Juha Uitto', 'title' => 'Patron and Senior Advisor', 'bio' => 'Former Director of the Independent Evaluation Office of the Global Environment Facility (GEF).'],
            ['name' => 'Claire Hutchinson', 'title' => 'Patron and Senior Advisor', 'bio' => 'Former NATO Secretary General’s Special Representative for Women, Peace and Security.'],
            ['name' => 'Sanjay Rathee', 'title' => 'Patron and Senior Advisor', 'bio' => 'Space Development Nexus (SDNx); global leader in space technology access, orbital governance, and youth STEM.'],
            ['name' => 'Gabe Gabrielle', 'title' => 'Patron and Senior Advisor', 'bio' => 'Former NASA Engineer, Director, and inspirational global speaker on STEM and planetary stewardship.']
        ];
        ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.25rem;">
            <?php foreach ($patrons_list as $idx => $p): ?>
                <div style="background: #FFFFFF; border: 1px solid #E5E7EB; border-left: 3px solid #B91C1C; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-size: 0.7rem; font-weight: 800; color: #B91C1C; text-transform: uppercase;">Patron #<?= sprintf('%02d', $idx + 1) ?></span>
                        <span style="font-size: 0.72rem; color: #6B7280; font-weight: 600;">Global Leadership</span>
                    </div>
                    <h3 style="font-size: 1.15rem; color: #000000; font-weight: 800; font-family: var(--font-display); margin-bottom: 0.25rem;">
                        <?= htmlspecialchars($p['name']) ?>
                    </h3>
                    <div style="font-size: 0.8rem; font-weight: 700; color: #B91C1C; margin-bottom: 0.5rem;">
                        <?= htmlspecialchars($p['title']) ?>
                    </div>
                    <p class="supporting-fact-text" style="font-size: 0.85rem; line-height: 1.6; margin-bottom: 0.85rem;">
                        <?= htmlspecialchars($p['bio']) ?>
                    </p>
                    <div style="border-top: 1px solid #F3F4F6; padding-top: 0.5rem;">
                        <a href="https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 700; color: #B91C1C;">
                            Facebook Dossier &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 3: Jean Ayoub — Patron and Senior Advisor
     ========================================================================== -->
<section class="section" id="ayoub" style="padding: 2.75rem 0; background: #FFFFFF;">
    <div class="container">
        <div style="background: #FFFFFF; border: 1px solid #E5E7EB; border-top: 3px solid #B91C1C; padding: 2.25rem; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
            <div style="margin-bottom: 1rem;">
                <span class="red-block-heading">3. Jean Ayoub &mdash; Patron and Senior Advisor</span>
            </div>
            
            <h3 style="font-size: 1.35rem; color: #000000; font-weight: 800; font-family: var(--font-display); margin-bottom: 0.75rem;">
                Jean Ayoub &mdash; Professional Profile &amp; Foundational Role
            </h3>

            <p class="supporting-fact-text" style="font-size: 1rem; line-height: 1.75; margin-bottom: 1.25rem;">
                Jean’s elevation recognises his foundational contribution to PCSDF and his distinguished international experience, including his <strong>17 years as Secretary-General and CEO of International Social Service (ISS)</strong>, whose global network extended across more than 120 countries defending child rights, cross-border social justice, and humanitarian law.
            </p>

            <p class="supporting-fact-text" style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                As Senior Advisor, Jean guides multilateral institutional governance, linking PCSDF’s constitutional framework to global diplomatic missions, multilateral bodies, and international humanitarian forums.
            </p>

            <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                <a href="https://ch.linkedin.com/in/jeanayoub" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
                    View LinkedIn Profile &nearr;
                </a>
                <a href="https://www.facebook.com/share/p/1KN3R4atEx/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                    View Facebook Elevation Record &nearr;
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 4: Entity Partners, Focal Points and Advisors
     ========================================================================== -->
<section class="section" id="partners" style="padding: 2.75rem 0; background: #FAFAFA; border-top: 1px solid #E5E7EB;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem; border-bottom: 2px solid #E5E7EB; padding-bottom: 1rem;">
            <div>
                <span class="red-block-heading">4. Entity partners, focal points and advisors</span>
                <p class="supporting-fact-text" style="margin-bottom: 0; max-width: 820px;">
                    Our growing international network brings together organisations and institutional collaborators committed to peacebuilding, sustainable development, humanitarian cooperation, climate action, governance, research, innovation and the regeneration of interconnected systems.
                </p>
            </div>
            <div>
                <a href="https://www.facebook.com/share/p/1czKqS3zu4/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                    View Entity Partners on Facebook Network &nearr;
                </a>
            </div>
        </div>

        <?php
        $official_entities = [
            ['id' => 1, 'name' => 'Unify Platform AG', 'focal' => 'Dr. Takahisa Karita'],
            ['id' => 2, 'name' => 'The Fund for Peace (FFP)', 'focal' => 'Paul Fraser Turner'],
            ['id' => 3, 'name' => 'NGO Committee for Disarmament, Peace and Security', 'focal' => 'Bruce Knotts'],
            ['id' => 4, 'name' => '195 in 265', 'focal' => 'Johann Hoschtialek'],
            ['id' => 5, 'name' => 'ESG Portfolio Management', 'focal' => 'Christoph Klein'],
            ['id' => 6, 'name' => 'Arab Civil Society and Feminist Network', 'focal' => 'Fatemah Khafagy'],
            ['id' => 7, 'name' => 'Center for Multilateral Leadership', 'focal' => 'Thomas Wuchte'],
            ['id' => 8, 'name' => 'Local Youth Corner, Cameroon', 'focal' => 'Achaleke Christian Leke'],
            ['id' => 9, 'name' => 'Women Are Change Agents', 'focal' => 'Fatemah Khafagy'],
            ['id' => 10, 'name' => 'All India Sustainable Development Council', 'focal' => 'Lt. General Shokin Chauhan; Vigil Kanethra'],
            ['id' => 11, 'name' => 'Global Sustainable Development Council', 'focal' => 'Lt. General Shokin Chauhan; Vigil Kanethra'],
            ['id' => 12, 'name' => 'Energy for One World', 'focal' => 'Adriaan Kamp'],
            ['id' => 13, 'name' => 'Royal Chera Dynasty and Family', 'focal' => 'Vigil Kanethra'],
            ['id' => 14, 'name' => 'SUNWay Research and Innovation Center', 'focal' => 'Pradeep Sapkota'],
            ['id' => 15, 'name' => 'Space Development Nexus (SDNx)', 'focal' => 'Sanjay Rathee'],
            ['id' => 16, 'name' => 'Pilot International', 'focal' => 'Honourable Robinah Nanyunja'],
            ['id' => 17, 'name' => 'Women Entrepreneurship Forum Africa', 'focal' => 'Honourable Robinah Nanyunja'],
            ['id' => 18, 'name' => 'Youth Entrepreneurship Forum Africa', 'focal' => 'Honourable Robinah Nanyunja'],
            ['id' => 19, 'name' => 'Munir Mezyed Foundation', 'focal' => 'Munir Mezyed'],
            ['id' => 20, 'name' => 'Vigil Floating City', 'focal' => 'Vigil Kanethra'],
            ['id' => 21, 'name' => 'Vigil cruisevoy', 'focal' => 'Vigil Kanethra'],
            ['id' => 22, 'name' => 'World Peace Board', 'focal' => 'Lt. General Shokin Chauhan; Vigil Kanethra']
        ];
        ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.25rem;">
            <?php foreach ($official_entities as $ent): ?>
                <div style="background: #FFFFFF; border: 1px solid #E5E7EB; border-left: 3px solid #B91C1C; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.4rem;">
                        <span style="font-size: 0.72rem; font-weight: 800; color: #B91C1C;">Entity #<?= sprintf('%02d', $ent['id']) ?></span>
                        <span style="font-size: 0.7rem; color: #6B7280; font-weight: 600;">Active Partner</span>
                    </div>

                    <h3 style="font-size: 1.05rem; font-weight: 800; color: #000000; font-family: var(--font-display); margin-bottom: 0.65rem; line-height: 1.35;">
                        <?= htmlspecialchars($ent['name']) ?>
                    </h3>

                    <div style="background: #F9FAFB; border: 1px solid #E5E7EB; border-left: 2px solid #B91C1C; padding: 0.45rem 0.65rem; margin-bottom: 0.75rem;">
                        <div style="font-size: 0.68rem; text-transform: uppercase; font-weight: 800; color: #B91C1C; letter-spacing: 0.05em;">
                            Designated Focal Point
                        </div>
                        <div style="font-size: 0.85rem; font-weight: 700; color: #000000;">
                            <?= htmlspecialchars($ent['focal']) ?>
                        </div>
                    </div>

                    <div style="border-top: 1px solid #F3F4F6; padding-top: 0.5rem; display: flex; justify-content: space-between; align-items: center;">
                        <a href="https://www.facebook.com/share/p/1czKqS3zu4/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 700; color: #B91C1C;">
                            Facebook Network &rarr;
                        </a>
                        <a href="<?= BASE_URL ?>/contact.php?partner=<?= urlencode($ent['name']) ?>" style="font-size: 0.75rem; font-weight: 600; color: #374151;">
                            Inquire &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
