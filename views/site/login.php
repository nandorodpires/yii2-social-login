<?php
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Login Social</h5>
                    <form class="form-signin">
                        <a href="/site/auth?authclient=google" class="btn btn-lg btn-google btn-block text-uppercase" type="submit">
                            <i class="fab fa-google mr-2"></i> Acessar com o Google
                        </a>
                        <a href="/site/auth?authclient=facebook" class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit">
                            <i class="fab fa-facebook-f mr-2"></i> Acessar com o Facebook
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>