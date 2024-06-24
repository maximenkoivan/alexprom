<?php

namespace classes\Services;


use classes\Exceptions\ValidationException;
use Respect\Validation\Validator as v;


/**
 * Class Validation
 */
class Validator
{
    private float $scoreMaxCapcha = 0.5;

    private array $field;

    private array $errorMessages = [
        'recaptcha' => [
            'ru' => 'Recaptcha не пройдена',
            'en' => 'Recaptcha not passed',
        ],
        'format' => [
            'ru' => 'Неверный формат поля #FIELD#',
            'en' => 'Wrong format of #FIELD#',
        ],
        'file_ext' => [
            'ru' => 'Недопустимый тип файла, разрешены: #PARAM#',
            'en' => 'Invalid file type, allowed: #PARAM#',
        ],
        'file_size' => [
            'ru' => 'Загружаемый файл может быть не больше #PARAM#Мб',
            'en' => 'The uploaded file can be no more than #PARAM#Mb',
        ],
        'files_max_number' => [
            'ru' => 'Количество файлов не может быть больше #PARAM#',
            'en' => 'The number of files cannot be more #PARAM#',
        ],
        'empty' => [
            'ru' => 'Поле #FIELD# не может быть пустым.',
            'en' => 'The field #FIELD# cannot be empty.',
        ],
        'inn' => [
            'ru' => 'Проверьте правильность заполнения ИНН',
            'en' => 'Check the correctness of filling in the ITIN',
        ],
        'min' => [
            'ru' => 'Минимальное количество символов в поле #FIELD#: #PARAM#',
            'en' => 'The field #FIELD# cannot be shorter #PARAM# chars',
        ],
        'max' => [
            'ru' => 'Максимальное количество символов в поле #FIELD#: #PARAM#',
            'en' => 'The field #FIELD# cannot be longer #PARAM# chars',
        ],
    ];


    public function __construct($field)
    {
        $this->field = $field;
    }

    /**
     * Запускает процесс валидации
     * @return string|null
     */
    public function run(): ?string
    {
        if (!empty($this->field['rules'])) {
            $rules = explode('|', $this->field['rules']);

            foreach ($rules as $rule) {
                $param = '';
                $ruleParts = explode(':', $rule);
                $ruleName = $ruleParts[0];
                if (!empty($ruleParts[1])) {
                    $param = $ruleParts[1];
                }

                try {
                    switch ($ruleName) {
                        case 'recaptcha':
                            if (!$this->validateRecaptcha()) {
                                throw new ValidationException($this->getErrors('recaptcha'));
                            }
                            break;
                        case 'required':
                            if (!$this->is_required()) {
                                throw new ValidationException($this->getErrors('required'));
                            }
                            break;
                        case 'email':
                            if (!$this->is_email()) {
                                throw new ValidationException($this->getErrors('format'));
                            }
                            break;
                        case 'phone':
                            if (!$this->is_phone()) {
                                throw new ValidationException($this->getErrors('format'));
                            }
                            break;
                        case 'file_ext':
                            if (!$this->fileExtension($param)) {
                                throw new ValidationException($this->getErrors('file_ext', $param));
                            }
                            break;
                        case 'file_size':
                            if (!$this->fileSize($param)) {
                                throw new ValidationException($this->getErrors('file_size', $param));
                            }
                            break;
                        case 'files_max_number':
                            if (!$this->filesMaxNumber($param)) {
                                throw new ValidationException($this->getErrors('files_max_number', $param));
                            }
                            break;
                        case 'min':
                            if (!$this->min($param)) {
                                throw new ValidationException($this->getErrors('min', $param));
                            }
                            break;
                        case 'max':
                            if (!$this->max($param)) {
                                throw new ValidationException($this->getErrors('max', $param));
                            }
                            break;
                        case 'inn':
                            if (!$this->is_inn()) {
                                throw new ValidationException($this->getErrors('inn'));
                            }
                            break;
                    }
                } catch (ValidationException $e) {
                    return $e->getMessage();
                }
            }
        }
        return null;
    }


