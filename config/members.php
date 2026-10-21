<?php

/*
|--------------------------------------------------------------------------
| Group members' profile data
|--------------------------------------------------------------------------
| The array key (member1, member2, ...) becomes the URL, e.g. /member1/about.
| Photos go in public/images/ and must match the 'photo' file name.
| Anything not set inside a member's block uses the defaults below.
*/

// Default content shared by every member. Override any item per member below.
$defaults = [
    'university' => 'UMPSA, Faculty of Computing',
    'location'   => 'Pekan, Pahang, Malaysia',
    'languages'  => 'Bahasa Melayu, English',
    'social'     => ['github' => '#', 'linkedin' => '#', 'instagram' => '#'],
    'stats' => [
        ['2+',   'Years of Study'],
        ['8+',   'Projects Completed'],
        ['6',    'Technologies Used'],
        ['100%', 'Commitment'],
    ],
    'highlights' => [
        ['bi-code-slash', 'Web Development',   'Building dynamic websites with PHP, Laravel and Blade templates.'],
        ['bi-phone',      'Responsive Design', 'Creating clean layouts with Bootstrap that work on any screen size.'],
        ['bi-lightbulb',  'Problem Solving',   'Breaking down complex problems into simple, working solutions.'],
    ],
];

$make = fn (array $own) => array_merge($defaults, $own);

