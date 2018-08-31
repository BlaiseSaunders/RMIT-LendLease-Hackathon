function docFilter() {
    let filter = document.getElementById("searchInput").value;
    let tableVal = document.getElementById("docTable");

    let tempStr;
    for (let i = 1, j = tableVal.rows.length; i < j; i++) {
        tempStr = tableVal.rows[i].cells[0].innerHTML;
        if (!tempStr.includes(filter)) {
            document.getElementById("docTable").rows[i].style.display = 'none';
        } else {
            document.getElementById("docTable").rows[i].style.display = '';
        }
    }
}