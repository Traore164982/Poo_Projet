const form = document.createElement('form')
form.id = "form"
form.method="POST"
const inph1= document.createElement('input')
inph1.type="hidden"
inph1.setAttribute('name','controller')
inph1.value="user"
const inph2= document.createElement('input')
inph2.type="hidden"
inph2.setAttribute('name','action')
inph2.value="ajouter"
const divh2 = document.createElement('div')
divh2.id = "form-h3"
const h2 = document.createElement('h2')
h2.innerText = "Inscription"
divh2.appendChild(h2)


const div1 = document.createElement('div')
div1.className = "form-div"
const label1 = document.createElement('label')
label1.setAttribute('for', 'nom')
label1.innerText = "Nom Complet :"
const input1 = document.createElement('input')
input1.type = "text"
input1.setAttribute('name','nom')
input1.id = "nom"
div1.append(label1, input1)

const div2 = document.createElement('div')
div2.className = "form-div"
const label2 = document.createElement('label')
label2.setAttribute('for', 'login')
label2.innerText = "Login :"
const input2 = document.createElement('input')
input2.type = "text"
/* input2.max= new Date().getDay() + '-' +(new Date().getMonth()+1) + '-' + new Date().getFullYear();
 */input2.id = "login"
 input2.setAttribute('name','login')
 div2.append(label2, input2)


const div3 = document.createElement('div')
div3.className = "form-div"
const label3 = document.createElement('label')
label3.setAttribute('for', 'Password')
label3.innerText = "Password :"
const input3 = document.createElement('input')
input3.type = "password"
input3.setAttribute('name','password')
input3.id = "password"
div3.append(label3, input3)


const div4 = document.createElement('div')
div4.className = "form-div"
const label4 = document.createElement('label')
label4.setAttribute('for', 'password1')
label4.innerText = "Confirm Password :"
const input4 = document.createElement('input')
input4.setAttribute('name','password1')
input4.type = "password"
input4.id = "password1"
div4.append(label4, input4)
const input5 = document.createElement('input')
input5.type="text"
input5.style.visibility='hidden'

const btn = document.createElement('input')
btn.type = 'button'
btn.value = 'Enregister'
btn.id = 'submit'
const btn1 = document.createElement('input')
btn1.type = 'button'
btn1.value = 'Modifier'
btn1.id = 'submit1'
var imp = document.createElement('i')
imp.setAttribute('class', 'fa fa-close')
imp.id = "close"
form.append(inph1,inph2,divh2, div1, div2, div3, div4,input5, btn,btn1, imp)

document.body.append(form);


document.getElementById('btnForm');

imp.addEventListener('click',()=>{
    form.style.display="none";
    form.reset;
})

var tra = document.getElementById('tra');

tra.addEventListener('click',()=>{
    form.style.display="block"
})

