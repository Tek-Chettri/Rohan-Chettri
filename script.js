// script.js

function generateResume() {
    // Get form values
    var fullName = document.getElementById('fullName').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var educationDegree = document.getElementById('educationDegree').value;
    var educationSchool = document.getElementById('educationSchool').value;
    var educationYear = document.getElementById('educationYear').value;
    var jobTitle = document.getElementById('jobTitle').value;
    var employer = document.getElementById('employer').value;
    var workYear = document.getElementById('workYear').value;

    // Get selected template
    var templateSelect = document.getElementById('templateSelect');
    var selectedTemplate = templateSelect.options[templateSelect.selectedIndex].value;

    // Display the generated resume in the selected template
    var resumeDisplay = document.getElementById('resumeDisplay');
    resumeDisplay.innerHTML = `
        <div class="center">
            <h2>Generated Resume</h2>
            <p><strong>Name:</strong> ${fullName}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Phone:</strong> ${phone}</p>
            <h3>Education</h3>
            <p><strong>Degree:</strong> ${educationDegree}</p>
            <p><strong>School:</strong> ${educationSchool}</p>
            <p><strong>Year of Graduation:</strong> ${educationYear}</p>
            <h3>Work Experience</h3>
            <p><strong>Job Title:</strong> ${jobTitle}</p>
            <p><strong>Employer:</strong> ${employer}</p>
            <p><strong>Year of Employment:</strong> ${workYear}</p>
            <h3>Template Selected: ${selectedTemplate}</h3>
        </div>
    `;
}
function downloadResume() {
    var resumeContent = document.getElementById('resumeDisplay').innerHTML;
    var blob = new Blob([resumeContent], { type: 'word.pdf' });
    var a = document.createElement('a');
    a.href = window.URL.createObjectURL(blob);
    a.download = 'generated_resume.txt';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}