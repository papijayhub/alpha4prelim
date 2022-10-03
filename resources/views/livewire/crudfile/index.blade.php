<div>

    <table class="table table-striped">
            <thead>
                    <tr class="text-center">
                        <th>Id no.</th>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>Amount Paid</th>
                        <th>Amount Balance</th>
                        <th>Assisted By</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customera)
                    <tr>
                        <td>{{ $customera->id }}</td>
                        <td>{{ $customera->name }}</td>
                        <td>{{ $customera->address }}</td>
                        <td>{{ $customera->description }}</td>
                        <td>{{ $customera->email }}</td>
                        <td>{{ $customera->amountpaid }}</td>
                        <td>{{ $customera->amountbalance }}</td>
                        <td>{{ $customera->assisted }}</td>

                        <td>
                        <a href="{{url('edit', ['customera' => $customera->id])}}" class="btn btn-success" id="ic" title="Edit"><i class=" fa fa-gear"></i></a>
                    </td>
                    <td>
                        <a href="{{url('delete', ['customera' => $customera->id])}}" class="btn btn-danger" id="ic" title="Delete"><i class=" fa fa-trash"></i></a>
                    </td>

                    </tr>
                @endforeach
            </tbody>
       
    </table>
</div>
