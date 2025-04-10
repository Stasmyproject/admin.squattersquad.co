<?php
$step = $args['step'];
?>
<div class="form-step form-step-textarea">
    <label><?php echo esc_html($step['label']); ?></label>
    <textarea name="<?php echo esc_attr($step['name']); ?>"></textarea>
</div>
