document.querySelectorAll("btn-group").forEach(varName => {
    varName.onclick = function() {
        alert(this.innerHTML);
    }
});


