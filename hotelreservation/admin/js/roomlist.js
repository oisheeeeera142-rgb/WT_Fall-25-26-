function toggleForm() {
    var form = document.getElementById("addRoomForm");
    var button = document.getElementById("switchmotion");

    if (form.style.display === "none" || form.style.display === "") {
        form.style.display = "block";
        button.innerHTML = "Hide Add Room";
    } else {
        form.style.display = "none";
        button.innerHTML = "Add Room";
    }
}
