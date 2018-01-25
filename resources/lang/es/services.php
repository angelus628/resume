<?php
$years = date('Y') - date('Y', strtotime('2012-01-25'));

return [
    'title'     => 'Servicios',
    'what'      => '¿Qué puedo hacer por ti?',
    'main_desc' => 'Estas son algunas de mis habilidades como Ingeniero de Sistemas.',

    'web' => 'Desarrllo Web',
    'web_desc' => "Casi $years años trabajando en proyectos relacionados con la web, me dan suficiente conocimiento para trabajar basicamente en cualquier proyecto web. Tengo experiencia con equipos multidisciplinarios, y compañeros de equipo con el mismo nivel de responsabilidad que el mío.",

    'backend'      => 'Desarrollo Backend',
    'backend_desc' => 'Tengo experiencia trabajando en proyecto de Backend, desarrollando del lado del servidor, creando procedimientos programados los cuales deben ejecutar una tarea específica en un momento determinado. Tengo conocimiento básico en desarrollo bash y configuración del lado del servidor.',

    'sql'      => 'Lenguaje de Consulta Estructurada (SQL)',
    'sql_desc' => 'Como desarrollador web constantemente estoy en contacto with SQL, el lenguaje que perimite a los programas consultar a las bases de datos por información. Soy capáaz de crear consultas de nivel intermadio en los entornos POSTGRESQL, MYSQL y MSSQL (Microsoft SQL Server).',

    'frontend'      => 'Desarrollo Frontend',
    'frontend_desc' => 'Como parte integral del desarrollo web, está el desarrollo frontend, el cual se enfoca en la usabilidad y estética de las interfaces gráficas. Tengo conocimientos intermedios en JavaScript, jQuery y maquetado de HTML.',

    'admin' => 'Administración de Sistemas (Linux)',
    'admin_desc' => 'En mi trabajo diario tengo que lidiar con tareas relacionadas con la utilización de el sistema operativo Linux, y ser capaz de darle instrucciones a través de la línea de comandos. Es por eso que decidí obtener el certificado de Administrador de Sistemas Linux.',

    'cms' => 'Sistemas de Gestión de Contenidos (CMS)',
    'cms_desc' => 'He ganado experiencia trabajando con CMS, he instalado y configurado varios de los más conocidos: WordPress, Drupal y Joomla.',
];
