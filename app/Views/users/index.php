<?= $this->include('partials/header') ?>

<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>User Accounts</h1>
    <p>Current staff records from the temporary sample list.</p>
</section>

<div class="table-wrap">
    <table>
        <thead>
            <tr><th>Username</th><th>Full Name</th><th>Role</th></tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['name']) ?></td>
                <td><?= esc($user['role']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('partials/footer') ?>