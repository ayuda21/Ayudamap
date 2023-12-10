document.addEventListener('DOMContentLoaded', function () {
    fetch('api/data.php')
        .then(response => response.json())
        .then(data => {
            // Process the data and dynamically generate content
            // For each project in data, create HTML elements and append to #portfolio section
        })
        .catch(error => console.error('Error fetching data:', error));
});
