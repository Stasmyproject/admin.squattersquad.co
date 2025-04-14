<?php
if (!isset($step['name']) || !isset($step['label'])) {
    echo "<div class='alert alert-danger'>❌ Неверные данные для textarea</div>";
    return;
}
?>

<div class="mb-4">
    <label class="form-label"><?php echo esc_html($step['label']); ?></label>
    <textarea
        class="form-control"
        name="<?php echo esc_attr($step['name']); ?>"
        rows="5"
        placeholder="<?php echo esc_attr($step['placeholder'] ?? ''); ?>"
    ></textarea>
</div>
