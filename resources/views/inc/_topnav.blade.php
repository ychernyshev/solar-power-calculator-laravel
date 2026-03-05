<div class="links weight-600 text-upper text-light">
    <a
      href="{{ url('/dashboard') }}"
      class="{{ request()->is('dashboard') ? 'text-c-primary' : '' }}"
      >Dashboard</a>
    <a
      href="{{ url('/add_entry') }}"
      class="{{ request()->is('add_entry') ? 'text-c-primary' : '' }}"
      >Add entry</a>
    <a
      href="{{ url('/settings') }}"
      class="{{ request()->is('settings') ? 'text-c-primary' : '' }}">
      Settings</a>
</div>
