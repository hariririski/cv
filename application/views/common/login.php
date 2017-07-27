<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Login Admin</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url()?>login/proses_login" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="email_modal" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password_modal" placeholder="password">
                    </div>

                    <p class="text-center">
                        <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                    </p>

                </form>


            </div>
        </div>
    </div>
</div>
