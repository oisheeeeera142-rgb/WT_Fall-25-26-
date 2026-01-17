
function printReport() {
    window.print();
}
function toggleSection(id) {
    let section = document.getElementById(id);
    section.style.display =
        (section.style.display === "none") ? "block" : "none";
}
