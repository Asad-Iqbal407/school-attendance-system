document.addEventListener("DOMContentLoaded", function () {
    // Example function to handle form submissions
    document.querySelectorAll('form').forEach(function(form) {
        form.addEventListener('submit', function(event) {
            // Perform any necessary client-side validation here
            // For now, we simply allow the form to submit
        });
    });

    // Example function to handle attendance marking (if implemented via AJAX)
    document.querySelectorAll('.attendance-toggle').forEach(function(button) {
        button.addEventListener('click', function() {
            const studentId = this.dataset.studentId;
            const date = this.dataset.date;
            const status = this.dataset.status;

            fetch('mark_attendance.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    student_id: studentId,
                    date: date,
                    status: status
                })
            })
            .then(response => response.json())
            .then(data => {
                // Update the UI based on the response
                if (data.success) {
                    this.textContent = status === 'Present' ? 'Mark Absent' : 'Mark Present';
                    this.dataset.status = status === 'Present' ? 'Absent' : 'Present';
                } else {
                    alert('Failed to update attendance.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating attendance.');
            });
        });
    });

    // Slider functionality
    const slides = document.querySelector('.slides');
    const images = document.querySelectorAll('.slides img');
    let index = 0;

    function showNextSlide() {
        index = (index + 1) % images.length;
        slides.style.transform = `translateX(${-index * 100 / images.length}%)`;
    }

    setInterval(showNextSlide, 3000); // Change image every 3 seconds
});
