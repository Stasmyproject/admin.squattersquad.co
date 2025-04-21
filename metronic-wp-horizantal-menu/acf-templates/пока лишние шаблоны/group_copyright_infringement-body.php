<?php
// Использует $values, $form_title

$sender = [
    $values['sender_name'] ?? '',
    $values['sender_address'] ?? '',
    $values['sender_city'] ?? '',
    $values['sender_country'] ?? '',
    $values['sender_postcode'] ?? ''
];

$recipient = [
    $values['recipient_name'] ?? '',
    $values['recipient_address'] ?? '',
    $values['recipient_city'] ?? '',
    $values['recipient_country'] ?? '',
    $values['recipient_postcode'] ?? ''
];

$letter_date = $values['letter_date'] ?? '';
$infringing = $values['infringing_work_name'] ?? '';
$original = $values['original_work_name'] ?? '';
$publication_year = $values['original_work_year'] ?? '';
$published_on = $values['originally_published_on'] ?? '';
$examples = $values['copy_examples'] ?? '';
$response = $values['infringer_response'] ?? '';
$publication_type = $values['publication_type'] ?? 'Website';

$publication_block = match ($publication_type) {
    'Website' => "It has been published on the website: <strong>{$published_on}</strong>.",
    'Magazine' => "It has been published in the magazine: <strong>{$published_on}</strong>.",
    default => "It has been published at: <strong>{$published_on}</strong>."
};

echo "<div class='doc-page'>";

// Header
echo "<table style='width: 100%; margin-bottom: 40px;'>
    <tr>
        <td style='width: 50%; vertical-align: top;'>" . implode('<br>', array_map('esc_html', $recipient)) . "</td>
        <td style='width: 50%; text-align: right; vertical-align: top;'>" . implode('<br>', array_map('esc_html', $sender)) . "</td>
    </tr>
</table>";

// Date
echo "<p><strong>" . esc_html($letter_date) . "</strong></p><br>";

// Title
echo "<p><strong>RE: " . esc_html($original) . "</strong></p>";

// Greeting
echo "<p>Dear " . esc_html($values['recipient_name'] ?? 'Sir or Madam') . ":</p>";

// Body
echo "<p>I have been informed that you have made an illegal use of my copyrighted work <strong>{$original}</strong> (“the Work”) without my permission, which has reserved all rights and was first released in <strong>{$publication_year}</strong>. {$publication_block}</p>";

echo "<p>Your work entitled <strong>{$infringing}</strong> contains and uses original content from the Work.</p>";

echo "<p><strong>Examples of infringement:</strong><br>" . nl2br(esc_html($examples)) . "</p>";

echo "<p><strong>Response received:</strong><br>" . nl2br(esc_html($response)) . "</p>";

echo "<p>Through this letter, I request that you immediately stop the use and distribution of all infringing materials derived from my work, and remove all content associated with it.</p>";

echo "<p>Please pay careful attention to this matter.</p><br>";

echo "<p>Sincerely,<br><br>" . esc_html($values['sender_name']) . "</p>";

echo "</div>";
?>
