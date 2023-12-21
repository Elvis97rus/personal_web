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

        ];
    }
}
