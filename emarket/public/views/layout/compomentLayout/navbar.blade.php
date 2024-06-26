<nav class="navigation1">
  <nav class=" container-fluid bg-dark navigation2">
      <ul class="nav navbar">
          <li><a href="{{route('index')}}" class="navbar-items"> Accueil</a></li>
          <li><a href="{{route('produits')}}" class="navbar-items">Liste des Produits </a></li>
          <li><a href="{{route('contactForm')}}" class="navbar-items"> Contacts</a></li>
         
          <form class="navbar-form navbar-right" method="POST" action="{{route('search')}}">
            @csrf
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                  <button class="btn  text-primary" type="submit" >
                      <i class="fa fa-search" aria-hidden="true"><span class="navbar-items">Search</span></i>
                  </button>
                </div>
              </div>
          </form>
      </ul>
    </nav>
    <div class="d-block"  id="addBtn">
      <a href="{{route('formadd')}}" class="btn btn-primary"> + </a>
    </div>
</nav>