<?php
/**
 * Static & Seed Data for PCSDF
 * Contains complete institutional structures, board, patrons, entity partners, and framework systems
 */

$DEFAULT_BOARD = [
    [
        'id' => 1,
        'name' => 'Chaitri N. Hapugalle',
        'role' => 'Founder & Board Director',
        'bio' => 'Architect of the PFICF-RSSDF framework. Leading the planetary, intergenerational stewardship agenda linking local communities, human rights, and the global and cosmic commons.',
        'linkedin' => 'https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr'
    ],
    [
        'id' => 2,
        'name' => 'Saji Prelis',
        'role' => 'Board Director',
        'bio' => 'International leader in youth peacebuilding, violent conflict mitigation, and civic transformation across multilateral frameworks.',
        'linkedin' => 'https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr'
    ],
    [
        'id' => 3,
        'name' => 'Paul Fraser Turner',
        'role' => 'Board Director & Focal Point',
        'bio' => 'Senior strategist with The Fund for Peace (FFP). Expert in fragile states indices, peace accords, and systemic human security tracking.',
        'linkedin' => 'https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr'
    ],
    [
        'id' => 4,
        'name' => 'Christoph Klein',
        'role' => 'Board Director & Focal Point',
        'bio' => 'Managing Partner at ESG Portfolio Management. Pioneer in regenerative finance, green bond verification, and intergenerational capital allocation.',
        'linkedin' => 'https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr'
    ],
    [
        'id' => 5,
        'name' => 'Thomas Wuchte',
        'role' => 'Board Director & Focal Point',
        'bio' => 'Executive Director of the Center for Multilateral Leadership. Decades of diplomatic leadership in transnational security and multilateral institution-building.',
        'linkedin' => 'https://www.facebook.com/share/p/19fiPta3M2/?mibextid=wwXIfr'
    ]
];

$DEFAULT_PATRONS = [
    [
        'id' => 1,
        'name' => 'Jean Ayoub',
        'title_role' => 'Patron and Senior Advisor',
        'bio' => 'Recognised for foundational contributions to PCSDF and distinguished international diplomacy. Served 17 years as Secretary-General and CEO of International Social Service (ISS), with global networks across 120+ countries.',
        'linkedin' => 'https://ch.linkedin.com/in/jeanayoub',
        'is_featured' => true
    ],
    [
        'id' => 2,
        'name' => 'Otaviano Canuto',
        'title_role' => 'Distinguished Patron',
        'bio' => 'Former Vice President and Executive Director at the World Bank; Senior Fellow at the Policy Center for the New South.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 3,
        'name' => 'Katherine Marshall',
        'title_role' => 'Distinguished Patron',
        'bio' => 'Senior Fellow at Georgetown University’s Berkley Center for Religion, Peace, and World Affairs; leading expert on faith, development, and ethics.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 4,
        'name' => 'Dr. Frannie Léautier',
        'title_role' => 'Distinguished Patron',
        'bio' => 'CEO of SouthBridge Investments; former Senior Vice President at African Development Bank and former Vice President at World Bank.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 5,
        'name' => 'Dr. Azza Karam',
        'title_role' => 'Distinguished Patron',
        'bio' => 'President and CEO of Lead Integrity; former Secretary General of Religions for Peace; expert on interfaith multilateralism and gender justice.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 6,
        'name' => 'Honourable Prasad Kariyawasam',
        'title_role' => 'Distinguished Patron',
        'bio' => 'Former Foreign Secretary of Sri Lanka; former Ambassador to the United States and High Commissioner to India; veteran multilateral diplomat.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 7,
        'name' => 'Honourable Mohieddine Ben Jemaa',
        'title_role' => 'Distinguished Patron',
        'bio' => 'Eminent diplomat, multilateral negotiator, and champion of sustainable regional governance and cross-continental partnerships.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 8,
        'name' => 'Dr. Juha Uitto',
        'title_role' => 'Distinguished Patron',
        'bio' => 'Former Director of the Independent Evaluation Office of the Global Environment Facility (GEF); global scholar on environmental resilience.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 9,
        'name' => 'Claire Hutchinson',
        'title_role' => 'Distinguished Patron',
        'bio' => 'Former NATO Secretary General’s Special Representative for Women, Peace and Security; international authority on gender-responsive security.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 10,
        'name' => 'Sanjay Rathee',
        'title_role' => 'Distinguished Patron & SDNx Focal Point',
        'bio' => 'Founder of Space Development Nexus (SDNx); leader in space sustainability treaties, orbital commons preservation, and Earth-to-orbit governance.',
        'linkedin' => '#',
        'is_featured' => false
    ],
    [
        'id' => 11,
        'name' => 'Gabe Gabrielle',
        'title_role' => 'Distinguished Patron',
        'bio' => 'Former NASA Engineer, Director, and inspirational global speaker on STEM, discovery, and intergenerational stewardship of planet Earth.',
        'linkedin' => '#',
        'is_featured' => false
    ]
];

