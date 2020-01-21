<div class="login-body d-flex flex-wrap justify-content-center align-content-center">
    <div class="login-form p-3 bg-light">
        <div class="container">
            <?= form_open('authenticates/login', array('id' => 'login_form')); ?>
            <div class="login-form-header m-4 text-center">
                <p>Sign in to start your session</p>
            </div>

            <div class="login-form-body mt-3">
                <div class="input-group" id="email">                
                    <input type="email" class="form-control" placeholder="E-mail Address" name="email" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                </div>

                <div class="input-group mt-3" id="password">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                </div>

                <span class="error" id="error"></span>
            </div>

            <div class="login-form-footer mt-4 d-flex justify-content-end">
                <input type="submit" class="btn btn-primary mt-1">
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>3