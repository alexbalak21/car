document.getElementById('registerForm').addEventListener('submit', checkRegisterForm)

function checkRegisterForm(event) {
  event.preventDefault()
  let warning = ''
  let email = document.getElementsByName('email')[0]
  let password1 = document.getElementsByName('password1')[0]
  let password2 = document.getElementsByName('password2')[0]
  let firstname = document.getElementsByName('firstname')[0]
  let lastname = document.getElementsByName('lastname')[0]
  let phone = document.getElementsByName('phone')[0]

  if (password1.value == '') {
    password1.classList.add('inputError')
    warning = 'PASSWORD IS EMPTY !'
  }
  if (password2.value == '') {
    warning = 'CONFIRM PASSWORD PLEASE'
    password1.classList.add('inputError')
  }
  if (password1.value !== password2.value) {
    password1.classList.add('inputError')
    password2.classList.add('inputError')
    warning = '<br>PASSWORDS DONT MATCH !'
  }
  if (email.value == '') {
    warning = 'email IS EMPTY !<br>'
    email.classList.add('inputError')
  }
  if (firstname.value == '') {
    warning = 'FIRSTNAME IS EMPTY !<br>'
    firstname.style.borderColor = 'red'
  }
  if (lastname.value == '') {
    warning = 'FIRSTNAME IS EMPTY !<br>'
    lastname.style.borderColor = 'red'
  }
  if (phone.value == '') {
    warning = 'FIRSTNAME IS EMPTY !<br>'
    phone.style.borderColor = 'red'
  }
  document.getElementById('warning').innerHTML = warning
  if (warning === '') document.getElementById('registerForm').submit()
}
