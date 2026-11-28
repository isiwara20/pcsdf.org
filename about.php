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
            <span class="red-block-heading" style="font-size: 0.95rem; padding: 0.25rem 0.65rem;">
                PCSDF &bull; Institutional Updates &amp; Introductions
            </span>
        </div>

        <h1 style="font-size: 2.15rem; font-weight: 800; color: #000000; font-family: var(--font-display); line-height: 1.25; margin-bottom: 0.85rem;">
            Latest About Us, Incorporations, Vision, Mission, Patrons, Board Members, Advisors &amp; Entity Partners
        </h1>

        <p class="supporting-fact-text" style="font-size: 1.05rem; font-weight: 600; color: #000000; max-width: 950px; margin-bottom: 1rem;">
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
     VISION & MISSION (Shaded Boxes matching Quote Highlight, Pure Black Text)
     ========================================================================== -->
<section class="section" style="padding: 1.5rem 0 2.5rem 0; background: #FAFAFA; border-top: 1px solid #E5E7EB; border-bottom: 1px solid #E5E7EB;">
    <div class="container">
        <div class="grid-2col" style="gap: 1.75rem;">
            <!-- Vision in Shaded Box -->
            <div class="shaded-box">
                <span class="red-block-heading">Our Vision</span>
                <p class="supporting-fact-text" style="margin-top: 0.85rem;">
                    Peace-led stewardship that fosters the flourishing and regeneration of interconnected systems &mdash; human and non-human &mdash; across societies, ecosystems, planetary boundaries, the shared global commons, and outer space as part of our broader cosmic commons.
                </p>
                <p class="supporting-fact-text" style="margin-bottom: 0;">
                    The Forum envisions a peaceful and regenerative future in which human societies, biodiversity, ecosystems, and planetary systems flourish together, guided by peace, ethical stewardship, faith traditions, Indigenous wisdom, scientific knowledge, innovation, and respect for human dignity.
                </p>
            </div>

            <!-- Mission in Shaded Box -->
            <div class="shaded-box">
                <span class="red-block-heading">Our Mission</span>
                <p class="supporting-fact-text" style="margin-top: 0.85rem;">
                    The Peace-Led Climate-Friendly Sustainable Development Forum advances peace-led, faith- and Indigenous-inspired, climate-friendly, and regenerative approaches to sustainability and governance in response to the interconnected challenges of the global polycrisis.
                </p>
                <p class="supporting-fact-text" style="margin-bottom: 0;">
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
        <div style="margin-bottom: 1.5rem; border-bottom: 2px solid #E5E7EB; padding-bottom: 1.25rem;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem; margin-bottom: 0.85rem;">
                <div>
                    <span class="red-block-heading">Board of Directors</span>
                </div>
                <div>
                    <a href="https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        View Board on Facebook Network &nearr;
                    </a>
                </div>
            </div>
            <p class="supporting-fact-text" style="margin-bottom: 0; max-width: 950px; font-size: 0.95rem; line-height: 1.7;">
                The Board of Directors is responsible for constitutional governance, fiduciary stewardship, legal compliance, and strategic direction of the Peace-Led Climate-Friendly Sustainable Development Forum (PCSDF), incorporated in Singapore as a Company Limited by Guarantee (CLG). The Board oversees institutional architecture, financial integrity, multilateral partnerships, and operational execution of PCSDF's global mission. Directors ensure rigorous alignment with international governance standards, transparent stakeholder accountability, and the ethical deployment of resources across peacebuilding, climate action, and regenerative development programs.
            </p>
        </div>

        <?php
        $board_members = [
            [
                'name' => 'Chaitri (Chai) N. Hapugalle',
                'role' => 'Founder & Board Director',
                'note' => 'Architect of the PFICF-RSSDF framework. Leading planetary intergenerational stewardship linking local communities, human rights, and the global and cosmic commons.',
                'linkedin' => 'https://www.linkedin.com/in/chaitri-hapugalle',
                'website' => 'https://pcsdf.org'
            ],
            [
                'name' => 'Saji Prelis',
                'role' => 'Board Director',
                'note' => 'International leader in youth peacebuilding, violent conflict mitigation, and civic transformation across multilateral frameworks.',
                'linkedin' => 'https://www.linkedin.com/in/sajiprelis',
                'website' => null
            ],
            [
                'name' => 'Paul Fraser Turner',
                'role' => 'Board Director & Technical Advisor',
                'note' => 'Senior strategist with The Fund for Peace (FFP). Expert in fragile states indices, peace accords, and systemic human security tracking.',
                'linkedin' => 'https://www.linkedin.com/in/paul-turner-ffp',
                'website' => 'https://fundforpeace.org'
            ],
            [
                'name' => 'Christoph Klein',
                'role' => 'Board Director & Technical Advisor',
                'note' => 'Managing Partner at ESG Portfolio Management. Pioneer in regenerative finance, green bond verification, and intergenerational capital allocation.',
                'linkedin' => 'https://www.linkedin.com/in/christoph-klein-esg',
                'website' => 'https://esg-pm.com'
            ],
            [
                'name' => 'Thomas Wuchte',
                'role' => 'Board Director & Technical Advisor',
                'note' => 'Executive Director of the Center for Multilateral Leadership. Decades of diplomatic leadership in transnational security and multilateral institution-building.',
                'linkedin' => 'https://www.linkedin.com/in/thomas-wuchte',
                'website' => null
            ]
        ];
        ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(290px, 1fr)); gap: 1.25rem;">
            <?php foreach ($board_members as $m): ?>
                <div style="background: #FFFFFF; border: 1px solid #E5E7EB; border-left: 3px solid #B91C1C; padding: 1.35rem; box-shadow: 0 1px 3px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-size: 0.75rem; color: #B91C1C; font-weight: 700; background: #FEF2F2; border: 1px solid #FEE2E2; padding: 0.15rem 0.5rem; border-radius: 2px;">
                                Verified Member
                            </span>
                            <span style="font-size: 0.72rem; color: #6B7280; font-weight: 600;">
                                Board Governance
                            </span>
                        </div>
                        <h3 style="font-size: 1.15rem; color: #000000; font-weight: 800; font-family: var(--font-display); margin-bottom: 0.25rem; line-height: 1.3;">
                            <?= htmlspecialchars($m['name']) ?>
                        </h3>
                        <div style="font-size: 0.82rem; font-weight: 700; color: #B91C1C; margin-bottom: 0.65rem;">
                            <?= htmlspecialchars($m['role']) ?>
                        </div>
                        <p class="supporting-fact-text" style="font-size: 0.85rem; line-height: 1.6; margin-bottom: 1rem;">
                            <?= htmlspecialchars($m['note']) ?>
                        </p>
                    </div>
                    <div style="border-top: 1px solid #F3F4F6; padding-top: 0.75rem; display: flex; flex-wrap: wrap; gap: 0.65rem; align-items: center;">
                        <a href="<?= htmlspecialchars($m['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" style="font-size: 0.75rem; padding: 0.25rem 0.55rem;">
                            LinkedIn Profile &nearr;
                        </a>
                        <?php if ($m['website']): ?>
                            <a href="<?= htmlspecialchars($m['website']) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 600; color: #374151;">
                                Website &nearr;
                            </a>
                        <?php endif; ?>
                        <a href="https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 700; color: #B91C1C; margin-left: auto;">
                            Facebook Dossier &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 2: Distinguished Patrons and Senior Advisors
     (Including Jean Ayoub in identical uniform card layout)
     ========================================================================== -->
