@extends('layouts.appss')

@section('title')
    {{$message->titreMessage}}
@endsection

@section('content')
    <!-- Page Title Section Start -->
    <div class="page-title-section section">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Message N° {{$message->id}}</h1>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li class="current">Message</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Blog Section Start -->
    <div class="section section-padding-bottom fix">
        <div class="container">
            <div class="row max-mb-n50">

                <div class="col-lg-8 col-12 order-lg-1 max-mb-50">
                    <!-- Blog Wrapper Start -->
                    <div class="row row-cols-1 g-0">

                        <!-- Blog Start -->
                        <div class="blog-3 blog-details col" data-aos="fade-up">
                            <div class="info">
                                <h3 class="title">
                                    {{$message->titreMessage}}
                                </h3>
                                <ul class="meta">
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        {{\Carbon\Carbon::parse($message->date)->format('d/m/Y')}}
                                    </li>

                                    <li>
                                        <div class="entry-author">
                                            <a
                                                href="{{route('about.profile', ['id'=>1, 'section'=>'management'])}}"
{{--                                                id="openModalPresident" onclick="openModal()"--}}
                                            >
                                                <br>
                                                <br>
                                                <div class="author-info">
                                                    <div class="author-avatar">
                                                        <img src="{{asset('images/mimile.png')}}"
                                                             style="height: 100px!important; width: 100px!important; object-fit: cover!important;"
                                                             alt="">
                                                    </div>
                                                    <div class="author-description">
                                                        <br>
                                                        <h6 class="author-name" style="margin-bottom: 0!important;">
                                                            {{$message->prenom . ' ' . $message->nom}}
                                                        </h6>

                                                        <div class="author-biographical-info">
                                                            {{$message->titreAuteur}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="desc">
                                    <p>
                                        {{$message->introduction}}
                                    </p>

                                    <blockquote class="block-quote">
                                        <p>
                                            {{$message->about}}
                                        </p>
                                    </blockquote>

                                    <p>
                                        {!! $message->message !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                        <!-- Blog End -->

                    </div>
                    <!-- Blog Wrapper End -->
                </div>

                <div class="col-lg-4 col-12 order-lg-2 max-mb-50">
                    <div class="sidebar-widget-wrapper">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title mb-2">Messages Précédents</h3>
                            <div class="sidebar-widget-content">
                                <ul class="sidebar-widget-list-post">
                                    @forelse(\App\Models\MessagePresident::all() as $message)
                                        <li>
                                            <a href="{{route('message', ['id'=>$message->id])}}">
                                                {{$message->titreMessage}}
                                            </a>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Contenu du Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" style="align-content: end; float: right" onclick="closeModal()">&times;</span>
            <!-- Contenu du modal -->
            <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel">Mimile MAISHA MUKUNA</h4>
            </div>
            <div class="modal-body">
                <h4>Président d'IARM CONGO</h4>
                <p>
                    M. Mimile Mukuna Maisha est un expert en droit international des affaires et gestion
                    internationale des risques et assurances des affaire. Depuis 2013, il est Directeur Général
                    de First Continental Legal and Risk Consulting, basé a Londres et Johannesburg, où il
                    conseille toutes les catégories d'investisseurs internationaux et de gouvernements africains
                    sur les traités d'investissement internationaux, la gestion des risques des Investissements
                    Directs Etrangers et sur les transactions de financement internationales.
                </p>

                <p>
                    M. Maisha a débuté sa carrière professionnelle en 1994 à la Munich Reinsurance comme que
                    directeur adjoint puis directeur des marchés des pays francophones et lusophones en
                    Africain. Durant ses fonctions a la Munich Re, M. Maisha sera conseiller aux gouvernement
                    Mozambicain et Rwandais pour les libéralisation des marchés des assurances dans leurs pays
                    respectifs et sera le Consultant principal pour la création de la première société
                    d'assurance en Guinée Equatoriale. Il rejoint en 1997 Maritime Brokers and Consultants en
                    tant que Directeur responsable des classes d'assurance hors-transport et du Département
                    Afrique. Puis, en 1999, il a fera partie du groupe d'experts sud-africains de renom qui
                    créerons à Londres et Johannesburg la société de consultance en Financement/Transfert
                    Alternatif des Risques Eikos Risk Applications où il a conseillé des multinationales et des
                    SPV sur les solutions de Financement des Alternatif des Risques et de financement structuré.
                    En 2001, il sera nommé directeur général de l'assureur mozambicain Compania Geral de Seguros
                    da Mozambique (CGSM) et, en 2003, il retournera en Afrique du Sud pour rejoindre, en tant
                    que Directeur Général, Phoenix Risk Solutions, un courtier de réassurance et Consultance en
                    Transfert Alternatif des risques pour lequel il a ouvert des bureaux de représentation à
                    Dakar, Kinshasa et Lagos.
                </p>

                <p>
                    Depuis 2019, M. Maisha est Président de l’African Risk Management Society (ARiMaS). Il
                    intervient régulièrement lors de conférences et séminaires en Afrique sur la gestion des
                    risques commerciaux et le droit des investissements internationaux et est l'auteur du livre
                    populaire sur la gestion des risques des affaires en Afrique «Why Risk so Much for so
                    Little?»
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>

    <style>
        /* Styles pour le modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <script>
        // Fonction pour ouvrir le modal
        function openModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'block';
        }

        // Fonction pour fermer le modal
        function closeModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'none';
        }

        // Fermer le modal si l'utilisateur clique en dehors du contenu du modal
        window.onclick = function (event) {
            var modal = document.getElementById('myModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>

@endsection
