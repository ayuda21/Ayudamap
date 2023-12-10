document.addEventListener("DOMContentLoaded", function() {
    document.body.addEventListener('click', function(e) {
        // Check if the clicked element has the class 'toggle-sidebar-btn'
        if (e.target.classList.contains('toggle-sidebar-btn')) {
            document.body.classList.toggle('toggle-sidebar');
        }
    });
});
