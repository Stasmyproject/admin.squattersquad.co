<?php
$project_id = $GLOBALS['metronic_draft_project_id'] ?? 0;
?>

<div class="card card-flush py-4 form-wizard" data-project-id="<?php echo esc_attr($project_id); ?>">
    <div class="card-header">
        <h2 class="card-title">Start Your Eviction Project</h2>
    </div>

    <div class="card-body">
        <!-- Step 1 -->
        <div class="form-step step-1 active" data-step="1">
            <div class="mb-4">
                <label class="form-label">Your Full Name</label>
                <input type="text" class="form-control" name="full_name" />
            </div>

            <div class="mb-4">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" />
            </div>

            <button type="button" class="btn btn-primary next-step">Next</button>
        </div>

        <!-- Step 2 -->
        <div class="form-step step-2" data-step="2" style="display: none;">
            <div class="mb-4">
                <label class="form-label">Property Address</label>
                <input type="text" class="form-control" name="property_address" />
            </div>

            <div class="mb-4">
                <label class="form-label">City</label>
                <input type="text" class="form-control" name="city" />
            </div>

            <button type="button" class="btn btn-light btn-sm prev-step">Back</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
        </div>

        <!-- Step 3 -->
        <div class="form-step step-3" data-step="3" style="display: none;">
            <div class="mb-4">
                <label class="form-label">Describe the Squatter Situation</label>
                <textarea class="form-control" name="situation_details"></textarea>
            </div>

            <button type="button" class="btn btn-light btn-sm prev-step">Back</button>
            <button type="button" class="btn btn-success submit-form">Submit</button>
        </div>
    </div>
</div>
