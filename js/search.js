let rows = document.getElementsByTagName("tr");
let data = Object.entries(rows).slice(1);
let users = [];
data.forEach(function(item){
    users.push(item[1].innerText.split("\t"))
});
// console.log(data)
// console.log(users)

let header = `<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Gender</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>
</tr>`;
function buildTable(data)
{
    let table = document.getElementById('table');
    table.innerHTML = '';
    table.innerHTML += header;
    if(data.length==0){
        table.innerHTML += `<tr>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        </tr>`;
        setTimeout(function(){
            alert("No user found.");
        }, 500);
    }
    
    for(var i=0; i<data.length; i++)
    {
        let row = `<tr>
           <td>${data[i][0]}</td>
           <td>${data[i][1]}</td>
           <td>${data[i][2]}</td>
           <td>${data[i][3]}</td>
           <td>${data[i][4]}</td>
           <td>${data[i][5]}</td>
           <td><a href="edit.php?email=${data[i][3]}"><button class="editButton" id="editButton" name=${data[i][3]}>EDIT 🖊</button></a></td>
           <td><a href="delete.php?email=${data[i][3]}"><button class="deleteButton" id="deleteButton" name=${data[i][3]}>DELETE ❌</button></a></td>
        </tr>`;
        table.innerHTML += row;
    }
    // alert("successss");
}
buildTable(users);


// search by name
const searchByName = document.getElementById('searchByName');

searchByName.addEventListener('keyup', function(){
    let value = this.value;
    let data = searchTableForFirstName(value, users);
    buildTable(data);
})

function searchTableForFirstName(value, data)
{
    let filteredData = [];
    for(let n = 0; n<data.length; n++)
    {
        let firstName = data[n][0].toLowerCase();
        if(firstName.includes(value.toLowerCase()))
        {
            filteredData.push(data[n])
            // console.log(data[n])
        }
    }
    // console.log(filteredData)
    return filteredData;
}


// search by name
const searchByEmail = document.getElementById('searchByEmail');
searchByEmail.addEventListener('keyup', function(){
    let value = this.value;
    let data = searchTableForEmail(value, users);
    buildTable(data);
})

function searchTableForEmail(value, data)
{
    let filteredData = [];
    for(let n = 0; n<data.length; n++)
    {
        let email = data[n][3].toLowerCase();
        if(email.includes(value.toLowerCase()))
        {
            filteredData.push(data[n])
            // console.log(data[n])
        }
    }
    // console.log(filteredData)
    return filteredData;
}
// search by Phone Number
const searchByPhone = document.getElementById('searchByPhone');
searchByPhone.addEventListener('keyup', function(){
    let value = this.value;
    let data = searchTableForPhone(value, users);
    buildTable(data);
})

function searchTableForPhone(value, data)
{
    let filteredData = [];
    for(let n = 0; n<data.length; n++)
    {
        let phoneNumber = data[n][2].toLowerCase();
        if(phoneNumber.includes(value.toLowerCase()))
        {
            filteredData.push(data[n])
            // console.log(data[n])
        }
    }
    // console.log(filteredData)
    return filteredData;
}