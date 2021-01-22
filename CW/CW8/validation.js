const ID = document.getElementById('ID')
const firstname = document.getElementById('firstname')
const lastname = document.getElementById('lastname')
const errorElement = document.getElementById('error')

contactForm.addEventListener('submit', (e) => {
	let messages = []
	if(ID.value === '' || ID.value == null){
		messages.push('ID is requried')
	}
	
	if(firstname.value === '' || firstname.value == null){
		messages.push('firstname is requried')
	}

	if(lastname.value === '' || lastname.value == null){
		messages.push('lastname is requried')
	}
	

	
	if (messages.length > 0){
		e.preventDefault()
		errorElement.innerText = messages.join(', ')
	}
	
})