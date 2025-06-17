button = document.getElementsByClassName("buttons");
for (i = 0; i < button[0].children.length; i++) {
    button[0].children[i].addEventListener('click', function(event) {
        console.log(event.target.innerText);
    });
}

document.querySelectorAll("h1").forEach(varName=>{
    varName.onclick = function(){
        alert(this.innerHTML);
    }
});

document.querySelectorAll("button").forEach(varName=>{
    varName.onclick = function(){
        document.querySelector('h2').innerText = "Hi!"
        this.style.backgroundColor = "Black";
        this.style.color = "White";
        this.style.padding = "10px";
        this.style.borderRadius = "10px";
    }

});