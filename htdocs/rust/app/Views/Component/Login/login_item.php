<div class="air__auth__authContainer">
  <div class="pt-5 pb-5 d-flex align-items-end mt-auto ">
    <a href="javascript: void(0);" class="air__auth__logo">
    </a>
  </div>

  <div class="air__auth__containerInner mt-4">
    <div class="card air__auth__boxContainer">
      <div class="text-dark font-size-32 mb-3">Sign In</div>

          <?php if (isset($validation)): ?>
            <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <label style="margin-left: -40px;margin-bottom: -30px;"><strong><?= $validation->listErrors() ?></strong></label>
          </div>
          <?php endif; ?>

      <form id="form-validation-simple" name="form-validation-simple" method="POST" action="/login" class="mb-4">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <div class="form-group mb-4">
          <input type="text" class="form-control" name="username" data-validation="[NOTEMPTY]" autocomplete="off" tabindex="1" placeholder="Username" />
        </div>
        <div class="form-group mb-4">
          <input type="password" name="password" data-validation="[NOTEMPTY]" class="form-control" autocomplete="off" tabindex="2" placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-primary text-center w-100"><strong><?= 'Log in' ?></strong></button>
      </form>
      <a href="#" class="kit__utils__link font-size-16"><?= 'Forgot password?' ?></a>
    </div>
  </div>
  <div class="mt-auto pb-5 pt-5">
    <div class="text-center"><?= 'Copyright © '. date('Y'). ' Christopher Affram' ?>
    </div>
  </div>
  </div>
  <script>
  ;(function($) {
    'use strict'
    $(function() {
        $('#form-validation-simple').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error-list',
            errorClass: 'has-danger',
          },
        },
      })

    })
  })(jQuery)
</script>