function login() {
    // Get the username and password
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // You should perform authentication on the server-side
    // For simplicity, let's use a hardcoded admin and employee
    if (username === "admin" && password === "adminpass") {
        redirectToAdminPanel();
    } else if (username === "employee" && password === "employeepass") {
        redirectToEmployeePanel();
    } else {
        alert("Invalid username or password");
    }
}

function redirectToAdminPanel() {
    window.location.href = "admin_panel.php";
}

function redirectToEmployeePanel() {
    window.location.href = "employee_panel.php";
}
