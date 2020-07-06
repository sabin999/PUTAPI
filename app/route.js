// FETCH DATA
fetch('show.php').then((res) => res.json())
.then(response => {
	console.log(response);
	let output = '';
	for(let i in response){
		output += `<tr>
			<td>${response[i].ID}</td>
			<td>${response[i].Name}</td>
			</tr>`;
	}

	document.querySelector('.tbody').innerHTML = output;
}).catch(error => console.log(error));

// DATA TABLES
$(document).ready(function(){
	$('.table').DataTable();
})