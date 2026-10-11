<?= $this->include('partials/header') ?>

<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>Edit User</h1>
    <p>Update the staff member's information below.</p>
</section>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="validation-errors">
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= site_url('users/update/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="username">Username *</label>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= esc(old('username', $user['username'])) ?>"
            maxlength="50"
            required
        >
    </div>

    <div class="form-group">
        <label for="full_name">Full Name *</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= esc(old('full_name', $user['full_name'])) ?>"
            maxlength="100"
            required
        >
    </div>
<div class="form-group">
    <label for="avatar">Profile Picture (Optional)</label>
    <input
        type="file"
        id="avatar"
        name="avatar"
        accept=".jpg,.jpeg,.png"
    >
</div>
    <button type="submit">Update User</button>
</form>

<?= $this->include('partials/footer') ?>