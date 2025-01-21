<?php

return [

    'update' => [
        'error'                 => 'При оновленні сталася помилка. ',
        'success'               => 'Налаштування успішно оновлено.',
    ],
    'backup' => [
        'delete_confirm'        => 'Ви впевнені, що хочете видалити цей файл резервної копії? Цю дію неможливо скасувати. ',
        'file_deleted'          => 'Файл резервної копії успішно видалений. ',
        'generated'             => 'Новий файл резервної копії успішно створено.',
        'file_not_found'        => 'Цей файл резервної копії не знайдено на сервері.',
        'restore_warning'       => 'Так, відновити її. Я підтверджую, що це перезапише будь-які наявні дані в базі даних. Це також закриє всіх існуючих користувачів (включаючи вас).',
        'restore_confirm'       => 'Ви дійсно бажаєте відновити базу даних з :filename?'
    ],
    'restore' => [
        'success'               => 'Ваше резервне копіювання відновлено. Будь ласка, увійдіть в систему знову.'
    ],
    'purge' => [
        'error'     => 'Під час очищення сталася помилка. ',
        'validation_failed'     => 'Ваша чистка підтвердження неправильна. Будь ласка, введіть слово "DELETE" у полі підтвердження.',
        'success'               => 'Видалені записи успішно очищені.',
    ],
    'mail' => [
        'sending' => 'Надсилання тестового листа...',
        'success' => 'Повідомлення відправлено!',
        'error' => 'Повідомлення не може бути надіслано.',
        'additional' => 'Немає додаткового повідомлення про помилку. Перевірте налаштування пошти та журнал програми.'
    ],
    'ldap' => [
        'testing' => 'Тестування LDAP-підключення, Пов\'язування та запиту ...',
        '500' => '500 помилок сервера. Будь ласка, перевірте ваші журнали сервера для отримання додаткової інформації.',
        'error' => 'Щось пішло не так :(',
        'sync_success' => 'Приклад 10 користувачів, які повернулися з сервера LDAP на основі ваших налаштувань:',
        'testing_authentication' => 'Тестування авторизації LDAP...',
        'authentication_success' => 'Користувач успішно пройшов перевірку на зв\'язку з LDAP!'
    ],
    'webhook' => [
        'sending' => 'Відправка :app тестове повідомлення...',
        'success' => 'Ваша функція з інтеграцією :webhook_name!',
        'success_pt1' => 'Успіх! Перевірте ',
        'success_pt2' => ' канал для вашого тестового повідомлення, і будьте впевнені, що натисніть SAVE нижче, щоб зберегти свої налаштування.',
        '500' => 'Помилка 500 сервера.',
        'error' => 'Щось пішло не так. :app відповів(-ла) з: :error_message',
        'error_redirect' => 'ПОМИЛКА: 301/302 :endpoint повертає редиректор. З міркувань безпеки ми не слідуємо перенаправленням. Будь ласка, використовуйте фактичну кінцеву точку.',
        'error_misc' => 'Щось пішло не так. :( ',
    ]
];
