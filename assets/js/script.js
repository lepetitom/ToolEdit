const form = document.getElementById('testForm')

form.addEventListener('submit', function(){
    event.preventDefault();
    console.log('submit');
    
    var formData = new FormData(document.getElementById('testForm'));
    formData.append("content", "test")
    console.log(formData)
    fetch("main.py", {
      method: "POST",
      body: formData,
    })
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      console.log(data);
    })
    .catch(function(error) {
      console.log(error);
    });
})