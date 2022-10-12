function overlayOn(elementId) {
    document.getElementById(elementId).style.display = "block";
    setTimeout(()=>{
        document.getElementById(elementId).style.opacity = 1;
    },20)
}

function overlayOff(elementId) {
    document.getElementById(elementId).style.opacity = 0;

    setTimeout(()=>{
        document.getElementById(elementId).style.display = "none";
    },500)
}

const overlayElements = document.getElementsByClassName("overlay");

window.addEventListener("load", ()=>{
    for(var i=0;i<overlayElements.length;i++){
        const element = overlayElements[i];
        const firstElementChild = element.firstElementChild
        const elementId = element.id;
        firstElementChild.addEventListener("click", (overlayElement)=>{
            overlayOff(elementId)
        })
    }
})
