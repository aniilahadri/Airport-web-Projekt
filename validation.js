const form = document.getElementById('form')
const firstname_input = document.getElementById('firstname-input')
const email_input = document.getElementById('email-input')
const password_input = document.getElementById('password-input')
const repeat_password_input = document.getElementById('repeat-password-input')
const error_message = document.getElementById('error-message')

const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/


form.addEventListener('submit',(e)=>{
    error_message.innerText = ''
    let errors =[]

    if(firstname_input) {
        errors= getSignupFormErrors(firstname_input.value, email_input.value, password_input.value, repeat_password_input.value)
    }
    else {
        errors= getLoginFormErrors(email_input.value, password_input.value)
    }

    if(errors.length > 0) {
        e.preventDefault()
        error_message.innerText = errors.join(". ")
    }
})

function getSignupFormErrors(firstname, email, password, repeatPassword){
    let errors=[]

    if(firstname === '' || firstname == null){
        errors.push('Firstname is required')
    }
    if(email === '' || email == null){
        errors.push('Email is required')
    }

    if(!emailRegex.test(email)) {
        errors.push("Email is not valid")
    }

    if(password === '' || password == null){
        errors.push('Password is required')
    }

    if(password.length < 8){
        errors.push('Password must have at least 8 characters')
    }

    if(password !== repeatPassword){
        errors.push('Password does not match repeated password')
    }

    return errors;
}

function getLoginFormErrors(email, password){
    let errors = []

    if(email === '' || email == null) {
        errors.push('Email is required')
    }

    if(!emailRegex.test(email)) {
        errors.push("Email is not valid")
    }

    if(password === '' || password == null) {
        errors.push('Password is required')
    }

    if(password.length < 8) {
        errors.push("Password should be at least 8 characters")
    }

    return errors;

}