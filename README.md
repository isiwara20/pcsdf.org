# The Peace-Led Climate-Friendly Sustainable Development Forum (PCSDF)
## Web Platform & Constitutional Systems Portal

### Overview
This is the official web portal for **The Peace-Led Climate-Friendly Sustainable Development Forum (PCSDF)**, featuring the world-first **PFICF-RSSDF** (Peace-Led, Faith- and Indigenous-Inspired Climate-Friendly Regenerative Sustainability & Sustainable Development Framework) designed for governing sustainability in an era of polycrisis.

### Features Included
- **Official Brand & Logo Integration**: Features the official Peace Dove insignia with red/orange calligraphic lettering.
- **Modern Responsive Design**: Built with modern typography (Plus Jakarta Sans & Playfair Display), glassmorphism cards, system badges, responsive mobile menu drawer, and animated metric counters.
- **Institutional Governance**: Full profiles for the **Board of Directors** and **11 Distinguished Patrons**, including an in-depth spotlight on **Jean Ayoub** (Patron & Senior Advisor; 17 years Sec-Gen/CEO of International Social Service).
- **The 22 Entity Partners**: Comprehensive directory of all 22 institutional partners, focal points, and advisors across peace, security, regenerative finance, feminist networks, indigenous heritage, and cosmic commons.
- **PFICF-RSSDF Constitutional Framework**: Deep dive into the **30-System Architecture**, the **332-Sector Taxonomy**, the **Nine Regenerative Pillars**, the **Integrated Stewardship Hive**, and **Intergenerational Finance**.
- **Conflict & Peace Tracker**: Analysis of the ACLED Conflict Index, CFR Global Conflict Tracker, War Watch, Fragile States Index, and historical peace treaties (San Francisco 1951, Paris 1973, Camp David 1978, Indo-Lanka 1987, Oslo 1993, Colombia 2016, Abraham Accords 2020).
- **Poems & Planetary Reflections**: Creative and philosophical expressions honouring voices of future generations and living Earth.
- **Interactive Contact Portal**: Direct inquiry form storing submissions into MySQL/phpMyAdmin with validation and email/WhatsApp direct links.
- **Administration & Database Hub (`/admin`)**: Overview dashboard tracking messages, partners, patrons, and providing a 1-click database installer.
- **Offline High-Reliability Fallback**: If MySQL hasn't been started yet in XAMPP, the entire website continues to function seamlessly with structured seed data!

---

### How to Run in XAMPP

1. **Start Apache & MySQL**:
   - Open your **XAMPP Control Panel**.
   - Click **Start** for **Apache** and **MySQL**.

2. **Accessing via Browser**:
   - Website URL: `http://localhost/pcsdf.org/`
   - Admin & DB Portal: `http://localhost/pcsdf.org/admin/`

3. **Database Setup with phpMyAdmin**:
   - **Method A (Automatic 1-Click)**:
     - Visit `http://localhost/pcsdf.org/admin/setup.php` and click **"Click Here to Automatically Install & Seed Database"**.
   - **Method B (via phpMyAdmin UI)**:
     - Open `http://localhost/phpmyadmin/`
     - Click the **Import** tab.
     - Choose the file: `d:\Chandila\XAMP\htdocs\pcsdf.org\sql\pcsdf_db.sql`
     - Click **Go** at the bottom.

---

### Project Structure
```
d:\Chandila\XAMP\htdocs\pcsdf.org\
│
├── index.php                 # Home Landing Page with all core highlights
├── about.php                 # Institutional Profile, Board, 11 Patrons & Jean Ayoub Spotlight
├── framework.php             # PFICF-RSSDF 30-System & 9 Pillars Constitutional Architecture
├── network.php               # Global Network-of-Networks & 22 Entity Partners
├── peace-tracker.php         # Global Conflict Index & Historic Peace Accords
├── poems.php                 # Poems, Reflections & Voices for Future Generations
├── contact.php               # Interactive Contact Form & Singapore Secretariat
├── disclaimer.php            # Official Legal Disclaimer
├── privacy-policy.php        # PDPA & Privacy Policy
│
├── includes/
│   ├── config.php            # Site configuration, DB credentials, URLs
│   ├── db.php                # PDO Database connection with automated fallback
│   ├── data.php              # Comprehensive dataset (Board, Patrons, 22 Partners, Accords, Pillars)
│   ├── header.php            # Modern sticky navigation with official logo
│   └── footer.php            # Institutional footer with links & Singapore address
│
├── admin/
│   ├── index.php             # Admin Dashboard & Inquiries viewer
│   ├── partners.php          # 22 Entity Partners management
│   ├── patrons.php           # Board & Patrons directory
│   └── setup.php             # 1-Click Database Setup & Migrator
│
├── sql/
│   └── pcsdf_db.sql          # Clean MySQL database schema & seed script
│
└── assets/
    ├── images/
    │   └── pcsdf-logo.jpg    # Verified official peace dove insignia logo
    ├── css/
    │   └── style.css         # Ultra-modern institutional responsive styling
    └── js/
        └── main.js           # Navigation, counters, and interactive filtering
```
