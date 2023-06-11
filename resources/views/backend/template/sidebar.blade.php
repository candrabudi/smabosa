<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="https://smabosa-yogya.sch.id/wp-content/uploads/2020/09/WhatsApp-Image-2020-09-22-at-08.29.08.jpeg" class="image-fluid" width="15" alt="">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Smabosa</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="User interface">Posts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('list-posts')}}" class="menu-link">
                        <div data-i18n="Accordion">Semua Postingan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('list-category-posts')}}" class="menu-link">
                        <div data-i18n="Accordion">Kategori</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>