<?php
/**
 * Muhammad Musab - Full-Stack Portfolio Data Source
 * Contains all static datasets and fallback structures for projects, testimonials, services, and pricing.
 */

// 1. Projects Data (3 Normal Websites + 3 3D Websites)
$projects_data = [
    [
        'id' => 1,
        'title' => 'Shale Pizzas',
        'slug' => 'shale-pizzas',
        'tagline' => 'Bold & Fiery Artisan Pizza Restaurant Experience',
        'description' => 'A bold, modern pizza restaurant website with fiery orange accents, interactive digital menus, online order reservation flow, and mouth-watering imagery.',
        'image_path' => 'assets/images/My Websites (4).png',
        'live_url' => 'https://laiba-iqbal.github.io/shale-pizza/',
        'category' => 'normal',
        'category_label' => 'Website',
        'tags' => ['HTML5', 'CSS3', 'JavaScript', 'UI/UX', 'Responsive'],
        'is_featured' => true
    ],
    [
        'id' => 2,
        'title' => 'FurEver Care',
        'slug' => 'furever-care',
        'tagline' => 'Playful & Friendly Veterinary & Pet Health Portal',
        'description' => 'A friendly pet-care and veterinary services website with cheerful yellow accents, playful pet illustrations, service appointment booking, and wellness resources.',
        'image_path' => 'assets/images/My Websites (5).png',
        'live_url' => 'https://abdul-rafay-art.github.io/furever-care/',
        'category' => 'normal',
        'category_label' => 'Website',
        'tags' => ['Front-End', 'CSS Grid', 'JavaScript', 'Pet Care', 'Mobile First'],
        'is_featured' => true
    ],
    [
        'id' => 3,
        'title' => 'School\'s Info',
        'slug' => 'schools-info',
        'tagline' => 'Structured & Comprehensive Educational Admissions Portal',
        'description' => 'A clean, professional school information and student admissions portal with structured academic pathways, faculty highlights, and online enrollment guides.',
        'image_path' => 'assets/images/My Websites (6).png',
        'live_url' => 'https://muhammadmusab12345.github.io/School-Informations/',
        'category' => 'normal',
        'category_label' => 'Website',
        'tags' => ['Full-Stack', 'PHP', 'MySQL', 'JavaScript', 'Education Portal'],
        'is_featured' => true
    ],
    [
        'id' => 4,
        'title' => 'SDI Presence',
        'slug' => 'sdi-presence',
        'tagline' => 'Enterprise IT & Isometric 3D City Visualization',
        'description' => 'A premier corporate IT & technology services platform featuring an isometric 3D city landscape, interactive solution architecture, and enterprise digital transformation.',
        'image_path' => 'assets/images/My Websites (2).png',
        'live_url' => 'https://www.sdipresence.com/',
        'category' => '3d',
        'category_label' => '3D Website',
        'tags' => ['3D Web', 'WebGL', 'Corporate IT', 'JavaScript', 'High Performance'],
        'is_featured' => false
    ],
    [
        'id' => 5,
        'title' => 'Ducati — Superleggera V4',
        'slug' => 'ducati-superleggera',
        'tagline' => 'Cinematic High-End Superbike Digital Showcase',
        'description' => 'A luxury motorcycle showcase website featuring dramatic product photography, interactive engineering specs, aerodynamic breakdowns, and high-performance craftsmanship.',
        'image_path' => 'assets/images/My Websites (1).png',
        'live_url' => 'https://superleggerav4centenario.ducati.com/en/ww',
        'category' => '3d',
        'category_label' => '3D Website',
        'tags' => ['Luxury Showcase', '3D Experience', 'Aerodynamics', 'Audio/Visual Web'],
        'is_featured' => false
    ],
    [
        'id' => 6,
        'title' => 'Emons Logistics',
        'slug' => 'emons-logistics',
        'tagline' => 'Global Freight & Isometric 3D Smart Warehouse Ecosystem',
        'description' => 'A global logistics & freight-forwarding company website with an interactive isometric 3D warehouse ecosystem, fleet tracking interfaces, and European shipping solutions.',
        'image_path' => 'assets/images/My Websites (3).png',
        'live_url' => 'https://www.emons.de/en',
        'category' => '3d',
        'category_label' => '3D Website',
        'tags' => ['3D Logistics', 'Interactive Web', 'Freight Systems', 'Enterprise UI'],
        'is_featured' => false
    ]
];

