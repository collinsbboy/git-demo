<?php $account = session()->get('account_type') ?>
<?php $useID =  session()->get('user_id')?>
<div class="air__menuLeft">
  <div class="air__menuLeft__outer">
    <div class="air__menuLeft__mobileToggleButton air__menuLeft__mobileActionToggle">
      <span></span>
    </div>
    <div class="air__menuLeft__toggleButton air__menuLeft__actionToggle">
      <span></span>
      <span></span>
    </div>
    <a href="javascript: void(0);" class="air__menuLeft__logo">
      <div class="air__menuLeft__logo__name"><?= 'RUCST' ?></div>
    </a>
    <a href="javascript: void(0);" class="air__menuLeft__user">
      <div class="air__menuLeft__user__avatar">
        <img src="/assets/components/kit/core/img/avatars/avatar.png" alt="<?= get_type_by_id('user_table', $useID, 'name') ?>" />
      </div>
      <div class="air__menuLeft__user__name">
        <?= get_type_by_id('user_table', $useID, 'name') ?><br>
        <?= get_type_by_id('class', session()->get('class_id'), 'class_name') ?>
      </div>
    </a>
    <div class="air__menuLeft__container kit__customScroll">
      <ul class="air__menuLeft__list">
      <li class="air__menuLeft__category">
        <span>Dashboards</span>
      </li>
      <li class=" air__menuLeft__item <?php if($page_name == 'Dashboard')echo'air__menuLeft__item--active' ?>">
          <a href="/lecturer-dashboard/dashboard" class="air__menuLeft__link">
            <i class="fe fe-home air__menuLeft__icon"></i>
            <span>Analytics</span>
          </a>
        </li>
      <?php if($account == 1): ?>
        <li class="air__menuLeft__category">
          <span>Examination</span>
        </li>
        <li class=" air__menuLeft__item <?php if($page_name == 'CHNMTC - Dashboard')echo'air__menuLeft__item--active' ?>">
          <a href="/lecturer-dashboard/dashboard" class="air__menuLeft__link">
            <i class="fe fe-file air__menuLeft__icon"></i>
            <span>Examination</span>
          </a>
        </li>
        <?php elseif($account == 2): ?>
        <li class="air__menuLeft__category">
          <span>Pages</span>
        </li>
        <li class="air__menuLeft__item <?php if($page_name == 'Examination - Data')echo'air__menuLeft__item--active' ?>">
        <a href="/examination-data/add/exam/data" class="air__menuLeft__link">
            <i class="fe fe-file-text air__menuLeft__icon"></i>
            <span>Examination Data</span>
          </a>
        </li>

        <?php elseif($account == 3): ?>
        <li class="air__menuLeft__category">
          <span>Pages</span>
        </li>
        <li class=" air__menuLeft__item <?php if($page_name == 'my - class')echo'air__menuLeft__item--active' ?>">
          <a href="/my-class-list/list" class="air__menuLeft__link">
            <i class="fe fe-users air__menuLeft__icon"></i>
            <span>Courses Registered</span>
          </a>
        </li>
        <?php elseif($account == 5): ?>
          <li class=" air__menuLeft__item <?php if($page_name == 'Student - List')echo'air__menuLeft__item--active' ?> ">
            <a href="/student-list/all/student/list" class="air__menuLeft__link">
              <i class="fe fe-users air__menuLeft__icon"></i>
              <span>Students</span>
            </a>
          </li>
          <li class=" air__menuLeft__item <?php if($page_name == 'Courses')echo'air__menuLeft__item--active' ?> ">
            <a href="/courses/all/courses/list" class="air__menuLeft__link">
              <i class="fe fe-file air__menuLeft__icon"></i>
              <span>Courses</span>
            </a>
          </li>
        <?php endif; ?>
        <li class=" air__menuLeft__item">
          <a href="/logout/me" class="air__menuLeft__link">
            <i class="fe fe-power air__menuLeft__icon"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="air__menuLeft__backdrop air__menuLeft__mobileActionToggle"></div>
    <div class="air__sidebar kit__customScroll">
  <div class="air__sidebar__inner">
    <a href="javascript: void(0);" class="air__sidebar__close air__sidebar__actionToggle fe fe-x-circle"></a>
    <h5>
      <strong>Theme Settings</strong>
    </h5>
    <div class="cui__utils__line" style="margin-top: 25px; margin-bottom: 30px"></div>
    <div class="air__sidebar__type mb-4">
      <div class="air__sidebar__type__title">
        <span>Application Name</span>
      </div>
      <div class="air__sidebar__type__items">
        <input id="appName" class="form-control mb-3" value="AIR UI" />
        <input id="appDescr" class="form-control" value="Admin Template" />
      </div>
    </div>
    <div class="air__sidebar__type">
      <div class="air__sidebar__type__title">
        <span>Menu Type</span>
      </div>
      <div class="air__sidebar__type__items">
        <div class="row">
          <div class="col-6">
            <div>
              <label class="air__utils__control air__utils__control__radio">
                <input type="radio" name="menuType" checked to="body" setting="" />
                <span class="air__utils__control__indicator"></span>
                Default
              </label>
            </div>
            <div>
              <label class="air__utils__control air__utils__control__radio hideIfMenuTop">
                <input type="radio" name="menuType" to="body" setting="air__menu--flyout" />
                <span class="air__utils__control__indicator"></span>
                Flyout
              </label>
            </div>
          </div>
          <div class="col-6">
            <label class="air__utils__control air__utils__control__radio hideIfMenuTop">
              <input type="radio" name="menuType" to="body" setting="air__menu--compact" />
              <span class="air__utils__control__indicator"></span>
              Compact
            </label>
            <label class="air__utils__control air__utils__control__radio">
              <input type="radio" name="menuType" to="body" setting="air__menu--nomenu" />
              <span class=" air__utils__control__indicator"></span>
              No Menu
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="air__sidebar__item hideIfMenuTop">
      <div class="air__sidebar__label">
        Left Menu: Collapsed
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__menu--toggled" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item hideIfMenuTop">
      <div class="air__sidebar__label">
        Left Menu: Unfixed
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__menu--unfixed" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Left Menu: Shadow
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__menu--shadow" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Menu: Color
      </div>
      <div class="air__sidebar__container">
        <div class="air__sidebar__select" to="body">
          <div class="air__sidebar__select__item air__sidebar__select__item--white" setting="air__menu--white"></div>
          <div class="air__sidebar__select__item air__sidebar__select__item--gray" setting="air__menu--gray"></div>
          <div class="air__sidebar__select__item air__sidebar__select__item--blue" setting="air__menu--blue"></div>
          <div class="air__sidebar__select__item air__sidebar__select__item--black air__sidebar__select__item--active">
          </div>
        </div>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Flyout: Color
      </div>
      <div class="air__sidebar__container">
        <div class="air__sidebar__select" to="body">
          <div class="air__sidebar__select__item air__sidebar__select__item--white" setting="air__menu__submenu--white">
          </div>
          <div class="air__sidebar__select__item air__sidebar__select__item--gray" setting="air__menu__submenu--gray">
          </div>
          <div class="air__sidebar__select__item air__sidebar__select__item--blue air__sidebar__select__item--active"
            setting="air__menu__submenu--blue"></div>
          <div class="air__sidebar__select__item air__sidebar__select__item--black" setting="air__menu__submenu--black">
          </div>
        </div>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Auth: Background
      </div>
      <div class="air__sidebar__container">
        <div class="air__sidebar__select" to="body">
          <div class="air__sidebar__select__item air__sidebar__select__item--white" setting="air__auth--white"></div>
          <div class="air__sidebar__select__item air__sidebar__select__item--gray air__sidebar__select__item--active"
            setting=""></div>
          <div class="air__sidebar__select__item air__sidebar__select__item--img" setting="air__auth--img"></div>
        </div>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Topbar: Fixed
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__topbar--fixed" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Topbar: Gray
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__topbar--gray" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        App: Content Max-Width
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__layout--contentMaxWidth" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        App: Max-Width
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__layout--appMaxWidth" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        App: Gray Background
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__layout--grayBackground" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Cards: Squared Borders
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__layout--squaredBorders" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Cards: Shadow
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__layout--cardsShadow" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
    <div class="air__sidebar__item">
      <div class="air__sidebar__label">
        Cards: Borderless
      </div>
      <div class="air__sidebar__container">
        <label class="air__sidebar__switch">
          <input type="checkbox" to="body" setting="air__layout--borderless" />
          <span class="air__sidebar__switch__slider"></span>
        </label>
      </div>
    </div>
  </div>
</div>
<!-- <a href="javascript: void(0);" style="bottom: calc(50% + 120px)"
  class="air__sidebar__toggleButton air__sidebar__actionToggle" data-toggle="tooltip" data-placement="left"
  title="Settings">
  <i class="fe fe-settings"></i>
</a> -->