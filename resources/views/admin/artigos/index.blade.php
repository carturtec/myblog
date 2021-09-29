@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">
      <painel-component titulo="Lista de Artigos">
        <tabela-lista-component 
             v-bind:titulos="['#', 'Título', 'Descrição']"
             v-bind:itens="[['1', 'php', 'curso php oo', ], ['2', 'vue', ' curso vue oo', ]]"
             ordem="valor padrão" ordemcol="2"
             criar="#created" detalhe="#deta" editar="#edit" deletar="#delite" token="34343243244" 
             
             ></tabela-lista-component>                       
      </painel-component>
    </pagina-component>
@endsection
