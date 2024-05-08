const form = document.querySelector(".login form");
const continueBtn = form.querySelector(".button input");
const errorText = form.querySelector(".error-txt");


continueBtn.onsubmit = (e) =>{
    e.preventDefault();
}

continueBtn.onclick = () => {
    // Start Ajax
    let xhr = new XMLHttpRequest(); // Creating XML object
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    location.href = "users.php";

                }else{
                    errorText.style.display = "block";
                    errorText.textContent = data;
                    
                    
                    
                }
            }
        }
    }

    // Have to send form data through Ajax to PHP
    let formData = new FormData(form); // Creating new FormData object
    xhr.send(formData); // Sending the form data
}
