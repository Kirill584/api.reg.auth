# API.REG.AUTH
В проекте есть две папки:
- api.reg.auth - собственно с API методами;
- reg.auth - простенький frontend для демонстрации возможностей API;

Также есть sql-файл, для возможности быстро создать БД с тестовыми данными.

Для того, чтобы запустить использовал OpenServer с Apache сервером и локальной БД. Тестировал API с помощью Postman и в браузерах Google Chrome и Яндекс браузер.

GET-запрос:
* http://api.reg.auth/feed - для проверки токена.

POST-запросы:
* http://api.reg.auth/register - запрос для регистрации нового пользователя;
* http://api.reg.auth/authorize - запрос для авторизации пользователя.
  
На frontend сверху есть две кнопки: Вход и Регистрация. После регистрации нужно нажать вход и ввести зарегистрированные данные, после чего будет кнопка для проверки валидации токена. При регистрации, авторизации и проверки токена, сверху выводится уведомления о том, что все проходит хорошо или нет. 

Для того, чтобы все работало нужна локальная БД с такими параметрами: (хост: 'localhost', имя пользователя: 'root', пароль: '', название БД: 'api_reg_auth') и таблицей users (есть sql-файл для быстрого создания БД), Apache-сервер (я пользовался OpenServer).
