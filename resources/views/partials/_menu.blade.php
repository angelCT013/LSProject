<div class="sidebar__menu-group">
    <ul class="sidebar_nav">

        <!-- <li>
            <a href="{{ route('pages.blank',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/blank') ? 'active':'' }}">
                <span class="nav-icon uil uil-circle"></span>
                <span class="menu-text">{{ trans('menu.blank-menu-title') }}</span>
            </a>
        </li> -->

        <li class="has-child {{ Request::is(app()->getLocale().'/applications/ecommerce/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-bag"></span>
                <span class="menu-text text-initial">{{ trans('menu.ecommerce-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('ecommerce.products',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/products') ? 'active':'' }}">{{ trans('menu.ecommerce-products') }}</a></li>
                <li><a href="{{ route('ecommerce.add_product',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/add-product') ? 'active':'' }}">{{ trans('menu.ecommerce-product-add') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/user/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/user/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-users-alt"></span>
                <span class="menu-text">{{ trans('menu.user-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('user.table',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/table') ? 'active':'' }}">{{ trans('menu.user-table') }}</a></li>
            </ul>
        </li>
    </ul>
</div>
