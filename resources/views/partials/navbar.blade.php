<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/home">CookingDash</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link {{ ($judulPage === "about") ? 'active' : '' }}" aria-current="page" href="/about">About</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link {{ ($judulPage === "resep") ? 'active' : '' }}" href="{{route('resep.tampil')}}">Resep Makanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($judulPage === "resep") ? 'active' : '' }}" href="{{route('bookmark.tampil')}}">Bookmark Makanan</a>
        </li>
        <li class="nav-item">
        <a href="{{ route('logout') }}"  class="nav-link">
    Logout
</a>
      </form>
        </li>
        <!--
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>