// 2. Client Testimonials (25+ Detailed Web Development Reviews)
$testimonials_data = [
    [
        'id' => 1,
        'name' => 'Alexander Vance',
        'role' => 'Founder & CEO',
        'company' => 'Vance Digital Media',
        'feedback' => 'Muhammad Musab transformed our entire web infrastructure. The website loads in under a second, the backend architecture is rock-solid, and our conversion rate jumped by 42% in the first month!',
        'rating' => 5.0,
        'avatar_initials' => 'AV',
        'avatar_bg' => '#415A77',
        'project' => 'E-Commerce Platform'
    ],
    [
        'id' => 2,
        'name' => 'Sophia Martinez',
        'role' => 'Product Director',
        'company' => 'AuraTech Solutions',
        'feedback' => 'Working with Musab was an absolute pleasure. His mastery of full-stack development and eye for clean code meant zero bugs on launch day. He truly delivers luxury-level quality.',
        'rating' => 5.0,
        'avatar_initials' => 'SM',
        'avatar_bg' => '#779D7A',
        'project' => 'SaaS Dashboard'
    ],
    [
        'id' => 3,
        'name' => 'David Sterling',
        'role' => 'Operations Head',
        'company' => 'Sterling & Partners',
        'feedback' => 'Musab engineered our custom database system with PHP and MySQL and built a front-end that our clients constantly compliment. Outstanding communication and speed.',
        'rating' => 5.0,
        'avatar_initials' => 'DS',
        'avatar_bg' => '#D4C4A8',
        'project' => 'Corporate Portal'
    ],
    [
        'id' => 4,
        'name' => 'Elena Rostova',
        'role' => 'Creative Director',
        'company' => 'Velox Interactive',
        'feedback' => 'The attention to micro-animations, mobile responsiveness, and clean semantic code is rare to find. Musab solved complex backend queries effortlessly.',
        'rating' => 5.0,
        'avatar_initials' => 'ER',
        'avatar_bg' => '#1B263B',
        'project' => 'Interactive Web App'
    ],
    [
        'id' => 5,
        'name' => 'Marcus Chen',
        'role' => 'Tech Lead',
        'company' => 'Nexus Health',
        'feedback' => 'Musab built our patient appointment and scheduling system from scratch. His database design was scalable and secure, exceeding all HIPAA compliance benchmarks.',
        'rating' => 5.0,
        'avatar_initials' => 'MC',
        'avatar_bg' => '#415A77',
        'project' => 'Health Portal'
    ],
    [
        'id' => 6,
        'name' => 'Isabella Dubois',
        'role' => 'Marketing Head',
        'company' => 'Lumière Hospitality',
        'feedback' => 'Our boutique hotel website turned out breathtaking. Smooth scrolling, lightning-fast reservations, and flawless mobile experience. Musab is a true craftsman.',
        'rating' => 5.0,
        'avatar_initials' => 'ID',
        'avatar_bg' => '#779D7A',
        'project' => 'Hospitality Web App'
    ],
    [
        'id' => 7,
        'name' => 'Liam O\'Connor',
        'role' => 'Managing Director',
        'company' => 'Crestline Logistics',
        'feedback' => 'Musab delivered a custom real-time tracking interface ahead of schedule. The PHP backend integration with our legacy database was seamless.',
        'rating' => 5.0,
        'avatar_initials' => 'LO',
        'avatar_bg' => '#D4C4A8',
        'project' => 'Freight Dashboard'
    ],
    [
        'id' => 8,
        'name' => 'Dr. Haroon Siddiqui',
        'role' => 'Dean of Academics',
        'company' => 'Beaconfield Institute',
        'feedback' => 'The educational portal Musab engineered streamlined our student admissions and course registrations completely. Outstanding work ethic and support.',
        'rating' => 5.0,
        'avatar_initials' => 'HS',
        'avatar_bg' => '#415A77',
        'project' => 'Educational Portal'
    ],
    [
        'id' => 9,
        'name' => 'Chloe Bennett',
        'role' => 'Brand Strategist',
        'company' => 'Forge & Craft Studio',
        'feedback' => 'Musab is hands down one of the most reliable full-stack developers I have hired. Clean code, prompt updates, and flawless responsive layouts.',
        'rating' => 5.0,
        'avatar_initials' => 'CB',
        'avatar_bg' => '#779D7A',
        'project' => 'Brand Showcase'
    ],
    [
        'id' => 10,
        'name' => 'Tariq Al-Mansoor',
        'role' => 'E-Commerce Manager',
        'company' => 'SilkRoute Trading',
        'feedback' => 'Our online store went from sluggish to ultra-responsive. Musab optimized our SQL queries and refactored our front-end. Sales grew 35% in 3 weeks.',
        'rating' => 5.0,
        'avatar_initials' => 'TM',
        'avatar_bg' => '#1B263B',
        'project' => 'Custom Storefront'
    ],
    [
        'id' => 11,
        'name' => 'Rachel Adams',
        'role' => 'Founder',
        'company' => 'UrbanBite Gourmet',
        'feedback' => 'He built our online ordering system and interactive menu. The UI is stunning and orders flow directly to our kitchen management backend.',
        'rating' => 5.0,
        'avatar_initials' => 'RA',
        'avatar_bg' => '#415A77',
        'project' => 'Restaurant Web System'
    ],
    [
        'id' => 12,
        'name' => 'Vikram Malhotra',
        'role' => 'CTO',
        'company' => 'Apex Cloud Systems',
        'feedback' => 'Exceptional technical depth in PHP and modern vanilla JavaScript. Musab tackled complex API integrations with precision and provided well-documented code.',
        'rating' => 5.0,
        'avatar_initials' => 'VM',
        'avatar_bg' => '#779D7A',
        'project' => 'Cloud Management UI'
    ],
    [
        'id' => 13,
        'name' => 'Emily Watson',
        'role' => 'Co-Founder',
        'company' => 'Paws & Claws Veterinary',
        'feedback' => 'Pet owners love our new website! Booking pet wellness visits is so simple now. Musab delivered everything on our wish list with great enthusiasm.',
        'rating' => 5.0,
        'avatar_initials' => 'EW',
        'avatar_bg' => '#D4C4A8',
        'project' => 'Pet Clinic Website'
    ],
    [
        'id' => 14,
        'name' => 'Julian Alvarez',
        'role' => 'Architect & Designer',
        'company' => 'ArchStudio Horizon',
        'feedback' => 'Our architectural portfolio needed a high-end luxury feel. Musab implemented smooth scroll triggers and dark/light contrast that looks breathtaking.',
        'rating' => 5.0,
        'avatar_initials' => 'JA',
        'avatar_bg' => '#1B263B',
        'project' => 'Architecture Portfolio'
    ],
    [
        'id' => 15,
        'name' => 'Nadia Kabbani',
        'role' => 'Digital Lead',
        'company' => 'Oasis Fintech Group',
        'feedback' => 'Security and speed were our top priorities. Musab configured sanitized database inputs, CSRF tokens, and modern PHP best practices seamlessly.',
        'rating' => 5.0,
        'avatar_initials' => 'NK',
        'avatar_bg' => '#415A77',
        'project' => 'Fintech Portal'
    ],
    [
        'id' => 16,
        'name' => 'Oliver Wright',
        'role' => 'Principal Consultant',
        'company' => 'Wright Advisory',
        'feedback' => 'Musab created an interactive client calculator tool that generated over 300 qualified leads in our first month. Highly recommended!',
        'rating' => 5.0,
        'avatar_initials' => 'OW',
        'avatar_bg' => '#779D7A',
        'project' => 'Advisory Lead Tool'
    ],
    [
        'id' => 17,
        'name' => 'Zainab Fatima',
        'role' => 'Program Coordinator',
        'company' => 'Global Education Trust',
        'feedback' => 'A wonderful developer who listens carefully and brings great proactive ideas. The student resource center runs fast even on low-bandwidth connections.',
        'rating' => 5.0,
        'avatar_initials' => 'ZF',
        'avatar_bg' => '#D4C4A8',
        'project' => 'Resource Portal'
    ],
    [
        'id' => 18,
        'name' => 'Henrik Lindqvist',
        'role' => 'Managing Partner',
        'company' => 'Nordic Estate Group',
        'feedback' => 'The property listing search filters Musab built with PHP and AJAX are instant. Our bounce rate dropped by 28%. Superb craftsmanship.',
        'rating' => 5.0,
        'avatar_initials' => 'HL',
        'avatar_bg' => '#1B263B',
        'project' => 'Real Estate Search'
    ],
    [
        'id' => 19,
        'name' => 'Jessica Taylor',
        'role' => 'Owner',
        'company' => 'Sculpt Fitness & Spa',
        'feedback' => 'Musab built our class timetable and membership signup flow. Everything works smoothly on iPhones, iPads, and PCs. 10/10 service!',
        'rating' => 5.0,
        'avatar_initials' => 'JT',
        'avatar_bg' => '#415A77',
        'project' => 'Fitness Web App'
    ],
    [
        'id' => 20,
        'name' => 'Gabriel Santos',
        'role' => 'VP of Growth',
        'company' => 'Elevate Media Group',
        'feedback' => 'We required a lightning-fast landing page with custom interactive charts. Musab delivered pixel-perfect code within 48 hours.',
        'rating' => 5.0,
        'avatar_initials' => 'GS',
        'avatar_bg' => '#779D7A',
        'project' => 'High-Converting Landing'
    ],
    [
        'id' => 21,
        'name' => 'Amina Al-Hassan',
        'role' => 'Founder',
        'company' => 'PureGlow Botanicals',
        'feedback' => 'Musab helped us build an elegant storefront with PHP and MySQL. Customer checkouts are fast and reliable. He is our go-to developer.',
        'rating' => 5.0,
        'avatar_initials' => 'AH',
        'avatar_bg' => '#D4C4A8',
        'project' => 'Organic Store'
    ],
    [
        'id' => 22,
        'name' => 'Lucas Becker',
        'role' => 'Lead Engineer',
        'company' => 'Stuttgart Dynamics',
        'feedback' => 'Musab has clean code habits, uses semantic HTML, modular CSS, and well-structured PHP PDO queries. A true pleasure to collaborate with.',
        'rating' => 5.0,
        'avatar_initials' => 'LB',
        'avatar_bg' => '#1B263B',
        'project' => 'Engineering Portal'
    ],
    [
        'id' => 23,
        'name' => 'Sarah Jenkins',
        'role' => 'Editor-in-Chief',
        'company' => 'Chronicle Digital',
        'feedback' => 'Our editorial portal handles thousands of daily visitors effortlessly thanks to Musab’s database query optimization and clean caching implementation.',
        'rating' => 5.0,
        'avatar_initials' => 'SJ',
        'avatar_bg' => '#415A77',
        'project' => 'News Portal'
    ],
    [
        'id' => 24,
        'name' => 'Mateo Rossi',
        'role' => 'Restaurateur',
        'company' => 'Rossi Ristorante',
        'feedback' => 'The online table booking and menu animations created by Musab make our website feel like a Michelin-star digital experience. Magnifico!',
        'rating' => 5.0,
        'avatar_initials' => 'MR',
        'avatar_bg' => '#779D7A',
        'project' => 'Restaurant Showcase'
    ],
    [
        'id' => 25,
        'name' => 'Daniel Kim',
        'role' => 'Startup Founder',
        'company' => 'K-Bridge Tech',
        'feedback' => 'From initial prototype to production deployment, Musab took full ownership of our full-stack website. Reliable, friendly, and deeply knowledgeable.',
        'rating' => 5.0,
        'avatar_initials' => 'DK',
        'avatar_bg' => '#D4C4A8',
        'project' => 'Startup SaaS'
    ]
];

