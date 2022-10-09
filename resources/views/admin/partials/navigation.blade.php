<div class="sh-sideleft-menu">
    <label class="sh-sidebar-label">Навигация</label>
    <ul class="nav">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link @if(Route::is('admin.dashboard')) active @endif">
                <i class="icon ion-ios-home-outline"></i>
                <span>Панель управления</span>
            </a>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="{{ route('admin.landing.index') }}" class="nav-link @if(Route::is('admin.landing.index')) active @endif">
                <i class="icon ion-ios-bookmarks-outline"></i>
                <span>Страницы</span>
            </a>
        </li><!-- nav-item -->


        <li class="nav-item">
            <a href="#" class="nav-link with-sub @if(Route::is('admin.blog_category.index') or Route::is('admin.blog.index') or Route::is('admin.blog.setting.index')) active @endif">
                <i class="icon ion-ios-paper-outline"></i>
                <span>Блог</span>
            </a>
            <ul class="nav-sub">
                @if(\Illuminate\Support\Facades\Route::has('admin.blog_category.index'))
                    <li class="nav-item"><a href="{{ route('admin.blog_category.index') }}" class="nav-link @if(Route::is('admin.blog_category.index')) active @endif">Категории</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Route::has('admin.blog.index'))
                    <li class="nav-item"><a href="{{ route('admin.blog.index') }}" class="nav-link @if(Route::is('admin.blog.index')) active @endif">Статьи</a></li>
                @endif
                    @if(\Illuminate\Support\Facades\Route::has('admin.blog.setting.index'))
                        <li class="nav-item"><a href="{{ route('admin.blog.setting.index') }}" class="nav-link @if(Route::is('admin.blog.setting.index')) active @endif">Настройки</a></li>
                    @endif
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link with-sub @if(Route::is('admin.portfolio_category.index') or Route::is('admin.portfolio.index') or Route::is('admin.portfolio.setting.index')) active @endif">
                <i class="icon ion-ios-photos-outline"></i>
                <span>Портфолио</span>
            </a>
            <ul class="nav-sub">
                @if(\Illuminate\Support\Facades\Route::has('admin.portfolio_category.index'))
                    <li class="nav-item"><a href="{{ route('admin.portfolio_category.index') }}" class="nav-link @if(Route::is('admin.portfolio_category.index')) active @endif">Категории</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Route::has('admin.portfolio.index'))
                    <li class="nav-item"><a href="{{ route('admin.portfolio.index') }}" class="nav-link @if(Route::is('admin.portfolio.index')) active @endif">Портфолио</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Route::has('admin.portfolio.setting.index'))
                    <li class="nav-item"><a href="{{ route('admin.portfolio.setting.index') }}" class="nav-link @if(Route::is('admin.portfolio.setting.index')) active @endif">Настройки</a></li>
                @endif
            </ul>
        </li>
    </ul>
</div>
