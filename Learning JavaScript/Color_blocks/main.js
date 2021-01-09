function f() {
    let blocks = document.getElementsByClassName("block");
    for (let i = 0; i < blocks.length; i++) {
        if (blocks[i].style.backgroundColor == "green") {
            blocks[i].style.backgroundColor = "#f43030";
        }
        else {
            blocks[i].style.backgroundColor = "green";
        }
    }
 }