<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
        {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">About</x-nav-link>
        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">Contact</x-nav-link>
        <x-nav-link href="{{ route('post.index') }}" :active="request()->routeIs('post.index')">Posts</x-nav-link>
      </ul>
    </div>

    <!-- Tombol untuk membuka sidebar -->
    <div class="sidebar">
  <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
    <i class="fas fa-bars"></i> Menu
  </button>
</div>



  </div>
</nav>

<!-- Sidebar (Offcanvas) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <li class="nav-item">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
      </li>
      <li class="nav-item">
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">About</x-nav-link>
      </li>
      <li class="nav-item">
        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">Contact</x-nav-link>
      </li>
      <li class="nav-item">
        <x-nav-link href="{{ route('post.index') }}" :active="request()->routeIs('post.index')">Posts</x-nav-link>
      </li>
    </ul>
  </div>
</div>

