  <?php
    $account = session()->get('account_type');
  ?>
        <div class="air__layout">
            <div class="air__layout__header">
                <div class="air__utils__header">
                <div class="air__topbar">

        <div class="dropdown mr-auto d-none d-md-block">
            
        </div>

        <p class="mb-0 mr-4 d-xl-block d-none">
            Status
            <span class="ml-1 badge bg-success text-white font-size-12 text-uppercase air__topbar__status">Active</span>
        </p>
        <div class="air__topbar__actionsDropdown dropdown mr-4 d-none d-sm-block">
            <a href="#" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false" data-offset="0,15">
            <i class="dropdown-toggle-icon fe fe-menu"></i>
            <span class="dropdown-toggle-text">Actions</span>
            </a>
            <div class="air__topbar__actionsDropdownMenu dropdown-menu dropdown-menu-right" role="menu">
            <div style="width: 350px;">
                <div class="card-header card-header-flex">
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold nav-tabs-noborder nav-tabs-stretched">
            <li class="nav-item">
            <a
                href="#tab-alert-content"
                class="nav-link active"
                id="tab-alert"
                role="button"
                data-toggle="tab"
            >
                Alerts
            </a>
            </li>
            <li class="nav-item">
            <a
                href="#tab-events-content"
                class="nav-link"
                id="tab-events"
                role="button"
                data-toggle="tab"
            >
                Events
            </a>
            </li>
            <li class="nav-item">
            <a
                href="#tab-actions-content"
                class="nav-link"
                id="tab-actions"
                role="button"
                data-toggle="tab"
            >
                Actions
            </a>
            </li>
        </ul>
        </div>
        <div class="card-body">
        <div class="tab-content">
            <div
            class="tab-pane fade show active"
            id="tab-alert-content"
            role="tabpanel"
            aria-labelledby="tab-alert-content"
            >
            <div class="text-center py-4 bg-light rounded">
                No Alerts Today
            </div>
            </div>
            <div
            class="tab-pane fade"
            id="tab-events-content"
            role="tabpanel"
            aria-labelledby="tab-alert-content"
            >
            <div class="text-center py-4 bg-light rounded">
                No Events Today
            </div>
            </div>
            <div
            class="tab-pane fade"
            id="tab-actions-content"
            role="tabpanel"
            aria-labelledby="tab-alert-content"
            >
            <div class="text-center py-4 bg-light rounded">
                No Actions Today
            </div>
            </div>
        </div>
        </div>

            </div>
            </div>
        </div>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false" data-offset="5,15">
            <img class="dropdown-toggle-avatar" src="/assets/components/kit/core/img/avatars/avatar-2.png" alt="User avatar" />
            </a>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="dropdown-icon fe fe-user"></i>
                Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout/me">
                <i class="dropdown-icon fe fe-log-out"></i> Logout
            </a>
            </div>
        </div>
        </div>
    </div>
</div>

