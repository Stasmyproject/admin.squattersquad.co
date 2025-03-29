document.addEventListener('DOMContentLoaded', function () {
    const wizard = document.querySelector('.form-wizard');
    if (!wizard) return;

    const submitButton = wizard.querySelector('.submit-form');

    submitButton.addEventListener('click', () => {
        const projectId = wizard.dataset.projectId;
        const title = wizard.querySelector('input[name="post_title"]').value;
        const content = wizard.querySelector('textarea[name="post_content"]').value;

        if (!projectId || parseInt(projectId) <= 0) {
            alert("❌ Project ID is missing or invalid.");
            return;
        }

        fetch(ajaxurl.url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                action: 'save_project_step',
                project_id: projectId,
                post_title: title,
                post_content: content
            })
        })
        .then(res => res.json())
        .then(res => {
            if (res.success) {
                alert("✅ Project saved successfully!");
            } else {
                alert("❌ Error: " + res.data);
            }
        })
        .catch(err => {
            console.error(err);
            alert("AJAX error");
        });
    });
});
