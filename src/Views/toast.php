<div id="toast-container">
    <?php foreach ($toasts as $toast): ?>
        <div class="toast <?= $toast['type'] ?>">
            
            <div class="toast-icon">
                <?= $toast['icon'] ?>
            </div>

            <div class="toast-message">
                <div class="toast-title"><?= $toast['title'] ?></div>
                <div class="toast-description"><?= $toast['message'] ?></div>
            </div>

            <div class="toast-close" onclick="this.parentElement.remove()">✕</div>
        </div>
    <?php endforeach; ?>
</div>

<link rel="stylesheet" href="/vendor/toaster/toaster.css">
<script src="/vendor/toaster/toaster.js"></script>