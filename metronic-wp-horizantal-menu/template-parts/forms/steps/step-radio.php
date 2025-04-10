<?php
$step = $args['step'];
?>
<div class="form-step form-step-radio">
    <label><?php echo esc_html($step['label']); ?></label>
    <?php foreach ($step['options'] as $option): ?>
        <div>
            <input type="radio" 
                   name="<?php echo esc_attr($step['name']); ?>" 
                   value="<?php echo esc_attr($option); ?>" />
            <span><?php echo esc_html($option); ?></span>
        </div>
    <?php endforeach; ?>
</div>
