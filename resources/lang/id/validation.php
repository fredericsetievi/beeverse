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




    'accepted' => 'Atribut :attribute harus diterima.',
    'accepted_if' => 'Atribut :attribute harus diterima ketika :other adalah :value.',
    'active_url' => 'Atribut :attribute bukan URL yang valid.',
    'after' => 'Atribut :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Atribut :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Atribut :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Atribut :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num' => 'Atribut :attribute hanya boleh berisi huruf dan angka.',
    'array' => 'Atribut :attribute harus berupa array.',
    'before' => 'Atribut :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Atribut :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => 'Atribut :attribute harus berupa angka antara :min dan :max.',
        'file' => 'Atribut :attribute harus berupa file antara :min dan :max kilobytes.',
        'string' => 'Atribut :attribute harus berupa string antara :min dan :max karakter.',
        'array' => 'Atribut :attribute harus berupa array antara :min dan :max item.',
    ],
    'boolean' => 'Atribut :attribute harus berupa true atau false.',
    'confirmed' => 'Atribut :attribute konfirmasi tidak sesuai.',
    'current_password' => 'Atribut :attribute tidak sesuai dengan password saat ini.',
    'date' => 'Atribut :attribute bukan tanggal yang valid.',
    'date_equals' => 'Atribut :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'Atribut :attribute tidak sesuai format :format.',
    'declined' => 'Atribut :attribute tidak diterima.',
    'declined_if' => 'Atribut :attribute tidak diterima ketika :other adalah :value.',

    'different' => 'Atribut :attribute dan :other harus berbeda.',
    'digits' => 'Atribut :attribute harus berupa angka :digits.',
    'digits_between' => 'Atribut :attribute harus berupa angka antara :min dan :max.',
    'dimensions' => 'Atribut :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Atribut :attribute memiliki nilai yang duplikat.',
    'email' => 'Atribut :attribute harus berupa alamat email yang valid.',
    'ends_with' => 'Atribut :attribute harus diakhiri dengan salah satu dari: :values.',
    'enum' => 'Atribut :attribute harus berupa salah satu dari: :values.',
    'exists' => 'Atribut :attribute yang dipilih tidak valid.',
    'file' => 'Atribut :attribute harus berupa file.',
    'filled' => 'Atribut :attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => 'Atribut :attribute harus lebih besar dari :value.',
        'file' => 'Atribut :attribute harus lebih besar dari :value kilobytes.',
        'string' => 'Atribut :attribute harus lebih besar dari :value karakter.',
        'array' => 'Atribut :attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => 'Atribut :attribute harus lebih besar atau sama dengan :value.',
        'file' => 'Atribut :attribute harus lebih besar atau sama dengan :value kilobytes.',
        'string' => 'Atribut :attribute harus lebih besar atau sama dengan :value karakter.',
        'array' => 'Atribut :attribute harus memiliki :value item atau lebih.',
    ],
    'image' => 'Atribut :attribute harus berupa gambar.',
    'in' => 'Atribut :attribute yang dipilih tidak valid.',
    'in_array' => 'Atribut :attribute tidak terdapat di dalam :other.',
    'integer' => 'Atribut :attribute harus berupa integer.',
    'ip' => 'Atribut :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Atribut :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Atribut :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Atribut :attribute harus berupa JSON string yang valid.',
    'lt' => [
        'numeric' => 'Atribut :attribute harus kurang dari :value.',
        'file' => 'Atribut :attribute harus kurang dari :value kilobytes.',
        'string' => 'Atribut :attribute harus kurang dari :value karakter.',
        'array' => 'Atribut :attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => 'Atribut :attribute harus kurang dari atau sama dengan :value.',
        'file' => 'Atribut :attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string' => 'Atribut :attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => 'Atribut :attribute harus memiliki kurang dari atau sama dengan :value item.',
    ],
    'mac_address' => 'Atribut :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'numeric' => 'Atribut :attribute tidak boleh lebih dari :max.',
        'file' => 'Atribut :attribute tidak boleh lebih dari :max kilobytes.',
        'string' => 'Atribut :attribute tidak boleh lebih dari :max karakter.',
        'array' => 'Atribut :attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => 'Atribut :attribute harus berupa file dengan tipe: :values.',
    'mimestype' => 'Atribut :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => 'Atribut :attribute harus minimal :min.',
        'file' => 'Atribut :attribute harus minimal :min kilobytes.',
        'string' => 'Atribut :attribute harus minimal :min karakter.',
        'array' => 'Atribut :attribute harus minimal :min item.',
    ],
    'multiple_of' => 'Atribut :attribute harus berupa bilangan yang bagi dengan :value.',
    'not_in' => 'Atribut :attribute yang dipilih tidak valid.',
    'not_regex' => 'Atribut :attribute tidak sesuai dengan format yang valid.',
    'numeric' => 'Atribut :attribute harus berupa angka.',
    'password' => 'Atribut :attribute tidak sesuai.',
    'present' => 'Atribut :attribute harus ada.',
    'prohibited' => 'Atribut :attribute tidak diperbolehkan.',
    'prohibited_if' => 'Atribut :attribute tidak diperbolehkan ketika :other adalah :value.',
    'prohibited_unless' => 'Atribut :attribute tidak diperbolehkan kecuali :other adalah :value.',
    'prohibits' => 'Atribut :attribute tidak dapat mengandung :values.',
    'regex' => 'Atribut :attribute harus sesuai dengan format yang valid.',
    'required' => 'Atribut :attribute wajib diisi.',
    'required_array_keys' => 'Atribut :attribute wajib diisi.',
    'required_if' => 'Atribut :attribute wajib diisi ketika :other adalah :value.',
    'required_unless' => 'Atribut :attribute wajib diisi kecuali :other adalah :value.',
    'required_with' => 'Atribut :attribute wajib diisi ketika :values ada.',
    'required_with_all' => 'Atribut :attribute wajib diisi ketika :values ada.',
    'required_without' => 'Atribut :attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => 'Atribut :attribute wajib diisi ketika tidak ada :values yang ada.',
    'same' => 'Atribut :attribute dan :other harus sama.',
    'size' => [
        'numeric' => 'Atribut :attribute harus berukuran :size.',
        'file' => 'Atribut :attribute harus berukuran :size kilobytes.',
        'string' => 'Atribut :attribute harus berukuran :size karakter.',
        'array' => 'Atribut :attribute harus mengandung :size item.',
    ],
    'starts_with' => 'Atribut :attribute harus dimulai dengan salah satu dari: :values.',
    'string' => 'Atribut :attribute harus berupa string.',
    'timezone' => 'Atribut :attribute harus berupa zona waktu yang valid.',
    'unique' => 'Atribut :attribute sudah ada sebelumnya.',
    'uploaded' => 'Atribut :attribute gagal diunggah.',
    'url' => 'Atribut :attribute tidak sesuai dengan format yang valid.',
    'uuid' => 'Atribut :attribute harus berupa UUID yang valid.',

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
            'rule-name' => 'custom-message',
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
