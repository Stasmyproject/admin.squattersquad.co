function initFormWizard() {
    const wizard = document.querySelector('.form-wizard');
    console.log("wizard найден:", wizard);
    if (!wizard) return;

    const steps = wizard.querySelectorAll('.form-step');
    let currentStep = 0;

    function showStep(index) {
        steps.forEach((step, i) => {
            step.style.display = i === index ? 'block' : 'none';
            step.classList.toggle('active', i === index);
        });
    }

    showStep(currentStep);

    wizard.querySelectorAll('.next-step').forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    wizard.querySelectorAll('.prev-step').forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    const submitButton = wizard.querySelector('.submit-form');
    if (submitButton) {
        submitButton.addEventListener('click', () => {
            const projectId = wizard.dataset.projectId;
            const title = wizard.querySelector('input[name="post_title"]')?.value.trim() || '';
            const content = wizard.querySelector('textarea[name="post_content"]')?.value.trim() || '';
            const city = wizard.querySelector('input[name="city"]')?.value.trim() || '';
            const areYou = wizard.querySelector('select[name="are_you"]')?.value || '';

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
                    post_content: content,
                    city: city,
                    are_you: areYou
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
    }
}

// ✅ Попробовать запустить при DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(initFormWizard, 100); // ← задержка, чтобы форма точно отрендерилась
});

// ✅ Можно вызвать вручную, если подгружается через AJAX
// initFormWizard();