<section class="section" id="patrons" style="padding: 2.75rem 0; background: #FAFAFA; border-top: 1px solid #E5E7EB; border-bottom: 1px solid #E5E7EB;">
    <div class="container">
        <div style="margin-bottom: 1.5rem; border-bottom: 2px solid #E5E7EB; padding-bottom: 1.25rem;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem; margin-bottom: 0.85rem;">
                <div>
                    <span class="red-block-heading">Distinguished Patrons and Senior Advisors</span>
                </div>
                <div>
                    <a href="https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        View Patrons on Facebook Network &nearr;
                    </a>
                </div>
            </div>
            <p class="supporting-fact-text" style="margin-bottom: 0; max-width: 950px; font-size: 0.95rem; line-height: 1.7;">
                Distinguished Patrons and Senior Advisors form an esteemed global advisory body composed of eminent statesmen, international diplomats, former leaders of multilateral development banks, academic scholars, and ethical authorities. Stewarding PCSDF's intergenerational covenant, Patrons provide high-level strategic counsel, moral leadership, and institutional guidance. They champion the Forum's peace-led, faith- and Indigenous-inspired principles across multilateral forums, diplomatic missions, and international policy architectures, ensuring our collective initiatives protect the rights and well-being of present and future generations.
            </p>
        </div>

        <?php
        $patrons_list = [
            [
                'name' => 'Jean Ayoub',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Recognised for foundational contribution to PCSDF and distinguished international diplomacy. Served 17 years as Secretary-General and CEO of International Social Service (ISS), with global network across 120+ countries defending child rights and cross-border social justice.',
                'linkedin' => 'https://ch.linkedin.com/in/jeanayoub',
                'website' => null,
                'fb' => 'https://www.facebook.com/share/p/1KN3R4atEx/?mibextid=wwXIfr'
            ],
            [
                'name' => 'Dr. Otaviano Canuto',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Former Vice President and Executive Director at the World Bank; former Vice President at Inter-American Development Bank; Senior Fellow at Policy Center for the New South.',
                'linkedin' => 'https://www.linkedin.com/in/otaviano-canuto',
                'website' => 'https://www.policycenter.ma',
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Katherine Marshall',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Senior Fellow at Georgetown University Berkley Center for Religion, Peace, and World Affairs; leading international authority on faith, development, ethics, and world affairs.',
                'linkedin' => 'https://www.linkedin.com/in/katherine-marshall-georgetown',
                'website' => 'https://berkleycenter.georgetown.edu',
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Dr. Frannie Léautier',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'CEO of SouthBridge Investments; former Senior Vice President at African Development Bank; former Vice President and Chief of Staff at the World Bank.',
                'linkedin' => 'https://www.linkedin.com/in/frannie-leautier',
                'website' => 'https://southbridgegroup.com',
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Dr. Azza Karam',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'President & CEO of Lead Integrity; former Secretary General of Religions for Peace; international expert on interfaith multilateralism and gender justice.',
                'linkedin' => 'https://www.linkedin.com/in/azza-karam',
                'website' => 'https://leadintegrity.org',
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Honourable Prasad Kariyawasam',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Former Foreign Secretary of Sri Lanka; former Ambassador to the United States and High Commissioner to India; veteran multilateral diplomat and peace negotiator.',
                'linkedin' => 'https://www.linkedin.com/in/prasad-kariyawasam',
                'website' => null,
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Honourable Mohieddine Ben Jemaa',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Eminent diplomat, multilateral negotiator, and champion of sustainable regional governance and cross-continental diplomatic partnerships.',
                'linkedin' => 'https://www.linkedin.com/in/mohieddine-ben-jemaa',
                'website' => null,
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Professor Milan Kranjc',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Scholar of systemic leadership, crisis dynamics, and organizational psychology; pioneer in organic personal and institutional transformation.',
                'linkedin' => 'https://www.linkedin.com/in/milankranjc',
                'website' => 'https://milankranjc.com',
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Lt. General Shokin Chauhan',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Distinguished military commander, former Chairman of the Ceasefire Monitoring Group, and specialist in strategic defense and conflict resolution.',
                'linkedin' => 'https://www.linkedin.com/in/shokinchauhan',
                'website' => null,
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Dr. Juha Uitto',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Former Director of the Independent Evaluation Office of the Global Environment Facility (GEF); global authority on environmental evaluation and resilience.',
                'linkedin' => 'https://www.linkedin.com/in/juhauitto',
                'website' => null,
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Claire Hutchinson',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Former NATO Secretary General’s Special Representative for Women, Peace and Security; international authority on gender-responsive security.',
                'linkedin' => 'https://www.linkedin.com/in/claire-hutchinson-wps',
                'website' => null,
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Sanjay Rathee',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Space Development Nexus (SDNx); global leader in space technology access, orbital governance, and youth STEM education.',
                'linkedin' => 'https://www.linkedin.com/in/sanjay-rathee',
                'website' => 'https://sdnx.org',
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ],
            [
                'name' => 'Gabe Gabrielle',
                'title' => 'Patron and Senior Advisor',
                'bio' => 'Former NASA Engineer, Director, and inspirational global speaker on STEM, planetary stewardship, and space exploration.',
                'linkedin' => 'https://www.linkedin.com/in/gabegabrielle',
                'website' => null,
                'fb' => 'https://www.facebook.com/share/p/1CGix7ETom/?mibextid=wwXIf'
            ]
        ];
        ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(290px, 1fr)); gap: 1.25rem;">
            <?php foreach ($patrons_list as $p): ?>
                <div style="background: #FFFFFF; border: 1px solid #E5E7EB; border-left: 3px solid #B91C1C; padding: 1.35rem; box-shadow: 0 1px 3px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-size: 0.75rem; color: #B91C1C; font-weight: 700; background: #FEF2F2; border: 1px solid #FEE2E2; padding: 0.15rem 0.5rem; border-radius: 2px;">
                                Verified Patron
                            </span>
                            <span style="font-size: 0.72rem; color: #6B7280; font-weight: 600;">
                                Global Counsel
                            </span>
                        </div>
                        <h3 style="font-size: 1.15rem; color: #000000; font-weight: 800; font-family: var(--font-display); margin-bottom: 0.25rem; line-height: 1.3;">
                            <?= htmlspecialchars($p['name']) ?>
                        </h3>
                        <div style="font-size: 0.82rem; font-weight: 700; color: #B91C1C; margin-bottom: 0.65rem;">
                            <?= htmlspecialchars($p['title']) ?>
                        </div>
                        <p class="supporting-fact-text" style="font-size: 0.85rem; line-height: 1.6; margin-bottom: 1rem;">
                            <?= htmlspecialchars($p['bio']) ?>
                        </p>
                    </div>
                    <div style="border-top: 1px solid #F3F4F6; padding-top: 0.75rem; display: flex; flex-wrap: wrap; gap: 0.65rem; align-items: center;">
                        <a href="<?= htmlspecialchars($p['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" style="font-size: 0.75rem; padding: 0.25rem 0.55rem;">
                            LinkedIn Profile &nearr;
                        </a>
                        <?php if ($p['website']): ?>
                            <a href="<?= htmlspecialchars($p['website']) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 600; color: #374151;">
                                Website &nearr;
                            </a>
                        <?php endif; ?>
                        <a href="<?= htmlspecialchars($p['fb']) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 700; color: #B91C1C; margin-left: auto;">
                            Facebook Dossier &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 3: Entity Partners, Focal Points and Advisors
     ========================================================================== -->
