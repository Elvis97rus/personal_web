<?php

namespace App\Helpers;

class Experience
{
    public static function getExperienceList(): array
    {
        return [
            [
                'date' => '09.2022 г. - Hoy',
                'heading' => '<span class="mb-2">Full-stack (70% back /30% front) en empresa de creación de aplicaciones web, microservicios e integraciones con APIs de terceros para negocio y su soporte sobre stack Laravel(PHP) + VueJs(Javascript) / Bitrix24.</span>
                                    <span></span>',
                'stack' => '<ul class="py-2">
                                            <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                                <span class="px-2">PHP, Laravel, MySQL, Linux, Git, Postman, Composer, Swagger, Bitrix24</span>
                                            </li>
                                            <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                                <span class="px-2">Javascript, VueJs, npm, TailwindCss, Inertia.js, Figma</span>
                                            </li>
                                            <li class="flex justify-between"><span class="pr-2 pl-3">API</span> &blacktriangleright;
                                                <span class="px-2">GetCourse, RedSMS, Travelline, MangoOffice, Bitrix24 REST и вебхуки</span>
                                            </li>
                                        </ul>',
                'tasks' => '<ul class="text-sm">
                                            <li>Creación de un calendario de reservas de mesas, horarios de restaurantes, cierres de restaurantes</li>
                                            <li>Incrustación de aplicaciones web en Bitrix24 CRM, en las pestañas "Aplicaciones" y entidades (Transacciones, Contactos)</li>
                                            <li>Uso de los métodos de la API de Bitrix24 para crear/editar/eliminar entidades (Tratos, Contactos, Tareas, carga de archivos), creación de campos personalizados, creación de Procesos de Negocio, trabajo con hooks de Bitrix24</li>
                                            <li>Creación de un microservicio para recuperar datos del CRM y enviarlos a otras aplicaciones</li>
                                            <li>Diseño de la arquitectura de una aplicación web para una escuela de educación a distancia, para asignar estudiantes a grupos. Vinculación de la aplicación con Bitrix24 CRM y la plataforma educativa GetCourse</li>
                                            <li>Integración de aplicaciones web con API de terceros como: Envío de SMS, telefonía IP, módulo de reservas en línea Travelline</li>
                                            <li>Creación de API para la parte frontend de la aplicación web de cita previa en línea para reconocimientos médicos</li>
                                        </ul>',
                'skills' => '',
                'active' => true,
                'lang' => 'es',
                'position' => '1'
            ],
            [
                'date' => '2021 - 09.2022',
                'heading' => ' <span class="mb-2">Apoyo a proyectos de empleos anteriores</span>
                                <span class="mb-2">Estudio en el curso de JS de Vladilen Minin; estudio continuado en GeekUniversity by GeekBrains</span>
                                <span>Creación de pequeños sitios en CMS ModX Revolution, Laravel</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, Laravel, ModX Revolution, MySQL, Linux, Postman, Composer</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, jQuery, GIMP, Figma, Bootstrap, Sass</span>
                                        </li>
                                    </ul>',
                'tasks' => '',
                'skills' => '<ul class="px-2">
                                        <li>Una comprensión más profunda de JS puro (ES6) como parte de la construcción de un marco Javascript</li>
                                        <li>Conocimiento profundo de MySQL, consultas complejas, índices, perfilado y optimización de consultas</li>
                                        <li>Patrones de diseño y enfoques arquitectónicos para aplicaciones web</li>
                                        <li>Familiaridad con Figma y su uso para el trabajo de diseño frontend</li>
                                        <li>Estudio de los problemas de seguridad del lado del cliente y del lado del servidor al crear aplicaciones web</li>
                                        <li>Metodologías de desarrollo Waterfall / Agile:Scrum</li>
                                        <li>Introducción a Docker y la contenedorización</li>
                                        <li>Profundización en el framework Laravel (mutadores/accesores, comandos, colas, revisión de cambios en nuevas versiones de Laravel y PHP).</li>
                                    </ul>',
                'active' => true,
                'lang' => 'es',
                'position' => '2'
            ],
            [
                'date' => '2019 - 2021',
                'heading' => '<span class="mb-2">Desarrollador web en una empresa para SEO-promoción de sitios y publicidad</span>
                                <span class="mb-2">Pedidos de subcontratación y pedidos de creación de sitios web de boca en boca</span>',
                'stack' => ' <ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, Laravel, Yii2, MySQL, Linux, Postman</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, VueJS, jQuery, GIMP, Figma, Bootstrap, Sass</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2 pl-1">CMS</span> &blacktriangleright;
                                            <span class="px-2">Wordpress, ModX, Joomla, Drupal, Bitrix, Webasyst, OpenCart, HostCms, OctoberCMS, NetCat</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li>Tirando de diseño en el motor CMS / Framework</li>
                                        <li>Creación de la maquetación mediante esquema/imagen/ejemplo del sitio web</li>
                                        <li>Desarrollo de módulos PHP/JS para sitios en CMS / Frameworks populares (filtrado de productos en categorías, comentarios, productos favoritos, comparación de productos, mapa del sitio, mapa Yandex personalizado de la ubicación de la tienda/empresa)</li>
                                        <li>Implementación de SEO (optimización de plantillas de productos / categorías, revinculación de productos / categorías, trabajo con google captcha, micropartición, reducción del tiempo de primera respuesta de las páginas del sitio, corrección de errores de validación del código de la página, canonicals, pegado de espejos, redireccionamientos masivos de páginas)</li>
                                        <li>Escritura de scripts para "automatizar" la creación de recursos/páginas del sitio a partir de un archivo</li>
                                        <li>Tratamiento de virus en sitios de la base de datos y/o archivos de proyecto (principalmente Wordpress / ModX)</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li>Uso del terminal en sistemas unix cuando se trabaja con el servidor y el entorno local <br>(despliegue de proyectos en el servidor de prueba / transferencia de proyectos de alojamiento a VPS / despliegue de proyectos en la máquina local / cambio de versión de PHP (php-fpm) / instalación de las bibliotecas necesarias (composer/npm)).</li>
                                        <li>Familiaridad con los CMS más populares, su estructura y principios de funcionamiento</li>
                                        <li>Transferir un sitio de un alojamiento a otro / VPS, (re)vincular dominios, trabajar con registros DNS</li>
                                        <li>Trabajo con git en desarrollo en equipo, revisión de código, trabajo con ramas, resolución de conflictos</li>
                                        <li>Trabajar con Postman para crear, probar y depurar solicitudes de backend.</li>
                                        <li>Trabajar con plantillas de visualización xml</li>
                                        <li>Trabajo con subdominios ModX (creación, enrutamiento, contextos) / Webasyst / HostCMS (multisitio)</li>
                                     </ul>',
                'active' => true,
                'lang' => 'es',
                'position' => '3'
            ],
            [
                'date' => '2016 - 2019',
                'heading' => '<span class="mb-2">Formación: Unity3D en el equipo de producto como desarrollador en prácticas; cursos gratuitos en GeekBrains; GeekUniversity Departamento de desarrollo web de GeekBrains.</span>
                                <span class="mb-2">Creación y mantenimiento de empresas de publicidad. Creación de páginas web y préstamos.</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-9">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, MySQL, Wordpress, OpenCart, CSCart</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2 pl-8">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, jQuery, GIMP, Photoshop, Bootstrap, HTML & CSS</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">GameDev</span> &blacktriangleright;
                                            <span class="px-2">Unity3D, C#, Javascript, Maya, Blender, zBrush</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li>Se han creado varios juegos para el entrenamiento: carreras multijugador para 1 y 3 personas en sockets web, clicker 2D de "minería de oro" en pantalla única, juego de plataformas generado proceduralmente, arcade 2D (como Bouncy)</li>
                                        <li>Creación de sitios estáticos y dinámicos. Creación de sitios web utilizando CMS Wordpress</li>
                                        <li>Creación de la maquetación por imagen/ejemplo del sitio</li>
                                        <li>Promoción de la web-negocio "volando en globo"</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li>Se familiarizó con el motor Unity3D, bibliotecas, la base para la creación de animación (Maya), modelado (Blender, zBrush)</li>
                                        <li>Me familiaricé con C#, aprendí a crear un paisaje generado proceduralmente (escena), a crear builds para diferentes plataformas</li>
                                        <li>Creación y ejecución de campañas publicitarias en Ya.Direct y Google</li>
                                        <li>Personalización del sitio para SEO, selección de palabras clave y creación de contenidos creativos</li>
                                     </ul>',
                'active' => true,
                'lang' => 'es',
                'position' => '4'
            ],
            [
                'date' => '2014 - 2016',
                'heading' => '<span class="mb-2">Cursos: seo-optimización de sitios; Webmaster (Escuela de Programación); "Business is Simple"; Yandex Direct / Context</span>
                                <span class="mb-2">Creación y mantenimiento de empresas de publicidad. Creación de páginas web y préstamos.</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2">Web</span> &blacktriangleright;
                                            <span class="px-2"> HTML & CSS, PHP, Wordpress, MySQL, Javascript, jQuery, GIMP</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li> Creación de préstamos para vender productos mediante dropshipping</li>
                                        <li> Encontrar un nicho, un producto, analizar los márgenes del producto y los costes de publicidad, encontrar proveedores, comunicaciones, establecer telefonía IP.</li>
                                        <li> Creación de préstamos y pequeñas páginas web para FE y conocidos</li>
                                        <li> Configuración de publicidad y métricas en Google y Yandex</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li> Escribir código usando PHP, JS/jQuery, HTML&CSS. Para los préstamos utilizados principalmente constructores y estática con secuencias de comandos, con menos frecuencia CMS (Wordpress). Mayormente plantillas compradas</li>
                                        <li> Trabajar con imágenes utilizando GIMP / Photoshop / Avocode para crear banners y diseños de corte</li>
                                        <li> Primera introducción a temas de productos, búsqueda de nichos, embudo de ventas, análisis de métricas</li>
                                        <li> Primera introducción al SEO, creación de creatividades publicitarias, análisis y selección de palabras clave para temas de productos</li>
                                        <li> Lanzamiento de publicidad en los préstamos y sitios web de la empresa</li>
                                        <li> Trabajo con hosting, despliegue de proyectos, trabajo con base de datos Mysql</li>
                                     </ul>',
                'active' => true,
                'lang' => 'es',
                'position' => '5'
            ],

            [
                'date' => '09.2022 г. - NOW.',
                'heading' => '<span class="mb-2">Full-stack (70%/30%) in a company creating web applications, microservices and third party integrations
                                    Business APIs and their support on Laravel(PHP) + VueJs(Javascript) / Bitrix24 stack</span>
                                    <span>Third-party orders for web application or API development, help with website refinement, PET projects.</span>',
                'stack' => '<ul class="py-2">
                                            <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                                <span class="px-2">PHP, Laravel, MySQL, Linux, Git, Postman, Composer, Swagger, Bitrix24</span>
                                            </li>
                                            <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                                <span class="px-2">Javascript, VueJs, npm, TailwindCss, Inertia.js, Figma</span>
                                            </li>
                                            <li class="flex justify-between"><span class="pr-2 pl-3">API</span> &blacktriangleright;
                                                <span class="px-2">GetCourse, RedSMS, Travelline, MangoOffice, Bitrix24 REST и вебхуки</span>
                                            </li>
                                        </ul>',
                'tasks' => '<ul class="text-sm">
                                            <li>Created a calendar web application of table reservations, restaurant schedules, restaurant closures</li>
                                            <li>Embedding web applications in Bitrix24 CRM, in "Applications" and entity tabs (Transactions, Contacts)</li>
                                            <li>Using Bitrix24 API methods to create/edit/delete entities (Deals, Leads, Contacts, Tasks, file uploads), creating custom fields, creating Business Processes, working with Bitrix24 hooks</li>
                                            <li>Creating a microservice to retrieve data from CRM and send it to other applications</li>
                                            <li>Designing the architecture of a web application for a distance education school, to assign students to groups. Linking the application with Bitrix24 CRM and GetCourse educational platform</li>
                                            <li>Integration of web applications with third-party APIs such as: SMS mailing, IP telephony, Travelline online booking module</li>
                                            <li>Creation of API for the frontend part of the web application of online appointment for examinations</li>
                                        </ul>',
                'skills' => '',
                'active' => true,
                'lang' => 'en',
                'position' => '1'
            ],
            [
                'date' => '2021 - 09.2022 y.y.',
                'heading' => ' <span class="mb-2">Support for projects from previous employment</span>
                                <span class="mb-2">Study at Vladilen Minin\'s JS course; continued study at GeekUniversity by GeekBrains</span>
                                <span>Created small sites on CMS ModX Revolution, Laravel</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, Laravel, ModX Revolution, MySQL, Linux, Postman, Composer</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, jQuery, GIMP, Figma, Bootstrap, Sass</span>
                                        </li>
                                    </ul>',
                'tasks' => '',
                'skills' => '<ul class="px-2">
                                        <li>A deeper understanding of pure JS(ES6) as part of building a Javascript framework</li>
                                        <li>In-depth understanding of MySQL, complex queries, indexes, query profiling and optimisation</li>
                                        <li>A closer look at design patterns and architectural approaches for web applications</li>
                                        <li>Familiarity with Figma and using it for frontend design work</li>
                                        <li>Studying client-side and server-side security issues when creating web applications</li>
                                        <li>Waterfall / Agile: scrum development methodologies</li>
                                        <li>Introduction to Docker and containerisation</li>
                                        <li>Deeper dive into the Laravel framework (mutators/accessors, commands, queues, reviewing changes in new versions of Laravel and PHP)</li>
                                    </ul>',
                'active' => true,
                'lang' => 'en',
                'position' => '2'
            ],
            [
                'date' => '2019 - 2021 y.y.',
                'heading' => '<span class="mb-2">Web developer in a company for SEO-promotion of sites and advertising</span>
                                <span class="mb-2">Outsourcing and third-party orders for website development</span>',
                'stack' => ' <ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, Laravel, Yii2, MySQL, Linux, Postman</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, VueJS, jQuery, GIMP, Figma, Bootstrap, Sass</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2 pl-1">CMS</span> &blacktriangleright;
                                            <span class="px-2">Wordpress, ModX, Joomla, Drupal, Bitrix, Webasyst, OpenCart, HostCms, OctoberCMS, NetCat</span>
                                        </li>online
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li>Pulling layout on CMS/Framework engine</li>
                                        <li>Creation of layout by layout/picture/example of the site</li>
                                        <li>Development of PHP/JS modules for sites on popular CMS / Frameworks (product filtering in category, feedback, favourite products, product comparison, site map, custom Yandex map of store/company location)</li>
                                        <li>Implementation of SEO (template optimisation of products / categories, relinking of products / categories, work with google captcha, micropartitioning, reducing the time of the first response of the site pages, fixing validation errors of the page code, canonicals, gluing mirrors, mass redirects of pages)</li>
                                        <li>Writing scripts to "automate" the creation of site resources/pages from a file</li>
                                        <li>Website virus treatment in a database and/or project files (mainly Wordpress / ModX)</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li>Using terminal on unix-systems when working with server and local environment <br>(deploying projects on test server / transferring projects from hosting to VPS / deploying projects on local machine / changing PHP version (php-fpm) / installing necessary libraries (composer/npm))</li>
                                        <li>Familiarity with most popular CMS, their structure and working principles</li>
                                        <li>Transfer site from hosting to hosting / VPS, (re)bind domains, work with DNS records</li>
                                        <li>Working with git in team development, code review, working with branches, conflict resolution</li>
                                        <li>Work with Postman to create, test and debug requests to the backlog</li>
                                        <li>Working with xml display templates</li>
                                        <li>Working with ModX subdomains (creation, routing, contexts) / Webasyst / HostCMS (multisite)</li>
                                     </ul>',
                'active' => true,
                'lang' => 'en',
                'position' => '3'
            ],
            [
                'date' => '2016 - 2019 y.y.',
                'heading' => '<span class="mb-2">Training: Unity3D in the product team as a trainee developer; free courses at GeekBrains; GeekUniversity Web Development department from GeekBrains</span>
                                <span class="mb-2">Setting up and maintaining advertising companies. Websites and landings development.</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-9">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, MySQL, Wordpress, OpenCart, CSCart</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2 pl-8">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, jQuery, GIMP, Photoshop, Bootstrap, HTML & CSS</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">GameDev</span> &blacktriangleright;
                                            <span class="px-2">Unity3D, C#, Javascript, Maya, Blender, zBrush</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li>Creation of several pet games: multiplayer 1 and 3 person races on web sockets, 2D single screen "gold mining" clicker, procedurally generated platformer, 2D arcade(like Bouncy)</li>
                                        <li>Creation of static and dynamic sites. Creating websites using CMS Wordpress</li>
                                        <li>Creating layout by image/example of the site</li>
                                        <li>Promotion of website-business "flying on a balloon"</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li>Got acquainted with Unity3D engine, libraries, the basis for creating animation (Maya), modelling (Blender, zBrush)</li>
                                        <li>Got to know C#, learnt how to create procedurally generated landscape(scene), create builds for different platforms</li>
                                        <li>Setting up and running advertising campaigns in Ya.Direct and Google</li>
                                        <li>Site customisation for SEO, keyword selection and creative content creation</li>
                                     </ul>',
                'active' => true,
                'lang' => 'en',
                'position' => '4'
            ],
            [
                'date' => '2014 - 2016 y.y.',
                'heading' => '<span class="mb-2">Courses: seo-optimisation of sites; Webmaster (Programming School); "Business is Simple"; Y.Direct / Context</span>
                                <span class="mb-2">Setting up and maintenance of advertising companies. Development of websites and landings.</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2">Web</span> &blacktriangleright;
                                            <span class="px-2"> HTML & CSS, PHP, Wordpress, MySQL, Javascript, jQuery, GIMP</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li> Creating lendings for selling products by dropshipping</li>
                                        <li> Finding a niche, product, analysing product margins and advertising costs, finding suppliers, communications, setting up IP-telephony</li>
                                        <li> Creating lendings and small websites for sole proprietors and acquaintances</li>
                                        <li> Setting up advertising and metrics in Google and Yandex</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li> Writing code using PHP, JS/jQuery, HTML&CSS. For lendings mainly used constructors and static with scripts, less often CMS (Wordpress). Mostly purchased templates</li>
                                        <li> Working with images using GIMP / Photoshop / Avocode to create banners and cut layouts</li>
                                        <li> First introduction to product topics, niche search, sales funnel, metrics analysis</li>
                                        <li> First introduction to SEO, creating advertising creatives, analysing and selecting keywords for product themes</li>
                                        <li> Running adverts on company lendings and websites</li>
                                        <li> Work with hosting, project deployment, work with Mysql database</li>
                                     </ul>',
                'active' => true,
                'lang' => 'en',
                'position' => '5'
            ],

            [
                'date' => '09.2022 г. - Н.В.',
                'heading' => '<span class="mb-2">Full-stack (70%/30%) в компании создающей веб-приложения, микросервисы и интеграции со сторонними API для бизнеса и их поддержка на стеке Laravel(PHP) + VueJs(Javascript) / Bitrix24</span>
                                    <span>Сторонние заказы на разработку веб-приложений или API, помощь в доработке сайта, PET-проекты.</span>',
                'stack' => '<ul class="py-2">
                                            <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                                <span class="px-2">PHP, Laravel, MySQL, Linux, Git, Postman, Composer, Swagger, Bitrix24</span>
                                            </li>
                                            <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                                <span class="px-2">Javascript, VueJs, npm, TailwindCss, Inertia.js, Figma</span>
                                            </li>
                                            <li class="flex justify-between"><span class="pr-2 pl-3">API</span> &blacktriangleright;
                                                <span class="px-2">GetCourse, RedSMS, Travelline, MangoOffice, Bitrix24 REST и вебхуки</span>
                                            </li>
                                        </ul>',
                'tasks' => '<ul class="text-sm">
                                            <li>Создание календаря бронирований столов, расписания работы ресторанов, закрытия ресторанов</li>
                                            <li>Встраивание веб-приложений в CRM Bitrix24, в "Приложения" и вкладки сущностей(Сделки, Контакты)</li>
                                            <li>Использование API методов Bitrix24 для создания/редактирования/удаления сущностей(Сделки, Лиды, Контакты, Задачи, загрузка файлов), создание пользовательских полей, создание Бизнес Процессов, работа с хуками Bitrix24</li>
                                            <li>Создание микросервиса, для получения данных из CRM и отправки в другие приложения</li>
                                            <li>Проектирование архитектуры веб-приложения для школы дистанционного образования, для распределения студентов по группам. Связывание приложения с CRM Bitrix24 и образовательной платформой GetCourse</li>
                                            <li>Интеграция веб-приложений со сторонними АПИ, такими как: СМС рассылка, IP-телефония, модуль онлайн-бронирования Travelline</li>
                                            <li>Создание АПИ для фронтенд части веб-приложения онлайн записи на обследования</li>
                                        </ul>',
                'skills' => '',
                'active' => true,
                'lang' => 'ru',
                'position' => '1'
            ],
            [
                'date' => '2021 - 09.2022 г.г.',
                'heading' => ' <span class="mb-2">Поддержка проектов с предыдущего места работы</span>
                                <span class="mb-2">Обучение на курсе по JS Владилена Минина; продолжение обучения в GeekUniversity от GeekBrains</span>
                                <span>Создание небольших сайтов на CMS ModX Revolution, Laravel</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, Laravel, ModX Revolution, MySQL, Linux, Postman, Composer</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, jQuery, GIMP, Figma, Bootstrap, Sass</span>
                                        </li>
                                    </ul>',
                'tasks' => '',
                'skills' => '<ul class="px-2">
                                        <li>Более глубокое понимание pure JS(ES6) в рамках создания фреймворка на Javascript</li>
                                        <li>Углубленное понимание работы с MySQL, сложные запросы, индексы, профилирование и оптимизация запросов</li>
                                        <li>Более близкое знакомство с шаблонами проектирования и архитектурными подходами веб-приложений</li>
                                        <li>Знакомство с Figma и использование для работы с дизайном frontend части</li>
                                        <li>Изучение вопросов безопасности клиентской и серверной части при создании веб-приложений</li>
                                        <li>Методологии разработки водопад / Agile: scrum</li>
                                        <li>Знакомство с Docker и контейнеризацией</li>
                                        <li>Более глубокое погружение в фреймворк Laravel(мутаторы/аксессоры, комманды, очереди, просмотр изменений в новых версиях Laravel и PHP)</li>
                                    </ul>',
                'active' => true,
                'lang' => 'ru',
                'position' => '2'
            ],
            [
                'date' => '2019 - 2021 г.г.',
                'heading' => '<span class="mb-2">Веб-разработчик в комании по СЕО-продвижению сайтов и рекламе</span>
                                <span class="mb-2">Аутсорс и сторонние заказы на создание сайтов</span>',
                'stack' => ' <ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-1">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, Laravel, Yii2, MySQL, Linux, Postman</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, VueJS, jQuery, GIMP, Figma, Bootstrap, Sass</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2 pl-1">CMS</span> &blacktriangleright;
                                            <span class="px-2">Wordpress, ModX, Joomla, Drupal, Bitrix, Webasyst, OpenCart, HostCms, OctoberCMS, NetCat</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li>Натягивание верстки на движок CMS/Framework</li>
                                        <li>Создание верстки по макету/картинке/примеру сайта</li>
                                        <li>Разработка модулей на PHP/JS для сайтов на популярных CMS / Фреймворках (фильтрация товаров в категории, обратная связь, избранные товары, сравнение товаров, карта сайта, кастомная яндекс карта расположения магазина/компании)</li>
                                        <li>Внедрение СЕО (шаблонная оптимизация товаров / категорий, перелинковка товаров / категорий, работа с гугл-капчей, микроразметка, уменьшение времени первого отклика страниц сайта, исправление ошибок валидации кода страницы, каноникалы, склейка зеркал, массовые редиректы страниц)</li>
                                        <li>Написание скриптов для "автоматизированного" создания ресурсов/страниц сайта из файла</li>
                                        <li>Лечение вирусов на сайтах в БД и/или файлах проекта (в основном Wordpress / ModX)</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li>Пользование терминалом на unix-системах при работе с сервером и локальным окружением
                                            <br>(разворачивание проектов на тестовом сервере / перенос проектов с хостинга на VPS / разворачивание проектов на локальной машине / смена версии PHP(php-fpm) / доустановка необходимых библиотек(composer/npm))</li>
                                        <li>Знакомство с большинством популярных CMS, их структурой и принципами работы</li>
                                        <li>Перенос сайта с хостинга на хостинг / VPS, (пере)привязывать домены, работа с DNS-записями</li>
                                        <li>Работа с гитом при командной разработке, код ревью, работа с ветками, решение конфликтов</li>
                                        <li>Работа c Postman для создания, тестирования и отладки запросов к бэку</li>
                                        <li>Работа с xml-шаблонами отображения</li>
                                        <li>Работа с поддоменами на ModX (создание, роутинг, контексты) / Webasyst / HostCMS (мультисайтовость)</li>
                                     </ul>',
                'active' => true,
                'lang' => 'ru',
                'position' => '3'
            ],
            [
                'date' => '2016 - 2019 г.г.',
                'heading' => '<span class="mb-2">Обучения: Unity3D в продуктовой команде в качестве разработчика-стажера, бесплатных курсов в GeekBrains, факультет Веб-разработки GeekUniversity от GeekBrains</span>
                                <span class="mb-2">Настройка и ведение рекламных компаний. Создание сайтов и лендингов.</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2 pl-9">Back</span> &blacktriangleright;
                                            <span class="px-2">PHP, MySQL, Wordpress, OpenCart, CSCart</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2 pl-8">Front</span> &blacktriangleright;
                                            <span class="px-2">Javascript, jQuery, GIMP, Photoshop, Bootstrap, HTML & CSS</span>
                                        </li>
                                        <li class="flex justify-between"><span class="pr-2">GameDev</span> &blacktriangleright;
                                            <span class="px-2">Unity3D, C#, Javascript, Maya, Blender, zBrush</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li>Создание несколько пет-игр: мультиплеер гонки от 1 и 3 лица на веб-сокетах, 2D одноэкранный кликер "добычи золота", процедурно генерируемый платформер, 2D аркада(как Bouncy)</li>
                                        <li>Создание статических и динамических сайтов. Создание сайтов с использованием CMS Wordpress</li>
                                        <li>Создание верстки по картинке/примеру сайта</li>
                                        <li>Продвижение сайта-бизнеса "полёт на шаре"</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li>Познакомился с движком Unity3D, библиотеками, основой создания анимации(Maya), моделирование (Blender, zBrush)</li>
                                        <li>Познакомился с С#, научился создавать процедурно генерируемый ландшавт(сцену), создавать сборки под разные платформы</li>
                                        <li>Настройка и ведение рекламных компаний в Я.Директ и Гугле</li>
                                        <li>Настройка сайта для СЕО, подбор ключевых слов и создание креативного контента</li>
                                     </ul>',
                'active' => true,
                'lang' => 'ru',
                'position' => '4'
            ],
            [
                'date' => '2014 - 2016 г.г.',
                'heading' => '<span class="mb-2">Курсы: сео-оптимизации сайтов, Веб-мастер (ШколаПрограммирования), "Бизнес это просто", Я.Директ / Контекст</span>
                                <span class="mb-2">Настройка и ведение рекламных компаний. Создание сайтов и лендингов.</span>',
                'stack' => '<ul class="py-2">
                                        <li class="flex justify-between"><span class="pr-2">Web</span> &blacktriangleright;
                                            <span class="px-2"> HTML & CSS, PHP, Wordpress, MySQL, Javascript, jQuery, GIMP</span>
                                        </li>
                                    </ul>',
                'tasks' => '<ul class="px-2 text-sm">
                                        <li> Создание лендингов для продажи товаров дропшипингом</li>
                                        <li> Поиск ниши, товара, анализ маржинальности товара и стоимости рекламы, поиск поставщиков, комуникации, настройка IP-телефонии</li>
                                        <li> Создание лендингов и небольших сайтов для ИП и знакомых</li>
                                        <li> Настройка рекламы и метрик в Гугл и Яндекс</li>
                                    </ul>',
                'skills' => '<ul class="px-2">
                                        <li> Написание кода с использованием PHP, JS/jQuery, HTML&CSS. Для лендингов в основном использовались конструкторы и статика со скриптами, реже CMS (Wordpress). В основном покупные шаблоны</li>
                                        <li> Работа с изображениями используя GIMP / Photoshop / Avocode для создания баннеров и нарезки макетов</li>
                                        <li> Первое знакомство с товарной тематикой, поиском ниши, воронкой продаж, анализом метрик</li>
                                        <li> Первое знакомство с СЕО, созданием рекламных креативов, анализ и подбор ключевых слов для продуктовой тематики</li>
                                        <li> Запуск рекламы на лендинги и сайты компаний</li>
                                        <li> Работа с хостингом, деплой проекта, работа с БД Mysql</li>
                                     </ul>',
                'active' => true,
                'lang' => 'ru',
                'position' => '5'
            ],
        ];
    }
}
