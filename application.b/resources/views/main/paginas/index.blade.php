@extends('main.layouts.app')

@if (!isset($row)) {
    {{ exit(view('main.paginas.404')) }}
@endif

@section('title', tradutor($row->titulo))

@section('content')

    <div class="title_pg">{{ tradutor($row->titulo) }}</div>

    <div class="geral">

        <div class="menu_categs">

            @php echo $paginas -> getMenus($row->id_menu) @endphp

        </div>

        <div class="container2">

            {? $data_add = $row -> created_at; ?}
            {? $data_upd = $row -> updated_at; ?}

            <div class="datapost">{{ tradutor($data_upd) }}</div>

            <div class="subtitlepage">{{ tradutor($row->subtitulo) }}</div>

            {? $imagem = !empty($noticia -> imagem) && file_exists(public_path($row->imagem)) ? asset($noticia -> imagem) : null; ?}

            @if (!is_null($imagem))
                <div class="img_news">
                    <img src="{{ $imagem }}" class="img_cem">
                </div>
            @endif

            <div class="texto_pagina">
                @php
                    echo tradutor($row->texto);
                @endphp
            </div>

            @php
                $arquivos = $pagina_model
                    ->select('id', 'path', 'realname', 'size')
                    ->from('tb_attachment')
                    ->where('id_modulo', $row->id)
                    ->where('modulo', 'page')
                    ->get();

            @endphp

            @if ($arquivos->count() > 0)
                <div class="arquivos">
                    <h4>Arquivos relacionados</h4>
                    <div class="row">
                        <ul class="collection with-header">
                            @foreach ($arquivos as $file)
                                <li class="collection-item avatar">
                                    <i class="material-icons circle">text_snippet</i>
                                    <p>
                                        {{ $file->realname }}<br>
                                        {{ $file->size }}
                                    </p>
                                    <a href="{{ route('paginas.download', [$row->link, $file->id]) }}" class="secondary-content"><i class="material-icons">file_download</i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </div>

    </div>

    </div>

    <style>
        .collection {
            margin: .5rem 0 1rem 0;
            border: 1px solid #e0e0e0;
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }

        .collection .collection-item.avatar {
            min-height: 48px;
            padding-left: 72px;
            position: relative;
        }

        .collection .collection-item {
            background-color: #fff;
            line-height: 1.5rem;
            padding: 10px 20px;
            margin: 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .collection .collection-item.avatar:not(.circle-clipper)>.circle,
        .collection .collection-item.avatar :not(.circle-clipper)>.circle {
            position: absolute;
            width: 42px;
            height: 42px;
            overflow: hidden;
            left: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .collection .collection-item.avatar i.circle {
            font-size: 18px;
            line-height: 42px;
            color: #fff;
            background-color: #999;
            text-align: center;
        }

        .collection .collection-item.avatar p {
            margin: 0;
        }

        .collection .collection-item.avatar .secondary-content {
            position: absolute;
            top: 16px;
            right: 16px;
        }

        .secondary-content {
            float: right;
            color: #26a69a;
        }

        .circle {
            border-radius: 50%;
        }

    </style>
@endsection
