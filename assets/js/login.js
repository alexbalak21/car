document.getElementById('loginForm').addEventListener('submit', checkLoginForm)

function checkLoginForm(event) {
  event.preventDefault()
  let warning = ''
  let email = document.getElementsByName('email')[0]
  let password = document.getElementsByName('password')[0]
  if (password.value == '') {
    warning = 'PASSWORD IS EMPTY !'
    password.style.borderColor = 'red'
  }
  if (email.value == '') {
    warning = 'EMAIL IS EMPTY !<br>'
    email.style.borderColor = 'red'
  }
  email.addEventListener('click', () => {
    email.style.borderColor = ''
    document.getElementById('warning').innerHTML = ''
  })
  password.addEventListener('click', () => {
    password.style.borderColor = ''
    document.getElementById('warning').innerHTML = ''
  })
  document.getElementById('warning').innerHTML = warning
  if (warning === '') document.getElementById('loginForm').submit()
}
