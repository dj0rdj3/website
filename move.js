dragElement(document.getElementById("contact"));

function dragElement(elmnt) {
    let pos1 = 0,
        pos2 = 0,
        pos3 = 0,
        pos4 = 0;
    document.getElementById(elmnt.id + "hd").onmousedown = dragMouseDown;

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        elmnt.style.left = Math.max(0, Math.min(document.body.clientWidth - elmnt.offsetWidth, elmnt.offsetLeft - pos1)) + "px";
        elmnt.style.top = Math.max(0, Math.min(document.body.clientHeight - elmnt.offsetHeight, elmnt.offsetTop - pos2)) + "px";
    }

    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
    }
}