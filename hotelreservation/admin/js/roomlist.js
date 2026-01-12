
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
document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('#addRoomForm form');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var roomNumber = form.roomNumber.value;
        var floor = form.floor.value;
        var view = form.view.value;
        var type = form.type.value;
        var status = form.status.value;
        var roomsDiv = document.querySelector('.rooms');
        var newBox = document.createElement('div');
        newBox.className = 'room-box';
        newBox.innerHTML = `
            <p><b>Room:</b> ${roomNumber}</p>
            <p><b>Floor:</b> ${floor}</p>
            <p><b>View:</b> ${view}</p>
            <p><b>Type:</b> ${type}</p>
            <p><b>Status:</b> ${status}</p>
            <div class="button">
                <button class="editBtn">Edit</button>
                <button class="deleteBtn">Delete</button>
            </div>
        `;
        roomsDiv.appendChild(newBox);

        form.reset();
        document.getElementById("addRoomForm").style.display = "none";
        document.getElementById("switchmotion").innerHTML = "Add Room";
    });
});
