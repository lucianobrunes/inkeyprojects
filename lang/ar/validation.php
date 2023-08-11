<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول السمة:.',
    'active_url' => 'السمة: ليست عنوان URL صالحًا.',
    'after' => 'يجب أن تكون السمة تاريخًا بعد: التاريخ.',
    'after_or_equal' => 'يجب أن تكون السمة تاريخًا بعد: التاريخ أو مساويًا له.',
    'alpha' => 'لا يجوز أن تحتوي السمة: إلا على أحرف.',
    'alpha_dash' => 'لا يجوز أن تحتوي السمة: إلا على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'لا يجوز أن تحتوي السمة: إلا على أحرف وأرقام.',
    'array' => 'يجب أن تكون السمة مصفوفة.',
    'before' => 'يجب أن تكون السمة تاريخًا قبل: التاريخ.',
    'before_or_equal' => 'يجب أن تكون السمة تاريخًا قبل: التاريخ أو مساويًا له.',
    'between' => [
        'numeric' => 'يجب أن تكون السمة: بين: min و: max.',
        'file' => 'يجب أن تكون السمة: بين: min و: max كيلوبايت.',
        'string' => 'يجب أن تكون السمة: بين: min و: max من الأحرف.',
        'array' => 'يجب أن تحتوي السمة: على ما بين: min و: max items.',
    ],
    'boolean' => 'يجب أن يكون حقل السمة صحيحًا أو خطأ.',
    'confirmed' => 'تأكيد السمة غير مطابق.',
    'date' => 'السمة: ليست تاريخًا صالحًا.',
    'date_equals' => 'يجب أن تكون السمة: تاريخ يساوي: date.',
    'date_format' => 'السمة: لا تتوافق مع التنسيق: التنسيق.',
    'different' => 'يجب أن تكون السمة و: أخرى مختلفة.',
    'digits' => 'يجب أن تكون السمة: أرقام أرقام.',
    'digits_between' => 'يجب أن تكون السمة: بين: min و: max أرقام.',
    'dimensions' => 'السمة لها أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي حقل السمة على قيمة مكررة.',
    'email' => 'يجب أن تكون السمة: عنوان بريد إلكتروني صالح.',
    'exists' => 'السمة المحددة غير صالحة.',
    'file' => 'يجب أن تكون السمة: ملفًا.',
    'filled' => 'يجب أن يحتوي حقل السمة على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون السمة: أكبر من: القيمة.',
        'file' => 'يجب أن تكون السمة: أكبر من: القيمة كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أكبر من: أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة: على أكثر من: عناصر القيمة.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون السمة: أكبر من أو تساوي: value.',
        'file' => 'يجب أن تكون السمة: أكبر من أو تساوي: القيمة كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أكبر من أو تساوي: أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة: على عناصر قيمة أو أكثر.',
    ],
    'image' => 'يجب أن تكون السمة صورة.',
    'in' => 'السمة المحددة غير صالحة.',
    'in_array' => 'حقل السمة: غير موجود في: أخرى.',
    'integer' => 'يجب أن تكون السمة عددًا صحيحًا.',
    'ip' => 'يجب أن تكون السمة: عنوان IP صالحًا.',
    'ipv4' => 'يجب أن تكون السمة: عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن تكون السمة: عنوان IPv6 صالحًا.',
    'json' => 'يجب أن تكون السمة: سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'يجب أن تكون السمة: أقل من: القيمة.',
        'file' => 'يجب أن تكون السمة: أقل من: value كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أقل من: أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة: على أقل من: عناصر القيمة.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون السمة: أقل من أو تساوي: القيمة.',
        'file' => 'يجب أن تكون السمة: أقل من أو تساوي: value كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أقل من أو تساوي: أحرف القيمة.',
        'array' => 'يجب ألا تحتوي السمة: على أكثر من: عناصر القيمة.',
    ],
    'max' => [
        'numeric' => 'لا يجوز أن تكون السمة: أكبر من: max.',
        'file' => 'لا يجوز أن تكون السمة: أكبر من: أقصى كيلوبايت.',
        'string' => 'لا يجوز أن تكون السمة: أكبر من: max حرفًا.',
        'array' => 'لا يجوز أن تحتوي السمة: على أكثر من: max items.',
    ],
    'mimes' => 'يجب أن تكون السمة: ملفًا من النوع: القيم.',
    'mimetypes' => 'يجب أن تكون السمة: ملفًا من النوع: القيم.',
    'min' => [
        'numeric' => 'يجب أن تكون السمة: min.',
        'file' => 'يجب ألا تقل السمة: عن: دقيقة كيلوبايت.',
        'string' => 'يجب ألا تقل السمة: عن: min حرفًا.',
        'array' => 'يجب أن تحتوي السمة: على الأقل على: min من العناصر.',
    ],
    'not_in' => 'السمة المحددة: غير صالحة.',
    'not_regex' => 'تنسيق السمة: غير صالح.',
    'numeric' => 'يجب أن تكون السمة رقمًا.',
    'present' => 'يجب أن يكون حقل السمة موجودًا.',
    'regex' => 'تنسيق السمة: غير صالح.',
    'required' => ': حقل السمة مطلوب.',
    'required_if' => 'يكون حقل السمة مطلوبًا عندما: الآخر هو: القيمة.',
    'required_unless' => 'حقل السمة: مطلوب إلا إذا كان الآخر في: القيم.',
    'required_with' => 'حقل السمة مطلوب عندما: القيم موجودة.',
    'required_with_all' => 'يكون حقل السمة مطلوبًا عندما تكون: القيم موجودة.',
    'required_without' => 'حقل السمة مطلوب عندما: القيم غير موجودة.',
    'required_without_all' => 'يكون حقل السمة مطلوبًا في حالة عدم وجود أي من قيم:.',
    'same' => 'يجب أن تتطابق السمة: و: other.',
    'size' => [
        'numeric' => 'يجب أن تكون السمة: الحجم.',
        'file' => 'يجب أن تكون السمة: الحجم كيلوبايت.',
        'string' => 'يجب أن تكون السمة: حجم الأحرف.',
        'array' => 'يجب أن تحتوي السمة: على عناصر الحجم.',
    ],
    'starts_with' => 'يجب أن تبدأ السمة: بأحد القيم التالية:',
    'string' => 'يجب أن تكون السمة: سلسلة.',
    'timezone' => 'يجب أن تكون السمة: منطقة صالحة.',
    'unique' => 'تم بالفعل استخدام السمة:.',
    'uploaded' => 'فشل تحميل السمة:.',
    'url' => 'تنسيق السمة: غير صالح.',
    'uuid' => 'يجب أن تكون السمة: UUID صالحًا.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
