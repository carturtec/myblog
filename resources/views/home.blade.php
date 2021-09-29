@extends('layouts.app')

@section('content')
    <pagina-component tamanho="10">
      <painel-component titulo="Painel Administrativo">
                        
            <div class="row">
                  <div class="col-md-4">
                       <caixa-component qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa-component>
                  </div>

                  <div class="col-md-4">
                        <caixa-component  qtd="100" titulo="Usuários" url="#" cor="blue" icone="ion ion-person-stalker"></caixa-component >
                  </div>

                  <div class="col-md-4">
                        <caixa-component  qtd="2345" titulo="Autores" url="#" cor="red" icone="ion ion-person"></caixa-component >
                  </div>
            </div>

      </painel-component>
    </pagina-component>
@endsection