<section class="section" id="partners" style="padding: 2.75rem 0; background: #FFFFFF; border-top: 1px solid #E5E7EB;">
    <div class="container">
        <div style="margin-bottom: 1.5rem; border-bottom: 2px solid #E5E7EB; padding-bottom: 1.25rem;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem; margin-bottom: 0.85rem;">
                <div>
                    <span class="red-block-heading">Entity Partners, Focal Points and Advisors</span>
                </div>
                <div>
                    <a href="https://www.facebook.com/share/p/1czKqS3zu4/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                        View Entity Partners on Facebook Network &nearr;
                    </a>
                </div>
            </div>
            <p class="supporting-fact-text" style="margin-bottom: 0; max-width: 950px; font-size: 0.95rem; line-height: 1.7;">
                Our growing international network brings together organisations and institutional collaborators committed to peacebuilding, sustainable development, humanitarian cooperation, climate action, governance, research, innovation and the regeneration of interconnected systems.
            </p>
        </div>

        <?php
        $official_entities = [
            ['id' => 1, 'abbr' => 'UNIFY', 'name' => 'Unify Platform AG', 'focal' => 'Dr. Takahisa Karita', 'category' => 'Technology & Platform Systems'],
            ['id' => 2, 'abbr' => 'FFP', 'name' => 'The Fund for Peace (FFP)', 'focal' => 'Paul Fraser Turner', 'category' => 'Peace & Security Analytics'],
            ['id' => 3, 'abbr' => 'CDPS', 'name' => 'NGO Committee for Disarmament, Peace and Security', 'focal' => 'Bruce Knotts', 'category' => 'Disarmament & Multilateral Action'],
            ['id' => 4, 'abbr' => '195/265', 'name' => '195 in 265', 'focal' => 'Johann Hoschtialek', 'category' => 'Global Governance & Multilateralism'],
            ['id' => 5, 'abbr' => 'ESGP', 'name' => 'ESG Portfolio Management', 'focal' => 'Christoph Klein', 'category' => 'Regenerative Finance & Asset Stewardship'],
            ['id' => 6, 'abbr' => 'ACSFN', 'name' => 'Arab Civil Society and Feminist Network', 'focal' => 'Fatemah Khafagy', 'category' => 'Civil Society & Feminist Leadership'],
            ['id' => 7, 'abbr' => 'CML', 'name' => 'Center for Multilateral Leadership', 'focal' => 'Thomas Wuchte', 'category' => 'Diplomacy & Multilateral Capacity'],
            ['id' => 8, 'abbr' => 'LYC', 'name' => 'Local Youth Corner, Cameroon', 'focal' => 'Achaleke Christian Leke', 'category' => 'Youth Peacebuilding & Prevention'],
            ['id' => 9, 'abbr' => 'WACA', 'name' => 'Women Are Change Agents', 'focal' => 'Fatemah Khafagy', 'category' => 'Women Empowerment & Action'],
            ['id' => 10, 'abbr' => 'AISDC', 'name' => 'All India Sustainable Development Council', 'focal' => 'Lt. General Shokin Chauhan; Vigil Kanethra', 'category' => 'Strategic Development & Security'],
            ['id' => 11, 'abbr' => 'GSDC', 'name' => 'Global Sustainable Development Council', 'focal' => 'Lt. General Shokin Chauhan; Vigil Kanethra', 'category' => 'Transnational Governance'],
            ['id' => 12, 'abbr' => 'EOW', 'name' => 'Energy for One World', 'focal' => 'Adriaan Kamp', 'category' => 'Energy Transition & Geopolitics'],
            ['id' => 13, 'abbr' => 'RCD', 'name' => 'Royal Chera Dynasty and Family', 'focal' => 'Vigil Kanethra', 'category' => 'Indigenous Wisdom & Ancient Heritage'],
            ['id' => 14, 'abbr' => 'SRIC', 'name' => 'SUNWay Research and Innovation Center', 'focal' => 'Pradeep Sapkota', 'category' => 'Science, Technology & Research'],
            ['id' => 15, 'abbr' => 'SDNx', 'name' => 'Space Development Nexus (SDNx)', 'focal' => 'Sanjay Rathee', 'category' => 'Cosmic Commons & Orbital Governance'],
            ['id' => 16, 'abbr' => 'PILOT', 'name' => 'Pilot International', 'focal' => 'Honourable Robinah Nanyunja', 'category' => 'Environmental Policy & African Ecology'],
            ['id' => 17, 'abbr' => 'WEFA', 'name' => 'Women Entrepreneurship Forum Africa', 'focal' => 'Honourable Robinah Nanyunja', 'category' => 'Enterprise & Gender Equity'],
            ['id' => 18, 'abbr' => 'YEFA', 'name' => 'Youth Entrepreneurship Forum Africa', 'focal' => 'Honourable Robinah Nanyunja', 'category' => 'Youth Innovation & Green Jobs'],
            ['id' => 19, 'abbr' => 'MMF', 'name' => 'Munir Mezyed Foundation', 'focal' => 'Munir Mezyed', 'category' => 'Arts, Poetry & Human Culture'],
            ['id' => 20, 'abbr' => 'VFC', 'name' => 'Vigil Floating City', 'focal' => 'Vigil Kanethra', 'category' => 'Regenerative Ocean Architecture'],
            ['id' => 21, 'abbr' => 'VCV', 'name' => 'Vigil cruisevoy', 'focal' => 'Vigil Kanethra', 'category' => 'Green Maritime & Blue Economy'],
            ['id' => 22, 'abbr' => 'WPB', 'name' => 'World Peace Board', 'focal' => 'Lt. General Shokin Chauhan; Vigil Kanethra', 'category' => 'Global Peace Diplomacy']
        ];
        ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.25rem;">
            <?php foreach ($official_entities as $ent): ?>
                <div style="background: #FFFFFF; border: 1px solid #E5E7EB; border-left: 3px solid #B91C1C; padding: 1.35rem; box-shadow: 0 1px 3px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.65rem;">
                            <!-- Crisp Monogram Emblem Frame -->
                            <div style="background: #FEF2F2; border: 1px solid #FEE2E2; color: #B91C1C; font-weight: 800; font-size: 0.75rem; padding: 0.2rem 0.55rem; font-family: var(--font-display); letter-spacing: 0.05em; border-radius: 2px;">
                                <?= htmlspecialchars($ent['abbr']) ?>
                            </div>
                            <span style="font-size: 0.72rem; color: #6B7280; font-weight: 600;">
                                Verified Partner
                            </span>
                        </div>

                        <h3 style="font-size: 1.1rem; font-weight: 800; color: #000000; font-family: var(--font-display); margin-bottom: 0.4rem; line-height: 1.35;">
                            <?= htmlspecialchars($ent['name']) ?>
                        </h3>

                        <div style="font-size: 0.75rem; color: #6B7280; font-weight: 600; margin-bottom: 0.75rem;">
                            <?= htmlspecialchars($ent['category']) ?>
                        </div>

                        <div style="background: #F9FAFB; border: 1px solid #E5E7EB; border-left: 2px solid #B91C1C; padding: 0.55rem 0.75rem; margin-bottom: 0.85rem;">
                            <div style="font-size: 0.68rem; text-transform: uppercase; font-weight: 800; color: #B91C1C; letter-spacing: 0.05em;">
                                Designated Focal Point
                            </div>
                            <div style="font-size: 0.88rem; font-weight: 700; color: #000000;">
                                <?= htmlspecialchars($ent['focal']) ?>
                            </div>
                        </div>
                    </div>

                    <div style="border-top: 1px solid #F3F4F6; padding-top: 0.65rem; display: flex; justify-content: space-between; align-items: center;">
                        <a href="https://www.facebook.com/share/p/1czKqS3zu4/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" style="font-size: 0.75rem; font-weight: 700; color: #B91C1C;">
                            Facebook Network &rarr;
                        </a>
                        <a href="<?= BASE_URL ?>/contact.php?partner=<?= urlencode($ent['name']) ?>" style="font-size: 0.75rem; font-weight: 600; color: #374151;">
                            Inquire / Connect &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
