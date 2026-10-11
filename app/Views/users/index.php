<?= $this->include('partials/header') ?>

<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>User Accounts</h1>
    <p>Current staff records from the database.</p>
</section>

<a href="<?= site_url('users/new') ?>" class="btn">
    + New User
</a>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if (! empty($user['avatar'])): ?>
                        <img
                            src="<?= base_url('uploads/avatars/' . rawurlencode($user['avatar'])) ?>"
                            alt="User Avatar"
                            width="60"
                            height="60"
                            style="border-radius: 50%; object-fit: cover;"
                        >
                    <?php else: ?>
                        <span>No Avatar</span>
                    <?php endif; ?>
                </td>

                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>

                <td>
                    <a href="<?= site_url('users/edit/' . $user['id']) ?>">
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('partials/footer') ?>
