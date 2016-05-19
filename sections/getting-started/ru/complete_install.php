<h3>Полная установка</h3>

<p>Этот способ подойдёт Вам, если у Вас нет веб-сайта Joomla и Вы хотите установить его с нуля. </p>

<p>При помощи этого метода устанавливаются движок Joomla CMS, шаблон Joomla, демо-данные и все необходимые расширения.</p>

<!-- Creating database -->

<h3>Создание базы данных</h3>

<p>Когда все файлы будут загружены на хостинг-сервер, необходимо подготовить новую базу данных для веб-сайта Joomla. Её
    можно создать при помощи инструмента управления базами данных в Панели управления хостингом (<i>обычно для этого используется PhpMyAdmin</i>).
</p>

<h6>При помощи phpMyAdmin можно создать новую базу данных, выполнив 3 простых шага (см. следующие слайды):</h6>

<ol class="index-list">
    <li>Нажмите на кнопку Database (База данных) в верхнем меню навигации, чтобы перейти в список баз данных.</li>

    <li>Введите название базы данных в поле "Create new database" (Создать новую базу данных). </li>

    <li>Нажмите на кнопку Create (Создать) справа.</li>
</ol>

<p>База данных появится в списке. Нажмите на название базы данных, для того чтобы получить к ней доступ.</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Откройте вкладку “Database” (База данных),  для того чтобы перейти в список баз данных:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Введите название базы данных:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Нажмите на кнопку "Создать":</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. База данных появится в списке. Нажмите на название базы данных, для того чтобы получить к ней доступ:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Вы также можете воспользоваться детальным видео-туториалом:
    <a href="/help/how-to-create-a-database.html" target="_blank">Как создать базу данных</a>.
</p>

<p>Если у Вас возникли сложности при создании базы данных, обратитесь к хостинг-провайдеру за поддержкой. </p>

<!-- Uploading files -->

<h3>Загрузка и разархивирование</h3>

<p>Для начала работы с Joomla, требуется загрузить файлы на хостинг-сервер. Это можно сделать при помощи
    Файлового менеджера Панели управления хостингом или при помощи FTP менеджера.</p>

<ol class="index-list">
    <li>Откройте шаблон и перейдите в папку 'joomla'.</li>

    <li>Выделите файлы 'unzip.php' и 'fullpackage.zip' и загрузите их на сервер (<a href="/help/how-upload-files-server-2.html" target="_blank">Как загрузить файлы на сервер</a>).
    </li>
    <li>Введите путь к файлу 'unzip.php' на сервере (<i class="muted">http://your_domain_name/unzip.php</i>) в адресной строке браузера <abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc."></abbr>.
    </li>

    <li>
        <p>Должно появиться следующее окно:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>В поле 'Choose your zip file’ (Выберите файл zip) выберите загруженный файл fullpackage.zip. </li>

    <li>В поле 'Unzip to’ (Распаковать в…) укажите папку, в которую нужно распаковать файлы. </li>

    <li>Нажмите на кнопку 'Unzip’ (Распаковать), для того чтобы распаковать файлы.</li>
</ol>

<p class="alert alert-info">Задайте правильные разрешения для папки, в которую нужно разархивировать файлы. Разрешения должны
    быть CHMOD 755 или 777 в зависимости от конфигурации сервера. </p>


<!-- Joomla CMS installation -->


<h3>Установка Joomla CMS</h3>

<h6> Проверьте выполнение всех
    подготовительных шагов
    и наличие требуемых программ.
</h6>

<p>Откройте браузер и пропишите путь к папке Joomla в адресной строке браузера (<i>например, http://your_domain_name/joomla</i>). Должно появиться окно установки Joomla CMS:
</p>


<h4>Настройка сайта</h4>

<p>В выпадающем списке “Select Language” (Выберите язык) выберите язык установки Joomla.</p>

<p>
    <span class="label">Обратите внимание:</span>
    выпадающий список “Select Language” (Выберите язык) позволяет выбрать только язык процесса установки Joomla. Эта настройка
не влияет на язык веб-сайта.
</p>

<p>Нужно заполнить все поля формы в разделе “Main Configuration” (Основные настройки). Обязательные поля помечены
    звездочкой *.</p>

<p>Заполните поля “Admin Email” (Адрес электронной почты админа), “Admin Username” (Имя админа) и “Admin Password” (Пароль
    админа) в правой колонке, для того чтобы создать пользователя нового веб-сайта Joomla с правами администратора.</p>

<p class="alert alert-danger">”Admin Email” (Адрес электронной почты админа), “Admin Username” (Имя админа) и "Admin  Password” (Пароль админа) необходимы для доступа в админ-панель веб-сайта Joomla. Сохраните их в надежном
    месте. </p>

<p>Когда все данные введены, нажмите на кнопку
    <strong>Next</strong> (Далее)
    в правом верхнем углу:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Конфигурация базы данных</h4>


<p>На втором этапе установки Joomla CMS необходимо ввести детали базы данных. Если они неизвестны, обратитесь к
    хостинг-провайдеру.</p>

<p>Поскольку Joomla устанавливается с нуля, нужно всего лишь ввести "Host Name" (Название хостинга), "Username" (Имя
    пользователя), "Database Name" (Название базы данных) и "Password" (Пароль). Остальные опции следует оставить по
    умолчанию, хотя возможны различия в зависимости от хостинг-провайдера. </p>

<p>Когда Вы введете детали, нажмите на кнопку
    <strong>Install</strong> (Установить)
    в правом верхнем углу:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>Обзор</h4>

<p>Установка Joomla CMS почти завершена. На этапе “Обзор” нужно задать установку демо-данных Joomla. </p>

<p class="alert alert-warning">Внимание: демо данные необходимы, если Вы хотите, чтобы веб-сайт Joomla выглядел
    полностью
    как Демо-версия шаблона: со всеми изображениями, текстом и настройками модулей. Для этого, выберите демо-данные под названием
    "sample_theme###", где ### - это номер темы.</p>

<p>Выберите демо-данные для установки или нажмите "None" (Нет), если 

Вы не хотите устанавливать демо-данные для вашего веб-сайта Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Ниже можно проверить, являются ли детали базы данных и детали доступа в админ-панель верными, а также отправить их на ваш адрес электронной почты:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>Также Вы можете проверить настройки установки и их соответствие требованиям  хостинг-сервера. Если Вы видите предупреждения красного цвета в разделе “Recommended settings” (Рекомендуемые настройки), обратитесь к хостинг-провайдеру за
    дальнейшей поддержкой:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p>Закончив проверку, нажмите кнопку
    <strong>Install</strong> (Установить)
    в правом верхнем углу.
</p>

<h4>Завершение установки</h4>


<p>Поздравляем! Вы установили Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger">С целью повышения безопасности, удалите папку "Installation" из корневой папки Joomla.</p>

<p class="alert alert-info">Подсказка:
    Вы можете воспользоваться детальным видео-туториалом:
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Как установить движок Joomla 3</a>
</p>

<p class="alert alert-warning">Обратите внимание: если Вы выполнили Полную установку, Вы можете пропустить
    разделы “Template Installation”(Установка шаблона), “Sample data installation” (Установка демо-данных) и
    “Extensions Installation” (Установка расширений), поскольку все эти элементы уже установлены.</p>


<p>Теперь  Вы можете приступить к настройке веб-сайта Joomla CMS. Нажмите на кнопку “<b>Site</b>” (Сайт), для того чтобы открыть
    веб-сайт или “<b>Administrator</b>" (Администратор), для того чтобы перейти в админ-панель Joomla.
</p> 