$DEFAULT_ENTITY_PARTNERS = [
    [
        'id' => 1,
        'name' => 'Unify Platform AG',
        'focal_point' => 'Dr. Takahisa Karita',
        'category' => 'Technology & Platform Systems',
        'description' => 'Decentralized platforms empowering ethical digital commons, knowledge exchange, and multi-stakeholder governance.'
    ],
    [
        'id' => 2,
        'name' => 'The Fund for Peace (FFP)',
        'focal_point' => 'Paul Fraser Turner',
        'category' => 'Peace & Security Analytics',
        'description' => 'Leading non-profit dedicated to preventing violent conflict and promoting sustainable security; publishers of the Fragile States Index.'
    ],
    [
        'id' => 3,
        'name' => 'NGO Committee for Disarmament, Peace and Security',
        'focal_point' => 'Bruce Knotts',
        'category' => 'Disarmament & Multilateral Action',
        'description' => 'Consultative body working within the UN system to advocate for arms control, nuclear abolition, and peace education.'
    ],
    [
        'id' => 4,
        'name' => '195 in 265',
        'focal_point' => 'Johann Hoschtialek',
        'category' => 'Global Governance & Multilateralism',
        'description' => 'Innovative international initiative connecting 195 sovereign nations across 265 operational domains for collaborative global action.'
    ],
    [
        'id' => 5,
        'name' => 'ESG Portfolio Management',
        'focal_point' => 'Christoph Klein',
        'category' => 'Regenerative Finance & Asset Stewardship',
        'description' => 'European boutique asset manager strictly aligning portfolios with planetary boundaries, SDG impact, and climate transition.'
    ],
    [
        'id' => 6,
        'name' => 'Arab Civil Society and Feminist Network',
        'focal_point' => 'Fatemah Khafagy',
        'category' => 'Civil Society & Feminist Leadership',
        'description' => 'Coalition of grassroots Arab civil society bodies promoting human rights, gender equality, and sustainable community empowerment.'
    ],
    [
        'id' => 7,
        'name' => 'Center for Multilateral Leadership',
        'focal_point' => 'Thomas Wuchte',
        'category' => 'Diplomacy & Multilateral Capacity',
        'description' => 'Promoting diplomatic leadership, conflict mediation capacity, and multilateral policy convergence in contested regions.'
    ],
    [
        'id' => 8,
        'name' => 'Local Youth Corner, Cameroon',
        'focal_point' => 'Achaleke Christian Leke',
        'category' => 'Youth Peacebuilding & Prevention',
        'description' => 'National youth-led NGO building resilience against violent extremism and fostering sustainable livelihoods in Central Africa.'
    ],
    [
        'id' => 9,
        'name' => 'Women Are Change Agents',
        'focal_point' => 'Fatemah Khafagy',
        'category' => 'Women Empowerment & Action',
        'description' => 'Movement mobilizing women as active architects of community resilience, peace accords, and ecological defense.'
    ],
    [
        'id' => 10,
        'name' => 'All India Sustainable Development Council',
        'focal_point' => 'Lt. General Shokin Chauhan; Vigil Kanethra',
        'category' => 'Strategic Development & Security',
        'description' => 'Apex national dialogue body connecting military veterans, scientists, and policy experts on sustainable development and resilience.'
    ],
    [
        'id' => 11,
        'name' => 'Global Sustainable Development Council',
        'focal_point' => 'Lt. General Shokin Chauhan; Vigil Kanethra',
        'category' => 'Transnational Governance',
        'description' => 'International body advocating cross-border ecological corridors, transboundary water treaties, and regenerative cooperation.'
    ],
    [
        'id' => 12,
        'name' => 'Energy for One World',
        'focal_point' => 'Adriaan Kamp',
        'category' => 'Energy Transition & Geopolitics',
        'description' => 'Global energy governance think tank addressing energy security, equity, and environmental regeneration simultaneously.'
    ],
    [
        'id' => 13,
        'name' => 'Royal Chera Dynasty and Family',
        'focal_point' => 'Vigil Kanethra',
        'category' => 'Indigenous Wisdom & Ancient Heritage',
        'description' => 'Custodian of millennia-old maritime wisdom, traditional forestry ethics, and indigenous restorative practices.'
    ],
    [
        'id' => 14,
        'name' => 'SUNWay Research and Innovation Center',
        'focal_point' => 'Pradeep Sapkota',
        'category' => 'Science, Technology & Research',
        'description' => 'Leading innovation hub dedicated to applied climate research, clean technologies, and circular economy implementation.'
    ],
    [
        'id' => 15,
        'name' => 'Space Development Nexus (SDNx)',
        'focal_point' => 'Sanjay Rathee',
        'category' => 'Cosmic Commons & Orbital Governance',
        'description' => 'International consortium stewarding outer space sustainability, orbital debris mitigation, and celestial environmental law.'
    ],
    [
        'id' => 16,
        'name' => 'Pilot International',
        'focal_point' => 'Honourable Robinah Nanyunja',
        'category' => 'Environmental Policy & African Ecology',
        'description' => 'Pan-African environmental organization championing sustainable forestry, ecological stewardship, and international climate governance.'
    ],
    [
        'id' => 17,
        'name' => 'Women Entrepreneurship Forum Africa',
        'focal_point' => 'Honourable Robinah Nanyunja',
        'category' => 'Enterprise & Gender Equity',
        'description' => 'Empowering women-led enterprises to scale sustainable agribusiness, renewable energy solutions, and equitable supply chains.'
    ],
    [
        'id' => 18,
        'name' => 'Youth Entrepreneurship Forum Africa',
        'focal_point' => 'Honourable Robinah Nanyunja',
        'category' => 'Youth Innovation & Green Jobs',
        'description' => 'Equipping young African leaders with regenerative business skills, tech innovation labs, and circular entrepreneurship seed funding.'
    ],
    [
        'id' => 19,
        'name' => 'Munir Mezyed Foundation',
        'focal_point' => 'Munir Mezyed',
        'category' => 'Arts, Poetry & Human Culture',
        'description' => 'Fostering world peace, cultural empathy, and intercultural dialogue through poetry, translation, and literary diplomacy.'
    ],
    [
        'id' => 20,
        'name' => 'Vigil Floating City',
        'focal_point' => 'Vigil Kanethra',
        'category' => 'Regenerative Ocean Architecture',
        'description' => 'Pioneering floating amphibious resilient settlements, ocean energy harvesting, and coastal climate adaptation.'
    ],
    [
        'id' => 21,
        'name' => 'Vigil Cruisevoy',
        'focal_point' => 'Vigil Kanethra',
        'category' => 'Green Maritime & Blue Economy',
        'description' => 'Transformative eco-maritime transport systems aligning marine logistics with zero emissions and biodiversity protection.'
    ],
    [
        'id' => 22,
        'name' => 'World Peace Board',
        'focal_point' => 'Lt. General Shokin Chauhan; Vigil Kanethra',
        'category' => 'Global Peace Architecture',
        'description' => 'International initiative uniting defense leaders, peace researchers, and diplomats to advance peaceful resolution of systemic conflicts.'
    ]
];

