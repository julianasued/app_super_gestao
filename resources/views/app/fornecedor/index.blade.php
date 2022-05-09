<h3>Fornecedor</h3>

{{--comentario descartado pelo blade--}}

{{-- {{'texto de teste'}} <br> <?= //'texto de teste' ?> --}}
@php
    // para comentarios de uma linha
    /* para comentarios de multiplas linhas */
    /* {{}} & <?= ?> são a mesma coisa */

    //no php
/*     if () {
        # code...
    } elseif () {
        # code...
    } else {
        # code...
    } */

/*     if (!<condition>) {
        # code...
    } executa se o retorno for true */
    //isset
    /* if (isset(condition)) {
        # code...
    } //retorna true se a variavel tiver vazia */
        /* if (empty(condition)) {
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array[]
        - $var
    } //retorna se a variavel estiver definida */
@endphp

{{-- @dd($fornecedores) --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

{{-- @unless executa se o retorno for false --}}

{{-- @dd($fornecedores) --}}
{{-- Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
{{-- @if($fornecedores[0]['status'] == 'N')
    Fornecedor Inativo
@endif
<br>

@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless --}}

{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
    Status: {{ $fornecedores[0]['status'] }}
<br>
{{-- @isset($fornecedores[0]['cnpj'])
    CNPJ: {{$fornecedores[0]['cnpj']}}
    <br>
@empty($fornecedores[1]['cnpj'])
    Vazio
@endempty
@endisset
@endisset --}}

{{-- estrutura do for --}}
{{-- @isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
        Status: {{ $fornecedores[0]['status'] }}
    <br>
        CNPJ: {{ $fornecedores[0]['cnpj'] ?? ''}}
    <br>
        Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }} {{ $fornecedores[0]['telefone'] ?? ''}})
        <hr>
    @endfor
@endisset
<br>
 --}}

 @foreach ($fornecedores as $indice => $fornecedor)
    Fornecedor: {{ $fornecedor['nome'] }}
    <br>
    Status: {{ $fornecedor['status'] }}
    <br>
    CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
    <br>
    Telefone: ({{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? ''}})
        <hr>
 @endforeach