    /**
     * Проверяет валидность рекапчи
     */
    private function validateRecaptcha()
    {
        return true;
    }

    /**
     * Проверяет данные на пустую строку
     * и пробелы
     * @return bool
     */
    private function is_required(): bool
    {
        return v::notEmpty()->validate($this->field['value']);
    }

    /**
     * Проверяет поле на email
     * @return bool
     */
    private function is_email(): bool
    {
        return v::email()->validate($this->field['value']);
    }

    /**
     * Проверяет поле на номер телефона
     * @return bool
     */
    private function is_phone(): bool
    {
        $regex = '/^\s?(\+\s?7|8)([- ()]*\d){10}$/';
        if ($this->field['value'] !== '' && preg_match($regex, $this->field['value']) !== 1) {
            return false;
        }
        return true;
    }

    /**
     * Проверяет поле на ИНН
     * @return bool
     */
    private function is_inn(): bool
    {
        if (mb_ereg_match('^[0-9]{10}$', $this->field['value']) || mb_ereg_match('^[0-9]{12}$', $this->field['value'])) return true;
        return false;
    }

    /**
     * Проверяет данные на минимальное
     * количество символов
     * @param $param
     * @return bool
     */
    private function min($param): bool
    {
        return v::stringType()->length($param, null)->validate($this->field['value']);
    }

    /**
     * Проверяет данные на максимальное
     * количество символов
     * @param $param
     * @return bool
     */
    private function max($param): bool
    {
        return v::stringType()->length(null, $param)->validate($this->field['value']);
    }

    private function filesMaxNumber($param)
    {
        return intval($param) > count($this->field['value']);
    }

    private function fileExtension($param)
    {
        $rule = explode(',', $param);
        if (is_array($this->field['value'])) {
            foreach ($this->field['value'] as $file) {
                $ext = explode('/', $file['type']);
                if (!in_array($ext[1] ?: $ext[0], $rule)) {
                    return false;
                }
            }
        } else {
            $ext = explode('/', $this->field['type']);
            if (!in_array($ext[1] ?: $ext[0], $rule)) {
                return false;
            }
        }
        return true;
    }

    private function fileSize($param)
    {
        if (is_array($this->field['value'])) {
            foreach ($this->field['value'] as $file) {
                if ($file['size'] > $param * 1024 * 1024) {
                    return false;
                }
            }
        } else {
            if ($this->field['size'] > $param * 1024 * 1024) {
                return false;
            }
        }
        return true;
    }

    /**
     * Возвращает текст соответствующей ошибки
     * @param string $code
     * @param string $param
     * @return array|string
     */
    private function getErrors(string $code, string $param = ''): array|string
    {
        switch ($code) {
            case 'recaptcha':
                $message = $this->errorMessages['recaptcha'][LANGUAGE_ID];
                break;
            case 'required':
                $message = $this->errorMessages['empty'][LANGUAGE_ID];
                break;
            case 'format':
                $message = $this->errorMessages['format'][LANGUAGE_ID];
                break;
            case 'file_ext':
                $message = $this->errorMessages['file_ext'][LANGUAGE_ID];
                break;
            case 'file_size':
                $message = $this->errorMessages['file_size'][LANGUAGE_ID];
                break;
            case 'files_max_number':
                $message = $this->errorMessages['files_max_number'][LANGUAGE_ID];
                break;
            case 'min':
                $message = $this->errorMessages['min'][LANGUAGE_ID];
                break;
            case 'inn':
                $message = $this->errorMessages['inn'][LANGUAGE_ID];
                break;
            default:
                $message = 'Неизвестная ошибка';
        }

        $result = str_replace('#FIELD#', $this->field[LANGUAGE_ID], $message);
        return str_replace('#PARAM#', $param, $result);
    }
}
