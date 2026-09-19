<?= $this->include('partials/header') ?>

<section class="hero">
    <p class="eyebrow">Point-of-Sale System</p>
    <h1>Welcome to Simple POS</h1>
    <p>Manage customer and staff account records in one simple place.</p>
    <div class="actions">
        <a class="button" href="<?= base_url('customers') ?>">View customers</a>
        <a class="button secondary" href="<?= base_url('users') ?>">View users</a>
    </div>
</section>

<?= $this->include('partials/footer') ?>