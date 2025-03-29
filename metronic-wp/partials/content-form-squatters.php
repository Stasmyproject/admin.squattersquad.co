<?php
$project_id = $GLOBALS['metronic_draft_project_id'] ?? (isset($_COOKIE['draft_project_id']) ? intval($_COOKIE['draft_project_id']) : 0);
$post_id = get_the_ID();
$title = get_the_title($post_id);
$content = get_post_field('post_content', $post_id);
$city = get_post_meta($project_id, 'city', true);
$are_you_value = get_post_meta($project_id, 'are_you', true);
?>










<div class="card card-flush py-4 form-wizard" data-project-id="<?php echo esc_attr($project_id); ?>">
    <div class="card-header">
        <h2 class="card-title">Start New Project</h2>
    </div>

    <!-- begin:Step1 -->   
    <div class="card-body">
        <div class="form-step step-1" data-step="1">
            <div class="mb-4">
                <label class="form-label">Project Title</label>
                <input type="text" class="form-control" name="post_title" placeholder="Что-то" />
            </div>

            <div class="mb-4">
                <label class="form-label">Project Description</label>
                <textarea class="form-control" name="post_content"><?php echo esc_textarea($content); ?></textarea>
            </div>
            <button type="button" class="btn btn-primary next-step">Next</button>
        </div>
    </div>
    <!-- end:Step1 -->

    <!-- begin:Step2 -->   
    <div class="card-body">
        <div class="form-step step-2" data-step="2" style="display: none;">
            <div class="mb-4">
                <label class="form-label">City *</label>
                <input type="text" class="form-control" name="city" id="city"  value="<?php echo esc_attr($city); ?>" />
            </div>
            <button type="button" class="btn btn-success prev-step">Back</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
        </div>
    </div>
    <!-- end:Step2 -->

    <!-- begin:Step3 -->   
    <div class="card-body">
        <div class="form-step step-3" data-step="3" style="display: none;">
            <div class="mb-4">
                <label class="form-label">Are you</label>
                <div class="col-lg-8 fv-row">
                    <select name="are_you" 
                            class="form-select form-select-solid form-select-lg" 
                            data-control="select2" 
                            data-placeholder="The home owner"
                            id="are_you">
                        <option value="home_owner" <?php selected($are_you_value, 'home_owner'); ?>>The home owner</option>
                        <option value="property_manager" <?php selected($are_you_value, 'property_manager'); ?>>The property manager</option>
                        <option value="investor" <?php selected($are_you_value, 'investor'); ?>>A real estate investor</option>
                        <option value="relative" <?php selected($are_you_value, 'relative'); ?>>A relative of home owner</option>
                    </select>
                    <div class="form-text">----------------------------</div>
                </div>
            </div>
            <button type="button" class="btn btn-success prev-step">Back</button>
            <button type="button" class="btn btn-primary submit-form">Submit</button>
        </div>
    </div>
    <!-- end:Step3 -->

</div>
