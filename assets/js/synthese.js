// NOMBRE CARACTERES

//document.forms['testForm'].elements['textarea'].onkeyup=function(){
//    document.forms['testForm'].elements['caractere'].value=document.forms['testForm'].elements['textarea'].value.length;
// }


onch("");	
function onch(txt) {
document.form.nbCaractere.value=txt.length.toString();
timer=setTimeout("onch(document.form.textarea.value)", 100); 	
}

