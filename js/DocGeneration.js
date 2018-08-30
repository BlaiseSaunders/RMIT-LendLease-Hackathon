function validation() {
    let title = document.getElementById("title").value;
    if (title === "" || null == title) {
        alert("Please enter your title!");
        return false;
    }
    return true;
}

function getTitle() {
    let title = document.getElementById("title").value;
    document.getElementById("DocTitle").value = title;
}