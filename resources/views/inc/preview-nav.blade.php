<div class="links weight-600 text-upper text-light">
    <a href="{{ url('/docs') }}" class="{{ request()->is('docs') ? 'text-c-primary' : '' }}">Docs</a>
    <a href="https://github.com/ychernyshev/solar-power-calculator-laravel" target="_blank">GitHub</a>
    <a href="{{ url('/licence') }}" class="{{ request()->is('licence') ? 'text-c-primary' : '' }}">Licence</a>
    <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-c-primary' : '' }}">Dashboard</a>
</div>