$DEFAULT_ACCORDS = [
    [
        'title' => 'San Francisco Peace Treaty (1951)',
        'year' => '1951',
        'summary' => 'Formally concluded WWII between the Allied Powers and Japan. J.R. Jayawardene delivered an unforgettable plea for magnanimity, quoting the Buddha: "Hatred ceases not by hatred, but by love" — securing Japan’s rehabilitation into the family of nations.',
        'key_figure' => 'J. R. Jayawardene (Sri Lanka)',
        'link' => 'https://island.lk/jrjs-san-francisco-speech-that-won-japans-eternal-gratitude/'
    ],
    [
        'title' => 'Paris Peace Accords (1973)',
        'year' => '1973',
        'summary' => 'Ended direct U.S. combat involvement in Vietnam, demonstrating how sustained diplomatic negotiation can de-escalate protracted ideological warfare.',
        'key_figure' => 'Henry Kissinger & Le Duc Tho',
        'link' => 'https://www.ebsco.com/research-starters/history/analysis-paris-peace-accords'
    ],
    [
        'title' => 'Camp David Accords (1978)',
        'year' => '1978',
        'summary' => 'Landmark summit resulting in the first peace treaty between Israel and an Arab nation (Egypt), demonstrating the transformative power of third-party mediation.',
        'key_figure' => 'Anwar Sadat, Menachem Begin, Jimmy Carter',
        'link' => 'https://history.state.gov/milestones/1977-1980/camp-david'
    ],
    [
        'title' => 'Indo-Lanka Peace Accord (1987)',
        'year' => '1987',
        'summary' => 'Bilateral accord between India and Sri Lanka aimed at resolving ethnic civil strife, creating provincial devolution councils and establishing peacekeeping operations.',
        'key_figure' => 'Rajiv Gandhi & J. R. Jayawardene',
        'link' => '#'
    ],
    [
        'title' => 'Oslo Accords (1993)',
        'year' => '1993',
        'summary' => 'Historic breakthrough establishing direct negotiations and mutual recognition between Israel and the Palestine Liberation Organization (PLO) for Palestinian self-governance.',
        'key_figure' => 'Yitzhak Rabin & Yasser Arafat',
        'link' => 'https://history.state.gov/milestones/1993-2000/oslo'
    ],
    [
        'title' => 'Colombian Peace Agreement (2016)',
        'year' => '2016',
        'summary' => 'Exemplary negotiated accord ending 50+ years of armed conflict between the State of Colombia and the FARC-EP guerilla movement, featuring truth and reconciliation tribunals.',
        'key_figure' => 'Juan Manuel Santos',
        'link' => 'https://www.eeas.europa.eu/eeas/historical-peace-agreement-colombia_und_en'
    ],
    [
        'title' => 'Abraham Accords (2020)',
        'year' => '2020',
        'summary' => 'Series of normalization treaties between Israel and regional Arab partners including the UAE, Bahrain, Sudan, and Morocco, opening new channels for economic and technological exchange.',
        'key_figure' => 'Regional Diplomatic Envoys',
        'link' => 'https://2017-2021.state.gov/the-abraham-accords/'
    ]
];

