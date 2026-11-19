-- Database Schema for The Peace-Led Climate-Friendly Sustainable Development Forum (PCSDF)
-- Compatible with MySQL / MariaDB / phpMyAdmin

CREATE DATABASE IF NOT EXISTS `pcsdf_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `pcsdf_db`;

-- 1. Inquiries / Contact Messages Table
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `organization` VARCHAR(200) DEFAULT NULL,
  `category` VARCHAR(100) DEFAULT 'General Inquiry',
  `subject` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `status` ENUM('new', 'in_review', 'replied') DEFAULT 'new',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2. Board of Directors Table
CREATE TABLE IF NOT EXISTS `board_members` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(150) NOT NULL,
  `role` VARCHAR(150) NOT NULL,
  `bio` TEXT,
  `linkedin_url` VARCHAR(255) DEFAULT NULL,
  `display_order` INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 3. Patrons Table
CREATE TABLE IF NOT EXISTS `patrons` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(150) NOT NULL,
  `title_role` VARCHAR(255) NOT NULL,
  `bio` TEXT,
  `linkedin_url` VARCHAR(255) DEFAULT NULL,
  `is_featured` TINYINT(1) DEFAULT 0,
  `display_order` INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. Entity Partners Table
CREATE TABLE IF NOT EXISTS `entity_partners` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `focal_point` VARCHAR(255) NOT NULL,
  `category` VARCHAR(100) DEFAULT 'International Partner',
  `description` TEXT,
  `website_url` VARCHAR(255) DEFAULT NULL,
  `display_order` INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. Historic Peace Accords Table
CREATE TABLE IF NOT EXISTS `peace_accords` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `year` VARCHAR(50) NOT NULL,
  `summary` TEXT NOT NULL,
  `key_figure` VARCHAR(150) DEFAULT NULL,
  `link_url` VARCHAR(255) DEFAULT NULL,
  `display_order` INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 6. Poems and Reflections Table
CREATE TABLE IF NOT EXISTS `poems` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `author` VARCHAR(150) NOT NULL,
  `theme` VARCHAR(100) DEFAULT 'Regeneration & Peace',
  `content` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- SEED DATA
-- --------------------------------------------------------

-- Seed Board Members
INSERT INTO `board_members` (`name`, `role`, `bio`, `display_order`) VALUES
('Chaitri N. Hapugalle', 'Founder & Board Director', 'Lead visionary and architect of the PFICF-RSSDF framework. Advocating for intergenerational justice, planetary boundaries, and ethical stewardship across all living systems.', 1),
('Saji Prelis', 'Board Director', 'Pioneer in youth peacebuilding, violent conflict mitigation, and international civic transformation networks.', 2),
('Paul Fraser Turner', 'Board Director & Focal Point (The Fund for Peace)', 'Senior strategist in fragile states analytics, human security indices, and sustainable stabilization across polycrisis regions.', 3),
('Christoph Klein', 'Board Director & Focal Point (ESG Portfolio Management)', 'Specialist in regenerative sustainable finance, SDG-aligned portfolio allocation, and capital transition frameworks.', 4),
('Thomas Wuchte', 'Board Director & Focal Point (Center for Multilateral Leadership)', 'Distinguished expert in multilateral diplomacy, international institutional governance, and cross-border security cooperation.', 5);

-- Seed Patrons
INSERT INTO `patrons` (`name`, `title_role`, `bio`, `is_featured`, `display_order`) VALUES
('Jean Ayoub', 'Patron & Senior Advisor', 'Recognised for his foundational contribution to PCSDF and distinguished international diplomacy, serving 17 years as Secretary-General and CEO of International Social Service across 120+ nations.', 1, 1),
('Otaviano Canuto', 'Distinguished Patron', 'Former Vice President and Executive Director at the World Bank; Senior Fellow at Policy Center for the New South.', 0, 2),
('Katherine Marshall', 'Distinguished Patron', 'Senior Fellow at Georgetown University Berkeley Center for Religion, Peace, and World Affairs; leading voice on faith and development.', 0, 3),
('Dr. Frannie Léautier', 'Distinguished Patron', 'Globally renowned finance leader, CEO of SouthBridge Investments, former Vice President of the World Bank and African Development Bank.', 0, 4),
('Dr. Azza Karam', 'Distinguished Patron', 'President and CEO of Lead Integrity; former Secretary General of Religions for Peace; expert on interfaith diplomacy.', 0, 5),
('Honourable Prasad Kariyawasam', 'Distinguished Patron', 'Former Foreign Secretary of Sri Lanka, former Ambassador to the United States and High Commissioner to India.', 0, 6),
('Honourable Mohieddine Ben Jemaa', 'Distinguished Patron', 'Eminent diplomat, multilateral negotiator, and advocate for sustainable regional integration and governance.', 0, 7),
('Dr. Juha Uitto', 'Distinguished Patron', 'Former Director of the Independent Evaluation Office of the Global Environment Facility (GEF); environmental evaluation authority.', 0, 8),
('Claire Hutchinson', 'Distinguished Patron', 'Former NATO Secretary General’s Special Representative for Women, Peace and Security; human rights and gender specialist.', 0, 9),
('Sanjay Rathee', 'Distinguished Patron & SDNx Focal Point', 'Space diplomat and aerospace pioneer connecting planetary boundaries to orbital sustainability and cosmic commons.', 0, 10),
('Gabe Gabrielle', 'Distinguished Patron', 'Former NASA Engineer, Director, and inspirational global speaker on science, discovery, and planetary stewardship.', 0, 11);

-- Seed 22 Entity Partners
INSERT INTO `entity_partners` (`name`, `focal_point`, `category`, `description`, `display_order`) VALUES
('Unify Platform AG', 'Dr. Takahisa Karita', 'Technology & Platform', 'Collaborative decentralised network architectures enabling ethical digital commons and systemic alignment.', 1),
('The Fund for Peace (FFP)', 'Paul Fraser Turner', 'Peace & Security', 'Publishers of the Fragile States Index and leaders in data-driven human security analytics and conflict prevention.', 2),
('NGO Committee for Disarmament, Peace and Security', 'Bruce Knotts', 'Multilateral & UN NGO', 'Advocating within the United Nations system for comprehensive disarmament, global demilitarisation, and human security.', 3),
('195 in 265', 'Johann Hoschtialek', 'Global Governance', 'Global diplomatic initiative advancing multilateral coordination across 195 nations.', 4),
('ESG Portfolio Management', 'Christoph Klein', 'Regenerative Finance', 'Independent asset management aligning investments with genuine ecological limits, climate justice, and the SDGs.', 5),
('Arab Civil Society and Feminist Network', 'Fatemah Khafagy', 'Civil Society & Gender', 'Advancing peace, social protection, and gender-transformative governance throughout the MENA region.', 6),
('Center for Multilateral Leadership', 'Thomas Wuchte', 'Leadership & Diplomacy', 'Strengthening multilateral competencies, peace negotiations, and transboundary policy cooperation.', 7),
('Local Youth Corner, Cameroon', 'Achaleke Christian Leke', 'Youth & Community', 'Award-winning youth-led peacebuilding organisation countering violent extremism and building community resilience.', 8),
('Women Are Change Agents', 'Fatemah Khafagy', 'Women & Empowerment', 'Empowering grassroots women leaders as vital architects of peace, climate adaptation, and community stewardship.', 9),
('All India Sustainable Development Council', 'Lt. General Shokin Chauhan; Vigil Kanethra', 'Sustainable Development', 'High-level strategic institution convening defense, civil society, and environmental leaders for sustainable development in South Asia.', 10),
('Global Sustainable Development Council', 'Lt. General Shokin Chauhan; Vigil Kanethra', 'Global Council', 'International council fostering inter-regional cooperation on planetary limits and peace-led development.', 11),
('Energy for One World', 'Adriaan Kamp', 'Energy Transition', 'Global energy think tank navigating the planetary energy trilemma: clean energy, social stability, and ecological balance.', 12),
('Royal Chera Dynasty and Family', 'Vigil Kanethra', 'Indigenous & Cultural Heritage', 'Preserving ancient ecological ethics, traditional guardianship, and timeless heritage for modern governance.', 13),
('SUNWay Research and Innovation Center', 'Pradeep Sapkota', 'Research & Innovation', 'Frontier scientific research center pioneering renewable technologies, climate adaptation, and circular models.', 14),
('Space Development Nexus (SDNx)', 'Sanjay Rathee', 'Cosmic Commons & Space', 'Advancing orbital environmental protection, space sustainability treaties, and Earth-to-orbit stewardship.', 15),
('Pilot International', 'Honourable Robinah Nanyunja', 'International Development', 'International environmental governance organisation championing climate resilience and community adaptation in Africa.', 16),
('Women Entrepreneurship Forum Africa', 'Honourable Robinah Nanyunja', 'Economic Empowerment', 'Fostering green enterprise, equitable value chains, and economic sovereignty for women across Africa.', 17),
('Youth Entrepreneurship Forum Africa', 'Honourable Robinah Nanyunja', 'Youth Enterprise', 'Catalysing next-generation regenerative businesses and youth-led climate solutions across the African continent.', 18),
('Munir Mezyed Foundation', 'Munir Mezyed', 'Arts & Humanities', 'Fostering world peace, cultural empathy, and intercultural dialogue through poetry, literature, and the arts.', 19),
('Vigil Floating City', 'Vigil Kanethra', 'Regenerative Architecture', 'Pioneering climate-resilient marine habitations, blue economy infrastructure, and sea-level rise adaptation.', 20),
('Vigil Cruisevoy', 'Vigil Kanethra', 'Sustainable Maritime', 'Innovations in green maritime logistics, eco-tourism, and ocean preservation.', 21),
('World Peace Board', 'Lt. General Shokin Chauhan; Vigil Kanethra', 'Peace & Defense Governance', 'Global forum integrating strategic security, disarmament, and regenerative sustainability.', 22);

-- Seed Historic Peace Accords
INSERT INTO `peace_accords` (`title`, `year`, `summary`, `key_figure`, `link_url`, `display_order`) VALUES
('San Francisco Peace Treaty', '1951', 'Officially brought WWII Allied occupation of Japan to a close. Famously marked by the speech of J.R. Jayawardene pleading for Japan''s sovereignty quoting the Buddha: "Hatred ceases not by hatred, but by love."', 'J.R. Jayawardene (Sri Lanka)', 'https://island.lk/jrjs-san-francisco-speech-that-won-japans-eternal-gratitude/', 1),
('Paris Peace Accords', '1973', 'Ended direct U.S. military involvement in the Vietnam War and established a negotiated framework for peace.', 'Henry Kissinger & Le Duc Tho', 'https://www.ebsco.com/research-starters/history/analysis-paris-peace-accords', 2),
('Camp David Accords', '1978', 'Brokered at Camp David by the United States, leading directly to the 1979 Egypt-Israel Peace Treaty.', 'Anwar Sadat, Menachem Begin, Jimmy Carter', 'https://history.state.gov/milestones/1977-1980/camp-david', 3),
('Indo-Lanka Peace Accord', '1987', 'Signed in Colombo to address the Sri Lankan Civil War, instituting power devolution to provincial councils and deployment of peacekeeping forces.', 'Rajiv Gandhi & J.R. Jayawardene', '#', 4),
('Oslo Accords', '1993', 'Facilitated historic direct negotiations between Israel and the PLO, laying foundations for Palestinian interim self-government.', 'Yitzhak Rabin & Yasser Arafat', 'https://history.state.gov/milestones/1993-2000/oslo', 5),
('Colombian Peace Agreement', '2016', 'Historic negotiated end to over five decades of conflict between the Colombian government and the FARC-EP.', 'Juan Manuel Santos', 'https://www.eeas.europa.eu/eeas/historical-peace-agreement-colombia_und_en', 6),
('Abraham Accords', '2020', 'Diplomatic normalization agreements between Israel and several Arab nations, including the UAE, Bahrain, and Morocco.', 'Regional Representatives', 'https://2017-2021.state.gov/the-abraham-accords/', 7);

-- Seed Poems & Reflections
INSERT INTO `poems` (`title`, `author`, `theme`, `content`) VALUES
('Who Speaks For Tomorrow?', 'Chaitri (Chai) N. Hapugalle', 'Intergenerational Stewardship', 
'If future generations, nature, and the global commons\nCannot speak for themselves, who will speak for them?\n\nExploring life’s intricate tapestry,\nEach choice reveals regenerative pathways toward the exceptional—\nCalling for innovation to imagine what does not yet exist,\nInquisitiveness to keep learning beyond the familiar,\nAnd bravery to step forward despite uncertainty.\n\nThrough this spirit, challenges become teachers,\nHorizons expand, and the journey itself becomes\nA deeply meaningful and richly satisfying voyage.\n\nFrom Earth’s fragile mantle to orbital light,\nWe hold the covenant of all living systems.'),

('The Living Covenant', 'PCSDF Fellowship', 'Planetary Consciousness',
'Not by iron, nor by wall,\nShall the fractured systems heal.\nOnly when the quiet call\nOf living earth is what we feel.\n\nAcross the oceans, skies, and stars,\nBeyond the grief of ancient wars,\nWe weave the circle, strand by strand,\nTo bless the sky and mend the land.');
