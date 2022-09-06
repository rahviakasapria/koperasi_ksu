

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <h5 class="h4 text-gray-900 mb-4">Anda lupa kata sandi ?</h5>
                                        <p>Masukkan alamat email Anda dan kami akan mengirimkan instruksi tentang cara mengatur ulang kata sandi Anda.</p>
                                    </div>

                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user" method="post" action="<?= base_url('home/a_forgotpassword'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email"
                                                placeholder="Enter Email Address" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-user btn-block">
                                            Reset Password
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('home/a_login'); ?>">Kembali Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

