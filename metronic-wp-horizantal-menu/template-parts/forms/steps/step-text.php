<?php
$step = $args['step'];
?>
<div class="form-step form-step-text">
    <h1>Проверка того где выволиться</h1>
    <label><?php echo esc_html($step['label']); ?></label>
    <input 
        type="text" 
        name="<?php echo esc_attr($step['name']); ?>" 
        <?php echo !empty($step['required']) ? 'required' : ''; ?> 
    />
</div>
