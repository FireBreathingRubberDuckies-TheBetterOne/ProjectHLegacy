fetch('footer/footer.html')
.then(res => res.text())
.then(text => {
    let oldelem = document.querySelector("script#replace_with_footerbar");
    let newelem = document.createElement("footer");
    newelem.innerHTML = text;
    oldelem.parentNode.replaceChild(newelem,oldelem);
})