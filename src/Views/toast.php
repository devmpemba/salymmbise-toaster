<div id="toast-container">
    <?php foreach ($toasts as $toast): ?>
        <div class="toast <?= $toast['type'] ?>">
            
            <div class="toast-icon">
                <?php if ($toast['type'] === 'success'): ?>
                    ✔
                <?php elseif ($toast['type'] === 'danger'): ?>
                    ✖
                <?php elseif ($toast['type'] === 'warning'): ?>
                    ❗
                <?php else: ?>
                    ℹ
                <?php endif; ?>
            </div>

            <div class="toast-message"><?= $toast['message'] ?></div>

            <div class="toast-close" onclick="this.parentElement.remove()">✕</div>
        </div>
    <?php endforeach; ?>
</div>

<link rel="stylesheet" href="/vendor/toaster/toaster.css">
<script src="/vendor/toaster/toaster.js"></script>