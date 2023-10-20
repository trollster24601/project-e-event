<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Main CSS-->
    <link href="<?= base_url('/css/register.css'); ?>" rel="stylesheet" media="all" />
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <?= csrf_field(); ?>
                        <!-- Daftar Sebagai -->
                        <div class="form-row p-t-20">
                            <label class="label label--block">Daftar Sebagai</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">User
                                    <input type="radio" checked="checked" name="role" value="user" id="userRole" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Event Organizer
                                    <input type="radio" name="role" value="eo" id="eoRole"
                                        <?= (isset($data['role']) && $data['role'] == 'eo') ? 'checked' : ''; ?> />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>


                        <!-- Nama Lengkap -->
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name"
                                        value="<?= $data['name'] ?? ''?>" />
                                    <?php if (isset($validation) && $validation->getError('name')) : ?>
                                    <p class="text-danger"><?= $validation->getError('name') ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username"
                                        value="<?= $data['username'] ?? ''?>" />
                                    <?php if (isset($validation) && $validation->getError('username')) : ?>
                                    <p class="text-danger"><?= $validation->getError('username') ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email"
                                        value="<?= $data['email'] ?? ''?>" />
                                    <?php if (isset($validation) && $validation->getError('email')) : ?>
                                    <p class="text-danger"><?= $validation->getError('email') ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div id="eoContact" style="display: none;">
                            <!-- Kontak EO -->
                            <div class="form-row">
                                <div class="name">Kontak Event Organizer</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="contact"
                                            value="<?= $data['contact'] ?? ''?>" />
                                        <?php if (isset($validation) && $validation->getError('contact')) : ?>
                                        <p class="text-danger"><?= $validation->getError('contact') ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" />
                                    <?php if (isset($validation) && $validation->getError('password')) : ?>
                                    <p class="text-danger"><?= $validation->getError('password') ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Konfirmasi Password -->
                        <div class="form-row">
                            <div class="name">Konfirmasi Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="confirmPassword" />
                                    <?php if (isset($validation) && $validation->getError('confirmPassword')) : ?>
                                    <p class="text-danger"><?= $validation->getError('confirmPassword') ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- No. Telp -->
                        <div class="form-row">
                            <div class="name">No. Telp</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="phone"
                                        value="<?= $data['phone'] ?? ''?>" />
                                    <?php if (isset($validation) && $validation->getError('phone')) : ?>
                                    <p class="text-danger"><?= $validation->getError('phone') ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address"
                                        value="<?= $data['address'] ?? ''?>" />
                                    <?php if (isset($validation) && $validation->getError('address')) : ?>
                                    <p class="text-danger"><?= $validation->getError('address') ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Fungsi untuk menanggapi perubahan pada radio button "Daftar Sebagai"
    function handleRoleChange() {
        const eoContact = document.getElementById('eoContact');
        const eoRole = document.getElementById('eoRole');

        // Jika pilihan "Event Organizer" dipilih, tampilkan bagian kontak EO
        if (eoRole.checked) {
            eoContact.style.display = 'block';
        } else {
            eoContact.style.display = 'none';
        }
    }

    // Tambahkan event listener untuk memanggil fungsi handleRoleChange saat radio button berubah
    document.getElementById('userRole').addEventListener('change', handleRoleChange);
    document.getElementById('eoRole').addEventListener('change', handleRoleChange);

    // Panggil fungsi handleRoleChange saat halaman dimuat untuk menanggapi kondisi awal
    handleRoleChange();
    </script>
</body>

</html>