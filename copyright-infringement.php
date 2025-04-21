<?php
/**
 * Шаблон предпросмотра для формы "Copyright Infringement"
 * Расположен по адресу: acf-templates/copyright-infringement.php
 */
?>

<div class="doc-preview-container">
    <div class="doc-page">
        <div>
            <h2 class="text-center fw-bold mb-5 text-uppercase" style="font-size: 26px;">
                Copyright Infringement Letter
            </h2>
            <div class="fs-6 lh-lg">

                <p><strong>Date of Letter:</strong>
                    <span class="doc-field" data-source="letter_date">_____</span>
                </p>

                <p><strong>Recipient Name:</strong>
                    <span class="doc-field" data-source="recipient_name">_____</span>
                </p>

                <p><strong>Recipient Address:</strong>
                    <span class="doc-field" data-source="recipient_street">_____</span><br>
                    <span class="doc-field" data-source="recipient_city">_____</span>,
                    <span class="doc-field" data-source="recipient_country">_____</span>,
                    <span class="doc-field" data-source="recipient_postcode">_____</span>
                </p>

                <hr>

                <p>Dear <span class="doc-field" data-source="recipient_name">_____</span>,</p>

                <p>I have been informed that you have made an illegal use of my copyrighted work titled
                    "<strong><span class="doc-field" data-source="original_work">_____</span></strong>"
                    without permission.</p>

                <p>It was originally published in <span class="doc-field" data-source="original_year">_____</span>,
                    on: <span class="doc-field" data-source="published_on">_____</span>.</p>

                <p>Your work titled "<strong><span class="doc-field" data-source="work_name">_____</span></strong>"
                    contains original elements from my protected work.</p>

                <p><strong>Publication Type:</strong>
                    <span class="doc-field" data-source="publication_type">_____</span>
                </p>

                <p><strong>Publication Title / URL:</strong>
                    <span class="doc-field" data-source="publication_title">_____</span>
                </p>

                <p><strong>Examples of infringement:</strong><br>
                    <span class="doc-field" data-source="examples">_____</span>
                </p>

                <p><strong>Response received:</strong><br>
                    <span class="doc-field" data-source="response_received">_____</span>
                </p>

                <p>I request immediate removal of all infringing materials derived from my work and full compliance with copyright laws.</p>

                <p>Sincerely,<br>
                    <strong><span class="doc-field" data-source="sender_name">_____</span></strong><br>
                    <span class="doc-field" data-source="sender_street">_____</span><br>
                    <span class="doc-field" data-source="sender_city">_____</span>,
                    <span class="doc-field" data-source="sender_country">_____</span>,
                    <span class="doc-field" data-source="sender_postcode">_____</span>
                </p>
            </div>
        </div>

        <div class="text-center text-muted mt-auto pt-5" style="font-size: 12px;">
            Page 1 of 1
        </div>
    </div>
</div>
