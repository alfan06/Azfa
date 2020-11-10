<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> List Karyawan
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
                    <td><img class="mb-3" style="width:64px" src="<?php echo base_url('assets/uploads/') . $user->gambar ?>"></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <!-- <a href="<?php echo 'member/detail/' . $user->id; ?>"><button type="button" class="btn btn-success btn-sm mr-3"><i class="fas fa-search-plus"></i></button></a>
                            <a href="<?php echo 'member/edit/' . $user->id; ?>"><button type="button" class="btn btn-primary btn-sm mr-3"><i class="fa fa-edit"></i></button></a>
                            <a href="<?php echo 'member/hapus/' . $user->id; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a> -->
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/member/tambah_aksi') ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                    <?php echo form_error('nama', '<div class="text-danger small ml-3">') ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                    <?php echo form_error('email', '<div class="text-danger small ml-3">') ?>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                    <?php echo form_error('alamat', '<div class="text-danger small ml-3">') ?>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control">
                    <?php echo form_error('no_telepon', '<div class="text-danger small ml-3">') ?>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                    <?php echo form_error('username', '<div class="text-danger small ml-3">') ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small ml-3">') ?>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php form_close(); ?>
        </div>
    </div>
</div>