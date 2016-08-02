<h2 class="item8">Дополнение</h2>

<p>Мы постарались сделать эту документацию как можно более доступной и понятной. Тем не
    менее, в случае возникновения любых сложностей с шаблоном Joomla, предложений по
    улучшению шаблонов или документации, Вы можете связаться с Командой технической поддержки 
    следующим образом:</p>

<h4>Помощь и поддержка</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Чат</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Тикет-система</a></li>
</ul>
<h4>Документация</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Руководство
            для начинающих</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Часто задаваемые
            вопросы</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Документация</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Туториалы</a></li>
</ul>
<h4>Решение возможных проблем с веб-шрифтами</h4>

<p>В случае некорректного отображения веб-шрифтов после установки, откройте для
    редактирования файл шаблона index.php (\templates\theme****\index.php).  Для этого, перейдите в Менеджер шаблонов (Extensions -> Template Manager
    -> Templates) в админ панели Joomla! и выберите соответствующий шаблон (Theme**** Details and Files).</p>

<p>Далее найдите строку:</p>
    <code>"$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---используемый
        шрифт---]');"</code><p> и измените ее на строку:</p>
<code>"$doc->addStyleSheet('//fonts.useso.com/css?family=[---используемый
    шрифт---]');".</code>
<h4>Расширения Joomla!</h4>

<p>На сайте <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a>
    можно скачать более 6 тысяч модулей, плагинов и компонентов, позволяющих добавлять
    различный функционал к веб-сайтам Joomla.</p>
<h4>Joomla! Предупреждение об использовании cookies</h4>

<p>По закону ЕС о Cookies, Вы должны добавить на Ваш сайт модуль, который будет
    отображать предупреждение об использовании cookies на сайте. Мы рекомендуем следующие
    модули:</p>
<ul class="marked-list">
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookie Accept</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU e-Privacy Directive</a></li>
</ul>
<h4>Дополнительные ссылки</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Технические
            требования</a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">Лицензия и использование</a></li>
</ul>

<h4>Пользовательские блоки</h4>

<p class="alert alert-warning">
    В модулях этого типа часто возникает необходимость использовать свойство loadmodule/loadposition, например, "{loadmodule articles_single, About us}" в содержимом. Для предотвращения возникновения 404 ошибки на сайте, убедитесь, что название подключаемого модуля  совпадает с тем, которое Вы указали при подключении. В данном случае, модуль "About us" должен быть в состоянии published и не содержать более одного пробела в названии. Вы можете найти детальную информацию про loadmodule/loadposition на <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">этом сайте</a>.
</p>

<h4>Валидация</h4>

<p class="alert alert-info">
    В наших шаблонах мы придерживаемся семантических правил написания кода HTML-разметки и CSS-стилей. Однако,
    некоторые ошибки все же могут возникать при W3C валидации. Создание 100-процентно правильного кода, согласно
    стандартам консорциума W3C, ограничивает использование современных технологий создания сайтов, таких как
    спецификация CSS3 и разметка HTML5. Целью нашей компании является предоставление богатого пользовательского
    опыта с высококачественными шаблонами, и иногда нам приходится нарушать некоторые правила.
</p>
