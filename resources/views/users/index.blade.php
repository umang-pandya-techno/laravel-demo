<!-- Include DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">

<!-- Include jQuery (required by DataTables) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

<table id="users-table" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <!-- Add more columns as needed -->
        </tr>
        @endforeach
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#users-table').DataTable({
        paging: true, // Enable pagination
        searching: true, // Enable search box
        ordering: true, // Enable sorting
        order: [[0, 'asc']], // Initial sorting column (0-indexed), 'asc' for ascending order
        responsive: true // Enable responsive design for small screens
    });
});
</script>
