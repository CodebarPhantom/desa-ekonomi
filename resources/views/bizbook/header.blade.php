<div class="hom-top">
    <div class="container">
        <div class="row">
            <div class="hom-nav db-open">
                <a href="{{ url('/') }}" class="top-log">
                    <img src="{{ asset('images/home/kartar-logo.png') }}" width="50" height="50" class="">
                </a>
                <div class="menu">
                    <h4>All Category</h4>
                </div>

                <div class="pop-menu">
                    <div class="container">
                        <div class="row"> <i class="material-icons clopme">close</i>
                            <div class="pmenu-cat">
                                <h4>All Categories</h4>
                                <ul id="pg-resu">
                                    <li><a href="{{ route('user.pariwisata.index') }}">Pariwisata</a>
                                    </li>
                                    <li><a href="{{ route('user.umkm.index') }}">UMKM</a>
                                    </li>
                                    <li><a href="{{ route('user.umkm-product.index') }}">Produk UMKM</a>
                                    </li>
                                    <li><a href="{{ route('user.masyarakat-product.index') }}l">Produk Masyarakat</a>
                                    </li>
                                    <li><a href="{{ route('user.masyarakat-event.index') }}">Event Masyarakat</a>
                                    </li>
                                    <li><a href="{{ route('user.masyarakat-creativity.index') }}">Kreatifitas Masyarakat</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--END MOBILE MENU-->
            </div>
        </div>
    </div>
</div>
