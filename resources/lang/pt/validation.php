<?php

return [

    /*
    |------------------------------------------------- -------------------------
    | Linhas de idioma de validação
    |------------------------------------------------- -------------------------
    |
    | As seguintes linhas de idioma contêm as mensagens de erro padrão usadas por
    | a classe validadora. Algumas dessas regras têm várias versões, como
    | como as regras de tamanho. Sinta-se à vontade para ajustar cada uma dessas mensagens aqui.
    |
    */

    'accepted'              => 'O campo :attribute deve ser aceito.' ,
    'active_url'            => 'O campo :attribute não é um URL válido.' ,
    'after'                 => 'O campo :attribute deve ser uma data após :date.' ,
    'after_or_equal'        => 'O campo :attribute deve ser uma data posterior ou igual a :date.' ,
    'alpha'                 => 'O campo :attribute só pode conter letras.' ,
    'alpha_dash'            => 'O campo :attribute só pode conter letras, números, hífens e sublinhados.' ,
    'alpha_num'             => 'O campo :attribute só pode conter letras e números.' ,
    'array'                 => 'O campo :attribute deve ser um array.' ,
    'before'                => 'O campo :attribute deve ser uma data anterior a :date.' ,
    'before_or_equal'       => 'O campo :attribute deve ser uma data anterior ou igual a :date.' ,
    'entre'               => [
        'numeric' => 'O campo :attribute deve ser um valor entre :min e :max.' ,
        'file'     => 'O arquivo :attribute deve estar entre :min e :max kilobytes.' ,
        'string'   => 'O campo :attribute deve conter entre :min e :max caracteres.' ,
        'array'    => 'O campo :attribute deve conter entre :min e :max elementos.' ,
    ],
    'boolean'               => 'O campo :attribute deve ser verdadeiro ou falso.' ,
    'confirmed'             => 'O campo de confirmação :attribute não corresponde.' ,
    'date'                  => 'O campo :attribute não corresponde a uma data válida.' ,
    'date_equals'           => 'O campo :attribute deve ser uma data igual a :date.' ,
    'date_format'           => 'O campo :attribute não corresponde ao formato de data :format.' ,
    'different'             => 'Os campos :attribute e :other devem ser diferentes.' ,
    'digits'                => 'O campo :attribute deve ser um número de :digits dígitos.' ,
    'digits_between'        => 'O campo :attribute deve conter entre :min e :max dígitos.' ,
    'dimensions'            => 'O campo :attribute tem dimensões de imagem inválidas.' ,
    'distinct'              => 'O campo :attribute tem um valor duplicado.' ,
    'email'                 => 'O campo :attribute deve ser um endereço de e-mail válido.' ,
    'ends_with'             => 'O campo :attribute deve terminar com um dos seguintes valores: :values' ,
    'exists'                => 'O campo :attribute selecionado não existe.' ,
    'file'                  => 'O campo :attribute deve ser um arquivo.' ,
    'filled'                => 'O campo :attribute deve ter um valor.' ,
    'gt'                    => [
        'numeric' => 'O campo :attribute deve ser maior que :value.' ,
        'file'     => 'O arquivo :attribute deve ser maior que :value kilobytes.' ,
        'string'   => 'O campo :attribute deve conter mais de :value caracteres.' ,
        'array'    => 'O campo :attribute deve conter mais de :value elementos.' ,
    ],
    'gte'                   => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.' ,
        'file'     => 'O arquivo :attribute deve ter :value ou mais kilobytes.' ,
        'string'   => 'O campo :attribute deve conter :value ou mais caracteres.' ,
        'array'    => 'O campo :attribute deve conter :value ou mais elementos.' ,
    ],
    'image'                 => 'O campo :attribute deve ser uma imagem.' ,
    'in'                    => 'O campo :attribute é inválido.' ,
    'in_array'              => 'O campo :attribute não existe em :other.' ,
    'integer'               => 'O campo :attribute deve ser um inteiro.' ,
    'ip'                    => 'O campo :attribute deve ser um endereço IP válido.' ,
    'ipv4'                  => 'O campo :attribute deve ser um endereço IPv4 válido.' ,
    'ipv6'                  => 'O campo :attribute deve ser um endereço IPv6 válido.' ,
    'json'                  => 'O campo :attribute deve ser uma string JSON válida.' ,
    'lt'                    => [
        'numeric' => 'O campo :attribute deve ser menor que :value.' ,
        'file'     => 'O arquivo :attribute deve ser menor que :value kilobytes.' ,
        'string'   => 'O campo :attribute deve conter menos de :value caracteres.' ,
        'array'    => 'O campo :attribute deve conter menos de :value elementos.' ,
    ],
    'lte'                   => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.' ,
        'file'     => 'O arquivo :attribute deve ter :value ou menos kilobytes.' ,
        'string'   => 'O campo :attribute deve conter :value ou menos caracteres.' ,
        'array'    => 'O campo :attribute deve conter :value ou menos elementos.' ,
    ],
    'max'                   => [
        'numeric' => 'O campo :attribute não deve ser maior que :max.' ,
        'file'     => 'O arquivo :attribute não deve ser maior que :max kilobytes.' ,
        'string'   => 'O campo :attribute não deve conter mais do que :max caracteres.' ,
        'array'    => 'O campo :attribute não deve conter mais que :max elementos.' ,
    ],
    'mimes'                 => 'O campo :attribute deve ser um arquivo do tipo: :values.' ,
    'mimetypes'             => 'O campo :attribute deve ser um arquivo do tipo: :values.' ,
    'min'                   => [
        'numeric' => 'O campo :attribute deve ter pelo menos :min.' ,
        'file'     => 'O arquivo :attribute deve ter pelo menos :min kilobytes.' ,
        'string'   => 'O campo :attribute deve conter pelo menos :min caracteres.' ,
        'array'    => 'O campo :attribute deve conter pelo menos :min elementos.' ,
    ],
    'not_in'                => 'O campo :attribute selecionado é inválido.' ,
    'not_regex'             => 'O formato do campo :attribute é inválido.' ,
    'numeric'               => 'O campo :attribute deve ser um número.' ,
    'password'              => 'A senha está incorreta.' ,
    'present'               => 'O campo :attribute deve estar presente.' ,
    'regex'                 => 'O formato do campo :attribute é inválido.' ,
    'required'              => 'O campo :attribute é obrigatório.' ,
    'required_if'           => 'O campo :attribute é obrigatório quando o campo :other é :value.' ,
    'required_unless'       => 'O campo :attribute é obrigatório a menos que :other seja encontrado em :values.' ,
    'required_with'         => 'O campo :attribute é obrigatório quando :values ​​está presente.' ,
    'required_with_all'     => 'O campo :attribute é obrigatório quando :values ​​estão presentes.' ,
    'required_without'      => 'O campo :attribute é obrigatório quando :values ​​não está presente.' ,
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos campos :values ​​está presente.' ,
    'same'                  => 'Os campos :attribute e :other devem corresponder.' ,
    'size'                  => [
        'numeric' => 'O campo :attribute deve ser :size.' ,
        'file'     => 'O arquivo :attribute deve ter :size kilobytes.' ,
        'string'   => 'O campo :attribute deve conter :size caracteres.' ,
        'array'    => 'O campo :attribute deve conter :size elementos.' ,
    ],
    'starts_with'           => 'O campo :attribute deve começar com um dos seguintes valores: :values' ,
    'string'                => 'O campo :attribute deve ser uma string.' ,
    'timezone'              => 'O campo :attribute deve ser um fuso horário válido.' ,
    'unique'                => 'O valor do campo :attribute já está em uso.' ,
    'uploaded'              => 'O campo :attribute não pôde ser carregado.' ,
    'url'                   => 'O formato do campo :attribute é inválido.' ,
    'uuid'                  => 'O campo :attribute deve ser um UUID válido.' ,

    /*
    |------------------------------------------------- -------------------------
    | Linhas de idioma de validação personalizada
    |------------------------------------------------- -------------------------
    |
    | Aqui você pode especificar mensagens de validação personalizadas para atributos usando o
    | convenção "attribute.rule" para nomear as linhas. Isso torna rápido para
    | especifique uma linha de idioma personalizada específica para uma determinada regra de atributo.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message' ,
        ],
    ],

    /*
    |------------------------------------------------- -------------------------
    | Atributos de validação personalizados
    |------------------------------------------------- -------------------------
    |
    | As seguintes linhas de linguagem são usadas para trocar espaços reservados de atributos
    | com algo mais amigável ao leitor, como endereço de e-mail
    | de "e-mail". Isso simplesmente nos ajuda a tornar as mensagens um pouco mais limpas.
    |
    */

    'attributes' => [],

];