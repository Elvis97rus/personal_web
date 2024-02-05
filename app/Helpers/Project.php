<?php

namespace App\Helpers;

class Project
{
    public static function getProjectList(): array
    {
        return [
            [
                'title' => 'Fullstack application for e-shop with Laravel, Tailwind and backend admin panel in Vue3 on a subdomain',
                'active' => 1,
                'lang' => 'en',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi assumenda cupiditate dolore dolorem dolorum eius eos eum facere fugiat id incidunt, iure iusto nemo, neque nesciunt obcaecati odit officiis perspiciatis possimus quam quo recusandae repudiandae sapiente sed ut voluptate! Aliquam aspernatur deleniti nemo?',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Vue3'
            ],
            [
                'title' => 'Blog application with Laravel, Tailwind, Alpine.js and Filament Admin panel',
                'active' => 1,
                'lang' => 'en',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus fugiat possimus repellendus rerum. Alias aliquid dicta doloribus enim et expedita illo inventore, ipsam iusto magni maxime minus obcaecati quo saepe tempore. Culpa inventore, odit. Ad eligendi fuga id optio, quibusdam quidem suscipit ullam.',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Filament, Alpine.js'
            ],
            [
                'title' => 'Auto-service web-application with Laravel, Tailwind, Alpine.js and Filament Admin panel',
                'active' => 1,
                'lang' => 'en',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur, dolor dolore eligendi harum, id neque nulla officia pariatur praesentium quidem saepe? Ad aliquam amet aspernatur blanditiis dolor dolores earum eligendi facilis fugiat inventore itaque molestiae neque quaerat, quos, sequi, sit veritatis vero voluptates!',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Filament, Alpine.js'
            ],
            [
                'title' => 'Framework in pure Javascript, kind of replica from google online spreadsheets functionality. ',
                'active' => 1,
                'lang' => 'en',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet animi asperiores at consectetur consequatur deleniti dolor, doloribus eligendi esse eveniet facere fuga illo ipsam iure magni maiores molestias nam pariatur, perspiciatis provident quasi quo repellat tenetur voluptatum. Commodi deleniti fuga maxime omnis ullam!',
                'position' => '1',
                'tags' => 'Javascript, SCSS, REDUX'
            ],
            [
                'title' => 'List of services with useful functionality which can be used often in many projects. ',
                'active' => 1,
                'lang' => 'en',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur assumenda atque consectetur delectus deserunt dolorem ducimus explicabo illo molestiae mollitia nesciunt, non, nulla odio quos reprehenderit repudiandae sunt veritatis vero voluptatem! Consectetur dolore et ipsam libero nesciunt nisi, odio possimus quae repudiandae vitae.',
                'position' => '1',
                'tags' => 'PHP, Laravel, Javascript'
            ],
            [
                'title' => 'Information base with different courses and study materials you can use.',
                'active' => 1,
                'lang' => 'en',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis consequatur labore numquam, odit possimus quidem similique sit tempora voluptate. Aliquam debitis ducimus ea earum fugit, harum impedit in inventore ipsum molestiae necessitatibus nostrum porro quam, quidem repellendus sed, suscipit tempore veritatis! Eius, harum.',
                'position' => '1',
                'tags' => 'Laravel, Filament'
            ],
            [
                'title' => 'PHP backend developer job interview F.A.Q. with answers.',
                'active' => 1,
                'lang' => 'en',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid deleniti eius facere id ipsam molestiae nobis nostrum numquam officia, praesentium quae rem repudiandae velit voluptatibus. Animi cumque, est laudantium officia quasi similique. Beatae dicta fuga magni molestiae nostrum pariatur quisquam suscipit totam vero?',
                'position' => '1',
                'tags' => 'Laravel, Filament'
            ],

            [
                'title' => 'Aplicación e-shop fullstack con Laravel, Tailwind y Vue3',
                'active' => 1,
                'lang' => 'es',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi assumenda cupiditate dolore dolorem dolorum eius eos eum facere fugiat id incidunt, iure iusto nemo, neque nesciunt obcaecati odit officiis perspiciatis possimus quam quo recusandae repudiandae sapiente sed ut voluptate! Aliquam aspernatur deleniti nemo?',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Vue3'
            ],
            [
                'title' => 'Aplicación de blog con Laravel, Tailwind, Alpine.js y Filament Admin panel',
                'active' => 1,
                'lang' => 'es',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus fugiat possimus repellendus rerum. Alias aliquid dicta doloribus enim et expedita illo inventore, ipsam iusto magni maxime minus obcaecati quo saepe tempore. Culpa inventore, odit. Ad eligendi fuga id optio, quibusdam quidem suscipit ullam.',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Filament, Alpine.js'
            ],
            [
                'title' => 'Aplicación de servicio de empresa con Laravel, Tailwind, Alpine.js y Filament Admin panel',
                'active' => 1,
                'lang' => 'es',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur, dolor dolore eligendi harum, id neque nulla officia pariatur praesentium quidem saepe? Ad aliquam amet aspernatur blanditiis dolor dolores earum eligendi facilis fugiat inventore itaque molestiae neque quaerat, quos, sequi, sit veritatis vero voluptates!',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Filament, Alpine.js'
            ],
            [
                'title' => 'Proyecto mascota en Javascript puro, especie de réplica de las hojas de cálculo online de google.',
                'active' => 1,
                'lang' => 'es',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet animi asperiores at consectetur consequatur deleniti dolor, doloribus eligendi esse eveniet facere fuga illo ipsam iure magni maiores molestias nam pariatur, perspiciatis provident quasi quo repellat tenetur voluptatum. Commodi deleniti fuga maxime omnis ullam!',
                'position' => '1',
                'tags' => 'Javascript, SCSS, REDUX'
            ],
            [
                'title' => 'Proyecto mascota con funcionalidades útiles que se pueden utilizar a menudo en muchos proyectos.',
                'active' => 1,
                'lang' => 'es',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur assumenda atque consectetur delectus deserunt dolorem ducimus explicabo illo molestiae mollitia nesciunt, non, nulla odio quos reprehenderit repudiandae sunt veritatis vero voluptatem! Consectetur dolore et ipsam libero nesciunt nisi, odio possimus quae repudiandae vitae.',
                'position' => '1',
                'tags' => 'PHP, Laravel, Javascript'
            ],
            [
                'title' => 'Proyecto mascota con información útil y diferentes cursos y materiales de estudio que puede utilizar.',
                'active' => 1,
                'lang' => 'es',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis consequatur labore numquam, odit possimus quidem similique sit tempora voluptate. Aliquam debitis ducimus ea earum fugit, harum impedit in inventore ipsum molestiae necessitatibus nostrum porro quam, quidem repellendus sed, suscipit tempore veritatis! Eius, harum.',
                'position' => '1',
                'tags' => 'Laravel, Filament'
            ],
            [
                'title' => 'Proyecto mascota con preguntas frecuentes en las entrevistas de trabajo.',
                'active' => 1,
                'lang' => 'es',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid deleniti eius facere id ipsam molestiae nobis nostrum numquam officia, praesentium quae rem repudiandae velit voluptatibus. Animi cumque, est laudantium officia quasi similique. Beatae dicta fuga magni molestiae nostrum pariatur quisquam suscipit totam vero?',
                'position' => '1',
                'tags' => 'Laravel, Filament'
            ],

            [
                'title' => 'Фуллстек приложение для интернет-магазина на основе Laravel, Tailwind и Vue3',
                'active' => 1,
                'lang' => 'ru',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi assumenda cupiditate dolore dolorem dolorum eius eos eum facere fugiat id incidunt, iure iusto nemo, neque nesciunt obcaecati odit officiis perspiciatis possimus quam quo recusandae repudiandae sapiente sed ut voluptate! Aliquam aspernatur deleniti nemo?',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Vue3'
            ],
            [
                'title' => 'Блог на Laravel, Tailwind, Alpine.js и панелью администратора Filament',
                'active' => 1,
                'lang' => 'ru',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus fugiat possimus repellendus rerum. Alias aliquid dicta doloribus enim et expedita illo inventore, ipsam iusto magni maxime minus obcaecati quo saepe tempore. Culpa inventore, odit. Ad eligendi fuga id optio, quibusdam quidem suscipit ullam.',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Filament, Alpine.js'
            ],
            [
                'title' => 'Веб-приложение для автосервиса с Laravel, Tailwind, Alpine.js и панелью администратора Filament',
                'active' => 1,
                'lang' => 'ru',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur, dolor dolore eligendi harum, id neque nulla officia pariatur praesentium quidem saepe? Ad aliquam amet aspernatur blanditiis dolor dolores earum eligendi facilis fugiat inventore itaque molestiae neque quaerat, quos, sequi, sit veritatis vero voluptates!',
                'position' => '1',
                'tags' => 'Laravel, Tailwind.css, Filament, Alpine.js'
            ],
            [
                'title' => 'Проект на чистом Javascript, реализация функционала google online spreadsheets своими руками.',
                'active' => 1,
                'lang' => 'ru',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet animi asperiores at consectetur consequatur deleniti dolor, doloribus eligendi esse eveniet facere fuga illo ipsam iure magni maiores molestias nam pariatur, perspiciatis provident quasi quo repellat tenetur voluptatum. Commodi deleniti fuga maxime omnis ullam!',
                'position' => '1',
                'tags' => 'Javascript, SCSS, REDUX'
            ],
            [
                'title' => 'Агрегатор полезного функционала, который можно часто использовать во многих проектах. ',
                'active' => 1,
                'lang' => 'ru',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur assumenda atque consectetur delectus deserunt dolorem ducimus explicabo illo molestiae mollitia nesciunt, non, nulla odio quos reprehenderit repudiandae sunt veritatis vero voluptatem! Consectetur dolore et ipsam libero nesciunt nisi, odio possimus quae repudiandae vitae.',
                'position' => '1',
                'tags' => 'PHP, Laravel, Javascript'
            ],
            [
                'title' => 'Собранная по открытым источникам база с информацией и различными курсами и учебными материалами, которые вы можете использовать.',
                'active' => 1,
                'lang' => 'ru',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis consequatur labore numquam, odit possimus quidem similique sit tempora voluptate. Aliquam debitis ducimus ea earum fugit, harum impedit in inventore ipsum molestiae necessitatibus nostrum porro quam, quidem repellendus sed, suscipit tempore veritatis! Eius, harum.',
                'position' => '1',
                'tags' => 'Laravel, Filament'
            ],
            [
                'title' => 'F.A.Q. при интервью на работу и ответы на них ',
                'active' => 1,
                'lang' => 'ru',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid deleniti eius facere id ipsam molestiae nobis nostrum numquam officia, praesentium quae rem repudiandae velit voluptatibus. Animi cumque, est laudantium officia quasi similique. Beatae dicta fuga magni molestiae nostrum pariatur quisquam suscipit totam vero?',
                'position' => '1',
                'tags' => 'Laravel, Filament'
            ],

//            [
//                "title" => "Fullstack application for e-shop with Laravel, Tailwind and backend admin panel in Vue3 on a subdomain",
//                "lang" => "en",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Stack: Laravel, Tailwind, Alpine.js and Vue3&nbsp;<br>&nbsp; &nbsp; &nbsp;Frontend: moscow-tyre.ru&nbsp;<br>&nbsp; &nbsp; &nbsp;Backend: backend.moscow-tyre.ru&nbsp;<br>&nbsp; &nbsp; &nbsp;Git: https://github.com/Elvis97rus/TyreShop&nbsp;<br><br>On the user part used templating blade and Alpine.js, for better search engine optimization (if necessary).&nbsp;<br><br>On the admin part web application on VueJs with api data retrieval.&nbsp;<br><br>The application is used to select tires by size, estimate and create an order. After order creation, order details are sent to bot(in TG chat) Goods are updated 4 times a day.</p>",
//                "position" => 1,
//                "file" => ["Qqsbos1PqIpjbF4VMHq3NpxbuXkPpx-metaYmFja2VuZC5tb3Njb3ctdHlyZXMucG5n-.png","jnyW6U7xR0lj8vlU2FnkuuOLDd0gW4-metabW9zY293LXR5cmVzLnBuZw==-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-01-29T10:41:55.000000Z",
//            ],
//            [
//                "title" => "Website for a private dental clinic",
//                "lang" => "en",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Website: https://ms-dentclinic.ru/</p><p><br>The website of the dental clinic is developed according to the design from the customer, using CMS ModX Revolution (PHP) and jQuery/JS.</p>",
//                "position" => 1,
//                "file" => ["PmSyMDvlBAE63uH2WjGFwqW2MTgw2S-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDEtMjkgMTMtNDgtMDEucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-01-29T10:48:17.000000Z",
//            ],
//            [
//                "title" => "Detailing Auto-service web-application ",
//                "lang" => "en",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Site: http://carfactory.artemsh-dev.ru<br>Stack: Laravel, Tailwind, Alpine.js and Filament Admin panel<br><br>An application to familiarize with CarFactory's clients' detailing services and make appointments via yclients.</p>",
//                "position" => 1,
//                "file" => ["onNWtEPq4eNLe9E0VOpwpH13rach0l-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDItMDQgMTYtNTMtMjkucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-02-04T14:04:04.000000Z",
//            ],
//            [
//                "title" => "Framework in pure Javascript, kind of replica from google online spreadsheets functionality. ",
//                "lang" => "en",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Git: https://github.com/Elvis97rus/excel-js</p><p>Web: http://js-excel.artemsh-dev.ru/</p>",
//                "position" => 1,
//                "file" => ["DqSlezJ1hSfW7M8LnCh8dfELgPBLCu-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDItMDEgMTgtNTItNDAucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-02-01T15:55:36.000000Z",
//            ],
//            [
//                "title" => "Telegram WebApp e-shop app",
//                "lang" => "en",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Telegram Bot: <strong>@tgwebapp_shop_bot </strong><br>&nbsp; &nbsp; Front: https://tgwebapp.artemsh-dev.store/&nbsp;<br>&nbsp; &nbsp; Back: https://tgwebapp.artemsh-dev.store/dashboard&nbsp;<br><br>When using the bot, it is possible to go to the web application inside the messenger. Once an order is placed, the details are sent to the chat and the order is sent to the database. Possibility to add to favorites. Unique identifier - chat ID.&nbsp;<br><br>The application consists of: <br>&nbsp; &nbsp; &nbsp;frontend part, to display when you click on the button in the bot,&nbsp;<br>&nbsp; &nbsp; &nbsp;backend part - admin panel where you can work with orders, products, categories, etc.</p>",
//                "position" => 1,
//                "file" => ["z9dvwyATRn8iweqMVuVoCHIP4gpb2R-metadGd3ZWJhcHBfc2hvcF9kYXNoYm9hcmQucG5n-.png","rfQstWvlwwV8UHmjMNWRCmG1igHiy1-metadGd3ZWJhcHBfc2hvcC5qcGc=-.jpg"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-01-29T10:44:53.000000Z",
//            ],
//            [
//                "title" => "Aplicación e-shop fullstack con Laravel, Tailwind y Vue3",
//                "lang" => "es",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Pila: Laravel, Tailwind, Alpine.js y Vue3&nbsp;<br>&nbsp; &nbsp; &nbsp;Frontend: moscow-tyre.ru&nbsp;<br>&nbsp; &nbsp; &nbsp;Backend: backend.moscow-tyre.ru&nbsp;<br>&nbsp; &nbsp; &nbsp;Git: https://github.com/Elvis97rus/TyreShop&nbsp;<br><br>En la parte de usuario utilizado plantillas de hoja y Alpine.js, para una mejor optimización de motores de búsqueda (si es necesario). <br>En la parte de administración de la aplicación web en VueJs con la recuperación de datos api. <br>La aplicación se utiliza para seleccionar los neumáticos por tamaño, estimar y crear una orden. Después de la creación de la orden, los detalles de la orden se envían a bot(in TG chat)&nbsp;</p><p>Las mercancías se actualizan 4 veces al día.</p>",
//                "position" => 1,
//                "file" => ["VxiOC4MSgN5XilHC57KlqxRsN7l2mO-metaYmFja2VuZC5tb3Njb3ctdHlyZXMucG5n-.png","agTGw0AQ2qUkdoPwyrgundwoHV4eGV-metabW9zY293LXR5cmVzLnBuZw==-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-01-29T10:50:25.000000Z",
//            ],
//            [
//                "title" => "Aplicación de servicio de empresa con Laravel, Tailwind, Alpine.js y Filament Admin panel",
//                "lang" => "es",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Sitio: http://carfactory.artemsh-dev.ru<br>Stack: Laravel, Tailwind, Alpine.js y Filament Admin panel<br><br>Una aplicación para que los clientes de CarFactory conozcan los servicios de detallado de CarFactory y puedan concertar citas a través de yclients.</p>",
//                "position" => 1,
//                "file" => ["ELHiAo1gk4gncbRlfRyT151N8Vjxeq-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDItMDQgMTYtNTMtMjkucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-02-04T14:04:42.000000Z",
//            ],
//            [
//                "title" => "Página web para una clínica dental privada",
//                "lang" => "es",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Página web: https://ms-dentclinic.ru/<br><br>El sitio web de la clínica dental se desarrolla según el diseño del cliente, utilizando CMS ModX Revolution (PHP) y jQuery/JS.</p>",
//                "position" => 1,
//                "file" => ["8ATnq5A7nLg3EgI889hSfcTTtuSAB4-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDEtMjkgMTMtNDgtMDEucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-01-29T10:51:34.000000Z",
//            ],
//            [
//                "title" => "Proyecto sobre Javascript puro, implementación de funcionalidad google hojas de cálculo en línea con sus propias manos.",
//                "lang" => "es",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Git: https://github.com/Elvis97rus/excel-js<br>Página web: http://js-excel.artemsh-dev.ru/</p>",
//                "position" => 1,
//                "file" => ["8iz5ZggbzMMTbB6QwRwBrTWfOIBCfd-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDItMDEgMTgtNTItNDAucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-02-01T16:05:11.000000Z",
//            ],
//            [
//                "title" => "Фуллстек приложение для интернет-магазина c админ панелью",
//                "lang" => "ru",
//                "link" => null,
//                "active" => 1,
//                "content" => "<ul><li> Стек: Laravel, Tailwind, Alpine.js и Vue3&nbsp;</li><li> Фронт: moscow-tyre.ru&nbsp;</li><li> Бек: backend.moscow-tyre.ru&nbsp;</li><li> Гит: https://github.com/Elvis97rus/TyreShop&nbsp;</li></ul><p>На пользовательской части использован шаблонизатор блейд и Alpine.js, для лучшей поисковой оптимизации(при необходимости).&nbsp;</p><p>На админской части веб приложение на VueJs с получением данных по апи.&nbsp;</p><p>Приложение используется для подбора шин по размерам, оценки и создания заказа. После создания заказа, детали заказа отправляются в бота(в ТГ чат) Товары обновляются 4 раза в сутки.</p>",
//                "position" => 1,
//                "file" => ["ekBcVAuOOxKUOgS7sQe8ZTmdq20o0L-metaYmFja2VuZC5tb3Njb3ctdHlyZXMucG5n-.png","AHTQytSBIwCAlaADPgCKLaHkMnR9Fx-metabW9zY293LXR5cmVzLnBuZw==-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-01-26T17:13:45.000000Z",
//            ],
//            [
//                "title" => "Telegram WebApp приложение магазина",
//                "lang" => "ru",
//                "link" => null,
//                "active" => 1,
//                "content" => "<ul><li>Telegram Bot: <strong>@tgwebapp_shop_bot&nbsp;</strong></li><li>Front: https://tgwebapp.artemsh-dev.store/&nbsp;</li><li>Back: https://tgwebapp.artemsh-dev.store/dashboard&nbsp;</li></ul><p>При использовании бота возможен переход в веб приложение внутри мессенджера. После совершения заказа, детали отправляются в чат, а заказ в базу. Возможность добавлять в избранное. Уникальный идентификатор - ИД чата.&nbsp;</p><p>Приложение состоит из:&nbsp;</p><ul><li>&nbsp;фронтенд части, для отображения при переходе по кнопке в боте,&nbsp;</li><li>&nbsp;бекенд части - админ-панели в которой можно работать с заказами, товарами, категориями и т.п.</li></ul>",
//                "position" => 1,
//                "file" => ["a9I5p8OzJOTeq8oIhvHgHygd8Nz8qV-metadGd3ZWJhcHBfc2hvcF9kYXNoYm9hcmQucG5n-.png","WA8eQCp1G5Hc0xYB9d4jk8jstHnpgz-metadGd3ZWJhcHBfc2hvcC5qcGc=-.jpg"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-01-26T15:33:11.000000Z",
//            ],
//            [
//                "title" => "Веб-приложение для автосервиса с Laravel, Tailwind, Alpine.js и панелью администратора Filament",
//                "lang" => "ru",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Site: http://carfactory.artemsh-dev.ru<br>Stack: Laravel, Tailwind, Alpine.js and Filament Admin panel<br><br>Приложение для ознакомления с услугами детейлинга клиентов сервиса CarFactory и записи через yclients.</p>",
//                "position" => 1,
//                "file" => ["w7Nbave1Gd3Ps56z7TmQaYiRbmEGXQ-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDItMDQgMTYtNTMtMjkucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-02-04T14:05:47.000000Z",
//            ],
//            [
//                "title" => "Проект на чистом Javascript, реализация функционала google online spreadsheets своими руками.",
//                "lang" => "ru",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Гит: https://github.com/Elvis97rus/excel-js<br>Сайт: http://js-excel.artemsh-dev.ru/</p>",
//                "position" => 1,
//                "file" => ["bVqCAPvqOVJCqcVjc86JheZu6scABj-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDItMDEgMTgtNTItNDAucG5n-.png"],
//                "created_at" => "2024-01-26T10:13:42.000000Z",
//                "updated_at" => "2024-02-01T15:57:21.000000Z",
//            ],
//            [
//                "title" => "Сайт для частной стоматологической кликинки",
//                "lang" => "ru",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Сайт: https://ms-dentclinic.ru/</p><p><br>Сайт стоматологической клиники разработан по дизайну от заказчика, с использованием CMS ModX Revolution (PHP) и jQuery/JS.</p>",
//                "position" => 1,
//                "file" => ["2rX9oGfyFEyrcqF1W0CtWbqopQjuOR-meta0KHQvdC40LzQvtC6INGN0LrRgNCw0L3QsCDQvtGCIDIwMjQtMDEtMjkgMTMtNDgtMDEucG5n-.png"],
//                "created_at" => "2024-01-29T09:22:21.000000Z",
//                "updated_at" => "2024-01-29T10:48:27.000000Z",
//            ],
//            [
//                "title" => "Aplicación de tienda electrónica Telegram WebApp",
//                "lang" => "es",
//                "link" => null,
//                "active" => 1,
//                "content" => "<p>Bot de Telegram: <strong>@tgwebapp_shop_bot</strong><br>&nbsp; &nbsp; Delantero: https://tgwebapp.artemsh-dev.store/&nbsp;<br>&nbsp; &nbsp; Reverso: https://tgwebapp.artemsh-dev.store/dashboard&nbsp;<br><br>Al utilizar el bot, es posible ir a la aplicación web dentro del messenger. Una vez que se realiza un pedido, los detalles se envían al chat y el pedido se envía a la base de datos. Posibilidad de añadir a favoritos. Identificador único - chat ID.&nbsp;<br><br>La aplicación consta de:&nbsp;<br>&nbsp; &nbsp; &nbsp;frontend parte, para mostrar al hacer clic en el botón en el bot,&nbsp;<br>&nbsp; &nbsp; &nbsp;parte backend - panel de administración donde se puede trabajar con pedidos, productos, categorías, etc.</p>",
//                "position" => 1,
//                "file" => ["3j3l2Ld49EJjv03l27g33fWzzetKxn-metadGd3ZWJhcHBfc2hvcF9kYXNoYm9hcmQucG5n-.png","dmI1Q6LtLyhP23QaCItLKqEssQFewi-metadGd3ZWJhcHBfc2hvcC5qcGc=-.jpg"],
//                "created_at" => "2024-01-29T10:54:20.000000Z",
//                "updated_at" => "2024-01-29T10:54:57.000000Z",
//            ]

        ];
    }
}
