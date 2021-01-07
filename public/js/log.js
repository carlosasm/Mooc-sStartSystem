const inputs = document.querySelectorAll(".input");

function focusFunc() { 
    let parents = this.parentNode.parentNode;
    console.log(parents)
    parents.classList.add("focus")
}

function blurFunc() { 
    let parents = this.parentNode.parentNode;
    if (this.value == "") { 
    parents.classList.remove("focus")
    }
}

inputs.forEach(input => {
    input.addEventListener("focus", focusFunc)
    input.addEventListener("blur", blurFunc)
})