$NINE_PILLARS = [
    [
        'name' => 'Retention',
        'icon' => 'shield-check',
        'summary' => 'Halting further degradation by preserving existing pristine biomes, carbon sinks, and indigenous ancestral lands before loss occurs.'
    ],
    [
        'name' => 'Conservation',
        'icon' => 'leaf',
        'summary' => 'Systematic scientific and cultural stewardship of vulnerable wildlife, biodiversity corridors, water basins, and seed heritage.'
    ],
    [
        'name' => 'Restoration',
        'icon' => 'arrow-path',
        'summary' => 'Active rehabilitation of degraded lands, rewilding landscapes, cleansing polluted waterways, and rebuilding damaged ecological balances.'
    ],
    [
        'name' => 'Regeneration',
        'icon' => 'sparkles',
        'summary' => 'Designing human and ecological systems to continuously self-renew, produce net-positive life outcomes, and enrich fertility across generations.'
    ],
    [
        'name' => 'Circularity',
        'icon' => 'arrow-repeat',
        'summary' => 'Eliminating waste and toxic discharge through cradle-to-cradle closed-loop material cycles, remanufacturing, and bio-compatible materials.'
    ],
    [
        'name' => 'Mitigation',
        'icon' => 'speedometer2',
        'summary' => 'Rapid, aggressive decarbonization of power, industry, transport, and agriculture to stay well within planetary tipping-point thresholds.'
    ],
    [
        'name' => 'Adaptation',
        'icon' => 'shield-shaded',
        'summary' => 'Building deep socio-ecological resilience and climate-proof infrastructure for vulnerable communities facing extreme climate disruptions.'
    ],
    [
        'name' => 'Transformation',
        'icon' => 'lightning-charge',
        'summary' => 'Fundamental structural restructuring of legal, economic, educational, and governance institutions away from extraction toward stewardship.'
    ],
    [
        'name' => 'Climate Justice',
        'icon' => 'balance-scale',
        'summary' => 'Upholding intergenerational equity, honoring indigenous sovereignty, and guaranteeing reparative financing for the Global South and the vulnerable.'
    ]
];
