let rows = document.getElementsByTagName("tr");
let data = Object.entries(rows).slice(1);
let users = [];
data.forEach(function(item){
    users.push(item[1].innerText.split("\t"))
});
// console.log(data)
// console.log(users)

let header = `<tr>
<th data-column="firstName" data-order="descending" name="header">First Name</th>
<th data-column="lastName" data-order="descending" name="header">Last Name</th>
<th data-column="phoneNumber" data-order="descending" name="header">Phone Number</th>
<th data-column="emailAddress" data-order="descending" name="header">Email</th>
<th>Gender</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>
</tr>`;
let table = document.getElementById('table');
function buildTable(data)
{
    table.innerHTML = '';
    // table.innerHTML += header;
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
        // alert("successss");
    }
}
buildTable(users);


// search by name
const searchByName = document.getElementById('searchByName');

searchByName.addEventListener('keyup', function(){
    let value = this.value;
    let data = searchTableForFirstName(value, users);
    console.log(data)
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


//sorting
let headers = document.getElementsByName('header');
headers.forEach(header => {
    header.addEventListener('click', (e)=>{
        // alert("clicked");
        let column = e.target.attributes[0].textContent;
        let order = e.target.attributes[1].textContent;
        // let text = e.path[0].innerHTML;
        // text = text.substring(0, text.length-1)
        let feilds = {"firstName":0, "lastName":1, "phoneNumber":2, "emailAddress":3};
        if(order == 'descending')
        {
            e.target.attributes[1].textContent = 'ascending';
            users = users.sort((a, b) => a[feilds[column]].toLowerCase() > b[feilds[column]].toLowerCase() ? 1 : -1) 
            // text += '&#9660';
        }
        else
        {
            e.target.attributes[1].textContent = 'descending';
            users = users.sort((a, b) => a[column] < b[column] ? 1 : -1)
            // text += '&#9650';
        }
        // e.path[0].innerText=text;
        buildTable(users);
        console.log(e)
    })
})
