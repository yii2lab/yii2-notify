Уведомления (notify)
====================

## SMS

Отправка SMS-сообщения

```php
Yii::$app->notify->sms->send('77771111111', 'текст сообщения');
```

## Email

Отправка Email-сообщения

```php
Yii::$app->notify->email->send('qwerty@ya.ru', 'тема письма', 'текст письма');
```

## Flash

Флэш-сообщения - это уведомления об успешных/провальных действиях пользователя.

Например, пользователь аутентифицируется, после этого над содержимым будет показано, 
что он успешно вошел в свой аккаунт.
Либо при добавлении чего-либо, пользователь будет так же уведомлен.

Отправка Flash-сообщения

```php
Yii::$app->notify->flash->send('текст сообщения', Alert::TYPE_WARNING);
```

## Общие принципы

Вместо темы или содержания мы можем использовать доступ к переводам

```php
Yii::$app->notify->flash->send(['main', 'not_found'], Alert::TYPE_DANGER);
```

SMS и Email Отправляются через очередь по CRON.