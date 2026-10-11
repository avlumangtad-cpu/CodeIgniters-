<?= $this->include('partials/header') ?>

<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>New User</h1>
    <p>Enter the new staff member's information.</p>
</section>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="validation-errors">
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= site_url('users') ?>" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="username">Username *</label>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= esc(old('username')) ?>"
            required
            maxlength="50"
        >
    </div>

    <div class="form-group">
        <label for="full_name">Full Name *</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= esc(old('full_name')) ?>"
            required
            maxlength="100"
        >
    </div>

    <button type="submit">Save User</button>
</form>

<?= $this->include('partials/footer') ?>