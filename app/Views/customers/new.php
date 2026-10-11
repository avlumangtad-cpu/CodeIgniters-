<?= $this->include('partials/header') ?>

<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>New Customer</h1>
    <p>Enter the customer's information below.</p>
</section>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="validation-errors">
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= site_url('customers') ?>" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
    <label for="full_name">Full Name *</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="<?= esc(old('full_name')) ?>"
        required
    >
</div>

<div class="form-group">
    <label for="email">Email *</label>
    <input
        type="email"
        id="email"
        name="email"
        value="<?= esc(old('email')) ?>"
        required
    >
</div>

<div class="form-group">
    <label for="phone">Phone (Optional)</label>
    <input
        type="tel"
        id="phone"
        name="phone"
        value="<?= esc(old('phone')) ?>"
    >
</div>

    <button type="submit">Save Customer</button>
</form>

<?= $this->include('partials/footer') ?>