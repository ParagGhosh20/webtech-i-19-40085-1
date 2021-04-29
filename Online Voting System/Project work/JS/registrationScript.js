const nameerr=document.getElementById('ern')
const emailerr=document.getElementById('ere')
const generr=document.getElementById('erg')
const locerr=document.getElementById('erl')
const passerr=document.getElementById('erp')
const err=document.getElementById('err')
const name=document.getElementById('Name')
const email=document.getElementById('Email')

const password=document.getElementById('password')
const form=document.getElementById('form')

var nr
form.addEventListener('submit',(e)=>{
     let message=[]
     
     nr=name.value
     nameerr.innerText=nr
  if(name.value==='' || name.value==null)
  {
     e.preventDefault();
  message.push('name is required')
  nameerr.innerText="* name is require "

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

