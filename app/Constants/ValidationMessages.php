<?php

namespace App\Constants;

class ValidationMessages {
    public const string INVALID_LOGIN = 'Неверный логин или пароль!';
    public const string INVALID_PHONE = 'Неверный номер телефона!';

    public static function messages(): array
    {
        return [
            'required' => 'Заполните поле!',
            'email' => 'Значение не является почтой!',
            'min' => 'Используйте не менее :min символов!',
            'max' => 'Превышено максимальное допустимое символов: :max!',
            'email.unique' => 'Почта занята!',
            'confirmed' => 'Пароли не совпадают!'
        ];
    }
}
