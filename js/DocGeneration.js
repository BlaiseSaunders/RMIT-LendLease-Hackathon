let title;

function validation() {
    title = document.getElementById("title").value;
    if (title === "" || null == title) {
        alert("Please enter your title!");
        return false;
    }
    return true;
}

function getTitle() {
    document.getElementById("DocTitle").value = title;
}