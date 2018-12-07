<a href="/contacts">Contacts</a>
<div class="container">
    <h3>Add user to the list</h3>
    <form action="/logicfiles/adduser.php" method="post" id="addUserForm">
        <input name="name" type="text" placeholder="name">
        <input name="surname" type="text" placeholder="surname">
        <button type="submit" form="addUserForm">Add</button>
    </form>
    <h3>Delete user from the list</h3>
    <form action="/logicfiles/deluser.php" method="post" id="delUserForm">
        <input name="id" type="text" placeholder="Enter ID">
        <button type="submit" form="delUserForm">Del by ID</button>
    </form>
    <h3>Edit users info</h3>
    <form action="/logicfiles/edituser.php" method="post" id="editUserForm">
        <input name="id" type="text" placeholder="id">
        <input name="name" type="text" placeholder="new(old)name">
        <input name="surname" type="text" placeholder="new(old)surname">
        <button type="submit" form="editUserForm">Edit</button>
</form>
    <div class="show_users">
        <h3>Users list</h3>
        <?=$content?>
    </div>
</div>