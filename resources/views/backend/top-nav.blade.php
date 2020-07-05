<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('landing') }}">Ready Mart</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="nav-link btn btn-link" type="submit">Sign out</button>
      </form>
    </li>
  </ul>
</nav>