return [

    /* ---------------------------- Member 1 ---------------------------- */
    'member1' => $make([
        'name'      => 'Abdul Aslam Haziq Bin Shahabudin',
        'role'      => 'Web Developer in Training',
        'tagline'   => 'I love building a new fresh website',
        'photo'     => 'member1.jpg',
        'bio'       => 'I am a Computer Science student at UMPSA with a strong interest in web development. '
                     . 'I enjoy turning ideas into working websites and I am always looking for ways to improve '
                     . 'my coding skills through personal projects and teamwork.',
        'email'     => 'aslamhaziq12@gmail.com',
        'phone'     => '+60 12-345 6781',
        'languages' => 'Bahasa Melayu, English',
        'education' => [
            ['2024 - 2028', 'Bachelor of Computer Science',      'Universiti Malaysia Pahang Al-Sultan Abdullah'],
            ['2022 - 2024', 'Matriculation Programme',           'Kolej Matrikulasi Pulau Pinang '],
            ['2017 - 2021', 'Secondary School (SPM)',            'SMK Dato Haji Ahmad Badawi ,Pulau Pinang'],
        ],
        'skills' => [
            ['HTML & CSS', 92], ['PHP & Laravel', 80], ['JavaScript', 75],
            ['Bootstrap', 88],  ['MySQL', 72],         ['Git & GitHub', 70],
        ],
        'softSkills' => ['Teamwork', 'Leadership', 'Problem Solving', 'Time Management'],
        'hobbies' => [
            ['bi-controller', 'Gaming',      'Strategy and puzzle games'],
            ['bi-camera',     'Photography', 'Capturing street and nature shots'],
            ['bi-bicycle',    'Cycling',     'Weekend rides around town'],
            ['bi-headphones', 'Music',       'Listening to lo-fi while coding'],
        ],
    ]),

    /* ---------------------------- Member 2 ---------------------------- */
    'member2' => $make([
        'name'      => 'Muhammad Iqmal Aqif Bin Mohamad Nasir',
        'role'      => 'UI/UX Design Enthusiast',
        'tagline'   => 'I turn complex ideas into simple, beautiful and user-friendly designs.',
        'photo'     => 'member2.jpg',
        'bio'       => 'I am a Computer Science student who loves the creative side of technology. '
                     . 'My focus is on user interface design and front-end development, and I enjoy making '
                     . 'websites that are both attractive and easy to use.',
        'email'     => 'aqifnasir@gmail.com',
        'phone'     => '+60 13-228 4402',
        'languages' => 'Bahasa Melayu, English, Arabic',
        'education' => [
            ['2024 - 2028', 'Bachelor of Computer Science',      'Universiti Malaysia Pahang Al-Sultan Abdullah'],
            ['2022 - 2024', 'Matriculation Programme',           'Kolej Matrikulasi Pulau Pinang'],
            ['2017 - 2021', 'Secondary School (SPM)',            'SMK Dato Perdana, Kelantan'],
        ],
        'skills' => [
            ['UI/UX Design', 90], ['HTML & CSS', 88],    ['Bootstrap', 85],
            ['Figma', 82],        ['JavaScript', 68],    ['PHP & Laravel', 65],
        ],
        'softSkills' => ['Creativity', 'Communication', 'Attention to Detail', 'Teamwork'],
        'hobbies' => [
            ['bi-palette',  'Digital Art', 'Drawing illustrations on a tablet'],
            ['bi-book',     'Reading',     'Novels and design blogs'],
            ['bi-cup-hot',  'Baking',      'Trying new cake recipes'],
            ['bi-film',     'Movies',      'Watching animated and drama films'],
        ],
    ]),

    /* ---------------------------- Member 3 ---------------------------- */
    'member3' => $make([
        'name'      => 'Muhammad Iskandar bin Haris',
        'role'      => 'Backend and Database Learner',
        'tagline'   => 'I am curious about how data moves behind the scenes and how to make systems reliable.',
        'photo'     => 'member3.jpg',
        'bio'       => 'I am a Computer Science student who enjoys backend development and databases. '
                     . 'I like solving logic problems, structuring data properly and building systems '
                     . 'that run smoothly. I am also learning cloud basics in my free time.',
        'email'     => 'iskandarhrs05@gmail.com',
        'phone'     => '+60 16-938 4889',
        'languages' => 'English, Mandarin, Bahasa Melayu',
        'education' => [
            ['2024 - 2028', 'Bachelor of Computer Science',      'Universiti Malaysia Pahang Al-Sultan Abdullah'],
            ['2023 - 2024', 'Matriculation Programme',           'Kolej Matrikulasi Kedah'],
            ['2018 - 2022', 'Secondary School (SPM)',            'SM Teknik Alor Setar, Kedah'],
        ],
        'skills' => [
            ['MySQL', 90],       ['PHP & Laravel', 85], ['Python', 80],
            ['Java', 72],        ['Git & GitHub', 78],  ['HTML & CSS', 70],
        ],
        'softSkills' => ['Analytical Thinking', 'Patience', 'Collaboration', 'Self-Learning'],
        'hobbies' => [
            ['bi-trophy',   'Badminton', 'Playing with friends on weekends'],
            ['bi-puzzle',   'Puzzles',   'Logic games and Rubik\'s cube'],
            ['bi-joystick', 'Gaming',    'Competitive online games'],
            ['bi-globe',    'Travel',    'Exploring new cities and food'],
        ],
    ]),

    /* ---------------------------- Member 4 ---------------------------- */
    'member4' => $make([
        'name'      => 'Wan Aemer Hafiz Bin Wan Swaid',
        'role'      => 'Software Engineering Student',
        'tagline'   => 'I enjoy writing clear code and working with a team to finish projects well.',
        'photo'     => 'member4.jpg',
        'bio'       => 'I am a Computer Science student interested in software engineering and project '
                     . 'management. I like organising tasks, communicating with teammates and making sure '
                     . 'every project is delivered on time with good quality.',
        'email'     => 'wanaemer@gmail.com',
        'phone'     => '+60 17-512 9046',
        'languages' => 'English, Bahasa Melayu',
        'education' => [
            ['2024 - 2028', 'Bachelor of Computer Science',      'Universiti Malaysia Pahang Al-Sultan Abdullah'],
            ['2022 - 2025', 'Diploma In Computing science',      'Universiti Malaysia Pahang Al-Sultan Abdullah'],
            ['2017 - 2021', 'Secondary School (SPM)',            'SMK SAINS TUANKU JAAFAR, KUALA PILAH'],
        ],
        'skills' => [
            ['Java', 85],           ['Python', 82],      ['Project Planning', 88],
            ['HTML & CSS', 78],     ['MySQL', 74],       ['Bootstrap', 76],
        ],
        'softSkills' => ['Communication', 'Organisation', 'Adaptability', 'Leadership'],
        'hobbies' => [
            ['bi-music-note-beamed', 'Dancing',  'Classical and modern dance'],
            ['bi-airplane',          'Travel',   'Visiting heritage places'],
            ['bi-pencil',            'Writing',  'Journaling and short stories'],
            ['bi-tree',              'Hiking',   'Short trails and nature walks'],
        ],
    ]),

];
