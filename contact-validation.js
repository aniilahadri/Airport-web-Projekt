const form = document.getElementById('contact')
const email = document.getElementById('email')
const message = document.getElementById('message')
const error_message = document.getElementById('error-message')


const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/

form.addEventListener("submit", (e) => {
    error_message.innerText = ''
    let errors = []
        
    if(email.value === '' || email.value == null) {
        errors.push('Email is required')
    }

    if(!emailRegex.test(email.value)) {
        errors.push("Email is not valid")
    }
    
    if(message.value === '' || message.value == null) {
        errors.push('Message is required')
    }

    if(errors.length > 0) {
        e.preventDefault()
        error_message.innerText = errors.join(". ")
    }
})