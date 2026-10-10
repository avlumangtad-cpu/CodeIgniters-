<?= $this->include('partials/header') ?>

<section class="page-heading">
    <p class="eyebrow">Accounts</p>
    <h1>Customer Accounts</h1>
    <p>Current customer records from the database.</p>
</section>

<div class="table-wrap">
    <table>
        <thead>
            <tr><th>Full Name</th><th>Email</th><th>Phone</th></tr>
        </thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('partials/footer') ?>