const emailerr=document.getElementById('ere')
const passerr=document.getElementById('erp')

const email=document.getElementById('Email')
const password=document.getElementById('password')

const form=document.getElementById('form')

var nr
form.addEventListener('submit',(e)=>{
     let message=[]
  if(email.value==='' || email.value==null)
  {
     e.preventDefault();
  message.push('name is required')
  emailerr.innerText="* insert your valid require "
  }
  if(password.value.length<=6)
  {
     e.preventDefault();
      message.push('PASSWORD must be longer then 6')
      passerr.innerText="* password is required & must be more then 8 char"
  }
  if(email.value==='' || email.value==null)
  {
    e.preventDefault();
    emailerr.innerText="* email is require"
  }

})