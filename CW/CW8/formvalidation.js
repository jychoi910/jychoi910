const ID = document.getElementByID('ID')
const FirstName = document.getElementByID('FirstName')
const LastName = document.getElementByID('LastName')
const form = document.getElementByID('form')
const errorElement = document.getElementByID('error')
 
form.addEventListener('submit'), (e) => {
	let messages = []
	
	if(ID.value == '' || ID.value == null){
		messages.push('Please Enter an ID')
	}
		
	if(firstname.value == '' || firstname.value == null){
		messages.push('Please Enter a First Name')
	}
		
	if(lastname.value == '' || lastname.value == null){
		messages.push('Please Enter an Last Name')
	}
		
	if(messages.length > 0){
		e.preventDefault()
		errorElement.innerText = messages.join(', ')
	}
		
}
	
