function add(tag){
    document.getElementById('editor').value +="<"+tag+">"
    document.getElementById('editor').value +="</"+tag+">"
    document.getElementById("editor").focus();
}
