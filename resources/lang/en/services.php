<?php
$years = date('Y') - date('Y', strtotime('2012-01-25'));

return [
    'title'     => 'Services',
    'what'      => 'What Can I Do For You?',
    'main_desc' => 'These are some of my qualifications as System Engineer.',

    'web' => 'Web Development',
    'web_desc' => "Almost $years years working in web related projects, gives me enough knowledge to work basically in any web based project. I have experience working with multidisciplinary teams, and same level coworkers.",

    'backend'      => 'Backend Development',
    'backend_desc' => 'I have experience working in backend projects. Working in the server side, creating scheduled procedures which must perform a specific task at a given time. I have basic knowledge in bash scripting and server side configuration.',

    'sql'      => 'Structured Query Language (SQL)',
    'sql_desc' => 'As a web developer I am constantly in contact with SQL, the language that allows programs to query the database for information. I can create intermediate level queries in POSTGRESQL, MYSQL and MSSQL.',

    'frontend'      => 'Frontend Development',
    'frontend_desc' => 'As an integral part of web development, there is the frontend development with focuses on graphic interface usability and aesthetics. I have medium level knowledge in JavaScript, jQuery, HTML modeling.',

    'admin' => 'System Administration (Linux)',
    'admin_desc' => 'In my daily work I have to deal with tasks related to Linux utilization and command line instructions. That\'s why I decided to go and get certified in Linux System Administrator.',

    'cms' => 'Content Management Systems (CMS)',
    'cms_desc' => 'I\'ve gained experience working with CMS. I\'ve installed and configured WordPress, Drupal and Joomla.',
];
