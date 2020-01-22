const URL = 'http://localhost/projects/PAI2019';

let userId;

$(document).ready(function() {
    userId = $('#user-id').val();
    refreshUsers();
});

function deleteUser($userId){
    $.ajax({
        url: URL + '/?page=delete_user',
        data: {userId: $userId},
    }).done(function() {
        refreshUsers()
    });
}

function refreshUsers(){
    $.ajax({
        url: URL + '/?page=get_users',
        dataType: 'json',
        error: (err) => console.log(err),
        success: (users) => {
            $table = $('#users-table');
            $table.empty();

            users.forEach((user) => {
                if (user.Id !== userId){
                    $table.append(`
                    <tr>
                        <td>${user.Id}</td>
                        <td>${user.FirstName}</td>
                        <td>${user.LastName}</td>
                        <td>${user.Email}</td>
                        <td><button class="btn btn-danger" onclick="deleteUser(${user.Id})">Delete</button></td>
                    </tr>
                `);
                }
            })
        }
    })
}