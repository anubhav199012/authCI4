<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <?php
        $uri = service('uri');
        $validation = session('validation');
    ?>

<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
              <?php if(session('success')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session('success') ?>
            </div>
        <?php endif; ?>

        <?= form_open($uri->getSegment(1), ['class' => 'w-100 p-4 bg-white rounded mb-3', 'style' => 'max-width: 400px;']) ?>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input type="text" name="name" autofocus class="form-control <?= isset($validation) && $validation->hasError('name') ? 'is-invalid' : '' ?>" id="name" value="<?= old('name') ?>" required>
                      <?php if(isset($validation) && $validation->hasError('name')) : ?>
                          <div class="invalid-feedback">
                              <?= $validation->getError('name') ?>
                          </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control <?= isset($validation) && $validation->hasError('email') ? 'is-invalid' : '' ?>" id="email" value="<?= old('email') ?>" required>
                    <?php if(isset($validation) && $validation->hasError('email')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email') ?>
                        </div>
                    <?php endif; ?>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input type="password" name="password" class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>" id="password" value="" required>
                      <?php if(isset($validation) && $validation->hasError('password')) : ?>
                          <div class="invalid-feedback">
                              <?= $validation->getError('password') ?>
                          </div>
                      <?php endif; ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input type="password" name="cofirm_password" class="form-control <?= isset($validation) && $validation->hasError('cofirm_password') ? 'is-invalid' : '' ?>" id="confirm_password" value="" required>
                      <?php if(isset($validation) && $validation->hasError('cofirm_password')) : ?>
                          <div class="invalid-feedback">
                              <?= $validation->getError('cofirm_password') ?>
                          </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="login">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?= $this->endSection() ?>


