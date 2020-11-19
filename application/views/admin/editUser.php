<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-search-plus"></i> Detail User
    </div>

    <table class="table table-hover table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <td><?php echo $user->nama; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo $dt->email ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $user->username; ?></td>
            </tr>
            <tr>
                <th>No Telpon</th>
                <td><?= $user->email; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?= $user->level; ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?= $user->status; ?></td>
            </tr>
    </table>

    <a href="<?= base_url('user/listUser'); ?>" class="btn btn-primary">Back</a><br><br><br>
</div>