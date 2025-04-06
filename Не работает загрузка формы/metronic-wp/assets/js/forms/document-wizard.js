document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.form-wizard');
    if (!form) return;

    let currentStep = 1;
    const steps = form.querySelectorAll('.form-step');
    const progress = form.querySelector('.progress-bar');

    function showStep(step) {
        steps.forEach(s => s.classList.remove('active'));
        const current = form.querySelector('.step-' + step);
        if (current) current.classList.add('active');
        if (progress) progress.style.width = ((step - 1) / (steps.length - 1)) * 100 + '%';
    }

    form.querySelectorAll('.next-step').forEach(btn => {
        btn.addEventListener('click', () => {
            currentStep++;
            showStep(currentStep);
        });
    });

    form.querySelectorAll('.prev-step').forEach(btn => {
        btn.addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });
    });

    // TODO: Add submit handling (AJAX)
    form.querySelector('.submit-document')?.addEventListener('click', function () {
        alert('🚀 Document form submitted! (soon via AJAX)');
    });

    showStep(currentStep);
});
