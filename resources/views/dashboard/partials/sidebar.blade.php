<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <div class="logo"> <img src="{{ asset('assets/images/logo%402x.png') }}" width="120"
                        alt="" /> </div>
            <div class="sidebar-collapse"> <a href="#" class="sidebar-collapse-icon"> <i class="entypo-menu"></i>
                </a> </div>
            <div class="sidebar-mobile-menu visible-xs"> <a href="#" class="with-animation"> <i
                        class="entypo-menu"></i> </a> </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="has-sub"> <a href="dashboard/main/index.html"><i class="entypo-gauge"></i><span
                        class="title">Dashboard</span></a>
            </li>
            <li class="has-sub"> <a href=""><i class="entypo-gauge"></i><span class="title">Gestion des
                        Produits</span></a>
                <ul>
                    <li> <a href="{{ route('admin.produits') }}"><span class="title">Liste des Produits </span></a>
                    </li>
                    <li> <a href="{{ route('admin.Produits.create') }}"><span class="title">Insertion</span></a> </li>
                </ul>
            </li>
            <li class="has-sub"> <a href=""><i class="entypo-gauge"></i><span class="title">Gestion des
                        Commandes</span></a>
                <ul>
                    <li> <a href="{{ route('admin.commandes') }}"><span class="title">Liste des Commandes</span></a>
                    </li>
                    <li> <a href="{{ route('admin.commandes.create') }}"><span class="title">Insertion</span></a> </li>
                </ul>
            </li>
            <li class="has-sub"> <a href=""><i class="entypo-gauge"></i><span class="title">Gestion des
                        Categories</span></a>
                <ul>
                    <li> <a href="{{ route('admin.categories') }}"><span class="title">Liste des Categories</span></a>
                    </li>
                    <li> <a href="{{ route('admin.categories.create')}}"><span class="title">Insertion</span></a> </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