// 3. Web Development Services
$services_data = [
    [
        'id' => 1,
        'icon' => 'code',
        'title' => 'Custom Web Design',
        'description' => 'Tailor-made, bespoke web layouts crafted to reflect your unique brand identity with cutting-edge visual aesthetics and luxury finishes.',
        'badge' => 'Front-End'
    ],
    [
        'id' => 2,
        'icon' => 'server',
        'title' => 'Full-Stack Web Development',
        'description' => 'End-to-end web engineering combining clean, modern front-end interfaces with secure, scalable PHP & MySQL back-end architecture.',
        'badge' => 'Full-Stack'
    ],
    [
        'id' => 3,
        'icon' => 'smartphone',
        'title' => 'Responsive Website Design',
        'description' => 'Pixel-perfect, fluid experiences engineered to look and perform flawlessly across all screen sizes — mobile, tablet, laptop, and ultra-wide.',
        'badge' => 'Mobile-First'
    ],
    [
        'id' => 4,
        'icon' => 'layout',
        'title' => 'UI / UX Design & Prototyping',
        'description' => 'Intuitive user experiences, ergonomic workflows, and micro-interactions designed to maximize engagement and conversions.',
        'badge' => 'User Experience'
    ],
    [
        'id' => 5,
        'icon' => 'bot',
        'title' => 'Website Chatbot Integration',
        'description' => 'Custom, intelligent conversational chatbots seamlessly embedded into your website to automate customer inquiries and capture leads 24/7.',
        'badge' => 'Automation'
    ],
    [
        'id' => 6,
        'icon' => 'search',
        'title' => 'SEO & Performance Optimization',
        'description' => 'Speed optimization, clean semantic HTML5 markup, structured metadata, and on-page SEO best practices to help your site rank #1.',
        'badge' => 'Optimization'
    ],
    [
        'id' => 7,
        'icon' => 'shield-check',
        'title' => 'Website Maintenance & Security',
        'description' => 'Proactive updates, bug fixes, database backups, performance monitoring, and security patching to keep your web presence running 24/7.',
        'badge' => 'Support'
    ]
];

