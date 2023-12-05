/* Sending a form */

const btn = document.querySelector('.form__submit');
btn.onclick = (e) => {
  e.preventDefault()
  let x = document.querySelector('#name').value
  if (x === "") {
    document.querySelector('.form--error').textContent = "Please enter your name";
    return false;
  }
  x = document.querySelector('#email').value;
  if (x === "") {
    document.querySelector('.form--error').textContent = "Please enter your E-mail";
    return false;
  } else {
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(x)) {
      document.querySelector('.form--error').textContent = "Incorrect E-mail";
      return false;
    }
  }
  x = document.querySelector('#phone').value
  if (x === "") {
    document.querySelector('.form--error').textContent = "Please enter your phone number";
    return false;
  }
  x = document.querySelector('#message').value
  if (x === "") {
    document.querySelector('.form--error').textContent = "Please write your message";
    return false;
  }
  const params = new FormData(document.querySelector('.form'))

  fetch('../wp-content/themes/teamtech/mail.php', {
    method: 'POST',
    body: params
  }).then(
    response => {
      return response.text()
    }).then(
      () => {
        document.querySelector('.form--error').textContent = ''
        document.querySelector('.form--error').classList.remove('form--error--warning');
        document.querySelector('.form--error').textContent = 'The message has been successfully sent. An expert will contact you in a few minutes';
        setTimeout(function () {
          document.querySelector('.form').reset()
          document.querySelector('.form--error').textContent = '';
          document.querySelector('.form--error').classList.add('form--error--warning');
        }, 10000)
      }
    )
}