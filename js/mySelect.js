
var form = document.getElementById("selectForm");
form.addEventListener("submit", function (event) {
    var selectField = document.getElementById("mySelect");
    if (selectField.value === "") {
        event.preventDefault();
        alert("Please select an option.");
    }
});

