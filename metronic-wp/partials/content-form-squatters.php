<?php
$project_id = $GLOBALS['metronic_draft_project_id'] ?? (isset($_COOKIE['draft_project_id']) ? intval($_COOKIE['draft_project_id']) : 0);
?>

<?php
$post_id = get_the_ID(); // или получи ID черновика как у тебя
$title = get_the_title($post_id);
$content = get_post_field('post_content', $post_id);
?>





<div class="card card-flush py-4 form-wizard" data-project-id="<?php echo esc_attr($project_id); ?>">
    <div class="card-header">
        <h2 class="card-title">Start New Project</h2>
    </div>

    <div class="card-body">
        <div class="form-step step-1 active" data-step="1">
            <div class="mb-4">
                <label class="form-label">Project Title</label>
                <input type="text" class="form-control" name="post_title" />
            </div>

            <div class="mb-4">
                <label class="form-label">Project Description</label>
                <textarea class="form-control" name="post_content"></textarea>
            </div>

            <button type="button" class="btn btn-success submit-form">Submit</button>
        </div>
    </div>
</div>
