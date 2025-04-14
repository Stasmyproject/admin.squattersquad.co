<?php
if (!isset($step['name']) || !isset($step['label'])) {
    echo "<div class='alert alert-danger'>❌ Неверные данные для text-поля</div>";
    return;
}
?>

<div class="mb-4">
    <label class="form-label"><?php echo esc_html($step['label']); ?></label>
    <input
        type="text"
        class="form-control"
        name="<?php echo esc_attr($step['name']); ?>"
        placeholder="<?php echo esc_attr($step['placeholder'] ?? ''); ?>"
    >
</div>
