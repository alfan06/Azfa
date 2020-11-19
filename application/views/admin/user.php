<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> List User
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_karyawan"><i class="fas fa-sm fa-plus"></i> Tambah Karyawan</button>
    <a href="<?= base_url('admin/member/laporan_pdf') ?>"><button class="btn btn-sm btn-danger mb-3"><i class="fas fa-file-pdf"></i> Export PDF</button></a>

    <table class="table table-bordered table-striped table-hover" id="list_member">
        <thead>
            <tr>
                <th>No</th>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Level</td>
                <td>Status</td>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody><?php
                $no = 1;
                foreach ($user as $user) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $user->nama; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->level; ?></td>
                    <td><?php echo $user->status; ?></td>
                    <?php
                                            $usernameLoginNow = $this->session->userdata('user');
                                            if ($user->username  == $usernameLoginNow) { ?>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>user/detail/<?= $user->id_user ?>" class="btn btn-primary float-center">Detail</a>
                                                </td>
                                            <?php
                                            } else { ?>
                                                <td>
                                                    <a href=" <?php echo base_url(); ?>user/hapusDataUser/<?= $user->id_user ?>" class="btn btn-danger float-center" onclick="return confirm('Are you sure want to delete this data?')">Delete</a>
                                                    <a href="<?= base_url(); ?>user/edit/<?= $user->id_user ?>" class="btn btn-success float-center">Edit</a>
                                                    <a href="<?php echo base_url(); ?>user/detail/<?= $user->id_user ?>" class="btn btn-primary float-center">Detail</a>
                                                    <a href="<?php echo base_url(); ?>user/changePassword/<?= $user->id_user ?>" class="btn btn-warning float-center">Change Password</a>
                                                </td>
                                            <?php
                                            }
                                            ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>