// 4. Development Process Timeline Steps
$process_steps = [
    [
        'step' => '01',
        'title' => 'Discover',
        'description' => 'Analyzing project goals, target audience, technical requirements, and core functional specifications.'
    ],
    [
        'step' => '02',
        'title' => 'Plan',
        'description' => 'Structuring information architecture, database schema, tech stack choices, and delivery milestones.'
    ],
    [
        'step' => '03',
        'title' => 'Design',
        'description' => 'Crafting the luxury visual direction, interactive wireframes, component design system, and typography.'
    ],
    [
        'step' => '04',
        'title' => 'Develop',
        'description' => 'Writing clean, semantic front-end code and robust PHP/SQL backend logic with zero technical debt.'
    ],
    [
        'step' => '05',
        'title' => 'Launch',
        'description' => 'Cross-browser testing, SEO audits, speed optimization, domain/hosting configuration, and live deployment.'
    ]
];

// 5. Numerical Statistics for Stats Banner
$stats_data = [
    [
        'number' => 25,
        'suffix' => '+',
        'label' => 'Happy Clients'
    ],
    [
        'number' => 40,
        'suffix' => '+',
        'label' => 'Projects Completed'
    ],
    [
        'number' => 3,
        'suffix' => '+',
        'label' => 'Years Experience'
    ],
    [
        'number' => 100,
        'suffix' => '%',
        'label' => 'Client Satisfaction'
    ],
    [
        'number' => 24,
        'suffix' => '/7',
        'label' => 'Support Availability'
    ]
];

