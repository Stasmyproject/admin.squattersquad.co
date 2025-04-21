<div class="doc-preview-container">
    <div class="doc-page">
        <div>
            <h2 class="text-center fw-bold mb-5 text-uppercase" style="font-size: 26px;">
                <?php echo str_replace([' Form', ' form'], '', get_the_title()); ?>
            </h2>

            <!-- 🔁 Live preview content -->
            <div id="doc-preview-content" class="fs-6 lh-lg">
                <p><strong>Recipient:</strong> <span class="doc-field" data-source="recipient_name">—</span></p>
                <p><strong>Address:</strong> <span class="doc-field" data-source="recipient_address">—</span></p>
                <p><strong>City:</strong> <span class="doc-field" data-source="recipient_city">—</span></p>
                <p><strong>Country:</strong> <span class="doc-field" data-source="recipient_country">—</span></p>

                <hr>

                <p><strong>Sender:</strong> <span class="doc-field" data-source="sender_name">—</span></p>
                <p><strong>Date:</strong> <span class="doc-field" data-source="letter_date">—</span></p>

                <hr>

                <p><strong>Original Work:</strong> <span class="doc-field" data-source="original_work_name">—</span></p>
                <p><strong>Year:</strong> <span class="doc-field" data-source="original_work_year">—</span></p>
                <p><strong>Published On:</strong> <span class="doc-field" data-source="originally_published_on">—</span></p>
                <p><strong>Infringing Work:</strong> <span class="doc-field" data-source="infringing_work_name">—</span></p>
                <p><strong>Examples:</strong> <span class="doc-field" data-source="copy_examples">—</span></p>
                <p><strong>Response:</strong> <span class="doc-field" data-source="infringer_response">—</span></p>
            </div>
        </div>

        <div class="text-center text-muted mt-auto pt-5" style="font-size: 12px;">
            Page 1 of 1
        </div>
    </div>
</div>
