<table id="datatable" class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Full name</th>
            <th>E-mail</th>
            <th>Registration</th>
            <th data-orderable="false">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->formatted_created_at }}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