// 6. Pricing Packages
$pricing_data = [
    [
        'id' => 1,
        'name' => 'Basic',
        'price' => '8',
        'currency' => '$',
        'period' => 'per project',
        'tagline' => 'Essential web presence for personal projects & basic web needs',
        'is_popular' => false,
        'badge' => null,
        'button_text' => 'Get Started',
        'features' => [
            'Proper front-end (basic)',
            'Basic back-end functionality',
            'Beautiful, clean look',
            'Full source code provided',
            'GitHub repository hosting included',
            'Responsive layout (Mobile & Desktop)',
            'Cross-browser compatibility'
        ]
    ],
    [
        'id' => 2,
        'name' => 'Standard',
        'price' => '14',
        'currency' => '$',
        'period' => 'per project',
        'tagline' => 'High-impact solution tailored for growing businesses & startups',
        'is_popular' => true,
        'badge' => 'Most Popular',
        'button_text' => 'Choose Standard',
        'features' => [
            'Premium, eye-catching web look',
            'Premium front-end development',
            'Premium back-end integration',
            'Full source code + GitHub repository link',
            'Domain + Hosting included',
            'High-speed loading & optimization',
            'Interactive micro-animations',
            'SEO-ready code structure'
        ]
    ],
    [
        'id' => 3,
        'name' => 'Premium',
        'price' => '20',
        'currency' => '$',
        'period' => 'per project',
        'tagline' => 'All-inclusive enterprise package with VIP ongoing changes',
        'is_popular' => false,
        'badge' => 'Ultimate Value',
        'button_text' => 'Get Premium',
        'features' => [
            'Everything included in the Standard package',
            'Domain + Hosting included',
            '5 months of free changes/updates included',
            'Advanced database & custom backend',
            'Full UI/UX custom interactive elements',
            'Website Chatbot & contact integration',
            'Priority 24/7 technical support'
        ]
    ]
];

