<<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Usuarios</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">
                <i class="app-menu__icon fa fa-bar-chart"></i>
                <span class="app-menu__label">Órdenes</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Opciones</span>
            </a>

            <li>
                <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}"
                    href="{{ route('admin.categories.index') }}">
                    <i class="app-menu__icon fa fa-tags"></i>
                    <span class="app-menu__label">Categorías</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
                    <i class="app-menu__icon fa fa-shopping-bag"></i>
                    <span class="app-menu__label">Productos</span>
                </a>
                <li>
                    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.contacto.index' ? 'active' : '' }}" href="{{ route('admin.contacto.index') }}">
                        <i class="app-menu__icon fa fa-envelope"></i>
                        <span class="app-menu__label">Contactos</span>
                    </a>
            </li>
        </li>
    </ul>
</aside>