// 7. Tech Stack Tools for Infinite Marquee
$tech_tools = [
    ['name' => 'HTML5', 'icon' => 'fa-brands fa-html5', 'color' => '#E34F26'],
    ['name' => 'CSS3', 'icon' => 'fa-brands fa-css3-alt', 'color' => '#1572B6'],
    ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js', 'color' => '#F7DF1E'],
    ['name' => 'React', 'icon' => 'fa-brands fa-react', 'color' => '#61DAFB'],
    ['name' => 'PHP', 'icon' => 'fa-brands fa-php', 'color' => '#777BB4'],
    ['name' => 'Python', 'icon' => 'fa-brands fa-python', 'color' => '#3776AB'],
    ['name' => 'MySQL', 'icon' => 'fa-solid fa-database', 'color' => '#4479A1'],
    ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap', 'color' => '#7952B3'],
    ['name' => 'jQuery', 'icon' => 'fa-solid fa-code', 'color' => '#0769AD'],
    ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt', 'color' => '#F05032'],
    ['name' => 'GitHub', 'icon' => 'fa-brands fa-github', 'color' => '#FFFFFF'],
    ['name' => 'Tailwind CSS', 'icon' => 'fa-brands fa-css3', 'color' => '#06B6D4'],
    ['name' => 'REST APIs', 'icon' => 'fa-solid fa-network-wired', 'color' => '#779D7A'],
    ['name' => 'SQL', 'icon' => 'fa-solid fa-table', 'color' => '#D4C4A8']
];

// 8. Rotating Hero Roles Array
$hero_roles = [
    'Full Stack Website Developer',
    'Front-End Developer',
    'Back-End Developer',
    'Responsive Web Design Expert',
    'Modern Web Architect'
];
